# MailCow\OAuthClientsApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOAuthClient**](OAuthClientsApi.md#createoauthclient) | **POST** /api/v1/add/oauth2-client | Create oAuth Client
[**deleteOAuthClient**](OAuthClientsApi.md#deleteoauthclient) | **POST** /api/v1/delete/oauth2-client | Delete oAuth Client
[**getOAuthClients**](OAuthClientsApi.md#getoauthclients) | **GET** /api/v1/get/oauth2-client/{id} | Get oAuth Clients

# **createOAuthClient**
> \MailCow\Models\InlineResponse200 createOAuthClient($body)

Create oAuth Client

Using this endpoint you can create a oAuth clients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\AddOauth2clientBody(); // \MailCow\Models\AddOauth2clientBody | 

try {
    $result = $apiInstance->createOAuthClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\AddOauth2clientBody**](../Model/AddOauth2clientBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClient**
> \MailCow\Models\InlineResponse200 deleteOAuthClient($body)

Delete oAuth Client

Using this endpoint you can delete a oAuth client, for this you have to know its ID. You can get the ID using the GET method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\DeleteOauth2clientBody(); // \MailCow\Models\DeleteOauth2clientBody | 

try {
    $result = $apiInstance->deleteOAuthClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\DeleteOauth2clientBody**](../Model/DeleteOauth2clientBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClients**
> getOAuthClients($id, $x_api_key)

Get oAuth Clients

Using this endpoint you can get all oAuth clients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of entry you want to get
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->getOAuthClients($id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClients: ', $e->getMessage(), PHP_EOL;
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

