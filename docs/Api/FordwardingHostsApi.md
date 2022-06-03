# MailCow\FordwardingHostsApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addForwardHost()**](FordwardingHostsApi.md#addForwardHost) | **POST** /api/v1/add/fwdhost | Add Forward Host
[**deleteForwardHost()**](FordwardingHostsApi.md#deleteForwardHost) | **POST** /api/v1/delete/fwdhost | Delete Forward Host
[**getForwardingHosts()**](FordwardingHostsApi.md#getForwardingHosts) | **GET** /api/v1/get/fwdhost/all | Get Forwarding Hosts


## `addForwardHost()`

```php
addForwardHost($addForwardHostRequest): \MailCow\Models\CreateAlias200Response
```

Add Forward Host

Add a new Forwarding host to mailcow. You can chose to enable or disable spam filtering of incoming emails by specifing `filter_spam` 0 = inactive, 1 = active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\FordwardingHostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addForwardHostRequest = new \MailCow\Models\AddForwardHostRequest(); // \MailCow\Models\AddForwardHostRequest

try {
    $result = $apiInstance->addForwardHost($addForwardHostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FordwardingHostsApi->addForwardHost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addForwardHostRequest** | [**\MailCow\Models\AddForwardHostRequest**](../Model/AddForwardHostRequest.md)|  | [optional]

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

## `deleteForwardHost()`

```php
deleteForwardHost($deleteForwardHostRequest): \MailCow\Models\CreateAlias200Response
```

Delete Forward Host

Using this endpoint you can delete a forwarding host, in order to do so you need to know the IP of the host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\FordwardingHostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteForwardHostRequest = new \MailCow\Models\DeleteForwardHostRequest(); // \MailCow\Models\DeleteForwardHostRequest

try {
    $result = $apiInstance->deleteForwardHost($deleteForwardHostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FordwardingHostsApi->deleteForwardHost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteForwardHostRequest** | [**\MailCow\Models\DeleteForwardHostRequest**](../Model/DeleteForwardHostRequest.md)|  | [optional]

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

## `getForwardingHosts()`

```php
getForwardingHosts()
```

Get Forwarding Hosts

You can list all Forwarding Hosts in your mailcow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\FordwardingHostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getForwardingHosts();
} catch (Exception $e) {
    echo 'Exception when calling FordwardingHostsApi->getForwardingHosts: ', $e->getMessage(), PHP_EOL;
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
