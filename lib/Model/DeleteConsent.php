<?php
/**
 * DeleteConsent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * finAPI Access (alpha build)
 *
 * RESTful API for Account Information Services (AIS) and Payment Initiation Services (PIS) (alpha build)
 *
 * OpenAPI spec version: alpha
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DeleteConsent Class Doc Comment
 *
 * @category Class
 * @description Container for a result of the consent deleting
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeleteConsent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeleteConsent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local' => 'string',
        'remote' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'local' => null,
        'remote' => null
    ];

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
        'local' => 'local',
        'remote' => 'remote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local' => 'setLocal',
        'remote' => 'setRemote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local' => 'getLocal',
        'remote' => 'getRemote'
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
        return self::$swaggerModelName;
    }

    const LOCAL_DELETED = 'DELETED';
    const LOCAL_NOT_EXIST = 'NOT_EXIST';
    const LOCAL_NOT_SUPPORTED = 'NOT_SUPPORTED';
    const REMOTE_DELETED = 'DELETED';
    const REMOTE_NOT_EXIST = 'NOT_EXIST';
    const REMOTE_NOT_SUPPORTED = 'NOT_SUPPORTED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocalAllowableValues()
    {
        return [
            self::LOCAL_DELETED,
            self::LOCAL_NOT_EXIST,
            self::LOCAL_NOT_SUPPORTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRemoteAllowableValues()
    {
        return [
            self::REMOTE_DELETED,
            self::REMOTE_NOT_EXIST,
            self::REMOTE_NOT_SUPPORTED,
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
        $this->container['local'] = isset($data['local']) ? $data['local'] : null;
        $this->container['remote'] = isset($data['remote']) ? $data['remote'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['local'] === null) {
            $invalidProperties[] = "'local' can't be null";
        }
        $allowedValues = $this->getLocalAllowableValues();
        if (!is_null($this->container['local']) && !in_array($this->container['local'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'local', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['remote'] === null) {
            $invalidProperties[] = "'remote' can't be null";
        }
        $allowedValues = $this->getRemoteAllowableValues();
        if (!is_null($this->container['remote']) && !in_array($this->container['remote'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'remote', must be one of '%s'",
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
     * Gets local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
     * Sets local
     *
     * @param string $local Result of deleting a consent stored in the finAPI database (local):<br/><br/>&bull; <code>DELETED</code> - when there was a stored consent and it was deleted.<br/>&bull; <code>NOT_EXIST</code> - if there is no stored consent.<br/>
     *
     * @return $this
     */
    public function setLocal($local)
    {
        $allowedValues = $this->getLocalAllowableValues();
        if (!in_array($local, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'local', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['local'] = $local;

        return $this;
    }

    /**
     * Gets remote
     *
     * @return string
     */
    public function getRemote()
    {
        return $this->container['remote'];
    }

    /**
     * Sets remote
     *
     * @param string $remote Result of deleting a consent stored on the bank's side (remote):<br/><br/>&bull; <code>DELETED</code> - if the consent was successfully deleted on the bank side.<br/>&bull; <code>NOT_SUPPORTED</code> - if the bank doesn't support the feature of deleting consents.<br/>&bull; <code>NOT_EXIST</code> - if either there is no remote consent, or there is no local consent (and that makes impossible to identify any remote data).<br/>
     *
     * @return $this
     */
    public function setRemote($remote)
    {
        $allowedValues = $this->getRemoteAllowableValues();
        if (!in_array($remote, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'remote', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['remote'] = $remote;

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


