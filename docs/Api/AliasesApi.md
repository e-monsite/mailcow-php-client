# MailCow\AliasesApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlias()**](AliasesApi.md#createAlias) | **POST** /api/v1/add/alias | Create alias
[**createTimeLimitedAlias()**](AliasesApi.md#createTimeLimitedAlias) | **POST** /api/v1/add/time_limited_alias | Create time limited alias
[**deleteAlias()**](AliasesApi.md#deleteAlias) | **POST** /api/v1/delete/alias | Delete alias
[**getAliases()**](AliasesApi.md#getAliases) | **GET** /api/v1/get/alias/{id} | Get aliases
[**getTimeLimitedAliases()**](AliasesApi.md#getTimeLimitedAliases) | **GET** /api/v1/get/time_limited_aliases/{mailbox} | Get time limited aliases
[**updateAlias()**](AliasesApi.md#updateAlias) | **POST** /api/v1/edit/alias | Update alias


## `createAlias()`

```php
createAlias($createAliasRequest): \MailCow\Models\CreateAlias200Response
```

Create alias

You may create your own mailbox alias using this action. It takes a JSON object containing a domain informations. Only one `goto*` option can be used, for ex. if you want learn as spam, then send just `goto_spam = 1` in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createAliasRequest = new \MailCow\Models\CreateAliasRequest(); // \MailCow\Models\CreateAliasRequest

try {
    $result = $apiInstance->createAlias($createAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasesApi->createAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createAliasRequest** | [**\MailCow\Models\CreateAliasRequest**](../Model/CreateAliasRequest.md)|  | [optional]

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

## `createTimeLimitedAlias()`

```php
createTimeLimitedAlias($createTimeLimitedAliasRequest): \MailCow\Models\CreateAlias200Response
```

Create time limited alias

You may create a time limited alias using this action. It takes a JSON object containing a domain and mailbox informations. Mailcow will generate a random alias.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTimeLimitedAliasRequest = new \MailCow\Models\CreateTimeLimitedAliasRequest(); // \MailCow\Models\CreateTimeLimitedAliasRequest

try {
    $result = $apiInstance->createTimeLimitedAlias($createTimeLimitedAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasesApi->createTimeLimitedAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createTimeLimitedAliasRequest** | [**\MailCow\Models\CreateTimeLimitedAliasRequest**](../Model/CreateTimeLimitedAliasRequest.md)|  | [optional]

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

## `deleteAlias()`

```php
deleteAlias($requestBody): \MailCow\Models\CreateAlias200Response
```

Delete alias

You can delete one or more aliases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestBody = array('requestBody_example'); // string[]

try {
    $result = $apiInstance->deleteAlias($requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasesApi->deleteAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**string[]**](../Model/string.md)|  | [optional]

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

## `getAliases()`

```php
getAliases($id, $xAPIKey)
```

Get aliases

You can list mailbox aliases existing in system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getAliases($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling AliasesApi->getAliases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of entry you want to get |
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

## `getTimeLimitedAliases()`

```php
getTimeLimitedAliases($mailbox, $xAPIKey)
```

Get time limited aliases

You can list time limited mailbox aliases existing in system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = domain.tld; // string | mailbox you want to get aliasses from
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getTimeLimitedAliases($mailbox, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling AliasesApi->getTimeLimitedAliases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | **string**| mailbox you want to get aliasses from |
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

## `updateAlias()`

```php
updateAlias($updateAliasRequest): \MailCow\Models\CreateAlias200Response
```

Update alias

You can update one or more aliases per request. You can also send just attributes you want to change

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AliasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateAliasRequest = new \MailCow\Models\UpdateAliasRequest(); // \MailCow\Models\UpdateAliasRequest

try {
    $result = $apiInstance->updateAlias($updateAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasesApi->updateAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateAliasRequest** | [**\MailCow\Models\UpdateAliasRequest**](../Model/UpdateAliasRequest.md)|  | [optional]

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
