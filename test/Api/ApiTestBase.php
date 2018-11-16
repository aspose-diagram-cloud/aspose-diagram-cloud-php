<?php

namespace Aspose\Diagram\Cloud;

require_once('..\..\vendor\autoload.php');

use Aspose\Diagram\Cloud\ApiException;
use Aspose\Diagram\Cloud\ObjectSerializer;
use Aspose\Diagram\Cloud\Api\OAuthApi;
use Aspose\Storage\Api;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Diagram\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
 class ApiTestBase
{
    private static $accessToken = '';

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public static function getAccessToken()
    {
        if(self::$accessToken === ''){
            $grantType = "client_credentials";
            $clientId = "xxxxxxxx";
            $clientSecret = "xxxxxx";
            $api = new OAuthApi();
            $config = $api->getConfig();
            $config->setHost('https://api.aspose.cloud');
            $AccessTokenResponse  =  $api->oAuthPost( $grantType, $clientId, $clientSecret);
            self::$accessToken = $AccessTokenResponse->getAccessToken();
        }
        return self::$accessToken;
    }


     public static function upload($localFilePath,$filename , $folder, $storageName = null)
     {
         $config=new \Aspose\Storage\Configuration();
         $config->setAppSid("xxxxxxxx");
         $config->setAppKey("xxxxxx");
         $storage = new Api\StorageApi($config);

         $fullName=$folder . "/" .  $filename;
         $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $localFilePath);
         $result = $storage->PutCreate($putRequest);
         return $result;
     }
}