<?php

namespace Here;

class Service
{
    const URL_GEOCODE = 'https://geocoder.api.here.com/6.2/geocode.json';
    const URL_REVERSE_GEOCODE = 'https://reverse.geocoder.cit.api.here.com/6.2/reversegeocode.json';
    const URL_MULTI_REVERSE_GEOCODE = 'https://reverse.geocoder.cit.api.here.com/6.2/multi-reversegeocode.json';
    const URL_LANDMARK_GEOCODE = 'https://geocoder.api.here.com/6.2/search.json';

    protected $_config = [];

    /**
     * @param string $url
     * @param array $data
     * @return mixed
     * @throws Exception
     * @throws RequestException
     */
    protected function _request($url, array $data)
    {
        $data = array_merge($data, [
            'app_id' => $this->_config['app_id'],
            'app_code' => $this->_config['app_key'],
        ]);
        $curl = curl_init();
        if(!curl_setopt_array($curl, [
            CURLOPT_POST => 0,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => 1,
        ])) {
            throw new Exception('Failed to set options on CURL resource');
        }
        curl_setopt($curl, CURLOPT_URL, $url.'?'.http_build_query($data));
        $result = curl_exec($curl);
        $error = curl_error($curl);
        $errNo = curl_errno($curl);
        curl_close($curl);
        if($error) {
            throw new RequestException($error, $errNo);
        }
        return json_decode($result, false, 512, JSON_UNESCAPED_UNICODE);
    }

    public function __construct(array $config)
    {
        $this->_config = $config;
        foreach(['app_id', 'app_key'] as $r) {
            if(!array_key_exists($r, $config)) {
                throw new \InvalidArgumentException('Missing config key: '.$r);
            }
        }
    }

    /**
     * @param string $address
     * @return Response
     * @throws Exception
     * @throws RequestException
     */
    public function geocode($address)
    {
        $parsed = $this->_request(self::URL_GEOCODE, [
            'searchtext' => $address,
        ]);
        return new Response($parsed->Response);
    }

    /**
     * @param float $latitude
     * @param float $longitude
     * @param string $level
     * @return Response
     * @throws Exception
     * @throws RequestException
     */
    public function reverse($latitude, $longitude, $level='city')
    {
        if(!in_array($level, ['country', 'state', 'county', 'city', 'district', 'postalCode'])) {
            throw new \InvalidArgumentException('invalid $level: '.$level);
        }
        $parsed = $this->_request(self::URL_REVERSE_GEOCODE, [
            'pos' => $latitude.','.$longitude.',0',
            'prox' => $latitude.','.$longitude.',500',
            'level' => $level,
            'mode' => 'retrieveAreas',
        ]);
        if(!property_exists($parsed, 'Response')) {
            throw new Exception($parsed->type.'.'.$parsed->subtype.': '.$parsed->Details);
        }
        return new Response($parsed->Response);
    }
}