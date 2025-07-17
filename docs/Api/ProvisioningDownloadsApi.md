# Yoast\ProvisionerApiClient\ProvisioningDownloadsApi

All URIs are relative to *https://my.yoast.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**provisioningDownloadsControllerCurrentVersion**](ProvisioningDownloadsApi.md#provisioningdownloadscontrollercurrentversion) | **GET** /api/provisioning/downloads/currentVersion | Retrieve the current version for the productCode for the provisioner.
[**provisioningDownloadsControllerCurrentVersionV2**](ProvisioningDownloadsApi.md#provisioningdownloadscontrollercurrentversionv2) | **GET** /api/v2/provisioning/downloads/currentVersion | Get current version of downloads for a product.
[**provisioningDownloadsControllerCurrentZip**](ProvisioningDownloadsApi.md#provisioningdownloadscontrollercurrentzip) | **GET** /api/provisioning/downloads/currentZip | Redirect to the current zip for the productCode.

# **provisioningDownloadsControllerCurrentVersion**
> string provisioningDownloadsControllerCurrentVersion($productCode)

Retrieve the current version for the productCode for the provisioner.

This route returns the latest version of the product that is offered to the customer when using the passed productCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $result = $apiInstance->provisioningDownloadsControllerCurrentVersion($productCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->provisioningDownloadsControllerCurrentVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| The code used to create the product. |

### Return type

**string**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisioningDownloadsControllerCurrentVersionV2**
> \Yoast\ProvisionerApiClient\Model\ProductVersionsDto provisioningDownloadsControllerCurrentVersionV2($productCode)

Get current version of downloads for a product.

This route returns the version numbers and the download URLs of the latest versions of the available downloads for a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $result = $apiInstance->provisioningDownloadsControllerCurrentVersionV2($productCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->provisioningDownloadsControllerCurrentVersionV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| The code used to create the product. |

### Return type

[**\Yoast\ProvisionerApiClient\Model\ProductVersionsDto**](../Model/ProductVersionsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisioningDownloadsControllerCurrentZip**
> provisioningDownloadsControllerCurrentZip($productCode)

Redirect to the current zip for the productCode.

If a new version is available, you can use this route to redirect to the zip of that new version of the product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $apiInstance->provisioningDownloadsControllerCurrentZip($productCode);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->provisioningDownloadsControllerCurrentZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| The code used to create the product. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

