<?php

namespace App\Controller;

use App\Service\GetCarList;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @throws Exception
     */
    #[Route('/', name: 'app_index')]
    public function index(): never
    {
        $objects = (new GetCarList())('data.csv');
        echo 'Truck[1] body volume: ', $objects[1]->getBodyVolume(), '<br>';

        foreach ($objects as $object) {
            if ($object->getPhotoFileExt()) {
                echo 'Photo file extension for ', $object->getBrand(), ': ', $object->getPhotoFileExt(), '<br>';
            }
        }

        echo '<pre>', print_r($objects, true), '</pre>';
        exit;
    }
}
