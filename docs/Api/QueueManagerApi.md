# MailCow\QueueManagerApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteQueue()**](QueueManagerApi.md#deleteQueue) | **POST** /api/v1/delete/mailq | Delete Queue
[**flushQueue()**](QueueManagerApi.md#flushQueue) | **POST** /api/v1/edit/mailq | Flush Queue
[**getQueue()**](QueueManagerApi.md#getQueue) | **GET** /api/v1/get/mailq/all | Get Queue


## `deleteQueue()`

```php
deleteQueue($deleteQueueRequest)
```

Delete Queue

Using this API you can delete the current mail queue. This will delete all mails in it. This API uses the command: `postsuper -d`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\QueueManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteQueueRequest = new \MailCow\Models\DeleteQueueRequest(); // \MailCow\Models\DeleteQueueRequest

try {
    $apiInstance->deleteQueue($deleteQueueRequest);
} catch (Exception $e) {
    echo 'Exception when calling QueueManagerApi->deleteQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteQueueRequest** | [**\MailCow\Models\DeleteQueueRequest**](../Model/DeleteQueueRequest.md)|  | [optional]

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

## `flushQueue()`

```php
flushQueue($flushQueueRequest)
```

Flush Queue

Using this API you can flush the current mail queue. This will try to deliver all mails currently in it. This API uses the command: `postqueue -f`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\QueueManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flushQueueRequest = new \MailCow\Models\FlushQueueRequest(); // \MailCow\Models\FlushQueueRequest

try {
    $apiInstance->flushQueue($flushQueueRequest);
} catch (Exception $e) {
    echo 'Exception when calling QueueManagerApi->flushQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flushQueueRequest** | [**\MailCow\Models\FlushQueueRequest**](../Model/FlushQueueRequest.md)|  | [optional]

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

## `getQueue()`

```php
getQueue()
```

Get Queue

Get the current mail queue and everything it contains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\QueueManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getQueue();
} catch (Exception $e) {
    echo 'Exception when calling QueueManagerApi->getQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
