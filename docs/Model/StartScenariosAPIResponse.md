# StartScenariosAPIResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result** | **int** | 1 | [optional] 
**media_session_access_url** | **string** | The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTP request on this URL will result in AppEvents.HttpRequest VoxEngine event being emitted for scenario, with HTTP request data passed to it. | [optional] 
**media_session_check_url** | **string** | The URL to check media session | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


