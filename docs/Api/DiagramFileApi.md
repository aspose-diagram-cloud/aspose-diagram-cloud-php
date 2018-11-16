# Aspose\Diagram\Cloud\DiagramFileApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diagramFileGetDiagram**](DiagramFileApi.md#diagramFileGetDiagram) | **GET** /diagram/{name} | Read document info or export.
[**diagramFilePostSaveAs**](DiagramFileApi.md#diagramFilePostSaveAs) | **POST** /diagram/{name}/SaveAs | Convert document and save result to storage.
[**diagramFilePutCreate**](DiagramFileApi.md#diagramFilePutCreate) | **PUT** /diagram/{name} | Create new diagram and save result to storage.
[**diagramFilePutUpload**](DiagramFileApi.md#diagramFilePutUpload) | **PUT** /diagram/{name}/upload | Upload file and save result to storage.


# **diagramFileGetDiagram**
> \SplFileObject diagramFileGetDiagram($name, $format, $folder, $storage)

Read document info or export.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Diagram\Cloud\Api\DiagramFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$format = "format_example"; // string | The exported file format.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->diagramFileGetDiagram($name, $format, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagramFileApi->diagramFileGetDiagram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **format** | **string**| The exported file format. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diagramFilePostSaveAs**
> \Aspose\Diagram\Cloud\Model\SaveResponse diagramFilePostSaveAs($name, $format, $newfilename, $folder, $is_overwrite, $storage)

Convert document and save result to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Diagram\Cloud\Api\DiagramFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$format = new \Aspose\Diagram\Cloud\Model\FileFormatRequest(); // \Aspose\Diagram\Cloud\Model\FileFormatRequest | Save format.
$newfilename = "newfilename_example"; // string | The new file name.
$folder = "folder_example"; // string | The document folder.
$is_overwrite = false; // bool | If true overwrite the same name file.The default value is false.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->diagramFilePostSaveAs($name, $format, $newfilename, $folder, $is_overwrite, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagramFileApi->diagramFilePostSaveAs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **format** | [**\Aspose\Diagram\Cloud\Model\FileFormatRequest**](../Model/FileFormatRequest.md)| Save format. | [optional]
 **newfilename** | **string**| The new file name. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **is_overwrite** | **bool**| If true overwrite the same name file.The default value is false. | [optional] [default to false]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Diagram\Cloud\Model\SaveResponse**](../Model/SaveResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diagramFilePutCreate**
> \Aspose\Diagram\Cloud\Model\SaaSposeResponse diagramFilePutCreate($name, $folder, $is_overwrite, $storage)

Create new diagram and save result to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Diagram\Cloud\Api\DiagramFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The new document name.
$folder = "folder_example"; // string | The new document folder.
$is_overwrite = false; // bool | If true overwrite the same name file.The default value is false.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->diagramFilePutCreate($name, $folder, $is_overwrite, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagramFileApi->diagramFilePutCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The new document name. |
 **folder** | **string**| The new document folder. | [optional]
 **is_overwrite** | **bool**| If true overwrite the same name file.The default value is false. | [optional] [default to false]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Diagram\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diagramFilePutUpload**
> \Aspose\Diagram\Cloud\Model\SaaSposeResponse diagramFilePutUpload($name, $folder, $is_overwrite, $storage)

Upload file and save result to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Diagram\Cloud\Api\DiagramFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.
$is_overwrite = false; // bool | If true overwrite the same name file.The default value is false.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->diagramFilePutUpload($name, $folder, $is_overwrite, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagramFileApi->diagramFilePutUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **is_overwrite** | **bool**| If true overwrite the same name file.The default value is false. | [optional] [default to false]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Diagram\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

