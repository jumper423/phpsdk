# Voximplant\ManagingUsersApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUser**](ManagingUsersApi.md#addUser) | **POST** /AddUser | 
[**bindUser**](ManagingUsersApi.md#bindUser) | **POST** /BindUser | 
[**delUser**](ManagingUsersApi.md#delUser) | **POST** /DelUser | 
[**getUsers**](ManagingUsersApi.md#getUsers) | **POST** /GetUsers | 
[**setUserInfo**](ManagingUsersApi.md#setUserInfo) | **POST** /SetUserInfo | 
[**transferMoneyToUser**](ManagingUsersApi.md#transferMoneyToUser) | **POST** /TransferMoneyToUser | 


# **addUser**
> \Model\InlineResponse20012 addUser($user_name, $user_display_name, $user_password, $parent_accounting, $two_factor_auth_required, $mobile_phone, $user_active, $user_custom_data)



Adds a new user.

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

$api_instance = new Voximplant\Api\ManagingUsersApi();
$user_name = "user_name_example"; // string | The user name in format [a-z0-9][a-z0-9_-]{2,49}
$user_display_name = "user_display_name_example"; // string | The user display name. The length must be less than 256.
$user_password = "user_password_example"; // string | The user password. The length must be at least 6 symbols.
$parent_accounting = true; // bool | Is account money use?
$two_factor_auth_required = true; // bool | Is two factor authorization required?
$mobile_phone = "mobile_phone_example"; // string | The user mobile phone. The length must be less than 50.
$user_active = true; // bool | The user enable flag
$user_custom_data = "user_custom_data_example"; // string | Any string

try {
    $result = $api_instance->addUser($user_name, $user_display_name, $user_password, $parent_accounting, $two_factor_auth_required, $mobile_phone, $user_active, $user_custom_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingUsersApi->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **string**| The user name in format [a-z0-9][a-z0-9_-]{2,49} |
 **user_display_name** | **string**| The user display name. The length must be less than 256. |
 **user_password** | **string**| The user password. The length must be at least 6 symbols. |
 **parent_accounting** | **bool**| Is account money use? | [optional]
 **two_factor_auth_required** | **bool**| Is two factor authorization required? | [optional]
 **mobile_phone** | **string**| The user mobile phone. The length must be less than 50. | [optional]
 **user_active** | **bool**| The user enable flag | [optional]
 **user_custom_data** | **string**| Any string | [optional]

### Return type

[**\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindUser**
> \Model\InlineResponse200 bindUser($user_id, $user_name, $application_id, $application_name, $bind)



Bind the user list with the application list.

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

$api_instance = new Voximplant\Api\ManagingUsersApi();
$user_id = "user_id_example"; // string | The user ID list separated by the `;` symbol or the `all` value.
$user_name = "user_name_example"; // string | Can be used instead of <b>user_id</b>. The user name list separated by the `;` symbol.
$application_id = "application_id_example"; // string | The application ID list separated by the `;` symbol or the `all` value.
$application_name = "application_name_example"; // string | Can be used instead of <b>application_id</b>. The application name list separated by the `;` symbol.
$bind = true; // bool | Bind or unbind?

try {
    $result = $api_instance->bindUser($user_id, $user_name, $application_id, $application_name, $bind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingUsersApi->bindUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **user_name** | **string**| Can be used instead of &lt;b&gt;user_id&lt;/b&gt;. The user name list separated by the &#x60;;&#x60; symbol. | [optional]
 **application_id** | **string**| The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **application_name** | **string**| Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. The application name list separated by the &#x60;;&#x60; symbol. | [optional]
 **bind** | **bool**| Bind or unbind? | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delUser**
> \Model\InlineResponse200 delUser($user_id, $user_name)



Deletes the user.

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

$api_instance = new Voximplant\Api\ManagingUsersApi();
$user_id = "user_id_example"; // string | The user ID list separated by the `;` symbol or the `all` value.
$user_name = "user_name_example"; // string | The user name list separated by the `;` symbol that can be used instead of <b>user_id</b>.

try {
    $result = $api_instance->delUser($user_id, $user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingUsersApi->delUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **user_name** | **string**| The user name list separated by the &#x60;;&#x60; symbol that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Model\InlineResponse20057 getUsers($application_id, $excluded_application_id, $excluded_application_name, $skill_id, $excluded_skill_id, $acd_queue_id, $user_id, $user_name, $user_active, $user_display_name, $application_name, $with_applications, $with_skills, $with_queues, $acd_status, $showing_application_id, $showing_skill_id, $count, $offset, $order_by, $return_live_balance)



Gets the users.

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

$api_instance = new Voximplant\Api\ManagingUsersApi();
$application_id = 3.4; // float | The application ID to filter.
$excluded_application_id = 3.4; // float | The excluded application ID to filter.
$excluded_application_name = "excluded_application_name_example"; // string | The excluded application name to filter.
$skill_id = 3.4; // float | The skill ID to filter.
$excluded_skill_id = 3.4; // float | The excluded skill ID to filter.
$acd_queue_id = 3.4; // float | The ACD queue ID to filter.
$user_id = 3.4; // float | The user ID to filter.
$user_name = "user_name_example"; // string | The user name part to filter.
$user_active = true; // bool | The user active flag to filter.
$user_display_name = "user_display_name_example"; // string | The user display name part to filter.
$application_name = "application_name_example"; // string | The application name part to filter.
$with_applications = true; // bool | Set true to get the bound applications.
$with_skills = true; // bool | Set true to get the bound skills.
$with_queues = true; // bool | Set true to get the bound queues.
$acd_status = "acd_status_example"; // string | The ACD status list separated by the `;` symbol.
$showing_application_id = 3.4; // float | The application to show in the `applications` field output.
$showing_skill_id = 3.4; // float | The skill to show in the `skills` field output.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.
$order_by = "order_by_example"; // string | The following values are available: `user_id`, `user_name` and `user_display_name`.
$return_live_balance = true; // bool | Set true to get the user live balance.

try {
    $result = $api_instance->getUsers($application_id, $excluded_application_id, $excluded_application_name, $skill_id, $excluded_skill_id, $acd_queue_id, $user_id, $user_name, $user_active, $user_display_name, $application_name, $with_applications, $with_skills, $with_queues, $acd_status, $showing_application_id, $showing_skill_id, $count, $offset, $order_by, $return_live_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingUsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **float**| The application ID to filter. | [optional]
 **excluded_application_id** | **float**| The excluded application ID to filter. | [optional]
 **excluded_application_name** | **string**| The excluded application name to filter. | [optional]
 **skill_id** | **float**| The skill ID to filter. | [optional]
 **excluded_skill_id** | **float**| The excluded skill ID to filter. | [optional]
 **acd_queue_id** | **float**| The ACD queue ID to filter. | [optional]
 **user_id** | **float**| The user ID to filter. | [optional]
 **user_name** | **string**| The user name part to filter. | [optional]
 **user_active** | **bool**| The user active flag to filter. | [optional]
 **user_display_name** | **string**| The user display name part to filter. | [optional]
 **application_name** | **string**| The application name part to filter. | [optional]
 **with_applications** | **bool**| Set true to get the bound applications. | [optional]
 **with_skills** | **bool**| Set true to get the bound skills. | [optional]
 **with_queues** | **bool**| Set true to get the bound queues. | [optional]
 **acd_status** | **string**| The ACD status list separated by the &#x60;;&#x60; symbol. | [optional]
 **showing_application_id** | **float**| The application to show in the &#x60;applications&#x60; field output. | [optional]
 **showing_skill_id** | **float**| The skill to show in the &#x60;skills&#x60; field output. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]
 **order_by** | **string**| The following values are available: &#x60;user_id&#x60;, &#x60;user_name&#x60; and &#x60;user_display_name&#x60;. | [optional]
 **return_live_balance** | **bool**| Set true to get the user live balance. | [optional]

### Return type

[**\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserInfo**
> \Model\InlineResponse200 setUserInfo($user_id, $user_name, $new_user_name, $user_display_name, $user_password, $parent_accounting, $user_active, $user_custom_data, $two_factor_auth_required, $mobile_phone)



Edits the user.

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

$api_instance = new Voximplant\Api\ManagingUsersApi();
$user_id = 3.4; // float | The user to edit.
$user_name = "user_name_example"; // string | Can be used instead of <b>user_id</b>.
$new_user_name = "new_user_name_example"; // string | The new user name in format [a-z0-9][a-z0-9_-]{2,49}
$user_display_name = "user_display_name_example"; // string | The new user display name. The length must be less than 256.
$user_password = "user_password_example"; // string | The new user password. The length must be at least 6 symbols.
$parent_accounting = true; // bool | Is account money use?
$user_active = true; // bool | The user enable flag
$user_custom_data = "user_custom_data_example"; // string | Any string
$two_factor_auth_required = true; // bool | Is two factor authorization required?
$mobile_phone = "mobile_phone_example"; // string | The new user mobile phone. The length must be less than 50.

try {
    $result = $api_instance->setUserInfo($user_id, $user_name, $new_user_name, $user_display_name, $user_password, $parent_accounting, $user_active, $user_custom_data, $two_factor_auth_required, $mobile_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingUsersApi->setUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| The user to edit. | [optional]
 **user_name** | **string**| Can be used instead of &lt;b&gt;user_id&lt;/b&gt;. | [optional]
 **new_user_name** | **string**| The new user name in format [a-z0-9][a-z0-9_-]{2,49} | [optional]
 **user_display_name** | **string**| The new user display name. The length must be less than 256. | [optional]
 **user_password** | **string**| The new user password. The length must be at least 6 symbols. | [optional]
 **parent_accounting** | **bool**| Is account money use? | [optional]
 **user_active** | **bool**| The user enable flag | [optional]
 **user_custom_data** | **string**| Any string | [optional]
 **two_factor_auth_required** | **bool**| Is two factor authorization required? | [optional]
 **mobile_phone** | **string**| The new user mobile phone. The length must be less than 50. | [optional]

### Return type

[**\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferMoneyToUser**
> \Model\InlineResponse20068 transferMoneyToUser($user_id, $amount, $currency, $strict_mode, $user_transaction_description, $account_transaction_description)



Transfer the account's money to the user or transfer the user's money to the account if the money amount is negative.

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

$api_instance = new Voximplant\Api\ManagingUsersApi();
$user_id = "user_id_example"; // string | The user ID list separated by the `;` symbol.
$amount = 3.4; // float | The money amount, $. The absolute amount value must be equal or greater than 0.01
$currency = "currency_example"; // string | The amount currency. Examples: RUR, EUR, USD.
$strict_mode = true; // bool | Returns error if strict_mode is true and an user or the account hasn`t enough money.
$user_transaction_description = "user_transaction_description_example"; // string | The user transaction description.
$account_transaction_description = "account_transaction_description_example"; // string | The account transaction description. The following macro available: ${user_id}, ${user_name}

try {
    $result = $api_instance->transferMoneyToUser($user_id, $amount, $currency, $strict_mode, $user_transaction_description, $account_transaction_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingUsersApi->transferMoneyToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID list separated by the &#x60;;&#x60; symbol. |
 **amount** | **float**| The money amount, $. The absolute amount value must be equal or greater than 0.01 |
 **currency** | **string**| The amount currency. Examples: RUR, EUR, USD. |
 **strict_mode** | **bool**| Returns error if strict_mode is true and an user or the account hasn&#x60;t enough money. | [optional]
 **user_transaction_description** | **string**| The user transaction description. | [optional]
 **account_transaction_description** | **string**| The account transaction description. The following macro available: ${user_id}, ${user_name} | [optional]

### Return type

[**\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

