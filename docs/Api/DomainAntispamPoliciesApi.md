# MailCow\DomainAntispamPoliciesApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDomainPolicy**](DomainAntispamPoliciesApi.md#createdomainpolicy) | **POST** /api/v1/add/domain-policy | Create domain policy
[**deleteDomainPolicy**](DomainAntispamPoliciesApi.md#deletedomainpolicy) | **POST** /api/v1/delete/domain-policy | Delete domain policy
[**listBlacklistDomainPolicy**](DomainAntispamPoliciesApi.md#listblacklistdomainpolicy) | **GET** /api/v1/get/policy_bl_domain/{domain} | List blacklist domain policy
[**listWhitelistDomainPolicy**](DomainAntispamPoliciesApi.md#listwhitelistdomainpolicy) | **GET** /api/v1/get/policy_wl_domain/{domain} | List whitelist domain policy

# **createDomainPolicy**
> \MailCow\Models\InlineResponse200 createDomainPolicy($body)

Create domain policy

You may create your own domain policy using this action. It takes a JSON object containing a domain informations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAntispamPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\AddDomainpolicyBody(); // \MailCow\Models\AddDomainpolicyBody | 

try {
    $result = $apiInstance->createDomainPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->createDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\AddDomainpolicyBody**](../Model/AddDomainpolicyBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDomainPolicy**
> \MailCow\Models\InlineResponse200 deleteDomainPolicy($body)

Delete domain policy

You can delete one o more domain policies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAntispamPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\DeleteDomainpolicyBody(); // \MailCow\Models\DeleteDomainpolicyBody | 

try {
    $result = $apiInstance->deleteDomainPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->deleteDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\DeleteDomainpolicyBody**](../Model/DeleteDomainpolicyBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBlacklistDomainPolicy**
> listBlacklistDomainPolicy($domain, $x_api_key)

List blacklist domain policy

You can list all blacklist policies per domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAntispamPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = "domain_example"; // string | name of domain
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->listBlacklistDomainPolicy($domain, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->listBlacklistDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWhitelistDomainPolicy**
> listWhitelistDomainPolicy($domain, $x_api_key)

List whitelist domain policy

You can list all whitelist policies per domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAntispamPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = "domain_example"; // string | name of domain
$x_api_key = "x_api_key_example"; // string | e.g. api-key-string

try {
    $apiInstance->listWhitelistDomainPolicy($domain, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->listWhitelistDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain |
 **x_api_key** | **string**| e.g. api-key-string | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

