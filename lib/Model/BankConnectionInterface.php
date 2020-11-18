<?php
/**
 * BankConnectionInterface
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
 * BankConnectionInterface Class Doc Comment
 *
 * @category Class
 * @description Resource representing a bank connection interface
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankConnectionInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankConnectionInterface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'interface' => 'string',
        'login_credentials' => '\Swagger\Client\Model\LoginCredentialResource[]',
        'default_two_step_procedure_id' => 'string',
        'two_step_procedures' => '\Swagger\Client\Model\TwoStepProcedure[]',
        'ais_consent' => '\Swagger\Client\Model\BankConsent',
        'last_manual_update' => '\Swagger\Client\Model\UpdateResult',
        'last_auto_update' => '\Swagger\Client\Model\UpdateResult',
        'user_action_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'interface' => null,
        'login_credentials' => null,
        'default_two_step_procedure_id' => null,
        'two_step_procedures' => null,
        'ais_consent' => null,
        'last_manual_update' => null,
        'last_auto_update' => null,
        'user_action_required' => null
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
        'login_credentials' => 'loginCredentials',
        'default_two_step_procedure_id' => 'defaultTwoStepProcedureId',
        'two_step_procedures' => 'twoStepProcedures',
        'ais_consent' => 'aisConsent',
        'last_manual_update' => 'lastManualUpdate',
        'last_auto_update' => 'lastAutoUpdate',
        'user_action_required' => 'userActionRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interface' => 'setInterface',
        'login_credentials' => 'setLoginCredentials',
        'default_two_step_procedure_id' => 'setDefaultTwoStepProcedureId',
        'two_step_procedures' => 'setTwoStepProcedures',
        'ais_consent' => 'setAisConsent',
        'last_manual_update' => 'setLastManualUpdate',
        'last_auto_update' => 'setLastAutoUpdate',
        'user_action_required' => 'setUserActionRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interface' => 'getInterface',
        'login_credentials' => 'getLoginCredentials',
        'default_two_step_procedure_id' => 'getDefaultTwoStepProcedureId',
        'two_step_procedures' => 'getTwoStepProcedures',
        'ais_consent' => 'getAisConsent',
        'last_manual_update' => 'getLastManualUpdate',
        'last_auto_update' => 'getLastAutoUpdate',
        'user_action_required' => 'getUserActionRequired'
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
        $this->container['login_credentials'] = isset($data['login_credentials']) ? $data['login_credentials'] : null;
        $this->container['default_two_step_procedure_id'] = isset($data['default_two_step_procedure_id']) ? $data['default_two_step_procedure_id'] : null;
        $this->container['two_step_procedures'] = isset($data['two_step_procedures']) ? $data['two_step_procedures'] : null;
        $this->container['ais_consent'] = isset($data['ais_consent']) ? $data['ais_consent'] : null;
        $this->container['last_manual_update'] = isset($data['last_manual_update']) ? $data['last_manual_update'] : null;
        $this->container['last_auto_update'] = isset($data['last_auto_update']) ? $data['last_auto_update'] : null;
        $this->container['user_action_required'] = isset($data['user_action_required']) ? $data['user_action_required'] : null;
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

        if ($this->container['user_action_required'] === null) {
            $invalidProperties[] = "'user_action_required' can't be null";
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
     * @param string $interface Bank interface. Possible values:<br><br>&bull; <code>FINTS_SERVER</code> - means that finAPI will download data via the bank's FinTS interface.<br>&bull; <code>WEB_SCRAPER</code> - means that finAPI will parse data from the bank's online banking website.<br>&bull; <code>XS2A</code> - means that finAPI will download data via the bank's XS2A interface.<br>
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
     * Gets login_credentials
     *
     * @return \Swagger\Client\Model\LoginCredentialResource[]
     */
    public function getLoginCredentials()
    {
        return $this->container['login_credentials'];
    }

    /**
     * Sets login_credentials
     *
     * @param \Swagger\Client\Model\LoginCredentialResource[] $login_credentials Login fields for this interface, in the order that we suggest to show them to the user.
     *
     * @return $this
     */
    public function setLoginCredentials($login_credentials)
    {
        $this->container['login_credentials'] = $login_credentials;

        return $this;
    }

    /**
     * Gets default_two_step_procedure_id
     *
     * @return string
     */
    public function getDefaultTwoStepProcedureId()
    {
        return $this->container['default_two_step_procedure_id'];
    }

    /**
     * Sets default_two_step_procedure_id
     *
     * @param string $default_two_step_procedure_id The default two-step-procedure for this interface. Must match one of the available 'procedureId's from the 'twoStepProcedures' list. When this field is set, then finAPI will automatically try to select the procedure wherever applicable. Note that the list of available procedures of a bank connection may change as a result of an update of the connection, and if this field references a procedure that is no longer available after an update, finAPI will automatically clear the default procedure (set it to null).
     *
     * @return $this
     */
    public function setDefaultTwoStepProcedureId($default_two_step_procedure_id)
    {
        $this->container['default_two_step_procedure_id'] = $default_two_step_procedure_id;

        return $this;
    }

    /**
     * Gets two_step_procedures
     *
     * @return \Swagger\Client\Model\TwoStepProcedure[]
     */
    public function getTwoStepProcedures()
    {
        return $this->container['two_step_procedures'];
    }

    /**
     * Sets two_step_procedures
     *
     * @param \Swagger\Client\Model\TwoStepProcedure[] $two_step_procedures Available two-step-procedures in this interface, used for submitting a money transfer or direct debit request (see /accounts/requestSepaMoneyTransfer or /requestSepaDirectDebit),or for multi-step-authentication during bank connection import or update. The available two-step-procedures mya be re-evaluated each time this bank connection is updated (/bankConnections/update). This means that this list may change as a result of an update.
     *
     * @return $this
     */
    public function setTwoStepProcedures($two_step_procedures)
    {
        $this->container['two_step_procedures'] = $two_step_procedures;

        return $this;
    }

    /**
     * Gets ais_consent
     *
     * @return \Swagger\Client\Model\BankConsent
     */
    public function getAisConsent()
    {
        return $this->container['ais_consent'];
    }

    /**
     * Sets ais_consent
     *
     * @param \Swagger\Client\Model\BankConsent $ais_consent If this field is set, it means that this interface is handing out a consent to finAPI in exchange for the login credentials. finAPI needs to use this consent to get access to the account list and account data (i.e. Account Information Services, AIS). If this field is not set, it means that this interface does not use such consents.
     *
     * @return $this
     */
    public function setAisConsent($ais_consent)
    {
        $this->container['ais_consent'] = $ais_consent;

        return $this;
    }

    /**
     * Gets last_manual_update
     *
     * @return \Swagger\Client\Model\UpdateResult
     */
    public function getLastManualUpdate()
    {
        return $this->container['last_manual_update'];
    }

    /**
     * Sets last_manual_update
     *
     * @param \Swagger\Client\Model\UpdateResult $last_manual_update Result of the last manual update of the associated bank connection using this interface. If no manual update has ever been done so far with this interface, then this field will not be set.
     *
     * @return $this
     */
    public function setLastManualUpdate($last_manual_update)
    {
        $this->container['last_manual_update'] = $last_manual_update;

        return $this;
    }

    /**
     * Gets last_auto_update
     *
     * @return \Swagger\Client\Model\UpdateResult
     */
    public function getLastAutoUpdate()
    {
        return $this->container['last_auto_update'];
    }

    /**
     * Sets last_auto_update
     *
     * @param \Swagger\Client\Model\UpdateResult $last_auto_update Result of the last auto update of the associated bank connection using this interface (ran by finAPI's automatic batch update process). If no auto update has ever been done so far with this interface, then this field will not be set.
     *
     * @return $this
     */
    public function setLastAutoUpdate($last_auto_update)
    {
        $this->container['last_auto_update'] = $last_auto_update;

        return $this;
    }

    /**
     * Gets user_action_required
     *
     * @return bool
     */
    public function getUserActionRequired()
    {
        return $this->container['user_action_required'];
    }

    /**
     * Sets user_action_required
     *
     * @param bool $user_action_required This field indicates whether the user's attention is required for the next update of the given bank connection interface.<br/>If the field is true, finAPI stops auto-updates of this bank connection interface to mitigate the risk of locking the user's bank account and also of triggering a multi-step authentication that might lead to a notification being sent to the end-user.<br/>Every communication with the bank (e.g. updating a bank connection, submitting a money transfer or a direct debit, etc.) can change the value of this flag. If the field is true, we recommend to ask the end-user to trigger a manual update of the bank connection interface (using the 'Update a bank connection' service). If the update completes successfully without triggering a strong customer authentication or results in storing a valid XS2A consent, this flag will switch to false. The logic about determination of the user's attention being required might change in time. Please use this as a convenience function to know, when you have to involve the user in the next communication with the bank. Once the flag switches to false, the bank connection interface will be enabled again for the auto-update (if it is configured).
     *
     * @return $this
     */
    public function setUserActionRequired($user_action_required)
    {
        $this->container['user_action_required'] = $user_action_required;

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

