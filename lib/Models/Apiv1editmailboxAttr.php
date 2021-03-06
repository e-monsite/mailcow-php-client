<?php
/**
 * Apiv1editmailboxAttr
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
 * Apiv1editmailboxAttr Class Doc Comment
 *
 * @category Class
 * @package  MailCow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Apiv1editmailboxAttr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiv1editmailbox_attr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
'force_pw_update' => 'bool',
'name' => 'string',
'password2' => 'string',
'password' => 'string',
'quota' => 'float',
'sender_acl' => 'object',
'sogo_access' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
'force_pw_update' => null,
'name' => null,
'password2' => null,
'password' => null,
'quota' => null,
'sender_acl' => null,
'sogo_access' => null    ];

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
'force_pw_update' => 'force_pw_update',
'name' => 'name',
'password2' => 'password2',
'password' => 'password',
'quota' => 'quota',
'sender_acl' => 'sender_acl',
'sogo_access' => 'sogo_access'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
'force_pw_update' => 'setForcePwUpdate',
'name' => 'setName',
'password2' => 'setPassword2',
'password' => 'setPassword',
'quota' => 'setQuota',
'sender_acl' => 'setSenderAcl',
'sogo_access' => 'setSogoAccess'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
'force_pw_update' => 'getForcePwUpdate',
'name' => 'getName',
'password2' => 'getPassword2',
'password' => 'getPassword',
'quota' => 'getQuota',
'sender_acl' => 'getSenderAcl',
'sogo_access' => 'getSogoAccess'    ];

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
        $this->container['force_pw_update'] = isset($data['force_pw_update']) ? $data['force_pw_update'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password2'] = isset($data['password2']) ? $data['password2'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['sender_acl'] = isset($data['sender_acl']) ? $data['sender_acl'] : null;
        $this->container['sogo_access'] = isset($data['sogo_access']) ? $data['sogo_access'] : null;
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
     * @param bool $active is mailbox active or not
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets force_pw_update
     *
     * @return bool
     */
    public function getForcePwUpdate()
    {
        return $this->container['force_pw_update'];
    }

    /**
     * Sets force_pw_update
     *
     * @param bool $force_pw_update force user to change password on next login
     *
     * @return $this
     */
    public function setForcePwUpdate($force_pw_update)
    {
        $this->container['force_pw_update'] = $force_pw_update;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Full name of the mailbox user
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password2
     *
     * @return string
     */
    public function getPassword2()
    {
        return $this->container['password2'];
    }

    /**
     * Sets password2
     *
     * @param string $password2 new mailbox password for confirmation
     *
     * @return $this
     */
    public function setPassword2($password2)
    {
        $this->container['password2'] = $password2;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password new mailbox password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets quota
     *
     * @return float
     */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
     * Sets quota
     *
     * @param float $quota mailbox quota
     *
     * @return $this
     */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;

        return $this;
    }

    /**
     * Gets sender_acl
     *
     * @return object
     */
    public function getSenderAcl()
    {
        return $this->container['sender_acl'];
    }

    /**
     * Sets sender_acl
     *
     * @param object $sender_acl list of allowed send from addresses
     *
     * @return $this
     */
    public function setSenderAcl($sender_acl)
    {
        $this->container['sender_acl'] = $sender_acl;

        return $this;
    }

    /**
     * Gets sogo_access
     *
     * @return bool
     */
    public function getSogoAccess()
    {
        return $this->container['sogo_access'];
    }

    /**
     * Sets sogo_access
     *
     * @param bool $sogo_access is access to SOGo webmail active or not
     *
     * @return $this
     */
    public function setSogoAccess($sogo_access)
    {
        $this->container['sogo_access'] = $sogo_access;

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
