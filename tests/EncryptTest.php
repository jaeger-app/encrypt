<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/EncryptTest.php
 */
namespace JaegerApp\tests;

use JaegerApp\Encrypt;

/**
 * Jaeger - Encrypt object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Encrypt object
 *
 * @package Jaeger\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class EncryptTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Ensures the Bootstrap object has all the proper attributes available
     */
    public function testInit()
    {
        $this->assertClassHasAttribute('api', '\JaegerApp\Encrypt');
        $this->assertClassHasAttribute('key', '\JaegerApp\Encrypt');
        
        $encrypt = new Encrypt();
        $this->assertObjectHasAttribute('api', $encrypt);
        $this->assertObjectHasAttribute('key', $encrypt);
    }

    /**
     * Tests the setKey() method
     */
    public function testSetKey()
    {
        $encrypt = new Encrypt();
        $key = 'my_test_key';
        
        $encrypt->setKey($key);
        $this->assertEquals($key, $encrypt->getKey());
    }

    /**
     * Tests the encode() method
     */
    public function testEncode()
    {
        $encrypt = new Encrypt();
        $this->assertEquals('1mMdlLucqw/q8PL0BwU8hNAWnQQcYR1m0/DlGzZMItM=', $encrypt->encode('MyTestStringToEncode'));
    }

    /**
     * Tests the decode() method
     */
    public function testDecode()
    {
        $encrypt = new Encrypt();
        $this->assertEquals('MyTestStringToEncode', $encrypt->decode('1mMdlLucqw/q8PL0BwU8hNAWnQQcYR1m0/DlGzZMItM='));
    }

    /**
     * Tests the getApi() method
     */
    public function testApi()
    {
        $encrypt = new Encrypt();
        $this->assertInstanceOf('\\phpseclib\\Crypt\\AES', $encrypt->getApi());
    }
}