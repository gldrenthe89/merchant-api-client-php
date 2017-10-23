<?php
/**
 * ChannelShipmentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\ApiClient\ObjectSerializer;

/**
 * ChannelShipmentResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channelOrderNo' => 'string',
        'lines' => '\ChannelEngine\ApiClient\Model\ChannelShipmentLineResponse[]',
        'trackTraceNo' => 'string',
        'trackTraceUrl' => 'string',
        'method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channelOrderNo' => null,
        'lines' => null,
        'trackTraceNo' => null,
        'trackTraceUrl' => null,
        'method' => null
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
        'channelOrderNo' => 'ChannelOrderNo',
        'lines' => 'Lines',
        'trackTraceNo' => 'TrackTraceNo',
        'trackTraceUrl' => 'TrackTraceUrl',
        'method' => 'Method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelOrderNo' => 'setChannelOrderNo',
        'lines' => 'setLines',
        'trackTraceNo' => 'setTrackTraceNo',
        'trackTraceUrl' => 'setTrackTraceUrl',
        'method' => 'setMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelOrderNo' => 'getChannelOrderNo',
        'lines' => 'getLines',
        'trackTraceNo' => 'getTrackTraceNo',
        'trackTraceUrl' => 'getTrackTraceUrl',
        'method' => 'getMethod'
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
        $this->container['channelOrderNo'] = isset($data['channelOrderNo']) ? $data['channelOrderNo'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['trackTraceNo'] = isset($data['trackTraceNo']) ? $data['trackTraceNo'] : null;
        $this->container['trackTraceUrl'] = isset($data['trackTraceUrl']) ? $data['trackTraceUrl'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channelOrderNo'] === null) {
            $invalidProperties[] = "'channelOrderNo' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if (!is_null($this->container['trackTraceNo']) && (strlen($this->container['trackTraceNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'trackTraceNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['trackTraceNo']) && (strlen($this->container['trackTraceNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'trackTraceNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['trackTraceUrl']) && (strlen($this->container['trackTraceUrl']) > 250)) {
            $invalidProperties[] = "invalid value for 'trackTraceUrl', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['trackTraceUrl']) && (strlen($this->container['trackTraceUrl']) < 0)) {
            $invalidProperties[] = "invalid value for 'trackTraceUrl', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['method']) && (strlen($this->container['method']) > 50)) {
            $invalidProperties[] = "invalid value for 'method', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['method']) && (strlen($this->container['method']) < 0)) {
            $invalidProperties[] = "invalid value for 'method', the character length must be bigger than or equal to 0.";
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

        if ($this->container['channelOrderNo'] === null) {
            return false;
        }
        if ($this->container['lines'] === null) {
            return false;
        }
        if (strlen($this->container['trackTraceNo']) > 50) {
            return false;
        }
        if (strlen($this->container['trackTraceNo']) < 0) {
            return false;
        }
        if (strlen($this->container['trackTraceUrl']) > 250) {
            return false;
        }
        if (strlen($this->container['trackTraceUrl']) < 0) {
            return false;
        }
        if (strlen($this->container['method']) > 50) {
            return false;
        }
        if (strlen($this->container['method']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets channelOrderNo
     *
     * @return string
     */
    public function getChannelOrderNo()
    {
        return $this->container['channelOrderNo'];
    }

    /**
     * Sets channelOrderNo
     *
     * @param string $channelOrderNo channelOrderNo
     *
     * @return $this
     */
    public function setChannelOrderNo($channelOrderNo)
    {
        $this->container['channelOrderNo'] = $channelOrderNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\ApiClient\Model\ChannelShipmentLineResponse[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelShipmentLineResponse[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets trackTraceNo
     *
     * @return string
     */
    public function getTrackTraceNo()
    {
        return $this->container['trackTraceNo'];
    }

    /**
     * Sets trackTraceNo
     *
     * @param string $trackTraceNo trackTraceNo
     *
     * @return $this
     */
    public function setTrackTraceNo($trackTraceNo)
    {
        if (!is_null($trackTraceNo) && (strlen($trackTraceNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceNo when calling ChannelShipmentResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($trackTraceNo) && (strlen($trackTraceNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceNo when calling ChannelShipmentResponse., must be bigger than or equal to 0.');
        }

        $this->container['trackTraceNo'] = $trackTraceNo;

        return $this;
    }

    /**
     * Gets trackTraceUrl
     *
     * @return string
     */
    public function getTrackTraceUrl()
    {
        return $this->container['trackTraceUrl'];
    }

    /**
     * Sets trackTraceUrl
     *
     * @param string $trackTraceUrl trackTraceUrl
     *
     * @return $this
     */
    public function setTrackTraceUrl($trackTraceUrl)
    {
        if (!is_null($trackTraceUrl) && (strlen($trackTraceUrl) > 250)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceUrl when calling ChannelShipmentResponse., must be smaller than or equal to 250.');
        }
        if (!is_null($trackTraceUrl) && (strlen($trackTraceUrl) < 0)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceUrl when calling ChannelShipmentResponse., must be bigger than or equal to 0.');
        }

        $this->container['trackTraceUrl'] = $trackTraceUrl;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        if (!is_null($method) && (strlen($method) > 50)) {
            throw new \InvalidArgumentException('invalid length for $method when calling ChannelShipmentResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($method) && (strlen($method) < 0)) {
            throw new \InvalidArgumentException('invalid length for $method when calling ChannelShipmentResponse., must be bigger than or equal to 0.');
        }

        $this->container['method'] = $method;

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


