# # CreateSyncJobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameters** | **string** | your local mailcow mailbox | [optional]
**host1** | **string** | the smtp server where mails should be synced from | [optional]
**port1** | **string** | the smtp port of the target mail server | [optional]
**password** | **string** | the password of the mailbox | [optional]
**enc1** | **string** | the encryption method used to connect to the mailserver | [optional]
**minsInternal** | **float** | the interval in which messages should be syned | [optional]
**subfolder2** | **string** | sync into subfolder on destination (empty &#x3D; do not use subfolder) | [optional]
**maxage** | **float** | only sync messages up to this age in days | [optional]
**maxbytespersecond** | **float** | max speed transfer limit for the sync | [optional]
**timeout1** | **float** | timeout for connection to remote host | [optional]
**timeout2** | **float** | timeout for connection to local host | [optional]
**exclude** | **string** | exclude objects (regex) | [optional]
**customParams** | **string** | custom parameters | [optional]
**delete2duplicates** | **bool** | delete duplicates on destination (--delete2duplicates) | [optional]
**delete1** | **bool** | delete from source when completed (--delete1) | [optional]
**delete2** | **bool** | delete messages on destination that are not on source (--delete2) | [optional]
**automap** | **bool** | try to automap folders (\&quot;Sent items\&quot;, \&quot;Sent\&quot; &#x3D;&gt; \&quot;Sent\&quot; etc.) (--automap) | [optional]
**skipcrossduplicates** | **bool** | skip duplicate messages across folders (first come, first serve) (--skipcrossduplicates) | [optional]
**subscribeall** | **bool** | subscribe all folders (--subscribeall) | [optional]
**active** | **bool** | enables or disables the sync job | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
