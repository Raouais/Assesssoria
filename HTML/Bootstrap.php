<?php

namespace HTML;

class Bootstrap extends Form{

        /**
     * @param $html string Code à entourer
     * @return string
     */

    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }
    
    /**
     * @param $name string
     * @return string
     * @param array $option
     */
    
    public function input($name, $label, $options = [], $value = null){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>' . $label . '</label>';
        if($type === 'textarea' && !isset($value)){
            $input = '<textarea " class="form-control" name="' . $name .'"></textarea>' ;    
        } else if($type === 'textarea' && isset($value)){
            $input = '<textarea " class="form-control" name="' . $name .'">' . $value . '</textarea>' ;    
        } else if ($type === 'checkbox'){
            $input = '<input type="' . $type . '" name="' . $name . '" value="1" class="form-control">' ;
        } else if ($type === 'file'){
            $input = '<br><input type="' . $type . '" name="' . $name . '" accept="image/png, image/jpeg, image/jpg">';
        } else if (isset($value)){  
            $input = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" class="form-control">' ;
        } else {
            $input = '<input type="' . $type . '" name="' . $name . '" class="form-control">' ;
        }
        return $this->surround($label . $input);
    }
    
    public function messageError($text){
        return "<div class='alert alert-danger' role='alert'>{$text}</div>";
    }

    public function messageSuccess($text){
        return "<div class='alert alert-success' role='alert'>{$text}</div>";
    }

    public function link($link,$action){
        $link = '<a href='.$link.'>'.$action.'</a>';
        return $this->surround($link);
    }

        /**
     * @param $name string
     * @return string
     */

    public function submit($action,$type){
        return $this->surround('<button type="submit" class="btn btn-'.$type.'">'.$action.'</button>');
    }
    
}