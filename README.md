# Aspose.Diagram.Cloud
## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer
diagram-sdk-php is available on Packagist as the diagram-sdk-php package. Run the following command:
```bash
composer require aspose/diagram-sdk-php
```

To use the SDK, use Composer's autoload:
```php
require_once('vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DiagramFileApi* | [**diagramFileGetDiagram**](docs/Api/DiagramFileApi.md#diagramfilegetdiagram) | **GET** /diagram/{name} | Read document info or export.
*DiagramFileApi* | [**diagramFilePostSaveAs**](docs/Api/DiagramFileApi.md#diagramfilepostsaveas) | **POST** /diagram/{name}/SaveAs | Convert document and save result to storage.
*DiagramFileApi* | [**diagramFilePutCreate**](docs/Api/DiagramFileApi.md#diagramfileputcreate) | **PUT** /diagram/{name} | Create new diagram and save result to storage.
*DiagramFileApi* | [**diagramFilePutUpload**](docs/Api/DiagramFileApi.md#diagramfileputupload) | **PUT** /diagram/{name}/upload | Upload file and save result to storage.
*OAuthApi* | [**oAuthPost**](docs/Api/OAuthApi.md#oauthpost) | **POST** /oauth2/token | Get Access token


## Documentation For Models

 - [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
 - [DiagramModel](docs/Model/DiagramModel.md)
 - [FileFormatRequest](docs/Model/FileFormatRequest.md)
 - [Link](docs/Model/Link.md)
 - [PageModel](docs/Model/PageModel.md)
 - [SaaSposeResponse](docs/Model/SaaSposeResponse.md)
 - [SaveResult](docs/Model/SaveResult.md)
 - [SharpModel](docs/Model/SharpModel.md)
 - [DiagramResponse](docs/Model/DiagramResponse.md)
 - [SaveResponse](docs/Model/SaveResponse.md)


## Documentation For Authorization


## appsid

- **Type**: API key
- **API key parameter name**: appsid
- **Location**: URL query string

## oauth

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: 
- **Scopes**: 
 - **write:pets**: modify pets in your account

## signature

- **Type**: API key
- **API key parameter name**: signature
- **Location**: URL query string





