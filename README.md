# # e-monsite/mailcow-php-client

mailcow is complete e-mailing solution with advanced antispam, antivirus, nice UI and API.  In order to use this API you have to create a API key and add your IP address to the whitelist of allowed IPs this can be done by logging into the Mailcow UI using your admin account, then go to Configuration > Access > Edit administrator details > API. There you will find a collapsed API menu.  There are two types of API keys   - The read only key can only be used for all get endpoints   - The read write key can be used for all endpoints

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//e-monsite/mailcow-php-client.git"
    }
  ],
  "require": {
    "e-monsite/mailcow-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\AddressRewritingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\AddBccBody(); // \MailCow\Models\AddBccBody | 

try {
    $result = $apiInstance->createBCCMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->createBCCMap: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\AddressRewritingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\AddRecipientMapBody(); // \MailCow\Models\AddRecipientMapBody | 

try {
    $result = $apiInstance->createRecipientMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->createRecipientMap: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\AddressRewritingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\DeleteBccBody(); // \MailCow\Models\DeleteBccBody | 

try {
    $result = $apiInstance->deleteBCCMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->deleteBCCMap: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\AddressRewritingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\DeleteRecipientMapBody(); // \MailCow\Models\DeleteRecipientMapBody | 

try {
    $result = $apiInstance->deleteRecipientMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->deleteRecipientMap: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\AddressRewritingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of entry you want to get
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getBCCMap($id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->getBCCMap: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\AddressRewritingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of entry you want to get
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getRecipientMap($id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->getRecipientMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://raw.githubusercontent.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressRewritingApi* | [**createBCCMap**](docs/Api/AddressRewritingApi.md#createbccmap) | **POST** /api/v1/add/bcc | Create BCC Map
*AddressRewritingApi* | [**createRecipientMap**](docs/Api/AddressRewritingApi.md#createrecipientmap) | **POST** /api/v1/add/recipient_map | Create Recipient Map
*AddressRewritingApi* | [**deleteBCCMap**](docs/Api/AddressRewritingApi.md#deletebccmap) | **POST** /api/v1/delete/bcc | Delete BCC Map
*AddressRewritingApi* | [**deleteRecipientMap**](docs/Api/AddressRewritingApi.md#deleterecipientmap) | **POST** /api/v1/delete/recipient_map | Delete Recipient Map
*AddressRewritingApi* | [**getBCCMap**](docs/Api/AddressRewritingApi.md#getbccmap) | **GET** /api/v1/get/bcc/{id} | Get BCC Map
*AddressRewritingApi* | [**getRecipientMap**](docs/Api/AddressRewritingApi.md#getrecipientmap) | **GET** /api/v1/get/recipient_map/{id} | Get Recipient Map
*AliasesApi* | [**createAlias**](docs/Api/AliasesApi.md#createalias) | **POST** /api/v1/add/alias | Create alias
*AliasesApi* | [**createTimeLimitedAlias**](docs/Api/AliasesApi.md#createtimelimitedalias) | **POST** /api/v1/add/time_limited_alias | Create time limited alias
*AliasesApi* | [**deleteAlias**](docs/Api/AliasesApi.md#deletealias) | **POST** /api/v1/delete/alias | Delete alias
*AliasesApi* | [**getAliases**](docs/Api/AliasesApi.md#getaliases) | **GET** /api/v1/get/alias/{id} | Get aliases
*AliasesApi* | [**getTimeLimitedAliases**](docs/Api/AliasesApi.md#gettimelimitedaliases) | **GET** /api/v1/get/time_limited_aliases/{mailbox} | Get time limited aliases
*AliasesApi* | [**updateAlias**](docs/Api/AliasesApi.md#updatealias) | **POST** /api/v1/edit/alias | Update alias
*AppPasswordsApi* | [**createAppPassword**](docs/Api/AppPasswordsApi.md#createapppassword) | **POST** /api/v1/add/app-passwd | Create App Password
*AppPasswordsApi* | [**deleteAppPassword**](docs/Api/AppPasswordsApi.md#deleteapppassword) | **POST** /api/v1/delete/app-passwd | Delete App Password
*AppPasswordsApi* | [**getAppPassword**](docs/Api/AppPasswordsApi.md#getapppassword) | **GET** /api/v1/get/app-passwd/all/{mailbox} | Get App Password
*DKIMApi* | [**deleteDKIMKey**](docs/Api/DKIMApi.md#deletedkimkey) | **POST** /api/v1/delete/dkim | Delete DKIM Key
*DKIMApi* | [**duplicateDKIMKey**](docs/Api/DKIMApi.md#duplicatedkimkey) | **POST** /api/v1/add/dkim_duplicate | Duplicate DKIM Key
*DKIMApi* | [**generateDKIMKey**](docs/Api/DKIMApi.md#generatedkimkey) | **POST** /api/v1/add/dkim | Generate DKIM Key
*DKIMApi* | [**getDKIMKey**](docs/Api/DKIMApi.md#getdkimkey) | **GET** /api/v1/get/dkim/{domain} | Get DKIM Key
*DomainAdminApi* | [**createDomainAdminUser**](docs/Api/DomainAdminApi.md#createdomainadminuser) | **POST** /api/v1/add/domain-admin | Create Domain Admin user
*DomainAdminApi* | [**deleteDomainAdmin**](docs/Api/DomainAdminApi.md#deletedomainadmin) | **POST** /api/v1/delete/domain-admin | Delete Domain Admin
*DomainAdminApi* | [**editDomainAdminACL**](docs/Api/DomainAdminApi.md#editdomainadminacl) | **POST** /api/v1/edit/da-acl | Edit Domain Admin ACL
*DomainAdminApi* | [**editDomainAdminUser**](docs/Api/DomainAdminApi.md#editdomainadminuser) | **POST** /api/v1/edit/domain-admin | Edit Domain Admin user
*DomainAdminApi* | [**getDomainAdmins**](docs/Api/DomainAdminApi.md#getdomainadmins) | **GET** /api/v1/get/domain-admin/all | Get Domain Admins
*DomainAntispamPoliciesApi* | [**createDomainPolicy**](docs/Api/DomainAntispamPoliciesApi.md#createdomainpolicy) | **POST** /api/v1/add/domain-policy | Create domain policy
*DomainAntispamPoliciesApi* | [**deleteDomainPolicy**](docs/Api/DomainAntispamPoliciesApi.md#deletedomainpolicy) | **POST** /api/v1/delete/domain-policy | Delete domain policy
*DomainAntispamPoliciesApi* | [**listBlacklistDomainPolicy**](docs/Api/DomainAntispamPoliciesApi.md#listblacklistdomainpolicy) | **GET** /api/v1/get/policy_bl_domain/{domain} | List blacklist domain policy
*DomainAntispamPoliciesApi* | [**listWhitelistDomainPolicy**](docs/Api/DomainAntispamPoliciesApi.md#listwhitelistdomainpolicy) | **GET** /api/v1/get/policy_wl_domain/{domain} | List whitelist domain policy
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /api/v1/add/domain | Create domain
*DomainsApi* | [**deleteDomain**](docs/Api/DomainsApi.md#deletedomain) | **POST** /api/v1/delete/domain | Delete domain
*DomainsApi* | [**deleteDomainTags**](docs/Api/DomainsApi.md#deletedomaintags) | **POST** /api/v1/delete/domain/tag/{domain} | Delete domain tags
*DomainsApi* | [**getDomains**](docs/Api/DomainsApi.md#getdomains) | **GET** /api/v1/get/domain/{id} | Get domains
*DomainsApi* | [**updateDomain**](docs/Api/DomainsApi.md#updatedomain) | **POST** /api/v1/edit/domain | Update domain
*Fail2BanApi* | [**editFail2Ban**](docs/Api/Fail2BanApi.md#editfail2ban) | **POST** /api/v1/edit/fail2ban | Edit Fail2Ban
*Fail2BanApi* | [**getFail2BanConfig**](docs/Api/Fail2BanApi.md#getfail2banconfig) | **GET** /api/v1/get/fail2ban | Get Fail2Ban Config
*FordwardingHostsApi* | [**addForwardHost**](docs/Api/FordwardingHostsApi.md#addforwardhost) | **POST** /api/v1/add/fwdhost | Add Forward Host
*FordwardingHostsApi* | [**deleteForwardHost**](docs/Api/FordwardingHostsApi.md#deleteforwardhost) | **POST** /api/v1/delete/fwdhost | Delete Forward Host
*FordwardingHostsApi* | [**getForwardingHosts**](docs/Api/FordwardingHostsApi.md#getforwardinghosts) | **GET** /api/v1/get/fwdhost/all | Get Forwarding Hosts
*LogsApi* | [**getACMELogs**](docs/Api/LogsApi.md#getacmelogs) | **GET** /api/v1/get/logs/acme/{count} | Get ACME logs
*LogsApi* | [**getApiLogs**](docs/Api/LogsApi.md#getapilogs) | **GET** /api/v1/get/logs/api/{count} | Get Api logs
*LogsApi* | [**getAutodiscoverLogs**](docs/Api/LogsApi.md#getautodiscoverlogs) | **GET** /api/v1/get/logs/autodiscover/{count} | Get Autodiscover logs
*LogsApi* | [**getDovecotLogs**](docs/Api/LogsApi.md#getdovecotlogs) | **GET** /api/v1/get/logs/dovecot/{count} | Get Dovecot logs
*LogsApi* | [**getNetfilterLogs**](docs/Api/LogsApi.md#getnetfilterlogs) | **GET** /api/v1/get/logs/netfilter/{count} | Get Netfilter logs
*LogsApi* | [**getPostfixLogs**](docs/Api/LogsApi.md#getpostfixlogs) | **GET** /api/v1/get/logs/postfix/{count} | Get Postfix logs
*LogsApi* | [**getRatelimitLogs**](docs/Api/LogsApi.md#getratelimitlogs) | **GET** /api/v1/get/logs/ratelimited/{count} | Get Ratelimit logs
*LogsApi* | [**getRspamdLogs**](docs/Api/LogsApi.md#getrspamdlogs) | **GET** /api/v1/get/logs/rspamd-history/{count} | Get Rspamd logs
*LogsApi* | [**getSOGoLogs**](docs/Api/LogsApi.md#getsogologs) | **GET** /api/v1/get/logs/sogo/{count} | Get SOGo logs
*LogsApi* | [**getWatchdogLogs**](docs/Api/LogsApi.md#getwatchdoglogs) | **GET** /api/v1/get/logs/watchdog/{count} | Get Watchdog logs
*MailboxesApi* | [**createMailbox**](docs/Api/MailboxesApi.md#createmailbox) | **POST** /api/v1/add/mailbox | Create mailbox
*MailboxesApi* | [**deleteMailbox**](docs/Api/MailboxesApi.md#deletemailbox) | **POST** /api/v1/delete/mailbox | Delete mailbox
*MailboxesApi* | [**deleteMailboxTags**](docs/Api/MailboxesApi.md#deletemailboxtags) | **POST** /api/v1/delete/mailbox/tag/{mailbox} | Delete mailbox tags
*MailboxesApi* | [**editMailboxSpamFilterScore**](docs/Api/MailboxesApi.md#editmailboxspamfilterscore) | **POST** /api/v1/edit/spam-score/ | Edit mailbox spam filter score
*MailboxesApi* | [**getMailboxes**](docs/Api/MailboxesApi.md#getmailboxes) | **GET** /api/v1/get/mailbox/{id} | Get mailboxes
*MailboxesApi* | [**quarantineNotifications**](docs/Api/MailboxesApi.md#quarantinenotifications) | **POST** /api/v1/edit/quarantine_notification | Quarantine Notifications
*MailboxesApi* | [**updateMailbox**](docs/Api/MailboxesApi.md#updatemailbox) | **POST** /api/v1/edit/mailbox | Update mailbox
*MailboxesApi* | [**updateMailboxACL**](docs/Api/MailboxesApi.md#updatemailboxacl) | **POST** /api/v1/edit/user-acl | Update mailbox ACL
*MailboxesApi* | [**updatePushoverSettings**](docs/Api/MailboxesApi.md#updatepushoversettings) | **POST** /api/v1/edit/pushover | Update Pushover settings
*OAuthClientsApi* | [**createOAuthClient**](docs/Api/OAuthClientsApi.md#createoauthclient) | **POST** /api/v1/add/oauth2-client | Create oAuth Client
*OAuthClientsApi* | [**deleteOAuthClient**](docs/Api/OAuthClientsApi.md#deleteoauthclient) | **POST** /api/v1/delete/oauth2-client | Delete oAuth Client
*OAuthClientsApi* | [**getOAuthClients**](docs/Api/OAuthClientsApi.md#getoauthclients) | **GET** /api/v1/get/oauth2-client/{id} | Get oAuth Clients
*OutgoingTLSPolicyMapOverridesApi* | [**createTLSPolicyMap**](docs/Api/OutgoingTLSPolicyMapOverridesApi.md#createtlspolicymap) | **POST** /api/v1/add/tls-policy-map | Create TLS Policy Map
*OutgoingTLSPolicyMapOverridesApi* | [**deleteTLSPolicyMap**](docs/Api/OutgoingTLSPolicyMapOverridesApi.md#deletetlspolicymap) | **POST** /api/v1/delete/tls-policy-map | Delete TLS Policy Map
*OutgoingTLSPolicyMapOverridesApi* | [**getTLSPolicyMap**](docs/Api/OutgoingTLSPolicyMapOverridesApi.md#gettlspolicymap) | **GET** /api/v1/get/tls-policy-map/{id} | Get TLS Policy Map
*QuarantineApi* | [**deleteMailsInQuarantine**](docs/Api/QuarantineApi.md#deletemailsinquarantine) | **POST** /api/v1/delete/qitem | Delete mails in Quarantine
*QuarantineApi* | [**getMailsInQuarantine**](docs/Api/QuarantineApi.md#getmailsinquarantine) | **GET** /api/v1/get/quarantine/all | Get mails in Quarantine
*QueueManagerApi* | [**deleteQueue**](docs/Api/QueueManagerApi.md#deletequeue) | **POST** /api/v1/delete/mailq | Delete Queue
*QueueManagerApi* | [**flushQueue**](docs/Api/QueueManagerApi.md#flushqueue) | **POST** /api/v1/edit/mailq | Flush Queue
*QueueManagerApi* | [**getQueue**](docs/Api/QueueManagerApi.md#getqueue) | **GET** /api/v1/get/mailq/all | Get Queue
*RatelimitsApi* | [**editDomainRatelimits**](docs/Api/RatelimitsApi.md#editdomainratelimits) | **POST** /api/v1/edit/rl-domain/ | Edit domain ratelimits
*RatelimitsApi* | [**editMailboxRatelimits**](docs/Api/RatelimitsApi.md#editmailboxratelimits) | **POST** /api/v1/edit/rl-mbox/ | Edit mailbox ratelimits
*RatelimitsApi* | [**getDomainRatelimits**](docs/Api/RatelimitsApi.md#getdomainratelimits) | **GET** /api/v1/get/rl-domain/{domain} | Get domain ratelimits
*RatelimitsApi* | [**getMailboxRatelimits**](docs/Api/RatelimitsApi.md#getmailboxratelimits) | **GET** /api/v1/get/rl-mbox/{mailbox} | Get mailbox ratelimits
*ResourcesApi* | [**createResources**](docs/Api/ResourcesApi.md#createresources) | **POST** /api/v1/add/resource | Create Resources
*ResourcesApi* | [**deleteResources**](docs/Api/ResourcesApi.md#deleteresources) | **POST** /api/v1/delete/resource | Delete Resources
*ResourcesApi* | [**getResources**](docs/Api/ResourcesApi.md#getresources) | **GET** /api/v1/get/resource/all | Get Resources
*RoutingApi* | [**createSenderDependentTransports**](docs/Api/RoutingApi.md#createsenderdependenttransports) | **POST** /api/v1/add/relayhost | Create Sender-Dependent Transports
*RoutingApi* | [**createTransportMaps**](docs/Api/RoutingApi.md#createtransportmaps) | **POST** /api/v1/add/transport | Create Transport Maps
*RoutingApi* | [**deleteSenderDependentTransports**](docs/Api/RoutingApi.md#deletesenderdependenttransports) | **POST** /api/v1/delete/relayhost | Delete Sender-Dependent Transports
*RoutingApi* | [**deleteTransportMaps**](docs/Api/RoutingApi.md#deletetransportmaps) | **POST** /api/v1/delete/transport | Delete Transport Maps
*RoutingApi* | [**getSenderDependentTransports**](docs/Api/RoutingApi.md#getsenderdependenttransports) | **GET** /api/v1/get/relayhost/{id} | Get Sender-Dependent Transports
*RoutingApi* | [**getTransportMaps**](docs/Api/RoutingApi.md#gettransportmaps) | **GET** /api/v1/get/transport/{id} | Get Transport Maps
*StatusApi* | [**getContainerStatus**](docs/Api/StatusApi.md#getcontainerstatus) | **GET** /api/v1/get/status/containers | Get container status
*StatusApi* | [**getSolrStatus**](docs/Api/StatusApi.md#getsolrstatus) | **GET** /api/v1/get/status/solr | Get solr status
*StatusApi* | [**getVersionStatus**](docs/Api/StatusApi.md#getversionstatus) | **GET** /api/v1/get/status/version | Get version status
*StatusApi* | [**getVmailStatus**](docs/Api/StatusApi.md#getvmailstatus) | **GET** /api/v1/get/status/vmail | Get vmail status
*SyncJobsApi* | [**createSyncJob**](docs/Api/SyncJobsApi.md#createsyncjob) | **POST** /api/v1/add/syncjob | Create sync job
*SyncJobsApi* | [**deleteSyncJob**](docs/Api/SyncJobsApi.md#deletesyncjob) | **POST** /api/v1/delete/syncjob | Delete sync job
*SyncJobsApi* | [**getSyncJobs**](docs/Api/SyncJobsApi.md#getsyncjobs) | **GET** /api/v1/get/syncjobs/all/no_log | Get sync jobs
*SyncJobsApi* | [**updateSyncJob**](docs/Api/SyncJobsApi.md#updatesyncjob) | **POST** /api/v1/edit/syncjob | Update sync job

## Documentation For Models

 - [AddAliasBody](docs/Model/AddAliasBody.md)
 - [AddApppasswdBody](docs/Model/AddApppasswdBody.md)
 - [AddBccBody](docs/Model/AddBccBody.md)
 - [AddDkimBody](docs/Model/AddDkimBody.md)
 - [AddDkimDuplicateBody](docs/Model/AddDkimDuplicateBody.md)
 - [AddDomainBody](docs/Model/AddDomainBody.md)
 - [AddDomainadminBody](docs/Model/AddDomainadminBody.md)
 - [AddDomainpolicyBody](docs/Model/AddDomainpolicyBody.md)
 - [AddFwdhostBody](docs/Model/AddFwdhostBody.md)
 - [AddMailboxBody](docs/Model/AddMailboxBody.md)
 - [AddOauth2clientBody](docs/Model/AddOauth2clientBody.md)
 - [AddRecipientMapBody](docs/Model/AddRecipientMapBody.md)
 - [AddRelayhostBody](docs/Model/AddRelayhostBody.md)
 - [AddResourceBody](docs/Model/AddResourceBody.md)
 - [AddSyncjobBody](docs/Model/AddSyncjobBody.md)
 - [AddTimeLimitedAliasBody](docs/Model/AddTimeLimitedAliasBody.md)
 - [AddTlspolicymapBody](docs/Model/AddTlspolicymapBody.md)
 - [AddTransportBody](docs/Model/AddTransportBody.md)
 - [Apiv1editaliasAttr](docs/Model/Apiv1editaliasAttr.md)
 - [Apiv1editdaaclAttr](docs/Model/Apiv1editdaaclAttr.md)
 - [Apiv1editdomainAttr](docs/Model/Apiv1editdomainAttr.md)
 - [Apiv1editdomainadminAttr](docs/Model/Apiv1editdomainadminAttr.md)
 - [Apiv1editfail2banAttr](docs/Model/Apiv1editfail2banAttr.md)
 - [Apiv1editmailboxAttr](docs/Model/Apiv1editmailboxAttr.md)
 - [Apiv1editpushoverAttr](docs/Model/Apiv1editpushoverAttr.md)
 - [Apiv1editquarantineNotificationAttr](docs/Model/Apiv1editquarantineNotificationAttr.md)
 - [Apiv1editrlmboxAttr](docs/Model/Apiv1editrlmboxAttr.md)
 - [Apiv1editsyncjobAttr](docs/Model/Apiv1editsyncjobAttr.md)
 - [Apiv1edituseraclAttr](docs/Model/Apiv1edituseraclAttr.md)
 - [DeleteApppasswdBody](docs/Model/DeleteApppasswdBody.md)
 - [DeleteBccBody](docs/Model/DeleteBccBody.md)
 - [DeleteDomainBody](docs/Model/DeleteDomainBody.md)
 - [DeleteDomainadminBody](docs/Model/DeleteDomainadminBody.md)
 - [DeleteDomainpolicyBody](docs/Model/DeleteDomainpolicyBody.md)
 - [DeleteFwdhostBody](docs/Model/DeleteFwdhostBody.md)
 - [DeleteMailboxBody](docs/Model/DeleteMailboxBody.md)
 - [DeleteMailqBody](docs/Model/DeleteMailqBody.md)
 - [DeleteOauth2clientBody](docs/Model/DeleteOauth2clientBody.md)
 - [DeleteQitemBody](docs/Model/DeleteQitemBody.md)
 - [DeleteRecipientMapBody](docs/Model/DeleteRecipientMapBody.md)
 - [DeleteRelayhostBody](docs/Model/DeleteRelayhostBody.md)
 - [DeleteResourceBody](docs/Model/DeleteResourceBody.md)
 - [DeleteSyncjobBody](docs/Model/DeleteSyncjobBody.md)
 - [DeleteTlspolicymapBody](docs/Model/DeleteTlspolicymapBody.md)
 - [DeleteTransportBody](docs/Model/DeleteTransportBody.md)
 - [EditAliasBody](docs/Model/EditAliasBody.md)
 - [EditDaaclBody](docs/Model/EditDaaclBody.md)
 - [EditDomainBody](docs/Model/EditDomainBody.md)
 - [EditDomainadminBody](docs/Model/EditDomainadminBody.md)
 - [EditFail2banBody](docs/Model/EditFail2banBody.md)
 - [EditMailboxBody](docs/Model/EditMailboxBody.md)
 - [EditMailqBody](docs/Model/EditMailqBody.md)
 - [EditPushoverBody](docs/Model/EditPushoverBody.md)
 - [EditQuarantineNotificationBody](docs/Model/EditQuarantineNotificationBody.md)
 - [EditRldomainBody](docs/Model/EditRldomainBody.md)
 - [EditRlmboxBody](docs/Model/EditRlmboxBody.md)
 - [EditSyncjobBody](docs/Model/EditSyncjobBody.md)
 - [EditUseraclBody](docs/Model/EditUseraclBody.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [TagDomainBody](docs/Model/TagDomainBody.md)
 - [TagMailboxBody](docs/Model/TagMailboxBody.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Author


