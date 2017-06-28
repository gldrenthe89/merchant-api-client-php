<?php
/**
 * ShipmentApi
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

namespace ChannelEngine\ApiClient\Api;

use \ChannelEngine\ApiClient\ApiClient;
use \ChannelEngine\ApiClient\ApiException;
use \ChannelEngine\ApiClient\Configuration;
use \ChannelEngine\ApiClient\ObjectSerializer;

/**
 * ShipmentApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentApi
{
    /**
     * API Client
     *
     * @var \ChannelEngine\ApiClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ChannelEngine\ApiClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ChannelEngine\ApiClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ChannelEngine\ApiClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ChannelEngine\ApiClient\ApiClient $apiClient set the API client
     *
     * @return ShipmentApi
     */
    public function setApiClient(\ChannelEngine\ApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation shipmentCreate
     *
     * Merchant: Create Shipment
     *
     * @param \ChannelEngine\ApiClient\Model\MerchantShipmentRequest $model  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function shipmentCreate($model)
    {
        list($response) = $this->shipmentCreateWithHttpInfo($model);
        return $response;
    }

    /**
     * Operation shipmentCreateWithHttpInfo
     *
     * Merchant: Create Shipment
     *
     * @param \ChannelEngine\ApiClient\Model\MerchantShipmentRequest $model  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function shipmentCreateWithHttpInfo($model)
    {
        // verify the required parameter 'model' is set
        if ($model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $model when calling shipmentCreate');
        }
        // parse inputs
        $resourcePath = "/v2/shipments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'text/json', 'application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($model)) {
            $_tempBody = $model;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\ApiResponse',
                '/v2/shipments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation shipmentIndex
     *
     * Channel: Get Shipments
     *
     * @param \DateTime $createdSince  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse
     */
    public function shipmentIndex($createdSince)
    {
        list($response) = $this->shipmentIndexWithHttpInfo($createdSince);
        return $response;
    }

    /**
     * Operation shipmentIndexWithHttpInfo
     *
     * Channel: Get Shipments
     *
     * @param \DateTime $createdSince  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function shipmentIndexWithHttpInfo($createdSince)
    {
        // verify the required parameter 'createdSince' is set
        if ($createdSince === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createdSince when calling shipmentIndex');
        }
        // parse inputs
        $resourcePath = "/v2/shipments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($createdSince !== null) {
            $queryParams['createdSince'] = $this->apiClient->getSerializer()->toQueryValue($createdSince);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse',
                '/v2/shipments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation shipmentUpdate
     *
     * Merchant: Update Shipment
     *
     * @param string $merchantShipmentNo The merchant&#39;s shipment reference (required)
     * @param \ChannelEngine\ApiClient\Model\MerchantShipmentTrackingRequest $model The updated tracking information (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function shipmentUpdate($merchantShipmentNo, $model)
    {
        list($response) = $this->shipmentUpdateWithHttpInfo($merchantShipmentNo, $model);
        return $response;
    }

    /**
     * Operation shipmentUpdateWithHttpInfo
     *
     * Merchant: Update Shipment
     *
     * @param string $merchantShipmentNo The merchant&#39;s shipment reference (required)
     * @param \ChannelEngine\ApiClient\Model\MerchantShipmentTrackingRequest $model The updated tracking information (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function shipmentUpdateWithHttpInfo($merchantShipmentNo, $model)
    {
        // verify the required parameter 'merchantShipmentNo' is set
        if ($merchantShipmentNo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchantShipmentNo when calling shipmentUpdate');
        }
        // verify the required parameter 'model' is set
        if ($model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $model when calling shipmentUpdate');
        }
        // parse inputs
        $resourcePath = "/v2/shipments/{merchantShipmentNo}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']);

        // path params
        if ($merchantShipmentNo !== null) {
            $resourcePath = str_replace(
                "{" . "merchantShipmentNo" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchantShipmentNo),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($model)) {
            $_tempBody = $model;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\ApiResponse',
                '/v2/shipments/{merchantShipmentNo}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
