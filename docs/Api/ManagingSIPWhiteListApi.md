# Voximplant\Client\ManagingSIPWhiteListApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSipWhiteListItem**](ManagingSIPWhiteListApi.md#addSipWhiteListItem) | **POST** /AddSipWhiteListItem | 
[**delSipWhiteListItem**](ManagingSIPWhiteListApi.md#delSipWhiteListItem) | **POST** /DelSipWhiteListItem | 
[**getSipWhiteList**](ManagingSIPWhiteListApi.md#getSipWhiteList) | **POST** /GetSipWhiteList | 
[**setSipWhiteListItem**](ManagingSIPWhiteListApi.md#setSipWhiteListItem) | **POST** /SetSipWhiteListItem | 


# **addSipWhiteListItem**
> \Voximplant\Client\Model\InlineResponse20010 addSipWhiteListItem($sip_whitelist_network)



Adds a new network address to the SIP white list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Client\Api\ManagingSIPWhiteListApi();
$sip_whitelist_network = "sip_whitelist_network_example"; // string | The network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16).

try {
    $result = $api_instance->addSipWhiteListItem($sip_whitelist_network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPWhiteListApi->addSipWhiteListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_whitelist_network** | **string**| The network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16). |

### Return type

[**\Voximplant\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delSipWhiteListItem**
> \Voximplant\Client\Model\InlineResponse200 delSipWhiteListItem($sip_whitelist_id)



Deletes the network address from the SIP white list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Client\Api\ManagingSIPWhiteListApi();
$sip_whitelist_id = 3.4; // float | The SIP white list item ID to delete.

try {
    $result = $api_instance->delSipWhiteListItem($sip_whitelist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPWhiteListApi->delSipWhiteListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_whitelist_id** | **float**| The SIP white list item ID to delete. |

### Return type

[**\Voximplant\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSipWhiteList**
> \Voximplant\Client\Model\InlineResponse20053 getSipWhiteList($sip_whitelist_id, $count, $offset)



Gets the SIP white list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Client\Api\ManagingSIPWhiteListApi();
$sip_whitelist_id = 3.4; // float | The SIP white list item ID to filter
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getSipWhiteList($sip_whitelist_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPWhiteListApi->getSipWhiteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_whitelist_id** | **float**| The SIP white list item ID to filter | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSipWhiteListItem**
> \Voximplant\Client\Model\InlineResponse200 setSipWhiteListItem($sip_whitelist_id, $sip_whitelist_network)



Edits the SIP white list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Client\Api\ManagingSIPWhiteListApi();
$sip_whitelist_id = 3.4; // float | The SIP white list item ID
$sip_whitelist_network = "sip_whitelist_network_example"; // string | The new network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16)

try {
    $result = $api_instance->setSipWhiteListItem($sip_whitelist_id, $sip_whitelist_network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPWhiteListApi->setSipWhiteListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_whitelist_id** | **float**| The SIP white list item ID |
 **sip_whitelist_network** | **string**| The new network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16) |

### Return type

[**\Voximplant\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

