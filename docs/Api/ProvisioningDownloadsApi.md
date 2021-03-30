# Yoast\ProvisionerApiClient\ProvisioningDownloadsApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProvisioningDownloadsCurrentVersionGet**](ProvisioningDownloadsApi.md#apiprovisioningdownloadscurrentversionget) | **GET** /api/provisioning/downloads/currentVersion | Retrieve the current version for the productCode for the provisioner.
[**apiProvisioningDownloadsCurrentZipGet**](ProvisioningDownloadsApi.md#apiprovisioningdownloadscurrentzipget) | **GET** /api/provisioning/downloads/currentZip | Redirect to the current zip for the productCode.

# **apiProvisioningDownloadsCurrentVersionGet**
> string apiProvisioningDownloadsCurrentVersionGet($productCode)

Retrieve the current version for the productCode for the provisioner.

This route returns the latest version of the product that is offered to the customer when using the passed productCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $result = $apiInstance->apiProvisioningDownloadsCurrentVersionGet($productCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->apiProvisioningDownloadsCurrentVersionGet: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProvisioningDownloadsCurrentZipGet**
> string apiProvisioningDownloadsCurrentZipGet($productCode)

Redirect to the current zip for the productCode.

If a new version is available, you can use this route to redirect to the zip of that new version of the product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $result = $apiInstance->apiProvisioningDownloadsCurrentZipGet($productCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->apiProvisioningDownloadsCurrentZipGet: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

