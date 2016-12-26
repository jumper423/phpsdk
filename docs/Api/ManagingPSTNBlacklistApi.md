# Voximplant\ManagingPSTNBlacklistApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPstnBlackListItem**](ManagingPSTNBlacklistApi.md#addPstnBlackListItem) | **POST** /AddPstnBlackListItem | 
[**delPstnBlackListItem**](ManagingPSTNBlacklistApi.md#delPstnBlackListItem) | **POST** /DelPstnBlackListItem | 
[**getPstnBlackList**](ManagingPSTNBlacklistApi.md#getPstnBlackList) | **POST** /GetPstnBlackList | 
[**setPstnBlackListItem**](ManagingPSTNBlacklistApi.md#setPstnBlackListItem) | **POST** /SetPstnBlackListItem | 


# **addPstnBlackListItem**
> \Model\InlineResponse2005 addPstnBlackListItem($pstn_blacklist_phone)



Add a new phone number to the PSTN blacklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Api\ManagingPSTNBlacklistApi();
$pstn_blacklist_phone = "pstn_blacklist_phone_example"; // string | The phone number in format e164.

try {
    $result = $api_instance->addPstnBlackListItem($pstn_blacklist_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPSTNBlacklistApi->addPstnBlackListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pstn_blacklist_phone** | **string**| The phone number in format e164. |

### Return type

[**\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delPstnBlackListItem**
> \Model\InlineResponse200 delPstnBlackListItem($pstn_blacklist_id)



Remove phone number from the PSTN blacklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Api\ManagingPSTNBlacklistApi();
$pstn_blacklist_id = 3.4; // float | The PSTN black list item ID.

try {
    $result = $api_instance->delPstnBlackListItem($pstn_blacklist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPSTNBlacklistApi->delPstnBlackListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pstn_blacklist_id** | **float**| The PSTN black list item ID. |

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPstnBlackList**
> \Model\InlineResponse20044 getPstnBlackList($pstn_blacklist_id, $pstn_blacklist_phone, $count, $offset)



Add a new phone number to the PSTN blacklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Api\ManagingPSTNBlacklistApi();
$pstn_blacklist_id = 3.4; // float | The PSTN black list item ID for filter.
$pstn_blacklist_phone = "pstn_blacklist_phone_example"; // string | The phone number in format e164 for filter.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getPstnBlackList($pstn_blacklist_id, $pstn_blacklist_phone, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPSTNBlacklistApi->getPstnBlackList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pstn_blacklist_id** | **float**| The PSTN black list item ID for filter. | [optional]
 **pstn_blacklist_phone** | **string**| The phone number in format e164 for filter. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPstnBlackListItem**
> \Model\InlineResponse200 setPstnBlackListItem($pstn_blacklist_id, $pstn_blacklist_phone)



Update the PSTN blacklist item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplant\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplant\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplant\Api\ManagingPSTNBlacklistApi();
$pstn_blacklist_id = 3.4; // float | The PSTN black list item ID.
$pstn_blacklist_phone = "pstn_blacklist_phone_example"; // string | The new phone number in format e164.

try {
    $result = $api_instance->setPstnBlackListItem($pstn_blacklist_id, $pstn_blacklist_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPSTNBlacklistApi->setPstnBlackListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pstn_blacklist_id** | **float**| The PSTN black list item ID. |
 **pstn_blacklist_phone** | **string**| The new phone number in format e164. |

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

