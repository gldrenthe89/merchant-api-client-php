<?php
/**
 * BackOrder
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
 * OpenAPI spec version: v2
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
 * BackOrder Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BackOrder implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BackOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantBackorderNo' => 'string',
        'merchantOrderNo' => 'string',
        'channelOrderNo' => 'string',
        'lines' => '\ChannelEngine\ApiClient\Model\BackOrderLine[]'
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
        'merchantBackorderNo' => 'MerchantBackorderNo',
        'merchantOrderNo' => 'MerchantOrderNo',
        'channelOrderNo' => 'ChannelOrderNo',
        'lines' => 'Lines'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantBackorderNo' => 'setMerchantBackorderNo',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'channelOrderNo' => 'setChannelOrderNo',
        'lines' => 'setLines'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantBackorderNo' => 'getMerchantBackorderNo',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'channelOrderNo' => 'getChannelOrderNo',
        'lines' => 'getLines'
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
        $this->container['merchantBackorderNo'] = isset($data['merchantBackorderNo']) ? $data['merchantBackorderNo'] : null;
        $this->container['merchantOrderNo'] = isset($data['merchantOrderNo']) ? $data['merchantOrderNo'] : null;
        $this->container['channelOrderNo'] = isset($data['channelOrderNo']) ? $data['channelOrderNo'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['merchantBackorderNo'] === null) {
            $invalid_properties[] = "'merchantBackorderNo' can't be null";
        }
        if ((strlen($this->container['merchantBackorderNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'merchantBackorderNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['merchantBackorderNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'merchantBackorderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['merchantOrderNo'] === null) {
            $invalid_properties[] = "'merchantOrderNo' can't be null";
        }
        if ((strlen($this->container['merchantOrderNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'merchantOrderNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['merchantOrderNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'merchantOrderNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['channelOrderNo']) && (strlen($this->container['channelOrderNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'channelOrderNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelOrderNo']) && (strlen($this->container['channelOrderNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'channelOrderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['lines'] === null) {
            $invalid_properties[] = "'lines' can't be null";
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

        if ($this->container['merchantBackorderNo'] === null) {
            return false;
        }
        if (strlen($this->container['merchantBackorderNo']) > 50) {
            return false;
        }
        if (strlen($this->container['merchantBackorderNo']) < 0) {
            return false;
        }
        if ($this->container['merchantOrderNo'] === null) {
            return false;
        }
        if (strlen($this->container['merchantOrderNo']) > 50) {
            return false;
        }
        if (strlen($this->container['merchantOrderNo']) < 0) {
            return false;
        }
        if (strlen($this->container['channelOrderNo']) > 50) {
            return false;
        }
        if (strlen($this->container['channelOrderNo']) < 0) {
            return false;
        }
        if ($this->container['lines'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantBackorderNo
     * @return string
     */
    public function getMerchantBackorderNo()
    {
        return $this->container['merchantBackorderNo'];
    }

    /**
     * Sets merchantBackorderNo
     * @param string $merchantBackorderNo
     * @return $this
     */
    public function setMerchantBackorderNo($merchantBackorderNo)
    {
        if ((strlen($merchantBackorderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantBackorderNo when calling BackOrder., must be smaller than or equal to 50.');
        }
        if ((strlen($merchantBackorderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantBackorderNo when calling BackOrder., must be bigger than or equal to 0.');
        }

        $this->container['merchantBackorderNo'] = $merchantBackorderNo;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling BackOrder., must be smaller than or equal to 50.');
        }
        if ((strlen($merchantOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling BackOrder., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets channelOrderNo
     * @return string
     */
    public function getChannelOrderNo()
    {
        return $this->container['channelOrderNo'];
    }

    /**
     * Sets channelOrderNo
     * @param string $channelOrderNo
     * @return $this
     */
    public function setChannelOrderNo($channelOrderNo)
    {
        if (!is_null($channelOrderNo) && (strlen($channelOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelOrderNo when calling BackOrder., must be smaller than or equal to 50.');
        }
        if (!is_null($channelOrderNo) && (strlen($channelOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelOrderNo when calling BackOrder., must be bigger than or equal to 0.');
        }

        $this->container['channelOrderNo'] = $channelOrderNo;

        return $this;
    }

    /**
     * Gets lines
     * @return \ChannelEngine\ApiClient\Model\BackOrderLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     * @param \ChannelEngine\ApiClient\Model\BackOrderLine[] $lines
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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


