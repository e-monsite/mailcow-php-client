# MailCow\OAuthClientsApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOAuthClient()**](OAuthClientsApi.md#createOAuthClient) | **POST** /api/v1/add/oauth2-client | Create oAuth Client
[**deleteOAuthClient()**](OAuthClientsApi.md#deleteOAuthClient) | **POST** /api/v1/delete/oauth2-client | Delete oAuth Client
[**getOAuthClients()**](OAuthClientsApi.md#getOAuthClients) | **GET** /api/v1/get/oauth2-client/{id} | Get oAuth Clients


## `createOAuthClient()`

```php
createOAuthClient($createOAuthClientRequest): \MailCow\Models\CreateAlias200Response
```

Create oAuth Client

Using this endpoint you can create a oAuth clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createOAuthClientRequest = new \MailCow\Models\CreateOAuthClientRequest(); // \MailCow\Models\CreateOAuthClientRequest

try {
    $result = $apiInstance->createOAuthClient($createOAuthClientRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createOAuthClientRequest** | [**\MailCow\Models\CreateOAuthClientRequest**](../Model/CreateOAuthClientRequest.md)|  | [optional]

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

## `deleteOAuthClient()`

```php
deleteOAuthClient($deleteOAuthClientRequest): \MailCow\Models\CreateAlias200Response
```

Delete oAuth Client

Using this endpoint you can delete a oAuth client, for this you have to know its ID. You can get the ID using the GET method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteOAuthClientRequest = new \MailCow\Models\DeleteOAuthClientRequest(); // \MailCow\Models\DeleteOAuthClientRequest

try {
    $result = $apiInstance->deleteOAuthClient($deleteOAuthClientRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteOAuthClientRequest** | [**\MailCow\Models\DeleteOAuthClientRequest**](../Model/DeleteOAuthClientRequest.md)|  | [optional]

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

## `getOAuthClients()`

```php
getOAuthClients($id, $xAPIKey)
```

Get oAuth Clients

Using this endpoint you can get all oAuth clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getOAuthClients($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClients: ', $e->getMessage(), PHP_EOL;
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
