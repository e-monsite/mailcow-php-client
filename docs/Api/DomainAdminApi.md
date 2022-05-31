# MailCow\DomainAdminApi

All URIs are relative to *https://raw.githubusercontent.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDomainAdminUser**](DomainAdminApi.md#createdomainadminuser) | **POST** /api/v1/add/domain-admin | Create Domain Admin user
[**deleteDomainAdmin**](DomainAdminApi.md#deletedomainadmin) | **POST** /api/v1/delete/domain-admin | Delete Domain Admin
[**editDomainAdminACL**](DomainAdminApi.md#editdomainadminacl) | **POST** /api/v1/edit/da-acl | Edit Domain Admin ACL
[**editDomainAdminUser**](DomainAdminApi.md#editdomainadminuser) | **POST** /api/v1/edit/domain-admin | Edit Domain Admin user
[**getDomainAdmins**](DomainAdminApi.md#getdomainadmins) | **GET** /api/v1/get/domain-admin/all | Get Domain Admins

# **createDomainAdminUser**
> \MailCow\Models\InlineResponse200 createDomainAdminUser($body)

Create Domain Admin user

Using this endpoint you can create a new Domain Admin user. This user has full control over a domain, and can create new mailboxes and aliases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\AddDomainadminBody(); // \MailCow\Models\AddDomainadminBody | 

try {
    $result = $apiInstance->createDomainAdminUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->createDomainAdminUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\AddDomainadminBody**](../Model/AddDomainadminBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDomainAdmin**
> \MailCow\Models\InlineResponse200 deleteDomainAdmin($body)

Delete Domain Admin

Using this endpoint a existing Domain Admin user can be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\DeleteDomainadminBody(); // \MailCow\Models\DeleteDomainadminBody | 

try {
    $result = $apiInstance->deleteDomainAdmin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->deleteDomainAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\DeleteDomainadminBody**](../Model/DeleteDomainadminBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDomainAdminACL**
> \MailCow\Models\InlineResponse200 editDomainAdminACL($body)

Edit Domain Admin ACL

Using this endpoint you can edit the ACLs of a Domain Admin user. This user has full control over a domain, and can create new mailboxes and aliases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\EditDaaclBody(); // \MailCow\Models\EditDaaclBody | 

try {
    $result = $apiInstance->editDomainAdminACL($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->editDomainAdminACL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\EditDaaclBody**](../Model/EditDaaclBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDomainAdminUser**
> \MailCow\Models\InlineResponse2001 editDomainAdminUser($body)

Edit Domain Admin user

Using this endpoint you can edit a existing Domain Admin user. This user has full control over a domain, and can create new mailboxes and aliases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MailCow\Models\EditDomainadminBody(); // \MailCow\Models\EditDomainadminBody | 

try {
    $result = $apiInstance->editDomainAdminUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->editDomainAdminUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MailCow\Models\EditDomainadminBody**](../Model/EditDomainadminBody.md)|  | [optional]

### Return type

[**\MailCow\Models\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomainAdmins**
> getDomainAdmins()

Get Domain Admins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = MailCow\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailCow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new MailCow\Api\DomainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getDomainAdmins();
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->getDomainAdmins: ', $e->getMessage(), PHP_EOL;
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

