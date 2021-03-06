<?php
/**
 * AddResourceBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailCow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * mailcow API
 *
 * mailcow is complete e-mailing solution with advanced antispam, antivirus, nice UI and API.  In order to use this API you have to create a API key and add your IP address to the whitelist of allowed IPs this can be done by logging into the Mailcow UI using your admin account, then go to Configuration > Access > Edit administrator details > API. There you will find a collapsed API menu.  There are two types of API keys   - The read only key can only be used for all get endpoints   - The read write key can be used for all endpoints
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailCow\Models;

use \ArrayAccess;
use \MailCow\ObjectSerializer;

/**
 * AddResourceBody Class Doc Comment
 *
 * @category Class
 * @package  MailCow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddResourceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'add_resource_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'float',
'description' => 'string',
'domain' => 'string',
'kind' => 'string',
'multiple_bookings' => 'string',
'multiple_bookings_custom' => 'float',
'multiple_bookings_select' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
'description' => null,
'domain' => null,
'kind' => null,
'multiple_bookings' => null,
'multiple_bookings_custom' => null,
'multiple_bookings_select' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active' => 'active',
'description' => 'description',
'domain' => 'domain',
'kind' => 'kind',
'multiple_bookings' => 'multiple_bookings',
'multiple_bookings_custom' => 'multiple_bookings_custom',
'multiple_bookings_select' => 'multiple_bookings_select'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
'description' => 'setDescription',
'domain' => 'setDomain',
'kind' => 'setKind',
'multiple_bookings' => 'setMultipleBookings',
'multiple_bookings_custom' => 'setMultipleBookingsCustom',
'multiple_bookings_select' => 'setMultipleBookingsSelect'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
'description' => 'getDescription',
'domain' => 'getDomain',
'kind' => 'getKind',
'multiple_bookings' => 'getMultipleBookings',
'multiple_bookings_custom' => 'getMultipleBookingsCustom',
'multiple_bookings_select' => 'getMultipleBookingsSelect'    ];

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
        return self::$swaggerModelName;
    }

    const KIND_LOCATION = 'location';
const KIND_GROUP = 'group';
const KIND_THING = 'thing';
const MULTIPLE_BOOKINGS__1 = '-1';
const MULTIPLE_BOOKINGS__1_1 = '1';
const MULTIPLE_BOOKINGS_CUSTOM = 'custom';
const MULTIPLE_BOOKINGS_SELECT__1 = '-1';
const MULTIPLE_BOOKINGS_SELECT__1_1 = '1';
const MULTIPLE_BOOKINGS_SELECT_CUSTOM = 'custom';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_LOCATION,
self::KIND_GROUP,
self::KIND_THING,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMultipleBookingsAllowableValues()
    {
        return [
            self::MULTIPLE_BOOKINGS__1,
self::MULTIPLE_BOOKINGS__1_1,
self::MULTIPLE_BOOKINGS_CUSTOM,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMultipleBookingsSelectAllowableValues()
    {
        return [
            self::MULTIPLE_BOOKINGS_SELECT__1,
self::MULTIPLE_BOOKINGS_SELECT__1_1,
self::MULTIPLE_BOOKINGS_SELECT_CUSTOM,        ];
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['multiple_bookings'] = isset($data['multiple_bookings']) ? $data['multiple_bookings'] : null;
        $this->container['multiple_bookings_custom'] = isset($data['multiple_bookings_custom']) ? $data['multiple_bookings_custom'] : null;
        $this->container['multiple_bookings_select'] = isset($data['multiple_bookings_select']) ? $data['multiple_bookings_select'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kind', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMultipleBookingsAllowableValues();
        if (!is_null($this->container['multiple_bookings']) && !in_array($this->container['multiple_bookings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'multiple_bookings', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMultipleBookingsSelectAllowableValues();
        if (!is_null($this->container['multiple_bookings_select']) && !in_array($this->container['multiple_bookings_select'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'multiple_bookings_select', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets active
     *
     * @return float
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param float $active 1 for a active transport map 0 for a disabled transport map
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description a description of the resource
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain the domain for which the resource should be
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind the kind of recouse
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets multiple_bookings
     *
     * @return string
     */
    public function getMultipleBookings()
    {
        return $this->container['multiple_bookings'];
    }

    /**
     * Sets multiple_bookings
     *
     * @param string $multiple_bookings multiple_bookings
     *
     * @return $this
     */
    public function setMultipleBookings($multiple_bookings)
    {
        $allowedValues = $this->getMultipleBookingsAllowableValues();
        if (!is_null($multiple_bookings) && !in_array($multiple_bookings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'multiple_bookings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['multiple_bookings'] = $multiple_bookings;

        return $this;
    }

    /**
     * Gets multiple_bookings_custom
     *
     * @return float
     */
    public function getMultipleBookingsCustom()
    {
        return $this->container['multiple_bookings_custom'];
    }

    /**
     * Sets multiple_bookings_custom
     *
     * @param float $multiple_bookings_custom always empty
     *
     * @return $this
     */
    public function setMultipleBookingsCustom($multiple_bookings_custom)
    {
        $this->container['multiple_bookings_custom'] = $multiple_bookings_custom;

        return $this;
    }

    /**
     * Gets multiple_bookings_select
     *
     * @return string
     */
    public function getMultipleBookingsSelect()
    {
        return $this->container['multiple_bookings_select'];
    }

    /**
     * Sets multiple_bookings_select
     *
     * @param string $multiple_bookings_select multiple_bookings_select
     *
     * @return $this
     */
    public function setMultipleBookingsSelect($multiple_bookings_select)
    {
        $allowedValues = $this->getMultipleBookingsSelectAllowableValues();
        if (!is_null($multiple_bookings_select) && !in_array($multiple_bookings_select, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'multiple_bookings_select', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['multiple_bookings_select'] = $multiple_bookings_select;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
