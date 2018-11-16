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
            $clientId = "84220e69-32e2-41c4-ba2f-662a0a01433e";
            $clientSecret = "883dc8d6b8ecd879dae35cb363e9eb56";
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
         $config->setAppSid("84220e69-32e2-41c4-ba2f-662a0a01433e");
         $config->setAppKey("883dc8d6b8ecd879dae35cb363e9eb56");
         $storage = new Api\StorageApi($config);

         $fullName=$folder . "/" .  $filename;
         $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $localFilePath);
         $result = $storage->PutCreate($putRequest);
         return $result;
     }
}