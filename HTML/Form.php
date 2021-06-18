<?php 

namespace HTML;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{

    /**
     * @var string Tag utilisée pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()){
        $this->data = $data;    
    }
    /**
     * @param $html string Code à entourer
     * @return string
     */

    protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $name string
     * @return string
     */

    function checkInput($data){
        $data = trim($data); 
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * @param $name string
     * @return string
     * @param array $option
     */

    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<input type="' . $type . '" name="' . $name . '" placeholder="' . $name . '" value="' . $this->checkInput($name) . ' ">'
        );
    }
    /**
     * @param $name string
     * @return string
     */

    public function submit($action,$type){
        return $this->surround('<button type="submit" class="btn btn-'.$type.'">'.$action.'</button>');
    }
    /**
     * @return string
     */
    public function getData(){
        return $this->data;
    }
}