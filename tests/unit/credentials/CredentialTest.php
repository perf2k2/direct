<?php

namespace direct\tests\unit\credentials;

use direct\credentials\Credential;
use direct\credentials\CredentialInterface;

class CredentialTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CredentialInterface
     */
    protected static $credential;

    public static function setUpBeforeClass()
    {
        self::$credential = new Credential('token', 'login', 'master');
    }

    public function testGetAuthToken()
    {
        $this->assertEquals('token', self::$credential->getAuthToken());
    }

    public function testGetSandboxMasterToken()
    {
        $this->assertEquals('master', self::$credential->getSandboxMasterToken());
    }

    public function testGetClientLogin()
    {
        $this->assertEquals('login', self::$credential->getClientLogin());
    }

    public function testIsSandboxMasterTokenSpecified()
    {
        $this->assertTrue(self::$credential->isSandboxMasterTokenSpecified());
    }
}