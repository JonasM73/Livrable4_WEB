<?php

class UtilisateurModel {
    private $BDD;

    public function __construct() {
        try{
            $dns = 'mysql:host=localhost;dbname=wk';
            $this->BDD = new PDO($dns, 'root', 'cesi');
            $this->BDD->exec("SET NAMES utf8");
            $this->BDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(Exception $e){
            $e->getMessage();
        }
    }

/*  public function Ajouter_E() { }
    public function Maj_E () { }    
    public function Chercher_E () { }
    public function Evaluer_E () { }
    public function Invisible_E () { }
    public function Dashbord_E () { }
*/
}