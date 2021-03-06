# CreateDirectDebitParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | Identifier of the account that should be used for the direct debit. | 
**direct_debit_type** | **string** | Type of the direct debit; either &lt;code&gt;BASIC&lt;/code&gt; or &lt;code&gt;B2B&lt;/code&gt; (Business-To-Business). | 
**sequence_type** | **string** | Sequence type of the direct debit. Possible values:&lt;br/&gt;&lt;br/&gt;&amp;bull; &lt;code&gt;OOFF&lt;/code&gt; - means that this is a one-time direct debit order&lt;br/&gt;&amp;bull; &lt;code&gt;FRST&lt;/code&gt; - means that this is the first in a row of multiple direct debit orders&lt;br/&gt;&amp;bull; &lt;code&gt;RCUR&lt;/code&gt; - means that this is one (but not the first or final) within a row of multiple direct debit orders&lt;br/&gt;&amp;bull; &lt;code&gt;FNAL&lt;/code&gt; - means that this is the final in a row of multiple direct debit orders&lt;br/&gt;&lt;br/&gt; | 
**direct_debits** | [**\Swagger\Client\Model\DirectDebitOrderParams[]**](DirectDebitOrderParams.md) | List of direct debit orders (may contain at most 15000 items). Please note that collective direct debit may not always be supported. | 
**single_booking** | **bool** | This field is only relevant when you pass multiple orders. It determines whether the orders should be processed by the bank as one collective booking (in case of &#39;false&#39;), or as single bookings (in case of &#39;true&#39;). Note that it is subject to the bank whether it will regard the field. Default value is &#39;false&#39;. | [optional] [default to false]
**execution_date** | **string** | Execution date for the direct debit(s), in the format &#39;YYYY-MM-DD&#39;. May not be in the past. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


