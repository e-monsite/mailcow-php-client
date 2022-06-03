# MailCow\QuarantineApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMailsInQuarantine()**](QuarantineApi.md#deleteMailsInQuarantine) | **POST** /api/v1/delete/qitem | Delete mails in Quarantine
[**getMailsInQuarantine()**](QuarantineApi.md#getMailsInQuarantine) | **GET** /api/v1/get/quarantine/all | Get mails in Quarantine


## `deleteMailsInQuarantine()`

```php
deleteMailsInQuarantine($deleteMailsInQuarantineRequest): \MailCow\Models\CreateAlias200Response
```

Delete mails in Quarantine

Using this endpoint you can delete a email from quarantine, for this you have to know its ID. You can get the ID using the GET method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\QuarantineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteMailsInQuarantineRequest = new \MailCow\Models\DeleteMailsInQuarantineRequest(); // \MailCow\Models\DeleteMailsInQuarantineRequest

try {
    $result = $apiInstance->deleteMailsInQuarantine($deleteMailsInQuarantineRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuarantineApi->deleteMailsInQuarantine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteMailsInQuarantineRequest** | [**\MailCow\Models\DeleteMailsInQuarantineRequest**](../Model/DeleteMailsInQuarantineRequest.md)|  | [optional]

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

## `getMailsInQuarantine()`

```php
getMailsInQuarantine()
```

Get mails in Quarantine

Get all mails that are currently in Quarantine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\QuarantineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getMailsInQuarantine();
} catch (Exception $e) {
    echo 'Exception when calling QuarantineApi->getMailsInQuarantine: ', $e->getMessage(), PHP_EOL;
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
