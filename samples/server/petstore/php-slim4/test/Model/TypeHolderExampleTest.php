<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\TypeHolderExample;

/**
 * TypeHolderExampleTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\TypeHolderExample
 */
class TypeHolderExampleTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "TypeHolderExample"
     */
    public function testTypeHolderExample()
    {
        $testTypeHolderExample = new TypeHolderExample();
        $this->markTestIncomplete(
            'Test of "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "stringItem"
     */
    public function testPropertyStringItem()
    {
        $this->markTestIncomplete(
            'Test of "stringItem" property in "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "numberItem"
     */
    public function testPropertyNumberItem()
    {
        $this->markTestIncomplete(
            'Test of "numberItem" property in "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "floatItem"
     */
    public function testPropertyFloatItem()
    {
        $this->markTestIncomplete(
            'Test of "floatItem" property in "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "integerItem"
     */
    public function testPropertyIntegerItem()
    {
        $this->markTestIncomplete(
            'Test of "integerItem" property in "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "boolItem"
     */
    public function testPropertyBoolItem()
    {
        $this->markTestIncomplete(
            'Test of "boolItem" property in "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "arrayItem"
     */
    public function testPropertyArrayItem()
    {
        $this->markTestIncomplete(
            'Test of "arrayItem" property in "TypeHolderExample" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaObject = TypeHolderExample::getOpenApiSchema();
        $schemaArr = TypeHolderExample::getOpenApiSchema(true);
        $this->assertIsObject($schemaObject);
        $this->assertIsArray($schemaArr);
    }
}