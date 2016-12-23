# CallSessionInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**call_session_history_id** | **int** | The call session history ID. | 
**account_id** | **int** | The account ID. | 
**application_id** | **int** | The application ID. | 
**user_id** | **int** | The user ID. | 
**start_date** | **string** | The start date in the selected timezone in format YYYY-MM-DD HH:mm:SS | 
**duration** | **int** | The session duration in seconds. | [optional] 
**initiator_address** | **string** | The initiator IP address. | 
**media_server_address** | **string** | The media server IP address. | 
**log_file_url** | **string** | The session log URL. | 
**finish_reason** | **string** | The finish reason | [optional] 
**calls** | [**\Voximplamt\Client\Model\CallInfoType[]**](CallInfoType.md) |  | [optional] 
**other_resource_usage** | [**\Voximplamt\Client\Model\ResourceUsageType[]**](ResourceUsageType.md) |  | [optional] 
**records** | [**\Voximplamt\Client\Model\RecordType[]**](RecordType.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


