# Swagger\Client\PaymentsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDirectDebit**](PaymentsApi.md#createDirectDebit) | **POST** /api/v1/payments/directDebits | Create direct debit
[**createMoneyTransfer**](PaymentsApi.md#createMoneyTransfer) | **POST** /api/v1/payments/moneyTransfers | Create money transfer
[**getPayments**](PaymentsApi.md#getPayments) | **GET** /api/v1/payments | Get payments
[**submitPayment**](PaymentsApi.md#submitPayment) | **POST** /api/v1/payments/submit | Submit payment


# **createDirectDebit**
> \Swagger\Client\Model\Payment createDirectDebit($body)

Create direct debit

To use this service payments must be enabled by our customer support for your client.<br/><br/>Create a payment for a single or collective direct debit order.<br/>Note that this service only creates a payment resource in finAPI and there is no bank communication involved.<br/>To submit the direct debit to the bank, please call the submitPayment service afterwards.<br/>Existing direct debits can be retrieved by the getPayments service.<br/><br/>A collective direct debit contains more than one order in the 'directDebits' list. It is specially handled by the bank and can be booked by the bank either as a single booking for each order or as a single cumulative booking. The preferred booking type can be given with the 'singleBooking' flag, but it is not guaranteed each bank will regard this flag.<br/><br/>Note: Prior creation of the payment resource is also necessary if you are using finAPI's web form flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: finapi_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateDirectDebitParams(); // \Swagger\Client\Model\CreateDirectDebitParams | Create direct debit parameters

try {
    $result = $apiInstance->createDirectDebit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createDirectDebit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateDirectDebitParams**](../Model/CreateDirectDebitParams.md)| Create direct debit parameters |

### Return type

[**\Swagger\Client\Model\Payment**](../Model/Payment.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMoneyTransfer**
> \Swagger\Client\Model\Payment createMoneyTransfer($body)

Create money transfer

To use this service payments must be enabled by our customer support for your client.<br/><br/>Create a payment for a single or collective money transfer order.<br/>Note that this service only creates a payment resource in finAPI and there is no bank communication involved.<br/>To submit the money transfer to the bank, call the 'Submit payment' service.<br/><br/>A collective money transfer contains more than one order in the 'moneyTransfers' list. It is specially handled by the bank and can be booked by the bank either as one booking for each order, or as a single cumulative booking. The preferred booking type can be given with the 'singleBooking' flag, but it is not guaranteed that every bank will regard this flag.<br/><br/>Note: Creation of a payment resource before using the 'Submit payment' service is also necessary if you are using finAPI's web form flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: finapi_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateMoneyTransferParams(); // \Swagger\Client\Model\CreateMoneyTransferParams | Create money transfer parameters

try {
    $result = $apiInstance->createMoneyTransfer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createMoneyTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateMoneyTransferParams**](../Model/CreateMoneyTransferParams.md)| Create money transfer parameters |

### Return type

[**\Swagger\Client\Model\Payment**](../Model/Payment.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayments**
> \Swagger\Client\Model\PageablePaymentResources getPayments($ids, $account_ids, $min_amount, $max_amount, $status, $page, $per_page, $order)

Get payments

Get payments of the user that is authorized by the access_token. Must pass the user's access_token.<br/><br/>You can set optional search criteria to get only those payments returned you are interested in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: finapi_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | A comma-separated list of payment identifiers. If specified, then only payments whose identifier is matching any of the given identifiers will be regarded. The maximum number of identifiers is 1000.
$account_ids = array(56); // int[] | A comma-separated list of account identifiers. If specified, then only payments that relate to the given account(s) will be regarded. The maximum number of identifiers is 1000.
$min_amount = 8.14; // float | If specified, then only those payments are regarded whose (absolute) total amount is equal or greater than the given amount will be regarded. The value must be a positive (absolute) amount.
$max_amount = 8.14; // float | If specified, then only those payments are regarded whose (absolute) total amount is equal or less than the given amount will be regarded. Value must be a positive (absolute) amount.
$status = array("status_example"); // string[] | A comma-separated list of payment statuses. If provided, then only payments whose status is matching any of the given statuses will be returned. Allowed values 'OPEN', 'PENDING', 'SUCCESSFUL', 'NOT_SUCCESSFUL' or 'DISCARDED'. Example: 'OPEN,PENDING'.
$page = 1; // int | Result page that you want to retrieve
$per_page = 20; // int | Maximum number of records per page. By default it's 20. Can be at most 500. NOTE: Due to its validation and visualization, the swagger frontend might show very low performance, or even crashes, when a service responds with a lot of data. It is recommended to use a HTTP client like Postman or DHC instead of our swagger frontend for service calls with large page sizes.
$order = array("order_example"); // string[] | Determines the order of the results. You can use the following fields for ordering the response: 'id', 'amount', 'requestDate' and 'executionDate'. The default order for all services is 'id,asc'.

try {
    $result = $apiInstance->getPayments($ids, $account_ids, $min_amount, $max_amount, $status, $page, $per_page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| A comma-separated list of payment identifiers. If specified, then only payments whose identifier is matching any of the given identifiers will be regarded. The maximum number of identifiers is 1000. | [optional]
 **account_ids** | [**int[]**](../Model/int.md)| A comma-separated list of account identifiers. If specified, then only payments that relate to the given account(s) will be regarded. The maximum number of identifiers is 1000. | [optional]
 **min_amount** | **float**| If specified, then only those payments are regarded whose (absolute) total amount is equal or greater than the given amount will be regarded. The value must be a positive (absolute) amount. | [optional]
 **max_amount** | **float**| If specified, then only those payments are regarded whose (absolute) total amount is equal or less than the given amount will be regarded. Value must be a positive (absolute) amount. | [optional]
 **status** | [**string[]**](../Model/string.md)| A comma-separated list of payment statuses. If provided, then only payments whose status is matching any of the given statuses will be returned. Allowed values &#39;OPEN&#39;, &#39;PENDING&#39;, &#39;SUCCESSFUL&#39;, &#39;NOT_SUCCESSFUL&#39; or &#39;DISCARDED&#39;. Example: &#39;OPEN,PENDING&#39;. | [optional]
 **page** | **int**| Result page that you want to retrieve | [optional] [default to 1]
 **per_page** | **int**| Maximum number of records per page. By default it&#39;s 20. Can be at most 500. NOTE: Due to its validation and visualization, the swagger frontend might show very low performance, or even crashes, when a service responds with a lot of data. It is recommended to use a HTTP client like Postman or DHC instead of our swagger frontend for service calls with large page sizes. | [optional] [default to 20]
 **order** | [**string[]**](../Model/string.md)| Determines the order of the results. You can use the following fields for ordering the response: &#39;id&#39;, &#39;amount&#39;, &#39;requestDate&#39; and &#39;executionDate&#39;. The default order for all services is &#39;id,asc&#39;. | [optional]

### Return type

[**\Swagger\Client\Model\PageablePaymentResources**](../Model/PageablePaymentResources.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitPayment**
> \Swagger\Client\Model\Payment submitPayment($body)

Submit payment

To use this service payments must be enabled by our customer support for your client.<br/><br/>Submit a payment to the bank which was previously created with either the createMoneyTransfer or createDirectDebit service.<br/><br/>Before you submit the payment, please check that the given bank interface supports the required payment capabilities, otherwise the payment could get rejected.<br/>If the account has been imported via finAPI, then you could check the capabilities on the account level. Please refer to the field AccountInterface.capabilities.<br/>In case the payment is initiated from a given IBAN, please refer to the field BankInterface.isMoneyTransferSupported.<br/><br/>Usually banks require a multi-step authentication to authorize the payment. In this case, and if the finAPI web form flow is not used, the service will respond with HTTP code 510 and an error object containing a multiStepAuthentication object which describes the necessary next authentication steps. You must then retry the service call, passing the same arguments plus an additional 'multiStepAuthentication' element.<br/>Please refer to the description of the HTTP 510 error code below and the documentation of the 'MultiStepAuthenticationCallback' response object for details.<br/><br/>NOTE: Depending on your license, this service may respond with HTTP code 451, containing an error message with a identifier of web form in it. In addition to that the response will also have included a 'Location' header, which contains the URL to the web form. In this case, you must forward your user to finAPI's web form. For a detailed explanation of the Web Form Flow, please refer to this article: <a href='https://finapi.zendesk.com/hc/en-us/articles/360002596391' target='_blank'>finAPI's Web Form Flow</a><br/><br/>NOTE: For XS2A interface additional headers must be included in the request if the end user is involved. Please refer to the 'General Information/User metadata' section of the swagger documentation.<br/><br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: finapi_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SubmitPaymentParams(); // \Swagger\Client\Model\SubmitPaymentParams | Parameters for payment submission

try {
    $result = $apiInstance->submitPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->submitPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SubmitPaymentParams**](../Model/SubmitPaymentParams.md)| Parameters for payment submission |

### Return type

[**\Swagger\Client\Model\Payment**](../Model/Payment.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

