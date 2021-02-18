# # GeocodeResultItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The localized display name of this result item. |
**id** | **string** | The unique identifier for the result item. This ID can be used for a Look Up by ID search as well. | [optional]
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
**food_types** | [**Category[]**](Category.md) | The list of food types assigned to this place. | [optional]
**house_number_fallback** | **bool** | If true, indicates that the requested house number was corrected to match the nearest known house number. This field is visible only when the value is true. | [optional]
**scoring** | [**Scoring**](Scoring.md) | Indicates for each result how good the result matches to the original query. This can be used by the customer application to accept or reject the results depending on how \&quot;expensive\&quot; is the mistake for their use case | [optional]
**parsing** | [**Parsing**](Parsing.md) | BETA - Parsed terms and their positions in the input query (only rendered if &#39;show&#x3D;parsing&#39; is provided.) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
