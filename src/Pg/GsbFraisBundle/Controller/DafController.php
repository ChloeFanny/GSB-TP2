<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PdoGsb;

class DafController extends Controller
{
	public function listeaffectationstablettesAction(){
        $pdo = $this->get('pg_gsb_frais.pdo');
        $tablette = $pdo->getListeAffectationsTablettes();
        return $this->render('PgGsbFraisBundle:Daf:listeaffectationstablettes.html.twig', array("tablette" => $tablette));
   }

   public function validerfraisAction(){
        $pdo = $this->get('pg_gsb_frais.pdo');
        return $this->render('PgGsbFraisBundle:Daf:validerfrais.html.twig');
    }

    public function historiqueAction(){
        $pdo = $this->get('pg_gsb_frais.pdo');
        return $this->render('PgGsbFraisBundle:Daf:historique.html.twig');
    
   }
}