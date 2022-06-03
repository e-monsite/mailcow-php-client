# MailCow\AddressRewritingApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBCCMap()**](AddressRewritingApi.md#createBCCMap) | **POST** /api/v1/add/bcc | Create BCC Map
[**createRecipientMap()**](AddressRewritingApi.md#createRecipientMap) | **POST** /api/v1/add/recipient_map | Create Recipient Map
[**deleteBCCMap()**](AddressRewritingApi.md#deleteBCCMap) | **POST** /api/v1/delete/bcc | Delete BCC Map
[**deleteRecipientMap()**](AddressRewritingApi.md#deleteRecipientMap) | **POST** /api/v1/delete/recipient_map | Delete Recipient Map
[**getBCCMap()**](AddressRewritingApi.md#getBCCMap) | **GET** /api/v1/get/bcc/{id} | Get BCC Map
[**getRecipientMap()**](AddressRewritingApi.md#getRecipientMap) | **GET** /api/v1/get/recipient_map/{id} | Get Recipient Map


## `createBCCMap()`

```php
createBCCMap($createBCCMapRequest): \MailCow\Models\CreateAlias200Response
```

Create BCC Map

Using this endpoint you can create a BCC map to forward all mails via a bcc for a given domain.

### Example

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
$createBCCMapRequest = new \MailCow\Models\CreateBCCMapRequest(); // \MailCow\Models\CreateBCCMapRequest

try {
    $result = $apiInstance->createBCCMap($createBCCMapRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->createBCCMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createBCCMapRequest** | [**\MailCow\Models\CreateBCCMapRequest**](../Model/CreateBCCMapRequest.md)|  | [optional]

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

## `createRecipientMap()`

```php
createRecipientMap($createRecipientMapRequest): \MailCow\Models\CreateAlias200Response
```

Create Recipient Map

Using this endpoint you can create a recipient map to forward all mails from one email address to another.

### Example

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
$createRecipientMapRequest = new \MailCow\Models\CreateRecipientMapRequest(); // \MailCow\Models\CreateRecipientMapRequest

try {
    $result = $apiInstance->createRecipientMap($createRecipientMapRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->createRecipientMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createRecipientMapRequest** | [**\MailCow\Models\CreateRecipientMapRequest**](../Model/CreateRecipientMapRequest.md)|  | [optional]

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

## `deleteBCCMap()`

```php
deleteBCCMap($deleteBCCMapRequest): \MailCow\Models\CreateAlias200Response
```

Delete BCC Map

Using this endpoint you can delete a BCC map, for this you have to know its ID. You can get the ID using the GET method.

### Example

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
$deleteBCCMapRequest = new \MailCow\Models\DeleteBCCMapRequest(); // \MailCow\Models\DeleteBCCMapRequest

try {
    $result = $apiInstance->deleteBCCMap($deleteBCCMapRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->deleteBCCMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteBCCMapRequest** | [**\MailCow\Models\DeleteBCCMapRequest**](../Model/DeleteBCCMapRequest.md)|  | [optional]

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

## `deleteRecipientMap()`

```php
deleteRecipientMap($deleteRecipientMapRequest): \MailCow\Models\CreateAlias200Response
```

Delete Recipient Map

Using this endpoint you can delete a recipient map, for this you have to know its ID. You can get the ID using the GET method.

### Example

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
$deleteRecipientMapRequest = new \MailCow\Models\DeleteRecipientMapRequest(); // \MailCow\Models\DeleteRecipientMapRequest

try {
    $result = $apiInstance->deleteRecipientMap($deleteRecipientMapRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->deleteRecipientMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteRecipientMapRequest** | [**\MailCow\Models\DeleteRecipientMapRequest**](../Model/DeleteRecipientMapRequest.md)|  | [optional]

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

## `getBCCMap()`

```php
getBCCMap($id, $xAPIKey)
```

Get BCC Map

Using this endpoint you can get all BCC maps.

### Example

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
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getBCCMap($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->getBCCMap: ', $e->getMessage(), PHP_EOL;
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

## `getRecipientMap()`

```php
getRecipientMap($id, $xAPIKey)
```

Get Recipient Map

Using this endpoint you can get all recipient maps.

### Example

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
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getRecipientMap($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling AddressRewritingApi->getRecipientMap: ', $e->getMessage(), PHP_EOL;
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
