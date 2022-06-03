# MailCow\SyncJobsApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSyncJob()**](SyncJobsApi.md#createSyncJob) | **POST** /api/v1/add/syncjob | Create sync job
[**deleteSyncJob()**](SyncJobsApi.md#deleteSyncJob) | **POST** /api/v1/delete/syncjob | Delete sync job
[**getSyncJobs()**](SyncJobsApi.md#getSyncJobs) | **GET** /api/v1/get/syncjobs/all/no_log | Get sync jobs
[**updateSyncJob()**](SyncJobsApi.md#updateSyncJob) | **POST** /api/v1/edit/syncjob | Update sync job


## `createSyncJob()`

```php
createSyncJob($createSyncJobRequest): \MailCow\Models\CreateAlias200Response
```

Create sync job

You can create new sync job using this action. It takes a JSON object containing a domain informations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\SyncJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSyncJobRequest = new \MailCow\Models\CreateSyncJobRequest(); // \MailCow\Models\CreateSyncJobRequest

try {
    $result = $apiInstance->createSyncJob($createSyncJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncJobsApi->createSyncJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSyncJobRequest** | [**\MailCow\Models\CreateSyncJobRequest**](../Model/CreateSyncJobRequest.md)|  | [optional]

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

## `deleteSyncJob()`

```php
deleteSyncJob($deleteSyncJobRequest): \MailCow\Models\CreateAlias200Response
```

Delete sync job

You can delete one or more sync jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\SyncJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteSyncJobRequest = new \MailCow\Models\DeleteSyncJobRequest(); // \MailCow\Models\DeleteSyncJobRequest

try {
    $result = $apiInstance->deleteSyncJob($deleteSyncJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncJobsApi->deleteSyncJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteSyncJobRequest** | [**\MailCow\Models\DeleteSyncJobRequest**](../Model/DeleteSyncJobRequest.md)|  | [optional]

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

## `getSyncJobs()`

```php
getSyncJobs()
```

Get sync jobs

You can list all syn jobs existing in system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\SyncJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getSyncJobs();
} catch (Exception $e) {
    echo 'Exception when calling SyncJobsApi->getSyncJobs: ', $e->getMessage(), PHP_EOL;
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

## `updateSyncJob()`

```php
updateSyncJob($updateSyncJobRequest): \MailCow\Models\CreateAlias200Response
```

Update sync job

You can update one or more sync jobs per request. You can also send just attributes you want to change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new MailCow\Api\SyncJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateSyncJobRequest = new \MailCow\Models\UpdateSyncJobRequest(); // \MailCow\Models\UpdateSyncJobRequest

try {
    $result = $apiInstance->updateSyncJob($updateSyncJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncJobsApi->updateSyncJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateSyncJobRequest** | [**\MailCow\Models\UpdateSyncJobRequest**](../Model/UpdateSyncJobRequest.md)|  | [optional]

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
