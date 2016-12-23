# Voximplant\ManagingScenariosApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addScenario**](ManagingScenariosApi.md#addScenario) | **POST** /AddScenario | 
[**bindScenario**](ManagingScenariosApi.md#bindScenario) | **POST** /BindScenario | 
[**delScenario**](ManagingScenariosApi.md#delScenario) | **POST** /DelScenario | 
[**getScenarios**](ManagingScenariosApi.md#getScenarios) | **POST** /GetScenarios | 
[**reorderScenarios**](ManagingScenariosApi.md#reorderScenarios) | **POST** /ReorderScenarios | 
[**setScenarioInfo**](ManagingScenariosApi.md#setScenarioInfo) | **POST** /SetScenarioInfo | 
[**startConference**](ManagingScenariosApi.md#startConference) | **POST** /StartConference | 
[**startScenarios**](ManagingScenariosApi.md#startScenarios) | **POST** /StartScenarios | 


# **addScenario**
> \Swagger\Client\Model\InlineResponse2009 addScenario($scenario_name, $scenario_script)



Adds a new scenario. Please use the POST method.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$scenario_name = "scenario_name_example"; // string | The scenario name. The length must be less than 30
$scenario_script = "scenario_script_example"; // string | The scenario text. The length must be less than 128 KB.

try {
    $result = $api_instance->addScenario($scenario_name, $scenario_script);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->addScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_name** | **string**| The scenario name. The length must be less than 30 |
 **scenario_script** | **string**| The scenario text. The length must be less than 128 KB. |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindScenario**
> \Swagger\Client\Model\InlineResponse200 bindScenario($scenario_id, $scenario_name, $rule_id, $rule_name, $application_id, $application_name, $bind)



Bind the scenario list with the rule. You should specify the application_id or application_name if you specify the rule_name.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$scenario_id = "scenario_id_example"; // string | The scenario ID list separated by the `;` symbol.
$scenario_name = "scenario_name_example"; // string | Can be used instead of <b>scenario_id</b>. The scenario name list separated by the `;` symbol.
$rule_id = 3.4; // float | The rule ID.
$rule_name = "rule_name_example"; // string | The rule name that can be used instead of <b>rule_id</b>.
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name that can be used instead of <b>application_id</b>.
$bind = true; // bool | Bind or unbind?

try {
    $result = $api_instance->bindScenario($scenario_id, $scenario_name, $rule_id, $rule_name, $application_id, $application_name, $bind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->bindScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **string**| The scenario ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **scenario_name** | **string**| Can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. The scenario name list separated by the &#x60;;&#x60; symbol. | [optional]
 **rule_id** | **float**| The rule ID. | [optional]
 **rule_name** | **string**| The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. | [optional]
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **bind** | **bool**| Bind or unbind? | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delScenario**
> \Swagger\Client\Model\InlineResponse200 delScenario($scenario_id)



Deletes the scenario.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$scenario_id = "scenario_id_example"; // string | The scenario ID list separated by the `;` symbol or the `all` value.

try {
    $result = $api_instance->delScenario($scenario_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->delScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **string**| The scenario ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScenarios**
> \Swagger\Client\Model\InlineResponse20051 getScenarios($scenario_id, $with_script, $count, $offset)



Gets the account's scenarios.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$scenario_id = 3.4; // float | The scenario ID to filter
$with_script = true; // bool | Set true to get the scenario text. You must specify the `scenario_id` too!
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getScenarios($scenario_id, $with_script, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->getScenarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **float**| The scenario ID to filter | [optional]
 **with_script** | **bool**| Set true to get the scenario text. You must specify the &#x60;scenario_id&#x60; too! | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reorderScenarios**
> \Swagger\Client\Model\InlineResponse200 reorderScenarios($rule_id, $rule_name, $scenario_id)



Sets the scenario loading order.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$rule_id = 3.4; // float | The rule ID.
$rule_name = "rule_name_example"; // string | The rule name that can be used instead of <b>rule_id</b>.
$scenario_id = "scenario_id_example"; // string | The scenario ID list separated by the `;` symbol.

try {
    $result = $api_instance->reorderScenarios($rule_id, $rule_name, $scenario_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->reorderScenarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **float**| The rule ID. | [optional]
 **rule_name** | **string**| The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. | [optional]
 **scenario_id** | **string**| The scenario ID list separated by the &#x60;;&#x60; symbol. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setScenarioInfo**
> \Swagger\Client\Model\InlineResponse200 setScenarioInfo($scenario_id, $required_scenario_name, $scenario_name, $scenario_script)



Edits the scenario. Please use the POST method.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$scenario_id = 3.4; // float | The scenario ID.
$required_scenario_name = "required_scenario_name_example"; // string | The name of the scenario to edit, can be used instead of <b>scenario_id</b>.
$scenario_name = "scenario_name_example"; // string | The new scenario name. The length must be less than 30
$scenario_script = "scenario_script_example"; // string | The new scenario text. The length must be less than 128 KB.

try {
    $result = $api_instance->setScenarioInfo($scenario_id, $required_scenario_name, $scenario_name, $scenario_script);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->setScenarioInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **float**| The scenario ID. | [optional]
 **required_scenario_name** | **string**| The name of the scenario to edit, can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. | [optional]
 **scenario_name** | **string**| The new scenario name. The length must be less than 30 | [optional]
 **scenario_script** | **string**| The new scenario text. The length must be less than 128 KB. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startConference**
> \Swagger\Client\Model\InlineResponse20064 startConference($conference_name, $rule_id, $user_id, $user_name, $script_custom_data, $reference_ip)



Start a new conference or join the conference.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$conference_name = "conference_name_example"; // string | The conference name. The name length must be less than 50 symbols.
$rule_id = 3.4; // float | The rule ID.
$user_id = 3.4; // float | The user ID. Run the scripts from the user if set.
$user_name = "user_name_example"; // string | The user name that can be used instead of <b>user_id</b>. Run the scripts from the user if set.
$script_custom_data = "script_custom_data_example"; // string | The script custom data (like a script argument).
$reference_ip = "reference_ip_example"; // string | IPv4 that will be used to find nearest media server.

try {
    $result = $api_instance->startConference($conference_name, $rule_id, $user_id, $user_name, $script_custom_data, $reference_ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->startConference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_name** | **string**| The conference name. The name length must be less than 50 symbols. |
 **rule_id** | **float**| The rule ID. |
 **user_id** | **float**| The user ID. Run the scripts from the user if set. | [optional]
 **user_name** | **string**| The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. Run the scripts from the user if set. | [optional]
 **script_custom_data** | **string**| The script custom data (like a script argument). | [optional]
 **reference_ip** | **string**| IPv4 that will be used to find nearest media server. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startScenarios**
> \Swagger\Client\Model\InlineResponse20066 startScenarios($rule_id, $user_id, $user_name, $script_custom_data, $reference_ip)



Run the JavaScript scenarios on a VoxImplant server. The scenarios run in a new media session.

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

$api_instance = new Voximplant\Api\ManagingScenariosApi();
$rule_id = 3.4; // float | The rule ID.
$user_id = 3.4; // float | The user ID. Run the scripts from the user if set.
$user_name = "user_name_example"; // string | The user name that can be used instead of <b>user_id</b>. Run the scripts from the user if set.
$script_custom_data = "script_custom_data_example"; // string | The script custom data (like a script argument).
$reference_ip = "reference_ip_example"; // string | IPv4 that will be used to find nearest media server.

try {
    $result = $api_instance->startScenarios($rule_id, $user_id, $user_name, $script_custom_data, $reference_ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingScenariosApi->startScenarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **float**| The rule ID. |
 **user_id** | **float**| The user ID. Run the scripts from the user if set. | [optional]
 **user_name** | **string**| The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. Run the scripts from the user if set. | [optional]
 **script_custom_data** | **string**| The script custom data (like a script argument). | [optional]
 **reference_ip** | **string**| IPv4 that will be used to find nearest media server. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

