# MailCow\LogsApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getACMELogs**](LogsApi.md#getacmelogs) | **GET** /api/v1/get/logs/acme/{count} | Get ACME logs
[**getApiLogs**](LogsApi.md#getapilogs) | **GET** /api/v1/get/logs/api/{count} | Get Api logs
[**getAutodiscoverLogs**](LogsApi.md#getautodiscoverlogs) | **GET** /api/v1/get/logs/autodiscover/{count} | Get Autodiscover logs
[**getDovecotLogs**](LogsApi.md#getdovecotlogs) | **GET** /api/v1/get/logs/dovecot/{count} | Get Dovecot logs
[**getNetfilterLogs**](LogsApi.md#getnetfilterlogs) | **GET** /api/v1/get/logs/netfilter/{count} | Get Netfilter logs
[**getPostfixLogs**](LogsApi.md#getpostfixlogs) | **GET** /api/v1/get/logs/postfix/{count} | Get Postfix logs
[**getRatelimitLogs**](LogsApi.md#getratelimitlogs) | **GET** /api/v1/get/logs/ratelimited/{count} | Get Ratelimit logs
[**getRspamdLogs**](LogsApi.md#getrspamdlogs) | **GET** /api/v1/get/logs/rspamd-history/{count} | Get Rspamd logs
[**getSOGoLogs**](LogsApi.md#getsogologs) | **GET** /api/v1/get/logs/sogo/{count} | Get SOGo logs
[**getWatchdogLogs**](LogsApi.md#getwatchdoglogs) | **GET** /api/v1/get/logs/watchdog/{count} | Get Watchdog logs

# **getACMELogs**
> getACMELogs($count, $x_api_key)

Get ACME logs

This Api endpoint lists all ACME logs from issued Lets Enctypts certificates. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getACMELogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getACMELogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiLogs**
> getApiLogs($count, $x_api_key)

Get Api logs

This Api endpoint lists all Api logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getApiLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getApiLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutodiscoverLogs**
> getAutodiscoverLogs($count, $x_api_key)

Get Autodiscover logs

This Api endpoint lists all Autodiscover logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getAutodiscoverLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getAutodiscoverLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDovecotLogs**
> getDovecotLogs($count, $x_api_key)

Get Dovecot logs

This Api endpoint lists all Dovecot logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getDovecotLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getDovecotLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetfilterLogs**
> getNetfilterLogs($count, $x_api_key)

Get Netfilter logs

This Api endpoint lists all Netfilter logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getNetfilterLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getNetfilterLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostfixLogs**
> getPostfixLogs($count, $x_api_key)

Get Postfix logs

This Api endpoint lists all Postfix logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getPostfixLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getPostfixLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRatelimitLogs**
> getRatelimitLogs($count, $x_api_key)

Get Ratelimit logs

This Api endpoint lists all Ratelimit logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getRatelimitLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getRatelimitLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRspamdLogs**
> getRspamdLogs($count, $x_api_key)

Get Rspamd logs

This Api endpoint lists all Rspamd logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getRspamdLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getRspamdLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSOGoLogs**
> getSOGoLogs($count, $x_api_key)

Get SOGo logs

This Api endpoint lists all SOGo logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getSOGoLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getSOGoLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWatchdogLogs**
> getWatchdogLogs($count, $x_api_key)

Get Watchdog logs

This Api endpoint lists all Watchdog logs. Tip: You can limit how many logs you want to get by using `/<count>` at the end of the api url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 1.2; // float | Number of logs to return
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getWatchdogLogs($count, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getWatchdogLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

