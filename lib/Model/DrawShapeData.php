<?php
/**
 * DrawShapeData
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

use \ArrayAccess;
use \Aspose\Diagram\Cloud\ObjectSerializer;

/**
 * DrawShapeData Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Diagram\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DrawShapeData implements  ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DrawShapeData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pin_x' => 'double',
        'pin_y' => 'double',
        'width' => 'double',
        'height' => 'double',
        'shape_style_data' => '\Aspose\Diagram\Cloud\Model\ShapeStyleData',
        'text' => 'string',
        'text_style_data' => '\Aspose\Diagram\Cloud\Model\TextStyleData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pin_x' => 'double',
        'pin_y' => 'double',
        'width' => 'double',
        'height' => 'double',
        'shape_style_data' => null,
        'text' => null,
        'text_style_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pin_x' => 'PinX',
        'pin_y' => 'PinY',
        'width' => 'Width',
        'height' => 'Height',
        'shape_style_data' => 'ShapeStyleData',
        'text' => 'Text',
        'text_style_data' => 'TextStyleData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pin_x' => 'setPinX',
        'pin_y' => 'setPinY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'shape_style_data' => 'setShapeStyleData',
        'text' => 'setText',
        'text_style_data' => 'setTextStyleData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pin_x' => 'getPinX',
        'pin_y' => 'getPinY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'shape_style_data' => 'getShapeStyleData',
        'text' => 'getText',
        'text_style_data' => 'getTextStyleData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['pin_x'] = isset($data['pin_x']) ? $data['pin_x'] : null;
        $this->container['pin_y'] = isset($data['pin_y']) ? $data['pin_y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['shape_style_data'] = isset($data['shape_style_data']) ? $data['shape_style_data'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['text_style_data'] = isset($data['text_style_data']) ? $data['text_style_data'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pin_x'] === null) {
            $invalidProperties[] = "'pin_x' can't be null";
        }
        if ($this->container['pin_y'] === null) {
            $invalidProperties[] = "'pin_y' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
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

        if ($this->container['pin_x'] === null) {
            return false;
        }
        if ($this->container['pin_y'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets pin_x
     *
     * @return double
     */
    public function getPinX()
    {
        return $this->container['pin_x'];
    }

    /**
     * Sets pin_x
     *
     * @param double $pin_x pin_x
     *
     * @return $this
     */
    public function setPinX($pin_x)
    {
        $this->container['pin_x'] = $pin_x;

        return $this;
    }

    /**
     * Gets pin_y
     *
     * @return double
     */
    public function getPinY()
    {
        return $this->container['pin_y'];
    }

    /**
     * Sets pin_y
     *
     * @param double $pin_y pin_y
     *
     * @return $this
     */
    public function setPinY($pin_y)
    {
        $this->container['pin_y'] = $pin_y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets shape_style_data
     *
     * @return \Aspose\Diagram\Cloud\Model\ShapeStyleData
     */
    public function getShapeStyleData()
    {
        return $this->container['shape_style_data'];
    }

    /**
     * Sets shape_style_data
     *
     * @param \Aspose\Diagram\Cloud\Model\ShapeStyleData $shape_style_data shape_style_data
     *
     * @return $this
     */
    public function setShapeStyleData($shape_style_data)
    {
        $this->container['shape_style_data'] = $shape_style_data;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets text_style_data
     *
     * @return \Aspose\Diagram\Cloud\Model\TextStyleData
     */
    public function getTextStyleData()
    {
        return $this->container['text_style_data'];
    }

    /**
     * Sets text_style_data
     *
     * @param \Aspose\Diagram\Cloud\Model\TextStyleData $text_style_data text_style_data
     *
     * @return $this
     */
    public function setTextStyleData($text_style_data)
    {
        $this->container['text_style_data'] = $text_style_data;

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


