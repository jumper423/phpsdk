# QueueInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acd_queue_id** | **int** | The ACD queue ID. | 
**acd_queue_name** | **string** | The ACD queue name. | 
**application_id** | **int** | The application ID. | 
**acd_queue_priority** | **int** | The ACD queue priority. The highest priority is 0. | 
**service_probability** | **int** | The service probability. The value in range [0.5 ... 1]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. | 
**auto_binding** | **bool** | Is auto operators binding enable to the queue? | 
**max_queue_size** | **int** | The max queue size. | [optional] 
**max_waiting_time** | **int** | The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. | [optional] 
**average_service_time** | **int** | The average service time in seconds. The parameter corrects the waiting time prediction. | [optional] 
**skills** | [**\Voximplant\Client\Model\SkillInfoType[]**](SkillInfoType.md) |  | [optional] 
**modified** | **string** | The queue editing UTC date in format: YYYY-MM-DD HH:mm:SS | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


