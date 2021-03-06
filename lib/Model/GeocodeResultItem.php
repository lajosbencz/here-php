<?php
/**
 * GeocodeResultItem
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
 * GeocodeResultItem Class Doc Comment
 *
 * @category Class
 * @package  Here
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GeocodeResultItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeocodeResultItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'id' => 'string',
        'result_type' => 'string',
        'house_number_type' => 'string',
        'address_block_type' => 'string',
        'locality_type' => 'string',
        'administrative_area_type' => 'string',
        'address' => '\Here\Model\Address',
        'position' => '\Here\Model\DisplayResponseCoordinate',
        'access' => '\Here\Model\AccessResponseCoordinate[]',
        'distance' => 'int',
        'map_view' => '\Here\Model\MapView',
        'categories' => '\Here\Model\Category[]',
        'food_types' => '\Here\Model\Category[]',
        'house_number_fallback' => 'bool',
        'scoring' => '\Here\Model\Scoring',
        'parsing' => '\Here\Model\Parsing'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'id' => null,
        'result_type' => null,
        'house_number_type' => null,
        'address_block_type' => null,
        'locality_type' => null,
        'administrative_area_type' => null,
        'address' => null,
        'position' => null,
        'access' => null,
        'distance' => 'int64',
        'map_view' => null,
        'categories' => null,
        'food_types' => null,
        'house_number_fallback' => null,
        'scoring' => null,
        'parsing' => null
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
        'title' => 'title',
        'id' => 'id',
        'result_type' => 'resultType',
        'house_number_type' => 'houseNumberType',
        'address_block_type' => 'addressBlockType',
        'locality_type' => 'localityType',
        'administrative_area_type' => 'administrativeAreaType',
        'address' => 'address',
        'position' => 'position',
        'access' => 'access',
        'distance' => 'distance',
        'map_view' => 'mapView',
        'categories' => 'categories',
        'food_types' => 'foodTypes',
        'house_number_fallback' => 'houseNumberFallback',
        'scoring' => 'scoring',
        'parsing' => 'parsing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'id' => 'setId',
        'result_type' => 'setResultType',
        'house_number_type' => 'setHouseNumberType',
        'address_block_type' => 'setAddressBlockType',
        'locality_type' => 'setLocalityType',
        'administrative_area_type' => 'setAdministrativeAreaType',
        'address' => 'setAddress',
        'position' => 'setPosition',
        'access' => 'setAccess',
        'distance' => 'setDistance',
        'map_view' => 'setMapView',
        'categories' => 'setCategories',
        'food_types' => 'setFoodTypes',
        'house_number_fallback' => 'setHouseNumberFallback',
        'scoring' => 'setScoring',
        'parsing' => 'setParsing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'id' => 'getId',
        'result_type' => 'getResultType',
        'house_number_type' => 'getHouseNumberType',
        'address_block_type' => 'getAddressBlockType',
        'locality_type' => 'getLocalityType',
        'administrative_area_type' => 'getAdministrativeAreaType',
        'address' => 'getAddress',
        'position' => 'getPosition',
        'access' => 'getAccess',
        'distance' => 'getDistance',
        'map_view' => 'getMapView',
        'categories' => 'getCategories',
        'food_types' => 'getFoodTypes',
        'house_number_fallback' => 'getHouseNumberFallback',
        'scoring' => 'getScoring',
        'parsing' => 'getParsing'
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

    const RESULT_TYPE_ADMINISTRATIVE_AREA = 'administrativeArea';
    const RESULT_TYPE_LOCALITY = 'locality';
    const RESULT_TYPE_STREET = 'street';
    const RESULT_TYPE_INTERSECTION = 'intersection';
    const RESULT_TYPE_ADDRESS_BLOCK = 'addressBlock';
    const RESULT_TYPE_HOUSE_NUMBER = 'houseNumber';
    const RESULT_TYPE_PLACE = 'place';
    const RESULT_TYPE_POSTAL_CODE_POINT = 'postalCodePoint';
    const HOUSE_NUMBER_TYPE_PA = 'PA';
    const HOUSE_NUMBER_TYPE_INTERPOLATED = 'interpolated';
    const ADDRESS_BLOCK_TYPE_BLOCK = 'block';
    const ADDRESS_BLOCK_TYPE_SUBBLOCK = 'subblock';
    const LOCALITY_TYPE_POSTAL_CODE = 'postalCode';
    const LOCALITY_TYPE_SUBDISTRICT = 'subdistrict';
    const LOCALITY_TYPE_DISTRICT = 'district';
    const LOCALITY_TYPE_CITY = 'city';
    const ADMINISTRATIVE_AREA_TYPE_COUNTY = 'county';
    const ADMINISTRATIVE_AREA_TYPE_STATE = 'state';
    const ADMINISTRATIVE_AREA_TYPE_COUNTRY = 'country';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultTypeAllowableValues()
    {
        return [
            self::RESULT_TYPE_ADMINISTRATIVE_AREA,
            self::RESULT_TYPE_LOCALITY,
            self::RESULT_TYPE_STREET,
            self::RESULT_TYPE_INTERSECTION,
            self::RESULT_TYPE_ADDRESS_BLOCK,
            self::RESULT_TYPE_HOUSE_NUMBER,
            self::RESULT_TYPE_PLACE,
            self::RESULT_TYPE_POSTAL_CODE_POINT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHouseNumberTypeAllowableValues()
    {
        return [
            self::HOUSE_NUMBER_TYPE_PA,
            self::HOUSE_NUMBER_TYPE_INTERPOLATED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressBlockTypeAllowableValues()
    {
        return [
            self::ADDRESS_BLOCK_TYPE_BLOCK,
            self::ADDRESS_BLOCK_TYPE_SUBBLOCK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocalityTypeAllowableValues()
    {
        return [
            self::LOCALITY_TYPE_POSTAL_CODE,
            self::LOCALITY_TYPE_SUBDISTRICT,
            self::LOCALITY_TYPE_DISTRICT,
            self::LOCALITY_TYPE_CITY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdministrativeAreaTypeAllowableValues()
    {
        return [
            self::ADMINISTRATIVE_AREA_TYPE_COUNTY,
            self::ADMINISTRATIVE_AREA_TYPE_STATE,
            self::ADMINISTRATIVE_AREA_TYPE_COUNTRY,
        ];
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['result_type'] = $data['result_type'] ?? null;
        $this->container['house_number_type'] = $data['house_number_type'] ?? null;
        $this->container['address_block_type'] = $data['address_block_type'] ?? null;
        $this->container['locality_type'] = $data['locality_type'] ?? null;
        $this->container['administrative_area_type'] = $data['administrative_area_type'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['access'] = $data['access'] ?? null;
        $this->container['distance'] = $data['distance'] ?? null;
        $this->container['map_view'] = $data['map_view'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['food_types'] = $data['food_types'] ?? null;
        $this->container['house_number_fallback'] = $data['house_number_fallback'] ?? null;
        $this->container['scoring'] = $data['scoring'] ?? null;
        $this->container['parsing'] = $data['parsing'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        $allowedValues = $this->getResultTypeAllowableValues();
        if (!is_null($this->container['result_type']) && !in_array($this->container['result_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result_type', must be one of '%s'",
                $this->container['result_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHouseNumberTypeAllowableValues();
        if (!is_null($this->container['house_number_type']) && !in_array($this->container['house_number_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'house_number_type', must be one of '%s'",
                $this->container['house_number_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAddressBlockTypeAllowableValues();
        if (!is_null($this->container['address_block_type']) && !in_array($this->container['address_block_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_block_type', must be one of '%s'",
                $this->container['address_block_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLocalityTypeAllowableValues();
        if (!is_null($this->container['locality_type']) && !in_array($this->container['locality_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'locality_type', must be one of '%s'",
                $this->container['locality_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdministrativeAreaTypeAllowableValues();
        if (!is_null($this->container['administrative_area_type']) && !in_array($this->container['administrative_area_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'administrative_area_type', must be one of '%s'",
                $this->container['administrative_area_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The localized display name of this result item.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the result item. This ID can be used for a Look Up by ID search as well.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets result_type
     *
     * @return string|null
     */
    public function getResultType()
    {
        return $this->container['result_type'];
    }

    /**
     * Sets result_type
     *
     * @param string|null $result_type WARNING: The resultType values 'intersection' and 'postalCodePoint' are in BETA state
     *
     * @return self
     */
    public function setResultType($result_type)
    {
        $allowedValues = $this->getResultTypeAllowableValues();
        if (!is_null($result_type) && !in_array($result_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result_type', must be one of '%s'",
                    $result_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result_type'] = $result_type;

        return $this;
    }

    /**
     * Gets house_number_type
     *
     * @return string|null
     */
    public function getHouseNumberType()
    {
        return $this->container['house_number_type'];
    }

    /**
     * Sets house_number_type
     *
     * @param string|null $house_number_type house_number_type
     *
     * @return self
     */
    public function setHouseNumberType($house_number_type)
    {
        $allowedValues = $this->getHouseNumberTypeAllowableValues();
        if (!is_null($house_number_type) && !in_array($house_number_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'house_number_type', must be one of '%s'",
                    $house_number_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['house_number_type'] = $house_number_type;

        return $this;
    }

    /**
     * Gets address_block_type
     *
     * @return string|null
     */
    public function getAddressBlockType()
    {
        return $this->container['address_block_type'];
    }

    /**
     * Sets address_block_type
     *
     * @param string|null $address_block_type address_block_type
     *
     * @return self
     */
    public function setAddressBlockType($address_block_type)
    {
        $allowedValues = $this->getAddressBlockTypeAllowableValues();
        if (!is_null($address_block_type) && !in_array($address_block_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_block_type', must be one of '%s'",
                    $address_block_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['address_block_type'] = $address_block_type;

        return $this;
    }

    /**
     * Gets locality_type
     *
     * @return string|null
     */
    public function getLocalityType()
    {
        return $this->container['locality_type'];
    }

    /**
     * Sets locality_type
     *
     * @param string|null $locality_type locality_type
     *
     * @return self
     */
    public function setLocalityType($locality_type)
    {
        $allowedValues = $this->getLocalityTypeAllowableValues();
        if (!is_null($locality_type) && !in_array($locality_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'locality_type', must be one of '%s'",
                    $locality_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['locality_type'] = $locality_type;

        return $this;
    }

    /**
     * Gets administrative_area_type
     *
     * @return string|null
     */
    public function getAdministrativeAreaType()
    {
        return $this->container['administrative_area_type'];
    }

    /**
     * Sets administrative_area_type
     *
     * @param string|null $administrative_area_type administrative_area_type
     *
     * @return self
     */
    public function setAdministrativeAreaType($administrative_area_type)
    {
        $allowedValues = $this->getAdministrativeAreaTypeAllowableValues();
        if (!is_null($administrative_area_type) && !in_array($administrative_area_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'administrative_area_type', must be one of '%s'",
                    $administrative_area_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['administrative_area_type'] = $administrative_area_type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param Address $address Postal address of the result item.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets position
     *
     * @return DisplayResponseCoordinate|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param DisplayResponseCoordinate|null $position The coordinates (latitude, longitude) of a pin on a map corresponding to the searched place.
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets access
     *
     * @return AccessResponseCoordinate[]|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param AccessResponseCoordinate[]|null $access Coordinates of the place you are navigating to (for example, driving or walking). This is a point on a road or in a parking lot.
     *
     * @return self
     */
    public function setAccess($access)
    {
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return int|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param int|null $distance The distance from the search center to this result item in meters. For example: \"172039\"
     *
     * @return self
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets map_view
     *
     * @return MapView|null
     */
    public function getMapView()
    {
        return $this->container['map_view'];
    }

    /**
     * Sets map_view
     *
     * @param MapView|null $map_view The bounding box enclosing the geometric shape (area or line) that an individual result covers. `place` typed results have no `mapView`.
     *
     * @return self
     */
    public function setMapView($map_view)
    {
        $this->container['map_view'] = $map_view;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return Category[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param Category[]|null $categories The list of categories assigned to this place.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets food_types
     *
     * @return Category[]|null
     */
    public function getFoodTypes()
    {
        return $this->container['food_types'];
    }

    /**
     * Sets food_types
     *
     * @param Category[]|null $food_types The list of food types assigned to this place.
     *
     * @return self
     */
    public function setFoodTypes($food_types)
    {
        $this->container['food_types'] = $food_types;

        return $this;
    }

    /**
     * Gets house_number_fallback
     *
     * @return bool|null
     */
    public function getHouseNumberFallback()
    {
        return $this->container['house_number_fallback'];
    }

    /**
     * Sets house_number_fallback
     *
     * @param bool|null $house_number_fallback If true, indicates that the requested house number was corrected to match the nearest known house number. This field is visible only when the value is true.
     *
     * @return self
     */
    public function setHouseNumberFallback($house_number_fallback)
    {
        $this->container['house_number_fallback'] = $house_number_fallback;

        return $this;
    }

    /**
     * Gets scoring
     *
     * @return Scoring|null
     */
    public function getScoring()
    {
        return $this->container['scoring'];
    }

    /**
     * Sets scoring
     *
     * @param Scoring|null $scoring Indicates for each result how good the result matches to the original query. This can be used by the customer application to accept or reject the results depending on how \"expensive\" is the mistake for their use case
     *
     * @return self
     */
    public function setScoring($scoring)
    {
        $this->container['scoring'] = $scoring;

        return $this;
    }

    /**
     * Gets parsing
     *
     * @return Parsing|null
     */
    public function getParsing()
    {
        return $this->container['parsing'];
    }

    /**
     * Sets parsing
     *
     * @param Parsing|null $parsing BETA - Parsed terms and their positions in the input query (only rendered if 'show=parsing' is provided.)
     *
     * @return self
     */
    public function setParsing($parsing)
    {
        $this->container['parsing'] = $parsing;

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


