<?php
/**
 * ConnectInterfaceParams
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
 * ConnectInterfaceParams Class Doc Comment
 *
 * @category Class
 * @description Container for interface connection parameters
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectInterfaceParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConnectInterfaceParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_connection_id' => 'int',
        'interface' => 'string',
        'source_interface' => 'string',
        'login_credentials' => '\Swagger\Client\Model\LoginCredential[]',
        'store_secrets' => 'bool',
        'skip_positions_download' => 'bool',
        'load_owner_data' => 'bool',
        'account_references' => '\Swagger\Client\Model\AccountReference[]',
        'account_types' => 'string[]',
        'multi_step_authentication' => '\Swagger\Client\Model\MultiStepAuthenticationCallback',
        'redirect_url' => 'string',
        'max_days_for_download' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_connection_id' => 'int64',
        'interface' => null,
        'source_interface' => null,
        'login_credentials' => null,
        'store_secrets' => null,
        'skip_positions_download' => null,
        'load_owner_data' => null,
        'account_references' => null,
        'account_types' => null,
        'multi_step_authentication' => null,
        'redirect_url' => null,
        'max_days_for_download' => 'int32'
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
        'bank_connection_id' => 'bankConnectionId',
        'interface' => 'interface',
        'source_interface' => 'sourceInterface',
        'login_credentials' => 'loginCredentials',
        'store_secrets' => 'storeSecrets',
        'skip_positions_download' => 'skipPositionsDownload',
        'load_owner_data' => 'loadOwnerData',
        'account_references' => 'accountReferences',
        'account_types' => 'accountTypes',
        'multi_step_authentication' => 'multiStepAuthentication',
        'redirect_url' => 'redirectUrl',
        'max_days_for_download' => 'maxDaysForDownload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_connection_id' => 'setBankConnectionId',
        'interface' => 'setInterface',
        'source_interface' => 'setSourceInterface',
        'login_credentials' => 'setLoginCredentials',
        'store_secrets' => 'setStoreSecrets',
        'skip_positions_download' => 'setSkipPositionsDownload',
        'load_owner_data' => 'setLoadOwnerData',
        'account_references' => 'setAccountReferences',
        'account_types' => 'setAccountTypes',
        'multi_step_authentication' => 'setMultiStepAuthentication',
        'redirect_url' => 'setRedirectUrl',
        'max_days_for_download' => 'setMaxDaysForDownload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_connection_id' => 'getBankConnectionId',
        'interface' => 'getInterface',
        'source_interface' => 'getSourceInterface',
        'login_credentials' => 'getLoginCredentials',
        'store_secrets' => 'getStoreSecrets',
        'skip_positions_download' => 'getSkipPositionsDownload',
        'load_owner_data' => 'getLoadOwnerData',
        'account_references' => 'getAccountReferences',
        'account_types' => 'getAccountTypes',
        'multi_step_authentication' => 'getMultiStepAuthentication',
        'redirect_url' => 'getRedirectUrl',
        'max_days_for_download' => 'getMaxDaysForDownload'
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

    const MODEL_INTERFACE_FINTS_SERVER = 'FINTS_SERVER';
    const MODEL_INTERFACE_WEB_SCRAPER = 'WEB_SCRAPER';
    const MODEL_INTERFACE_XS2_A = 'XS2A';
    const SOURCE_INTERFACE_FINTS_SERVER = 'FINTS_SERVER';
    const SOURCE_INTERFACE_WEB_SCRAPER = 'WEB_SCRAPER';
    const SOURCE_INTERFACE_XS2_A = 'XS2A';
    const ACCOUNT_TYPES_CHECKING = 'Checking';
    const ACCOUNT_TYPES_SAVINGS = 'Savings';
    const ACCOUNT_TYPES_CREDIT_CARD = 'CreditCard';
    const ACCOUNT_TYPES_SECURITY = 'Security';
    const ACCOUNT_TYPES_LOAN = 'Loan';
    const ACCOUNT_TYPES_POCKET = 'Pocket';
    const ACCOUNT_TYPES_MEMBERSHIP = 'Membership';
    const ACCOUNT_TYPES_BAUSPAREN = 'Bausparen';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInterfaceAllowableValues()
    {
        return [
            self::MODEL_INTERFACE_FINTS_SERVER,
            self::MODEL_INTERFACE_WEB_SCRAPER,
            self::MODEL_INTERFACE_XS2_A,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceInterfaceAllowableValues()
    {
        return [
            self::SOURCE_INTERFACE_FINTS_SERVER,
            self::SOURCE_INTERFACE_WEB_SCRAPER,
            self::SOURCE_INTERFACE_XS2_A,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypesAllowableValues()
    {
        return [
            self::ACCOUNT_TYPES_CHECKING,
            self::ACCOUNT_TYPES_SAVINGS,
            self::ACCOUNT_TYPES_CREDIT_CARD,
            self::ACCOUNT_TYPES_SECURITY,
            self::ACCOUNT_TYPES_LOAN,
            self::ACCOUNT_TYPES_POCKET,
            self::ACCOUNT_TYPES_MEMBERSHIP,
            self::ACCOUNT_TYPES_BAUSPAREN,
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
        $this->container['bank_connection_id'] = isset($data['bank_connection_id']) ? $data['bank_connection_id'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['source_interface'] = isset($data['source_interface']) ? $data['source_interface'] : null;
        $this->container['login_credentials'] = isset($data['login_credentials']) ? $data['login_credentials'] : null;
        $this->container['store_secrets'] = isset($data['store_secrets']) ? $data['store_secrets'] : false;
        $this->container['skip_positions_download'] = isset($data['skip_positions_download']) ? $data['skip_positions_download'] : false;
        $this->container['load_owner_data'] = isset($data['load_owner_data']) ? $data['load_owner_data'] : false;
        $this->container['account_references'] = isset($data['account_references']) ? $data['account_references'] : null;
        $this->container['account_types'] = isset($data['account_types']) ? $data['account_types'] : null;
        $this->container['multi_step_authentication'] = isset($data['multi_step_authentication']) ? $data['multi_step_authentication'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['max_days_for_download'] = isset($data['max_days_for_download']) ? $data['max_days_for_download'] : 0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank_connection_id'] === null) {
            $invalidProperties[] = "'bank_connection_id' can't be null";
        }
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

        $allowedValues = $this->getSourceInterfaceAllowableValues();
        if (!is_null($this->container['source_interface']) && !in_array($this->container['source_interface'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source_interface', must be one of '%s'",
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
     * Gets bank_connection_id
     *
     * @return int
     */
    public function getBankConnectionId()
    {
        return $this->container['bank_connection_id'];
    }

    /**
     * Sets bank_connection_id
     *
     * @param int $bank_connection_id Bank connection identifier
     *
     * @return $this
     */
    public function setBankConnectionId($bank_connection_id)
    {
        $this->container['bank_connection_id'] = $bank_connection_id;

        return $this;
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
     * @param string $interface The interface to use for connecting with the bank.
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
     * Gets source_interface
     *
     * @return string
     */
    public function getSourceInterface()
    {
        return $this->container['source_interface'];
    }

    /**
     * Sets source_interface
     *
     * @param string $source_interface The source interface that should be used as the source of credentials. Set it to one of already existing bank connection's interfaces and finAPI will try to use the stored credentials of that interface for the current service call. The source interface must fit the following requirements:<br/>- it must have the same set of bank login fields as the main interface (the 'interface' parameter);<br/>- it must have stored values for all its bank login fields.<br/>If any of those conditions are not met - the service will throw an appropriate error.<br/>Note: the source interface is ignored if any login credentials are given.
     *
     * @return $this
     */
    public function setSourceInterface($source_interface)
    {
        $allowedValues = $this->getSourceInterfaceAllowableValues();
        if (!is_null($source_interface) && !in_array($source_interface, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source_interface', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source_interface'] = $source_interface;

        return $this;
    }

    /**
     * Gets login_credentials
     *
     * @return \Swagger\Client\Model\LoginCredential[]
     */
    public function getLoginCredentials()
    {
        return $this->container['login_credentials'];
    }

    /**
     * Sets login_credentials
     *
     * @param \Swagger\Client\Model\LoginCredential[] $login_credentials Set of login credentials. Must be passed in combination with the 'interface' field. For mandators requiring a web form, no matter the passed login credentials, the web form will contain all login fields defined by the bank for the respective interface.
     *
     * @return $this
     */
    public function setLoginCredentials($login_credentials)
    {
        $this->container['login_credentials'] = $login_credentials;

        return $this;
    }

    /**
     * Gets store_secrets
     *
     * @return bool
     */
    public function getStoreSecrets()
    {
        return $this->container['store_secrets'];
    }

    /**
     * Sets store_secrets
     *
     * @param bool $store_secrets Whether to store the secret login fields. If the secret fields are stored, then updates can be triggered without the involvement of the users, as long as the credentials remain valid and the bank consent has not expired. Note that bank consent will be stored regardless of the field value. Default value is false.<br/><br/>NOTES:<br/> - this field is ignored in case when the user will need to use finAPI's web form. The user will be able to decide whether to store the secrets or not in the web form, depending on the 'storeSecretsAvailableInWebForm' setting (see Client Configuration).
     *
     * @return $this
     */
    public function setStoreSecrets($store_secrets)
    {
        $this->container['store_secrets'] = $store_secrets;

        return $this;
    }

    /**
     * Gets skip_positions_download
     *
     * @return bool
     */
    public function getSkipPositionsDownload()
    {
        return $this->container['skip_positions_download'];
    }

    /**
     * Sets skip_positions_download
     *
     * @param bool $skip_positions_download Whether to skip the download of transactions and securities or not. If set to true, then finAPI will download just the accounts list with the accounts' information (like account name, number, holder, etc), as well as the accounts' balances (if possible), but skip the download of transactions and securities. Default is false.<br/><br/>NOTES:<br/>&bull; If you skip the download of transactions and securities during an import or update, you can still download them on a later update (though you might not get all positions at a later point, because the date range in which the bank servers provide this data is usually limited). However, once finAPI has downloaded the transactions or securities for the first time, you will not be able to go back to skipping the download of transactions and securities! In other words: Once you make your first request with skipPositionsDownload=false for a certain bank connection, you will no longer be able to make a request with skipPositionsDownload=true for that same bank connection.<br/>&bull; If this bank connection is updated via finAPI's automatic batch update, then transactions and security positions <u>will</u> be downloaded in any case!<br/>&bull; For security accounts, skipping the downloading of the securities might result in the account's balance also not being downloaded.<br/>&bull; For Bausparen accounts, this field is ignored. finAPI will always download transactions for Bausparen accounts.<br/>
     *
     * @return $this
     */
    public function setSkipPositionsDownload($skip_positions_download)
    {
        $this->container['skip_positions_download'] = $skip_positions_download;

        return $this;
    }

    /**
     * Gets load_owner_data
     *
     * @return bool
     */
    public function getLoadOwnerData()
    {
        return $this->container['load_owner_data'];
    }

    /**
     * Sets load_owner_data
     *
     * @param bool $load_owner_data Whether to load information about the bank connection owner(s) - see field 'owners'. Default value is 'false'.<br><br>NOTE: This feature is supported only by the WEB_SCRAPER interface.
     *
     * @return $this
     */
    public function setLoadOwnerData($load_owner_data)
    {
        $this->container['load_owner_data'] = $load_owner_data;

        return $this;
    }

    /**
     * Gets account_references
     *
     * @return \Swagger\Client\Model\AccountReference[]
     */
    public function getAccountReferences()
    {
        return $this->container['account_references'];
    }

    /**
     * Sets account_references
     *
     * @param \Swagger\Client\Model\AccountReference[] $account_references List of accounts for which access is requested from the bank. It must only be passed if the bank interface has the DETAILED_CONSENT property set.
     *
     * @return $this
     */
    public function setAccountReferences($account_references)
    {
        $this->container['account_references'] = $account_references;

        return $this;
    }

    /**
     * Gets account_types
     *
     * @return string[]
     */
    public function getAccountTypes()
    {
        return $this->container['account_types'];
    }

    /**
     * Sets account_types
     *
     * @param string[] $account_types A set of account types of finAPI account types that are considered for the import. Only accounts whose type matches with one of the given types will be imported. Note that when the bank connection does not contain any accounts of the given types, the import will fail with error code NO_ACCOUNTS_FOR_TYPE_LIST. If no values is given, then all accounts will be imported.<br/><br/><br/>Checking,<br/>Savings,<br/>CreditCard,<br/>Security,<br/>Loan,<br/>Pocket (DEPRECATED; will not be returned for any account unless this type has explicitly been set via PATCH),<br/>Membership,<br/>Bausparen<br/><br/><b>This flag is currently not guaranteed to work for all banks!</b>
     *
     * @return $this
     */
    public function setAccountTypes($account_types)
    {
        $allowedValues = $this->getAccountTypesAllowableValues();
        if (!is_null($account_types) && array_diff($account_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_types'] = $account_types;

        return $this;
    }

    /**
     * Gets multi_step_authentication
     *
     * @return \Swagger\Client\Model\MultiStepAuthenticationCallback
     */
    public function getMultiStepAuthentication()
    {
        return $this->container['multi_step_authentication'];
    }

    /**
     * Sets multi_step_authentication
     *
     * @param \Swagger\Client\Model\MultiStepAuthenticationCallback $multi_step_authentication Container for multi-step authentication data
     *
     * @return $this
     */
    public function setMultiStepAuthentication($multi_step_authentication)
    {
        $this->container['multi_step_authentication'] = $multi_step_authentication;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url Must only be passed when the used interface has the property REDIRECT_APPROACH and no web form flow is used. The user will be redirected to the given URL from the bank's website after having entered his credentials.
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets max_days_for_download
     *
     * @return int
     */
    public function getMaxDaysForDownload()
    {
        return $this->container['max_days_for_download'];
    }

    /**
     * Sets max_days_for_download
     *
     * @param int $max_days_for_download Use this parameter if you want to limit the date range for transactions download. The value depicts the number of days that finAPI will download transactions for, starting from - and including - today. For example, if you want to download only transactions from within the past 30 days (including today), then pass the value 30. The minimum allowed value is 14, the maximum value is 3650. You may also pass the value 0 though (which is also the default value when you do not specify this parameter), in which case there will be no limit to the transactions download and finAPI will try to get all transactions that it can. Please note that when you specify the parameter there is no guarantee that finAPI will actually download transactions for the entire given date range, as the bank servers may limit the date range on their own. Also note that this parameter only applies to transactions, not to security positions; finAPI will always download all positions that it can get.<br/><br/><b>Please note: If you are not limiting the maxDaysForDownload with a value smaller than 90 days, the bank is more likely to trigger a strong customer authentication request for the user.<br/>This parameter is applied for the current 'bankingInterface'.</b>
     *
     * @return $this
     */
    public function setMaxDaysForDownload($max_days_for_download)
    {
        $this->container['max_days_for_download'] = $max_days_for_download;

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


