# DeadlockAPI\Data\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getActiveMatchesV1ActiveMatchesGet()**](DefaultApi.md#getActiveMatchesV1ActiveMatchesGet) | **GET** /v1/active-matches | Get Active Matches |
| [**getBuildV1BuildsBuildIdGet()**](DefaultApi.md#getBuildV1BuildsBuildIdGet) | **GET** /v1/builds/{build_id} | Get Build |
| [**getBuildsByHeroIdV1BuildsByHeroIdHeroIdGet()**](DefaultApi.md#getBuildsByHeroIdV1BuildsByHeroIdHeroIdGet) | **GET** /v1/builds/by-hero-id/{hero_id} | Get Builds By Hero Id |
| [**getBuildsByHeroNameV1BuildsByHeroNameHeroNameGet()**](DefaultApi.md#getBuildsByHeroNameV1BuildsByHeroNameHeroNameGet) | **GET** /v1/builds/by-hero-name/{hero_name} | Get Builds By Hero Name |
| [**getBuildsV1BuildsGet()**](DefaultApi.md#getBuildsV1BuildsGet) | **GET** /v1/builds | Get Builds |


## `getActiveMatchesV1ActiveMatchesGet()`

```php
getActiveMatchesV1ActiveMatchesGet($parse_objectives): \DeadlockAPI\Data\Model\ActiveMatch[]
```

Get Active Matches

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockAPI\Data\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parse_objectives = false; // bool

try {
    $result = $apiInstance->getActiveMatchesV1ActiveMatchesGet($parse_objectives);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getActiveMatchesV1ActiveMatchesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parse_objectives** | **bool**|  | [optional] [default to false] |

### Return type

[**\DeadlockAPI\Data\Model\ActiveMatch[]**](../Model/ActiveMatch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildV1BuildsBuildIdGet()`

```php
getBuildV1BuildsBuildIdGet($build_id): \DeadlockAPI\Data\Model\Build
```

Get Build

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockAPI\Data\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_id = 56; // int

try {
    $result = $apiInstance->getBuildV1BuildsBuildIdGet($build_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBuildV1BuildsBuildIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **build_id** | **int**|  | |

### Return type

[**\DeadlockAPI\Data\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildsByHeroIdV1BuildsByHeroIdHeroIdGet()`

```php
getBuildsByHeroIdV1BuildsByHeroIdHeroIdGet($hero_id): \DeadlockAPI\Data\Model\Build[]
```

Get Builds By Hero Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockAPI\Data\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hero_id = 56; // int

try {
    $result = $apiInstance->getBuildsByHeroIdV1BuildsByHeroIdHeroIdGet($hero_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBuildsByHeroIdV1BuildsByHeroIdHeroIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hero_id** | **int**|  | |

### Return type

[**\DeadlockAPI\Data\Model\Build[]**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildsByHeroNameV1BuildsByHeroNameHeroNameGet()`

```php
getBuildsByHeroNameV1BuildsByHeroNameHeroNameGet($hero_name): \DeadlockAPI\Data\Model\Build[]
```

Get Builds By Hero Name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockAPI\Data\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hero_name = 'hero_name_example'; // string

try {
    $result = $apiInstance->getBuildsByHeroNameV1BuildsByHeroNameHeroNameGet($hero_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBuildsByHeroNameV1BuildsByHeroNameHeroNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hero_name** | **string**|  | |

### Return type

[**\DeadlockAPI\Data\Model\Build[]**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildsV1BuildsGet()`

```php
getBuildsV1BuildsGet(): array<string,\DeadlockAPI\Data\Model\Build[]>
```

Get Builds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockAPI\Data\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBuildsV1BuildsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBuildsV1BuildsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**array<string,\DeadlockAPI\Data\Model\Build[]>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
