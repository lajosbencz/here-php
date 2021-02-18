# # OneboxSearchResultItem

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
**address** | [**Address**](Address.md) | Postal address of the result item. |
**position** | [**DisplayResponseCoordinate**](DisplayResponseCoordinate.md) | The coordinates (latitude, longitude) of a pin on a map corresponding to the searched place. | [optional]
**access** | [**AccessResponseCoordinate[]**](AccessResponseCoordinate.md) | Coordinates of the place you are navigating to (for example, driving or walking). This is a point on a road or in a parking lot. | [optional]
**distance** | **int** | The distance from the search center to this result item in meters. For example: \&quot;172039\&quot; | [optional]
**map_view** | [**MapView**](MapView.md) | The bounding box enclosing the geometric shape (area or line) that an individual result covers. &#x60;place&#x60; typed results have no &#x60;mapView&#x60;. | [optional]
**categories** | [**Category[]**](Category.md) | The list of categories assigned to this place. | [optional]
**chains** | [**Chain[]**](Chain.md) | The list of chains assigned to this place. | [optional]
**references** | [**SupplierReference[]**](SupplierReference.md) | The list of supplier references available for this place. | [optional]
**food_types** | [**Category[]**](Category.md) | The list of food types assigned to this place. | [optional]
**house_number_fallback** | **bool** | If true, indicates that the requested house number was corrected to match the nearest known house number. This field is visible only when the value is true. | [optional]
**contacts** | [**ContactInformation[]**](ContactInformation.md) | Contact information like phone, email, WWW. | [optional]
**opening_hours** | [**OpeningHours[]**](OpeningHours.md) | A list of hours during which the place is open for business. | [optional]
**phonemes** | [**PhonemesSection**](PhonemesSection.md) | Phonemes for address and place names. (only rendered if &#39;show&#x3D;phonemes&#39; is provided.) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
