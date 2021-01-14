![](https://img.shields.io/badge/api-v3.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/aspose/diagram-sdk-php) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/aspose/diagram-sdk-php) [![GitHub license](https://img.shields.io/github/license/aspose-diagram-cloud/aspose-Diagram-cloud-php)](https://github.com/aspose-diagram-cloud/aspose-Diagram-cloud-php/blob/master/LICENSE)

# PHP Cloud REST API for Visio Processing

[Aspose.Diagram Cloud SDK for PHP](https://products.aspose.cloud/diagram/php) helps you develop Visio file manipulation applications with the help of Aspose.Diagram REST API. It allows your applications to work with Microsoft Visio Object Model in order to create the diagrams from scratch or convert diagrams to popular formats including PDF, HTML, images and other Visio formats.

## Visio Processing Features

- [Convert diagrams](https://docs.aspose.cloud/diagram/convert-diagram-file-to-another-format/) to 20+ different file formats.
- Retrieve document information of a Visio diagram.
- Programmatically create a new Microsoft Visio diagram file.
- Convert Visio flow-charts to other supported formats.
- Upload your business-oriented Visio diagrams to cloud storage.
- Export Visio files to raster images, fixed-layout, and HTML formats.

Please refer to [Developer's Guide](https://docs.aspose.cloud/diagram/developer-guide/) to see what else you can achieve.
## Read & Write Visio Formats

**Microsoft Visio:** VSDX, VSX, VTX, VDX, VSSX, VSTX, VSDM, VSSM, VSTM

## Save Visio As

**Fixed Layout:** PDF, XPS
**Images:** JPEG, PNG, BMP, TIFF, SVG, EMF
**Web:** HTML
**Other:** XAML, SWF

## Read Visio Formats

**Microsoft Visio:** VDW, VSD, VSS, VST


## New Features in Version 20.3

Added support to draw following objects on a page:
- Polyline
- Line
- Ellipse

Added support to:
- Set page setting  
- Add new empty page
- Get pages info

For the detailed notes, please visit [Aspose.Diagram Cloud 20.3 Release Notes](https://docs.aspose.cloud/diagram/aspose-diagram-cloud-20-3-release-notes/).

## How to use the SDK

The complete source code is available at the [GitHub Repository](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-php). You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/diagram-sdk-php) (recommended). For more details, please visit our [documentation website](https://docs.aspose.cloud/diagram/).

## Prerequisites

To use Aspose Cells Cloud SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

## Installation via Composer

*diagram-sdk-php* is available on [Packagist](https://packagist.org/packages/aspose/diagram-sdk-php) as the `diagram-sdk-php` package. Run the following command:

```console
composer require aspose/diagram-sdk-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Examples

Please, look at [Examples](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-php/blob/master/EXAMPLES.md) document for basic usage or use the [Examples](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-php/blob/master/Examples) folder for more sophisticated scenarios.

## Use PHP Code to Convert VDX Diagram to other Formats

```php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/Utils.php');

use Aspose\Diagram\Cloud\Api\DiagramFileApi;
use \Aspose\Diagram\Cloud\Configuration;
use \Aspose\Diagram\Cloud\Model;
use \Aspose\Diagram\Cloud\ObjectSerializer;

class DiagramFile {

    public $diagramApi;

    public function __construct() {
        $this->diagramApi = new DiagramFileApi();
        $config = $this->diagramApi->getConfig();
        $token = Utils::getAccessToken();
        $config ->setAccessToken($token);
    }

    public function saveFileAsAnotherFormat() {
        $fileName ='file_get_1.vdx';
        $isOverwrite = 'true';
        $folder= "";
        $format = new \Aspose\Diagram\Cloud\Model\FileFormatRequest();
        $format->setFormat("pdf");
        $newfilename = "file_saveas_php.pdf";
        $result = $this->diagramApi->DiagramFilePostSaveAs($fileName, $format, $newfilename, $folder, $isOverwrite);
        $json = json_decode($result);
        print_r ( $json );
    }
}

$diagramFile = new DiagramFile();
$diagramFile->saveFileAsAnotherFormat();
```

## Aspose.Diagram Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js | Android | Perl | Swift |
|---|---|---|---|---|---|---|---|---|
| [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-dotnet) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-java) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-php) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-python) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-ruby)  | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-node) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-android) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-perl) | [GitHub](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-swift) |
| [NuGet](https://www.nuget.org/packages/Aspose.Diagram-Cloud/) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-diagram-cloud) | [Composer](https://packagist.org/packages/aspose/diagram-sdk-php) | [PIP](https://pypi.org/project/asposediagramcloud/) | [GEM](https://rubygems.org/gems/aspose_diagram_cloud)  | [NPM](https://www.npmjs.com/package/asposediagramcloud) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-diagram-cloud-android) |  [CPAN](https://metacpan.org/release/AsposeDiagramCloud-DiagramApi) | [POD](https://cocoapods.org/pods/AsposeDiagramCloud) |

[Home](https://www.aspose.cloud) | [Product Page](https://products.aspose.cloud/diagram/php) | [Documentation](https://docs.aspose.cloud/diagram/) | [Live Demo](https://products.aspose.app/diagram/family) | [API Reference](https://apireference.aspose.cloud/diagram/) | [Code Samples](https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-php) | [Blog](https://blog.aspose.cloud/category/diagram/) | [Free Support](https://forum.aspose.cloud/c/diagram) | [Free Trial](https://dashboard.aspose.cloud/)
