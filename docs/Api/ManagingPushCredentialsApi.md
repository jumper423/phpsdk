# Swagger\Client\ManagingPushCredentialsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPushCredential**](ManagingPushCredentialsApi.md#addPushCredential) | **POST** /AddPushCredential | 
[**bindPushCredential**](ManagingPushCredentialsApi.md#bindPushCredential) | **POST** /BindPushCredential | 
[**delPushCredential**](ManagingPushCredentialsApi.md#delPushCredential) | **POST** /DelPushCredential | 
[**getPushCredential**](ManagingPushCredentialsApi.md#getPushCredential) | **POST** /GetPushCredential | 
[**setPushCredential**](ManagingPushCredentialsApi.md#setPushCredential) | **POST** /SetPushCredential | 


# **addPushCredential**
> \Swagger\Client\Model\InlineResponse2006 addPushCredential($push_provider_name, $push_provider_id, $external_app_name, $cert_content, $cert_password, $is_dev_mode, $cert_file_name)



Add push credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Swagger\Client\Api\ManagingPushCredentialsApi();
$push_provider_name = "push_provider_name_example"; // string | The push provider name. Available values: APPLE, APPLE_VOIP, GOOGLE.
$push_provider_id = 56; // int | The push provider id.
$external_app_name = "external_app_name_example"; // string | The application name.
$cert_content = "cert_content_example"; // string | Public and private keys in PKCS12 format.
$cert_password = "cert_password_example"; // string | The secret password for private key.
$is_dev_mode = true; // bool | Set true for use this certificate in apple`s sandbox environment
$cert_file_name = "cert_file_name_example"; // string | The parameter is required, when set `cert_content` as POST body.

try {
    $result = $api_instance->addPushCredential($push_provider_name, $push_provider_id, $external_app_name, $cert_content, $cert_password, $is_dev_mode, $cert_file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPushCredentialsApi->addPushCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_provider_name** | **string**| The push provider name. Available values: APPLE, APPLE_VOIP, GOOGLE. |
 **push_provider_id** | **int**| The push provider id. |
 **external_app_name** | **string**| The application name. |
 **cert_content** | **string**| Public and private keys in PKCS12 format. |
 **cert_password** | **string**| The secret password for private key. |
 **is_dev_mode** | **bool**| Set true for use this certificate in apple&#x60;s sandbox environment |
 **cert_file_name** | **string**| The parameter is required, when set &#x60;cert_content&#x60; as POST body. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindPushCredential**
> \Swagger\Client\Model\InlineResponse20015 bindPushCredential($push_credential_id, $application_id, $bind)



Bind push credentials to applications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Swagger\Client\Api\ManagingPushCredentialsApi();
$push_credential_id = 56; // int | The push credentials id.
$application_id = 56; // int | The application id.
$bind = true; // bool | Set to false for unbind. Default value is true.

try {
    $result = $api_instance->bindPushCredential($push_credential_id, $application_id, $bind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPushCredentialsApi->bindPushCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_credential_id** | **int**| The push credentials id. |
 **application_id** | **int**| The application id. |
 **bind** | **bool**| Set to false for unbind. Default value is true. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delPushCredential**
> \Swagger\Client\Model\InlineResponse20015 delPushCredential($push_credential_id)



Remove push credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Swagger\Client\Api\ManagingPushCredentialsApi();
$push_credential_id = 56; // int | The push credentials id.

try {
    $result = $api_instance->delPushCredential($push_credential_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPushCredentialsApi->delPushCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_credential_id** | **int**| The push credentials id. |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushCredential**
> \Swagger\Client\Model\InlineResponse20045 getPushCredential($push_credential_id, $push_provider_name, $push_provider_id, $application_name, $application_id, $external_app, $with_cert)



Get push credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Swagger\Client\Api\ManagingPushCredentialsApi();
$push_credential_id = 56; // int | The push credentials id.
$push_provider_name = "push_provider_name_example"; // string | The push provider name. Availible values: APPLE, APPLE_VOIP, GOOGLE.
$push_provider_id = 56; // int | The push provider id.
$application_name = "application_name_example"; // string | The name of bound application.
$application_id = 56; // int | The id of bound application.
$external_app = "external_app_example"; // string | The push provider`s application name.
$with_cert = true; // bool | Set true to get the user`s certificate.

try {
    $result = $api_instance->getPushCredential($push_credential_id, $push_provider_name, $push_provider_id, $application_name, $application_id, $external_app, $with_cert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPushCredentialsApi->getPushCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_credential_id** | **int**| The push credentials id. | [optional]
 **push_provider_name** | **string**| The push provider name. Availible values: APPLE, APPLE_VOIP, GOOGLE. | [optional]
 **push_provider_id** | **int**| The push provider id. | [optional]
 **application_name** | **string**| The name of bound application. | [optional]
 **application_id** | **int**| The id of bound application. | [optional]
 **external_app** | **string**| The push provider&#x60;s application name. | [optional]
 **with_cert** | **bool**| Set true to get the user&#x60;s certificate. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPushCredential**
> \Swagger\Client\Model\InlineResponse20015 setPushCredential($push_credential_id, $external_app_name, $cert_content, $cert_password, $is_dev_mode)



Modify push credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Swagger\Client\Api\ManagingPushCredentialsApi();
$push_credential_id = 56; // int | The push credentials id.
$external_app_name = "external_app_name_example"; // string | The application name.
$cert_content = "cert_content_example"; // string | Public and private keys in PKCS12 format.
$cert_password = "cert_password_example"; // string | The secret password for private key.
$is_dev_mode = true; // bool | Set true for use this certificate in apple`s sandbox environment

try {
    $result = $api_instance->setPushCredential($push_credential_id, $external_app_name, $cert_content, $cert_password, $is_dev_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPushCredentialsApi->setPushCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_credential_id** | **int**| The push credentials id. |
 **external_app_name** | **string**| The application name. |
 **cert_content** | **string**| Public and private keys in PKCS12 format. |
 **cert_password** | **string**| The secret password for private key. |
 **is_dev_mode** | **bool**| Set true for use this certificate in apple&#x60;s sandbox environment |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

