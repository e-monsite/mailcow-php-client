# MailCow\OutgoingTLSPolicyMapOverridesApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTLSPolicyMap**](OutgoingTLSPolicyMapOverridesApi.md#createtlspolicymap) | **POST** /api/v1/add/tls-policy-map | Create TLS Policy Map
[**deleteTLSPolicyMap**](OutgoingTLSPolicyMapOverridesApi.md#deletetlspolicymap) | **POST** /api/v1/delete/tls-policy-map | Delete TLS Policy Map
[**getTLSPolicyMap**](OutgoingTLSPolicyMapOverridesApi.md#gettlspolicymap) | **GET** /api/v1/get/tls-policy-map/{id} | Get TLS Policy Map

# **createTLSPolicyMap**
> \MailCow\Models\InlineResponse200 createTLSPolicyMap($body)

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
$body = new \MailCow\Models\AddTlspolicymapBody(); // \MailCow\Models\AddTlspolicymapBody | 

try {
    $result = $apiInstance->createTLSPolicyMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutgoingTLSPolicyMapOverridesApi->createTLSPolicyMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\AddTlspolicymapBody**](../Model/AddTlspolicymapBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTLSPolicyMap**
> \MailCow\Models\InlineResponse200 deleteTLSPolicyMap($body)

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
$body = new \MailCow\Models\DeleteTlspolicymapBody(); // \MailCow\Models\DeleteTlspolicymapBody | 

try {
    $result = $apiInstance->deleteTLSPolicyMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutgoingTLSPolicyMapOverridesApi->deleteTLSPolicyMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\DeleteTlspolicymapBody**](../Model/DeleteTlspolicymapBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTLSPolicyMap**
> getTLSPolicyMap($id, $x_api_key)

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
$id = "id_example"; // string | id of entry you want to get
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getTLSPolicyMap($id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling OutgoingTLSPolicyMapOverridesApi->getTLSPolicyMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of entry you want to get |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

