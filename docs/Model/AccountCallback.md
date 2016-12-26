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
**account_document_verified** | [**\Voximplant\Model\AccountDocumentVerifiedCallback**](AccountDocumentVerifiedCallback.md) |  | [optional] 
**account_is_frozen** | [**\Voximplant\Model\AccountIsFrozenCallback**](AccountIsFrozenCallback.md) |  | [optional] 
**activate_successful** | [**\Voximplant\Model\ActivateSuccessfulCallback**](ActivateSuccessfulCallback.md) |  | [optional] 
**call_history_report** | [**\Voximplant\Model\CallHistoryReportCallback**](CallHistoryReportCallback.md) |  | [optional] 
**card_expired** | [**\Voximplant\Model\CardExpiredCallback**](CardExpiredCallback.md) |  | [optional] 
**card_expires_in_month** | [**\Voximplant\Model\CardExpiresInMonthCallback**](CardExpiresInMonthCallback.md) |  | [optional] 
**card_payment** | [**\Voximplant\Model\CardPaymentCallback**](CardPaymentCallback.md) |  | [optional] 
**card_payment_failed** | [**\Voximplant\Model\CardPaymentFailedCallback**](CardPaymentFailedCallback.md) |  | [optional] 
**js_fail** | [**\Voximplant\Model\JSFailCallback**](JSFailCallback.md) |  | [optional] 
**min_balance** | [**\Voximplant\Model\MinBalanceCallback**](MinBalanceCallback.md) |  | [optional] 
**regulation_address_verified** | [**\Voximplant\Model\RegulationAddressVerifiedCallback**](RegulationAddressVerifiedCallback.md) |  | [optional] 
**renewed_subscriptions** | [**\Voximplant\Model\RenewedSubscriptionsCallback**](RenewedSubscriptionsCallback.md) |  | [optional] 
**reset_account_password_request** | [**\Voximplant\Model\ResetAccountPasswordRequestCallback**](ResetAccountPasswordRequestCallback.md) |  | [optional] 
**sip_registration_fail** | [**\Voximplant\Model\SIPRegistrationFailCallback**](SIPRegistrationFailCallback.md) |  | [optional] 
**stagnant_account** | [**\Voximplant\Model\StagnantAccountCallback**](StagnantAccountCallback.md) |  | [optional] 
**subscription_is_frozen** | [**\Voximplant\Model\SubscriptionIsFrozenCallback**](SubscriptionIsFrozenCallback.md) |  | [optional] 
**subscription_is_detached** | [**\Voximplant\Model\SubscriptionIsDetachedCallback**](SubscriptionIsDetachedCallback.md) |  | [optional] 
**transaction_history_report** | [**\Voximplant\Model\TransactionHistoryReportCallback**](TransactionHistoryReportCallback.md) |  | [optional] 
**uncharged_tariff** | [**\Voximplant\Model\UnchargedTariffCallback**](UnchargedTariffCallback.md) |  | [optional] 
**unverified_subscription_detached** | [**\Voximplant\Model\UnverifiedSubscriptionDetachedCallback**](UnverifiedSubscriptionDetachedCallback.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


