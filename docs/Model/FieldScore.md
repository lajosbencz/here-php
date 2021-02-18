# # FieldScore

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **double** | Indicates how good the result country name or [ISO 3166-1 alpha-3] country code matches to the freeform or qualified input. | [optional]
**country_code** | **double** | Indicates how good the result [ISO 3166-1 alpha-3] country code matches to the freeform or qualified input. | [optional]
**state** | **double** | Indicates how good the result state name matches to the freeform or qualified input. | [optional]
**state_code** | **double** | Indicates how good the result state code matches to the freeform or qualified input. | [optional]
**county** | **double** | Indicates how good the result county name matches to the freeform or qualified input. | [optional]
**county_code** | **double** | Indicates how good the result county code matches to the freeform or qualified input. | [optional]
**city** | **double** | Indicates how good the result city name matches to the freeform or qualified input. | [optional]
**district** | **double** | Indicates how good the result district name matches to the freeform or qualified input. | [optional]
**subdistrict** | **double** | Indicates how good the result sub-district name matches to the freeform or qualified input. | [optional]
**streets** | **double[]** | Indicates how good the result street names match to the freeform or qualified input. If the input contains multiple street names, the field score is calculated and returned for each of them individually. | [optional]
**block** | **double** | Indicates how good the result block name matches to the freeform or qualified input. | [optional]
**subblock** | **double** | Indicates how good the result sub-block name matches to the freeform or qualified input. | [optional]
**house_number** | **double** | Indicates how good the result house number matches to the freeform or qualified input. It may happen, that the house number, which one is looking for, is not yet in the map data. For such cases, the /geocode returns the nearest known house number on the same street. This represents the numeric difference between the requested and the returned house numbers. | [optional]
**postal_code** | **double** | Indicates how good the result postal code matches to the freeform or qualified input. | [optional]
**building** | **double** | Indicates how good the result building name matches to the freeform or qualified input. | [optional]
**unit** | **double** | Indicates how good the result unit (such as a micro point address) matches to the freeform or qualified input. | [optional]
**place_name** | **double** | Indicates how good the result place name matches to the freeform or qualified input. | [optional]
**ontology_name** | **double** | Indicates how good the result ontology name matches to the freeform or qualified input. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
