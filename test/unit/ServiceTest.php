<?php

class ServiceTest extends BaseTest
{

    public function provideAddresses()
    {
        return [
            ['hungary, budapest, krisztina körút 99.'],
            ['hungary, győr'],
            ['spain, toledo'],
            ['us, toledo'],
        ];
    }

    /**
     * @dataProvider provideAddresses
     * @param string $address
     * @throws \Here\Exception
     * @throws \Here\RequestException
     */
    public function testGeocode($address)
    {
        $r = self::$service->geocode($address);
        $this->assertNotNull($r);
        $a = $r->toArray();
        $this->assertArrayHasKey('postal_code', $a);
    }

    public function provideCoordinates()
    {
        return [
            [47.495202, 19.035072, 'postalCode'],
            [47.495202, 19.035072, 'district'],
            [47.495202, 19.035072, 'city'],
            [47.495202, 19.035072, 'country'],
        ];
    }

    /**
     * @dataProvider provideCoordinates
     * @param double $latitude
     * @param double $longitude
     * @param string $level
     * @throws \Here\Exception
     * @throws \Here\RequestException
     */
    public function testReverse($latitude, $longitude, $level)
    {
        $r = self::$service->reverse($latitude, $longitude, $level);
        $this->assertNotNull($r);
        $a = $r->toArray();
        $this->assertArrayHasKey('postal_code', $a);
    }
}