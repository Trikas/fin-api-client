<?php
/**
 * TrainCategorizationTransactionData
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
 * TrainCategorizationTransactionData Class Doc Comment
 *
 * @category Class
 * @description Transaction data for categorization training
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrainCategorizationTransactionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrainCategorizationTransactionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_type_id' => 'int',
        'amount' => 'float',
        'purpose' => 'string',
        'counterpart' => 'string',
        'counterpart_iban' => 'string',
        'counterpart_account_number' => 'string',
        'counterpart_blz' => 'string',
        'counterpart_bic' => 'string',
        'mc_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_type_id' => 'int64',
        'amount' => null,
        'purpose' => null,
        'counterpart' => null,
        'counterpart_iban' => null,
        'counterpart_account_number' => null,
        'counterpart_blz' => null,
        'counterpart_bic' => null,
        'mc_code' => null
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
        'account_type_id' => 'accountTypeId',
        'amount' => 'amount',
        'purpose' => 'purpose',
        'counterpart' => 'counterpart',
        'counterpart_iban' => 'counterpartIban',
        'counterpart_account_number' => 'counterpartAccountNumber',
        'counterpart_blz' => 'counterpartBlz',
        'counterpart_bic' => 'counterpartBic',
        'mc_code' => 'mcCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type_id' => 'setAccountTypeId',
        'amount' => 'setAmount',
        'purpose' => 'setPurpose',
        'counterpart' => 'setCounterpart',
        'counterpart_iban' => 'setCounterpartIban',
        'counterpart_account_number' => 'setCounterpartAccountNumber',
        'counterpart_blz' => 'setCounterpartBlz',
        'counterpart_bic' => 'setCounterpartBic',
        'mc_code' => 'setMcCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type_id' => 'getAccountTypeId',
        'amount' => 'getAmount',
        'purpose' => 'getPurpose',
        'counterpart' => 'getCounterpart',
        'counterpart_iban' => 'getCounterpartIban',
        'counterpart_account_number' => 'getCounterpartAccountNumber',
        'counterpart_blz' => 'getCounterpartBlz',
        'counterpart_bic' => 'getCounterpartBic',
        'mc_code' => 'getMcCode'
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
        $this->container['account_type_id'] = isset($data['account_type_id']) ? $data['account_type_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['counterpart'] = isset($data['counterpart']) ? $data['counterpart'] : null;
        $this->container['counterpart_iban'] = isset($data['counterpart_iban']) ? $data['counterpart_iban'] : null;
        $this->container['counterpart_account_number'] = isset($data['counterpart_account_number']) ? $data['counterpart_account_number'] : null;
        $this->container['counterpart_blz'] = isset($data['counterpart_blz']) ? $data['counterpart_blz'] : null;
        $this->container['counterpart_bic'] = isset($data['counterpart_bic']) ? $data['counterpart_bic'] : null;
        $this->container['mc_code'] = isset($data['mc_code']) ? $data['mc_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_type_id'] === null) {
            $invalidProperties[] = "'account_type_id' can't be null";
        }
        if (($this->container['account_type_id'] > 7)) {
            $invalidProperties[] = "invalid value for 'account_type_id', must be smaller than or equal to 7.";
        }

        if (($this->container['account_type_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_type_id', must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets account_type_id
     *
     * @return int
     */
    public function getAccountTypeId()
    {
        return $this->container['account_type_id'];
    }

    /**
     * Sets account_type_id
     *
     * @param int $account_type_id Identifier of account type.<br/><br/>1 = Checking,<br/>2 = Savings,<br/>3 = CreditCard,<br/>4 = Security,<br/>5 = Loan,<br/>6 = Pocket (DEPRECATED; will not be returned for any account unless this type has explicitly been set via PATCH),<br/>7 = Membership,<br/>8 = Bausparen<br/><br/>
     *
     * @return $this
     */
    public function setAccountTypeId($account_type_id)
    {

        if (($account_type_id > 7)) {
            throw new \InvalidArgumentException('invalid value for $account_type_id when calling TrainCategorizationTransactionData., must be smaller than or equal to 7.');
        }
        if (($account_type_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_type_id when calling TrainCategorizationTransactionData., must be bigger than or equal to 1.');
        }

        $this->container['account_type_id'] = $account_type_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose Purpose. Any symbols are allowed. Maximum length is 2000. Default value: null.
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets counterpart
     *
     * @return string
     */
    public function getCounterpart()
    {
        return $this->container['counterpart'];
    }

    /**
     * Sets counterpart
     *
     * @param string $counterpart Counterpart. Any symbols are allowed. Maximum length is 80. Default value: null.
     *
     * @return $this
     */
    public function setCounterpart($counterpart)
    {
        $this->container['counterpart'] = $counterpart;

        return $this;
    }

    /**
     * Gets counterpart_iban
     *
     * @return string
     */
    public function getCounterpartIban()
    {
        return $this->container['counterpart_iban'];
    }

    /**
     * Sets counterpart_iban
     *
     * @param string $counterpart_iban Counterpart IBAN. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartIban($counterpart_iban)
    {
        $this->container['counterpart_iban'] = $counterpart_iban;

        return $this;
    }

    /**
     * Gets counterpart_account_number
     *
     * @return string
     */
    public function getCounterpartAccountNumber()
    {
        return $this->container['counterpart_account_number'];
    }

    /**
     * Sets counterpart_account_number
     *
     * @param string $counterpart_account_number Counterpart account number. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartAccountNumber($counterpart_account_number)
    {
        $this->container['counterpart_account_number'] = $counterpart_account_number;

        return $this;
    }

    /**
     * Gets counterpart_blz
     *
     * @return string
     */
    public function getCounterpartBlz()
    {
        return $this->container['counterpart_blz'];
    }

    /**
     * Sets counterpart_blz
     *
     * @param string $counterpart_blz Counterpart BLZ. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartBlz($counterpart_blz)
    {
        $this->container['counterpart_blz'] = $counterpart_blz;

        return $this;
    }

    /**
     * Gets counterpart_bic
     *
     * @return string
     */
    public function getCounterpartBic()
    {
        return $this->container['counterpart_bic'];
    }

    /**
     * Sets counterpart_bic
     *
     * @param string $counterpart_bic Counterpart BIC. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartBic($counterpart_bic)
    {
        $this->container['counterpart_bic'] = $counterpart_bic;

        return $this;
    }

    /**
     * Gets mc_code
     *
     * @return string
     */
    public function getMcCode()
    {
        return $this->container['mc_code'];
    }

    /**
     * Sets mc_code
     *
     * @param string $mc_code Merchant category code (for credit card transactions only). Default value: null. NOTE: This field is currently not regarded.
     *
     * @return $this
     */
    public function setMcCode($mc_code)
    {
        $this->container['mc_code'] = $mc_code;

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


