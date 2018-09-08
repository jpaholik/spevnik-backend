<?php

namespace Efata\Bundle\SongbookApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testNewsong()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'new-song');
    }

    public function testEditsong()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'edit-song');
    }

    public function testDeletesong()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'delete-song');
    }

    public function testAddplaylist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'add-playlist');
    }

    public function testEditplaylist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'edit-playlist');
    }

    public function testRemoveplaylist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'remove-playlist');
    }

}
