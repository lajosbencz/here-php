<?php

namespace Here;

class Response
{
    protected $_object;
    protected $_result;

    public function __construct(\stdClass $object)
    {
        $this->_object = $object;
        $this->_result = $object->View[0]->Result[0];
    }

    public function getMatchType()
    {
        if(property_exists($this->_result, 'MatchType')) {
            return $this->_result->MatchType;
        }
        if(property_exists($this->_result, 'MatchLevel')) {
            return 'level_' . $this->_result->MatchLevel;
        }
        return null;
    }

    public function getLocationId()
    {
        return $this->_result->Location->LocationId;
    }

    public function getLocationType()
    {
        return $this->_result->Location->LocationType;
    }

    public function getLatitude()
    {
        return $this->_result->Location->DisplayPosition->Latitude;
    }

    public function getLongitude()
    {
        return $this->_result->Location->DisplayPosition->Longitude;
    }

    public function getAddress()
    {
        return $this->_result->Location->Address;
    }

    public function getLabel()
    {
        return $this->_result->Location->Address->Label;
    }

    public function getCountry()
    {
        return $this->_result->Location->Address->Country;
    }

    public function getState()
    {
        return $this->_result->Location->Address->State;
    }

    public function getCounty()
    {
        return $this->_result->Location->Address->County;
    }

    public function getCity()
    {
        return $this->_result->Location->Address->City;
    }

    public function getDistrict()
    {
        if(property_exists($this->_result->Location->Address, 'District')) {
            return $this->_result->Location->Address->District;
        }
        return null;
    }

    public function getStreet()
    {
        if(property_exists($this->_result->Location->Address, 'Street')) {
            return $this->_result->Location->Address->Street;
        }
        return null;
    }

    public function getHouseNumber()
    {
        if(property_exists($this->_result->Location->Address, 'HouseNumber')) {
            return $this->_result->Location->Address->HouseNumber;
        }
        return null;
    }

    public function getPostalCode()
    {
        if(property_exists($this->_result->Location->Address, 'PostalCode')) {
            return $this->_result->Location->Address->PostalCode;
        }
        return null;
    }

    public function toArray()
    {
        return [
            'match_type' => $this->getMatchType(),
            'location_id' => $this->getLocationId(),
            'location_type' => $this->getLocationType(),
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
            'label' => $this->getLabel(),
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'county' => $this->getCounty(),
            'city' => $this->getCity(),
            'district' => $this->getDistrict(),
            'street' => $this->getStreet(),
            'house_number' => $this->getHouseNumber(),
            'postal_code' => $this->getPostalCode(),
        ];
    }
}