<?php
/**
 * ChannelProductChangesResponse
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
 * OpenAPI spec version: 2.4.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * ChannelProductChangesResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelProductChangesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelProductChangesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'toBeCreated' => '\ChannelEngine\ApiClient\Model\ChannelProductResponse[]',
        'toBeUpdated' => '\ChannelEngine\ApiClient\Model\ChannelProductResponse[]',
        'toBeRemoved' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'toBeCreated' => null,
        'toBeUpdated' => null,
        'toBeRemoved' => null
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
        'toBeCreated' => 'ToBeCreated',
        'toBeUpdated' => 'ToBeUpdated',
        'toBeRemoved' => 'ToBeRemoved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'toBeCreated' => 'setToBeCreated',
        'toBeUpdated' => 'setToBeUpdated',
        'toBeRemoved' => 'setToBeRemoved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'toBeCreated' => 'getToBeCreated',
        'toBeUpdated' => 'getToBeUpdated',
        'toBeRemoved' => 'getToBeRemoved'
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
        $this->container['toBeCreated'] = isset($data['toBeCreated']) ? $data['toBeCreated'] : null;
        $this->container['toBeUpdated'] = isset($data['toBeUpdated']) ? $data['toBeUpdated'] : null;
        $this->container['toBeRemoved'] = isset($data['toBeRemoved']) ? $data['toBeRemoved'] : null;
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

        return true;
    }


    /**
     * Gets toBeCreated
     *
     * @return \ChannelEngine\ApiClient\Model\ChannelProductResponse[]
     */
    public function getToBeCreated()
    {
        return $this->container['toBeCreated'];
    }

    /**
     * Sets toBeCreated
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelProductResponse[] $toBeCreated toBeCreated
     *
     * @return $this
     */
    public function setToBeCreated($toBeCreated)
    {
        $this->container['toBeCreated'] = $toBeCreated;

        return $this;
    }

    /**
     * Gets toBeUpdated
     *
     * @return \ChannelEngine\ApiClient\Model\ChannelProductResponse[]
     */
    public function getToBeUpdated()
    {
        return $this->container['toBeUpdated'];
    }

    /**
     * Sets toBeUpdated
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelProductResponse[] $toBeUpdated toBeUpdated
     *
     * @return $this
     */
    public function setToBeUpdated($toBeUpdated)
    {
        $this->container['toBeUpdated'] = $toBeUpdated;

        return $this;
    }

    /**
     * Gets toBeRemoved
     *
     * @return string[]
     */
    public function getToBeRemoved()
    {
        return $this->container['toBeRemoved'];
    }

    /**
     * Sets toBeRemoved
     *
     * @param string[] $toBeRemoved toBeRemoved
     *
     * @return $this
     */
    public function setToBeRemoved($toBeRemoved)
    {
        $this->container['toBeRemoved'] = $toBeRemoved;

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


