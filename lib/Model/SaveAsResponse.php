<?php
/**
 * SaveAsResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Diagram\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aspose.Diagram Cloud API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\Diagram\Cloud\Model;
use \Aspose\Diagram\Cloud\ObjectSerializer;

/**
 * SaveAsResponse Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Diagram\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaveAsResponse extends SaaSposeResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SaveAsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source_file' => 'string',
        'saved_file' => 'string',
        'additionals' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source_file' => null,
        'saved_file' => null,
        'additionals' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'source_file' => 'SourceFile',
        'saved_file' => 'SavedFile',
        'additionals' => 'Additionals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_file' => 'setSourceFile',
        'saved_file' => 'setSavedFile',
        'additionals' => 'setAdditionals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_file' => 'getSourceFile',
        'saved_file' => 'getSavedFile',
        'additionals' => 'getAdditionals'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['source_file'] = isset($data['source_file']) ? $data['source_file'] : null;
        $this->container['saved_file'] = isset($data['saved_file']) ? $data['saved_file'] : null;
        $this->container['additionals'] = isset($data['additionals']) ? $data['additionals'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets source_file
     *
     * @return string
     */
    public function getSourceFile()
    {
        return $this->container['source_file'];
    }

    /**
     * Sets source_file
     *
     * @param string $source_file source_file
     *
     * @return $this
     */
    public function setSourceFile($source_file)
    {
        $this->container['source_file'] = $source_file;

        return $this;
    }

    /**
     * Gets saved_file
     *
     * @return string
     */
    public function getSavedFile()
    {
        return $this->container['saved_file'];
    }

    /**
     * Sets saved_file
     *
     * @param string $saved_file saved_file
     *
     * @return $this
     */
    public function setSavedFile($saved_file)
    {
        $this->container['saved_file'] = $saved_file;

        return $this;
    }

    /**
     * Gets additionals
     *
     * @return string[]
     */
    public function getAdditionals()
    {
        return $this->container['additionals'];
    }

    /**
     * Sets additionals
     *
     * @param string[] $additionals additionals
     *
     * @return $this
     */
    public function setAdditionals($additionals)
    {
        $this->container['additionals'] = $additionals;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

