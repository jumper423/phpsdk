# Voximplamt\Client\ManagingSIPRegistrationApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bindSipRegistration**](ManagingSIPRegistrationApi.md#bindSipRegistration) | **POST** /BindSipRegistration | 
[**createSipRegistration**](ManagingSIPRegistrationApi.md#createSipRegistration) | **POST** /CreateSipRegistration | 
[**deleteSipRegistration**](ManagingSIPRegistrationApi.md#deleteSipRegistration) | **POST** /DeleteSipRegistration | 
[**getSipRegistrations**](ManagingSIPRegistrationApi.md#getSipRegistrations) | **POST** /GetSipRegistrations | 
[**updateSipRegistration**](ManagingSIPRegistrationApi.md#updateSipRegistration) | **POST** /UpdateSipRegistration | 


# **bindSipRegistration**
> \Voximplamt\Client\Model\InlineResponse200 bindSipRegistration($sip_registration_id, $application_id, $application_name, $rule_id, $rule_name, $bind)



Bind the SIP registration to the application or unbind the SIP registration from the application. You should specify the application_id or application_name if you specify the rule_name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplamt\Client\Api\ManagingSIPRegistrationApi();
$sip_registration_id = 3.4; // float | The registration ID
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name that can be used instead of <b>application_id</b>.
$rule_id = 3.4; // float | The rule ID.
$rule_name = "rule_name_example"; // string | The rule name that can be used instead of <b>rule_id</b>.
$bind = true; // bool | Bind or unbind?

try {
    $result = $api_instance->bindSipRegistration($sip_registration_id, $application_id, $application_name, $rule_id, $rule_name, $bind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPRegistrationApi->bindSipRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_registration_id** | **float**| The registration ID |
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **rule_id** | **float**| The rule ID. | [optional]
 **rule_name** | **string**| The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. | [optional]
 **bind** | **bool**| Bind or unbind? | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSipRegistration**
> \Voximplamt\Client\Model\InlineResponse20019 createSipRegistration($username, $proxy, $auth_user, $outbound_proxy, $password)



Create a new SIP registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplamt\Client\Api\ManagingSIPRegistrationApi();
$username = "username_example"; // string | The user name.
$proxy = "proxy_example"; // string | The SIP proxy
$auth_user = "auth_user_example"; // string | The SIP authentications user
$outbound_proxy = "outbound_proxy_example"; // string | The outbound SIP proxy
$password = "password_example"; // string | The SIP password

try {
    $result = $api_instance->createSipRegistration($username, $proxy, $auth_user, $outbound_proxy, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPRegistrationApi->createSipRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The user name. |
 **proxy** | **string**| The SIP proxy |
 **auth_user** | **string**| The SIP authentications user | [optional]
 **outbound_proxy** | **string**| The outbound SIP proxy | [optional]
 **password** | **string**| The SIP password | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSipRegistration**
> \Voximplamt\Client\Model\InlineResponse200 deleteSipRegistration($sip_registration_id)



Delete SIP registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplamt\Client\Api\ManagingSIPRegistrationApi();
$sip_registration_id = 3.4; // float | The registration ID

try {
    $result = $api_instance->deleteSipRegistration($sip_registration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPRegistrationApi->deleteSipRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_registration_id** | **float**| The registration ID |

### Return type

[**\Voximplamt\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSipRegistrations**
> \Voximplamt\Client\Model\InlineResponse20052 getSipRegistrations($sip_registration_id, $username, $deactivated)



Get active SIP registrations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplamt\Client\Api\ManagingSIPRegistrationApi();
$sip_registration_id = 3.4; // float | The SIP registration ID.
$username = "username_example"; // string | The SIP user name to filter.
$deactivated = true; // bool | Set true to show the frozen SIP registrations only.

try {
    $result = $api_instance->getSipRegistrations($sip_registration_id, $username, $deactivated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPRegistrationApi->getSipRegistrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_registration_id** | **float**| The SIP registration ID. | [optional]
 **username** | **string**| The SIP user name to filter. | [optional]
 **deactivated** | **bool**| Set true to show the frozen SIP registrations only. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSipRegistration**
> \Voximplamt\Client\Model\InlineResponse200 updateSipRegistration($sip_registration_id, $username, $proxy, $auth_user, $outbound_proxy, $password)



Update SIP registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Voximplamt\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Voximplamt\Client\Api\ManagingSIPRegistrationApi();
$sip_registration_id = 3.4; // float | The registration ID
$username = "username_example"; // string | The user name.
$proxy = "proxy_example"; // string | The SIP proxy
$auth_user = "auth_user_example"; // string | The SIP authentications user
$outbound_proxy = "outbound_proxy_example"; // string | The outbound SIP proxy
$password = "password_example"; // string | The SIP password

try {
    $result = $api_instance->updateSipRegistration($sip_registration_id, $username, $proxy, $auth_user, $outbound_proxy, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSIPRegistrationApi->updateSipRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sip_registration_id** | **float**| The registration ID |
 **username** | **string**| The user name. |
 **proxy** | **string**| The SIP proxy |
 **auth_user** | **string**| The SIP authentications user | [optional]
 **outbound_proxy** | **string**| The outbound SIP proxy | [optional]
 **password** | **string**| The SIP password | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

