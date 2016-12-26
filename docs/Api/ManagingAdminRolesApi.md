# Voximplant\ManagingAdminRolesApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAdminRole**](ManagingAdminRolesApi.md#addAdminRole) | **POST** /AddAdminRole | 
[**delAdminRole**](ManagingAdminRolesApi.md#delAdminRole) | **POST** /DelAdminRole | 
[**getAdminRoles**](ManagingAdminRolesApi.md#getAdminRoles) | **POST** /GetAdminRoles | 
[**setAdminRoleInfo**](ManagingAdminRolesApi.md#setAdminRoleInfo) | **POST** /SetAdminRoleInfo | 


# **addAdminRole**
> \Voximplant\Model\InlineResponse2001 addAdminRole($admin_role_name, $admin_role_active, $like_admin_role_id, $like_admin_role_name, $allowed_entries, $denied_entries)



Adds a new admin role.

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

$api_instance = new Voximplant\Api\ManagingAdminRolesApi();
$admin_role_name = "admin_role_name_example"; // string | The admin role name. The length must be less than 50.
$admin_role_active = true; // bool | The admin role enable flag. If false the allowed and denied entries have no affect.
$like_admin_role_id = "like_admin_role_id_example"; // string | The admin role ID list separated by the `;` symbol or the `all` value. The list specifies the roles from which the new role automatically copies all permissions (allowed_entries and denied_entries).
$like_admin_role_name = "like_admin_role_name_example"; // string | The admin role name that can be used instead of <b>like_admin_role_id</b>. The name specifies a role from which the new role automatically copies all permissions (allowed_entries and denied_entries).
$allowed_entries = "allowed_entries_example"; // string | The list of allowed access entries separated by the `;` symbol (the API function names).
$denied_entries = "denied_entries_example"; // string | The list of denied access entries separated by the `;` symbol (the API function names).

try {
    $result = $api_instance->addAdminRole($admin_role_name, $admin_role_active, $like_admin_role_id, $like_admin_role_name, $allowed_entries, $denied_entries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminRolesApi->addAdminRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **admin_role_name** | **string**| The admin role name. The length must be less than 50. |
 **admin_role_active** | **bool**| The admin role enable flag. If false the allowed and denied entries have no affect. | [optional]
 **like_admin_role_id** | **string**| The admin role ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. The list specifies the roles from which the new role automatically copies all permissions (allowed_entries and denied_entries). | [optional]
 **like_admin_role_name** | **string**| The admin role name that can be used instead of &lt;b&gt;like_admin_role_id&lt;/b&gt;. The name specifies a role from which the new role automatically copies all permissions (allowed_entries and denied_entries). | [optional]
 **allowed_entries** | **string**| The list of allowed access entries separated by the &#x60;;&#x60; symbol (the API function names). | [optional]
 **denied_entries** | **string**| The list of denied access entries separated by the &#x60;;&#x60; symbol (the API function names). | [optional]

### Return type

[**\Voximplant\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delAdminRole**
> \Voximplant\Model\InlineResponse200 delAdminRole($admin_role_id, $admin_role_name)



Deletes the admin role.

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

$api_instance = new Voximplant\Api\ManagingAdminRolesApi();
$admin_role_id = 3.4; // float | The admin role ID list separated by the `;` symbol or the `all` value.
$admin_role_name = "admin_role_name_example"; // string | The admin role name to delete, can be used instead of <b>admin_role_id</b>.

try {
    $result = $api_instance->delAdminRole($admin_role_id, $admin_role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminRolesApi->delAdminRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **admin_role_id** | **float**| The admin role ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **admin_role_name** | **string**| The admin role name to delete, can be used instead of &lt;b&gt;admin_role_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdminRoles**
> \Voximplant\Model\InlineResponse20026 getAdminRoles($admin_role_id, $admin_role_name, $admin_role_active, $with_entries, $with_account_roles, $with_parent_roles, $with_system_roles, $included_admin_user_id, $excluded_admin_user_id, $full_admin_users_matching, $showing_admin_user_id, $count, $offset)



Gets the admin roles.

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

$api_instance = new Voximplant\Api\ManagingAdminRolesApi();
$admin_role_id = 3.4; // float | The admin role ID to filter.
$admin_role_name = "admin_role_name_example"; // string | The admin role name part to filter.
$admin_role_active = true; // bool | The admin role active flag to filter.
$with_entries = true; // bool | Set true to get the permissions.
$with_account_roles = true; // bool | Set false to omit the account roles.
$with_parent_roles = true; // bool | Set false to omit the parent roles.
$with_system_roles = true; // bool | Set false to omit the system roles.
$included_admin_user_id = "included_admin_user_id_example"; // string | The attached admin user ID list separated by the `;` symbol or the `all` value.
$excluded_admin_user_id = "excluded_admin_user_id_example"; // string | The not attached admin user ID list separated by the `;` symbol or the `all` value.
$full_admin_users_matching = "full_admin_users_matching_example"; // string | Set false to get roles with partial admin user list matching.
$showing_admin_user_id = 3.4; // float | The admin user to show in the `admin_users` field output.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getAdminRoles($admin_role_id, $admin_role_name, $admin_role_active, $with_entries, $with_account_roles, $with_parent_roles, $with_system_roles, $included_admin_user_id, $excluded_admin_user_id, $full_admin_users_matching, $showing_admin_user_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminRolesApi->getAdminRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **admin_role_id** | **float**| The admin role ID to filter. | [optional]
 **admin_role_name** | **string**| The admin role name part to filter. | [optional]
 **admin_role_active** | **bool**| The admin role active flag to filter. | [optional]
 **with_entries** | **bool**| Set true to get the permissions. | [optional]
 **with_account_roles** | **bool**| Set false to omit the account roles. | [optional]
 **with_parent_roles** | **bool**| Set false to omit the parent roles. | [optional]
 **with_system_roles** | **bool**| Set false to omit the system roles. | [optional]
 **included_admin_user_id** | **string**| The attached admin user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **excluded_admin_user_id** | **string**| The not attached admin user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **full_admin_users_matching** | **string**| Set false to get roles with partial admin user list matching. | [optional]
 **showing_admin_user_id** | **float**| The admin user to show in the &#x60;admin_users&#x60; field output. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAdminRoleInfo**
> \Voximplant\Model\InlineResponse200 setAdminRoleInfo($admin_role_id, $admin_role_name, $new_admin_role_name, $admin_role_active, $entry_modification_mode, $allowed_entries, $denied_entries, $like_admin_role_id, $like_admin_role_name)



Edits the admin role. You may edit

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

$api_instance = new Voximplant\Api\ManagingAdminRolesApi();
$admin_role_id = 3.4; // float | The admin user to edit.
$admin_role_name = "admin_role_name_example"; // string | The admin role to edit, can be used instead of <b>admin_role_id</b>.
$new_admin_role_name = "new_admin_role_name_example"; // string | The new admin role name. The length must be less than 50.
$admin_role_active = true; // bool | The admin role enable flag. If false the allowed and denied entries have no affect.
$entry_modification_mode = "entry_modification_mode_example"; // string | The modification mode of the permission lists (allowed_entries and denied_entries). The following values are possible: add, del, set.
$allowed_entries = "allowed_entries_example"; // string | The list of allowed access entry changes separated by the `;` symbol (the API function names).
$denied_entries = "denied_entries_example"; // string | The list of denied access entry changes separated by the `;` symbol (the API function names).
$like_admin_role_id = "like_admin_role_id_example"; // string | The admin role ID list separated by the `;` symbol or the `all` value. The list specifies the roles from which the allowed_entries and denied_entries will be merged.
$like_admin_role_name = "like_admin_role_name_example"; // string | The admin role name, can be used instead of <b>like_admin_role_id</b>. The name specifies a role from which the allowed_entries and denied_entries will be merged.

try {
    $result = $api_instance->setAdminRoleInfo($admin_role_id, $admin_role_name, $new_admin_role_name, $admin_role_active, $entry_modification_mode, $allowed_entries, $denied_entries, $like_admin_role_id, $like_admin_role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingAdminRolesApi->setAdminRoleInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **admin_role_id** | **float**| The admin user to edit. | [optional]
 **admin_role_name** | **string**| The admin role to edit, can be used instead of &lt;b&gt;admin_role_id&lt;/b&gt;. | [optional]
 **new_admin_role_name** | **string**| The new admin role name. The length must be less than 50. | [optional]
 **admin_role_active** | **bool**| The admin role enable flag. If false the allowed and denied entries have no affect. | [optional]
 **entry_modification_mode** | **string**| The modification mode of the permission lists (allowed_entries and denied_entries). The following values are possible: add, del, set. | [optional]
 **allowed_entries** | **string**| The list of allowed access entry changes separated by the &#x60;;&#x60; symbol (the API function names). | [optional]
 **denied_entries** | **string**| The list of denied access entry changes separated by the &#x60;;&#x60; symbol (the API function names). | [optional]
 **like_admin_role_id** | **string**| The admin role ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. The list specifies the roles from which the allowed_entries and denied_entries will be merged. | [optional]
 **like_admin_role_name** | **string**| The admin role name, can be used instead of &lt;b&gt;like_admin_role_id&lt;/b&gt;. The name specifies a role from which the allowed_entries and denied_entries will be merged. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

