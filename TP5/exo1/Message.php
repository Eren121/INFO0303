<?php
class Message {
    
    private $jour;
    private $horaire;
    private $texte;
    
    public function __construct(string $jour, string $horaire, string $texte) {

        parent::__construct();
        $this->jour = $jour;
        $this->horaire = $horaire;
        $this->texte = $texte;
    }

    public function getJour (){
        return $this->jour;
    }
    
    public function getHoraire (){
        return $this->horaire;
    }
    
    public function getTexte (){
        return $this->texte;
    }
    
    public function __toString () : String{
        return "[$this->jour - $this->horaire] $this->texte";
    }


}
?>