<?php

namespace Github\Tests\Api;

class EnterpriseTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetEntepriseStatsApiObject()
    {
        $api = $this->getApiMock();

        $this->assertInstanceOf('Github\Api\Enterprise\Stats', $api->stats());
    }

    /**
     * @test
     */
    public function shouldGetEnterpriseLicenseApiObject()
    {
        $api = $this->getApiMock();

        $this->assertInstanceOf('Github\Api\Enterprise\License', $api->license());
    }

    /**
     * @test
     */
    public function shouldGetEnterpriseManagementConsoleApiObject()
    {
        $api = $this->getApiMock();

        $this->assertInstanceOf('Github\Api\Enterprise\ManagementConsole', $api->console());
    }

    protected function getApiClass()
    {
        return 'Github\Api\Enterprise';
    }
}
