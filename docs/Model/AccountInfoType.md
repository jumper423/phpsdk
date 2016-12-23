# AccountInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | The account&#39;s ID. | 
**account_name** | **string** | The account&#39;s name. | 
**account_email** | **string** | The account&#39;s email. | 
**account_first_name** | **string** | The first name. | [optional] 
**account_last_name** | **string** | The last name. | [optional] 
**created** | **string** | The UTC account created time in format: YYYY-MM-DD HH:mm:SS | 
**language_code** | **string** | The notification language code (2 symbols, ISO639-1). Examples: en, ru | [optional] 
**location** | **string** | The account location (timezone). Examples: America/Los_Angeles, GMT-08:00 | [optional] 
**min_balance_to_notify** | **int** | The min balance value to notify by email or SMS. | [optional] 
**account_notifications** | **bool** | Are the VoxImplant notifications required? | [optional] 
**tariff_changing_notifications** | **bool** | Are the VoxImplant tariff changing notifications required? | [optional] 
**news_notifications** | **bool** | Are the VoxImplant news notifications required? | [optional] 
**billing_address_name** | **string** | The company or businessman name. | [optional] 
**billing_address_country_code** | **string** | The billing address country code (2 symbols, ISO 3166-1 alpha-2). Examples: US, RU, GB | [optional] 
**billing_address_address** | **string** | The office address. | [optional] 
**billing_address_zip** | **string** | The office ZIP. | [optional] 
**billing_address_phone** | **string** | The office phone number. | [optional] 
**active** | **bool** | The account activation flag. | 
**frozen** | **bool** | The no money flag. | [optional] 
**balance** | **int** | The account&#39;s money. | [optional] 
**credit_limit** | **int** | The account&#39;s credit limit. | [optional] 
**tariff_id** | **int** | The account&#39;s tariff ID. | [optional] 
**tariff_name** | **string** | The account&#39;s tariff name. | [optional] 
**periodic_charge** | **string** | The tariff interval, format: YYYY-MM-DD 00:00:00 | [optional] 
**next_charge** | **string** | The next charge date, format: YYYY-MM-DD | [optional] 
**currency** | **string** | The currency code (USD, RUR, EUR, ...). | [optional] 
**support_robokassa** | **bool** | Is the robokassa payment system allowed? | [optional] 
**support_bank_card** | **bool** | Is the bank card payments allowed? | [optional] 
**support_invoice** | **bool** | Is the bank invoice allowed? | [optional] 
**account_custom_data** | **string** | The custom data. | [optional] 
**access_entries** | **string[]** |  | [optional] 
**with_access_entries** | **bool** | Set true to get the admin user permissions. | [optional] 
**send_js_error** | **bool** | Is email sending on a JS error? | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


