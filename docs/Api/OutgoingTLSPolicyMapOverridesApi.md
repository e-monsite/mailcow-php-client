# MailCow\OutgoingTLSPolicyMapOverridesApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTLSPolicyMap()**](OutgoingTLSPolicyMapOverridesApi.md#createTLSPolicyMap) | **POST** /api/v1/add/tls-policy-map | Create TLS Policy Map
[**deleteTLSPolicyMap()**](OutgoingTLSPolicyMapOverridesApi.md#deleteTLSPolicyMap) | **POST** /api/v1/delete/tls-policy-map | Delete TLS Policy Map
[**getTLSPolicyMap()**](OutgoingTLSPolicyMapOverridesApi.md#getTLSPolicyMap) | **GET** /api/v1/get/tls-policy-map/{id} | Get TLS Policy Map


## `createTLSPolicyMap()`

```php
createTLSPolicyMap($createTLSPolicyMapRequest): \MailCow\Models\CreateAlias200Response
```

Create TLS Policy Map

Using this endpoint you can create a TLS policy map override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\OutgoingTLSPolicyMapOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTLSPolicyMapRequest = new \MailCow\Models\CreateTLSPolicyMapRequest(); // \MailCow\Models\CreateTLSPolicyMapRequest

try {
    $result = $apiInstance->createTLSPolicyMap($createTLSPolicyMapRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutgoingTLSPolicyMapOverridesApi->createTLSPolicyMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createTLSPolicyMapRequest** | [**\MailCow\Models\CreateTLSPolicyMapRequest**](../Model/CreateTLSPolicyMapRequest.md)|  | [optional]

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

## `deleteTLSPolicyMap()`

```php
deleteTLSPolicyMap($deleteTLSPolicyMapRequest): \MailCow\Models\CreateAlias200Response
```

Delete TLS Policy Map

Using this endpoint you can delete a TLS Policy Map, for this you have to know its ID. You can get the ID using the GET method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\OutgoingTLSPolicyMapOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteTLSPolicyMapRequest = new \MailCow\Models\DeleteTLSPolicyMapRequest(); // \MailCow\Models\DeleteTLSPolicyMapRequest

try {
    $result = $apiInstance->deleteTLSPolicyMap($deleteTLSPolicyMapRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutgoingTLSPolicyMapOverridesApi->deleteTLSPolicyMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteTLSPolicyMapRequest** | [**\MailCow\Models\DeleteTLSPolicyMapRequest**](../Model/DeleteTLSPolicyMapRequest.md)|  | [optional]

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

## `getTLSPolicyMap()`

```php
getTLSPolicyMap($id, $xAPIKey)
```

Get TLS Policy Map

Using this endpoint you can get all TLS policy map override maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\OutgoingTLSPolicyMapOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = all; // string | id of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getTLSPolicyMap($id, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling OutgoingTLSPolicyMapOverridesApi->getTLSPolicyMap: ', $e->getMessage(), PHP_EOL;
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
