<?php

class FormFieldButton extends FormField {
    
    const TYPE_BUTTON = 0;
    const TYPE_SUBMIT = 1;
    const TYPE_RESET = 2;

    private $type;
    
    public function __construct(string $id, string $nom, string $label, string $type) {

        parent::__construct($id, $nom, $label);
        $this->type = self::type2String($type);
    }

    public function __toString() : string {

        return "<input type='{$this->type}' name='{$this->getNom()}' id='{$this->getId()}' value='{$this->getLabel()}'>";
    }

    public static function type2String(int $type) : string {
        
        switch($type) {
                
            case self::TYPE_BUTTON:
                return 'button';

            case self::TYPE_SUBMIT:
                return 'submit';

            case self::TYPE_RESET:
                return 'reset';
        }
    }
}