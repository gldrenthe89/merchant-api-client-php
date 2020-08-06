<?php
/**
 * CollectionOfChannelListedProductResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.9.3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * CollectionOfChannelListedProductResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CollectionOfChannelListedProductResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CollectionOfChannelListedProductResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\ChannelEngine\Merchant\ApiClient\Model\ChannelListedProductResponse[]',
        'count' => 'int',
        'totalCount' => 'int',
        'itemsPerPage' => 'int',
        'statusCode' => 'int',
        'logId' => 'int',
        'success' => 'bool',
        'message' => 'string',
        'validationErrors' => 'map[string,string[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content' => null,
        'count' => 'int32',
        'totalCount' => 'int32',
        'itemsPerPage' => 'int32',
        'statusCode' => 'int32',
        'logId' => 'int32',
        'success' => null,
        'message' => null,
        'validationErrors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content' => 'Content',
        'count' => 'Count',
        'totalCount' => 'TotalCount',
        'itemsPerPage' => 'ItemsPerPage',
        'statusCode' => 'StatusCode',
        'logId' => 'LogId',
        'success' => 'Success',
        'message' => 'Message',
        'validationErrors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'count' => 'setCount',
        'totalCount' => 'setTotalCount',
        'itemsPerPage' => 'setItemsPerPage',
        'statusCode' => 'setStatusCode',
        'logId' => 'setLogId',
        'success' => 'setSuccess',
        'message' => 'setMessage',
        'validationErrors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'count' => 'getCount',
        'totalCount' => 'getTotalCount',
        'itemsPerPage' => 'getItemsPerPage',
        'statusCode' => 'getStatusCode',
        'logId' => 'getLogId',
        'success' => 'getSuccess',
        'message' => 'getMessage',
        'validationErrors' => 'getValidationErrors'
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
        return self::$openAPIModelName;
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['itemsPerPage'] = isset($data['itemsPerPage']) ? $data['itemsPerPage'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['validationErrors'] = isset($data['validationErrors']) ? $data['validationErrors'] : null;
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
     * Gets content
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ChannelListedProductResponse[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ChannelListedProductResponse[]|null $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count The number of items in the current response.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount The total number of items.
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets itemsPerPage
     *
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->container['itemsPerPage'];
    }

    /**
     * Sets itemsPerPage
     *
     * @param int|null $itemsPerPage The number of items per page.
     *
     * @return $this
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->container['itemsPerPage'] = $itemsPerPage;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param int|null $statusCode statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets logId
     *
     * @return int|null
     */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
     * Sets logId
     *
     * @param int|null $logId logId
     *
     * @return $this
     */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets validationErrors
     *
     * @return map[string,string[]]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validationErrors'];
    }

    /**
     * Sets validationErrors
     *
     * @param map[string,string[]]|null $validationErrors validationErrors
     *
     * @return $this
     */
    public function setValidationErrors($validationErrors)
    {
        $this->container['validationErrors'] = $validationErrors;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


