# Voximplant\ManagingCallerIDsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateCallerID**](ManagingCallerIDsApi.md#activateCallerID) | **POST** /ActivateCallerID | 
[**addCallerID**](ManagingCallerIDsApi.md#addCallerID) | **POST** /AddCallerID | 
[**delCallerID**](ManagingCallerIDsApi.md#delCallerID) | **POST** /DelCallerID | 
[**getCallerIDs**](ManagingCallerIDsApi.md#getCallerIDs) | **POST** /GetCallerIDs | 
[**verifyCallerID**](ManagingCallerIDsApi.md#verifyCallerID) | **POST** /VerifyCallerID | 


# **activateCallerID**
> \Model\InlineResponse200 activateCallerID($callerid_id, $callerid_number, $verification_code)



Activates the CallerID by the verification code.

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

$api_instance = new Voximplant\Api\ManagingCallerIDsApi();
$callerid_id = 3.4; // float | The id of the callerID object.
$callerid_number = "callerid_number_example"; // string | The callerID number that can be used instead of <b>callerid_id</b>.
$verification_code = "verification_code_example"; // string | The verification code, see the VerifyCallerID function.

try {
    $result = $api_instance->activateCallerID($callerid_id, $callerid_number, $verification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallerIDsApi->activateCallerID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callerid_id** | **float**| The id of the callerID object. | [optional]
 **callerid_number** | **string**| The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. | [optional]
 **verification_code** | **string**| The verification code, see the VerifyCallerID function. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCallerID**
> \Model\InlineResponse2004 addCallerID($callerid_number)



Adds a new caller ID.

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

$api_instance = new Voximplant\Api\ManagingCallerIDsApi();
$callerid_number = "callerid_number_example"; // string | The callerID number.

try {
    $result = $api_instance->addCallerID($callerid_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallerIDsApi->addCallerID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callerid_number** | **string**| The callerID number. | [optional]

### Return type

[**\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delCallerID**
> \Model\InlineResponse200 delCallerID($callerid_id, $callerid_number)



Deletes the CallerID. Note: you can't delete a CID permanently (the antispam defence).

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

$api_instance = new Voximplant\Api\ManagingCallerIDsApi();
$callerid_id = 3.4; // float | The id of the callerID object.
$callerid_number = "callerid_number_example"; // string | The callerID number that can be used instead of <b>callerid_id</b>.

try {
    $result = $api_instance->delCallerID($callerid_id, $callerid_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallerIDsApi->delCallerID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callerid_id** | **float**| The id of the callerID object. | [optional]
 **callerid_number** | **string**| The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallerIDs**
> \Model\InlineResponse20034 getCallerIDs($callerid_id, $callerid_number, $active, $order_by, $count, $offset)



Gets the account callerIDs.

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

$api_instance = new Voximplant\Api\ManagingCallerIDsApi();
$callerid_id = 3.4; // float | The id of the callerID object to filter.
$callerid_number = "callerid_number_example"; // string | The phone number to filter.
$active = true; // bool | The active flag to filter.
$order_by = "order_by_example"; // string | The following values are available: `caller_number` (ascent order), `verified_until` (ascent order).
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getCallerIDs($callerid_id, $callerid_number, $active, $order_by, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallerIDsApi->getCallerIDs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callerid_id** | **float**| The id of the callerID object to filter. | [optional]
 **callerid_number** | **string**| The phone number to filter. | [optional]
 **active** | **bool**| The active flag to filter. | [optional]
 **order_by** | **string**| The following values are available: &#x60;caller_number&#x60; (ascent order), &#x60;verified_until&#x60; (ascent order). | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyCallerID**
> \Model\InlineResponse200 verifyCallerID($callerid_id, $callerid_number)



Gets a verification code by make call to the callerID number.

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

$api_instance = new Voximplant\Api\ManagingCallerIDsApi();
$callerid_id = 3.4; // float | The id of the callerID object.
$callerid_number = "callerid_number_example"; // string | The callerID number that can be used instead of <b>callerid_id</b>.

try {
    $result = $api_instance->verifyCallerID($callerid_id, $callerid_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallerIDsApi->verifyCallerID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callerid_id** | **float**| The id of the callerID object. | [optional]
 **callerid_number** | **string**| The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

