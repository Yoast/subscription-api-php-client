# Yoast\ProvisionerApiClient\SubscriptionProvisioningApi

All URIs are relative to *https://my.yoast.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionProvisioningControllerCancelSubscription**](SubscriptionProvisioningApi.md#subscriptionprovisioningcontrollercancelsubscription) | **POST** /api/provisioning/subscriptions/{id}/cancel | Cancel a single subscription
[**subscriptionProvisioningControllerCreate**](SubscriptionProvisioningApi.md#subscriptionprovisioningcontrollercreate) | **POST** /api/provisioning/subscriptions/create | Create a subscription
[**subscriptionProvisioningControllerGetOne**](SubscriptionProvisioningApi.md#subscriptionprovisioningcontrollergetone) | **GET** /api/provisioning/subscriptions/{id} | Get a subscription
[**subscriptionProvisioningControllerRefundSubscription**](SubscriptionProvisioningApi.md#subscriptionprovisioningcontrollerrefundsubscription) | **POST** /api/provisioning/subscriptions/{id}/refund | Refund a single subscription
[**subscriptionProvisioningControllerRenewSubscription**](SubscriptionProvisioningApi.md#subscriptionprovisioningcontrollerrenewsubscription) | **POST** /api/provisioning/subscriptions/{id}/renew | Renew a subscription
[**subscriptionProvisioningControllerSetSiteForSubscription**](SubscriptionProvisioningApi.md#subscriptionprovisioningcontrollersetsiteforsubscription) | **POST** /api/provisioning/subscriptions/{id}/set-site | Link a subscription to a site

# **subscriptionProvisioningControllerCancelSubscription**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto subscriptionProvisioningControllerCancelSubscription($body, $id)

Cancel a single subscription

Cancel the subscription when the period ends, or immediately if that is requested, or the subscription is not valid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\ProvisionerApiClient\Model\CancelProvisionedSubscriptionDto(); // \Yoast\ProvisionerApiClient\Model\CancelProvisionedSubscriptionDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->subscriptionProvisioningControllerCancelSubscription($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->subscriptionProvisioningControllerCancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\ProvisionerApiClient\Model\CancelProvisionedSubscriptionDto**](../Model/CancelProvisionedSubscriptionDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionProvisioningControllerCreate**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto subscriptionProvisioningControllerCreate($body)

Create a subscription

Creates a subscription for a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\ProvisionerApiClient\Model\CreateProvisionedSubscriptionDto(); // \Yoast\ProvisionerApiClient\Model\CreateProvisionedSubscriptionDto | 

try {
    $result = $apiInstance->subscriptionProvisioningControllerCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->subscriptionProvisioningControllerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\ProvisionerApiClient\Model\CreateProvisionedSubscriptionDto**](../Model/CreateProvisionedSubscriptionDto.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionProvisioningControllerGetOne**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto subscriptionProvisioningControllerGetOne($id)

Get a subscription

Get a single subscription that was provisioned for a third party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->subscriptionProvisioningControllerGetOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->subscriptionProvisioningControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionProvisioningControllerRefundSubscription**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto subscriptionProvisioningControllerRefundSubscription($id)

Refund a single subscription

Refund the subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->subscriptionProvisioningControllerRefundSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->subscriptionProvisioningControllerRefundSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionProvisioningControllerRenewSubscription**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto subscriptionProvisioningControllerRenewSubscription($id)

Renew a subscription

Renew the subscription for a new period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->subscriptionProvisioningControllerRenewSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->subscriptionProvisioningControllerRenewSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionProvisioningControllerSetSiteForSubscription**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto subscriptionProvisioningControllerSetSiteForSubscription($body, $id)

Link a subscription to a site

Links the subscription to a customer's website. Setting a site the the subscription will remove the site if already set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Yoast\ProvisionerApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\ProvisionerApiClient\Model\SetProvisionedSiteDto(); // \Yoast\ProvisionerApiClient\Model\SetProvisionedSiteDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->subscriptionProvisioningControllerSetSiteForSubscription($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->subscriptionProvisioningControllerSetSiteForSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\ProvisionerApiClient\Model\SetProvisionedSiteDto**](../Model/SetProvisionedSiteDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

