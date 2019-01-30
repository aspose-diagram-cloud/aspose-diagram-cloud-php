<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Aspose\Diagram\Cloud\ApiException;
use Aspose\Diagram\Cloud\ObjectSerializer;
use Aspose\Diagram\Cloud\Api\OAuthApi;
use Aspose\Storage\Api;

class Utils {
	private static $accessToken = '';
	const appSID = ""; // Get your AppKey and AppSID from http://dashboard.aspose.cloud/
	const apiKey = ""; // Get your AppKey and AppSID from http://dashboard.aspose.cloud/

	/**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
    */
    public static function getAccessToken()
    {
        if(self::$accessToken === ''){
            $grantType = "client_credentials";
            $clientId = Utils::appSID;
            $clientSecret = Utils::apiKey;
            $api = new OAuthApi();
            $config = $api->getConfig();
            $config->setHost('https://api.aspose.cloud');
            $AccessTokenResponse  =  $api->oAuthPost( $grantType, $clientId, $clientSecret);
            self::$accessToken = $AccessTokenResponse->getAccessToken();
        }
        return self::$accessToken;
    }

	public static function upload($localFilePath, $filename, $folder, $storageName = null)
	{
	    $config=new \Aspose\Storage\Configuration();
	    $config->setAppSid(Utils::appSID);
	    $config->setAppKey(Utils::apiKey);
	    $storage = new Api\StorageApi($config);
	    $fullName=$folder . "/" .  $filename;
	    $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $localFilePath);
	    $result = $storage->PutCreate($putRequest);
	    return $result;
	}
}

?>
