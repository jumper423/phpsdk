# Voximplant\Client\ManagingApplicationsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApplication**](ManagingApplicationsApi.md#addApplication) | **POST** /AddApplication | 
[**delApplication**](ManagingApplicationsApi.md#delApplication) | **POST** /DelApplication | 
[**getApplications**](ManagingApplicationsApi.md#getApplications) | **POST** /GetApplications | 
[**setApplicationInfo**](ManagingApplicationsApi.md#setApplicationInfo) | **POST** /SetApplicationInfo | 


# **addApplication**
> \Voximplant\Client\Model\InlineResponse2003 addApplication($application_name, $im_enabled, $im_roster_type, $busy_on_call)



Adds a new account's application.

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

$api_instance = new Voximplant\Client\Api\ManagingApplicationsApi();
$application_name = "application_name_example"; // string | The short application name in format [a-z][a-z0-9-]{1,79}
$im_enabled = true; // bool | Is the instant messaging (IM) enabled?
$im_roster_type = "im_roster_type_example"; // string | The roster type (IM users list type). The following values are possible: personal, group.
$busy_on_call = true; // bool | The busy_on_call flag.

try {
    $result = $api_instance->addApplication($application_name, $im_enabled, $im_roster_type, $busy_on_call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingApplicationsApi->addApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_name** | **string**| The short application name in format [a-z][a-z0-9-]{1,79} |
 **im_enabled** | **bool**| Is the instant messaging (IM) enabled? | [optional]
 **im_roster_type** | **string**| The roster type (IM users list type). The following values are possible: personal, group. | [optional]
 **busy_on_call** | **bool**| The busy_on_call flag. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delApplication**
> \Voximplant\Client\Model\InlineResponse200 delApplication($application_id, $application_name)



Deletes the account's application.

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

$api_instance = new Voximplant\Client\Api\ManagingApplicationsApi();
$application_id = "application_id_example"; // string | The application ID list separated by the `;` symbol or the `all` value.
$application_name = "application_name_example"; // string | The application name list separated by the `;` symbol. Can be used instead of <b>appliction_id</b>.

try {
    $result = $api_instance->delApplication($application_id, $application_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingApplicationsApi->delApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **application_name** | **string**| The application name list separated by the &#x60;;&#x60; symbol. Can be used instead of &lt;b&gt;appliction_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplications**
> \Voximplant\Client\Model\InlineResponse20028 getApplications($application_id, $application_name, $im_enabled, $im_roster_type, $user_id, $excluded_user_id, $showing_user_id, $with_rules, $with_scenarios, $count, $offset)



Gets the account's applications.

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

$api_instance = new Voximplant\Client\Api\ManagingApplicationsApi();
$application_id = 3.4; // float | The application ID to filter.
$application_name = "application_name_example"; // string | The application name part to filter.
$im_enabled = true; // bool | Is the instant messaging (IM) enabled?
$im_roster_type = "im_roster_type_example"; // string | The roster type (IM users list type) to filter. The following values are possible: personal, group.
$user_id = 3.4; // float | The binding user ID to filter.
$excluded_user_id = 3.4; // float | The excluded binding user ID to filter.
$showing_user_id = 3.4; // float | Specify the binding user ID value to show it in the `users` array output.
$with_rules = true; // bool | Set true to get binding rules info.
$with_scenarios = true; // bool | Set true to get binding rules and scenarios info.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getApplications($application_id, $application_name, $im_enabled, $im_roster_type, $user_id, $excluded_user_id, $showing_user_id, $with_rules, $with_scenarios, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingApplicationsApi->getApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **float**| The application ID to filter. | [optional]
 **application_name** | **string**| The application name part to filter. | [optional]
 **im_enabled** | **bool**| Is the instant messaging (IM) enabled? | [optional]
 **im_roster_type** | **string**| The roster type (IM users list type) to filter. The following values are possible: personal, group. | [optional]
 **user_id** | **float**| The binding user ID to filter. | [optional]
 **excluded_user_id** | **float**| The excluded binding user ID to filter. | [optional]
 **showing_user_id** | **float**| Specify the binding user ID value to show it in the &#x60;users&#x60; array output. | [optional]
 **with_rules** | **bool**| Set true to get binding rules info. | [optional]
 **with_scenarios** | **bool**| Set true to get binding rules and scenarios info. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setApplicationInfo**
> \Voximplant\Client\Model\InlineResponse20063 setApplicationInfo($application_id, $required_application_name, $application_name, $im_enabled, $im_roster_type, $busy_on_call)



Edits the account's application.

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

$api_instance = new Voximplant\Client\Api\ManagingApplicationsApi();
$application_id = 3.4; // float | The application ID.
$required_application_name = "required_application_name_example"; // string | Can be used instead of <b>application_id</b>.
$application_name = "application_name_example"; // string | The new short application name in format [a-z][a-z0-9-]{1,79}
$im_enabled = true; // bool | Is the instant messaging (IM) enabled?
$im_roster_type = "im_roster_type_example"; // string | The roster type (IM users list type). The following values are possible: personal, group.
$busy_on_call = true; // bool | The busy_on_call flag.

try {
    $result = $api_instance->setApplicationInfo($application_id, $required_application_name, $application_name, $im_enabled, $im_roster_type, $busy_on_call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingApplicationsApi->setApplicationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **float**| The application ID. | [optional]
 **required_application_name** | **string**| Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **application_name** | **string**| The new short application name in format [a-z][a-z0-9-]{1,79} | [optional]
 **im_enabled** | **bool**| Is the instant messaging (IM) enabled? | [optional]
 **im_roster_type** | **string**| The roster type (IM users list type). The following values are possible: personal, group. | [optional]
 **busy_on_call** | **bool**| The busy_on_call flag. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

