# MailCow\Fail2BanApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editFail2Ban**](Fail2BanApi.md#editfail2ban) | **POST** /api/v1/edit/fail2ban | Edit Fail2Ban
[**getFail2BanConfig**](Fail2BanApi.md#getfail2banconfig) | **GET** /api/v1/get/fail2ban | Get Fail2Ban Config

# **editFail2Ban**
> \MailCow\Models\InlineResponse200 editFail2Ban($body)

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
$body = new \MailCow\Models\EditFail2banBody(); // \MailCow\Models\EditFail2banBody | 

try {
    $result = $apiInstance->editFail2Ban($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Fail2BanApi->editFail2Ban: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\EditFail2banBody**](../Model/EditFail2banBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFail2BanConfig**
> getFail2BanConfig()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

