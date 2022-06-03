# MailCow\Fail2BanApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**editFail2Ban()**](Fail2BanApi.md#editFail2Ban) | **POST** /api/v1/edit/fail2ban | Edit Fail2Ban
[**getFail2BanConfig()**](Fail2BanApi.md#getFail2BanConfig) | **GET** /api/v1/get/fail2ban | Get Fail2Ban Config


## `editFail2Ban()`

```php
editFail2Ban($editFail2BanRequest): \MailCow\Models\CreateAlias200Response
```

Edit Fail2Ban

Using this endpoint you can edit the Fail2Ban config and black or whitelist new ips.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\Fail2BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$editFail2BanRequest = new \MailCow\Models\EditFail2BanRequest(); // \MailCow\Models\EditFail2BanRequest

try {
    $result = $apiInstance->editFail2Ban($editFail2BanRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Fail2BanApi->editFail2Ban: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **editFail2BanRequest** | [**\MailCow\Models\EditFail2BanRequest**](../Model/EditFail2BanRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\CreateAlias200Response**](../Model/CreateAlias200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFail2BanConfig()`

```php
getFail2BanConfig()
```

Get Fail2Ban Config

Gets the current Fail2Ban configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\Fail2BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getFail2BanConfig();
} catch (Exception $e) {
    echo 'Exception when calling Fail2BanApi->getFail2BanConfig: ', $e->getMessage(), PHP_EOL;
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
