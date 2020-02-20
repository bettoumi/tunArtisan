<?php

namespace App\Controller;

use App\Entity\Proprety;
use App\Repository\PropretyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropretyController extends AbstractController
{
      private $propretyRepository; 

    /**
     * contruct function
     *
     * @param PropretyRepository $propretyRepository
     * @return void
     */
    public function ___construct( PropretyRepository $propretyRepository)
    {
        $this->propretyRepository = $propretyRepository;
    }

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
        $em = $this->getDoctrine()->getManager();
        $em->persist($proprety);
        $em->flush();
        $proprietes = $this->propretyRepository->findAllVisible();
        return $this->render('proprety/index.html.twig', [
            "proprety_menu" => "proprietes",
            "proprietes" => $proprietes
           
        ]);
    }
}
