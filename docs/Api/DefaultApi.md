# Here\DefaultApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**autocompleteGet()**](DefaultApi.md#autocompleteGet) | **GET** /autocomplete | Autocomplete
[**autosuggestGet()**](DefaultApi.md#autosuggestGet) | **GET** /autosuggest | Autosuggest
[**browseGet()**](DefaultApi.md#browseGet) | **GET** /browse | Browse
[**discoverGet()**](DefaultApi.md#discoverGet) | **GET** /discover | Discover
[**geocodeGet()**](DefaultApi.md#geocodeGet) | **GET** /geocode | Geocode
[**lookupGet()**](DefaultApi.md#lookupGet) | **GET** /lookup | Lookup By ID
[**revgeocodeGet()**](DefaultApi.md#revgeocodeGet) | **GET** /revgeocode | Reverse Geocode


## `autocompleteGet()`

```php
autocompleteGet($q, $at, $in, $limit, $types, $lang, $x_request_id): \Here\Model\OpenSearchAutocompleteResponse
```

Autocomplete

BETA: This endpoint completes the few entered keystrokes to the valid street address or administrative area to speed-up entering the address queries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = Berlin Pariser 20; // string | Enter a free-text query  Examples:  * `ber`, `berl`, `berli`, ...  * `berlin+p`, `berlin+paris`, `berlin+parise`, ...  * `berlin+pariser+20`   _Note: Whitespace, urls, email addresses, or other out-of-scope queries will yield no results._
$at = 'at_example'; // string | Specify the center of the search context expressed as coordinates.  Format: `{latitude},{longitude}`  Type: `{decimal},{decimal}`  Example: `-13.163068,-72.545128` (Machu Picchu Mountain, Peru)
$in = 'in_example'; // string | Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: `countryCode:{countryCode}[,{countryCode}]*`     Examples:     * `countryCode:USA`     * `countryCode:CAN,MEX,USA`
$limit = 5; // int | Maximum number of results to be returned.
$types = array('types_example'); // string[] | BETA: Limit the result items to the specified types. Currently supported values of the type filter for Autocomplete:       | * `city` - restricting results to result type `locality` and locality type `city`       | * `postalCode` - restricting results to result type `locality` and locality type `postalCode`,       | * `area` - restricting results to result types: `locality` or `administrativeArea` including all the sub-types       |       |Provide one of the supported values or a comma separated list.       |       |
$lang = 'lang_example'; // string | Select the preferred response language for result rendering from a list of BCP47 compliant Language Codes. The autocomplete endpoint tries to detect the query language based on matching name variants and then chooses the same language for the response.  Therefore the end-user can see and recognize all the entered terms in the same language as in the query. The specified preferred language is used only for not matched address tokens and for matched address tokens in case of ambiguity
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->autocompleteGet($q, $at, $in, $limit, $types, $lang, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->autocompleteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Enter a free-text query  Examples:  * &#x60;ber&#x60;, &#x60;berl&#x60;, &#x60;berli&#x60;, ...  * &#x60;berlin+p&#x60;, &#x60;berlin+paris&#x60;, &#x60;berlin+parise&#x60;, ...  * &#x60;berlin+pariser+20&#x60;   _Note: Whitespace, urls, email addresses, or other out-of-scope queries will yield no results._ |
 **at** | **string**| Specify the center of the search context expressed as coordinates.  Format: &#x60;{latitude},{longitude}&#x60;  Type: &#x60;{decimal},{decimal}&#x60;  Example: &#x60;-13.163068,-72.545128&#x60; (Machu Picchu Mountain, Peru) | [optional]
 **in** | **string**| Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: &#x60;countryCode:{countryCode}[,{countryCode}]*&#x60;     Examples:     * &#x60;countryCode:USA&#x60;     * &#x60;countryCode:CAN,MEX,USA&#x60; | [optional]
 **limit** | **int**| Maximum number of results to be returned. | [optional] [default to 5]
 **types** | [**string[]**](../Model/string.md)| BETA: Limit the result items to the specified types. Currently supported values of the type filter for Autocomplete:       | * &#x60;city&#x60; - restricting results to result type &#x60;locality&#x60; and locality type &#x60;city&#x60;       | * &#x60;postalCode&#x60; - restricting results to result type &#x60;locality&#x60; and locality type &#x60;postalCode&#x60;,       | * &#x60;area&#x60; - restricting results to result types: &#x60;locality&#x60; or &#x60;administrativeArea&#x60; including all the sub-types       |       |Provide one of the supported values or a comma separated list.       |       | | [optional]
 **lang** | **string**| Select the preferred response language for result rendering from a list of BCP47 compliant Language Codes. The autocomplete endpoint tries to detect the query language based on matching name variants and then chooses the same language for the response.  Therefore the end-user can see and recognize all the entered terms in the same language as in the query. The specified preferred language is used only for not matched address tokens and for matched address tokens in case of ambiguity | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\OpenSearchAutocompleteResponse**](../Model/OpenSearchAutocompleteResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `autosuggestGet()`

```php
autosuggestGet($q, $at, $in, $limit, $route, $terms_limit, $lang, $show, $x_request_id): \Here\Model\OpenSearchAutosuggestResponse
```

Autosuggest

This endpoint suggests address or place candidates based on an incomplete or misspelled query,  from which the user selects the best query to submit.  _NOTE: The response may contain **experimental** elements not documented here.  Any undocumented element is **subject to removal** at any time._

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = Eismieze Berlin; // string | Enter a free-text query  Examples:  * `res`, `rest`, `resta`, `restau`, ...  * `berlin+bran`, `berlin+brand`, `berlin+branden`, ...  * `New+Yok+Giants`   _Note: Whitespace, urls, email addresses, or other out-of-scope queries will yield no results.
$at = 52.5308,13.3856; // string | Specify the center of the search context expressed as coordinates  Format: `{latitude},{longitude}`  Type: `{decimal},{decimal}`  Example: `-13.163068,-72.545128` (Machu Picchu Mountain, Peru)  The following constraints apply:   * One of \"at\", \"in=circle\" or \"in=bbox\" is required.   * Parameters \"at\", \"in=circle\" and \"in=bbox\" are mutually exclusive. Only one of them is allowed.
$in = 'in_example'; // string | Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: `countryCode:{countryCode}[,{countryCode}]*`     Examples:     * `countryCode:USA`     * `countryCode:CAN,MEX,USA`    * a circular area, provided as latitude, longitude, and radius (in meters)     Format: `circle:{latitude},{longitude};r={radius}`     Type: `circle:{decimal},{decimal};r={integer}`     Example: `circle:52.53,13.38;r=10000`    * a bounding box, provided as _west longitude_, _south latitude_, _east longitude_, _north latitude_     Format: `bbox:{west longitude},{south latitude},{east longitude},{north latitude}`     Example: `bbox:13.08836,52.33812,13.761,52.6755`   The following constraints apply:   * Parameters \"at\", \"in=circle\" and \"in=bbox\" are mutually exclusive. Only one of them is allowed.    * One of \"at\", \"in=circle\" or \"in=bbox\" is required.   * The \"in=countryCode\" parameter must be accompanied by exactly one of \"at\", \"in=circle\" or \"in=bbox\".
$limit = 20; // int | Maximum number of results to be returned.
$route = 'route_example'; // string | BETA: Select within a geographic corridor. This is a hard filter. Results will be returned if they are located within the specified area.  A `route` is defined by a [Flexible Polyline Encoding](https://github.com/heremaps/flexible-polyline),  followed by an optional width, represented by a sub-parameter \"w\".   Format: `{route};w={width}`  In regular expression syntax, the values of `route` look like:  `[a-zA-Z0-9_-]+(;w=\\d+)?`  \"[a-zA-Z0-9._-]+\" is the encoded flexible polyline.  \"w=\\d+\" is the optional width. The width is specified in meters from the center of the path. If no width is provided, the default is 1000 meters.  Type: `{Flexible Polyline Encoding};w={integer}`  Examples:  * `BFoz5xJ67i1B1B7PzIhaxL7Y`  * `BFoz5xJ67i1B1B7PzIhaxL7Y;w=5000`  * `BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC;w=2000`  Note: The last example above can be decoded (using the Python class [here](https://github.com/heremaps/flexible-polyline/tree/master/python) as follows:  ``` >>> import flexpolyline >>> polyline = 'BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC' >>> flexpolyline.decode(polyline) [(52.51994, 13.38663, 1.0), (52.51009, 13.28169, 2.0), (52.43518, 13.19352, 3.0), (52.41073, 13.19645, 4.0), (52.38871, 13.15578, 5.0), (52.37278, 13.1491, 6.0), (52.37375, 13.11546, 7.0), (52.38752, 13.08722, 8.0), (52.40294, 13.07062, 9.0), (52.41058, 13.07555, 10.0)] ```
$terms_limit = 56; // int | BETA: Maximum number of Query Terms Suggestions to be returned.
$lang = 'lang_example'; // string | Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes.
$show = array('show_example'); // string[] | Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  'details': Renders address and contact details, as well as opening hours of the searched place.  'phonemes': Renders phonemes for address and place names into the results.
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->autosuggestGet($q, $at, $in, $limit, $route, $terms_limit, $lang, $show, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->autosuggestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Enter a free-text query  Examples:  * &#x60;res&#x60;, &#x60;rest&#x60;, &#x60;resta&#x60;, &#x60;restau&#x60;, ...  * &#x60;berlin+bran&#x60;, &#x60;berlin+brand&#x60;, &#x60;berlin+branden&#x60;, ...  * &#x60;New+Yok+Giants&#x60;   _Note: Whitespace, urls, email addresses, or other out-of-scope queries will yield no results. |
 **at** | **string**| Specify the center of the search context expressed as coordinates  Format: &#x60;{latitude},{longitude}&#x60;  Type: &#x60;{decimal},{decimal}&#x60;  Example: &#x60;-13.163068,-72.545128&#x60; (Machu Picchu Mountain, Peru)  The following constraints apply:   * One of \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; or \&quot;in&#x3D;bbox\&quot; is required.   * Parameters \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; and \&quot;in&#x3D;bbox\&quot; are mutually exclusive. Only one of them is allowed. | [optional]
 **in** | **string**| Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: &#x60;countryCode:{countryCode}[,{countryCode}]*&#x60;     Examples:     * &#x60;countryCode:USA&#x60;     * &#x60;countryCode:CAN,MEX,USA&#x60;    * a circular area, provided as latitude, longitude, and radius (in meters)     Format: &#x60;circle:{latitude},{longitude};r&#x3D;{radius}&#x60;     Type: &#x60;circle:{decimal},{decimal};r&#x3D;{integer}&#x60;     Example: &#x60;circle:52.53,13.38;r&#x3D;10000&#x60;    * a bounding box, provided as _west longitude_, _south latitude_, _east longitude_, _north latitude_     Format: &#x60;bbox:{west longitude},{south latitude},{east longitude},{north latitude}&#x60;     Example: &#x60;bbox:13.08836,52.33812,13.761,52.6755&#x60;   The following constraints apply:   * Parameters \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; and \&quot;in&#x3D;bbox\&quot; are mutually exclusive. Only one of them is allowed.    * One of \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; or \&quot;in&#x3D;bbox\&quot; is required.   * The \&quot;in&#x3D;countryCode\&quot; parameter must be accompanied by exactly one of \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; or \&quot;in&#x3D;bbox\&quot;. | [optional]
 **limit** | **int**| Maximum number of results to be returned. | [optional] [default to 20]
 **route** | **string**| BETA: Select within a geographic corridor. This is a hard filter. Results will be returned if they are located within the specified area.  A &#x60;route&#x60; is defined by a [Flexible Polyline Encoding](https://github.com/heremaps/flexible-polyline),  followed by an optional width, represented by a sub-parameter \&quot;w\&quot;.   Format: &#x60;{route};w&#x3D;{width}&#x60;  In regular expression syntax, the values of &#x60;route&#x60; look like:  &#x60;[a-zA-Z0-9_-]+(;w&#x3D;\\d+)?&#x60;  \&quot;[a-zA-Z0-9._-]+\&quot; is the encoded flexible polyline.  \&quot;w&#x3D;\\d+\&quot; is the optional width. The width is specified in meters from the center of the path. If no width is provided, the default is 1000 meters.  Type: &#x60;{Flexible Polyline Encoding};w&#x3D;{integer}&#x60;  Examples:  * &#x60;BFoz5xJ67i1B1B7PzIhaxL7Y&#x60;  * &#x60;BFoz5xJ67i1B1B7PzIhaxL7Y;w&#x3D;5000&#x60;  * &#x60;BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC;w&#x3D;2000&#x60;  Note: The last example above can be decoded (using the Python class [here](https://github.com/heremaps/flexible-polyline/tree/master/python) as follows:  &#x60;&#x60;&#x60; &gt;&gt;&gt; import flexpolyline &gt;&gt;&gt; polyline &#x3D; &#39;BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC&#39; &gt;&gt;&gt; flexpolyline.decode(polyline) [(52.51994, 13.38663, 1.0), (52.51009, 13.28169, 2.0), (52.43518, 13.19352, 3.0), (52.41073, 13.19645, 4.0), (52.38871, 13.15578, 5.0), (52.37278, 13.1491, 6.0), (52.37375, 13.11546, 7.0), (52.38752, 13.08722, 8.0), (52.40294, 13.07062, 9.0), (52.41058, 13.07555, 10.0)] &#x60;&#x60;&#x60; | [optional]
 **terms_limit** | **int**| BETA: Maximum number of Query Terms Suggestions to be returned. | [optional]
 **lang** | **string**| Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes. | [optional]
 **show** | [**string[]**](../Model/string.md)| Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  &#39;details&#39;: Renders address and contact details, as well as opening hours of the searched place.  &#39;phonemes&#39;: Renders phonemes for address and place names into the results. | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\OpenSearchAutosuggestResponse**](../Model/OpenSearchAutosuggestResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `browseGet()`

```php
browseGet($at, $categories, $in, $limit, $name, $route, $lang, $show, $x_request_id): \Here\Model\OpenSearchBrowseResponse
```

Browse

This endpoint provides search results for places based on different filters, such as categories or name, ranked by distance from a given search center. The only mandatory elements exposed in the response are id and position. The other elements shown in the response samples section are only dataset attributes suggestions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$at = 52.5308,13.3856; // string | Specify the center of the search context expressed as coordinates  Required parameter for endpoints that are expected to rank results by distance from the explicitly  specified search center  Format: `{latitude},{longitude}`  Type: `{decimal},{decimal}`  Example: `-13.163068,-72.545128` (Machu Picchu Mountain, Peru)
$categories = 'categories_example'; // string | Category filter consisting of a comma-separated list of category-Ids for Categories defined in the HERE Places Category System, described in the Appendix to the HERE Search Developer Guide. Places with any assigned categories that match any of the requested categories are included in the response.
$in = 'in_example'; // string | Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: `countryCode:{countryCode}[,{countryCode}]*`     Examples:     * `countryCode:USA`     * `countryCode:CAN,MEX,USA`    * a circular area, provided as latitude, longitude, and radius (in meters)     Format: `circle:{latitude},{longitude};r={radius}`     Type: `circle:{decimal},{decimal};r={integer}`     Example: `circle:52.53,13.38;r=10000`    * a bounding box, provided as _west longitude_, _south latitude_, _east longitude_, _north latitude_     Format: `bbox:{west longitude},{south latitude},{east longitude},{north latitude}`     Example: `bbox:13.08836,52.33812,13.761,52.6755`   The following constraints apply:   * Parameters \"in=circle\" and \"in=bbox\" are mutually exclusive. Only one of them is allowed.
$limit = 20; // int | Maximum number of results to be returned.
$name = 'name_example'; // string | Full-text filter on POI names/titles. Results with a partial match on the name parameter are included in the response.
$route = 'route_example'; // string | BETA: Select within a geographic corridor. This is a hard filter. Results will be returned if they are located within the specified area.  A `route` is defined by a [Flexible Polyline Encoding](https://github.com/heremaps/flexible-polyline),  followed by an optional width, represented by a sub-parameter \"w\".   Format: `{route};w={width}`  In regular expression syntax, the values of `route` look like:  `[a-zA-Z0-9_-]+(;w=\\d+)?`  \"[a-zA-Z0-9._-]+\" is the encoded flexible polyline.  \"w=\\d+\" is the optional width. The width is specified in meters from the center of the path. If no width is provided, the default is 1000 meters.  Type: `{Flexible Polyline Encoding};w={integer}`  Examples:  * `BFoz5xJ67i1B1B7PzIhaxL7Y`  * `BFoz5xJ67i1B1B7PzIhaxL7Y;w=5000`  * `BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC;w=2000`  Note: The last example above can be decoded (using the Python class [here](https://github.com/heremaps/flexible-polyline/tree/master/python) as follows:  ``` >>> import flexpolyline >>> polyline = 'BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC' >>> flexpolyline.decode(polyline) [(52.51994, 13.38663, 1.0), (52.51009, 13.28169, 2.0), (52.43518, 13.19352, 3.0), (52.41073, 13.19645, 4.0), (52.38871, 13.15578, 5.0), (52.37278, 13.1491, 6.0), (52.37375, 13.11546, 7.0), (52.38752, 13.08722, 8.0), (52.40294, 13.07062, 9.0), (52.41058, 13.07555, 10.0)] ```
$lang = 'lang_example'; // string | Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes.
$show = array('show_example'); // string[] | Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  'phonemes': Renders phonemes for address and place names into the results.
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->browseGet($at, $categories, $in, $limit, $name, $route, $lang, $show, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->browseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **at** | **string**| Specify the center of the search context expressed as coordinates  Required parameter for endpoints that are expected to rank results by distance from the explicitly  specified search center  Format: &#x60;{latitude},{longitude}&#x60;  Type: &#x60;{decimal},{decimal}&#x60;  Example: &#x60;-13.163068,-72.545128&#x60; (Machu Picchu Mountain, Peru) |
 **categories** | **string**| Category filter consisting of a comma-separated list of category-Ids for Categories defined in the HERE Places Category System, described in the Appendix to the HERE Search Developer Guide. Places with any assigned categories that match any of the requested categories are included in the response. | [optional]
 **in** | **string**| Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: &#x60;countryCode:{countryCode}[,{countryCode}]*&#x60;     Examples:     * &#x60;countryCode:USA&#x60;     * &#x60;countryCode:CAN,MEX,USA&#x60;    * a circular area, provided as latitude, longitude, and radius (in meters)     Format: &#x60;circle:{latitude},{longitude};r&#x3D;{radius}&#x60;     Type: &#x60;circle:{decimal},{decimal};r&#x3D;{integer}&#x60;     Example: &#x60;circle:52.53,13.38;r&#x3D;10000&#x60;    * a bounding box, provided as _west longitude_, _south latitude_, _east longitude_, _north latitude_     Format: &#x60;bbox:{west longitude},{south latitude},{east longitude},{north latitude}&#x60;     Example: &#x60;bbox:13.08836,52.33812,13.761,52.6755&#x60;   The following constraints apply:   * Parameters \&quot;in&#x3D;circle\&quot; and \&quot;in&#x3D;bbox\&quot; are mutually exclusive. Only one of them is allowed. | [optional]
 **limit** | **int**| Maximum number of results to be returned. | [optional] [default to 20]
 **name** | **string**| Full-text filter on POI names/titles. Results with a partial match on the name parameter are included in the response. | [optional]
 **route** | **string**| BETA: Select within a geographic corridor. This is a hard filter. Results will be returned if they are located within the specified area.  A &#x60;route&#x60; is defined by a [Flexible Polyline Encoding](https://github.com/heremaps/flexible-polyline),  followed by an optional width, represented by a sub-parameter \&quot;w\&quot;.   Format: &#x60;{route};w&#x3D;{width}&#x60;  In regular expression syntax, the values of &#x60;route&#x60; look like:  &#x60;[a-zA-Z0-9_-]+(;w&#x3D;\\d+)?&#x60;  \&quot;[a-zA-Z0-9._-]+\&quot; is the encoded flexible polyline.  \&quot;w&#x3D;\\d+\&quot; is the optional width. The width is specified in meters from the center of the path. If no width is provided, the default is 1000 meters.  Type: &#x60;{Flexible Polyline Encoding};w&#x3D;{integer}&#x60;  Examples:  * &#x60;BFoz5xJ67i1B1B7PzIhaxL7Y&#x60;  * &#x60;BFoz5xJ67i1B1B7PzIhaxL7Y;w&#x3D;5000&#x60;  * &#x60;BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC;w&#x3D;2000&#x60;  Note: The last example above can be decoded (using the Python class [here](https://github.com/heremaps/flexible-polyline/tree/master/python) as follows:  &#x60;&#x60;&#x60; &gt;&gt;&gt; import flexpolyline &gt;&gt;&gt; polyline &#x3D; &#39;BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC&#39; &gt;&gt;&gt; flexpolyline.decode(polyline) [(52.51994, 13.38663, 1.0), (52.51009, 13.28169, 2.0), (52.43518, 13.19352, 3.0), (52.41073, 13.19645, 4.0), (52.38871, 13.15578, 5.0), (52.37278, 13.1491, 6.0), (52.37375, 13.11546, 7.0), (52.38752, 13.08722, 8.0), (52.40294, 13.07062, 9.0), (52.41058, 13.07555, 10.0)] &#x60;&#x60;&#x60; | [optional]
 **lang** | **string**| Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes. | [optional]
 **show** | [**string[]**](../Model/string.md)| Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  &#39;phonemes&#39;: Renders phonemes for address and place names into the results. | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\OpenSearchBrowseResponse**](../Model/OpenSearchBrowseResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discoverGet()`

```php
discoverGet($q, $at, $in, $limit, $route, $lang, $show, $x_request_id): \Here\Model\OpenSearchSearchResponse
```

Discover

This endpoint processes a free-form text query for an address or place, and returns results in order of relevance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = Eismieze Berlin; // string | Enter a free-text query  Examples:  * `125, Berliner, berlin`  * `Beacon, Boston, Hospital`  * `Schnurrbart German Pub and Restaurant, Hong Kong`   _Note: Whitespace, urls, email addresses, or other out-of-scope queries will yield no results.
$at = 52.5308,13.3856; // string | Specify the center of the search context expressed as coordinates  Format: `{latitude},{longitude}`  Type: `{decimal},{decimal}`  Example: `-13.163068,-72.545128` (Machu Picchu Mountain, Peru)  The following constraints apply:   * One of \"at\", \"in=circle\" or \"in=bbox\" is required.   * Parameters \"at\", \"in=circle\" and \"in=bbox\" are mutually exclusive. Only one of them is allowed.
$in = 'in_example'; // string | Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: `countryCode:{countryCode}[,{countryCode}]*`     Examples:     * `countryCode:USA`     * `countryCode:CAN,MEX,USA`    * a circular area, provided as latitude, longitude, and radius (in meters)     Format: `circle:{latitude},{longitude};r={radius}`     Type: `circle:{decimal},{decimal};r={integer}`     Example: `circle:52.53,13.38;r=10000`    * a bounding box, provided as _west longitude_, _south latitude_, _east longitude_, _north latitude_     Format: `bbox:{west longitude},{south latitude},{east longitude},{north latitude}`     Example: `bbox:13.08836,52.33812,13.761,52.6755`   The following constraints apply:   * Parameters \"at\", \"in=circle\" and \"in=bbox\" are mutually exclusive. Only one of them is allowed.    * One of \"at\", \"in=circle\" or \"in=bbox\" is required.   * The \"in=countryCode\" parameter must be accompanied by exactly one of \"at\", \"in=circle\" or \"in=bbox\".
$limit = 20; // int | Maximum number of results to be returned.
$route = 'route_example'; // string | BETA: Select within a geographic corridor. This is a hard filter. Results will be returned if they are located within the specified area.  A `route` is defined by a [Flexible Polyline Encoding](https://github.com/heremaps/flexible-polyline),  followed by an optional width, represented by a sub-parameter \"w\".   Format: `{route};w={width}`  In regular expression syntax, the values of `route` look like:  `[a-zA-Z0-9_-]+(;w=\\d+)?`  \"[a-zA-Z0-9._-]+\" is the encoded flexible polyline.  \"w=\\d+\" is the optional width. The width is specified in meters from the center of the path. If no width is provided, the default is 1000 meters.  Type: `{Flexible Polyline Encoding};w={integer}`  Examples:  * `BFoz5xJ67i1B1B7PzIhaxL7Y`  * `BFoz5xJ67i1B1B7PzIhaxL7Y;w=5000`  * `BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC;w=2000`  Note: The last example above can be decoded (using the Python class [here](https://github.com/heremaps/flexible-polyline/tree/master/python) as follows:  ``` >>> import flexpolyline >>> polyline = 'BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC' >>> flexpolyline.decode(polyline) [(52.51994, 13.38663, 1.0), (52.51009, 13.28169, 2.0), (52.43518, 13.19352, 3.0), (52.41073, 13.19645, 4.0), (52.38871, 13.15578, 5.0), (52.37278, 13.1491, 6.0), (52.37375, 13.11546, 7.0), (52.38752, 13.08722, 8.0), (52.40294, 13.07062, 9.0), (52.41058, 13.07555, 10.0)] ```
$lang = 'lang_example'; // string | Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes.
$show = array('show_example'); // string[] | Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  'phonemes': Renders phonemes for address and place names into the results.
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->discoverGet($q, $at, $in, $limit, $route, $lang, $show, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->discoverGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Enter a free-text query  Examples:  * &#x60;125, Berliner, berlin&#x60;  * &#x60;Beacon, Boston, Hospital&#x60;  * &#x60;Schnurrbart German Pub and Restaurant, Hong Kong&#x60;   _Note: Whitespace, urls, email addresses, or other out-of-scope queries will yield no results. |
 **at** | **string**| Specify the center of the search context expressed as coordinates  Format: &#x60;{latitude},{longitude}&#x60;  Type: &#x60;{decimal},{decimal}&#x60;  Example: &#x60;-13.163068,-72.545128&#x60; (Machu Picchu Mountain, Peru)  The following constraints apply:   * One of \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; or \&quot;in&#x3D;bbox\&quot; is required.   * Parameters \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; and \&quot;in&#x3D;bbox\&quot; are mutually exclusive. Only one of them is allowed. | [optional]
 **in** | **string**| Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: &#x60;countryCode:{countryCode}[,{countryCode}]*&#x60;     Examples:     * &#x60;countryCode:USA&#x60;     * &#x60;countryCode:CAN,MEX,USA&#x60;    * a circular area, provided as latitude, longitude, and radius (in meters)     Format: &#x60;circle:{latitude},{longitude};r&#x3D;{radius}&#x60;     Type: &#x60;circle:{decimal},{decimal};r&#x3D;{integer}&#x60;     Example: &#x60;circle:52.53,13.38;r&#x3D;10000&#x60;    * a bounding box, provided as _west longitude_, _south latitude_, _east longitude_, _north latitude_     Format: &#x60;bbox:{west longitude},{south latitude},{east longitude},{north latitude}&#x60;     Example: &#x60;bbox:13.08836,52.33812,13.761,52.6755&#x60;   The following constraints apply:   * Parameters \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; and \&quot;in&#x3D;bbox\&quot; are mutually exclusive. Only one of them is allowed.    * One of \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; or \&quot;in&#x3D;bbox\&quot; is required.   * The \&quot;in&#x3D;countryCode\&quot; parameter must be accompanied by exactly one of \&quot;at\&quot;, \&quot;in&#x3D;circle\&quot; or \&quot;in&#x3D;bbox\&quot;. | [optional]
 **limit** | **int**| Maximum number of results to be returned. | [optional] [default to 20]
 **route** | **string**| BETA: Select within a geographic corridor. This is a hard filter. Results will be returned if they are located within the specified area.  A &#x60;route&#x60; is defined by a [Flexible Polyline Encoding](https://github.com/heremaps/flexible-polyline),  followed by an optional width, represented by a sub-parameter \&quot;w\&quot;.   Format: &#x60;{route};w&#x3D;{width}&#x60;  In regular expression syntax, the values of &#x60;route&#x60; look like:  &#x60;[a-zA-Z0-9_-]+(;w&#x3D;\\d+)?&#x60;  \&quot;[a-zA-Z0-9._-]+\&quot; is the encoded flexible polyline.  \&quot;w&#x3D;\\d+\&quot; is the optional width. The width is specified in meters from the center of the path. If no width is provided, the default is 1000 meters.  Type: &#x60;{Flexible Polyline Encoding};w&#x3D;{integer}&#x60;  Examples:  * &#x60;BFoz5xJ67i1B1B7PzIhaxL7Y&#x60;  * &#x60;BFoz5xJ67i1B1B7PzIhaxL7Y;w&#x3D;5000&#x60;  * &#x60;BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC;w&#x3D;2000&#x60;  Note: The last example above can be decoded (using the Python class [here](https://github.com/heremaps/flexible-polyline/tree/master/python) as follows:  &#x60;&#x60;&#x60; &gt;&gt;&gt; import flexpolyline &gt;&gt;&gt; polyline &#x3D; &#39;BlD05xgKuy2xCCx9B7vUCl0OhnRC54EqSCzpEl-HCxjD3pBCiGnyGCi2CvwFCsgD3nDC4vB6eC&#39; &gt;&gt;&gt; flexpolyline.decode(polyline) [(52.51994, 13.38663, 1.0), (52.51009, 13.28169, 2.0), (52.43518, 13.19352, 3.0), (52.41073, 13.19645, 4.0), (52.38871, 13.15578, 5.0), (52.37278, 13.1491, 6.0), (52.37375, 13.11546, 7.0), (52.38752, 13.08722, 8.0), (52.40294, 13.07062, 9.0), (52.41058, 13.07555, 10.0)] &#x60;&#x60;&#x60; | [optional]
 **lang** | **string**| Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes. | [optional]
 **show** | [**string[]**](../Model/string.md)| Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  &#39;phonemes&#39;: Renders phonemes for address and place names into the results. | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\OpenSearchSearchResponse**](../Model/OpenSearchSearchResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geocodeGet()`

```php
geocodeGet($at, $in, $limit, $q, $qq, $lang, $show, $x_request_id): \Here\Model\OpenSearchGeocodeResponse
```

Geocode

This endpoint allows to find the geo-coordinates of a known address, place, locality or administrative area, even if the query is incomplete or partly incorrect. It also returns a complete postal address string and address details. It supports structured, unstructured and hybrid queries - combinations of structured and unstructured query elements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$at = 'at_example'; // string | Specify the center of the search context expressed as coordinates.  Format: `{latitude},{longitude}`  Type: `{decimal},{decimal}`  Example: `-13.163068,-72.545128` (Machu Picchu Mountain, Peru)
$in = 'in_example'; // string | Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: `countryCode:{countryCode}[,{countryCode}]*`     Examples:     * `countryCode:USA`     * `countryCode:CAN,MEX,USA`
$limit = 20; // int | Maximum number of results to be returned.
$q = Invalidenstraße 116 Berlin; // string | Enter a free-text query  Examples:  * `125, Berliner, berlin`  * `Beacon, Boston, Hospital`  * `Schnurrbart German Pub and Restaurant, Hong Kong`  _Note: Either `q` or `qq`-parameter is required on this endpoint. Both parameters can be provided in the same request._
$qq = 'qq_example'; // string | Enter a qualified query. A qualified query is similar to a free-text query, but in a structured manner.  It can take multiple _sub-parameters_, separated by semicolon, allowing to specify different aspects of a query.  Currently supported _sub-parameters_ are `country`, `state`, `county`, `city`, `district`, `street`,  `houseNumber`, and `postalCode`.  Format: `{sub-parameter}={string}[;{sub-parameter}={string}]*`  Examples:  * `city=Berlin;country=Germany;street=Friedrichstr;houseNumber=20`  * `city=Berlin;country=Germany`  * `postalCode=10969`  _Note: Either `q` or `qq`-parameter is required on this endpoint. Both parameters can be provided in the same request._
$lang = 'lang_example'; // string | Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes.
$show = array('show_example'); // string[] | Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  BETA: 'parsing'
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->geocodeGet($at, $in, $limit, $q, $qq, $lang, $show, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geocodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **at** | **string**| Specify the center of the search context expressed as coordinates.  Format: &#x60;{latitude},{longitude}&#x60;  Type: &#x60;{decimal},{decimal}&#x60;  Example: &#x60;-13.163068,-72.545128&#x60; (Machu Picchu Mountain, Peru) | [optional]
 **in** | **string**| Search within a geographic area. This is a hard filter. Results will be returned if they are located within the specified area.  A geographic area can be   * a country (or multiple countries), provided as comma-separated [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country codes     The country codes are to be provided in all uppercase.     Format: &#x60;countryCode:{countryCode}[,{countryCode}]*&#x60;     Examples:     * &#x60;countryCode:USA&#x60;     * &#x60;countryCode:CAN,MEX,USA&#x60; | [optional]
 **limit** | **int**| Maximum number of results to be returned. | [optional] [default to 20]
 **q** | **string**| Enter a free-text query  Examples:  * &#x60;125, Berliner, berlin&#x60;  * &#x60;Beacon, Boston, Hospital&#x60;  * &#x60;Schnurrbart German Pub and Restaurant, Hong Kong&#x60;  _Note: Either &#x60;q&#x60; or &#x60;qq&#x60;-parameter is required on this endpoint. Both parameters can be provided in the same request._ | [optional]
 **qq** | **string**| Enter a qualified query. A qualified query is similar to a free-text query, but in a structured manner.  It can take multiple _sub-parameters_, separated by semicolon, allowing to specify different aspects of a query.  Currently supported _sub-parameters_ are &#x60;country&#x60;, &#x60;state&#x60;, &#x60;county&#x60;, &#x60;city&#x60;, &#x60;district&#x60;, &#x60;street&#x60;,  &#x60;houseNumber&#x60;, and &#x60;postalCode&#x60;.  Format: &#x60;{sub-parameter}&#x3D;{string}[;{sub-parameter}&#x3D;{string}]*&#x60;  Examples:  * &#x60;city&#x3D;Berlin;country&#x3D;Germany;street&#x3D;Friedrichstr;houseNumber&#x3D;20&#x60;  * &#x60;city&#x3D;Berlin;country&#x3D;Germany&#x60;  * &#x60;postalCode&#x3D;10969&#x60;  _Note: Either &#x60;q&#x60; or &#x60;qq&#x60;-parameter is required on this endpoint. Both parameters can be provided in the same request._ | [optional]
 **lang** | **string**| Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes. | [optional]
 **show** | [**string[]**](../Model/string.md)| Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  BETA: &#39;parsing&#39; | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\OpenSearchGeocodeResponse**](../Model/OpenSearchGeocodeResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookupGet()`

```php
lookupGet($id, $lang, $show, $x_request_id): \Here\Model\LookupResponse
```

Lookup By ID

This endpoint looks up a known place by the HERE ID included in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = here:pds:place:276u33db-8097f3194e4b411081b761ea9a366776; // string | Location ID, which is the ID of a result item eg. of a Discover request
$lang = 'lang_example'; // string | Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes.
$show = array('show_example'); // string[] | Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  'phonemes': Renders phonemes for address and place names into the results.
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->lookupGet($id, $lang, $show, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->lookupGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Location ID, which is the ID of a result item eg. of a Discover request |
 **lang** | **string**| Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes. | [optional]
 **show** | [**string[]**](../Model/string.md)| Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  &#39;phonemes&#39;: Renders phonemes for address and place names into the results. | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\LookupResponse**](../Model/LookupResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revgeocodeGet()`

```php
revgeocodeGet($at, $limit, $lang, $show, $x_request_id): \Here\Model\OpenSearchReverseGeocodeResponse
```

Reverse Geocode

This endpoint returns the nearest address to geo coordinates specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Here\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Here\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Here\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Here\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$at = 52.5308,13.3856; // string | Specify the center of the search context expressed as coordinates.  Format: `{latitude},{longitude}`  Type: `{decimal},{decimal}`  Example: `-13.163068,-72.545128` (Machu Picchu Mountain, Peru)
$limit = 1; // int | Maximum number of results to be returned.
$lang = 'lang_example'; // string | Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes.
$show = array('show_example'); // string[] | Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  BETA: 'parsing'
$x_request_id = 'x_request_id_example'; // string | Used to correlate requests with their responses within a customer's application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended.

try {
    $result = $apiInstance->revgeocodeGet($at, $limit, $lang, $show, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->revgeocodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **at** | **string**| Specify the center of the search context expressed as coordinates.  Format: &#x60;{latitude},{longitude}&#x60;  Type: &#x60;{decimal},{decimal}&#x60;  Example: &#x60;-13.163068,-72.545128&#x60; (Machu Picchu Mountain, Peru) |
 **limit** | **int**| Maximum number of results to be returned. | [optional] [default to 1]
 **lang** | **string**| Select the language to be used for result rendering from a list of [BCP 47](https://en.wikipedia.org/wiki/IETF_language_tag) compliant language codes. | [optional]
 **show** | [**string[]**](../Model/string.md)| Select additional fields to be rendered in the response. Please note that some of the fields involve additional webservice calls and can increase the overall response time.  The value is a comma-separated list of the sections to be enabled. For each section there is a long and a short version of its id.  Description of accepted values:  BETA: &#39;parsing&#39; | [optional]
 **x_request_id** | **string**| Used to correlate requests with their responses within a customer&#39;s application, for logging and error reporting.  Format: Free string, but a valid UUIDv4 is recommended. | [optional]

### Return type

[**\Here\Model\OpenSearchReverseGeocodeResponse**](../Model/OpenSearchReverseGeocodeResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
