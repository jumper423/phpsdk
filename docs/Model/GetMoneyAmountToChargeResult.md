# GetMoneyAmountToChargeResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The money amount of the subscriptions + tariff + negative_balance in the specified currency. | 
**min_amount** | **int** | The &#39;amount&#39; value minus the positive account balance in the specified currency. | 
**bank_card_amount_usd** | **int** | Exists if bank card payments are allowed. It&#39;s the maximum of the &#39;amount&#39; in USD and the min_card_payment (10$). | [optional] 
**min_bank_card_amount_usd** | **int** | Exists if bank card payments are allowed. It&#39;s the maximum of the &#39;min_amount&#39; in USD and the min_card_payment (10$). | [optional] 
**robokassa_amount_rub** | **int** | Exists if robokassa payments are allowed. It&#39;s the maximum of the &#39;min_amount&#39; in RUR and the min_robokassa_payment (500 RUR). | [optional] 
**min_robokassa_amount_rub** | **int** | Exists if robokassa payments are allowed. It&#39;s the maximum of the &#39;min_amount&#39; in RUR and the min_robokassa_payment (500 RUR). | [optional] 
**subscriptions** | [**\Voximplamt\Client\Model\SubscriptionsToChargeType[]**](SubscriptionsToChargeType.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


