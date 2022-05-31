# MailCow\RatelimitsApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editDomainRatelimits**](RatelimitsApi.md#editdomainratelimits) | **POST** /api/v1/edit/rl-domain/ | Edit domain ratelimits
[**editMailboxRatelimits**](RatelimitsApi.md#editmailboxratelimits) | **POST** /api/v1/edit/rl-mbox/ | Edit mailbox ratelimits
[**getDomainRatelimits**](RatelimitsApi.md#getdomainratelimits) | **GET** /api/v1/get/rl-domain/{domain} | Get domain ratelimits
[**getMailboxRatelimits**](RatelimitsApi.md#getmailboxratelimits) | **GET** /api/v1/get/rl-mbox/{mailbox} | Get mailbox ratelimits

# **editDomainRatelimits**
> \MailCow\Models\InlineResponse200 editDomainRatelimits($body)

Edit domain ratelimits

Using this endpoint you can edit the ratelimits for a certain domains.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\EditRldomainBody(); // \MailCow\Models\EditRldomainBody | 

try {
    $result = $apiInstance->editDomainRatelimits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->editDomainRatelimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\EditRldomainBody**](../Model/EditRldomainBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editMailboxRatelimits**
> \MailCow\Models\InlineResponse200 editMailboxRatelimits($body)

Edit mailbox ratelimits

Using this endpoint you can edit the ratelimits for a certain mailbox.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\EditRlmboxBody(); // \MailCow\Models\EditRlmboxBody | 

try {
    $result = $apiInstance->editMailboxRatelimits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->editMailboxRatelimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\EditRlmboxBody**](../Model/EditRlmboxBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomainRatelimits**
> getDomainRatelimits($domain, $x_api_key)

Get domain ratelimits

Using this endpoint you can get the ratelimits for a certain domains. You can use all for all domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = "domain_example"; // string | name of domain or all
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getDomainRatelimits($domain, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->getDomainRatelimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain or all |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxRatelimits**
> getMailboxRatelimits($mailbox, $x_api_key)

Get mailbox ratelimits

Using this endpoint you can get the ratelimits for a certain mailbox. You can use all for all mailboxes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\RatelimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "mailbox_example"; // string | name of mailbox or all
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getMailboxRatelimits($mailbox, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling RatelimitsApi->getMailboxRatelimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | **string**| name of mailbox or all |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

