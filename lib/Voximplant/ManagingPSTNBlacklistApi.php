<?php
/**
 * ManagingPSTNBlacklistApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Voximplant HTTP API
 *
 * Voximplant HTTP API description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@voximplant.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Voximplant;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ManagingPSTNBlacklistApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagingPSTNBlacklistApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.voximplant.com/platform_api/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ManagingPSTNBlacklistApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addPstnBlackListItem
     *
     * 
     *
     * @param string $pstn_blacklist_phone The phone number in format e164. (required)
     * @return \Swagger\Client\Model\InlineResponse2005
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addPstnBlackListItem($pstn_blacklist_phone)
    {
        list($response) = $this->addPstnBlackListItemWithHttpInfo($pstn_blacklist_phone);
        return $response;
    }

    /**
     * Operation addPstnBlackListItemWithHttpInfo
     *
     * 
     *
     * @param string $pstn_blacklist_phone The phone number in format e164. (required)
     * @return Array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addPstnBlackListItemWithHttpInfo($pstn_blacklist_phone)
    {
        // verify the required parameter 'pstn_blacklist_phone' is set
        if ($pstn_blacklist_phone === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pstn_blacklist_phone when calling addPstnBlackListItem');
        }
        // parse inputs
        $resourcePath = "/AddPstnBlackListItem";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($pstn_blacklist_phone !== null) {
            $formParams['pstn_blacklist_phone'] = $this->apiClient->getSerializer()->toFormValue($pstn_blacklist_phone);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2005',
                '/AddPstnBlackListItem'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delPstnBlackListItem
     *
     * 
     *
     * @param float $pstn_blacklist_id The PSTN black list item ID. (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function delPstnBlackListItem($pstn_blacklist_id)
    {
        list($response) = $this->delPstnBlackListItemWithHttpInfo($pstn_blacklist_id);
        return $response;
    }

    /**
     * Operation delPstnBlackListItemWithHttpInfo
     *
     * 
     *
     * @param float $pstn_blacklist_id The PSTN black list item ID. (required)
     * @return Array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function delPstnBlackListItemWithHttpInfo($pstn_blacklist_id)
    {
        // verify the required parameter 'pstn_blacklist_id' is set
        if ($pstn_blacklist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pstn_blacklist_id when calling delPstnBlackListItem');
        }
        // parse inputs
        $resourcePath = "/DelPstnBlackListItem";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($pstn_blacklist_id !== null) {
            $formParams['pstn_blacklist_id'] = $this->apiClient->getSerializer()->toFormValue($pstn_blacklist_id);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse200',
                '/DelPstnBlackListItem'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPstnBlackList
     *
     * 
     *
     * @param float $pstn_blacklist_id The PSTN black list item ID for filter. (optional)
     * @param string $pstn_blacklist_phone The phone number in format e164 for filter. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \Swagger\Client\Model\InlineResponse20044
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getPstnBlackList($pstn_blacklist_id = null, $pstn_blacklist_phone = null, $count = null, $offset = null)
    {
        list($response) = $this->getPstnBlackListWithHttpInfo($pstn_blacklist_id, $pstn_blacklist_phone, $count, $offset);
        return $response;
    }

    /**
     * Operation getPstnBlackListWithHttpInfo
     *
     * 
     *
     * @param float $pstn_blacklist_id The PSTN black list item ID for filter. (optional)
     * @param string $pstn_blacklist_phone The phone number in format e164 for filter. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20044, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getPstnBlackListWithHttpInfo($pstn_blacklist_id = null, $pstn_blacklist_phone = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetPstnBlackList";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($pstn_blacklist_id !== null) {
            $formParams['pstn_blacklist_id'] = $this->apiClient->getSerializer()->toFormValue($pstn_blacklist_id);
        }
        // form params
        if ($pstn_blacklist_phone !== null) {
            $formParams['pstn_blacklist_phone'] = $this->apiClient->getSerializer()->toFormValue($pstn_blacklist_phone);
        }
        // form params
        if ($count !== null) {
            $formParams['count'] = $this->apiClient->getSerializer()->toFormValue($count);
        }
        // form params
        if ($offset !== null) {
            $formParams['offset'] = $this->apiClient->getSerializer()->toFormValue($offset);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20044',
                '/GetPstnBlackList'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20044', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20044', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setPstnBlackListItem
     *
     * 
     *
     * @param float $pstn_blacklist_id The PSTN black list item ID. (required)
     * @param string $pstn_blacklist_phone The new phone number in format e164. (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function setPstnBlackListItem($pstn_blacklist_id, $pstn_blacklist_phone)
    {
        list($response) = $this->setPstnBlackListItemWithHttpInfo($pstn_blacklist_id, $pstn_blacklist_phone);
        return $response;
    }

    /**
     * Operation setPstnBlackListItemWithHttpInfo
     *
     * 
     *
     * @param float $pstn_blacklist_id The PSTN black list item ID. (required)
     * @param string $pstn_blacklist_phone The new phone number in format e164. (required)
     * @return Array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function setPstnBlackListItemWithHttpInfo($pstn_blacklist_id, $pstn_blacklist_phone)
    {
        // verify the required parameter 'pstn_blacklist_id' is set
        if ($pstn_blacklist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pstn_blacklist_id when calling setPstnBlackListItem');
        }
        // verify the required parameter 'pstn_blacklist_phone' is set
        if ($pstn_blacklist_phone === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pstn_blacklist_phone when calling setPstnBlackListItem');
        }
        // parse inputs
        $resourcePath = "/SetPstnBlackListItem";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($pstn_blacklist_id !== null) {
            $formParams['pstn_blacklist_id'] = $this->apiClient->getSerializer()->toFormValue($pstn_blacklist_id);
        }
        // form params
        if ($pstn_blacklist_phone !== null) {
            $formParams['pstn_blacklist_phone'] = $this->apiClient->getSerializer()->toFormValue($pstn_blacklist_phone);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse200',
                '/SetPstnBlackListItem'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}