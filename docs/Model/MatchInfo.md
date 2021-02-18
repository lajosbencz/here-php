# # MatchInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start** | **int** | First index of the matched range (0-based indexing, inclusive) |
**end** | **int** | One past the last index of the matched range (0-based indexing, exclusive); The difference between end and start gives the length of the term |
**value** | **string** | Matched term in the input string |
**qq** | **string** | The matched qualified query field type. If this is not returned, then matched value refers to the freetext query | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
