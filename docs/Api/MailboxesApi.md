# MailCow\MailboxesApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMailbox()**](MailboxesApi.md#createMailbox) | **POST** /api/v1/add/mailbox | Create mailbox
[**deleteMailbox()**](MailboxesApi.md#deleteMailbox) | **POST** /api/v1/delete/mailbox | Delete mailbox
[**deleteMailboxTags()**](MailboxesApi.md#deleteMailboxTags) | **POST** /api/v1/delete/mailbox/tag/{mailbox} | Delete mailbox tags
[**editMailboxSpamFilterScore()**](MailboxesApi.md#editMailboxSpamFilterScore) | **POST** /api/v1/edit/spam-score/ | Edit mailbox spam filter score
[**getMailboxes()**](MailboxesApi.md#getMailboxes) | **GET** /api/v1/get/mailbox/{id} | Get mailboxes
[**quarantineNotifications()**](MailboxesApi.md#quarantineNotifications) | **POST** /api/v1/edit/quarantine_notification | Quarantine Notifications
[**updateMailbox()**](MailboxesApi.md#updateMailbox) | **POST** /api/v1/edit/mailbox | Update mailbox
[**updateMailboxACL()**](MailboxesApi.md#updateMailboxACL) | **POST** /api/v1/edit/user-acl | Update mailbox ACL
[**updatePushoverSettings()**](MailboxesApi.md#updatePushoverSettings) | **POST** /api/v1/edit/pushover | Update Pushover settings


## `createMailbox()`

```php
createMailbox($createMailboxRequest): \MailCow\Models\CreateAlias200Response
```

Create mailbox

You may create your own mailbox using this action. It takes a JSON object containing a domain informations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createMailboxRequest = new \MailCow\Models\CreateMailboxRequest(); // \MailCow\Models\CreateMailboxRequest

try {
    $result = $apiInstance->createMailbox($createMailboxRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->createMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createMailboxRequest** | [**\MailCow\Models\CreateMailboxRequest**](../Model/CreateMailboxRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMailbox()`

```php
deleteMailbox($deleteMailboxRequest): \MailCow\Models\CreateAlias200Response
```

Delete mailbox

You can delete one or more mailboxes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteMailboxRequest = new \MailCow\Models\DeleteMailboxRequest(); // \MailCow\Models\DeleteMailboxRequest

try {
    $result = $apiInstance->deleteMailbox($deleteMailboxRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->deleteMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteMailboxRequest** | [**\MailCow\Models\DeleteMailboxRequest**](../Model/DeleteMailboxRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMailboxTags()`

```php
deleteMailboxTags($mailbox, $deleteMailboxTagsRequest): \MailCow\Models\CreateAlias200Response
```

Delete mailbox tags

You can delete one or more mailbox tags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = info@domain.tld; // string | name of mailbox
$deleteMailboxTagsRequest = new \MailCow\Models\DeleteMailboxTagsRequest(); // \MailCow\Models\DeleteMailboxTagsRequest

try {
    $result = $apiInstance->deleteMailboxTags($mailbox, $deleteMailboxTagsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->deleteMailboxTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | **string**| name of mailbox |
 **deleteMailboxTagsRequest** | [**\MailCow\Models\DeleteMailboxTagsRequest**](../Model/DeleteMailboxTagsRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editMailboxSpamFilterScore()`

```php
editMailboxSpamFilterScore($body): \MailCow\Models\CreateAlias200Response
```

Edit mailbox spam filter score

Using this endpoint you can edit the spam filter score for a certain mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = NULL; // mixed

try {
    $result = $apiInstance->editMailboxSpamFilterScore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->editMailboxSpamFilterScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **mixed**|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxes()`

```php
getMailboxes($id, $tags, $xAPIKey)
```

Get mailboxes

You can list all mailboxes existing in system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = all; // string | id of entry you want to get
$tags = tag1,tag2; // string | comma seperated list of tags to filter by
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getMailboxes($id, $tags, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->getMailboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of entry you want to get |
 **tags** | **string**| comma seperated list of tags to filter by | [optional]
 **xAPIKey** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quarantineNotifications()`

```php
quarantineNotifications($quarantineNotificationsRequest)
```

Quarantine Notifications

You can update one or more mailboxes per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quarantineNotificationsRequest = new \MailCow\Models\QuarantineNotificationsRequest(); // \MailCow\Models\QuarantineNotificationsRequest

try {
    $apiInstance->quarantineNotifications($quarantineNotificationsRequest);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->quarantineNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quarantineNotificationsRequest** | [**\MailCow\Models\QuarantineNotificationsRequest**](../Model/QuarantineNotificationsRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMailbox()`

```php
updateMailbox($updateMailboxRequest): \MailCow\Models\CreateAlias200Response
```

Update mailbox

You can update one or more mailboxes per request. You can also send just attributes you want to change

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateMailboxRequest = new \MailCow\Models\UpdateMailboxRequest(); // \MailCow\Models\UpdateMailboxRequest

try {
    $result = $apiInstance->updateMailbox($updateMailboxRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->updateMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateMailboxRequest** | [**\MailCow\Models\UpdateMailboxRequest**](../Model/UpdateMailboxRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMailboxACL()`

```php
updateMailboxACL($updateMailboxACLRequest): \MailCow\Models\CreateAlias200Response
```

Update mailbox ACL

Using this endpoints its possible to update the ACL's for mailboxes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateMailboxACLRequest = new \MailCow\Models\UpdateMailboxACLRequest(); // \MailCow\Models\UpdateMailboxACLRequest

try {
    $result = $apiInstance->updateMailboxACL($updateMailboxACLRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->updateMailboxACL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateMailboxACLRequest** | [**\MailCow\Models\UpdateMailboxACLRequest**](../Model/UpdateMailboxACLRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePushoverSettings()`

```php
updatePushoverSettings($updatePushoverSettingsRequest): \MailCow\Models\CreateAlias200Response
```

Update Pushover settings

Using this endpoint it is possible to update the pushover settings for mailboxes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatePushoverSettingsRequest = new \MailCow\Models\UpdatePushoverSettingsRequest(); // \MailCow\Models\UpdatePushoverSettingsRequest

try {
    $result = $apiInstance->updatePushoverSettings($updatePushoverSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->updatePushoverSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updatePushoverSettingsRequest** | [**\MailCow\Models\UpdatePushoverSettingsRequest**](../Model/UpdatePushoverSettingsRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
