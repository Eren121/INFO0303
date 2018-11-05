<?php
class Form {
    
    const MODE_GET = 'GET';
    const MODE_POST = 'POST';
    
    private $id; // You're a rockstar
    private $action;
    private $mode;
    private $liste;
    
    public function __construct(string $id, string $action, string $mode) {

        if($mode != 'GET' && $mode != 'POST') {
            $mode = 'GET';
        }

        $this->id = $id;
        $this->action = $action;
        $this->mode = $mode;
        $this->liste = array();
    }
    
    public function getId() : string {
        return $this->id;
    }
    
    public function getAction() : string {
        return $this->action;
    }
    
    public function getListe() : array {
        return $this->liste;
    }
    
    public function addField(FormField $champ) : void {
        $this->liste[] = $champ;
    }
    
    public function __toString() : string {
        
        $res = "<form id='$this->id' action='$this->action' method='$this->mode'>";
        
        foreach($this->liste as $champ) {
            $res .= $champ;
        }
        
        $res .= "</form>";
        return $res;
    }
}