<?php

class FormFieldInput extends FormField {
    
    const TYPE_TEXT = 0;
    const TYPE_PASSWORD = 1;
    
    private $type;
    private $valeurDefaut;
    private $valeurVide;
    
    public function __construct(string $id, string $nom, string $label, string $type, string $valeurDefaut = "", $valeurVide = "") {

        parent::__construct($id, $nom, $label);
        $this->type = self::type2string($type);
        $this->valeurDefaut = $valeurDefaut;
        $this->valeurVide = $valeurVide;
    }
    
    public function __toString() : string {
        
        return "<label for='{$this->getNom()}'>{$this->getLabel()}</label>
                <input type='{$this->type}' name='{$this->getNom()}' id='{$this->getId()}'
                    placeholder='{$this->valeurVide}' value='{$this->valeurDefaut}'>";
    }
    
    public static function type2String(int $type) : string {
        
        switch($type) {
                
            case self::TYPE_TEXT:
                return 'text';
            
            case self::TYPE_PASSWORD:
                return 'password';
        }
    }
}