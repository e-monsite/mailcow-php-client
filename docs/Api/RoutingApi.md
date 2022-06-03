# MailCow\RoutingApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSenderDependentTransports()**](RoutingApi.md#createSenderDependentTransports) | **POST** /api/v1/add/relayhost | Create Sender-Dependent Transports
[**createTransportMaps()**](RoutingApi.md#createTransportMaps) | **POST** /api/v1/add/transport | Create Transport Maps
[**deleteSenderDependentTransports()**](RoutingApi.md#deleteSenderDependentTransports) | **POST** /api/v1/delete/relayhost | Delete Sender-Dependent Transports
[**deleteTransportMaps()**](RoutingApi.md#deleteTransportMaps) | **POST** /api/v1/delete/transport | Delete Transport Maps
[**getSenderDependentTransports()**](RoutingApi.md#getSenderDependentTransports) | **GET** /api/v1/get/relayhost/{id} | Get Sender-Dependent Transports
[**getTransportMaps()**](RoutingApi.md#getTransportMaps) | **GET** /api/v1/get/transport/{id} | Get Transport Maps


## `createSenderDependentTransports()`

```php
createSenderDependentTransports($createSenderDependentTransportsRequest): \MailCow\Models\CreateAlias200Response
```

Create Sender-Dependent Transports

Using this endpoint you can create Sender-Dependent Transports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSenderDependentTransportsRequest = new \MailCow\Models\CreateSenderDependentTransportsRequest(); // \MailCow\Models\CreateSenderDependentTransportsRequest

try {
    $result = $apiInstance->createSenderDependentTransports($createSenderDependentTransportsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createSenderDependentTransports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSenderDependentTransportsRequest** | [**\MailCow\Models\CreateSenderDependentTransportsRequest**](../Model/CreateSenderDependentTransportsRequest.md)|  | [optional]

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

## `createTransportMaps()`

```php
createTransportMaps($createTransportMapsRequest): \MailCow\Models\CreateAlias200Response
```

Create Transport Maps

Using this endpoint you can create Sender-Dependent Transports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTransportMapsRequest = new \MailCow\Models\CreateTransportMapsRequest(); // \MailCow\Models\CreateTransportMapsRequest

try {
    $result = $apiInstance->createTransportMaps($createTransportMapsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createTransportMaps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createTransportMapsRequest** | [**\MailCow\Models\CreateTransportMapsRequest**](../Model/CreateTransportMapsRequest.md)|  | [optional]

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

## `deleteSenderDependentTransports()`

```php
deleteSenderDependentTransports($deleteSenderDependentTransportsRequest): \MailCow\Models\CreateAlias200Response
```

Delete Sender-Dependent Transports

Using this endpoint you can delete a Sender-Dependent Transport, for this you have to know its ID. You can get the ID using the GET method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteSenderDependentTransportsRequest = new \MailCow\Models\DeleteSenderDependentTransportsRequest(); // \MailCow\Models\DeleteSenderDependentTransportsRequest

try {
    $result = $apiInstance->deleteSenderDependentTransports($deleteSenderDependentTransportsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteSenderDependentTransports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteSenderDependentTransportsRequest** | [**\MailCow\Models\DeleteSenderDependentTransportsRequest**](../Model/DeleteSenderDependentTransportsRequest.md)|  | [optional]

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

## `deleteTransportMaps()`

```php
deleteTransportMaps($deleteTransportMapsRequest): \MailCow\Models\CreateAlias200Response
```

Delete Transport Maps

Using this endpoint you can delete a Transport Maps, for this you have to know its ID. You can get the ID using the GET method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteTransportMapsRequest = new \MailCow\Models\DeleteTransportMapsRequest(); // \MailCow\Models\DeleteTransportMapsRequest

try {
    $result = $apiInstance->deleteTransportMaps($deleteTransportMapsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteTransportMaps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteTransportMapsRequest** | [**\MailCow\Models\DeleteTransportMapsRequest**](../Model/DeleteTransportMapsRequest.md)|  | [optional]

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

## `getSenderDependentTransports()`

```php
getSenderDependentTransports($id, $xAPIKey)
```

Get Sender-Dependent Transports

Using this endpoint you can get all Sender-Dependent Transports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getSenderDependentTransports($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getSenderDependentTransports: ', $e->getMessage(), PHP_EOL;
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

## `getTransportMaps()`

```php
getTransportMaps($id, $xAPIKey)
```

Get Transport Maps

Using this endpoint you can get all Transport Maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getTransportMaps($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getTransportMaps: ', $e->getMessage(), PHP_EOL;
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
