# MailCow\LogsApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getACMELogs()**](LogsApi.md#getACMELogs) | **GET** /api/v1/get/logs/acme/{count} | Get ACME logs
[**getApiLogs()**](LogsApi.md#getApiLogs) | **GET** /api/v1/get/logs/api/{count} | Get Api logs
[**getAutodiscoverLogs()**](LogsApi.md#getAutodiscoverLogs) | **GET** /api/v1/get/logs/autodiscover/{count} | Get Autodiscover logs
[**getDovecotLogs()**](LogsApi.md#getDovecotLogs) | **GET** /api/v1/get/logs/dovecot/{count} | Get Dovecot logs
[**getNetfilterLogs()**](LogsApi.md#getNetfilterLogs) | **GET** /api/v1/get/logs/netfilter/{count} | Get Netfilter logs
[**getPostfixLogs()**](LogsApi.md#getPostfixLogs) | **GET** /api/v1/get/logs/postfix/{count} | Get Postfix logs
[**getRatelimitLogs()**](LogsApi.md#getRatelimitLogs) | **GET** /api/v1/get/logs/ratelimited/{count} | Get Ratelimit logs
[**getRspamdLogs()**](LogsApi.md#getRspamdLogs) | **GET** /api/v1/get/logs/rspamd-history/{count} | Get Rspamd logs
[**getSOGoLogs()**](LogsApi.md#getSOGoLogs) | **GET** /api/v1/get/logs/sogo/{count} | Get SOGo logs
[**getWatchdogLogs()**](LogsApi.md#getWatchdogLogs) | **GET** /api/v1/get/logs/watchdog/{count} | Get Watchdog logs


## `getACMELogs()`

```php
getACMELogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getACMELogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getACMELogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getApiLogs()`

```php
getApiLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getApiLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getApiLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getAutodiscoverLogs()`

```php
getAutodiscoverLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getAutodiscoverLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getAutodiscoverLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getDovecotLogs()`

```php
getDovecotLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getDovecotLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getDovecotLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getNetfilterLogs()`

```php
getNetfilterLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getNetfilterLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getNetfilterLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getPostfixLogs()`

```php
getPostfixLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getPostfixLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getPostfixLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getRatelimitLogs()`

```php
getRatelimitLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getRatelimitLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getRatelimitLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getRspamdLogs()`

```php
getRspamdLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getRspamdLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getRspamdLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getSOGoLogs()`

```php
getSOGoLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getSOGoLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getSOGoLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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

## `getWatchdogLogs()`

```php
getWatchdogLogs($count, $xAPIKey)
```

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
$count = 3.4; // float | Number of logs to return
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->getWatchdogLogs($count, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getWatchdogLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of logs to return |
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
