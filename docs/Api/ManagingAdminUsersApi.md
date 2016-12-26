# Voximplant\ManagingAdminUsersApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAdminUser**](ManagingAdminUsersApi.md#addAdminUser) | **POST** /AddAdminUser | 
[**attachAdminRole**](ManagingAdminUsersApi.md#attachAdminRole) | **POST** /AttachAdminRole | 
[**delAdminUser**](ManagingAdminUsersApi.md#delAdminUser) | **POST** /DelAdminUser | 
[**getAdminUsers**](ManagingAdminUsersApi.md#getAdminUsers) | **POST** /GetAdminUsers | 
[**setAdminUserInfo**](ManagingAdminUsersApi.md#setAdminUserInfo) | **POST** /SetAdminUserInfo | 


# **addAdminUser**
> \Voximplant\Model\InlineResponse2002 addAdminUser($new_admin_user_name, $admin_user_display_name, $new_admin_user_password, $admin_user_active, $admin_role_id, $admin_role_name)



Adds a new admin user.

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

$api_instance = new Voximplant\Api\ManagingAdminUsersApi();
$new_admin_user_name = "new_admin_user_name_example"; // string | The admin user name. The length must be less than 50.
$admin_user_display_name = "admin_user_display_name_example"; // string | The admin user display name. The length must be less than 256.
$new_admin_user_password = "new_admin_user_password_example"; // string | The admin user password. The length must be at least 6 symbols.
$admin_user_active = true; // bool | The admin user enable flag.
$admin_role_id = "admin_role_id_example"; // string | The attaching admin role ID list separated by the `;` symbol or the `all` value.
$admin_role_name = "admin_role_name_example"; // string | The attaching admin role name that can be used instead of <b>admin_role_id</b>.

try {
    $result = $api_instance->addAdminUser($new_admin_user_name, $admin_user_display_name, $new_admin_user_password, $admin_user_active, $admin_role_id, $admin_role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminUsersApi->addAdminUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_admin_user_name** | **string**| The admin user name. The length must be less than 50. |
 **admin_user_display_name** | **string**| The admin user display name. The length must be less than 256. |
 **new_admin_user_password** | **string**| The admin user password. The length must be at least 6 symbols. |
 **admin_user_active** | **bool**| The admin user enable flag. | [optional]
 **admin_role_id** | **string**| The attaching admin role ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **admin_role_name** | **string**| The attaching admin role name that can be used instead of &lt;b&gt;admin_role_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachAdminRole**
> \Voximplant\Model\InlineResponse200 attachAdminRole($required_admin_user_id, $required_admin_user_name, $admin_role_id, $admin_role_name, $mode)



Attach the admin role list to the admin user list.

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

$api_instance = new Voximplant\Api\ManagingAdminUsersApi();
$required_admin_user_id = 3.4; // float | The admin user ID list separated by the `;` symbol or the `all` value.
$required_admin_user_name = "required_admin_user_name_example"; // string | The admin user name to bind, can be used instead of <b>required_admin_user_id</b>.
$admin_role_id = 3.4; // float | The attached admin role ID list separated by the `;` symbol or the `all` value.
$admin_role_name = "admin_role_name_example"; // string | The admin role name to attach, can be used instead of <b>admin_role_id</b>.
$mode = "mode_example"; // string | The merge mode. The following values are possible: add, del, set.

try {
    $result = $api_instance->attachAdminRole($required_admin_user_id, $required_admin_user_name, $admin_role_id, $admin_role_name, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminUsersApi->attachAdminRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **required_admin_user_id** | **float**| The admin user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **required_admin_user_name** | **string**| The admin user name to bind, can be used instead of &lt;b&gt;required_admin_user_id&lt;/b&gt;. | [optional]
 **admin_role_id** | **float**| The attached admin role ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **admin_role_name** | **string**| The admin role name to attach, can be used instead of &lt;b&gt;admin_role_id&lt;/b&gt;. | [optional]
 **mode** | **string**| The merge mode. The following values are possible: add, del, set. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delAdminUser**
> \Voximplant\Model\InlineResponse200 delAdminUser($required_admin_user_id, $required_admin_user_name)



Deletes the admin user.

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

$api_instance = new Voximplant\Api\ManagingAdminUsersApi();
$required_admin_user_id = 3.4; // float | The admin user ID list separated by the `;` symbol or the `all` value.
$required_admin_user_name = "required_admin_user_name_example"; // string | The admin user name to delete, can be used instead of <b>required_admin_user_id</b>.

try {
    $result = $api_instance->delAdminUser($required_admin_user_id, $required_admin_user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminUsersApi->delAdminUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **required_admin_user_id** | **float**| The admin user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **required_admin_user_name** | **string**| The admin user name to delete, can be used instead of &lt;b&gt;required_admin_user_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdminUsers**
> \Voximplant\Model\InlineResponse20027 getAdminUsers($required_admin_user_id, $required_admin_user_name, $admin_user_display_name, $admin_user_active, $with_roles, $with_access_entries, $count, $offset)



Gets the admin users.

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

$api_instance = new Voximplant\Api\ManagingAdminUsersApi();
$required_admin_user_id = 3.4; // float | The admin user ID to filter.
$required_admin_user_name = "required_admin_user_name_example"; // string | The admin user name part to filter.
$admin_user_display_name = "admin_user_display_name_example"; // string | The admin user display name part to filter.
$admin_user_active = true; // bool | The admin user active flag to filter.
$with_roles = true; // bool | Set true to get the attached admin roles.
$with_access_entries = true; // bool | Set true to get the admin user permissions.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getAdminUsers($required_admin_user_id, $required_admin_user_name, $admin_user_display_name, $admin_user_active, $with_roles, $with_access_entries, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminUsersApi->getAdminUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **required_admin_user_id** | **float**| The admin user ID to filter. | [optional]
 **required_admin_user_name** | **string**| The admin user name part to filter. | [optional]
 **admin_user_display_name** | **string**| The admin user display name part to filter. | [optional]
 **admin_user_active** | **bool**| The admin user active flag to filter. | [optional]
 **with_roles** | **bool**| Set true to get the attached admin roles. | [optional]
 **with_access_entries** | **bool**| Set true to get the admin user permissions. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAdminUserInfo**
> \Voximplant\Model\InlineResponse200 setAdminUserInfo($required_admin_user_id, $required_admin_user_name, $new_admin_user_name, $admin_user_display_name, $new_admin_user_password, $admin_user_active)



Edits the admin user.

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

$api_instance = new Voximplant\Api\ManagingAdminUsersApi();
$required_admin_user_id = 3.4; // float | The admin user to edit.
$required_admin_user_name = "required_admin_user_name_example"; // string | The admin user to edit, can be used instead of <b>required_admin_user_id</b>.
$new_admin_user_name = "new_admin_user_name_example"; // string | The new admin user name. The length must be less than 50.
$admin_user_display_name = "admin_user_display_name_example"; // string | The new admin user display name. The length must be less than 256.
$new_admin_user_password = "new_admin_user_password_example"; // string | The new admin user password. The length must be at least 6 symbols.
$admin_user_active = true; // bool | The admin user enable flag.

try {
    $result = $api_instance->setAdminUserInfo($required_admin_user_id, $required_admin_user_name, $new_admin_user_name, $admin_user_display_name, $new_admin_user_password, $admin_user_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminUsersApi->setAdminUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **required_admin_user_id** | **float**| The admin user to edit. | [optional]
 **required_admin_user_name** | **string**| The admin user to edit, can be used instead of &lt;b&gt;required_admin_user_id&lt;/b&gt;. | [optional]
 **new_admin_user_name** | **string**| The new admin user name. The length must be less than 50. | [optional]
 **admin_user_display_name** | **string**| The new admin user display name. The length must be less than 256. | [optional]
 **new_admin_user_password** | **string**| The new admin user password. The length must be at least 6 symbols. | [optional]
 **admin_user_active** | **bool**| The admin user enable flag. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

