# Voximplant\Client\ManagingRulesApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRule**](ManagingRulesApi.md#addRule) | **POST** /AddRule | 
[**delRule**](ManagingRulesApi.md#delRule) | **POST** /DelRule | 
[**getRules**](ManagingRulesApi.md#getRules) | **POST** /GetRules | 
[**reorderRules**](ManagingRulesApi.md#reorderRules) | **POST** /ReorderRules | 
[**setRuleInfo**](ManagingRulesApi.md#setRuleInfo) | **POST** /SetRuleInfo | 


# **addRule**
> \Voximplant\Client\Model\InlineResponse2008 addRule($rule_name, $rule_pattern, $application_id, $application_name, $rule_pattern_exclude, $scenario_id, $scenario_name)



Adds a new rule for the application.

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

$api_instance = new Voximplant\Client\Api\ManagingRulesApi();
$rule_name = "rule_name_example"; // string | The rule name. The length must be less than 512
$rule_pattern = "rule_pattern_example"; // string | The rule pattern regex. The length must be less than 64 KB.
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name, can be used instead of <b>application_id</b>.
$rule_pattern_exclude = "rule_pattern_exclude_example"; // string | The exclude pattern regex. The length must be less than 64 KB.
$scenario_id = "scenario_id_example"; // string | The scenario ID list separated by the `;` symbol.
$scenario_name = "scenario_name_example"; // string | Can be used instead of <b>scenario_id</b>. The scenario name list separated by the `;` symbol.

try {
    $result = $api_instance->addRule($rule_name, $rule_pattern, $application_id, $application_name, $rule_pattern_exclude, $scenario_id, $scenario_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRulesApi->addRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_name** | **string**| The rule name. The length must be less than 512 |
 **rule_pattern** | **string**| The rule pattern regex. The length must be less than 64 KB. |
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name, can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **rule_pattern_exclude** | **string**| The exclude pattern regex. The length must be less than 64 KB. | [optional]
 **scenario_id** | **string**| The scenario ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **scenario_name** | **string**| Can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. The scenario name list separated by the &#x60;;&#x60; symbol. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delRule**
> \Voximplant\Client\Model\InlineResponse200 delRule($rule_id, $rule_name, $application_id, $application_name)



Deletes the rule.

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

$api_instance = new Voximplant\Client\Api\ManagingRulesApi();
$rule_id = "rule_id_example"; // string | The rule ID list separated by the `;` symbol or the `all` value.
$rule_name = "rule_name_example"; // string | Can be used instead of <b>rule_id</b>. The rule name list separated by the `;` symbol.
$application_id = "application_id_example"; // string | The application ID list separated by the `;` symbol or the `all` value.
$application_name = "application_name_example"; // string | Can be used instead of <b>application_id</b>. The application name list separated by the `;` symbol.

try {
    $result = $api_instance->delRule($rule_id, $rule_name, $application_id, $application_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRulesApi->delRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**| The rule ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **rule_name** | **string**| Can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. The rule name list separated by the &#x60;;&#x60; symbol. | [optional]
 **application_id** | **string**| The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **application_name** | **string**| Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. The application name list separated by the &#x60;;&#x60; symbol. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRules**
> \Voximplant\Client\Model\InlineResponse20050 getRules($application_id, $application_name, $rule_id, $rule_name, $template, $with_scenarios, $count, $offset)



Gets the rules.

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

$api_instance = new Voximplant\Client\Api\ManagingRulesApi();
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name that can be used instead of <b>application_id</b>.
$rule_id = 3.4; // float | The rule ID to filter
$rule_name = "rule_name_example"; // string | The rule name part to filter.
$template = "template_example"; // string | Search for template matching
$with_scenarios = true; // bool | Set true to get binding scenarios info.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getRules($application_id, $application_name, $rule_id, $rule_name, $template, $with_scenarios, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRulesApi->getRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **rule_id** | **float**| The rule ID to filter | [optional]
 **rule_name** | **string**| The rule name part to filter. | [optional]
 **template** | **string**| Search for template matching | [optional]
 **with_scenarios** | **bool**| Set true to get binding scenarios info. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reorderRules**
> \Voximplant\Client\Model\InlineResponse200 reorderRules($rule_id)



Sets the rule selection order. Note: the rules must belong to the same application!

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

$api_instance = new Voximplant\Client\Api\ManagingRulesApi();
$rule_id = "rule_id_example"; // string | The rule ID list separated by the `;` symbol.

try {
    $result = $api_instance->reorderRules($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRulesApi->reorderRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**| The rule ID list separated by the &#x60;;&#x60; symbol. |

### Return type

[**\Voximplant\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRuleInfo**
> \Voximplant\Client\Model\InlineResponse200 setRuleInfo($rule_id, $rule_name, $rule_pattern, $rule_pattern_exclude)



Edits the rule.

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

$api_instance = new Voximplant\Client\Api\ManagingRulesApi();
$rule_id = 3.4; // float | The rule ID.
$rule_name = "rule_name_example"; // string | The new rule name. The length must be less than 512
$rule_pattern = "rule_pattern_example"; // string | The new rule pattern regex. The length must be less than 64 KB.
$rule_pattern_exclude = "rule_pattern_exclude_example"; // string | The new exclude pattern regex. The length must be less than 64 KB.

try {
    $result = $api_instance->setRuleInfo($rule_id, $rule_name, $rule_pattern, $rule_pattern_exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRulesApi->setRuleInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **float**| The rule ID. |
 **rule_name** | **string**| The new rule name. The length must be less than 512 | [optional]
 **rule_pattern** | **string**| The new rule pattern regex. The length must be less than 64 KB. | [optional]
 **rule_pattern_exclude** | **string**| The new exclude pattern regex. The length must be less than 64 KB. | [optional]

### Return type

[**\Voximplant\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

