# # CreateDomainRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | is domain active or not | [optional]
**aliases** | **float** | limit count of aliases associated with this domain | [optional]
**backupmx** | **bool** | relay domain or not | [optional]
**defquota** | **float** | predefined mailbox quota in &#x60;add mailbox&#x60; form | [optional]
**description** | **string** | Description of domain | [optional]
**domain** | **string** | Fully qualified domain name | [optional]
**mailboxes** | **float** | limit count of mailboxes associated with this domain | [optional]
**maxquota** | **float** | maximum quota per mailbox | [optional]
**quota** | **float** | maximum quota for this domain (for all mailboxes in sum) | [optional]
**restartSogo** | **float** | restart SOGo to activate the domain in SOGo | [optional]
**relayAllRecipients** | **bool** | if not, them you have to create \&quot;dummy\&quot; mailbox for each address to relay | [optional]
**rlFrame** | **string** |  | [optional]
**rlValue** | **float** | rate limit value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
