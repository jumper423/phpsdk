# UserInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | The user ID. | 
**user_name** | **string** | The user name. | 
**user_display_name** | **string** | The display user name. | 
**user_active** | **bool** | The user active flag. | 
**parent_accounting** | **bool** | Is the user use account money? | 
**two_factor_auth_required** | **bool** | Is two factor authorization required? | 
**mobile_phone** | **string** | The user mobile phone. | [optional] 
**balance** | **int** | The user money. | 
**user_custom_data** | **string** | The custom data. | [optional] 
**applications** | [**\Model\ApplicationInfoType[]**](ApplicationInfoType.md) |  | [optional] 
**skills** | [**\Model\SkillInfoType[]**](SkillInfoType.md) |  | [optional] 
**acd_queues** | [**\Model\ACDQueueOperatorInfoType[]**](ACDQueueOperatorInfoType.md) |  | [optional] 
**modified** | **string** | The user editing UTC date in format: YYYY-MM-DD HH:mm:SS | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


