<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    /**
     * @Route("/course", name="homepage")
     */
    public function indexAction(Request $request){

        $tab = [];

        for($i = 0; $i < 3; $i++){
            $myObj = new \stdClass();
            $myObj->nom = "Carotte";
            $myObj->qte = 5;
            $myObj->id = $i;
            array_push($tab, $myObj);
        }

        $myJSON = json_encode($tab);

        $response = new Response();
        $response->setContent($myJSON);

        return $response;
    }

    /**
     * @Route("/course/ajouter", name="add")
     */
    public function addAction(Request $request){
        // get
        //$request->query->all();
        // post
        //$request->request->all();
        //$request->request->get('cle');

        $name = $request->request->get('nom');
        $qt = $request->request->get('qte');

        $addObj = new \stdClass();
        $addObj->nom = $name;
        $addObj->qte = $qt;

        $tab = [];

        for($i = 0; $i < 3; $i++){
            $myObj = new \stdClass();
            $myObj->nom = "Carotte";
            $myObj->qte = 5;
            $myObj->id = $i;
            array_push($tab, $myObj);
        }

        array_push($tab, $addObj);

        $myJSON = json_encode($tab);

        $response = new Response();
        $response->setContent($myJSON);

        return $response;

    }

    /**
     * @Route("/course/retirer", name="delete")
     */
    public function deleteAction(Request $request){
        
        $id = $request->request->get('id');

        // Ici je fais un appel SQL pour selectionner uniquement l'id qui correspond
        // à l'id récupérer en request
        // Ensuite je lui demande de supprimer cet index de la table
        // Puis:

        $tab = [];

        for($i = 0; $i < 3; $i++){
            $myObj = new \stdClass();
            $myObj->nom = "Carotte";
            $myObj->qte = 5;
            $myObj->id = $i;
            array_push($tab, $myObj);
        }

        $myJSON = json_encode($tab);

        $response = new Response();
        $response->setContent($myJSON);

        return $response;

    }

    /**
     * @Route("/course/actualiser", name="update")
     */
    public function updateAction(){
        $response = new Response();
        $response->setContent("Je me met à jour");
        return $response;
    }
}
