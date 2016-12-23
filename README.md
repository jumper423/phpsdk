# Voximplant-php-sdk
Voximplant HTTP API description

- API version: 1.0.0
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://voximplant.com](http://voximplant.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/DmitryIvaneychik/phpsdk.git"
    }
  ],
  "require": {
    "voximplant/phpsdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once( __DIR__ . '/vendor/autoload.php' );
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');
// Configure API key authorization: account_name
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('account_name', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('account_name', 'Bearer');

$api_instance = new Swagger\Client\Api\AccountsAuthenticationApi();

try {
    $result = $api_instance->logon();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.voximplant.com/platform_api/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsAuthenticationApi* | [**logon**](docs/Api/AccountsAuthenticationApi.md#logon) | **POST** /Logon |
*AccountsAuthenticationApi* | [**logout**](docs/Api/AccountsAuthenticationApi.md#logout) | **POST** /Logout |
*ManagingAccountsApi* | [**chargeAccount**](docs/Api/ManagingAccountsApi.md#chargeaccount) | **POST** /ChargeAccount |
*ManagingAccountsApi* | [**confirmAccountPasswordChange**](docs/Api/ManagingAccountsApi.md#confirmaccountpasswordchange) | **POST** /ConfirmAccountPasswordChange |
*ManagingAccountsApi* | [**getAccountDocuments**](docs/Api/ManagingAccountsApi.md#getaccountdocuments) | **POST** /GetAccountDocuments |
*ManagingAccountsApi* | [**getAccountInfo**](docs/Api/ManagingAccountsApi.md#getaccountinfo) | **POST** /GetAccountInfo |
*ManagingAccountsApi* | [**getCurrencyRate**](docs/Api/ManagingAccountsApi.md#getcurrencyrate) | **POST** /GetCurrencyRate |
*ManagingAccountsApi* | [**getMoneyAmountToCharge**](docs/Api/ManagingAccountsApi.md#getmoneyamounttocharge) | **POST** /GetMoneyAmountToCharge |
*ManagingAccountsApi* | [**getResourcePrice**](docs/Api/ManagingAccountsApi.md#getresourceprice) | **POST** /GetResourcePrice |
*ManagingAccountsApi* | [**getSubscriptionPrice**](docs/Api/ManagingAccountsApi.md#getsubscriptionprice) | **POST** /GetSubscriptionPrice |
*ManagingAccountsApi* | [**sendAccountPasswordChangeRequest**](docs/Api/ManagingAccountsApi.md#sendaccountpasswordchangerequest) | **POST** /SendAccountPasswordChangeRequest |
*ManagingAccountsApi* | [**setAccountDocument**](docs/Api/ManagingAccountsApi.md#setaccountdocument) | **POST** /SetAccountDocument |
*ManagingAccountsApi* | [**setAccountInfo**](docs/Api/ManagingAccountsApi.md#setaccountinfo) | **POST** /SetAccountInfo |
*ManagingAdminRolesApi* | [**addAdminRole**](docs/Api/ManagingAdminRolesApi.md#addadminrole) | **POST** /AddAdminRole |
*ManagingAdminRolesApi* | [**delAdminRole**](docs/Api/ManagingAdminRolesApi.md#deladminrole) | **POST** /DelAdminRole |
*ManagingAdminRolesApi* | [**getAdminRoles**](docs/Api/ManagingAdminRolesApi.md#getadminroles) | **POST** /GetAdminRoles |
*ManagingAdminRolesApi* | [**setAdminRoleInfo**](docs/Api/ManagingAdminRolesApi.md#setadminroleinfo) | **POST** /SetAdminRoleInfo |
*ManagingAdminUsersApi* | [**addAdminUser**](docs/Api/ManagingAdminUsersApi.md#addadminuser) | **POST** /AddAdminUser |
*ManagingAdminUsersApi* | [**attachAdminRole**](docs/Api/ManagingAdminUsersApi.md#attachadminrole) | **POST** /AttachAdminRole |
*ManagingAdminUsersApi* | [**delAdminUser**](docs/Api/ManagingAdminUsersApi.md#deladminuser) | **POST** /DelAdminUser |
*ManagingAdminUsersApi* | [**getAdminUsers**](docs/Api/ManagingAdminUsersApi.md#getadminusers) | **POST** /GetAdminUsers |
*ManagingAdminUsersApi* | [**setAdminUserInfo**](docs/Api/ManagingAdminUsersApi.md#setadminuserinfo) | **POST** /SetAdminUserInfo |
*ManagingApplicationsApi* | [**addApplication**](docs/Api/ManagingApplicationsApi.md#addapplication) | **POST** /AddApplication |
*ManagingApplicationsApi* | [**delApplication**](docs/Api/ManagingApplicationsApi.md#delapplication) | **POST** /DelApplication |
*ManagingApplicationsApi* | [**getApplications**](docs/Api/ManagingApplicationsApi.md#getapplications) | **POST** /GetApplications |
*ManagingApplicationsApi* | [**setApplicationInfo**](docs/Api/ManagingApplicationsApi.md#setapplicationinfo) | **POST** /SetApplicationInfo |
*ManagingAuthorizedIPsApi* | [**addAuthorizedAccountIP**](docs/Api/ManagingAuthorizedIPsApi.md#addauthorizedaccountip) | **POST** /AddAuthorizedAccountIP |
*ManagingAuthorizedIPsApi* | [**checkAuthorizedAccountIP**](docs/Api/ManagingAuthorizedIPsApi.md#checkauthorizedaccountip) | **POST** /CheckAuthorizedAccountIP |
*ManagingAuthorizedIPsApi* | [**delAuthorizedAccountIP**](docs/Api/ManagingAuthorizedIPsApi.md#delauthorizedaccountip) | **POST** /DelAuthorizedAccountIP |
*ManagingAuthorizedIPsApi* | [**getAuthorizedAccountIPs**](docs/Api/ManagingAuthorizedIPsApi.md#getauthorizedaccountips) | **POST** /GetAuthorizedAccountIPs |
*ManagingCallListsApi* | [**appendToCallList**](docs/Api/ManagingCallListsApi.md#appendtocalllist) | **POST** /AppendToCallList |
*ManagingCallListsApi* | [**createCallList**](docs/Api/ManagingCallListsApi.md#createcalllist) | **POST** /CreateCallList |
*ManagingCallListsApi* | [**createManualCallList**](docs/Api/ManagingCallListsApi.md#createmanualcalllist) | **POST** /CreateManualCallList |
*ManagingCallListsApi* | [**getCallListDetails**](docs/Api/ManagingCallListsApi.md#getcalllistdetails) | **POST** /GetCallListDetails |
*ManagingCallListsApi* | [**getCallLists**](docs/Api/ManagingCallListsApi.md#getcalllists) | **POST** /GetCallLists |
*ManagingCallListsApi* | [**recoverCallList**](docs/Api/ManagingCallListsApi.md#recovercalllist) | **POST** /RecoverCallList |
*ManagingCallListsApi* | [**startNextCallTask**](docs/Api/ManagingCallListsApi.md#startnextcalltask) | **POST** /StartNextCallTask |
*ManagingCallListsApi* | [**stopCallListProcessing**](docs/Api/ManagingCallListsApi.md#stopcalllistprocessing) | **POST** /StopCallListProcessing |
*ManagingCallerIDsApi* | [**activateCallerID**](docs/Api/ManagingCallerIDsApi.md#activatecallerid) | **POST** /ActivateCallerID |
*ManagingCallerIDsApi* | [**addCallerID**](docs/Api/ManagingCallerIDsApi.md#addcallerid) | **POST** /AddCallerID |
*ManagingCallerIDsApi* | [**delCallerID**](docs/Api/ManagingCallerIDsApi.md#delcallerid) | **POST** /DelCallerID |
*ManagingCallerIDsApi* | [**getCallerIDs**](docs/Api/ManagingCallerIDsApi.md#getcallerids) | **POST** /GetCallerIDs |
*ManagingCallerIDsApi* | [**verifyCallerID**](docs/Api/ManagingCallerIDsApi.md#verifycallerid) | **POST** /VerifyCallerID |
*ManagingHistoryApi* | [**downloadHistoryReport**](docs/Api/ManagingHistoryApi.md#downloadhistoryreport) | **POST** /DownloadHistoryReport |
*ManagingHistoryApi* | [**getACDHistory**](docs/Api/ManagingHistoryApi.md#getacdhistory) | **POST** /GetACDHistory |
*ManagingHistoryApi* | [**getCallHistory**](docs/Api/ManagingHistoryApi.md#getcallhistory) | **POST** /GetCallHistory |
*ManagingHistoryApi* | [**getHistoryReports**](docs/Api/ManagingHistoryApi.md#gethistoryreports) | **POST** /GetHistoryReports |
*ManagingHistoryApi* | [**getTransactionHistory**](docs/Api/ManagingHistoryApi.md#gettransactionhistory) | **POST** /GetTransactionHistory |
*ManagingPSTNBlacklistApi* | [**addPstnBlackListItem**](docs/Api/ManagingPSTNBlacklistApi.md#addpstnblacklistitem) | **POST** /AddPstnBlackListItem |
*ManagingPSTNBlacklistApi* | [**delPstnBlackListItem**](docs/Api/ManagingPSTNBlacklistApi.md#delpstnblacklistitem) | **POST** /DelPstnBlackListItem |
*ManagingPSTNBlacklistApi* | [**getPstnBlackList**](docs/Api/ManagingPSTNBlacklistApi.md#getpstnblacklist) | **POST** /GetPstnBlackList |
*ManagingPSTNBlacklistApi* | [**setPstnBlackListItem**](docs/Api/ManagingPSTNBlacklistApi.md#setpstnblacklistitem) | **POST** /SetPstnBlackListItem |
*ManagingPhoneNumbersApi* | [**attachPhoneNumber**](docs/Api/ManagingPhoneNumbersApi.md#attachphonenumber) | **POST** /AttachPhoneNumber |
*ManagingPhoneNumbersApi* | [**bindPhoneNumberToApplication**](docs/Api/ManagingPhoneNumbersApi.md#bindphonenumbertoapplication) | **POST** /BindPhoneNumberToApplication |
*ManagingPhoneNumbersApi* | [**deactivatePhoneNumber**](docs/Api/ManagingPhoneNumbersApi.md#deactivatephonenumber) | **POST** /DeactivatePhoneNumber |
*ManagingPhoneNumbersApi* | [**getActualPhoneNumberRegion**](docs/Api/ManagingPhoneNumbersApi.md#getactualphonenumberregion) | **POST** /GetActualPhoneNumberRegion |
*ManagingPhoneNumbersApi* | [**getNewPhoneNumbers**](docs/Api/ManagingPhoneNumbersApi.md#getnewphonenumbers) | **POST** /GetNewPhoneNumbers |
*ManagingPhoneNumbersApi* | [**getPhoneNumberCategories**](docs/Api/ManagingPhoneNumbersApi.md#getphonenumbercategories) | **POST** /GetPhoneNumberCategories |
*ManagingPhoneNumbersApi* | [**getPhoneNumberCountryStates**](docs/Api/ManagingPhoneNumbersApi.md#getphonenumbercountrystates) | **POST** /GetPhoneNumberCountryStates |
*ManagingPhoneNumbersApi* | [**getPhoneNumberRegions**](docs/Api/ManagingPhoneNumbersApi.md#getphonenumberregions) | **POST** /GetPhoneNumberRegions |
*ManagingPhoneNumbersApi* | [**getPhoneNumbers**](docs/Api/ManagingPhoneNumbersApi.md#getphonenumbers) | **POST** /GetPhoneNumbers |
*ManagingPhoneNumbersApi* | [**setPhoneNumberInfo**](docs/Api/ManagingPhoneNumbersApi.md#setphonenumberinfo) | **POST** /SetPhoneNumberInfo |
*ManagingPushCredentialsApi* | [**addPushCredential**](docs/Api/ManagingPushCredentialsApi.md#addpushcredential) | **POST** /AddPushCredential |
*ManagingPushCredentialsApi* | [**bindPushCredential**](docs/Api/ManagingPushCredentialsApi.md#bindpushcredential) | **POST** /BindPushCredential |
*ManagingPushCredentialsApi* | [**delPushCredential**](docs/Api/ManagingPushCredentialsApi.md#delpushcredential) | **POST** /DelPushCredential |
*ManagingPushCredentialsApi* | [**getPushCredential**](docs/Api/ManagingPushCredentialsApi.md#getpushcredential) | **POST** /GetPushCredential |
*ManagingPushCredentialsApi* | [**setPushCredential**](docs/Api/ManagingPushCredentialsApi.md#setpushcredential) | **POST** /SetPushCredential |
*ManagingQueuesApi* | [**addQueue**](docs/Api/ManagingQueuesApi.md#addqueue) | **POST** /AddQueue |
*ManagingQueuesApi* | [**delQueue**](docs/Api/ManagingQueuesApi.md#delqueue) | **POST** /DelQueue |
*ManagingQueuesApi* | [**getACDState**](docs/Api/ManagingQueuesApi.md#getacdstate) | **POST** /GetACDState |
*ManagingQueuesApi* | [**getQueues**](docs/Api/ManagingQueuesApi.md#getqueues) | **POST** /GetQueues |
*ManagingQueuesApi* | [**setQueueInfo**](docs/Api/ManagingQueuesApi.md#setqueueinfo) | **POST** /SetQueueInfo |
*ManagingRegulationAddressApi* | [**createRegulationAddress**](docs/Api/ManagingRegulationAddressApi.md#createregulationaddress) | **POST** /CreateRegulationAddress |
*ManagingRegulationAddressApi* | [**getAvailibleRegulations**](docs/Api/ManagingRegulationAddressApi.md#getavailibleregulations) | **POST** /GetAvailibleRegulations |
*ManagingRegulationAddressApi* | [**getCountries**](docs/Api/ManagingRegulationAddressApi.md#getcountries) | **POST** /GetCountries |
*ManagingRegulationAddressApi* | [**getRegions**](docs/Api/ManagingRegulationAddressApi.md#getregions) | **POST** /GetRegions |
*ManagingRegulationAddressApi* | [**getRegulationsAddress**](docs/Api/ManagingRegulationAddressApi.md#getregulationsaddress) | **POST** /GetRegulationsAddress |
*ManagingRegulationAddressApi* | [**getZIPCodes**](docs/Api/ManagingRegulationAddressApi.md#getzipcodes) | **POST** /GetZIPCodes |
*ManagingRegulationAddressApi* | [**linkregulationAddress**](docs/Api/ManagingRegulationAddressApi.md#linkregulationaddress) | **POST** /LinkregulationAddress |
*ManagingRegulationAddressApi* | [**uploadProofOfAddress**](docs/Api/ManagingRegulationAddressApi.md#uploadproofofaddress) | **POST** /UploadProofOfAddress |
*ManagingRulesApi* | [**addRule**](docs/Api/ManagingRulesApi.md#addrule) | **POST** /AddRule |
*ManagingRulesApi* | [**delRule**](docs/Api/ManagingRulesApi.md#delrule) | **POST** /DelRule |
*ManagingRulesApi* | [**getRules**](docs/Api/ManagingRulesApi.md#getrules) | **POST** /GetRules |
*ManagingRulesApi* | [**reorderRules**](docs/Api/ManagingRulesApi.md#reorderrules) | **POST** /ReorderRules |
*ManagingRulesApi* | [**setRuleInfo**](docs/Api/ManagingRulesApi.md#setruleinfo) | **POST** /SetRuleInfo |
*ManagingSIPRegistrationApi* | [**bindSipRegistration**](docs/Api/ManagingSIPRegistrationApi.md#bindsipregistration) | **POST** /BindSipRegistration |
*ManagingSIPRegistrationApi* | [**createSipRegistration**](docs/Api/ManagingSIPRegistrationApi.md#createsipregistration) | **POST** /CreateSipRegistration |
*ManagingSIPRegistrationApi* | [**deleteSipRegistration**](docs/Api/ManagingSIPRegistrationApi.md#deletesipregistration) | **POST** /DeleteSipRegistration |
*ManagingSIPRegistrationApi* | [**getSipRegistrations**](docs/Api/ManagingSIPRegistrationApi.md#getsipregistrations) | **POST** /GetSipRegistrations |
*ManagingSIPRegistrationApi* | [**updateSipRegistration**](docs/Api/ManagingSIPRegistrationApi.md#updatesipregistration) | **POST** /UpdateSipRegistration |
*ManagingSIPWhiteListApi* | [**addSipWhiteListItem**](docs/Api/ManagingSIPWhiteListApi.md#addsipwhitelistitem) | **POST** /AddSipWhiteListItem |
*ManagingSIPWhiteListApi* | [**delSipWhiteListItem**](docs/Api/ManagingSIPWhiteListApi.md#delsipwhitelistitem) | **POST** /DelSipWhiteListItem |
*ManagingSIPWhiteListApi* | [**getSipWhiteList**](docs/Api/ManagingSIPWhiteListApi.md#getsipwhitelist) | **POST** /GetSipWhiteList |
*ManagingSIPWhiteListApi* | [**setSipWhiteListItem**](docs/Api/ManagingSIPWhiteListApi.md#setsipwhitelistitem) | **POST** /SetSipWhiteListItem |
*ManagingScenariosApi* | [**addScenario**](docs/Api/ManagingScenariosApi.md#addscenario) | **POST** /AddScenario |
*ManagingScenariosApi* | [**bindScenario**](docs/Api/ManagingScenariosApi.md#bindscenario) | **POST** /BindScenario |
*ManagingScenariosApi* | [**delScenario**](docs/Api/ManagingScenariosApi.md#delscenario) | **POST** /DelScenario |
*ManagingScenariosApi* | [**getScenarios**](docs/Api/ManagingScenariosApi.md#getscenarios) | **POST** /GetScenarios |
*ManagingScenariosApi* | [**reorderScenarios**](docs/Api/ManagingScenariosApi.md#reorderscenarios) | **POST** /ReorderScenarios |
*ManagingScenariosApi* | [**setScenarioInfo**](docs/Api/ManagingScenariosApi.md#setscenarioinfo) | **POST** /SetScenarioInfo |
*ManagingScenariosApi* | [**startConference**](docs/Api/ManagingScenariosApi.md#startconference) | **POST** /StartConference |
*ManagingScenariosApi* | [**startScenarios**](docs/Api/ManagingScenariosApi.md#startscenarios) | **POST** /StartScenarios |
*ManagingSkillsApi* | [**addSkill**](docs/Api/ManagingSkillsApi.md#addskill) | **POST** /AddSkill |
*ManagingSkillsApi* | [**bindSkill**](docs/Api/ManagingSkillsApi.md#bindskill) | **POST** /BindSkill |
*ManagingSkillsApi* | [**delSkill**](docs/Api/ManagingSkillsApi.md#delskill) | **POST** /DelSkill |
*ManagingSkillsApi* | [**getSkills**](docs/Api/ManagingSkillsApi.md#getskills) | **POST** /GetSkills |
*ManagingSkillsApi* | [**setSkillInfo**](docs/Api/ManagingSkillsApi.md#setskillinfo) | **POST** /SetSkillInfo |
*ManagingUsersApi* | [**addUser**](docs/Api/ManagingUsersApi.md#adduser) | **POST** /AddUser |
*ManagingUsersApi* | [**bindUser**](docs/Api/ManagingUsersApi.md#binduser) | **POST** /BindUser |
*ManagingUsersApi* | [**delUser**](docs/Api/ManagingUsersApi.md#deluser) | **POST** /DelUser |
*ManagingUsersApi* | [**getUsers**](docs/Api/ManagingUsersApi.md#getusers) | **POST** /GetUsers |
*ManagingUsersApi* | [**setUserInfo**](docs/Api/ManagingUsersApi.md#setuserinfo) | **POST** /SetUserInfo |
*ManagingUsersApi* | [**transferMoneyToUser**](docs/Api/ManagingUsersApi.md#transfermoneytouser) | **POST** /TransferMoneyToUser |


## Documentation For Models

 - [ACDLock](docs/Model/ACDLock.md)
 - [ACDLockedOperatorStateType](docs/Model/ACDLockedOperatorStateType.md)
 - [ACDOperatorCall](docs/Model/ACDOperatorCall.md)
 - [ACDQueueOperatorInfoType](docs/Model/ACDQueueOperatorInfoType.md)
 - [ACDQueueStateType](docs/Model/ACDQueueStateType.md)
 - [ACDReadyOperatorStateType](docs/Model/ACDReadyOperatorStateType.md)
 - [ACDServicingCallStateType](docs/Model/ACDServicingCallStateType.md)
 - [ACDSessionEventInfoType](docs/Model/ACDSessionEventInfoType.md)
 - [ACDSessionInfoType](docs/Model/ACDSessionInfoType.md)
 - [ACDStateType](docs/Model/ACDStateType.md)
 - [ACDWaitingCallStateType](docs/Model/ACDWaitingCallStateType.md)
 - [APIError](docs/Model/APIError.md)
 - [AccountCallback](docs/Model/AccountCallback.md)
 - [AccountCallbacks](docs/Model/AccountCallbacks.md)
 - [AccountDocumentVerifiedCallback](docs/Model/AccountDocumentVerifiedCallback.md)
 - [AccountInfoType](docs/Model/AccountInfoType.md)
 - [AccountIsFrozenCallback](docs/Model/AccountIsFrozenCallback.md)
 - [AccountVerificationDocument](docs/Model/AccountVerificationDocument.md)
 - [AccountVerificationType](docs/Model/AccountVerificationType.md)
 - [AccountVerifications](docs/Model/AccountVerifications.md)
 - [ActivateSuccessfulCallback](docs/Model/ActivateSuccessfulCallback.md)
 - [AdminRoleType](docs/Model/AdminRoleType.md)
 - [AdminUserType](docs/Model/AdminUserType.md)
 - [ApplicationInfoType](docs/Model/ApplicationInfoType.md)
 - [AttachedPhoneInfoType](docs/Model/AttachedPhoneInfoType.md)
 - [AuthorizedAccountIPType](docs/Model/AuthorizedAccountIPType.md)
 - [BankCardType](docs/Model/BankCardType.md)
 - [CalculatedCallHistoryDataType](docs/Model/CalculatedCallHistoryDataType.md)
 - [CalculatedTransactionHistoryDataType](docs/Model/CalculatedTransactionHistoryDataType.md)
 - [CallHistoryReportCallback](docs/Model/CallHistoryReportCallback.md)
 - [CallInfoType](docs/Model/CallInfoType.md)
 - [CallListDetailType](docs/Model/CallListDetailType.md)
 - [CallListType](docs/Model/CallListType.md)
 - [CallSessionInfoType](docs/Model/CallSessionInfoType.md)
 - [CallerIDInfoType](docs/Model/CallerIDInfoType.md)
 - [CardExpiredCallback](docs/Model/CardExpiredCallback.md)
 - [CardExpiresInMonthCallback](docs/Model/CardExpiresInMonthCallback.md)
 - [CardPaymentCallback](docs/Model/CardPaymentCallback.md)
 - [CardPaymentFailedCallback](docs/Model/CardPaymentFailedCallback.md)
 - [CertCredentialType](docs/Model/CertCredentialType.md)
 - [ChargeAccountResult](docs/Model/ChargeAccountResult.md)
 - [ChargedPhoneType](docs/Model/ChargedPhoneType.md)
 - [ClonedACDQueueType](docs/Model/ClonedACDQueueType.md)
 - [ClonedACDSkillType](docs/Model/ClonedACDSkillType.md)
 - [ClonedAccountType](docs/Model/ClonedAccountType.md)
 - [ClonedAdminRoleType](docs/Model/ClonedAdminRoleType.md)
 - [ClonedAdminUserType](docs/Model/ClonedAdminUserType.md)
 - [ClonedApplicationType](docs/Model/ClonedApplicationType.md)
 - [ClonedRuleType](docs/Model/ClonedRuleType.md)
 - [ClonedScenarioType](docs/Model/ClonedScenarioType.md)
 - [ClonedUserType](docs/Model/ClonedUserType.md)
 - [ContractInfoType](docs/Model/ContractInfoType.md)
 - [ContractorInfoType](docs/Model/ContractorInfoType.md)
 - [ContractorInvoiceServiceType](docs/Model/ContractorInvoiceServiceType.md)
 - [ContractorInvoiceType](docs/Model/ContractorInvoiceType.md)
 - [ExchangeRates](docs/Model/ExchangeRates.md)
 - [GetMoneyAmountToChargeResult](docs/Model/GetMoneyAmountToChargeResult.md)
 - [HistoryReportType](docs/Model/HistoryReportType.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse20039](docs/Model/InlineResponse20039.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse20040](docs/Model/InlineResponse20040.md)
 - [InlineResponse20041](docs/Model/InlineResponse20041.md)
 - [InlineResponse20042](docs/Model/InlineResponse20042.md)
 - [InlineResponse20043](docs/Model/InlineResponse20043.md)
 - [InlineResponse20044](docs/Model/InlineResponse20044.md)
 - [InlineResponse20045](docs/Model/InlineResponse20045.md)
 - [InlineResponse20046](docs/Model/InlineResponse20046.md)
 - [InlineResponse20047](docs/Model/InlineResponse20047.md)
 - [InlineResponse20048](docs/Model/InlineResponse20048.md)
 - [InlineResponse20049](docs/Model/InlineResponse20049.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse20050](docs/Model/InlineResponse20050.md)
 - [InlineResponse20051](docs/Model/InlineResponse20051.md)
 - [InlineResponse20052](docs/Model/InlineResponse20052.md)
 - [InlineResponse20053](docs/Model/InlineResponse20053.md)
 - [InlineResponse20054](docs/Model/InlineResponse20054.md)
 - [InlineResponse20055](docs/Model/InlineResponse20055.md)
 - [InlineResponse20056](docs/Model/InlineResponse20056.md)
 - [InlineResponse20057](docs/Model/InlineResponse20057.md)
 - [InlineResponse20058](docs/Model/InlineResponse20058.md)
 - [InlineResponse20059](docs/Model/InlineResponse20059.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse20060](docs/Model/InlineResponse20060.md)
 - [InlineResponse20061](docs/Model/InlineResponse20061.md)
 - [InlineResponse20062](docs/Model/InlineResponse20062.md)
 - [InlineResponse20063](docs/Model/InlineResponse20063.md)
 - [InlineResponse20064](docs/Model/InlineResponse20064.md)
 - [InlineResponse20065](docs/Model/InlineResponse20065.md)
 - [InlineResponse20066](docs/Model/InlineResponse20066.md)
 - [InlineResponse20067](docs/Model/InlineResponse20067.md)
 - [InlineResponse20068](docs/Model/InlineResponse20068.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [JSFailCallback](docs/Model/JSFailCallback.md)
 - [MinBalanceCallback](docs/Model/MinBalanceCallback.md)
 - [NewAttachedPhoneInfoType](docs/Model/NewAttachedPhoneInfoType.md)
 - [NewPhoneInfoType](docs/Model/NewPhoneInfoType.md)
 - [PhoneNumberCountryCategoryInfoType](docs/Model/PhoneNumberCountryCategoryInfoType.md)
 - [PhoneNumberCountryInfoType](docs/Model/PhoneNumberCountryInfoType.md)
 - [PhoneNumberCountryRegionInfoType](docs/Model/PhoneNumberCountryRegionInfoType.md)
 - [PhoneNumberCountryStateInfoType](docs/Model/PhoneNumberCountryStateInfoType.md)
 - [PriceGroup](docs/Model/PriceGroup.md)
 - [PstnBlackListInfoType](docs/Model/PstnBlackListInfoType.md)
 - [PushCredentialInfo](docs/Model/PushCredentialInfo.md)
 - [QueueInfoType](docs/Model/QueueInfoType.md)
 - [RecordType](docs/Model/RecordType.md)
 - [RegulationAddress](docs/Model/RegulationAddress.md)
 - [RegulationAddressVerifiedCallback](docs/Model/RegulationAddressVerifiedCallback.md)
 - [RegulationCountry](docs/Model/RegulationCountry.md)
 - [RegulationRegionRecord](docs/Model/RegulationRegionRecord.md)
 - [RenewedSubscriptionsCallback](docs/Model/RenewedSubscriptionsCallback.md)
 - [RenewedSubscriptionsCallbackItem](docs/Model/RenewedSubscriptionsCallbackItem.md)
 - [ResetAccountPasswordRequestCallback](docs/Model/ResetAccountPasswordRequestCallback.md)
 - [ResourceParams](docs/Model/ResourceParams.md)
 - [ResourcePrice](docs/Model/ResourcePrice.md)
 - [ResourceUsageType](docs/Model/ResourceUsageType.md)
 - [RuleInfoType](docs/Model/RuleInfoType.md)
 - [SIPRegistrationFailCallback](docs/Model/SIPRegistrationFailCallback.md)
 - [SIPRegistrationType](docs/Model/SIPRegistrationType.md)
 - [ScenarioInfoType](docs/Model/ScenarioInfoType.md)
 - [ShortAccountInfoType](docs/Model/ShortAccountInfoType.md)
 - [SipWhiteListInfoType](docs/Model/SipWhiteListInfoType.md)
 - [SkillInfoType](docs/Model/SkillInfoType.md)
 - [StagnantAccountCallback](docs/Model/StagnantAccountCallback.md)
 - [SubscriptionIsDetachedCallback](docs/Model/SubscriptionIsDetachedCallback.md)
 - [SubscriptionIsDetachedCallbackItem](docs/Model/SubscriptionIsDetachedCallbackItem.md)
 - [SubscriptionIsFrozenCallback](docs/Model/SubscriptionIsFrozenCallback.md)
 - [SubscriptionIsFrozenCallbackItem](docs/Model/SubscriptionIsFrozenCallbackItem.md)
 - [SubscriptionTemplateType](docs/Model/SubscriptionTemplateType.md)
 - [SubscriptionsToChargeType](docs/Model/SubscriptionsToChargeType.md)
 - [TransactionHistoryReportCallback](docs/Model/TransactionHistoryReportCallback.md)
 - [TransactionInfoType](docs/Model/TransactionInfoType.md)
 - [UnchargedTariffCallback](docs/Model/UnchargedTariffCallback.md)
 - [UnverifiedSubscriptionDetachedCallback](docs/Model/UnverifiedSubscriptionDetachedCallback.md)
 - [UnverifiedSubscriptionDetachedCallbackItem](docs/Model/UnverifiedSubscriptionDetachedCallbackItem.md)
 - [UserInfoType](docs/Model/UserInfoType.md)
 - [ZipCode](docs/Model/ZipCode.md)


## Documentation For Authorization


## account_name

- **Type**: API key
- **API key parameter name**: account_name
- **Location**: URL query string

## api_key

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: URL query string


## Author
Dmitry Ivaneychik
info@voximplant.com
