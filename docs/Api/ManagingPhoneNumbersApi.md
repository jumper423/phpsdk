# Voximplamt\Client\ManagingPhoneNumbersApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachPhoneNumber**](ManagingPhoneNumbersApi.md#attachPhoneNumber) | **POST** /AttachPhoneNumber | 
[**bindPhoneNumberToApplication**](ManagingPhoneNumbersApi.md#bindPhoneNumberToApplication) | **POST** /BindPhoneNumberToApplication | 
[**deactivatePhoneNumber**](ManagingPhoneNumbersApi.md#deactivatePhoneNumber) | **POST** /DeactivatePhoneNumber | 
[**getActualPhoneNumberRegion**](ManagingPhoneNumbersApi.md#getActualPhoneNumberRegion) | **POST** /GetActualPhoneNumberRegion | 
[**getNewPhoneNumbers**](ManagingPhoneNumbersApi.md#getNewPhoneNumbers) | **POST** /GetNewPhoneNumbers | 
[**getPhoneNumberCategories**](ManagingPhoneNumbersApi.md#getPhoneNumberCategories) | **POST** /GetPhoneNumberCategories | 
[**getPhoneNumberCountryStates**](ManagingPhoneNumbersApi.md#getPhoneNumberCountryStates) | **POST** /GetPhoneNumberCountryStates | 
[**getPhoneNumberRegions**](ManagingPhoneNumbersApi.md#getPhoneNumberRegions) | **POST** /GetPhoneNumberRegions | 
[**getPhoneNumbers**](ManagingPhoneNumbersApi.md#getPhoneNumbers) | **POST** /GetPhoneNumbers | 
[**setPhoneNumberInfo**](ManagingPhoneNumbersApi.md#setPhoneNumberInfo) | **POST** /SetPhoneNumberInfo | 


# **attachPhoneNumber**
> \Voximplamt\Client\Model\InlineResponse20014 attachPhoneNumber($country_code, $phone_category_name, $phone_region_id, $phone_count, $phone_number, $country_state, $regulation_address_id)



Attach the phone number to the account. To attach the German, Italian phone numbers you should specify the phone_owner_* parameters.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$country_code = "country_code_example"; // string | The country code.
$phone_category_name = "phone_category_name_example"; // string | The phone category name. See the GetPhoneNumberCategories function.
$phone_region_id = 3.4; // float | The phone region ID. See the GetPhoneNumberRegions function.
$phone_count = 3.4; // float | The phone count to attach.
$phone_number = "phone_number_example"; // string | The phone number that can be used instead of <b>phone_count</b>. See the GetNewPhoneNumbers function.
$country_state = "country_state_example"; // string | The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions.
$regulation_address_id = 3.4; // float | The phone regulation address ID.

try {
    $result = $api_instance->attachPhoneNumber($country_code, $phone_category_name, $phone_region_id, $phone_count, $phone_number, $country_state, $regulation_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->attachPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. |
 **phone_category_name** | **string**| The phone category name. See the GetPhoneNumberCategories function. |
 **phone_region_id** | **float**| The phone region ID. See the GetPhoneNumberRegions function. |
 **phone_count** | **float**| The phone count to attach. | [optional]
 **phone_number** | **string**| The phone number that can be used instead of &lt;b&gt;phone_count&lt;/b&gt;. See the GetNewPhoneNumbers function. | [optional]
 **country_state** | **string**| The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. | [optional]
 **regulation_address_id** | **float**| The phone regulation address ID. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindPhoneNumberToApplication**
> \Voximplamt\Client\Model\InlineResponse200 bindPhoneNumberToApplication($phone_id, $phone_number, $application_id, $application_name, $rule_id, $rule_name, $bind)



Bind the phone number to the application or unbind the phone number from the application. You should specify the application_id or application_name if you specify the rule_name.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$phone_id = 3.4; // float | The phone ID list separated by the `;` symbol or the `all` value.
$phone_number = "phone_number_example"; // string | The phone number list separated by the `;` symbol that can be used instead of <b>phone_id</b>.
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name that can be used instead of <b>application_id</b>.
$rule_id = 3.4; // float | The rule ID.
$rule_name = "rule_name_example"; // string | The rule name that can be used instead of <b>rule_id</b>.
$bind = true; // bool | Bind or unbind?

try {
    $result = $api_instance->bindPhoneNumberToApplication($phone_id, $phone_number, $application_id, $application_name, $rule_id, $rule_name, $bind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->bindPhoneNumberToApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **float**| The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **phone_number** | **string**| The phone number list separated by the &#x60;;&#x60; symbol that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. | [optional]
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

# **deactivatePhoneNumber**
> \Voximplamt\Client\Model\InlineResponse200 deactivatePhoneNumber($phone_id, $phone_number)



Deactivates the phone number.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$phone_id = 3.4; // float | The phone ID.
$phone_number = "phone_number_example"; // string | The phone number that can be used instead of <b>phone_id</b>.

try {
    $result = $api_instance->deactivatePhoneNumber($phone_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->deactivatePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **float**| The phone ID. | [optional]
 **phone_number** | **string**| The phone number that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActualPhoneNumberRegion**
> \Voximplamt\Client\Model\InlineResponse20025 getActualPhoneNumberRegion($country_code, $phone_category_name, $phone_region_id)



Gets actual info the country region of the phone numbers.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$country_code = "country_code_example"; // string | The country code.
$phone_category_name = "phone_category_name_example"; // string | The phone category name. See the GetPhoneNumberCategories function.
$phone_region_id = 3.4; // float | The phone region ID to filter.

try {
    $result = $api_instance->getActualPhoneNumberRegion($country_code, $phone_category_name, $phone_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->getActualPhoneNumberRegion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. |
 **phone_category_name** | **string**| The phone category name. See the GetPhoneNumberCategories function. |
 **phone_region_id** | **float**| The phone region ID to filter. |

### Return type

[**\Voximplamt\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewPhoneNumbers**
> \Voximplamt\Client\Model\InlineResponse20039 getNewPhoneNumbers($country_code, $phone_category_name, $phone_region_id, $country_state, $count, $offset)



Gets the new phone numbers.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$country_code = "country_code_example"; // string | The country code.
$phone_category_name = "phone_category_name_example"; // string | The phone category name. See the GetPhoneNumberCategories function.
$phone_region_id = 3.4; // float | The phone region ID. See the GetPhoneNumberRegions function.
$country_state = "country_state_example"; // string | The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getNewPhoneNumbers($country_code, $phone_category_name, $phone_region_id, $country_state, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->getNewPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. |
 **phone_category_name** | **string**| The phone category name. See the GetPhoneNumberCategories function. |
 **phone_region_id** | **float**| The phone region ID. See the GetPhoneNumberRegions function. |
 **country_state** | **string**| The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneNumberCategories**
> \Voximplamt\Client\Model\InlineResponse20040 getPhoneNumberCategories($country_code, $sandbox)



Gets the phone number categories.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$country_code = "country_code_example"; // string | The country code.
$sandbox = "sandbox_example"; // string | Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: `all`, `true`, `false`.

try {
    $result = $api_instance->getPhoneNumberCategories($country_code, $sandbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->getPhoneNumberCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. | [optional]
 **sandbox** | **string**| Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: &#x60;all&#x60;, &#x60;true&#x60;, &#x60;false&#x60;. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneNumberCountryStates**
> \Voximplamt\Client\Model\InlineResponse20041 getPhoneNumberCountryStates($country_code, $phone_category_name, $country_state)



Gets the phone number country states.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$country_code = "country_code_example"; // string | The country code.
$phone_category_name = "phone_category_name_example"; // string | The phone category name. See the GetPhoneNumberCategories function.
$country_state = "country_state_example"; // string | The country state code (example: AL, CA, ... ).

try {
    $result = $api_instance->getPhoneNumberCountryStates($country_code, $phone_category_name, $country_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->getPhoneNumberCountryStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. |
 **phone_category_name** | **string**| The phone category name. See the GetPhoneNumberCategories function. |
 **country_state** | **string**| The country state code (example: AL, CA, ... ). | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneNumberRegions**
> \Voximplamt\Client\Model\InlineResponse20042 getPhoneNumberRegions($country_code, $phone_category_name, $country_state, $omit_empty, $phone_region_id, $phone_region_name, $phone_region_code)



Gets the country regions of the phone numbers.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$country_code = "country_code_example"; // string | The country code.
$phone_category_name = "phone_category_name_example"; // string | The phone category name. See the GetPhoneNumberCategories function.
$country_state = "country_state_example"; // string | The country state code (example: AL, CA, ... ).
$omit_empty = true; // bool | Set to `false` to show the all regions (with and without phone numbers in stock).
$phone_region_id = 3.4; // float | The phone region ID to filter.
$phone_region_name = "phone_region_name_example"; // string | The phone region name to filter.
$phone_region_code = "phone_region_code_example"; // string | The region phone prefix to filter.

try {
    $result = $api_instance->getPhoneNumberRegions($country_code, $phone_category_name, $country_state, $omit_empty, $phone_region_id, $phone_region_name, $phone_region_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->getPhoneNumberRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. |
 **phone_category_name** | **string**| The phone category name. See the GetPhoneNumberCategories function. |
 **country_state** | **string**| The country state code (example: AL, CA, ... ). | [optional]
 **omit_empty** | **bool**| Set to &#x60;false&#x60; to show the all regions (with and without phone numbers in stock). | [optional]
 **phone_region_id** | **float**| The phone region ID to filter. | [optional]
 **phone_region_name** | **string**| The phone region name to filter. | [optional]
 **phone_region_code** | **string**| The region phone prefix to filter. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneNumbers**
> \Voximplamt\Client\Model\InlineResponse20043 getPhoneNumbers($phone_id, $application_id, $application_name, $is_bound_to_application, $phone_template, $country_code, $phone_category_name, $canceled, $deactivated, $auto_charge, $from_phone_next_renewal, $to_phone_next_renewal, $from_phone_purchase_date, $to_phone_purchase_date, $child_account_id, $children_phones_only, $verification_name, $verification_status, $from_unverified_hold_until, $to_unverified_hold_until, $can_be_used, $order_by, $sandbox, $count, $offset)



Gets the account phone numbers.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$phone_id = 3.4; // float | The particular phone ID to filter
$application_id = 3.4; // float | The application ID.
$application_name = "application_name_example"; // string | The application name that can be used instead of <b>application_id</b>.
$is_bound_to_application = true; // bool | Is a phone bound to an application.
$phone_template = "phone_template_example"; // string | The phone number start to filter
$country_code = "country_code_example"; // string | The country code list separated by the `;` symbol.
$phone_category_name = "phone_category_name_example"; // string | The phone category name. See the GetPhoneNumberCategories function.
$canceled = true; // bool | The flag of the canceled (deleted) subscription to filter.
$deactivated = true; // bool | The flag of the deactivated (frozen) subscription to filter.
$auto_charge = true; // bool | The auto_charge flag to filter.
$from_phone_next_renewal = "from_phone_next_renewal_example"; // string | The UTC from `phone_next_renewal` date filter in format: YYYY-MM-DD
$to_phone_next_renewal = "to_phone_next_renewal_example"; // string | The UTC to `phone_next_renewal` date filter in format: YYYY-MM-DD
$from_phone_purchase_date = "from_phone_purchase_date_example"; // string | The UTC from `phone_purchase_date` date filter in format: YYYY-MM-DD hh:mm:ss
$to_phone_purchase_date = "to_phone_purchase_date_example"; // string | The UTC to `phone_purchase_date` date filter in format: YYYY-MM-DD hh:mm:ss
$child_account_id = "child_account_id_example"; // string | The child account ID list separated by the `;` symbol or the `all` value.
$children_phones_only = true; // bool | Set true to get the children phones only.
$verification_name = "verification_name_example"; // string | The required account verification name to filter.
$verification_status = "verification_status_example"; // string | The account verification status list separated by the `;` symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED
$from_unverified_hold_until = "from_unverified_hold_until_example"; // string | Unverified phone hold until the date (from ...) in format: YYYY-MM-DD
$to_unverified_hold_until = "to_unverified_hold_until_example"; // string | Unverified phone hold until the date (... to) in format: YYYY-MM-DD
$can_be_used = true; // bool | Can the unverified account use the phone?
$order_by = "order_by_example"; // string | The following values are available: `phone_number` (ascent order), `phone_price` (ascent order), `phone_country_code` (ascent order), `deactivated` (deactivated first, active last), `purchase_date` (descent order), `phone_next_renewal` (ascent order), `verification_status`, `unverified_hold_until` (ascent order), `verification_name`.
$sandbox = "sandbox_example"; // string | Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers .The following values are possible: `all`, `true`, `false`.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getPhoneNumbers($phone_id, $application_id, $application_name, $is_bound_to_application, $phone_template, $country_code, $phone_category_name, $canceled, $deactivated, $auto_charge, $from_phone_next_renewal, $to_phone_next_renewal, $from_phone_purchase_date, $to_phone_purchase_date, $child_account_id, $children_phones_only, $verification_name, $verification_status, $from_unverified_hold_until, $to_unverified_hold_until, $can_be_used, $order_by, $sandbox, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->getPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **float**| The particular phone ID to filter | [optional]
 **application_id** | **float**| The application ID. | [optional]
 **application_name** | **string**| The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. | [optional]
 **is_bound_to_application** | **bool**| Is a phone bound to an application. | [optional]
 **phone_template** | **string**| The phone number start to filter | [optional]
 **country_code** | **string**| The country code list separated by the &#x60;;&#x60; symbol. | [optional]
 **phone_category_name** | **string**| The phone category name. See the GetPhoneNumberCategories function. | [optional]
 **canceled** | **bool**| The flag of the canceled (deleted) subscription to filter. | [optional]
 **deactivated** | **bool**| The flag of the deactivated (frozen) subscription to filter. | [optional]
 **auto_charge** | **bool**| The auto_charge flag to filter. | [optional]
 **from_phone_next_renewal** | **string**| The UTC from &#x60;phone_next_renewal&#x60; date filter in format: YYYY-MM-DD | [optional]
 **to_phone_next_renewal** | **string**| The UTC to &#x60;phone_next_renewal&#x60; date filter in format: YYYY-MM-DD | [optional]
 **from_phone_purchase_date** | **string**| The UTC from &#x60;phone_purchase_date&#x60; date filter in format: YYYY-MM-DD hh:mm:ss | [optional]
 **to_phone_purchase_date** | **string**| The UTC to &#x60;phone_purchase_date&#x60; date filter in format: YYYY-MM-DD hh:mm:ss | [optional]
 **child_account_id** | **string**| The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **children_phones_only** | **bool**| Set true to get the children phones only. | [optional]
 **verification_name** | **string**| The required account verification name to filter. | [optional]
 **verification_status** | **string**| The account verification status list separated by the &#x60;;&#x60; symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED | [optional]
 **from_unverified_hold_until** | **string**| Unverified phone hold until the date (from ...) in format: YYYY-MM-DD | [optional]
 **to_unverified_hold_until** | **string**| Unverified phone hold until the date (... to) in format: YYYY-MM-DD | [optional]
 **can_be_used** | **bool**| Can the unverified account use the phone? | [optional]
 **order_by** | **string**| The following values are available: &#x60;phone_number&#x60; (ascent order), &#x60;phone_price&#x60; (ascent order), &#x60;phone_country_code&#x60; (ascent order), &#x60;deactivated&#x60; (deactivated first, active last), &#x60;purchase_date&#x60; (descent order), &#x60;phone_next_renewal&#x60; (ascent order), &#x60;verification_status&#x60;, &#x60;unverified_hold_until&#x60; (ascent order), &#x60;verification_name&#x60;. | [optional]
 **sandbox** | **string**| Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers .The following values are possible: &#x60;all&#x60;, &#x60;true&#x60;, &#x60;false&#x60;. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPhoneNumberInfo**
> \Voximplamt\Client\Model\InlineResponse200 setPhoneNumberInfo($auto_charge, $phone_id, $phone_number)



Configure the phone number.

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

$api_instance = new Voximplamt\Client\Api\ManagingPhoneNumbersApi();
$auto_charge = true; // bool | Is auto charge enable?
$phone_id = 3.4; // float | The phone ID list separated by the `;` symbol or the `all` value.
$phone_number = "phone_number_example"; // string | The phone number that can be used instead of <b>phone_id</b>.

try {
    $result = $api_instance->setPhoneNumberInfo($auto_charge, $phone_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingPhoneNumbersApi->setPhoneNumberInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_charge** | **bool**| Is auto charge enable? |
 **phone_id** | **float**| The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **phone_number** | **string**| The phone number that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplamt\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

