<?php

namespace Aspose\Diagram\Cloud;

require_once('..\..\vendor\autoload.php');

use \Aspose\Diagram\Cloud\Api\DiagramApi;
use \Aspose\Diagram\Cloud\Api\StorageApi;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Diagram\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
 class TestBase
{
     public static $grantType = "client_credentials";
     public static $clientId = "yourClientId";
     public static $clientSecret = "yourClientSecret";

    public static $storageTestFOLDER = "SDKTests\\PHP";
   
    public static function getDiagramApi()
    {
        static $diagramApi = null;
        if($diagramApi === null){
            $diagramApi = new DiagramApi(self::$grantType,self::$clientId,self::$clientSecret);
        }
        return $diagramApi;
    }

    public static function getStorageApi()
    {
        static $storageApi = null;
        if($storageApi === null){
            $storageApi = new StorageApi(self::$grantType,self::$clientId,self::$clientSecret);
        }
        return $storageApi;
    }

    public static function PrintDebugInfo($message){
        echo $message;
        echo "\r\n";
    }
}