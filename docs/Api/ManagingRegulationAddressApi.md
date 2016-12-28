# Voximplant\ManagingRegulationAddressApi

All URIs are relative to *https://api.voximplant.com/platform_api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRegulationAddress**](ManagingRegulationAddressApi.md#createRegulationAddress) | **POST** /CreateRegulationAddress | 
[**getAvailibleRegulations**](ManagingRegulationAddressApi.md#getAvailibleRegulations) | **POST** /GetAvailibleRegulations | 
[**getCountries**](ManagingRegulationAddressApi.md#getCountries) | **POST** /GetCountries | 
[**getRegions**](ManagingRegulationAddressApi.md#getRegions) | **POST** /GetRegions | 
[**getRegulationsAddress**](ManagingRegulationAddressApi.md#getRegulationsAddress) | **POST** /GetRegulationsAddress | 
[**getZIPCodes**](ManagingRegulationAddressApi.md#getZIPCodes) | **POST** /GetZIPCodes | 
[**linkregulationAddress**](ManagingRegulationAddressApi.md#linkregulationAddress) | **POST** /LinkregulationAddress | 
[**uploadProofOfAddress**](ManagingRegulationAddressApi.md#uploadProofOfAddress) | **POST** /UploadProofOfAddress | 


# **createRegulationAddress**
> \Voximplant\Model\CreateRegulationAddressAPIResponse createRegulationAddress($phone_category_name, $destination_country_code, $proof, $phone_owner_salutation, $phone_owner_zip_code, $phone_owner_city, $phone_owner_street, $phone_owner_building_number, $phone_owner_country_code, $phone_region_code, $phone_owner_first_name, $phone_owner_last_name, $phone_owner_company, $phone_owner_building_letter)



Add regulation address

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$phone_category_name = "phone_category_name_example"; // string | The phone category name.
$destination_country_code = "destination_country_code_example"; // string | The destination country code
$proof = "proof_example"; // string | Send as Body Request or multiform.
$phone_owner_salutation = "phone_owner_salutation_example"; // string | This is the salutation of the end user for the created address: MR or MS if firstName and lastName are used or COMPANY if companyName is used
$phone_owner_zip_code = "phone_owner_zip_code_example"; // string | This is the zip code of the end user’s address.
$phone_owner_city = "phone_owner_city_example"; // string | This is the city of the end user’s address.
$phone_owner_street = "phone_owner_street_example"; // string | This is the name of the end user’s street.
$phone_owner_building_number = "phone_owner_building_number_example"; // string | This is the number of the building or the street number of the address.
$phone_owner_country_code = "phone_owner_country_code_example"; // string | The owner`s country code. Default uses destination_country_code
$phone_region_code = "phone_region_code_example"; // string | The phone region code
$phone_owner_first_name = "phone_owner_first_name_example"; // string | This is the first name for the end user of the created address. It is a mandatory field if the salutation is MR or MS.
$phone_owner_last_name = "phone_owner_last_name_example"; // string | This is the last name for the end user of the created address. It is a mandatory field if the salutation is MR or MS.
$phone_owner_company = "phone_owner_company_example"; // string | This is the company name for the end user of the created address. It is a mandatory field if the salutation is COMPANY.
$phone_owner_building_letter = "phone_owner_building_letter_example"; // string | This is the building letter which can also be used for additional information on the street number.

try {
    $result = $api_instance->createRegulationAddress($phone_category_name, $destination_country_code, $proof, $phone_owner_salutation, $phone_owner_zip_code, $phone_owner_city, $phone_owner_street, $phone_owner_building_number, $phone_owner_country_code, $phone_region_code, $phone_owner_first_name, $phone_owner_last_name, $phone_owner_company, $phone_owner_building_letter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->createRegulationAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_category_name** | **string**| The phone category name. |
 **destination_country_code** | **string**| The destination country code |
 **proof** | **string**| Send as Body Request or multiform. |
 **phone_owner_salutation** | **string**| This is the salutation of the end user for the created address: MR or MS if firstName and lastName are used or COMPANY if companyName is used |
 **phone_owner_zip_code** | **string**| This is the zip code of the end user’s address. |
 **phone_owner_city** | **string**| This is the city of the end user’s address. |
 **phone_owner_street** | **string**| This is the name of the end user’s street. |
 **phone_owner_building_number** | **string**| This is the number of the building or the street number of the address. |
 **phone_owner_country_code** | **string**| The owner&#x60;s country code. Default uses destination_country_code | [optional]
 **phone_region_code** | **string**| The phone region code | [optional]
 **phone_owner_first_name** | **string**| This is the first name for the end user of the created address. It is a mandatory field if the salutation is MR or MS. | [optional]
 **phone_owner_last_name** | **string**| This is the last name for the end user of the created address. It is a mandatory field if the salutation is MR or MS. | [optional]
 **phone_owner_company** | **string**| This is the company name for the end user of the created address. It is a mandatory field if the salutation is COMPANY. | [optional]
 **phone_owner_building_letter** | **string**| This is the building letter which can also be used for additional information on the street number. | [optional]

### Return type

[**\Voximplant\Model\CreateRegulationAddressAPIResponse**](../Model/CreateRegulationAddressAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailibleRegulations**
> \Voximplant\Model\GetAvailibleRegulationsAPIResponse getAvailibleRegulations($country_code, $phone_category_name, $phone_region_code)



Search availible regulation for link

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$country_code = "country_code_example"; // string | The country code
$phone_category_name = "phone_category_name_example"; // string | The phone category name.
$phone_region_code = "phone_region_code_example"; // string | The phone region code. Mandatory for regulation type LOCAL

try {
    $result = $api_instance->getAvailibleRegulations($country_code, $phone_category_name, $phone_region_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->getAvailibleRegulations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code |
 **phone_category_name** | **string**| The phone category name. |
 **phone_region_code** | **string**| The phone region code. Mandatory for regulation type LOCAL | [optional]

### Return type

[**\Voximplant\Model\GetAvailibleRegulationsAPIResponse**](../Model/GetAvailibleRegulationsAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountries**
> \Voximplant\Model\GetCountriesAPIResponse getCountries($country_code)



Get all countries

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$country_code = "country_code_example"; // string | The country code A2

try {
    $result = $api_instance->getCountries($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code A2 | [optional]

### Return type

[**\Voximplant\Model\GetCountriesAPIResponse**](../Model/GetCountriesAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegions**
> \Voximplant\Model\GetRegionsAPIResponse getRegions($country_code, $phone_category_name, $city_name, $count, $offset)



Get availible regions in country

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$country_code = "country_code_example"; // string | The country code A2
$phone_category_name = "phone_category_name_example"; // string | The phone category name. Availible: GEOGRAPHIC, TOLL_FREE, NATIONAL, MOBILE
$city_name = "city_name_example"; // string | The pattern of city`s name
$count = 56; // int | The returned regions count.
$offset = 56; // int | The record count to omit.

try {
    $result = $api_instance->getRegions($country_code, $phone_category_name, $city_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->getRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code A2 |
 **phone_category_name** | **string**| The phone category name. Availible: GEOGRAPHIC, TOLL_FREE, NATIONAL, MOBILE |
 **city_name** | **string**| The pattern of city&#x60;s name | [optional]
 **count** | **int**| The returned regions count. | [optional]
 **offset** | **int**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\GetRegionsAPIResponse**](../Model/GetRegionsAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegulationsAddress**
> \Voximplant\Model\GetRegulationsAddressAPIResponse getRegulationsAddress($country_code, $phone_category_name, $phone_region_code, $regulation_address_id, $verified, $in_progress)



Search user's regulation address

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$country_code = "country_code_example"; // string | The country code
$phone_category_name = "phone_category_name_example"; // string | The phone category name.
$phone_region_code = "phone_region_code_example"; // string | The phone region code.
$regulation_address_id = 3.4; // float | The regulation address ID.
$verified = true; // bool | Show only verified regulation address.
$in_progress = true; // bool | Show only in progress regulation address.

try {
    $result = $api_instance->getRegulationsAddress($country_code, $phone_category_name, $phone_region_code, $regulation_address_id, $verified, $in_progress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->getRegulationsAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code | [optional]
 **phone_category_name** | **string**| The phone category name. | [optional]
 **phone_region_code** | **string**| The phone region code. | [optional]
 **regulation_address_id** | **float**| The regulation address ID. | [optional]
 **verified** | **bool**| Show only verified regulation address. | [optional]
 **in_progress** | **bool**| Show only in progress regulation address. | [optional]

### Return type

[**\Voximplant\Model\GetRegulationsAddressAPIResponse**](../Model/GetRegulationsAddressAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZIPCodes**
> \Voximplant\Model\GetZIPCodesAPIResponse getZIPCodes($country_code, $phone_region_code, $count, $offset)



Search availible zip codes

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$country_code = "country_code_example"; // string | The country code
$phone_region_code = "phone_region_code_example"; // string | The phone region code
$count = 3.4; // float | The max returning record count.
$offset = 3.4; // float | The record count to omit.

try {
    $result = $api_instance->getZIPCodes($country_code, $phone_region_code, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->getZIPCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code |
 **phone_region_code** | **string**| The phone region code | [optional]
 **count** | **float**| The max returning record count. | [optional]
 **offset** | **float**| The record count to omit. | [optional]

### Return type

[**\Voximplant\Model\GetZIPCodesAPIResponse**](../Model/GetZIPCodesAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkregulationAddress**
> \Voximplant\Model\LinkregulationAddressAPIResponse linkregulationAddress($regulation_address_id, $phone_id, $phone_number)



Link regulation address to phone

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$regulation_address_id = 3.4; // float | The regulation address ID
$phone_id = 3.4; // float | The phone ID for link
$phone_number = "phone_number_example"; // string | The phone number for link

try {
    $result = $api_instance->linkregulationAddress($regulation_address_id, $phone_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->linkregulationAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regulation_address_id** | **float**| The regulation address ID |
 **phone_id** | **float**| The phone ID for link |
 **phone_number** | **string**| The phone number for link |

### Return type

[**\Voximplant\Model\LinkregulationAddressAPIResponse**](../Model/LinkregulationAddressAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadProofOfAddress**
> \Voximplant\Model\LinkregulationAddressAPIResponse uploadProofOfAddress($regulation_address_id, $proof)



Upload proof of address

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

$api_instance = new Voximplant\Api\ManagingRegulationAddressApi();
$regulation_address_id = 3.4; // float | The regulation address id
$proof = "proof_example"; // string | Send as Body Request or multiform.

try {
    $result = $api_instance->uploadProofOfAddress($regulation_address_id, $proof);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagingRegulationAddressApi->uploadProofOfAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regulation_address_id** | **float**| The regulation address id |
 **proof** | **string**| Send as Body Request or multiform. |

### Return type

[**\Voximplant\Model\LinkregulationAddressAPIResponse**](../Model/LinkregulationAddressAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key), [account_name](../../README.md#account_name)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

