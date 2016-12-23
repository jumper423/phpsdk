# AttachedPhoneInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_id** | **int** | The phone ID. | 
**phone_number** | **string** | The phone number. | 
**phone_price** | **int** | The periodic phone price. | 
**phone_country_code** | **string** | The phone country code (2 symbols). | 
**phone_next_renewal** | **string** | The next renewal date in format: YYYY-MM-DD | 
**phone_purchase_date** | **string** | The purchase date in format: YYYY-MM-DD hh:mm:ss | 
**deactivated** | **bool** | The flag of the frozen subscription. | 
**canceled** | **bool** | The flag of the deleted subscription. | 
**auto_charge** | **bool** | The auto_charge flag. | 
**application_id** | **int** | The bound application ID. | [optional] 
**application_name** | **string** | The bound application name. | [optional] 
**rule_id** | **int** | The bound rule ID. | [optional] 
**rule_name** | **string** | The bound rule name. | [optional] 
**category_name** | **string** | The phone category name (MOBILE, GEOGRAPHIC, TOLLFREE, MOSCOW495) | 
**required_verification** | **string** | The required account verification name. | [optional] 
**verification_status** | **string** | The account verification status. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED | [optional] 
**unverified_hold_until** | **string** | Unverified phone hold until the date in format: YYYY-MM-DD (if the account verification is required). The number will be detached on that day automatically! | [optional] 
**can_be_used** | **bool** | Can the unverified account use the phone? | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


