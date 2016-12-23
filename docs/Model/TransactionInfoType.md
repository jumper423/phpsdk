# TransactionInfoType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **int** | The transaction ID. | 
**account_id** | **string** | The account ID. | 
**performed_at** | **string** | The transaction date in the selected timezone in format YYYY-MM-DD HH:mm:SS | 
**amount** | **int** | The transaction amount, $. | 
**currency** | **string** | The amount currency (USD, RUR, EUR, ...). | 
**transaction_type** | **string** | The transaction type. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund. | 
**transaction_description** | **string** | The transaction description. | [optional] 
**payment_reference** | **string** | The external payment reference. See TransferMoneyToChildAccount | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


