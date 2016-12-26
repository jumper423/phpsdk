# Voximplant\ManagingAccountsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chargeAccount**](ManagingAccountsApi.md#chargeAccount) | **POST** /ChargeAccount | 
[**confirmAccountPasswordChange**](ManagingAccountsApi.md#confirmAccountPasswordChange) | **POST** /ConfirmAccountPasswordChange | 
[**getAccountDocuments**](ManagingAccountsApi.md#getAccountDocuments) | **POST** /GetAccountDocuments | 
[**getAccountInfo**](ManagingAccountsApi.md#getAccountInfo) | **POST** /GetAccountInfo | 
[**getCurrencyRate**](ManagingAccountsApi.md#getCurrencyRate) | **POST** /GetCurrencyRate | 
[**getMoneyAmountToCharge**](ManagingAccountsApi.md#getMoneyAmountToCharge) | **POST** /GetMoneyAmountToCharge | 
[**getResourcePrice**](ManagingAccountsApi.md#getResourcePrice) | **POST** /GetResourcePrice | 
[**getSubscriptionPrice**](ManagingAccountsApi.md#getSubscriptionPrice) | **POST** /GetSubscriptionPrice | 
[**sendAccountPasswordChangeRequest**](ManagingAccountsApi.md#sendAccountPasswordChangeRequest) | **POST** /SendAccountPasswordChangeRequest | 
[**setAccountDocument**](ManagingAccountsApi.md#setAccountDocument) | **POST** /SetAccountDocument | 
[**setAccountInfo**](ManagingAccountsApi.md#setAccountInfo) | **POST** /SetAccountInfo | 


# **chargeAccount**
> \Swagger\Client\Model\InlineResponse20016 chargeAccount($phone_id, $phone_number)



Charges the account in the manual mode. You should call the ChargeAccount function to charge the subscriptions having the auto_charge=false.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$phone_id = "phone_id_example"; // string | The phone ID list separated by the `;` symbol or the `all` value. You should specify the phones having the auto_charge=false.
$phone_number = "phone_number_example"; // string | Can be used instead of <b>phone_id</b>. The phone number list separated by the `;` symbol or the `all` value. You should specify the phones having the auto_charge=false.

try {
    $result = $api_instance->chargeAccount($phone_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->chargeAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **string**| The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. You should specify the phones having the auto_charge&#x3D;false. | [optional]
 **phone_number** | **string**| Can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. The phone number list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. You should specify the phones having the auto_charge&#x3D;false. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmAccountPasswordChange**
> \Swagger\Client\Model\InlineResponse200 confirmAccountPasswordChange($code, $new_account_password)



Confirm the account password change

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$code = "code_example"; // string | The verification code (auth token).
$new_account_password = "new_account_password_example"; // string | The password length must be at least 6 symbols.

try {
    $result = $api_instance->confirmAccountPasswordChange($code, $new_account_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->confirmAccountPasswordChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The verification code (auth token). |
 **new_account_password** | **string**| The password length must be at least 6 symbols. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountDocuments**
> \Swagger\Client\Model\InlineResponse20023 getAccountDocuments($with_details, $verification_name, $verification_status, $from_unverified_hold_until, $to_unverified_hold_until, $child_account_id, $children_verifications_only)



Gets the account documents and the verification states.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$with_details = true; // bool | Set true to view the uploaded document statuses. (The flag is ignored with the child_account_id=all)
$verification_name = "verification_name_example"; // string | The required account verification name to filter.
$verification_status = "verification_status_example"; // string | The account verification status list separated by the `;` symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED
$from_unverified_hold_until = "from_unverified_hold_until_example"; // string | Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD
$to_unverified_hold_until = "to_unverified_hold_until_example"; // string | Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD
$child_account_id = "child_account_id_example"; // string | The child account ID list separated by the `;` symbol or the `all` value.
$children_verifications_only = true; // bool | Set true to get the children account verifications only.

try {
    $result = $api_instance->getAccountDocuments($with_details, $verification_name, $verification_status, $from_unverified_hold_until, $to_unverified_hold_until, $child_account_id, $children_verifications_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->getAccountDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_details** | **bool**| Set true to view the uploaded document statuses. (The flag is ignored with the child_account_id&#x3D;all) | [optional]
 **verification_name** | **string**| The required account verification name to filter. | [optional]
 **verification_status** | **string**| The account verification status list separated by the &#x60;;&#x60; symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED | [optional]
 **from_unverified_hold_until** | **string**| Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD | [optional]
 **to_unverified_hold_until** | **string**| Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD | [optional]
 **child_account_id** | **string**| The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **children_verifications_only** | **bool**| Set true to get the children account verifications only. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountInfo**
> \Swagger\Client\Model\InlineResponse20024 getAccountInfo($return_live_balance)



Gets the account's profile.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$return_live_balance = true; // bool | Set true to get the account`s live balance.

try {
    $result = $api_instance->getAccountInfo($return_live_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->getAccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_live_balance** | **bool**| Set true to get the account&#x60;s live balance. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrencyRate**
> \Swagger\Client\Model\InlineResponse20036 getCurrencyRate($currency, $date)



Gets the exchange rate on selected date (per USD).

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$currency = "currency_example"; // string | The currency code list separated by the `;` symbol. Examples: RUR, EUR, USD
$date = "date_example"; // string | The date, format: YYYY-MM-DD

try {
    $result = $api_instance->getCurrencyRate($currency, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->getCurrencyRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| The currency code list separated by the &#x60;;&#x60; symbol. Examples: RUR, EUR, USD |
 **date** | **string**| The date, format: YYYY-MM-DD | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMoneyAmountToCharge**
> \Swagger\Client\Model\InlineResponse20038 getMoneyAmountToCharge($currency, $charge_date)



Get the recommended money amount to charge.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$currency = "currency_example"; // string | The currency name. Examples: USD, RUR, EUR.
$charge_date = "charge_date_example"; // string | The next charge date, format: YYYY-MM-DD

try {
    $result = $api_instance->getMoneyAmountToCharge($currency, $charge_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->getMoneyAmountToCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| The currency name. Examples: USD, RUR, EUR. | [optional]
 **charge_date** | **string**| The next charge date, format: YYYY-MM-DD | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResourcePrice**
> \Swagger\Client\Model\InlineResponse20049 getResourcePrice($resource_type, $price_group_id, $price_group_name, $resource_param)



Gets the resource price.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$resource_type = "resource_type_example"; // string | The resource type list separated by the `;` symbol. The following values are possible: ASR, AUDIORECORD, PSTN_IN_GB, PSTN_IN_GEOGRAPHIC, PSTN_IN_RU, PSTN_IN_RU_TOLLFREE, PSTN_IN_US, PSTN_IN_US_TF, PSTNOUT, SIPOUT, SIPOUTVIDEO, VOIPIN, VOIPOUT, VOIPOUTVIDEO
$price_group_id = "price_group_id_example"; // string | The price group ID list separated by the `;` symbol.
$price_group_name = "price_group_name_example"; // string | The price group name template to filter.
$resource_param = "resource_param_example"; // string | The resource parameter list separated by the `;` symbol. Example: a phone number list.

try {
    $result = $api_instance->getResourcePrice($resource_type, $price_group_id, $price_group_name, $resource_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->getResourcePrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_type** | **string**| The resource type list separated by the &#x60;;&#x60; symbol. The following values are possible: ASR, AUDIORECORD, PSTN_IN_GB, PSTN_IN_GEOGRAPHIC, PSTN_IN_RU, PSTN_IN_RU_TOLLFREE, PSTN_IN_US, PSTN_IN_US_TF, PSTNOUT, SIPOUT, SIPOUTVIDEO, VOIPIN, VOIPOUT, VOIPOUTVIDEO | [optional]
 **price_group_id** | **string**| The price group ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **price_group_name** | **string**| The price group name template to filter. | [optional]
 **resource_param** | **string**| The resource parameter list separated by the &#x60;;&#x60; symbol. Example: a phone number list. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionPrice**
> \Swagger\Client\Model\InlineResponse20055 getSubscriptionPrice($subscription_template_id, $subscription_template_type, $subscription_template_name, $count, $offset)



Gets the subscription template price.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$subscription_template_id = "subscription_template_id_example"; // string | The subscription template ID list separated by the `;` symbol.
$subscription_template_type = "subscription_template_type_example"; // string | The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION.
$subscription_template_name = "subscription_template_name_example"; // string | The subscription template name  (example: SIP registration, Phone GB, Phone RU 495, ...).
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getSubscriptionPrice($subscription_template_id, $subscription_template_type, $subscription_template_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->getSubscriptionPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_template_id** | **string**| The subscription template ID list separated by the &#x60;;&#x60; symbol. | [optional]
 **subscription_template_type** | **string**| The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION. | [optional]
 **subscription_template_name** | **string**| The subscription template name  (example: SIP registration, Phone GB, Phone RU 495, ...). | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendAccountPasswordChangeRequest**
> \Swagger\Client\Model\InlineResponse200 sendAccountPasswordChangeRequest()



Send the account password change request by email. The email will contain a random code.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();

try {
    $result = $api_instance->sendAccountPasswordChangeRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->sendAccountPasswordChangeRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAccountDocument**
> \Swagger\Client\Model\InlineResponse20062 setAccountDocument($account_document, $verification_name, $is_individual, $individual_full_name, $individual_birth_date, $individual_passport_series, $individual_passport_number, $individual_passport_issue_date, $individual_passport_issued_by, $individual_registration_address, $legal_entry_full_name, $legal_entry_phone, $legal_entry_address, $legal_entry_actual_address, $ogrn, $inn)



Upload an account verification document. You should post the data with the 'multipart/form-data' content type!

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$account_document = "account_document_example"; // string | The document data. You should post the data with the `application/octet-stream` or `multipart/form-data` content type!
$verification_name = "verification_name_example"; // string | The account verification name.
$is_individual = true; // bool | Is individual, isn`t legal entity?
$individual_full_name = "individual_full_name_example"; // string | The full name of the individual.
$individual_birth_date = "individual_birth_date_example"; // string | The birth date in format: YYYY-MM-DD
$individual_passport_series = "individual_passport_series_example"; // string | The passport series of the individual.
$individual_passport_number = "individual_passport_number_example"; // string | The passport number of the individual.
$individual_passport_issue_date = "individual_passport_issue_date_example"; // string | The passport issue date in format: YYYY-MM-DD
$individual_passport_issued_by = "individual_passport_issued_by_example"; // string | The passport issued by.
$individual_registration_address = "individual_registration_address_example"; // string | The registration address of the individual.
$legal_entry_full_name = "legal_entry_full_name_example"; // string | The full name of the legal entry.
$legal_entry_phone = "legal_entry_phone_example"; // string | The phone of the legal entry.
$legal_entry_address = "legal_entry_address_example"; // string | The legal address of the legal entry.
$legal_entry_actual_address = "legal_entry_actual_address_example"; // string | The address of the legal entry.
$ogrn = "ogrn_example"; // string | The OGRN of the legal entry.
$inn = "inn_example"; // string | The INN of the legal entry.

try {
    $result = $api_instance->setAccountDocument($account_document, $verification_name, $is_individual, $individual_full_name, $individual_birth_date, $individual_passport_series, $individual_passport_number, $individual_passport_issue_date, $individual_passport_issued_by, $individual_registration_address, $legal_entry_full_name, $legal_entry_phone, $legal_entry_address, $legal_entry_actual_address, $ogrn, $inn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->setAccountDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_document** | **string**| The document data. You should post the data with the &#x60;application/octet-stream&#x60; or &#x60;multipart/form-data&#x60; content type! |
 **verification_name** | **string**| The account verification name. |
 **is_individual** | **bool**| Is individual, isn&#x60;t legal entity? | [optional]
 **individual_full_name** | **string**| The full name of the individual. | [optional]
 **individual_birth_date** | **string**| The birth date in format: YYYY-MM-DD | [optional]
 **individual_passport_series** | **string**| The passport series of the individual. | [optional]
 **individual_passport_number** | **string**| The passport number of the individual. | [optional]
 **individual_passport_issue_date** | **string**| The passport issue date in format: YYYY-MM-DD | [optional]
 **individual_passport_issued_by** | **string**| The passport issued by. | [optional]
 **individual_registration_address** | **string**| The registration address of the individual. | [optional]
 **legal_entry_full_name** | **string**| The full name of the legal entry. | [optional]
 **legal_entry_phone** | **string**| The phone of the legal entry. | [optional]
 **legal_entry_address** | **string**| The legal address of the legal entry. | [optional]
 **legal_entry_actual_address** | **string**| The address of the legal entry. | [optional]
 **ogrn** | **string**| The OGRN of the legal entry. | [optional]
 **inn** | **string**| The INN of the legal entry. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAccountInfo**
> \Swagger\Client\Model\InlineResponse200 setAccountInfo($new_account_email, $new_account_password, $language_code, $location, $account_first_name, $account_last_name, $min_balance_to_notify, $account_notifications, $tariff_changing_notifications, $news_notifications, $send_js_error, $billing_address_name, $billing_address_country_code, $billing_address_address, $billing_address_zip, $billing_address_phone, $account_custom_data)



Edits the account's profile.

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

$api_instance = new Voximplant\Api\ManagingAccountsApi();
$new_account_email = "new_account_email_example"; // string | Description in progress...
$new_account_password = "new_account_password_example"; // string | The password length must be at least 6 symbols.
$language_code = "language_code_example"; // string | The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Byelorussian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu)
$location = "location_example"; // string | The account location (timezone). Examples: America/Los_Angeles, GMT-8, GMT-08:00, GMT+10
$account_first_name = "account_first_name_example"; // string | The first name.
$account_last_name = "account_last_name_example"; // string | The last name.
$min_balance_to_notify = 3.4; // float | The min balance value to notify by email or SMS.
$account_notifications = true; // bool | Are the VoxImplant notifications required?
$tariff_changing_notifications = true; // bool | Set to true to receive the emails about the VoxImplant tariff changing.
$news_notifications = true; // bool | Set to true to receive the emails about the VoxImplant news.
$send_js_error = true; // bool | Set to true to receive the emails about a JS scenario error.
$billing_address_name = "billing_address_name_example"; // string | The company or businessman name.
$billing_address_country_code = "billing_address_country_code_example"; // string | The billing address country code (2 symbols, ISO 3166-1 alpha-2). The following values are available: AF (Afghanistan), AL (Albania), DZ (Algeria), AS (American Samoa), AD (Andorra), AO (Angola), AI (Anguilla), AQ (Antarctica), AG (Antigua and Barbuda), AR (Argentina), AM (Armenia), AW (Aruba), AU (Australia), AT (Austria), AZ (Azerbaijan), BH (Bahrain), BD (Bangladesh), BB (Barbados), BY (Belarus), BE (Belgium), BZ (Belize), BJ (Benin), BM (Bermuda), BT (Bhutan), BO (Bolivia), BA (Bosnia and Herzegovina), BW (Botswana), BV (Bouvet Island), BR (Brazil), IO (British Indian Ocean Territory), BN (Brunei), BG (Bulgaria), BF (Burkina Faso), BI (Burundi), KH (Cambodia), CM (Cameroon), CA (Canada), CV (Cape Verde), KY (Cayman Islands), CF (Central African Republic), TD (Chad), CL (Chile), CN (China), CX (Christmas Island), CO (Colombia), KM (Comoros), CG (Congo), CK (Cook Islands), CR (Costa Rica), HR (Croatia), CU (Cuba), CY (Cyprus), CZ (Czech Republic), DK (Denmark), DJ (Djibouti), DM (Dominica), DO (Dominican Republic), EC (Ecuador), EG (Egypt), SV (El Salvador), GQ (Equatorial Guinea), ER (Eritrea), EE (Estonia), ET (Ethiopia), FO (Faroe Islands), FJ (Fiji Islands), FI (Finland), FR (France), GF (French Guiana), PF (French Polynesia), TF (French Southern and Antarctic Lands), GA (Gabon), GE (Georgia), DE (Germany), GH (Ghana), GI (Gibraltar), GR (Greece), GL (Greenland), GD (Grenada), GP (Guadeloupe), GU (Guam), GT (Guatemala), GG (Guernsey), GN (Guinea), GY (Guyana), HT (Haiti), HM (Heard Island and McDonald Islands), HN (Honduras), HU (Hungary), IS (Iceland), IN (India), ID (Indonesia), IR (Iran), IQ (Iraq), IE (Ireland), IL (Israel), IT (Italy), JM (Jamaica), JP (Japan), JE (Jersey), JO (Jordan), KZ (Kazakhstan), KE (Kenya), KI (Kiribati), KR (Korea), KW (Kuwait), KG (Kyrgyzstan), LA (Laos), LV (Latvia), LB (Lebanon), LS (Lesotho), LR (Liberia), LY (Libya), LI (Liechtenstein), LT (Lithuania), LU (Luxembourg), MG (Madagascar), MW (Malawi), MY (Malaysia), MV (Maldives), ML (Mali), MT (Malta), MH (Marshall Islands), MQ (Martinique), MR (Mauritania), MU (Mauritius), YT (Mayotte), MX (Mexico), FM (Micronesia), MD (Moldova), MC (Monaco), MN (Mongolia), ME (Montenegro), MS (Montserrat), MA (Morocco), MZ (Mozambique), MM (Myanmar), NA (Namibia), NR (Nauru), NP (Nepal), NL (Netherlands), AN (Netherlands Antilles), NC (New Caledonia), NZ (New Zealand), NI (Nicaragua), NE (Niger), NG (Nigeria), NU (Niue), NF (Norfolk Island), KP (North Korea), MP (Northern Mariana Islands), NO (Norway), OM (Oman), PK (Pakistan), PW (Palau), PS (Palestinian Authority), PA (Panama), PG (Papua New Guinea), PY (Paraguay), PE (Peru), PH (Philippines), PN (Pitcairn Islands), PL (Poland), PT (Portugal), PR (Puerto Rico), QA (Qatar), RE (Reunion), RO (Romania), RU (Russia), RW (Rwanda), WS (Samoa), SM (San Marino), SA (Saudi Arabia), SN (Senegal), CS (Serbia), SC (Seychelles), SL (Sierra Leone), SG (Singapore), SK (Slovakia), SI (Slovenia), SB (Solomon Islands), SO (Somalia), ZA (South Africa), GS (South Georgia and the South Sandwich Islands), ES (Spain), LK (Sri Lanka), SD (Sudan), SR (Suriname), SZ (Swaziland), SE (Sweden), CH (Switzerland), SY (Syria), ST (Sao Tome and Principe), TW (Taiwan), TJ (Tajikistan), TZ (Tanzania), TH (Thailand), TG (Togo), TK (Tokelau), TO (Tonga), TT (Trinidad and Tobago), TN (Tunisia), TR (Turkey), TM (Turkmenistan), TC (Turks and Caicos Islands), TV (Tuvalu), UG (Uganda), UA (Ukraine), AE (United Arab Emirates), GB (United Kingdom), US (United States), UY (Uruguay), UZ (Uzbekistan), VU (Vanuatu), VA (Vatican City), VE (Venezuela), VN (Vietnam), VI (Virgin Islands), WF (Wallis and Futuna), EH (Western Sahara), YE (Yemen), ZM (Zambia), ZW (Zimbabwe), AX (Aland Islands)
$billing_address_address = "billing_address_address_example"; // string | The office address.
$billing_address_zip = "billing_address_zip_example"; // string | The office ZIP.
$billing_address_phone = "billing_address_phone_example"; // string | The office phone number.
$account_custom_data = "account_custom_data_example"; // string | The custom data.

try {
    $result = $api_instance->setAccountInfo($new_account_email, $new_account_password, $language_code, $location, $account_first_name, $account_last_name, $min_balance_to_notify, $account_notifications, $tariff_changing_notifications, $news_notifications, $send_js_error, $billing_address_name, $billing_address_country_code, $billing_address_address, $billing_address_zip, $billing_address_phone, $account_custom_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAccountsApi->setAccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_account_email** | **string**| Description in progress... | [optional]
 **new_account_password** | **string**| The password length must be at least 6 symbols. | [optional]
 **language_code** | **string**| The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Byelorussian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu) | [optional]
 **location** | **string**| The account location (timezone). Examples: America/Los_Angeles, GMT-8, GMT-08:00, GMT+10 | [optional]
 **account_first_name** | **string**| The first name. | [optional]
 **account_last_name** | **string**| The last name. | [optional]
 **min_balance_to_notify** | **float**| The min balance value to notify by email or SMS. | [optional]
 **account_notifications** | **bool**| Are the VoxImplant notifications required? | [optional]
 **tariff_changing_notifications** | **bool**| Set to true to receive the emails about the VoxImplant tariff changing. | [optional]
 **news_notifications** | **bool**| Set to true to receive the emails about the VoxImplant news. | [optional]
 **send_js_error** | **bool**| Set to true to receive the emails about a JS scenario error. | [optional]
 **billing_address_name** | **string**| The company or businessman name. | [optional]
 **billing_address_country_code** | **string**| The billing address country code (2 symbols, ISO 3166-1 alpha-2). The following values are available: AF (Afghanistan), AL (Albania), DZ (Algeria), AS (American Samoa), AD (Andorra), AO (Angola), AI (Anguilla), AQ (Antarctica), AG (Antigua and Barbuda), AR (Argentina), AM (Armenia), AW (Aruba), AU (Australia), AT (Austria), AZ (Azerbaijan), BH (Bahrain), BD (Bangladesh), BB (Barbados), BY (Belarus), BE (Belgium), BZ (Belize), BJ (Benin), BM (Bermuda), BT (Bhutan), BO (Bolivia), BA (Bosnia and Herzegovina), BW (Botswana), BV (Bouvet Island), BR (Brazil), IO (British Indian Ocean Territory), BN (Brunei), BG (Bulgaria), BF (Burkina Faso), BI (Burundi), KH (Cambodia), CM (Cameroon), CA (Canada), CV (Cape Verde), KY (Cayman Islands), CF (Central African Republic), TD (Chad), CL (Chile), CN (China), CX (Christmas Island), CO (Colombia), KM (Comoros), CG (Congo), CK (Cook Islands), CR (Costa Rica), HR (Croatia), CU (Cuba), CY (Cyprus), CZ (Czech Republic), DK (Denmark), DJ (Djibouti), DM (Dominica), DO (Dominican Republic), EC (Ecuador), EG (Egypt), SV (El Salvador), GQ (Equatorial Guinea), ER (Eritrea), EE (Estonia), ET (Ethiopia), FO (Faroe Islands), FJ (Fiji Islands), FI (Finland), FR (France), GF (French Guiana), PF (French Polynesia), TF (French Southern and Antarctic Lands), GA (Gabon), GE (Georgia), DE (Germany), GH (Ghana), GI (Gibraltar), GR (Greece), GL (Greenland), GD (Grenada), GP (Guadeloupe), GU (Guam), GT (Guatemala), GG (Guernsey), GN (Guinea), GY (Guyana), HT (Haiti), HM (Heard Island and McDonald Islands), HN (Honduras), HU (Hungary), IS (Iceland), IN (India), ID (Indonesia), IR (Iran), IQ (Iraq), IE (Ireland), IL (Israel), IT (Italy), JM (Jamaica), JP (Japan), JE (Jersey), JO (Jordan), KZ (Kazakhstan), KE (Kenya), KI (Kiribati), KR (Korea), KW (Kuwait), KG (Kyrgyzstan), LA (Laos), LV (Latvia), LB (Lebanon), LS (Lesotho), LR (Liberia), LY (Libya), LI (Liechtenstein), LT (Lithuania), LU (Luxembourg), MG (Madagascar), MW (Malawi), MY (Malaysia), MV (Maldives), ML (Mali), MT (Malta), MH (Marshall Islands), MQ (Martinique), MR (Mauritania), MU (Mauritius), YT (Mayotte), MX (Mexico), FM (Micronesia), MD (Moldova), MC (Monaco), MN (Mongolia), ME (Montenegro), MS (Montserrat), MA (Morocco), MZ (Mozambique), MM (Myanmar), NA (Namibia), NR (Nauru), NP (Nepal), NL (Netherlands), AN (Netherlands Antilles), NC (New Caledonia), NZ (New Zealand), NI (Nicaragua), NE (Niger), NG (Nigeria), NU (Niue), NF (Norfolk Island), KP (North Korea), MP (Northern Mariana Islands), NO (Norway), OM (Oman), PK (Pakistan), PW (Palau), PS (Palestinian Authority), PA (Panama), PG (Papua New Guinea), PY (Paraguay), PE (Peru), PH (Philippines), PN (Pitcairn Islands), PL (Poland), PT (Portugal), PR (Puerto Rico), QA (Qatar), RE (Reunion), RO (Romania), RU (Russia), RW (Rwanda), WS (Samoa), SM (San Marino), SA (Saudi Arabia), SN (Senegal), CS (Serbia), SC (Seychelles), SL (Sierra Leone), SG (Singapore), SK (Slovakia), SI (Slovenia), SB (Solomon Islands), SO (Somalia), ZA (South Africa), GS (South Georgia and the South Sandwich Islands), ES (Spain), LK (Sri Lanka), SD (Sudan), SR (Suriname), SZ (Swaziland), SE (Sweden), CH (Switzerland), SY (Syria), ST (Sao Tome and Principe), TW (Taiwan), TJ (Tajikistan), TZ (Tanzania), TH (Thailand), TG (Togo), TK (Tokelau), TO (Tonga), TT (Trinidad and Tobago), TN (Tunisia), TR (Turkey), TM (Turkmenistan), TC (Turks and Caicos Islands), TV (Tuvalu), UG (Uganda), UA (Ukraine), AE (United Arab Emirates), GB (United Kingdom), US (United States), UY (Uruguay), UZ (Uzbekistan), VU (Vanuatu), VA (Vatican City), VE (Venezuela), VN (Vietnam), VI (Virgin Islands), WF (Wallis and Futuna), EH (Western Sahara), YE (Yemen), ZM (Zambia), ZW (Zimbabwe), AX (Aland Islands) | [optional]
 **billing_address_address** | **string**| The office address. | [optional]
 **billing_address_zip** | **string**| The office ZIP. | [optional]
 **billing_address_phone** | **string**| The office phone number. | [optional]
 **account_custom_data** | **string**| The custom data. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

