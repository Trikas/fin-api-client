<?php
/**
 * AccountInterface
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
 * AccountInterface Class Doc Comment
 *
 * @category Class
 * @description Account interface details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountInterface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'interface' => 'string',
        'status' => 'string',
        'capabilities' => 'string[]',
        'last_successful_update' => 'string',
        'last_update_attempt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'interface' => null,
        'status' => null,
        'capabilities' => null,
        'last_successful_update' => null,
        'last_update_attempt' => null
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
        'interface' => 'interface',
        'status' => 'status',
        'capabilities' => 'capabilities',
        'last_successful_update' => 'lastSuccessfulUpdate',
        'last_update_attempt' => 'lastUpdateAttempt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interface' => 'setInterface',
        'status' => 'setStatus',
        'capabilities' => 'setCapabilities',
        'last_successful_update' => 'setLastSuccessfulUpdate',
        'last_update_attempt' => 'setLastUpdateAttempt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interface' => 'getInterface',
        'status' => 'getStatus',
        'capabilities' => 'getCapabilities',
        'last_successful_update' => 'getLastSuccessfulUpdate',
        'last_update_attempt' => 'getLastUpdateAttempt'
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

    const MODEL_INTERFACE_WEB_SCRAPER = 'WEB_SCRAPER';
    const MODEL_INTERFACE_FINTS_SERVER = 'FINTS_SERVER';
    const MODEL_INTERFACE_XS2_A = 'XS2A';
    const STATUS_UPDATED = 'UPDATED';
    const STATUS_UPDATED_FIXED = 'UPDATED_FIXED';
    const STATUS_DOWNLOAD_IN_PROGRESS = 'DOWNLOAD_IN_PROGRESS';
    const STATUS_DOWNLOAD_FAILED = 'DOWNLOAD_FAILED';
    const STATUS_DEPRECATED = 'DEPRECATED';
    const CAPABILITIES_DATA_DOWNLOAD = 'DATA_DOWNLOAD';
    const CAPABILITIES_IBAN_ONLY_SEPA_MONEY_TRANSFER = 'IBAN_ONLY_SEPA_MONEY_TRANSFER';
    const CAPABILITIES_IBAN_ONLY_SEPA_DIRECT_DEBIT = 'IBAN_ONLY_SEPA_DIRECT_DEBIT';
    const CAPABILITIES_SEPA_MONEY_TRANSFER = 'SEPA_MONEY_TRANSFER';
    const CAPABILITIES_SEPA_COLLECTIVE_MONEY_TRANSFER = 'SEPA_COLLECTIVE_MONEY_TRANSFER';
    const CAPABILITIES_SEPA_BASIC_DIRECT_DEBIT = 'SEPA_BASIC_DIRECT_DEBIT';
    const CAPABILITIES_SEPA_BASIC_COLLECTIVE_DIRECT_DEBIT = 'SEPA_BASIC_COLLECTIVE_DIRECT_DEBIT';
    const CAPABILITIES_SEPA_B2_B_DIRECT_DEBIT = 'SEPA_B2B_DIRECT_DEBIT';
    const CAPABILITIES_SEPA_B2_B_COLLECTIVE_DIRECT_DEBIT = 'SEPA_B2B_COLLECTIVE_DIRECT_DEBIT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInterfaceAllowableValues()
    {
        return [
            self::MODEL_INTERFACE_WEB_SCRAPER,
            self::MODEL_INTERFACE_FINTS_SERVER,
            self::MODEL_INTERFACE_XS2_A,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UPDATED,
            self::STATUS_UPDATED_FIXED,
            self::STATUS_DOWNLOAD_IN_PROGRESS,
            self::STATUS_DOWNLOAD_FAILED,
            self::STATUS_DEPRECATED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapabilitiesAllowableValues()
    {
        return [
            self::CAPABILITIES_DATA_DOWNLOAD,
            self::CAPABILITIES_IBAN_ONLY_SEPA_MONEY_TRANSFER,
            self::CAPABILITIES_IBAN_ONLY_SEPA_DIRECT_DEBIT,
            self::CAPABILITIES_SEPA_MONEY_TRANSFER,
            self::CAPABILITIES_SEPA_COLLECTIVE_MONEY_TRANSFER,
            self::CAPABILITIES_SEPA_BASIC_DIRECT_DEBIT,
            self::CAPABILITIES_SEPA_BASIC_COLLECTIVE_DIRECT_DEBIT,
            self::CAPABILITIES_SEPA_B2_B_DIRECT_DEBIT,
            self::CAPABILITIES_SEPA_B2_B_COLLECTIVE_DIRECT_DEBIT,
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
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['last_successful_update'] = isset($data['last_successful_update']) ? $data['last_successful_update'] : null;
        $this->container['last_update_attempt'] = isset($data['last_update_attempt']) ? $data['last_update_attempt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['interface'] === null) {
            $invalidProperties[] = "'interface' can't be null";
        }
        $allowedValues = $this->getInterfaceAllowableValues();
        if (!is_null($this->container['interface']) && !in_array($this->container['interface'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interface', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['capabilities'] === null) {
            $invalidProperties[] = "'capabilities' can't be null";
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
     * Gets interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param string $interface Bank interface. Possible values:<br><br>&bull; <code>FINTS_SERVER</code> - finAPI will download account data via the bank's FinTS interface.<br>&bull; <code>WEB_SCRAPER</code> - finAPI will parse account data from the bank's online banking website.<br>&bull; <code>XS2A</code> - finAPI will download account data via the bank's XS2A interface.<br>
     *
     * @return $this
     */
    public function setInterface($interface)
    {
        $allowedValues = $this->getInterfaceAllowableValues();
        if (!in_array($interface, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'interface', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of the account from the perspective of this interface. Possible values are:<br/>&bull; <code>UPDATED</code> means that the account is up to date from finAPI's point of view. This means that no current import/update is running, and the previous import/update had successfully updated the account's data (e.g. transactions and securities), and the bank given balance matched the transaction's calculated sum, meaning that no adjusting entry ('Zwischensaldo' transaction) was inserted.<br/>&bull; <code>UPDATED_FIXED</code> means that the account is up to date from finAPI's point of view (no current import/update is running, and the previous import/update had successfully updated the account's data), BUT there was a deviation in the bank given balance which was fixed by adding an adjusting entry ('Zwischensaldo' transaction).<br/>&bull; <code>DOWNLOAD_IN_PROGRESS</code> means that the account's data is currently being imported/updated.<br/>&bull; <code>DOWNLOAD_FAILED</code> means that the account data was not successfully imported or updated. Possible reasons: finAPI could not get the account's balance, or it could not parse all transactions/securities, or some internal error has occurred. Also, it could mean that finAPI could not even get to the point of receiving the account data from the bank server, for example because of incorrect login credentials or a network problem. Note however that when we get a balance and just an empty list of transactions or securities, then this is regarded as valid and successful download. The reason for this is that for some accounts that have little activity, we may actually get no recent transactions but only a balance.<br/>&bull; <code>DEPRECATED</code> means that the account could no longer be matched with any account from the bank server. This can mean either that the account was terminated by the user and is no longer sent by the bank server, or that finAPI could no longer match it because the account's data (name, type, iban, account number, etc.) has been changed by the bank.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return string[]
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param string[] $capabilities List of account capabilities that this interface supports. Possible values are:<br/><br/>&bull; <code>DATA_DOWNLOAD</code> - download of balance and transactions/securities<br/>&bull; <code>IBAN_ONLY_SEPA_MONEY_TRANSFER</code> - money transfer where the recipient's account is defined just by the IBAN<br/>&bull; <code>IBAN_ONLY_SEPA_DIRECT_DEBIT</code> - direct debit where the debitor's account is defined just by the IBAN<br/>&bull; <code>SEPA_MONEY_TRANSFER</code> - single money transfer<br/>&bull; <code>SEPA_COLLECTIVE_MONEY_TRANSFER</code> - collective money transfer<br/>&bull; <code>SEPA_BASIC_DIRECT_DEBIT</code> - single basic direct debit<br/>&bull; <code>SEPA_BASIC_COLLECTIVE_DIRECT_DEBIT</code> - collective basic direct debit<br/>&bull; <code>SEPA_B2B_DIRECT_DEBIT</code> - single Business-To-Business direct debit<br/>&bull; <code>SEPA_B2B_COLLECTIVE_DIRECT_DEBIT</code> - collective Business-To-Business direct debit<br/><br/>Note that this list may be empty if the interface is not supporting any of the above capabilities. Also note that the list may be refreshed each time the account is being updated though this interface, so available capabilities may get added or removed in the course of an account update.<br/><br/>
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $allowedValues = $this->getCapabilitiesAllowableValues();
        if (array_diff($capabilities, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'capabilities', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets last_successful_update
     *
     * @return string
     */
    public function getLastSuccessfulUpdate()
    {
        return $this->container['last_successful_update'];
    }

    /**
     * Sets last_successful_update
     *
     * @param string $last_successful_update Timestamp of when the account was last successfully updated using this interface (or initially imported); more precisely: time when the account data (balance and positions) has been stored into the finAPI databases. The value is returned in the format 'YYYY-MM-DD HH:MM:SS.SSS' (german time).
     *
     * @return $this
     */
    public function setLastSuccessfulUpdate($last_successful_update)
    {
        $this->container['last_successful_update'] = $last_successful_update;

        return $this;
    }

    /**
     * Gets last_update_attempt
     *
     * @return string
     */
    public function getLastUpdateAttempt()
    {
        return $this->container['last_update_attempt'];
    }

    /**
     * Sets last_update_attempt
     *
     * @param string $last_update_attempt Timestamp of when the account was last tried to be updated using this interface (or initially imported); more precisely: time when the update (or initial import) was triggered. The value is returned in the format 'YYYY-MM-DD HH:MM:SS.SSS' (german time).
     *
     * @return $this
     */
    public function setLastUpdateAttempt($last_update_attempt)
    {
        $this->container['last_update_attempt'] = $last_update_attempt;

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

