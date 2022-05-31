<?php
/**
 * Apiv1editsyncjobAttr
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
 * Apiv1editsyncjobAttr Class Doc Comment
 *
 * @category Class
 * @package  MailCow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Apiv1editsyncjobAttr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiv1editsyncjob_attr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
'automap' => 'bool',
'custom_params' => 'string',
'delete1' => 'bool',
'delete2' => 'bool',
'delete2duplicates' => 'bool',
'enc1' => 'string',
'exclude' => 'string',
'host1' => 'string',
'maxage' => 'float',
'maxbytespersecond' => 'float',
'mins_interval' => 'float',
'password1' => 'string',
'port1' => 'string',
'skipcrossduplicates' => 'bool',
'subfolder2' => 'string',
'subscribeall' => 'bool',
'timeout1' => 'float',
'timeout2' => 'float',
'user1' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
'automap' => null,
'custom_params' => null,
'delete1' => null,
'delete2' => null,
'delete2duplicates' => null,
'enc1' => null,
'exclude' => null,
'host1' => null,
'maxage' => null,
'maxbytespersecond' => null,
'mins_interval' => null,
'password1' => null,
'port1' => null,
'skipcrossduplicates' => null,
'subfolder2' => null,
'subscribeall' => null,
'timeout1' => null,
'timeout2' => null,
'user1' => null    ];

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
'automap' => 'automap',
'custom_params' => 'custom_params',
'delete1' => 'delete1',
'delete2' => 'delete2',
'delete2duplicates' => 'delete2duplicates',
'enc1' => 'enc1',
'exclude' => 'exclude',
'host1' => 'host1',
'maxage' => 'maxage',
'maxbytespersecond' => 'maxbytespersecond',
'mins_interval' => 'mins_interval',
'password1' => 'password1',
'port1' => 'port1',
'skipcrossduplicates' => 'skipcrossduplicates',
'subfolder2' => 'subfolder2',
'subscribeall' => 'subscribeall',
'timeout1' => 'timeout1',
'timeout2' => 'timeout2',
'user1' => 'user1'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
'automap' => 'setAutomap',
'custom_params' => 'setCustomParams',
'delete1' => 'setDelete1',
'delete2' => 'setDelete2',
'delete2duplicates' => 'setDelete2duplicates',
'enc1' => 'setEnc1',
'exclude' => 'setExclude',
'host1' => 'setHost1',
'maxage' => 'setMaxage',
'maxbytespersecond' => 'setMaxbytespersecond',
'mins_interval' => 'setMinsInterval',
'password1' => 'setPassword1',
'port1' => 'setPort1',
'skipcrossduplicates' => 'setSkipcrossduplicates',
'subfolder2' => 'setSubfolder2',
'subscribeall' => 'setSubscribeall',
'timeout1' => 'setTimeout1',
'timeout2' => 'setTimeout2',
'user1' => 'setUser1'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
'automap' => 'getAutomap',
'custom_params' => 'getCustomParams',
'delete1' => 'getDelete1',
'delete2' => 'getDelete2',
'delete2duplicates' => 'getDelete2duplicates',
'enc1' => 'getEnc1',
'exclude' => 'getExclude',
'host1' => 'getHost1',
'maxage' => 'getMaxage',
'maxbytespersecond' => 'getMaxbytespersecond',
'mins_interval' => 'getMinsInterval',
'password1' => 'getPassword1',
'port1' => 'getPort1',
'skipcrossduplicates' => 'getSkipcrossduplicates',
'subfolder2' => 'getSubfolder2',
'subscribeall' => 'getSubscribeall',
'timeout1' => 'getTimeout1',
'timeout2' => 'getTimeout2',
'user1' => 'getUser1'    ];

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

    const ENC1_TLS = 'TLS';
const ENC1_SSL = 'SSL';
const ENC1_PLAIN = 'PLAIN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnc1AllowableValues()
    {
        return [
            self::ENC1_TLS,
self::ENC1_SSL,
self::ENC1_PLAIN,        ];
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
        $this->container['automap'] = isset($data['automap']) ? $data['automap'] : null;
        $this->container['custom_params'] = isset($data['custom_params']) ? $data['custom_params'] : null;
        $this->container['delete1'] = isset($data['delete1']) ? $data['delete1'] : null;
        $this->container['delete2'] = isset($data['delete2']) ? $data['delete2'] : null;
        $this->container['delete2duplicates'] = isset($data['delete2duplicates']) ? $data['delete2duplicates'] : null;
        $this->container['enc1'] = isset($data['enc1']) ? $data['enc1'] : null;
        $this->container['exclude'] = isset($data['exclude']) ? $data['exclude'] : null;
        $this->container['host1'] = isset($data['host1']) ? $data['host1'] : null;
        $this->container['maxage'] = isset($data['maxage']) ? $data['maxage'] : null;
        $this->container['maxbytespersecond'] = isset($data['maxbytespersecond']) ? $data['maxbytespersecond'] : null;
        $this->container['mins_interval'] = isset($data['mins_interval']) ? $data['mins_interval'] : null;
        $this->container['password1'] = isset($data['password1']) ? $data['password1'] : null;
        $this->container['port1'] = isset($data['port1']) ? $data['port1'] : null;
        $this->container['skipcrossduplicates'] = isset($data['skipcrossduplicates']) ? $data['skipcrossduplicates'] : null;
        $this->container['subfolder2'] = isset($data['subfolder2']) ? $data['subfolder2'] : null;
        $this->container['subscribeall'] = isset($data['subscribeall']) ? $data['subscribeall'] : null;
        $this->container['timeout1'] = isset($data['timeout1']) ? $data['timeout1'] : null;
        $this->container['timeout2'] = isset($data['timeout2']) ? $data['timeout2'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEnc1AllowableValues();
        if (!is_null($this->container['enc1']) && !in_array($this->container['enc1'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'enc1', must be one of '%s'",
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
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Is sync job active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets automap
     *
     * @return bool
     */
    public function getAutomap()
    {
        return $this->container['automap'];
    }

    /**
     * Sets automap
     *
     * @param bool $automap Try to automap folders (\"Sent items\", \"Sent\" => \"Sent\" etc.)
     *
     * @return $this
     */
    public function setAutomap($automap)
    {
        $this->container['automap'] = $automap;

        return $this;
    }

    /**
     * Gets custom_params
     *
     * @return string
     */
    public function getCustomParams()
    {
        return $this->container['custom_params'];
    }

    /**
     * Sets custom_params
     *
     * @param string $custom_params Custom parameters passed to imapsync command
     *
     * @return $this
     */
    public function setCustomParams($custom_params)
    {
        $this->container['custom_params'] = $custom_params;

        return $this;
    }

    /**
     * Gets delete1
     *
     * @return bool
     */
    public function getDelete1()
    {
        return $this->container['delete1'];
    }

    /**
     * Sets delete1
     *
     * @param bool $delete1 Delete from source when completed
     *
     * @return $this
     */
    public function setDelete1($delete1)
    {
        $this->container['delete1'] = $delete1;

        return $this;
    }

    /**
     * Gets delete2
     *
     * @return bool
     */
    public function getDelete2()
    {
        return $this->container['delete2'];
    }

    /**
     * Sets delete2
     *
     * @param bool $delete2 Delete messages on destination that are not on source
     *
     * @return $this
     */
    public function setDelete2($delete2)
    {
        $this->container['delete2'] = $delete2;

        return $this;
    }

    /**
     * Gets delete2duplicates
     *
     * @return bool
     */
    public function getDelete2duplicates()
    {
        return $this->container['delete2duplicates'];
    }

    /**
     * Sets delete2duplicates
     *
     * @param bool $delete2duplicates Delete duplicates on destination
     *
     * @return $this
     */
    public function setDelete2duplicates($delete2duplicates)
    {
        $this->container['delete2duplicates'] = $delete2duplicates;

        return $this;
    }

    /**
     * Gets enc1
     *
     * @return string
     */
    public function getEnc1()
    {
        return $this->container['enc1'];
    }

    /**
     * Sets enc1
     *
     * @param string $enc1 Encryption
     *
     * @return $this
     */
    public function setEnc1($enc1)
    {
        $allowedValues = $this->getEnc1AllowableValues();
        if (!is_null($enc1) && !in_array($enc1, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'enc1', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['enc1'] = $enc1;

        return $this;
    }

    /**
     * Gets exclude
     *
     * @return string
     */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
     * Sets exclude
     *
     * @param string $exclude Exclude objects (regex)
     *
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;

        return $this;
    }

    /**
     * Gets host1
     *
     * @return string
     */
    public function getHost1()
    {
        return $this->container['host1'];
    }

    /**
     * Sets host1
     *
     * @param string $host1 Hostname
     *
     * @return $this
     */
    public function setHost1($host1)
    {
        $this->container['host1'] = $host1;

        return $this;
    }

    /**
     * Gets maxage
     *
     * @return float
     */
    public function getMaxage()
    {
        return $this->container['maxage'];
    }

    /**
     * Sets maxage
     *
     * @param float $maxage Maximum age of messages in days that will be polled from remote (0 = ignore age)
     *
     * @return $this
     */
    public function setMaxage($maxage)
    {
        $this->container['maxage'] = $maxage;

        return $this;
    }

    /**
     * Gets maxbytespersecond
     *
     * @return float
     */
    public function getMaxbytespersecond()
    {
        return $this->container['maxbytespersecond'];
    }

    /**
     * Sets maxbytespersecond
     *
     * @param float $maxbytespersecond Max. bytes per second (0 = unlimited)
     *
     * @return $this
     */
    public function setMaxbytespersecond($maxbytespersecond)
    {
        $this->container['maxbytespersecond'] = $maxbytespersecond;

        return $this;
    }

    /**
     * Gets mins_interval
     *
     * @return float
     */
    public function getMinsInterval()
    {
        return $this->container['mins_interval'];
    }

    /**
     * Sets mins_interval
     *
     * @param float $mins_interval Interval (min)
     *
     * @return $this
     */
    public function setMinsInterval($mins_interval)
    {
        $this->container['mins_interval'] = $mins_interval;

        return $this;
    }

    /**
     * Gets password1
     *
     * @return string
     */
    public function getPassword1()
    {
        return $this->container['password1'];
    }

    /**
     * Sets password1
     *
     * @param string $password1 Password
     *
     * @return $this
     */
    public function setPassword1($password1)
    {
        $this->container['password1'] = $password1;

        return $this;
    }

    /**
     * Gets port1
     *
     * @return string
     */
    public function getPort1()
    {
        return $this->container['port1'];
    }

    /**
     * Sets port1
     *
     * @param string $port1 Port
     *
     * @return $this
     */
    public function setPort1($port1)
    {
        $this->container['port1'] = $port1;

        return $this;
    }

    /**
     * Gets skipcrossduplicates
     *
     * @return bool
     */
    public function getSkipcrossduplicates()
    {
        return $this->container['skipcrossduplicates'];
    }

    /**
     * Sets skipcrossduplicates
     *
     * @param bool $skipcrossduplicates Skip duplicate messages across folders (first come, first serve)
     *
     * @return $this
     */
    public function setSkipcrossduplicates($skipcrossduplicates)
    {
        $this->container['skipcrossduplicates'] = $skipcrossduplicates;

        return $this;
    }

    /**
     * Gets subfolder2
     *
     * @return string
     */
    public function getSubfolder2()
    {
        return $this->container['subfolder2'];
    }

    /**
     * Sets subfolder2
     *
     * @param string $subfolder2 Sync into subfolder on destination (empty = do not use subfolder)
     *
     * @return $this
     */
    public function setSubfolder2($subfolder2)
    {
        $this->container['subfolder2'] = $subfolder2;

        return $this;
    }

    /**
     * Gets subscribeall
     *
     * @return bool
     */
    public function getSubscribeall()
    {
        return $this->container['subscribeall'];
    }

    /**
     * Sets subscribeall
     *
     * @param bool $subscribeall Subscribe all folders
     *
     * @return $this
     */
    public function setSubscribeall($subscribeall)
    {
        $this->container['subscribeall'] = $subscribeall;

        return $this;
    }

    /**
     * Gets timeout1
     *
     * @return float
     */
    public function getTimeout1()
    {
        return $this->container['timeout1'];
    }

    /**
     * Sets timeout1
     *
     * @param float $timeout1 Timeout for connection to remote host
     *
     * @return $this
     */
    public function setTimeout1($timeout1)
    {
        $this->container['timeout1'] = $timeout1;

        return $this;
    }

    /**
     * Gets timeout2
     *
     * @return float
     */
    public function getTimeout2()
    {
        return $this->container['timeout2'];
    }

    /**
     * Sets timeout2
     *
     * @param float $timeout2 Timeout for connection to local host
     *
     * @return $this
     */
    public function setTimeout2($timeout2)
    {
        $this->container['timeout2'] = $timeout2;

        return $this;
    }

    /**
     * Gets user1
     *
     * @return string
     */
    public function getUser1()
    {
        return $this->container['user1'];
    }

    /**
     * Sets user1
     *
     * @param string $user1 Username
     *
     * @return $this
     */
    public function setUser1($user1)
    {
        $this->container['user1'] = $user1;

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