# here-php

This document describes the Geocoding and Search API.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/lajosbencz/here-php.git"
    }
  ],
  "require": {
    "lajosbencz/here-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/here-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**autocompleteGet**](docs/Api/DefaultApi.md#autocompleteget) | **GET** /autocomplete | Autocomplete
*DefaultApi* | [**autosuggestGet**](docs/Api/DefaultApi.md#autosuggestget) | **GET** /autosuggest | Autosuggest
*DefaultApi* | [**browseGet**](docs/Api/DefaultApi.md#browseget) | **GET** /browse | Browse
*DefaultApi* | [**discoverGet**](docs/Api/DefaultApi.md#discoverget) | **GET** /discover | Discover
*DefaultApi* | [**geocodeGet**](docs/Api/DefaultApi.md#geocodeget) | **GET** /geocode | Geocode
*DefaultApi* | [**lookupGet**](docs/Api/DefaultApi.md#lookupget) | **GET** /lookup | Lookup By ID
*DefaultApi* | [**revgeocodeGet**](docs/Api/DefaultApi.md#revgeocodeget) | **GET** /revgeocode | Reverse Geocode

## Models

- [AccessResponseCoordinate](docs/Model/AccessResponseCoordinate.md)
- [Address](docs/Model/Address.md)
- [AutocompleteResultItem](docs/Model/AutocompleteResultItem.md)
- [AutosuggestEntityResultItem](docs/Model/AutosuggestEntityResultItem.md)
- [AutosuggestQueryResultItem](docs/Model/AutosuggestQueryResultItem.md)
- [BrowseResultItem](docs/Model/BrowseResultItem.md)
- [Category](docs/Model/Category.md)
- [Chain](docs/Model/Chain.md)
- [Contact](docs/Model/Contact.md)
- [ContactInformation](docs/Model/ContactInformation.md)
- [DisplayResponseCoordinate](docs/Model/DisplayResponseCoordinate.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [FieldScore](docs/Model/FieldScore.md)
- [GeocodeResultItem](docs/Model/GeocodeResultItem.md)
- [LookupResponse](docs/Model/LookupResponse.md)
- [MapView](docs/Model/MapView.md)
- [MatchInfo](docs/Model/MatchInfo.md)
- [OneboxSearchResultItem](docs/Model/OneboxSearchResultItem.md)
- [OpenSearchAutocompleteResponse](docs/Model/OpenSearchAutocompleteResponse.md)
- [OpenSearchAutosuggestResponse](docs/Model/OpenSearchAutosuggestResponse.md)
- [OpenSearchBrowseResponse](docs/Model/OpenSearchBrowseResponse.md)
- [OpenSearchGeocodeResponse](docs/Model/OpenSearchGeocodeResponse.md)
- [OpenSearchReverseGeocodeResponse](docs/Model/OpenSearchReverseGeocodeResponse.md)
- [OpenSearchSearchResponse](docs/Model/OpenSearchSearchResponse.md)
- [OpeningHours](docs/Model/OpeningHours.md)
- [Parsing](docs/Model/Parsing.md)
- [Phoneme](docs/Model/Phoneme.md)
- [PhonemesSection](docs/Model/PhonemesSection.md)
- [QueryTermResultItem](docs/Model/QueryTermResultItem.md)
- [Range](docs/Model/Range.md)
- [Scoring](docs/Model/Scoring.md)
- [StructuredOpeningHours](docs/Model/StructuredOpeningHours.md)
- [Supplier](docs/Model/Supplier.md)
- [SupplierReference](docs/Model/SupplierReference.md)
- [TitleAndAddressHighlighting](docs/Model/TitleAndAddressHighlighting.md)
- [TitleHighlighting](docs/Model/TitleHighlighting.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: apiKey
- **Location**: URL query string



### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.59`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
