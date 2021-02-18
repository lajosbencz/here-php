<?php
/**
 * MapView
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
 * MapView Class Doc Comment
 *
 * @category Class
 * @package  Here
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class MapView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MapView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'west' => 'double',
        'south' => 'double',
        'east' => 'double',
        'north' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'west' => 'double',
        'south' => 'double',
        'east' => 'double',
        'north' => 'double'
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
        'west' => 'west',
        'south' => 'south',
        'east' => 'east',
        'north' => 'north'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'west' => 'setWest',
        'south' => 'setSouth',
        'east' => 'setEast',
        'north' => 'setNorth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'west' => 'getWest',
        'south' => 'getSouth',
        'east' => 'getEast',
        'north' => 'getNorth'
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
        $this->container['west'] = $data['west'] ?? null;
        $this->container['south'] = $data['south'] ?? null;
        $this->container['east'] = $data['east'] ?? null;
        $this->container['north'] = $data['north'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['west'] === null) {
            $invalidProperties[] = "'west' can't be null";
        }
        if ($this->container['south'] === null) {
            $invalidProperties[] = "'south' can't be null";
        }
        if ($this->container['east'] === null) {
            $invalidProperties[] = "'east' can't be null";
        }
        if ($this->container['north'] === null) {
            $invalidProperties[] = "'north' can't be null";
        }
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
     * Gets west
     *
     * @return double
     */
    public function getWest()
    {
        return $this->container['west'];
    }

    /**
     * Sets west
     *
     * @param double $west Longitude of the western-side of the box. For example: \"8.80068\"
     *
     * @return self
     */
    public function setWest($west)
    {
        $this->container['west'] = $west;

        return $this;
    }

    /**
     * Gets south
     *
     * @return double
     */
    public function getSouth()
    {
        return $this->container['south'];
    }

    /**
     * Sets south
     *
     * @param double $south Latitude of the southern-side of the box. For example: \"52.19333\"
     *
     * @return self
     */
    public function setSouth($south)
    {
        $this->container['south'] = $south;

        return $this;
    }

    /**
     * Gets east
     *
     * @return double
     */
    public function getEast()
    {
        return $this->container['east'];
    }

    /**
     * Sets east
     *
     * @param double $east Longitude of the eastern-side of the box. For example: \"8.8167\"
     *
     * @return self
     */
    public function setEast($east)
    {
        $this->container['east'] = $east;

        return $this;
    }

    /**
     * Gets north
     *
     * @return double
     */
    public function getNorth()
    {
        return $this->container['north'];
    }

    /**
     * Sets north
     *
     * @param double $north Latitude of the northern-side of the box. For example: \"52.19555\"
     *
     * @return self
     */
    public function setNorth($north)
    {
        $this->container['north'] = $north;

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

