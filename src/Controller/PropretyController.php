<?php

namespace App\Controller;

use App\Entity\Proprety;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropretyController extends AbstractController
{
    /**
     * @Route("/biens", name="proprety.index")
     */
    public function index()
    {
        $proprety = new Proprety();
        $proprety->setTitle("monpremier bien")
                 ->setPrice(200000)
                 ->setRooms(4)
                 ->setBedrooms(3)
                 ->setDescription('un peit description')
                 ->setSurface(60)
                 ->setFloor(4)
                 ->setHeat(1)
                 ->setCity('Monpolier')
                 ->setAdesse('numer 4 rue henri delvarre')
                 ->setCodePostale('33000');
        return $this->render('proprety/index.html.twig', [
            "proprety_menu" => "proprietes"
           
        ]);
    }
}
