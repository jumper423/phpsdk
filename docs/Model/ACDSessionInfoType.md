# ACDSessionInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acd_session_history_id** | **int** | The ACD session history ID. | 
**account_id** | **int** | The account ID. | 
**begin_time** | **string** | The UTC start date in format YYYY-MM-DD HH:mm:SS | 
**priority** | **int** | The request priority. | 
**acd_queue_id** | **int** | The ACD queue ID. | [optional] 
**user_id** | **int** | The user ID. | [optional] 
**waiting_duration** | **int** | The waiting duration in seconds. | [optional] 
**in_service_duration** | **int** | The conversation duration in seconds. | [optional] 
**after_service_duration** | **int** | The after service duration in seconds. | [optional] 
**events** | [**\Voximplant\Model\ACDSessionEventInfoType[]**](ACDSessionEventInfoType.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


