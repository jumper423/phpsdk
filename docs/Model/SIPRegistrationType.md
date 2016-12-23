# SIPRegistrationType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sip_registration_id** | **int** | The SIP registration ID. | 
**user_id** | **int** | The user ID. | 
**application_id** | **int** | The bound domain ID. | [optional] 
**application_name** | **string** | The bound application name. | [optional] 
**rule_id** | **int** | The bound rule ID. | [optional] 
**rule_name** | **string** | The bound rule name. | [optional] 
**username** | **int** | The user name from sip proxy. | 
**proxy** | **int** | The sip proxy. | 
**last_updated** | **int** | The last time updated. | 
**auth_user** | **string** | The SIP authentications user | [optional] 
**outbound_proxy** | **int** | The outbound proxy. | [optional] 
**successful** | **int** | The successful SIP registration. | [optional] 
**status_code** | **int** | The status code from SIP registration. | [optional] 
**error_message** | **int** | The error message from SIP registration. | [optional] 
**deactivated** | **bool** | The subscription deactivation flag. The SIP registration is frozen if true. | 
**next_subscription_renewal** | **string** | The next subscription renewal date in format: YYYY-MM-DD | 
**purchase_date** | **string** | The purchase date in format: YYYY-MM-DD hh:mm:ss | 
**subscription_price** | **string** | The periodic subscription price. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


