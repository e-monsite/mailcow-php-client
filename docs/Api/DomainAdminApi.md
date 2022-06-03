# MailCow\DomainAdminApi

All URIs are relative to https://raw.githubusercontent.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDomainAdminUser()**](DomainAdminApi.md#createDomainAdminUser) | **POST** /api/v1/add/domain-admin | Create Domain Admin user
[**deleteDomainAdmin()**](DomainAdminApi.md#deleteDomainAdmin) | **POST** /api/v1/delete/domain-admin | Delete Domain Admin
[**editDomainAdminACL()**](DomainAdminApi.md#editDomainAdminACL) | **POST** /api/v1/edit/da-acl | Edit Domain Admin ACL
[**editDomainAdminUser()**](DomainAdminApi.md#editDomainAdminUser) | **POST** /api/v1/edit/domain-admin | Edit Domain Admin user
[**getDomainAdmins()**](DomainAdminApi.md#getDomainAdmins) | **GET** /api/v1/get/domain-admin/all | Get Domain Admins


## `createDomainAdminUser()`

```php
createDomainAdminUser($createDomainAdminUserRequest): \MailCow\Models\CreateAlias200Response
```

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
$createDomainAdminUserRequest = new \MailCow\Models\CreateDomainAdminUserRequest(); // \MailCow\Models\CreateDomainAdminUserRequest

try {
    $result = $apiInstance->createDomainAdminUser($createDomainAdminUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->createDomainAdminUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createDomainAdminUserRequest** | [**\MailCow\Models\CreateDomainAdminUserRequest**](../Model/CreateDomainAdminUserRequest.md)|  | [optional]

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

## `deleteDomainAdmin()`

```php
deleteDomainAdmin($deleteDomainAdminRequest): \MailCow\Models\CreateAlias200Response
```

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
$deleteDomainAdminRequest = new \MailCow\Models\DeleteDomainAdminRequest(); // \MailCow\Models\DeleteDomainAdminRequest

try {
    $result = $apiInstance->deleteDomainAdmin($deleteDomainAdminRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->deleteDomainAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteDomainAdminRequest** | [**\MailCow\Models\DeleteDomainAdminRequest**](../Model/DeleteDomainAdminRequest.md)|  | [optional]

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

## `editDomainAdminACL()`

```php
editDomainAdminACL($editDomainAdminACLRequest): \MailCow\Models\CreateAlias200Response
```

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
$editDomainAdminACLRequest = new \MailCow\Models\EditDomainAdminACLRequest(); // \MailCow\Models\EditDomainAdminACLRequest

try {
    $result = $apiInstance->editDomainAdminACL($editDomainAdminACLRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->editDomainAdminACL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **editDomainAdminACLRequest** | [**\MailCow\Models\EditDomainAdminACLRequest**](../Model/EditDomainAdminACLRequest.md)|  | [optional]

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

## `editDomainAdminUser()`

```php
editDomainAdminUser($editDomainAdminUserRequest): \MailCow\Models\EditDomainAdminUser200Response
```

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
$editDomainAdminUserRequest = new \MailCow\Models\EditDomainAdminUserRequest(); // \MailCow\Models\EditDomainAdminUserRequest

try {
    $result = $apiInstance->editDomainAdminUser($editDomainAdminUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAdminApi->editDomainAdminUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **editDomainAdminUserRequest** | [**\MailCow\Models\EditDomainAdminUserRequest**](../Model/EditDomainAdminUserRequest.md)|  | [optional]

### Return type

[**\MailCow\Models\EditDomainAdminUser200Response**](../Model/EditDomainAdminUser200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainAdmins()`

```php
getDomainAdmins()
```

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
