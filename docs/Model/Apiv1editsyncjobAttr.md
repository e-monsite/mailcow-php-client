# Apiv1editsyncjobAttr

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Is sync job active | [optional] 
**automap** | **bool** | Try to automap folders (\&quot;Sent items\&quot;, \&quot;Sent\&quot; &#x3D;&gt; \&quot;Sent\&quot; etc.) | [optional] 
**custom_params** | **string** | Custom parameters passed to imapsync command | [optional] 
**delete1** | **bool** | Delete from source when completed | [optional] 
**delete2** | **bool** | Delete messages on destination that are not on source | [optional] 
**delete2duplicates** | **bool** | Delete duplicates on destination | [optional] 
**enc1** | **string** | Encryption | [optional] 
**exclude** | **string** | Exclude objects (regex) | [optional] 
**host1** | **string** | Hostname | [optional] 
**maxage** | **float** | Maximum age of messages in days that will be polled from remote (0 &#x3D; ignore age) | [optional] 
**maxbytespersecond** | **float** | Max. bytes per second (0 &#x3D; unlimited) | [optional] 
**mins_interval** | **float** | Interval (min) | [optional] 
**password1** | **string** | Password | [optional] 
**port1** | **string** | Port | [optional] 
**skipcrossduplicates** | **bool** | Skip duplicate messages across folders (first come, first serve) | [optional] 
**subfolder2** | **string** | Sync into subfolder on destination (empty &#x3D; do not use subfolder) | [optional] 
**subscribeall** | **bool** | Subscribe all folders | [optional] 
**timeout1** | **float** | Timeout for connection to remote host | [optional] 
**timeout2** | **float** | Timeout for connection to local host | [optional] 
**user1** | **string** | Username | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

