# Voximplant\ManagingQueuesApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQueue**](ManagingQueuesApi.md#addQueue) | **POST** /AddQueue | 
[**delQueue**](ManagingQueuesApi.md#delQueue) | **POST** /DelQueue | 
[**getACDState**](ManagingQueuesApi.md#getACDState) | **POST** /GetACDState | 
[**getQueues**](ManagingQueuesApi.md#getQueues) | **POST** /GetQueues | 
[**setQueueInfo**](ManagingQueuesApi.md#setQueueInfo) | **POST** /SetQueueInfo | 


# **addQueue**
> \Model\InlineResponse2007 addQueue($acd_queue_name, $application_id, $application_name, $acd_queue_priority, $auto_binding, $service_probability, $max_queue_size, $max_waiting_time, $average_service_time)



Adds a new ACD queue.

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

$api_instance = new Voximplant\Api\ManagingQueuesApi();
$acd_queue_name = "acd_queue_name_example"; // string | The queue name. The length must be less than 100.
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name that can be used instead of <b>application_id</b>.
$acd_queue_priority = 3.4; // float | The integer queue priority. The highest priority is 0.
$auto_binding = true; // bool | Set false to disable the auto operators binding by skills comparing.
$service_probability = 3.4; // float | The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue.
$max_queue_size = 3.4; // float | The max queue size.
$max_waiting_time = 3.4; // float | The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time.
$average_service_time = 3.4; // float | The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction.

try {
    $result = $api_instance->addQueue($acd_queue_name, $application_id, $application_name, $acd_queue_priority, $auto_binding, $service_probability, $max_queue_size, $max_waiting_time, $average_service_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingQueuesApi->addQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acd_queue_name** | **string**| The queue name. The length must be less than 100. |
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **acd_queue_priority** | **float**| The integer queue priority. The highest priority is 0. | [optional]
 **auto_binding** | **bool**| Set false to disable the auto operators binding by skills comparing. | [optional]
 **service_probability** | **float**| The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. | [optional]
 **max_queue_size** | **float**| The max queue size. | [optional]
 **max_waiting_time** | **float**| The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. | [optional]
 **average_service_time** | **float**| The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction. | [optional]

### Return type

[**\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delQueue**
> \Model\InlineResponse200 delQueue($acd_queue_id, $acd_queue_name)



Deletes the ACD queue.

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

$api_instance = new Voximplant\Api\ManagingQueuesApi();
$acd_queue_id = 3.4; // float | The ACD queue ID.
$acd_queue_name = "acd_queue_name_example"; // string | The ACD queue name that can be used instead of <b>acd_queue_id</b>. The ACD queue name list separated by the `;` symbol.

try {
    $result = $api_instance->delQueue($acd_queue_id, $acd_queue_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingQueuesApi->delQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acd_queue_id** | **float**| The ACD queue ID. | [optional]
 **acd_queue_name** | **string**| The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. The ACD queue name list separated by the &#x60;;&#x60; symbol. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACDState**
> \Model\InlineResponse20022 getACDState($acd_queue_id)



Gets the current ACD queue state.

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

$api_instance = new Voximplant\Api\ManagingQueuesApi();
$acd_queue_id = "acd_queue_id_example"; // string | The ACD queue ID list separated by the `;` symbol or the `all` value.

try {
    $result = $api_instance->getACDState($acd_queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingQueuesApi->getACDState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acd_queue_id** | **string**| The ACD queue ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]

### Return type

[**\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQueues**
> \Model\InlineResponse20046 getQueues($acd_queue_id, $acd_queue_name, $application_id, $skill_id, $excluded_skill_id, $with_skills, $showing_skill_id, $count, $offset)



Gets the ACD queues.

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

$api_instance = new Voximplant\Api\ManagingQueuesApi();
$acd_queue_id = 3.4; // float | The ACD queue ID to filter.
$acd_queue_name = "acd_queue_name_example"; // string | The ACD queue name part to filter.
$application_id = 3.4; // float | The application ID to filter.
$skill_id = 3.4; // float | The skill ID to filter.
$excluded_skill_id = 3.4; // float | The excluded skill ID to filter.
$with_skills = true; // bool | Set true to get the bound skills.
$showing_skill_id = 3.4; // float | The skill to show in the `skills` field output.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getQueues($acd_queue_id, $acd_queue_name, $application_id, $skill_id, $excluded_skill_id, $with_skills, $showing_skill_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingQueuesApi->getQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acd_queue_id** | **float**| The ACD queue ID to filter. | [optional]
 **acd_queue_name** | **string**| The ACD queue name part to filter. | [optional]
 **application_id** | **float**| The application ID to filter. | [optional]
 **skill_id** | **float**| The skill ID to filter. | [optional]
 **excluded_skill_id** | **float**| The excluded skill ID to filter. | [optional]
 **with_skills** | **bool**| Set true to get the bound skills. | [optional]
 **showing_skill_id** | **float**| The skill to show in the &#x60;skills&#x60; field output. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQueueInfo**
> \Model\InlineResponse200 setQueueInfo($acd_queue_id, $acd_queue_name, $new_acd_queue_name, $acd_queue_priority, $auto_binding, $service_probability, $max_queue_size, $max_waiting_time, $average_service_time, $application_id)



Edits the ACD queue.

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

$api_instance = new Voximplant\Api\ManagingQueuesApi();
$acd_queue_id = 3.4; // float | The ACD queue ID.
$acd_queue_name = "acd_queue_name_example"; // string | The ACD queue name that can be used instead of <b>acd_queue_id</b>.
$new_acd_queue_name = "new_acd_queue_name_example"; // string | The new queue name. The length must be less than 100.
$acd_queue_priority = 3.4; // float | The integer queue priority. The highest priority is 0.
$auto_binding = true; // bool | Set false to disable the auto operators binding to the queue by skills comparing.
$service_probability = 3.4; // float | The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue.
$max_queue_size = 3.4; // float | The max queue size.
$max_waiting_time = 3.4; // float | The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time.
$average_service_time = 3.4; // float | The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction.
$application_id = 3.4; // float | The new application ID.

try {
    $result = $api_instance->setQueueInfo($acd_queue_id, $acd_queue_name, $new_acd_queue_name, $acd_queue_priority, $auto_binding, $service_probability, $max_queue_size, $max_waiting_time, $average_service_time, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingQueuesApi->setQueueInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acd_queue_id** | **float**| The ACD queue ID. | [optional]
 **acd_queue_name** | **string**| The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. | [optional]
 **new_acd_queue_name** | **string**| The new queue name. The length must be less than 100. | [optional]
 **acd_queue_priority** | **float**| The integer queue priority. The highest priority is 0. | [optional]
 **auto_binding** | **bool**| Set false to disable the auto operators binding to the queue by skills comparing. | [optional]
 **service_probability** | **float**| The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. | [optional]
 **max_queue_size** | **float**| The max queue size. | [optional]
 **max_waiting_time** | **float**| The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. | [optional]
 **average_service_time** | **float**| The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction. | [optional]
 **application_id** | **float**| The new application ID. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

