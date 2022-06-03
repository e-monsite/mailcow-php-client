# MailCow\RatelimitsApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**editDomainRatelimits()**](RatelimitsApi.md#editDomainRatelimits) | **POST** /api/v1/edit/rl-domain/ | Edit domain ratelimits
[**editMailboxRatelimits()**](RatelimitsApi.md#editMailboxRatelimits) | **POST** /api/v1/edit/rl-mbox/ | Edit mailbox ratelimits
[**getDomainRatelimits()**](RatelimitsApi.md#getDomainRatelimits) | **GET** /api/v1/get/rl-domain/{domain} | Get domain ratelimits
[**getMailboxRatelimits()**](RatelimitsApi.md#getMailboxRatelimits) | **GET** /api/v1/get/rl-mbox/{mailbox} | Get mailbox ratelimits


## `editDomainRatelimits()`

```php
editDomainRatelimits($editDomainRatelimitsRequest): \MailCow\Models\CreateAlias200Response
```

Edit domain ratelimits

Using this endpoint you can edit the ratelimits for a certain domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$editDomainRatelimitsRequest = new \MailCow\Models\EditDomainRatelimitsRequest(); // \MailCow\Models\EditDomainRatelimitsRequest

try {
    $result = $apiInstance->editDomainRatelimits($editDomainRatelimitsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->editDomainRatelimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **editDomainRatelimitsRequest** | [**\MailCow\Models\EditDomainRatelimitsRequest**](../Model/EditDomainRatelimitsRequest.md)|  | [optional]

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

## `editMailboxRatelimits()`

```php
editMailboxRatelimits($editMailboxRatelimitsRequest): \MailCow\Models\CreateAlias200Response
```

Edit mailbox ratelimits

Using this endpoint you can edit the ratelimits for a certain mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$editMailboxRatelimitsRequest = new \MailCow\Models\EditMailboxRatelimitsRequest(); // \MailCow\Models\EditMailboxRatelimitsRequest

try {
    $result = $apiInstance->editMailboxRatelimits($editMailboxRatelimitsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->editMailboxRatelimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **editMailboxRatelimitsRequest** | [**\MailCow\Models\EditMailboxRatelimitsRequest**](../Model/EditMailboxRatelimitsRequest.md)|  | [optional]

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

## `getDomainRatelimits()`

```php
getDomainRatelimits($domain, $xAPIKey)
```

Get domain ratelimits

Using this endpoint you can get the ratelimits for a certain domains. You can use all for all domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | name of domain or all
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getDomainRatelimits($domain, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->getDomainRatelimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain or all |
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

## `getMailboxRatelimits()`

```php
getMailboxRatelimits($mailbox, $xAPIKey)
```

Get mailbox ratelimits

Using this endpoint you can get the ratelimits for a certain mailbox. You can use all for all mailboxes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | name of mailbox or all
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getMailboxRatelimits($mailbox, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->getMailboxRatelimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | **string**| name of mailbox or all |
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
