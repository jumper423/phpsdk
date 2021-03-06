# Voximplant\ManagingAuthorizedIPsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAuthorizedAccountIP**](ManagingAuthorizedIPsApi.md#addAuthorizedAccountIP) | **POST** /AddAuthorizedAccountIP | 
[**checkAuthorizedAccountIP**](ManagingAuthorizedIPsApi.md#checkAuthorizedAccountIP) | **POST** /CheckAuthorizedAccountIP | 
[**delAuthorizedAccountIP**](ManagingAuthorizedIPsApi.md#delAuthorizedAccountIP) | **POST** /DelAuthorizedAccountIP | 
[**getAuthorizedAccountIPs**](ManagingAuthorizedIPsApi.md#getAuthorizedAccountIPs) | **POST** /GetAuthorizedAccountIPs | 


# **addAuthorizedAccountIP**
> \Voximplant\Model\ActivateCallerIDAPIResponse addAuthorizedAccountIP($authorized_ip, $allowed)



Adds a new authorized IP4 or network to the white/black list.

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

$api_instance = new Voximplant\Api\ManagingAuthorizedIPsApi();
$authorized_ip = "authorized_ip_example"; // string | The authorized IP4 or network.
$allowed = true; // bool | Set false to add the IP to the blacklist.

try {
    $result = $api_instance->addAuthorizedAccountIP($authorized_ip, $allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAuthorizedIPsApi->addAuthorizedAccountIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorized_ip** | **string**| The authorized IP4 or network. |
 **allowed** | **bool**| Set false to add the IP to the blacklist. | [optional]

### Return type

[**\Voximplant\Model\ActivateCallerIDAPIResponse**](../Model/ActivateCallerIDAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAuthorizedAccountIP**
> \Voximplant\Model\CheckAuthorizedAccountIPAPIResponse checkAuthorizedAccountIP($authorized_ip)



Tests whether the IP4 is banned or allowed.

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

$api_instance = new Voximplant\Api\ManagingAuthorizedIPsApi();
$authorized_ip = "authorized_ip_example"; // string | The IP4 to test.

try {
    $result = $api_instance->checkAuthorizedAccountIP($authorized_ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAuthorizedIPsApi->checkAuthorizedAccountIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorized_ip** | **string**| The IP4 to test. |

### Return type

[**\Voximplant\Model\CheckAuthorizedAccountIPAPIResponse**](../Model/CheckAuthorizedAccountIPAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delAuthorizedAccountIP**
> \Voximplant\Model\DelAuthorizedAccountIPAPIResponse delAuthorizedAccountIP($authorized_ip, $contains_ip, $allowed)



Removes the authorized IP4 or network from the white/black list.

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

$api_instance = new Voximplant\Api\ManagingAuthorizedIPsApi();
$authorized_ip = "authorized_ip_example"; // string | The authorized IP4 or network to remove. Set the `all` value to remove the all items.
$contains_ip = "contains_ip_example"; // string | Can be used instead of <b>autharized_ip</b>. Specify the parameter to remove the networks that contains the particular IP4.
$allowed = true; // bool | Set true to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from the all lists.

try {
    $result = $api_instance->delAuthorizedAccountIP($authorized_ip, $contains_ip, $allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAuthorizedIPsApi->delAuthorizedAccountIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorized_ip** | **string**| The authorized IP4 or network to remove. Set the &#x60;all&#x60; value to remove the all items. | [optional]
 **contains_ip** | **string**| Can be used instead of &lt;b&gt;autharized_ip&lt;/b&gt;. Specify the parameter to remove the networks that contains the particular IP4. | [optional]
 **allowed** | **bool**| Set true to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from the all lists. | [optional]

### Return type

[**\Voximplant\Model\DelAuthorizedAccountIPAPIResponse**](../Model/DelAuthorizedAccountIPAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizedAccountIPs**
> \Voximplant\Model\GetAuthorizedAccountIPsAPIResponse getAuthorizedAccountIPs($contains_ip, $authorized_ip, $allowed, $count, $offset)



Gets the authorized IP4 or network.

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

$api_instance = new Voximplant\Api\ManagingAuthorizedIPsApi();
$contains_ip = "contains_ip_example"; // string | Specify the parameter to filter the networks that contains the particular IP4.
$authorized_ip = "authorized_ip_example"; // string | The authorized IP4 or network to filter.
$allowed = true; // bool | The allowed flag to filter.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getAuthorizedAccountIPs($contains_ip, $authorized_ip, $allowed, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAuthorizedIPsApi->getAuthorizedAccountIPs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contains_ip** | **string**| Specify the parameter to filter the networks that contains the particular IP4. |
 **authorized_ip** | **string**| The authorized IP4 or network to filter. | [optional]
 **allowed** | **bool**| The allowed flag to filter. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\GetAuthorizedAccountIPsAPIResponse**](../Model/GetAuthorizedAccountIPsAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

