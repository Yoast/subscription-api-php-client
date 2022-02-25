# Yoast\ProvisionerApiClient\ProvisioningAccountApi

All URIs are relative to *https://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProvisioningAccountRegenerateTokenPost**](ProvisioningAccountApi.md#apiprovisioningaccountregeneratetokenpost) | **POST** /api/provisioning/account/regenerate-token | Generate a new auth token

# **apiProvisioningAccountRegenerateTokenPost**
> \Yoast\ProvisionerApiClient\Model\RegenerateTokenResponseDto apiProvisioningAccountRegenerateTokenPost()

Generate a new auth token

This route generate a new Basic Auth token that is used for provisioner accounts to authenticate with.After this route is called, the old token will NO LONGER be valid. Please store the response of this request somewhere safe!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiProvisioningAccountRegenerateTokenPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningAccountApi->apiProvisioningAccountRegenerateTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yoast\ProvisionerApiClient\Model\RegenerateTokenResponseDto**](../Model/RegenerateTokenResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

