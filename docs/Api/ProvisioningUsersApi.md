# Yoast\ProvisionerApiClient\ProvisioningUsersApi

All URIs are relative to *https://my.yoast.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**provisioningUsersControllerScheduleDelete**](ProvisioningUsersApi.md#provisioninguserscontrollerscheduledelete) | **POST** /api/provisioning/user/schedule-delete | Schedule a delete for a subscription

# **provisioningUsersControllerScheduleDelete**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto provisioningUsersControllerScheduleDelete($body)

Schedule a delete for a subscription

Schedules a customer for gdpr delete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\ProvisioningUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\ProvisionerApiClient\Model\ScheduleDeleteUserDto(); // \Yoast\ProvisionerApiClient\Model\ScheduleDeleteUserDto | 

try {
    $result = $apiInstance->provisioningUsersControllerScheduleDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningUsersApi->provisioningUsersControllerScheduleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\ProvisionerApiClient\Model\ScheduleDeleteUserDto**](../Model/ScheduleDeleteUserDto.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

