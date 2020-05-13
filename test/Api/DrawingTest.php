<?php
/**
 * DiagramApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Aspose\Diagram\Cloud;
use Aspose\Diagram\Cloud\Model\PointF;
use Aspose\Diagram\Cloud\Model\PolylineData;
use Aspose\Diagram\Cloud\Model\LineData;
use Aspose\Diagram\Cloud\Model\EllipseData;
use Aspose\Diagram\Cloud\Model\ShapeStyleData;
use Aspose\Diagram\Cloud\Model\TextStyleData;

require_once('TestBase.php');

/**
 * DiagramApiTest Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Diagram\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DrawingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    static $fileName="drawingTest.vsdx";

    /**
     * Test case for createNew
     *
     * Create Empty file into the specified format..
     *
     */
    public function testCreateNew()
    {
        $diagramApi = TestBase::getDiagramApi();
        $json = $diagramApi->createNew(DrawingTest::$fileName,TestBase::$storageTestFOLDER,"true");
        $result = json_decode($json);
        $this->assertNotEmpty( $result->Created);
        TestBase::PrintDebugInfo("TestCreateNew result:".$json);

    }


    public function testDrawLine()
    {
        $diagramApi = TestBase::getDiagramApi();
        $drawData = new LineData();
        $drawData->setPinX(1);
        $drawData->setPinY(2);
        $drawData->setWidth(1);
        $drawData->setHeight(1);
        $drawData->setPoints(array(new PointF(0, 0), new PointF(0, 1)));
        $drawData->setText("test draw line");
        $shapeStyleData = new ShapeStyleData();
        $shapeStyleData->setBackGroundColor("#FF0000");
        $textStyleData = new TextStyleData();
        $textStyleData->setFontSize(0.25);
        $textStyleData->setFontName("Times New Roman");
        $drawData->setShapeStyleData($shapeStyleData);
        $drawData->setTextStyleData($textStyleData);
        $json = $diagramApi->putDrawLine(DrawingTest::$fileName, "Page-0", $drawData, TestBase::$storageTestFOLDER);
        $result = json_decode($json);
        $this->assertTrue($result->IsSuccess);
        TestBase::PrintDebugInfo("testDrawLine result:" . $json);
    }

    public function testDrawEllipse()
    {
        $diagramApi = TestBase::getDiagramApi();
        $drawData = new EllipseData();
        $drawData->setPinX(5);
        $drawData->setPinY(5);
        $drawData->setWidth(1);
        $drawData->setHeight(1);
        $drawData->setText("test draw ellipse");
        $shapeStyleData = new ShapeStyleData();
        $shapeStyleData->setBackGroundColor("#FF0000");
        $textStyleData = new TextStyleData();
        $textStyleData->setFontSize(0.25);
        $textStyleData->setFontName("Times New Roman");
        $drawData->setShapeStyleData($shapeStyleData);
        $drawData->setTextStyleData($textStyleData);
        $json = $diagramApi->putDrawEllipse(DrawingTest::$fileName, "Page-0", $drawData, TestBase::$storageTestFOLDER);
        $result = json_decode($json);
        $this->assertTrue($result->IsSuccess);
        TestBase::PrintDebugInfo("testDrawEllipse result:" . $json);
    }

    public function testDrawPolyline()
    {
        $diagramApi = TestBase::getDiagramApi();
        $drawData = new PolylineData();
        $drawData->setPinX(3);
        $drawData->setPinY(3);
        $drawData->setWidth(1);
        $drawData->setHeight(1);
        $drawData->setPoints(array(new PointF(0, 0), new PointF(0, 1), new PointF(1, 1), new PointF(1, 0 )));
        $drawData->setText("test draw polyline");
        $shapeStyleData = new ShapeStyleData();
        $shapeStyleData->setBackGroundColor("#FF0000");
        $textStyleData = new TextStyleData();
        $textStyleData->setFontSize(0.25);
        $textStyleData->setFontName("Times New Roman");
        $drawData->setShapeStyleData($shapeStyleData);
        $drawData->setTextStyleData($textStyleData);
        $json = $diagramApi->putDrawPolyline(DrawingTest::$fileName, "Page-0", $drawData, TestBase::$storageTestFOLDER);
        $result = json_decode($json);
        $this->assertTrue($result->IsSuccess);
        TestBase::PrintDebugInfo("testDrawPolyline result:" . $json);
    }
}
