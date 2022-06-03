# # CreateAliasRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | is alias active or not | [optional]
**address** | **string** | alias address, for catchall use \&quot;@domain.tld\&quot; | [optional]
**goto** | **string** | destination address, comma separated | [optional]
**gotoHam** | **bool** | learn as ham | [optional]
**gotoNull** | **bool** | silently ignore | [optional]
**gotoSpam** | **bool** | learn as spam | [optional]
**sogoVisible** | **bool** | toggle visibility as selectable sender in SOGo | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
