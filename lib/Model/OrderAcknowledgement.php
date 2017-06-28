<?php
/**
 * OrderAcknowledgement
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Model;

use \ArrayAccess;

/**
 * OrderAcknowledgement Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderAcknowledgement implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderAcknowledgement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantOrderNo' => 'string',
        'orderId' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantOrderNo' => 'MerchantOrderNo',
        'orderId' => 'OrderId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderNo' => 'setMerchantOrderNo',
        'orderId' => 'setOrderId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderNo' => 'getMerchantOrderNo',
        'orderId' => 'getOrderId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantOrderNo'] = isset($data['merchantOrderNo']) ? $data['merchantOrderNo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['merchantOrderNo'] === null) {
            $invalid_properties[] = "'merchantOrderNo' can't be null";
        }
        if ((strlen($this->container['merchantOrderNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'merchantOrderNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['merchantOrderNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'merchantOrderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['orderId'] === null) {
            $invalid_properties[] = "'orderId' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['merchantOrderNo'] === null) {
            return false;
        }
        if (strlen($this->container['merchantOrderNo']) > 50) {
            return false;
        }
        if (strlen($this->container['merchantOrderNo']) < 0) {
            return false;
        }
        if ($this->container['orderId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantOrderNo
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     * @param string $merchantOrderNo
     * @return $this
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        if ((strlen($merchantOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling OrderAcknowledgement., must be smaller than or equal to 50.');
        }
        if ((strlen($merchantOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling OrderAcknowledgement., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets orderId
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     * @param int $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


