# Voximplant\ManagingCallListsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendToCallList**](ManagingCallListsApi.md#appendToCallList) | **POST** /AppendToCallList | 
[**createCallList**](ManagingCallListsApi.md#createCallList) | **POST** /CreateCallList | 
[**createManualCallList**](ManagingCallListsApi.md#createManualCallList) | **POST** /CreateManualCallList | 
[**getCallListDetails**](ManagingCallListsApi.md#getCallListDetails) | **POST** /GetCallListDetails | 
[**getCallLists**](ManagingCallListsApi.md#getCallLists) | **POST** /GetCallLists | 
[**recoverCallList**](ManagingCallListsApi.md#recoverCallList) | **POST** /RecoverCallList | 
[**startNextCallTask**](ManagingCallListsApi.md#startNextCallTask) | **POST** /StartNextCallTask | 
[**stopCallListProcessing**](ManagingCallListsApi.md#stopCallListProcessing) | **POST** /StopCallListProcessing | 


# **appendToCallList**
> \Voximplant\Model\InlineResponse20013 appendToCallList($file_content, $list_id, $list_name, $encoding, $delimiter)



Appending new task to existing call list.

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$file_content = "file_content_example"; // string | Send as Body Request or multiform.
$list_id = 3.4; // float | The call list ID
$list_name = "list_name_example"; // string | Can be used instead of <b>list_id</b>. The unique name call list
$encoding = "encoding_example"; // string | Encoding file. The default is UTF-8.
$delimiter = "delimiter_example"; // string | Separator values. The default is `;`

try {
    $result = $api_instance->appendToCallList($file_content, $list_id, $list_name, $encoding, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->appendToCallList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_content** | **string**| Send as Body Request or multiform. |
 **list_id** | **float**| The call list ID | [optional]
 **list_name** | **string**| Can be used instead of &lt;b&gt;list_id&lt;/b&gt;. The unique name call list | [optional]
 **encoding** | **string**| Encoding file. The default is UTF-8. | [optional]
 **delimiter** | **string**| Separator values. The default is &#x60;;&#x60; | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCallList**
> \Voximplant\Model\InlineResponse20013 createCallList($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds, $queue_id, $avg_waiting_sec, $encoding, $delimiter)



Adds a new CSV file for processing. To send a file, use the request body. To set the call time constraints, use the options __start_execution_time and __end_execution_time in CSV file. Time format HH24:MM

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$rule_id = 3.4; // float | The rule ID.
$priority = 3.4; // float | Priority tasks
$max_simultaneous = 3.4; // float | Number simultaneously processed tasks.
$num_attempts = 3.4; // float | Number of attempts.
$name = "name_example"; // string | File name.
$file_content = "file_content_example"; // string | Send as Body Request or multiform.
$interval_seconds = 3.4; // float | Interval between call attempts in seconds. The default is 0.
$queue_id = 3.4; // float | Queue Id. For processing list with PDS must specify the ID of the queue.
$avg_waiting_sec = 3.4; // float | Average waiting time in the queue(seconds). Default is 1
$encoding = "encoding_example"; // string | Encoding file. The default is UTF-8.
$delimiter = "delimiter_example"; // string | Separator values. The default is `;`

try {
    $result = $api_instance->createCallList($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds, $queue_id, $avg_waiting_sec, $encoding, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->createCallList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **float**| The rule ID. |
 **priority** | **float**| Priority tasks |
 **max_simultaneous** | **float**| Number simultaneously processed tasks. |
 **num_attempts** | **float**| Number of attempts. |
 **name** | **string**| File name. |
 **file_content** | **string**| Send as Body Request or multiform. |
 **interval_seconds** | **float**| Interval between call attempts in seconds. The default is 0. | [optional]
 **queue_id** | **float**| Queue Id. For processing list with PDS must specify the ID of the queue. | [optional]
 **avg_waiting_sec** | **float**| Average waiting time in the queue(seconds). Default is 1 | [optional]
 **encoding** | **string**| Encoding file. The default is UTF-8. | [optional]
 **delimiter** | **string**| Separator values. The default is &#x60;;&#x60; | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createManualCallList**
> \Voximplant\Model\InlineResponse20013 createManualCallList($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds, $encoding, $delimiter)



Adds a new CSV file for manual processing. To send a file, use the request body. To start processing calls, use the function StartNextCallTask.

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$rule_id = 3.4; // float | The rule ID.
$priority = 3.4; // float | Priority tasks
$max_simultaneous = 3.4; // float | Number simultaneously processed tasks.
$num_attempts = 3.4; // float | Number of attempts.
$name = "name_example"; // string | File name.
$file_content = "file_content_example"; // string | Send as Body Request or multiform.
$interval_seconds = 3.4; // float | Interval between call attempts in seconds. The default is 0.
$encoding = "encoding_example"; // string | Encoding file. The default is UTF-8.
$delimiter = "delimiter_example"; // string | Separator values. The default is `;`

try {
    $result = $api_instance->createManualCallList($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds, $encoding, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->createManualCallList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **float**| The rule ID. |
 **priority** | **float**| Priority tasks |
 **max_simultaneous** | **float**| Number simultaneously processed tasks. |
 **num_attempts** | **float**| Number of attempts. |
 **name** | **string**| File name. |
 **file_content** | **string**| Send as Body Request or multiform. |
 **interval_seconds** | **float**| Interval between call attempts in seconds. The default is 0. | [optional]
 **encoding** | **string**| Encoding file. The default is UTF-8. | [optional]
 **delimiter** | **string**| Separator values. The default is &#x60;;&#x60; | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallListDetails**
> \Voximplant\Model\InlineResponse20032 getCallListDetails($list_id, $count, $offset, $output, $encoding, $delimiter)



Get details of the tasks of outgoing calls. Default return CSV file.

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$list_id = 3.4; // float | The list ID.
$count = 3.4; // float | Maximum number of entries in the result
$offset = 3.4; // float | Offset from beginning of the list
$output = "output_example"; // string | Output format (CSV/JSON/XLS). Default CSV
$encoding = "encoding_example"; // string | Encoding of the output file. Default UTF-8
$delimiter = "delimiter_example"; // string | Separator values. The default is `;`

try {
    $result = $api_instance->getCallListDetails($list_id, $count, $offset, $output, $encoding, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->getCallListDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **float**| The list ID. |
 **count** | **float**| Maximum number of entries in the result | [optional]
 **offset** | **float**| Offset from beginning of the list | [optional]
 **output** | **string**| Output format (CSV/JSON/XLS). Default CSV | [optional]
 **encoding** | **string**| Encoding of the output file. Default UTF-8 | [optional]
 **delimiter** | **string**| Separator values. The default is &#x60;;&#x60; | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallLists**
> \Voximplant\Model\InlineResponse20033 getCallLists($name, $is_active, $from_date, $to_date, $type_list, $count, $offset)



Get all lists of outgoing calls registered user

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$name = "name_example"; // string | Find call lists by name
$is_active = true; // bool | Find only active call lists
$from_date = "from_date_example"; // string | The UTC from date filter in format YYYY-MM-DD HH:mm:SS
$to_date = "to_date_example"; // string | The UTC to date filter in format YYYY-MM-DD HH:mm:SS
$type_list = "type_list_example"; // string | The type of call list. Available values: AUTOMATIC and MANUAL
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getCallLists($name, $is_active, $from_date, $to_date, $type_list, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->getCallLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Find call lists by name | [optional]
 **is_active** | **bool**| Find only active call lists | [optional]
 **from_date** | **string**| The UTC from date filter in format YYYY-MM-DD HH:mm:SS | [optional]
 **to_date** | **string**| The UTC to date filter in format YYYY-MM-DD HH:mm:SS | [optional]
 **type_list** | **string**| The type of call list. Available values: AUTOMATIC and MANUAL | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recoverCallList**
> \Voximplant\Model\InlineResponse20061 recoverCallList($list_id)



Restore processing the task list

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$list_id = 3.4; // float | The list Id.

try {
    $result = $api_instance->recoverCallList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->recoverCallList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **float**| The list Id. |

### Return type

[**\Voximplant\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startNextCallTask**
> \Voximplant\Model\InlineResponse20065 startNextCallTask($list_id, $custom_params)



Start processing the next task

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$list_id = 3.4; // float | The list Id. Сan use a set of identifiers with the separator \";\"
$custom_params = "custom_params_example"; // string | The custom param. Use to transfer the call initiator parameters to the scenario.

try {
    $result = $api_instance->startNextCallTask($list_id, $custom_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->startNextCallTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **float**| The list Id. Сan use a set of identifiers with the separator \&quot;;\&quot; |
 **custom_params** | **string**| The custom param. Use to transfer the call initiator parameters to the scenario. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopCallListProcessing**
> \Voximplant\Model\InlineResponse20067 stopCallListProcessing($list_id)



Stop processing the task list

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

$api_instance = new Voximplant\Api\ManagingCallListsApi();
$list_id = 3.4; // float | The list Id.

try {
    $result = $api_instance->stopCallListProcessing($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingCallListsApi->stopCallListProcessing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **float**| The list Id. |

### Return type

[**\Voximplant\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

