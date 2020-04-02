<?php
include "form.php";

class form2 extends Formulaire{
    function addRadio($str=""){
        $this->form.="$str<input type='radio'><br>";
    }
    function addCheckbox($str){
        $this->form.="$str<input type=\"checkbox\" name=\"check\"><br>";
    }
}