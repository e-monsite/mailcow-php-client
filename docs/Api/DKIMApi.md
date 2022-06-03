# MailCow\DKIMApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDKIMKey()**](DKIMApi.md#deleteDKIMKey) | **POST** /api/v1/delete/dkim | Delete DKIM Key
[**duplicateDKIMKey()**](DKIMApi.md#duplicateDKIMKey) | **POST** /api/v1/add/dkim_duplicate | Duplicate DKIM Key
[**generateDKIMKey()**](DKIMApi.md#generateDKIMKey) | **POST** /api/v1/add/dkim | Generate DKIM Key
[**getDKIMKey()**](DKIMApi.md#getDKIMKey) | **GET** /api/v1/get/dkim/{domain} | Get DKIM Key


## `deleteDKIMKey()`

```php
deleteDKIMKey($requestBody): \MailCow\Models\CreateAlias200Response
```

Delete DKIM Key

Using this endpoint a existing DKIM Key can be deleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\DKIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestBody = array('requestBody_example'); // string[]

try {
    $result = $apiInstance->deleteDKIMKey($requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DKIMApi->deleteDKIMKey: ', $e->getMessage(), PHP_EOL;
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

## `duplicateDKIMKey()`

```php
duplicateDKIMKey($duplicateDKIMKeyRequest): \MailCow\Models\CreateAlias200Response
```

Duplicate DKIM Key

Using this endpoint you can duplicate the DKIM Key of one domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\DKIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$duplicateDKIMKeyRequest = new \MailCow\Models\DuplicateDKIMKeyRequest(); // \MailCow\Models\DuplicateDKIMKeyRequest

try {
    $result = $apiInstance->duplicateDKIMKey($duplicateDKIMKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DKIMApi->duplicateDKIMKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **duplicateDKIMKeyRequest** | [**\MailCow\Models\DuplicateDKIMKeyRequest**](../Model/DuplicateDKIMKeyRequest.md)|  | [optional]

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

## `generateDKIMKey()`

```php
generateDKIMKey($generateDKIMKeyRequest): \MailCow\Models\CreateAlias200Response
```

Generate DKIM Key

Using this endpoint you can generate new DKIM keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\DKIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generateDKIMKeyRequest = new \MailCow\Models\GenerateDKIMKeyRequest(); // \MailCow\Models\GenerateDKIMKeyRequest

try {
    $result = $apiInstance->generateDKIMKey($generateDKIMKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DKIMApi->generateDKIMKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateDKIMKeyRequest** | [**\MailCow\Models\GenerateDKIMKeyRequest**](../Model/GenerateDKIMKeyRequest.md)|  | [optional]

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

## `getDKIMKey()`

```php
getDKIMKey($domain, $xAPIKey)
```

Get DKIM Key

Using this endpoint you can get the DKIM public key for a specific domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\DKIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | name of domain
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getDKIMKey($domain, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling DKIMApi->getDKIMKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain |
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
