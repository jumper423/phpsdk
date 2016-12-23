<?php
/**
 * ManagingAuthorizedIPsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ManagingAuthorizedIPsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagingAuthorizedIPsApi
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
        if ($apiClient === null) {
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
     * @return ManagingAuthorizedIPsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addAuthorizedAccountIP
     *
     * 
     *
     * @param string $authorized_ip The authorized IP4 or network. (required)
     * @param bool $allowed Set false to add the IP to the blacklist. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function addAuthorizedAccountIP($authorized_ip, $allowed = null)
    {
        list($response) = $this->addAuthorizedAccountIPWithHttpInfo($authorized_ip, $allowed);
        return $response;
    }

    /**
     * Operation addAuthorizedAccountIPWithHttpInfo
     *
     * 
     *
     * @param string $authorized_ip The authorized IP4 or network. (required)
     * @param bool $allowed Set false to add the IP to the blacklist. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function addAuthorizedAccountIPWithHttpInfo($authorized_ip, $allowed = null)
    {
        // verify the required parameter 'authorized_ip' is set
        if ($authorized_ip === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorized_ip when calling addAuthorizedAccountIP');
        }
        // parse inputs
        $resourcePath = "/AddAuthorizedAccountIP";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($authorized_ip !== null) {
            $formParams['authorized_ip'] = $this->apiClient->getSerializer()->toFormValue($authorized_ip);
        }
        // form params
        if ($allowed !== null) {
            $formParams['allowed'] = $this->apiClient->getSerializer()->toFormValue($allowed);
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
                '/AddAuthorizedAccountIP'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
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
     * Operation checkAuthorizedAccountIP
     *
     * 
     *
     * @param string $authorized_ip The IP4 to test. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse20017
     */
    public function checkAuthorizedAccountIP($authorized_ip)
    {
        list($response) = $this->checkAuthorizedAccountIPWithHttpInfo($authorized_ip);
        return $response;
    }

    /**
     * Operation checkAuthorizedAccountIPWithHttpInfo
     *
     * 
     *
     * @param string $authorized_ip The IP4 to test. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse20017, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkAuthorizedAccountIPWithHttpInfo($authorized_ip)
    {
        // verify the required parameter 'authorized_ip' is set
        if ($authorized_ip === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorized_ip when calling checkAuthorizedAccountIP');
        }
        // parse inputs
        $resourcePath = "/CheckAuthorizedAccountIP";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($authorized_ip !== null) {
            $formParams['authorized_ip'] = $this->apiClient->getSerializer()->toFormValue($authorized_ip);
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
                '\Swagger\Client\Model\InlineResponse20017',
                '/CheckAuthorizedAccountIP'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20017', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20017', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delAuthorizedAccountIP
     *
     * 
     *
     * @param string $authorized_ip The authorized IP4 or network to remove. Set the &#x60;all&#x60; value to remove the all items. (required)
     * @param string $contains_ip Can be used instead of &lt;b&gt;autharized_ip&lt;/b&gt;. Specify the parameter to remove the networks that contains the particular IP4. (required)
     * @param bool $allowed Set true to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from the all lists. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse20020
     */
    public function delAuthorizedAccountIP($authorized_ip, $contains_ip, $allowed = null)
    {
        list($response) = $this->delAuthorizedAccountIPWithHttpInfo($authorized_ip, $contains_ip, $allowed);
        return $response;
    }

    /**
     * Operation delAuthorizedAccountIPWithHttpInfo
     *
     * 
     *
     * @param string $authorized_ip The authorized IP4 or network to remove. Set the &#x60;all&#x60; value to remove the all items. (required)
     * @param string $contains_ip Can be used instead of &lt;b&gt;autharized_ip&lt;/b&gt;. Specify the parameter to remove the networks that contains the particular IP4. (required)
     * @param bool $allowed Set true to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from the all lists. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse20020, HTTP status code, HTTP response headers (array of strings)
     */
    public function delAuthorizedAccountIPWithHttpInfo($authorized_ip, $contains_ip, $allowed = null)
    {
        // verify the required parameter 'authorized_ip' is set
        if ($authorized_ip === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorized_ip when calling delAuthorizedAccountIP');
        }
        // verify the required parameter 'contains_ip' is set
        if ($contains_ip === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contains_ip when calling delAuthorizedAccountIP');
        }
        // parse inputs
        $resourcePath = "/DelAuthorizedAccountIP";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($authorized_ip !== null) {
            $formParams['authorized_ip'] = $this->apiClient->getSerializer()->toFormValue($authorized_ip);
        }
        // form params
        if ($contains_ip !== null) {
            $formParams['contains_ip'] = $this->apiClient->getSerializer()->toFormValue($contains_ip);
        }
        // form params
        if ($allowed !== null) {
            $formParams['allowed'] = $this->apiClient->getSerializer()->toFormValue($allowed);
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
                '\Swagger\Client\Model\InlineResponse20020',
                '/DelAuthorizedAccountIP'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20020', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20020', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAuthorizedAccountIPs
     *
     * 
     *
     * @param string $contains_ip Specify the parameter to filter the networks that contains the particular IP4. (required)
     * @param string $authorized_ip The authorized IP4 or network to filter. (optional)
     * @param bool $allowed The allowed flag to filter. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse20029
     */
    public function getAuthorizedAccountIPs($contains_ip, $authorized_ip = null, $allowed = null, $count = null, $offset = null)
    {
        list($response) = $this->getAuthorizedAccountIPsWithHttpInfo($contains_ip, $authorized_ip, $allowed, $count, $offset);
        return $response;
    }

    /**
     * Operation getAuthorizedAccountIPsWithHttpInfo
     *
     * 
     *
     * @param string $contains_ip Specify the parameter to filter the networks that contains the particular IP4. (required)
     * @param string $authorized_ip The authorized IP4 or network to filter. (optional)
     * @param bool $allowed The allowed flag to filter. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthorizedAccountIPsWithHttpInfo($contains_ip, $authorized_ip = null, $allowed = null, $count = null, $offset = null)
    {
        // verify the required parameter 'contains_ip' is set
        if ($contains_ip === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contains_ip when calling getAuthorizedAccountIPs');
        }
        // parse inputs
        $resourcePath = "/GetAuthorizedAccountIPs";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($authorized_ip !== null) {
            $formParams['authorized_ip'] = $this->apiClient->getSerializer()->toFormValue($authorized_ip);
        }
        // form params
        if ($allowed !== null) {
            $formParams['allowed'] = $this->apiClient->getSerializer()->toFormValue($allowed);
        }
        // form params
        if ($contains_ip !== null) {
            $formParams['contains_ip'] = $this->apiClient->getSerializer()->toFormValue($contains_ip);
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
                '\Swagger\Client\Model\InlineResponse20029',
                '/GetAuthorizedAccountIPs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20029', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20029', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
