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
	
	public function createNewFile() {
		$fileName = "file_create_php.vdx";
		$isOverwrite = 'true';
        $folder= "";
        $result = $this->diagramApi->diagramFilePutCreate($fileName, $folder, $isOverwrite);
        $json = json_decode($result);
		print_r ( $json );
	}
}

$diagramFile = new DiagramFile();
$diagramFile->createNewFile();

?>
