// For complete examples and data files, please go to https://github.com/aspose-diagram-cloud/aspose-diagram-cloud-php
<?php
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
	
	public function getDocumentInfo() {
		$fileName ='file_get_1.vdx';

		// Upload file to Cloud Storage
		$localFilePath = realpath(__DIR__ . '/..') . '/testData/' . $fileName;
		$folder = "";
		Utils::upload($localFilePath, $fileName, $folder);

        $folder = "";
        $result = $this->diagramApi->diagramFileGetDiagram($fileName, "pdf", $folder, null);
		print_r ( $result );
	}
}

$diagramFile = new DiagramFile();
$diagramFile->getDocumentInfo();

?>
