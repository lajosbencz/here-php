<?php
/**
 * PhonemesSection
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Here
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Geocoding and Search API v1
 *
 * This document describes the Geocoding and Search API.
 *
 * The version of the OpenAPI document: 1.59
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Here\Model;

use \ArrayAccess;
use \Here\ObjectSerializer;

/**
 * PhonemesSection Class Doc Comment
 *
 * @category Class
 * @package  Here
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PhonemesSection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PhonemesSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'place_name' => '\Here\Model\Phoneme[]',
        'country_name' => '\Here\Model\Phoneme[]',
        'state' => '\Here\Model\Phoneme[]',
        'county' => '\Here\Model\Phoneme[]',
        'city' => '\Here\Model\Phoneme[]',
        'district' => '\Here\Model\Phoneme[]',
        'subdistrict' => '\Here\Model\Phoneme[]',
        'street' => '\Here\Model\Phoneme[]',
        'block' => '\Here\Model\Phoneme[]',
        'subblock' => '\Here\Model\Phoneme[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'place_name' => null,
        'country_name' => null,
        'state' => null,
        'county' => null,
        'city' => null,
        'district' => null,
        'subdistrict' => null,
        'street' => null,
        'block' => null,
        'subblock' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'place_name' => 'placeName',
        'country_name' => 'countryName',
        'state' => 'state',
        'county' => 'county',
        'city' => 'city',
        'district' => 'district',
        'subdistrict' => 'subdistrict',
        'street' => 'street',
        'block' => 'block',
        'subblock' => 'subblock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'place_name' => 'setPlaceName',
        'country_name' => 'setCountryName',
        'state' => 'setState',
        'county' => 'setCounty',
        'city' => 'setCity',
        'district' => 'setDistrict',
        'subdistrict' => 'setSubdistrict',
        'street' => 'setStreet',
        'block' => 'setBlock',
        'subblock' => 'setSubblock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'place_name' => 'getPlaceName',
        'country_name' => 'getCountryName',
        'state' => 'getState',
        'county' => 'getCounty',
        'city' => 'getCity',
        'district' => 'getDistrict',
        'subdistrict' => 'getSubdistrict',
        'street' => 'getStreet',
        'block' => 'getBlock',
        'subblock' => 'getSubblock'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['place_name'] = $data['place_name'] ?? null;
        $this->container['country_name'] = $data['country_name'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['subdistrict'] = $data['subdistrict'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
        $this->container['subblock'] = $data['subblock'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets place_name
     *
     * @return Phoneme[]|null
     */
    public function getPlaceName()
    {
        return $this->container['place_name'];
    }

    /**
     * Sets place_name
     *
     * @param Phoneme[]|null $place_name Phonemes for the name of the place.
     *
     * @return self
     */
    public function setPlaceName($place_name)
    {
        $this->container['place_name'] = $place_name;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return Phoneme[]|null
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param Phoneme[]|null $country_name Phonemes for the county name.
     *
     * @return self
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets state
     *
     * @return Phoneme[]|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param Phoneme[]|null $state Phonemes for the state name.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets county
     *
     * @return Phoneme[]|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param Phoneme[]|null $county Phonemes for the county name.
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets city
     *
     * @return Phoneme[]|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param Phoneme[]|null $city Phonemes for the city name.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets district
     *
     * @return Phoneme[]|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param Phoneme[]|null $district Phonemes for the district name.
     *
     * @return self
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets subdistrict
     *
     * @return Phoneme[]|null
     */
    public function getSubdistrict()
    {
        return $this->container['subdistrict'];
    }

    /**
     * Sets subdistrict
     *
     * @param Phoneme[]|null $subdistrict Phonemes for the subdistrict name.
     *
     * @return self
     */
    public function setSubdistrict($subdistrict)
    {
        $this->container['subdistrict'] = $subdistrict;

        return $this;
    }

    /**
     * Gets street
     *
     * @return Phoneme[]|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param Phoneme[]|null $street Phonemes for the street name.
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets block
     *
     * @return Phoneme[]|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param Phoneme[]|null $block Phonemes for the block.
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets subblock
     *
     * @return Phoneme[]|null
     */
    public function getSubblock()
    {
        return $this->container['subblock'];
    }

    /**
     * Sets subblock
     *
     * @param Phoneme[]|null $subblock Phonemes for the sub-block.
     *
     * @return self
     */
    public function setSubblock($subblock)
    {
        $this->container['subblock'] = $subblock;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


