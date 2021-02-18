# # AutocompleteResultItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The unified display name of this result item. The result title is composed so that the customer application can use it to render the suggestions with highlighting. It is build in a unified way for all the countries starting from the country name and down to the address line. It is build out of the address components that are important for the end-user to recognize and eventually to choose a result and includes all the input terms. For example: \&quot;Germany, 32547, Bad Oeynhausen, Schulstraße 4\&quot; |
**id** | **string** | The unique identifier for the result item. This ID can be used for a Look Up by ID search as well. | [optional]
**result_type** | **string** | WARNING: The resultType values &#39;intersection&#39; and &#39;postalCodePoint&#39; are in BETA state | [optional]
**house_number_type** | **string** |  | [optional]
**locality_type** | **string** |  | [optional]
**administrative_area_type** | **string** |  | [optional]
**address** | [**Address**](Address.md) | Detailed address of the result item. |
**highlights** | [**TitleAndAddressHighlighting**](TitleAndAddressHighlighting.md) | Describes how the parts of the response element matched the input query | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
