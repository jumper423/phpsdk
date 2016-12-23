# HistoryReportType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**history_report_id** | **int** | The call history report ID. | 
**history_type** | **string** | The history report type. The following values are possible: calls, transactions | 
**created** | **string** | The creation time in the UTC timezone in format: YYYY-MM-DD HH:mm:SS | 
**format** | **string** | The report format type. The following values are possible: csv | [optional] 
**completed** | **string** | The UTC completion time in format: YYYY-MM-DD HH:mm:SS. The report is completed if the field exists. | [optional] 
**file_name** | **string** | The report file name. | [optional] 
**file_size** | **int** | The report file size. | [optional] 
**download_size** | **int** | The gzipped report size to download. | [optional] 
**download_count** | **int** | The download attempt count. | [optional] 
**last_downloaded** | **string** | The last download UTC time in format: YYYY-MM-DD HH:mm:SS. The report is completed if the field exists. | [optional] 
**store_until** | **string** | Store the report until the UTC time in format: YYYY-MM-DD HH:mm:SS. The report is completed if the field exists. | [optional] 
**session_count** | **int** | The session count in the report. | [optional] 
**total_session_count** | **int** | The total found filtered session count. | [optional] 
**error** | [**\Voximplant\Client\Model\APIError**](APIError.md) |  | [optional] 
**filters** | **object** | The report order filters (the saved GetCallHistory, GetTransactionHistory parameters). | [optional] 
**calculated_data** | **object** | The calculated report data (the specific report data, see CalculatedCallHistoryDataType, CalculatedTransactionHistoryDataType). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


