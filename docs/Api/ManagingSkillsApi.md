# Voximplant\ManagingSkillsApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSkill**](ManagingSkillsApi.md#addSkill) | **POST** /AddSkill | 
[**bindSkill**](ManagingSkillsApi.md#bindSkill) | **POST** /BindSkill | 
[**delSkill**](ManagingSkillsApi.md#delSkill) | **POST** /DelSkill | 
[**getSkills**](ManagingSkillsApi.md#getSkills) | **POST** /GetSkills | 
[**setSkillInfo**](ManagingSkillsApi.md#setSkillInfo) | **POST** /SetSkillInfo | 


# **addSkill**
> \Voximplant\Model\InlineResponse20011 addSkill($skill_name)



Adds a new ACD operator skill.

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

$api_instance = new Voximplant\Api\ManagingSkillsApi();
$skill_name = "skill_name_example"; // string | The ACD operator skill name. The length must be less than 512.

try {
    $result = $api_instance->addSkill($skill_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSkillsApi->addSkill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_name** | **string**| The ACD operator skill name. The length must be less than 512. |

### Return type

[**\Voximplant\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindSkill**
> \Voximplant\Model\InlineResponse200 bindSkill($skill_id, $skill_name, $user_id, $user_name, $acd_queue_id, $acd_queue_name, $bind)



Binds the skills with the users (ACD operators) and/or the ACD queues.

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

$api_instance = new Voximplant\Api\ManagingSkillsApi();
$skill_id = "skill_id_example"; // string | The skill ID list separated by the `;` symbol or the `all` value.
$skill_name = "skill_name_example"; // string | Can be used instead of <b>skill_id</b>. The skill name list separated by the `;` symbol.
$user_id = "user_id_example"; // string | The user ID list separated by the `;` symbol or the `all` value.
$user_name = "user_name_example"; // string | The user name that can be used instead of <b>user_id</b>. The user name list separated by the `;` symbol.
$acd_queue_id = "acd_queue_id_example"; // string | The ACD queue ID list separated by the `;` symbol or the `all` value.
$acd_queue_name = "acd_queue_name_example"; // string | The ACD queue name that can be used instead of <b>acd_queue_id</b>. The ACD queue name list separated by the `;` symbol.
$bind = true; // bool | Bind or unbind?

try {
    $result = $api_instance->bindSkill($skill_id, $skill_name, $user_id, $user_name, $acd_queue_id, $acd_queue_name, $bind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSkillsApi->bindSkill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **string**| The skill ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **skill_name** | **string**| Can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. The skill name list separated by the &#x60;;&#x60; symbol. | [optional]
 **user_id** | **string**| The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **user_name** | **string**| The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. The user name list separated by the &#x60;;&#x60; symbol. | [optional]
 **acd_queue_id** | **string**| The ACD queue ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. | [optional]
 **acd_queue_name** | **string**| The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. The ACD queue name list separated by the &#x60;;&#x60; symbol. | [optional]
 **bind** | **bool**| Bind or unbind? | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delSkill**
> \Voximplant\Model\InlineResponse200 delSkill($skill_id, $skill_name)



Deletes the skill.

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

$api_instance = new Voximplant\Api\ManagingSkillsApi();
$skill_id = 3.4; // float | The skill ID.
$skill_name = "skill_name_example"; // string | The skill name that can be used instead of <b>skill_id</b>.

try {
    $result = $api_instance->delSkill($skill_id, $skill_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSkillsApi->delSkill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **float**| The skill ID. | [optional]
 **skill_name** | **string**| The skill name that can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSkills**
> \Voximplant\Model\InlineResponse20054 getSkills($skill_id, $skill_name, $count, $offset)



Gets the skills.

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

$api_instance = new Voximplant\Api\ManagingSkillsApi();
$skill_id = 3.4; // float | The skill ID to filter.
$skill_name = "skill_name_example"; // string | The skill name part to filter.
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getSkills($skill_id, $skill_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSkillsApi->getSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **float**| The skill ID to filter. | [optional]
 **skill_name** | **string**| The skill name part to filter. | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSkillInfo**
> \Voximplant\Model\InlineResponse200 setSkillInfo($new_skill_name, $skill_id, $skill_name)



Edits the skill.

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

$api_instance = new Voximplant\Api\ManagingSkillsApi();
$new_skill_name = "new_skill_name_example"; // string | The new skill name. The length must be less than 512.
$skill_id = 3.4; // float | The skill ID.
$skill_name = "skill_name_example"; // string | The skill name that can be used instead of <b>skill_id</b>.

try {
    $result = $api_instance->setSkillInfo($new_skill_name, $skill_id, $skill_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingSkillsApi->setSkillInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_skill_name** | **string**| The new skill name. The length must be less than 512. |
 **skill_id** | **float**| The skill ID. | [optional]
 **skill_name** | **string**| The skill name that can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. | [optional]

### Return type

[**\Voximplant\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

