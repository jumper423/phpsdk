# Voximplamt\Client\ManagingHistoryApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadHistoryReport**](ManagingHistoryApi.md#downloadHistoryReport) | **POST** /DownloadHistoryReport | 
[**getACDHistory**](ManagingHistoryApi.md#getACDHistory) | **POST** /GetACDHistory | 
[**getCallHistory**](ManagingHistoryApi.md#getCallHistory) | **POST** /GetCallHistory | 
[**getHistoryReports**](ManagingHistoryApi.md#getHistoryReports) | **POST** /GetHistoryReports | 
[**getTransactionHistory**](ManagingHistoryApi.md#getTransactionHistory) | **POST** /GetTransactionHistory | 


# **downloadHistoryReport**
> object downloadHistoryReport($history_report_id)



Downloads the required history report.

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

$api_instance = new Voximplamt\Client\Api\ManagingHistoryApi();
$history_report_id = 3.4; // float | The history report ID.

try {
    $result = $api_instance->downloadHistoryReport($history_report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingHistoryApi->downloadHistoryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **history_report_id** | **float**| The history report ID. |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACDHistory**
> \Voximplamt\Client\Model\InlineResponse20021 getACDHistory($from_date, $to_date, $acd_session_history_id, $acd_queue_id, $user_id, $operator_hangup, $unserviced, $min_waiting_time, $rejected, $with_events, $with_header, $desc_order, $count, $offset, $output)



Gets the ACD history.

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

$api_instance = new Voximplamt\Client\Api\ManagingHistoryApi();
$from_date = "from_date_example"; // string | The UTC from date filter in format YYYY-MM-DD HH:mm:SS
$to_date = "to_date_example"; // string | The UTC to date filter in format YYYY-MM-DD HH:mm:SS
$acd_session_history_id = "acd_session_history_id_example"; // string | The ACD session history ID list separated by the `;` symbol.
$acd_queue_id = "acd_queue_id_example"; // string | The ACD queue ID list to filter separated by the `;` symbol.
$user_id = "user_id_example"; // string | The user ID list to filter separated by the `;` symbol.
$operator_hangup = true; // bool | Set true to get the calls terminated by the operator.
$unserviced = true; // bool | The unserviced calls by the operator.
$min_waiting_time = 3.4; // float | The min waiting time filter.
$rejected = true; // bool | The rejected calls by the `max_queue_size`, `max_waiting_time` threshold.
$with_events = true; // bool | Set true to get the binding events.
$with_header = true; // bool | Set false to get a CSV file without the column names if the output=csv
$desc_order = true; // bool | Set true to get records in the descent order.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.
$output = "output_example"; // string | The output format. The following values available: json, csv

try {
    $result = $api_instance->getACDHistory($from_date, $to_date, $acd_session_history_id, $acd_queue_id, $user_id, $operator_hangup, $unserviced, $min_waiting_time, $rejected, $with_events, $with_header, $desc_order, $count, $offset, $output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingHistoryApi->getACDHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| The UTC from date filter in format YYYY-MM-DD HH:mm:SS |
 **to_date** | **string**| The UTC to date filter in format YYYY-MM-DD HH:mm:SS |
 **acd_session_history_id** | **string**| The ACD session history ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **acd_queue_id** | **string**| The ACD queue ID list to filter separated by the &#x60;;&#x60; symbol. | [optional]
 **user_id** | **string**| The user ID list to filter separated by the &#x60;;&#x60; symbol. | [optional]
 **operator_hangup** | **bool**| Set true to get the calls terminated by the operator. | [optional]
 **unserviced** | **bool**| The unserviced calls by the operator. | [optional]
 **min_waiting_time** | **float**| The min waiting time filter. | [optional]
 **rejected** | **bool**| The rejected calls by the &#x60;max_queue_size&#x60;, &#x60;max_waiting_time&#x60; threshold. | [optional]
 **with_events** | **bool**| Set true to get the binding events. | [optional]
 **with_header** | **bool**| Set false to get a CSV file without the column names if the output&#x3D;csv | [optional]
 **desc_order** | **bool**| Set true to get records in the descent order. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]
 **output** | **string**| The output format. The following values available: json, csv | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallHistory**
> \Voximplamt\Client\Model\InlineResponse20031 getCallHistory($from_date, $to_date, $timezone, $call_session_history_id, $application_id, $application_name, $user_id, $rule_name, $remote_number, $local_number, $call_session_history_custom_data, $with_calls, $with_records, $with_other_resources, $child_account_id, $children_calls_only, $with_header, $desc_order, $count, $offset, $output, $is_async)



Gets the call history.

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

$api_instance = new Voximplamt\Client\Api\ManagingHistoryApi();
$from_date = "from_date_example"; // string | The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS
$to_date = "to_date_example"; // string | The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS
$timezone = "timezone_example"; // string | The selected timezone or the `auto` value (will be used the account location).
$call_session_history_id = "call_session_history_id_example"; // string | The call session history ID list separated by the `;` symbol.
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name, can be used instead of <b>application_id</b>.
$user_id = "user_id_example"; // string | The user ID list separated by the `;` symbol.
$rule_name = "rule_name_example"; // string | The rule name to filter.
$remote_number = "remote_number_example"; // string | The remote number list separated by the `;` symbol.
$local_number = "local_number_example"; // string | The local number list separated by the `;` symbol.
$call_session_history_custom_data = "call_session_history_custom_data_example"; // string | The custom_data to filter sessions.
$with_calls = true; // bool | Set true to get binding calls.
$with_records = true; // bool | Set true to get binding records.
$with_other_resources = true; // bool | Set true to get other resources usage.
$child_account_id = "child_account_id_example"; // string | The child account ID list separated by the `;` symbol or the `all` value.
$children_calls_only = true; // bool | Set true to get the children account calls only.
$with_header = true; // bool | Set false to get a CSV file without the column names if the output=csv
$desc_order = true; // bool | Set true to get records in the descent order.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.
$output = "output_example"; // string | The output format. The following values available: json, csv
$is_async = true; // bool | Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport.

try {
    $result = $api_instance->getCallHistory($from_date, $to_date, $timezone, $call_session_history_id, $application_id, $application_name, $user_id, $rule_name, $remote_number, $local_number, $call_session_history_custom_data, $with_calls, $with_records, $with_other_resources, $child_account_id, $children_calls_only, $with_header, $desc_order, $count, $offset, $output, $is_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingHistoryApi->getCallHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS |
 **to_date** | **string**| The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS |
 **timezone** | **string**| The selected timezone or the &#x60;auto&#x60; value (will be used the account location). | [optional]
 **call_session_history_id** | **string**| The call session history ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name, can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **user_id** | **string**| The user ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **rule_name** | **string**| The rule name to filter. | [optional]
 **remote_number** | **string**| The remote number list separated by the &#x60;;&#x60; symbol. | [optional]
 **local_number** | **string**| The local number list separated by the &#x60;;&#x60; symbol. | [optional]
 **call_session_history_custom_data** | **string**| The custom_data to filter sessions. | [optional]
 **with_calls** | **bool**| Set true to get binding calls. | [optional]
 **with_records** | **bool**| Set true to get binding records. | [optional]
 **with_other_resources** | **bool**| Set true to get other resources usage. | [optional]
 **child_account_id** | **string**| The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **children_calls_only** | **bool**| Set true to get the children account calls only. | [optional]
 **with_header** | **bool**| Set false to get a CSV file without the column names if the output&#x3D;csv | [optional]
 **desc_order** | **bool**| Set true to get records in the descent order. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]
 **output** | **string**| The output format. The following values available: json, csv | [optional]
 **is_async** | **bool**| Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoryReports**
> \Voximplamt\Client\Model\InlineResponse20037 getHistoryReports($history_report_id, $history_type, $created_from, $created_to, $is_completed, $desc_order, $count, $offset)



Gets the history report statuses.

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

$api_instance = new Voximplamt\Client\Api\ManagingHistoryApi();
$history_report_id = 3.4; // float | The history report ID to filter
$history_type = "history_type_example"; // string | The history report type list separated by the `;` symbol or the `all` value. The following values are possible: calls, transactions.
$created_from = "created_from_example"; // string | The UTC creation from date filter in format YYYY-MM-DD HH:mm:SS
$created_to = "created_to_example"; // string | The UTC creation to date filter in format YYYY-MM-DD HH:mm:SS
$is_completed = true; // bool | Is report completed?
$desc_order = true; // bool | Set true to get records in the descent order.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getHistoryReports($history_report_id, $history_type, $created_from, $created_to, $is_completed, $desc_order, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingHistoryApi->getHistoryReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **history_report_id** | **float**| The history report ID to filter | [optional]
 **history_type** | **string**| The history report type list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. The following values are possible: calls, transactions. | [optional]
 **created_from** | **string**| The UTC creation from date filter in format YYYY-MM-DD HH:mm:SS | [optional]
 **created_to** | **string**| The UTC creation to date filter in format YYYY-MM-DD HH:mm:SS | [optional]
 **is_completed** | **bool**| Is report completed? | [optional]
 **desc_order** | **bool**| Set true to get records in the descent order. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionHistory**
> \Voximplamt\Client\Model\InlineResponse20056 getTransactionHistory($from_date, $to_date, $timezone, $transaction_id, $payment_reference, $transaction_type, $user_id, $child_account_id, $children_transactions_only, $users_transactions_only, $desc_order, $count, $offset, $output, $is_async)



Gets the transaction history.

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

$api_instance = new Voximplamt\Client\Api\ManagingHistoryApi();
$from_date = "from_date_example"; // string | The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS
$to_date = "to_date_example"; // string | The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS
$timezone = "timezone_example"; // string | The selected timezone or the `auto` value (will be used the account location).
$transaction_id = "transaction_id_example"; // string | The transaction ID list separated by the `;` symbol.
$payment_reference = "payment_reference_example"; // string | The external payment reference to filter.
$transaction_type = "transaction_type_example"; // string | The transaction type list separated by the `;` symbol. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund.
$user_id = "user_id_example"; // string | The user ID list separated by the `;` symbol.
$child_account_id = "child_account_id_example"; // string | The child account ID list separated by the `;` symbol or the `all` value.
$children_transactions_only = true; // bool | Set true to get the children account transactions only.
$users_transactions_only = true; // bool | Set true to get the users` transactions only.
$desc_order = true; // bool | Set true to get records in the descent order.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.
$output = "output_example"; // string | The output format. The following values available: json, csv
$is_async = true; // bool | Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport.

try {
    $result = $api_instance->getTransactionHistory($from_date, $to_date, $timezone, $transaction_id, $payment_reference, $transaction_type, $user_id, $child_account_id, $children_transactions_only, $users_transactions_only, $desc_order, $count, $offset, $output, $is_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingHistoryApi->getTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS |
 **to_date** | **string**| The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS |
 **timezone** | **string**| The selected timezone or the &#x60;auto&#x60; value (will be used the account location). | [optional]
 **transaction_id** | **string**| The transaction ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **payment_reference** | **string**| The external payment reference to filter. | [optional]
 **transaction_type** | **string**| The transaction type list separated by the &#x60;;&#x60; symbol. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund. | [optional]
 **user_id** | **string**| The user ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **child_account_id** | **string**| The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **children_transactions_only** | **bool**| Set true to get the children account transactions only. | [optional]
 **users_transactions_only** | **bool**| Set true to get the users&#x60; transactions only. | [optional]
 **desc_order** | **bool**| Set true to get records in the descent order. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]
 **output** | **string**| The output format. The following values available: json, csv | [optional]
 **is_async** | **bool**| Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

