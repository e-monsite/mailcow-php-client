# MailCow\AppPasswordsApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppPassword()**](AppPasswordsApi.md#createAppPassword) | **POST** /api/v1/add/app-passwd | Create App Password
[**deleteAppPassword()**](AppPasswordsApi.md#deleteAppPassword) | **POST** /api/v1/delete/app-passwd | Delete App Password
[**getAppPassword()**](AppPasswordsApi.md#getAppPassword) | **GET** /api/v1/get/app-passwd/all/{mailbox} | Get App Password


## `createAppPassword()`

```php
createAppPassword($createAppPasswordRequest): \MailCow\Models\CreateAlias200Response
```

Create App Password

Using this endpoint you can create a new app password for a specific mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AppPasswordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createAppPasswordRequest = new \MailCow\Models\CreateAppPasswordRequest(); // \MailCow\Models\CreateAppPasswordRequest

try {
    $result = $apiInstance->createAppPassword($createAppPasswordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPasswordsApi->createAppPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createAppPasswordRequest** | [**\MailCow\Models\CreateAppPasswordRequest**](../Model/CreateAppPasswordRequest.md)|  | [optional]

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

## `deleteAppPassword()`

```php
deleteAppPassword($deleteAppPasswordRequest): \MailCow\Models\CreateAlias200Response
```

Delete App Password

Using this endpoint you can delete a single app password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AppPasswordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteAppPasswordRequest = new \MailCow\Models\DeleteAppPasswordRequest(); // \MailCow\Models\DeleteAppPasswordRequest

try {
    $result = $apiInstance->deleteAppPassword($deleteAppPasswordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPasswordsApi->deleteAppPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteAppPasswordRequest** | [**\MailCow\Models\DeleteAppPasswordRequest**](../Model/DeleteAppPasswordRequest.md)|  | [optional]

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

## `getAppPassword()`

```php
getAppPassword($mailbox, $xAPIKey)
```

Get App Password

Using this endpoint you can get all app passwords from a specific mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\AppPasswordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = hello@mailcow.email; // string | mailbox of entry you want to get
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getAppPassword($mailbox, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling AppPasswordsApi->getAppPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | **string**| mailbox of entry you want to get |
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
