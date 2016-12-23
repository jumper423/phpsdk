# PhoneNumberCountryRegionInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_region_id** | **int** | The region ID. | 
**phone_region_name** | **string** | The full region name. | 
**phone_region_code** | **string** | The region phone prefix. | 
**phone_count** | **int** | The phone number count in stock for the region. | 
**verification_status** | **string** | The account verification status. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED | [optional] 
**required_verification** | **string** | The required account verification name. | [optional] 
**phone_price** | **int** | The phone periodic price. | 
**phone_installation_price** | **int** | The phone installation price (without the first periodic price). | 
**phone_period** | **string** | The charge period in format: YYYY-MM-DD HH:mm:SS | 
**is_need_regulation_address** | **bool** | The flag of the need proof of address. | [optional] 
**regulation_address_type** | **string** | The type of regulation address. Available values: LOCAL, NATIONAL, WORLDWIDE. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


