<?php
/**
 * ContactInformation
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
 * ContactInformation Class Doc Comment
 *
 * @category Class
 * @package  Here
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContactInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone' => '\Here\Model\Contact[]',
        'mobile' => '\Here\Model\Contact[]',
        'toll_free' => '\Here\Model\Contact[]',
        'fax' => '\Here\Model\Contact[]',
        'www' => '\Here\Model\Contact[]',
        'email' => '\Here\Model\Contact[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone' => null,
        'mobile' => null,
        'toll_free' => null,
        'fax' => null,
        'www' => null,
        'email' => null
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
        'phone' => 'phone',
        'mobile' => 'mobile',
        'toll_free' => 'tollFree',
        'fax' => 'fax',
        'www' => 'www',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone' => 'setPhone',
        'mobile' => 'setMobile',
        'toll_free' => 'setTollFree',
        'fax' => 'setFax',
        'www' => 'setWww',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone' => 'getPhone',
        'mobile' => 'getMobile',
        'toll_free' => 'getTollFree',
        'fax' => 'getFax',
        'www' => 'getWww',
        'email' => 'getEmail'
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
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['toll_free'] = $data['toll_free'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['www'] = $data['www'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
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
     * Gets phone
     *
     * @return Contact[]|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param Contact[]|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return Contact[]|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param Contact[]|null $mobile mobile
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets toll_free
     *
     * @return Contact[]|null
     */
    public function getTollFree()
    {
        return $this->container['toll_free'];
    }

    /**
     * Sets toll_free
     *
     * @param Contact[]|null $toll_free toll_free
     *
     * @return self
     */
    public function setTollFree($toll_free)
    {
        $this->container['toll_free'] = $toll_free;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return Contact[]|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param Contact[]|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets www
     *
     * @return Contact[]|null
     */
    public function getWww()
    {
        return $this->container['www'];
    }

    /**
     * Sets www
     *
     * @param Contact[]|null $www www
     *
     * @return self
     */
    public function setWww($www)
    {
        $this->container['www'] = $www;

        return $this;
    }

    /**
     * Gets email
     *
     * @return Contact[]|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param Contact[]|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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


