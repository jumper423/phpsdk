# AccountCallback

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_id** | **int** | The callback ID (sequence). | 
**type** | **string** | The callback type. The following values are possible: account_document_verified, account_is_frozen, activate_successful, call_history_report, card_expired, card_expires_in_month, card_payment, card_payment_failed, js_fail, min_balance, regulation_address_verified, renewed_subscriptions, reset_account_password_request, sip_registration_fail, stagnant_account, subscription_is_detached, subscription_is_frozen, transaction_history_report, uncharged_tariff, unverified_subscription_detached. | 
**account_id** | **int** | The account ID. | 
**hash** | **string** | The security hash: hash &#x3D; md5(account_salt + account_id + api_key + callback_id). Example: 50c5fe2290cd7409b37e673b8b05e495 | 
**account_name** | **string** | The account name. | 
**account_email** | **string** | The account email. | 
**language_code** | **string** | The notification language code (2 symbols, ISO639-1). Examples: en, ru | 
**account_first_name** | **string** | The first name. | 
**account_last_name** | **string** | The last name. | 
**balance** | **int** | The account&#39;s money. | 
**currency** | **string** | The currency code (USD, RUR, EUR, ...). | 
**account_document_verified** | [**\Swagger\Client\Model\AccountDocumentVerifiedCallback**](AccountDocumentVerifiedCallback.md) |  | [optional] 
**account_is_frozen** | [**\Swagger\Client\Model\AccountIsFrozenCallback**](AccountIsFrozenCallback.md) |  | [optional] 
**activate_successful** | [**\Swagger\Client\Model\ActivateSuccessfulCallback**](ActivateSuccessfulCallback.md) |  | [optional] 
**call_history_report** | [**\Swagger\Client\Model\CallHistoryReportCallback**](CallHistoryReportCallback.md) |  | [optional] 
**card_expired** | [**\Swagger\Client\Model\CardExpiredCallback**](CardExpiredCallback.md) |  | [optional] 
**card_expires_in_month** | [**\Swagger\Client\Model\CardExpiresInMonthCallback**](CardExpiresInMonthCallback.md) |  | [optional] 
**card_payment** | [**\Swagger\Client\Model\CardPaymentCallback**](CardPaymentCallback.md) |  | [optional] 
**card_payment_failed** | [**\Swagger\Client\Model\CardPaymentFailedCallback**](CardPaymentFailedCallback.md) |  | [optional] 
**js_fail** | [**\Swagger\Client\Model\JSFailCallback**](JSFailCallback.md) |  | [optional] 
**min_balance** | [**\Swagger\Client\Model\MinBalanceCallback**](MinBalanceCallback.md) |  | [optional] 
**regulation_address_verified** | [**\Swagger\Client\Model\RegulationAddressVerifiedCallback**](RegulationAddressVerifiedCallback.md) |  | [optional] 
**renewed_subscriptions** | [**\Swagger\Client\Model\RenewedSubscriptionsCallback**](RenewedSubscriptionsCallback.md) |  | [optional] 
**reset_account_password_request** | [**\Swagger\Client\Model\ResetAccountPasswordRequestCallback**](ResetAccountPasswordRequestCallback.md) |  | [optional] 
**sip_registration_fail** | [**\Swagger\Client\Model\SIPRegistrationFailCallback**](SIPRegistrationFailCallback.md) |  | [optional] 
**stagnant_account** | [**\Swagger\Client\Model\StagnantAccountCallback**](StagnantAccountCallback.md) |  | [optional] 
**subscription_is_frozen** | [**\Swagger\Client\Model\SubscriptionIsFrozenCallback**](SubscriptionIsFrozenCallback.md) |  | [optional] 
**subscription_is_detached** | [**\Swagger\Client\Model\SubscriptionIsDetachedCallback**](SubscriptionIsDetachedCallback.md) |  | [optional] 
**transaction_history_report** | [**\Swagger\Client\Model\TransactionHistoryReportCallback**](TransactionHistoryReportCallback.md) |  | [optional] 
**uncharged_tariff** | [**\Swagger\Client\Model\UnchargedTariffCallback**](UnchargedTariffCallback.md) |  | [optional] 
**unverified_subscription_detached** | [**\Swagger\Client\Model\UnverifiedSubscriptionDetachedCallback**](UnverifiedSubscriptionDetachedCallback.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


