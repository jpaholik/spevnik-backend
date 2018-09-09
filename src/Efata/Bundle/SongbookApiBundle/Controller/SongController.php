<?php

namespace Efata\Bundle\SongbookApiBundle\Controller;

use Efata\Bundle\SongbookApiBundle\DataFacade\SongDataFacade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SongController
 *
 * @package Efata\Bundle\SongbookApiBundle\Controller
 * @author Jan Paholik <jpaholik@gmail.com>
 */
class SongController extends Controller
{
    /**
     * @param string         $songSlug
     * @param SongDataFacade $songDataFacade
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Efata\Bundle\SongbookApiBundle\Exception\DataFacadeException
     */
    public function getSongXmlAction($songSlug, SongDataFacade $songDataFacade)
    {
        $song = $songDataFacade->getSongBySlug($songSlug);

        $xml = $this->renderView('@EfataSongbookApi/Api/Export/openlp.xml.twig', array('song' => $song));

        $response = new Response($xml);
        $response->headers->set('Content-Type', 'xml');

        return $response;
    }
}
