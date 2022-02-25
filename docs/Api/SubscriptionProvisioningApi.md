# Yoast\ProvisionerApiClient\SubscriptionProvisioningApi

All URIs are relative to *https://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProvisioningSubscriptionsCreatePost**](SubscriptionProvisioningApi.md#apiprovisioningsubscriptionscreatepost) | **POST** /api/provisioning/subscriptions/create | Create a subscription
[**apiProvisioningSubscriptionsIdCancelPost**](SubscriptionProvisioningApi.md#apiprovisioningsubscriptionsidcancelpost) | **POST** /api/provisioning/subscriptions/{id}/cancel | Cancel a single subscription
[**apiProvisioningSubscriptionsIdGet**](SubscriptionProvisioningApi.md#apiprovisioningsubscriptionsidget) | **GET** /api/provisioning/subscriptions/{id} | Get a subscription
[**apiProvisioningSubscriptionsIdRefundPost**](SubscriptionProvisioningApi.md#apiprovisioningsubscriptionsidrefundpost) | **POST** /api/provisioning/subscriptions/{id}/refund | Refund a single subscription
[**apiProvisioningSubscriptionsIdRenewPost**](SubscriptionProvisioningApi.md#apiprovisioningsubscriptionsidrenewpost) | **POST** /api/provisioning/subscriptions/{id}/renew | Renew a subscription
[**apiProvisioningSubscriptionsIdSetSitePost**](SubscriptionProvisioningApi.md#apiprovisioningsubscriptionsidsetsitepost) | **POST** /api/provisioning/subscriptions/{id}/set-site | Link a subscription to a site

# **apiProvisioningSubscriptionsCreatePost**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto apiProvisioningSubscriptionsCreatePost($body)

Create a subscription

Creates a subscription for a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\ProvisionerApiClient\Model\CreateProvisionedSubscriptionDto(); // \Yoast\ProvisionerApiClient\Model\CreateProvisionedSubscriptionDto | 

try {
    $result = $apiInstance->apiProvisioningSubscriptionsCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->apiProvisioningSubscriptionsCreatePost: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProvisioningSubscriptionsIdCancelPost**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto apiProvisioningSubscriptionsIdCancelPost($body, $id)

Cancel a single subscription

Cancel the subscription when the period ends or immediately.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\ProvisionerApiClient\Model\CancelProvisionedSubscriptionDto(); // \Yoast\ProvisionerApiClient\Model\CancelProvisionedSubscriptionDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiProvisioningSubscriptionsIdCancelPost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->apiProvisioningSubscriptionsIdCancelPost: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProvisioningSubscriptionsIdGet**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto apiProvisioningSubscriptionsIdGet($id)

Get a subscription

Get a single subscription that was provisioned for a third party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiProvisioningSubscriptionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->apiProvisioningSubscriptionsIdGet: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProvisioningSubscriptionsIdRefundPost**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto apiProvisioningSubscriptionsIdRefundPost($id)

Refund a single subscription

Refund the subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiProvisioningSubscriptionsIdRefundPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->apiProvisioningSubscriptionsIdRefundPost: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProvisioningSubscriptionsIdRenewPost**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto apiProvisioningSubscriptionsIdRenewPost($id)

Renew a subscription

Renew the subscription for a new period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiProvisioningSubscriptionsIdRenewPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->apiProvisioningSubscriptionsIdRenewPost: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProvisioningSubscriptionsIdSetSitePost**
> \Yoast\ProvisionerApiClient\Model\SubscriptionProvisioningResponseDto apiProvisioningSubscriptionsIdSetSitePost($body, $id)

Link a subscription to a site

Links the subscription to a customer's website. Setting a site the the subscription will remove the site if already set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\ProvisionerApiClient\Api\SubscriptionProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\ProvisionerApiClient\Model\SetProvisionedSiteDto(); // \Yoast\ProvisionerApiClient\Model\SetProvisionedSiteDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiProvisioningSubscriptionsIdSetSitePost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProvisioningApi->apiProvisioningSubscriptionsIdSetSitePost: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

