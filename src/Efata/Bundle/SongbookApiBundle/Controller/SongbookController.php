<?php

namespace Efata\Bundle\SongbookApiBundle\Controller;

use Efata\Bundle\SongbookApiBundle\DataFacade\SongDataFacade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SongController
 *
 * @package Efata\Bundle\SongbookApiBundle\Controller
 * @author Jan Paholik <jpaholik@gmail.com>
 */
class SongbookController extends Controller
{

    /**
     * @param                $idSong
     * @param SongDataFacade $songDataFacade
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Efata\Bundle\SongbookApiBundle\Exception\DataFacadeException
     */
    public function getSongAction($idSong, SongDataFacade $songDataFacade)
    {
        var_dump($idSong); die();
        $song = $songDataFacade->getSong($idSong);

        return $this->render('@EfataSongbookApi/Api/Export/openlp.xml.twig', array('song' => $song));
    }
}
