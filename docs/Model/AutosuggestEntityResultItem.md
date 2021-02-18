# # AutosuggestEntityResultItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The localized display name of this result item. |
**id** | **string** | The unique identifier for the result item. This ID can be used for a Look Up by ID search as well. | [optional]
**ontology_id** | **string** | Related ontology ID | [optional]
**result_type** | **string** | WARNING: The resultType values &#39;intersection&#39; and &#39;postalCodePoint&#39; are in BETA state | [optional]
**house_number_type** | **string** |  | [optional]
**address_block_type** | **string** |  | [optional]
**locality_type** | **string** |  | [optional]
**administrative_area_type** | **string** |  | [optional]
**address** | [**Address**](Address.md) | Postal address of the result item. Detailed address fields are rendered only if &#39;show&#x3D;details&#39; is provided. |
**distance** | **int** | The distance from the search center to this result item in meters. For example: \&quot;172039\&quot; | [optional]
**categories** | [**Category[]**](Category.md) | The list of categories assigned to this place. | [optional]
**chains** | [**Chain[]**](Chain.md) | The list of chains assigned to this place. | [optional]
**references** | [**SupplierReference[]**](SupplierReference.md) | The list of supplier references available for this place. | [optional]
**food_types** | [**Category[]**](Category.md) | The list of food types assigned to this place. | [optional]
**contacts** | [**ContactInformation[]**](ContactInformation.md) | BETA - Contact information like phone, email, WWW. (rendered only if &#39;show&#x3D;details&#39; is provided.) | [optional]
**opening_hours** | [**OpeningHours[]**](OpeningHours.md) | BETA - A list of hours during which the place is open for business. (rendered only if &#39;show&#x3D;details&#39; is provided.) | [optional]
**highlights** | [**TitleAndAddressHighlighting**](TitleAndAddressHighlighting.md) | Describes how the parts of the response element matched the input query | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
