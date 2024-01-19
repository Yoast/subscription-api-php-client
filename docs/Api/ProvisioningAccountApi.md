# Yoast\ProvisionerApiClient\ProvisioningAccountApi

All URIs are relative to *https://my.yoast.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**provisioningAccountControllerSetSiteForSubscription**](ProvisioningAccountApi.md#provisioningaccountcontrollersetsiteforsubscription) | **POST** /api/provisioning/account/regenerate-token | Generate a new auth token

# **provisioningAccountControllerSetSiteForSubscription**
> \Yoast\ProvisionerApiClient\Model\RegenerateTokenResponseDto provisioningAccountControllerSetSiteForSubscription()

Generate a new auth token

This route generate a new password for the Basic Auth that is used by provisioner accounts to authenticate with.After this route is called, the old password will NO LONGER be valid. Please store the response of this request somewhere safe!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->provisioningAccountControllerSetSiteForSubscription();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningAccountApi->provisioningAccountControllerSetSiteForSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yoast\ProvisionerApiClient\Model\RegenerateTokenResponseDto**](../Model/RegenerateTokenResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

