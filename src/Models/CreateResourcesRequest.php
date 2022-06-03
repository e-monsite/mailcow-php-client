<?php
/**
 * CreateResourcesRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MailCow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * mailcow API
 *
 * mailcow is complete e-mailing solution with advanced antispam, antivirus, nice UI and API.  In order to use this API you have to create a API key and add your IP address to the whitelist of allowed IPs this can be done by logging into the Mailcow UI using your admin account, then go to Configuration > Access > Edit administrator details > API. There you will find a collapsed API menu.  There are two types of API keys   - The read only key can only be used for all get endpoints   - The read write key can be used for all endpoints
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailCow\Models;

use \ArrayAccess;
use \MailCow\ObjectSerializer;

/**
 * CreateResourcesRequest Class Doc Comment
 *
 * @category Class
 * @package  MailCow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateResourcesRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Create_Resources_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'float',
        'description' => 'string',
        'domain' => 'string',
        'kind' => 'string',
        'multipleBookings' => 'string',
        'multipleBookingsCustom' => 'float',
        'multipleBookingsSelect' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'description' => null,
        'domain' => null,
        'kind' => null,
        'multipleBookings' => null,
        'multipleBookingsCustom' => null,
        'multipleBookingsSelect' => null
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
        'active' => 'active',
        'description' => 'description',
        'domain' => 'domain',
        'kind' => 'kind',
        'multipleBookings' => 'multiple_bookings',
        'multipleBookingsCustom' => 'multiple_bookings_custom',
        'multipleBookingsSelect' => 'multiple_bookings_select'
    ];

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
        'multipleBookings' => 'setMultipleBookings',
        'multipleBookingsCustom' => 'setMultipleBookingsCustom',
        'multipleBookingsSelect' => 'setMultipleBookingsSelect'
    ];

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
        'multipleBookings' => 'getMultipleBookings',
        'multipleBookingsCustom' => 'getMultipleBookingsCustom',
        'multipleBookingsSelect' => 'getMultipleBookingsSelect'
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

    public const KIND_LOCATION = 'location';
    public const KIND_GROUP = 'group';
    public const KIND_THING = 'thing';
    public const MULTIPLE_BOOKINGS__1 = '-1';
    public const MULTIPLE_BOOKINGS__1 = '1';
    public const MULTIPLE_BOOKINGS_CUSTOM = 'custom';
    public const MULTIPLE_BOOKINGS_SELECT__1 = '-1';
    public const MULTIPLE_BOOKINGS_SELECT__1 = '1';
    public const MULTIPLE_BOOKINGS_SELECT_CUSTOM = 'custom';

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
            self::KIND_THING,
        ];
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
            self::MULTIPLE_BOOKINGS__1,
            self::MULTIPLE_BOOKINGS_CUSTOM,
        ];
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
            self::MULTIPLE_BOOKINGS_SELECT__1,
            self::MULTIPLE_BOOKINGS_SELECT_CUSTOM,
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['multipleBookings'] = $data['multipleBookings'] ?? null;
        $this->container['multipleBookingsCustom'] = $data['multipleBookingsCustom'] ?? null;
        $this->container['multipleBookingsSelect'] = $data['multipleBookingsSelect'] ?? null;
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
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMultipleBookingsAllowableValues();
        if (!is_null($this->container['multipleBookings']) && !in_array($this->container['multipleBookings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'multipleBookings', must be one of '%s'",
                $this->container['multipleBookings'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMultipleBookingsSelectAllowableValues();
        if (!is_null($this->container['multipleBookingsSelect']) && !in_array($this->container['multipleBookingsSelect'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'multipleBookingsSelect', must be one of '%s'",
                $this->container['multipleBookingsSelect'],
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
     * @return float|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param float|null $active 1 for a active transport map 0 for a disabled transport map
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description a description of the resource
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain the domain for which the resource should be
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind the kind of recouse
     *
     * @return self
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets multipleBookings
     *
     * @return string|null
     */
    public function getMultipleBookings()
    {
        return $this->container['multipleBookings'];
    }

    /**
     * Sets multipleBookings
     *
     * @param string|null $multipleBookings multipleBookings
     *
     * @return self
     */
    public function setMultipleBookings($multipleBookings)
    {
        $allowedValues = $this->getMultipleBookingsAllowableValues();
        if (!is_null($multipleBookings) && !in_array($multipleBookings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'multipleBookings', must be one of '%s'",
                    $multipleBookings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['multipleBookings'] = $multipleBookings;

        return $this;
    }

    /**
     * Gets multipleBookingsCustom
     *
     * @return float|null
     */
    public function getMultipleBookingsCustom()
    {
        return $this->container['multipleBookingsCustom'];
    }

    /**
     * Sets multipleBookingsCustom
     *
     * @param float|null $multipleBookingsCustom always empty
     *
     * @return self
     */
    public function setMultipleBookingsCustom($multipleBookingsCustom)
    {
        $this->container['multipleBookingsCustom'] = $multipleBookingsCustom;

        return $this;
    }

    /**
     * Gets multipleBookingsSelect
     *
     * @return string|null
     */
    public function getMultipleBookingsSelect()
    {
        return $this->container['multipleBookingsSelect'];
    }

    /**
     * Sets multipleBookingsSelect
     *
     * @param string|null $multipleBookingsSelect multipleBookingsSelect
     *
     * @return self
     */
    public function setMultipleBookingsSelect($multipleBookingsSelect)
    {
        $allowedValues = $this->getMultipleBookingsSelectAllowableValues();
        if (!is_null($multipleBookingsSelect) && !in_array($multipleBookingsSelect, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'multipleBookingsSelect', must be one of '%s'",
                    $multipleBookingsSelect,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['multipleBookingsSelect'] = $multipleBookingsSelect;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

