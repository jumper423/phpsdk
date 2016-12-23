# AccountVerificationType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verification_name** | **string** | The verification name. | 
**verification_status** | **string** | The account verification status. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED, NOT_REQUIRED | 
**unverified_hold_until** | **string** | Unverified subscriptions hold until the date in format: YYYY-MM-DD (if the account verification is required). Some subscriptions will be detached on that day automatically! | [optional] 
**documents** | [**\Voximplant\Client\Model\AccountVerificationDocument[]**](AccountVerificationDocument.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


