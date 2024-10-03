# DeadlockApi\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getColorsRawColorsGet()**](DefaultApi.md#getColorsRawColorsGet) | **GET** /raw/colors | Get Colors |
| [**getColorsV1ColorsGet()**](DefaultApi.md#getColorsV1ColorsGet) | **GET** /v1/colors | Get Colors |
| [**getGenericDataRawGenericDataGet()**](DefaultApi.md#getGenericDataRawGenericDataGet) | **GET** /raw/generic_data | Get Generic Data |
| [**getHeroByNameV1HeroesByNameNameGet()**](DefaultApi.md#getHeroByNameV1HeroesByNameNameGet) | **GET** /v1/heroes/by-name/{name} | Get Hero By Name |
| [**getHeroV1HeroesIdGet()**](DefaultApi.md#getHeroV1HeroesIdGet) | **GET** /v1/heroes/{id} | Get Hero |
| [**getHeroesRawHeroesGet()**](DefaultApi.md#getHeroesRawHeroesGet) | **GET** /raw/heroes | Get Heroes |
| [**getHeroesV1HeroesGet()**](DefaultApi.md#getHeroesV1HeroesGet) | **GET** /v1/heroes | Get Heroes |
| [**getItemByNameV1ItemsByNameNameGet()**](DefaultApi.md#getItemByNameV1ItemsByNameNameGet) | **GET** /v1/items/by-name/{name} | Get Item By Name |
| [**getItemV1ItemsIdGet()**](DefaultApi.md#getItemV1ItemsIdGet) | **GET** /v1/items/{id} | Get Item |
| [**getItemsBySlotTypeV1ItemsBySlotTypeSlotTypeGet()**](DefaultApi.md#getItemsBySlotTypeV1ItemsBySlotTypeSlotTypeGet) | **GET** /v1/items/by-slot-type/{slot_type} | Get Items By Slot Type |
| [**getItemsByTypeV1ItemsByTypeTypeGet()**](DefaultApi.md#getItemsByTypeV1ItemsByTypeTypeGet) | **GET** /v1/items/by-type/{type} | Get Items By Type |
| [**getItemsRawItemsGet()**](DefaultApi.md#getItemsRawItemsGet) | **GET** /raw/items | Get Items |
| [**getItemsV1ItemsGet()**](DefaultApi.md#getItemsV1ItemsGet) | **GET** /v1/items | Get Items |
| [**getMapV1MapGet()**](DefaultApi.md#getMapV1MapGet) | **GET** /v1/map | Get Map |
| [**getSteamInfoRawSteamInfoGet()**](DefaultApi.md#getSteamInfoRawSteamInfoGet) | **GET** /raw/steam-info | Get Steam Info |
| [**getSteamInfoV1SteamInfoGet()**](DefaultApi.md#getSteamInfoV1SteamInfoGet) | **GET** /v1/steam-info | Get Steam Info |


## `getColorsRawColorsGet()`

```php
getColorsRawColorsGet(): mixed
```

Get Colors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getColorsRawColorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getColorsRawColorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColorsV1ColorsGet()`

```php
getColorsV1ColorsGet(): array<string,\DeadlockApi\Model\Color>
```

Get Colors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getColorsV1ColorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getColorsV1ColorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,\DeadlockApi\Model\Color>**](../Model/Color.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenericDataRawGenericDataGet()`

```php
getGenericDataRawGenericDataGet(): mixed
```

Get Generic Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGenericDataRawGenericDataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGenericDataRawGenericDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeroByNameV1HeroesByNameNameGet()`

```php
getHeroByNameV1HeroesByNameNameGet($name, $language): \DeadlockApi\Model\Hero
```

Get Hero By Name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getHeroByNameV1HeroesByNameNameGet($name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHeroByNameV1HeroesByNameNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Hero**](../Model/Hero.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeroV1HeroesIdGet()`

```php
getHeroV1HeroesIdGet($id, $language): \DeadlockApi\Model\Hero
```

Get Hero

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getHeroV1HeroesIdGet($id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHeroV1HeroesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Hero**](../Model/Hero.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeroesRawHeroesGet()`

```php
getHeroesRawHeroesGet(): mixed
```

Get Heroes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHeroesRawHeroesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHeroesRawHeroesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeroesV1HeroesGet()`

```php
getHeroesV1HeroesGet($language): \DeadlockApi\Model\Hero[]
```

Get Heroes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getHeroesV1HeroesGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHeroesV1HeroesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Hero[]**](../Model/Hero.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemByNameV1ItemsByNameNameGet()`

```php
getItemByNameV1ItemsByNameNameGet($name, $language): \DeadlockApi\Model\Item
```

Get Item By Name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getItemByNameV1ItemsByNameNameGet($name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getItemByNameV1ItemsByNameNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemV1ItemsIdGet()`

```php
getItemV1ItemsIdGet($id, $language): \DeadlockApi\Model\Item
```

Get Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getItemV1ItemsIdGet($id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getItemV1ItemsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsBySlotTypeV1ItemsBySlotTypeSlotTypeGet()`

```php
getItemsBySlotTypeV1ItemsBySlotTypeSlotTypeGet($slot_type, $language): \DeadlockApi\Model\Item[]
```

Get Items By Slot Type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slot_type = new \DeadlockApi\Model\ItemSlotType(); // ItemSlotType
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getItemsBySlotTypeV1ItemsBySlotTypeSlotTypeGet($slot_type, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getItemsBySlotTypeV1ItemsBySlotTypeSlotTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slot_type** | [**ItemSlotType**](../Model/.md)|  | |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Item[]**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsByTypeV1ItemsByTypeTypeGet()`

```php
getItemsByTypeV1ItemsByTypeTypeGet($type, $language): \DeadlockApi\Model\Item[]
```

Get Items By Type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \DeadlockApi\Model\ItemType(); // ItemType
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getItemsByTypeV1ItemsByTypeTypeGet($type, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getItemsByTypeV1ItemsByTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**ItemType**](../Model/.md)|  | |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Item[]**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsRawItemsGet()`

```php
getItemsRawItemsGet(): mixed
```

Get Items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getItemsRawItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getItemsRawItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsV1ItemsGet()`

```php
getItemsV1ItemsGet($language): \DeadlockApi\Model\Item[]
```

Get Items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = new \DeadlockApi\Model\Language(); // Language

try {
    $result = $apiInstance->getItemsV1ItemsGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getItemsV1ItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | [**Language**](../Model/.md)|  | [optional] |

### Return type

[**\DeadlockApi\Model\Item[]**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMapV1MapGet()`

```php
getMapV1MapGet(): \DeadlockApi\Model\Map
```

Get Map

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMapV1MapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMapV1MapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DeadlockApi\Model\Map**](../Model/Map.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSteamInfoRawSteamInfoGet()`

```php
getSteamInfoRawSteamInfoGet(): mixed
```

Get Steam Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSteamInfoRawSteamInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSteamInfoRawSteamInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSteamInfoV1SteamInfoGet()`

```php
getSteamInfoV1SteamInfoGet(): \DeadlockApi\Model\SteamInfo
```

Get Steam Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DeadlockApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSteamInfoV1SteamInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSteamInfoV1SteamInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DeadlockApi\Model\SteamInfo**](../Model/SteamInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
