# MailCow\DomainAntispamPoliciesApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDomainPolicy()**](DomainAntispamPoliciesApi.md#createDomainPolicy) | **POST** /api/v1/add/domain-policy | Create domain policy
[**deleteDomainPolicy()**](DomainAntispamPoliciesApi.md#deleteDomainPolicy) | **POST** /api/v1/delete/domain-policy | Delete domain policy
[**listBlacklistDomainPolicy()**](DomainAntispamPoliciesApi.md#listBlacklistDomainPolicy) | **GET** /api/v1/get/policy_bl_domain/{domain} | List blacklist domain policy
[**listWhitelistDomainPolicy()**](DomainAntispamPoliciesApi.md#listWhitelistDomainPolicy) | **GET** /api/v1/get/policy_wl_domain/{domain} | List whitelist domain policy


## `createDomainPolicy()`

```php
createDomainPolicy($createDomainPolicyRequest): \MailCow\Models\CreateAlias200Response
```

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
$createDomainPolicyRequest = new \MailCow\Models\CreateDomainPolicyRequest(); // \MailCow\Models\CreateDomainPolicyRequest

try {
    $result = $apiInstance->createDomainPolicy($createDomainPolicyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->createDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createDomainPolicyRequest** | [**\MailCow\Models\CreateDomainPolicyRequest**](../Model/CreateDomainPolicyRequest.md)|  | [optional]

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

## `deleteDomainPolicy()`

```php
deleteDomainPolicy($deleteDomainPolicyRequest): \MailCow\Models\CreateAlias200Response
```

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
$deleteDomainPolicyRequest = new \MailCow\Models\DeleteDomainPolicyRequest(); // \MailCow\Models\DeleteDomainPolicyRequest

try {
    $result = $apiInstance->deleteDomainPolicy($deleteDomainPolicyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->deleteDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteDomainPolicyRequest** | [**\MailCow\Models\DeleteDomainPolicyRequest**](../Model/DeleteDomainPolicyRequest.md)|  | [optional]

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

## `listBlacklistDomainPolicy()`

```php
listBlacklistDomainPolicy($domain, $xAPIKey)
```

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
$domain = 'domain_example'; // string | name of domain
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->listBlacklistDomainPolicy($domain, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->listBlacklistDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain |
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

## `listWhitelistDomainPolicy()`

```php
listWhitelistDomainPolicy($domain, $xAPIKey)
```

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
$domain = 'domain_example'; // string | name of domain
$xAPIKey = api-key-string; // string | e.g. api-key-string

try {
    $apiInstance->listWhitelistDomainPolicy($domain, $xAPIKey);
} catch (Exception $e) {
    echo 'Exception when calling DomainAntispamPoliciesApi->listWhitelistDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| name of domain |
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
