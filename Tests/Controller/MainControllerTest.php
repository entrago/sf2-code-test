<?php

namespace Entrago\CRUDBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CRUDBundle');

        $this->assertTrue($crawler->filter('html:contains("Manage Adress Books")')->count() == 1);
        $this->assertTrue($crawler->filter('html:contains("Manage Contacts")')->count() == 1);
    }
}
