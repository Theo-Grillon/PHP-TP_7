<?php
include "form_child.php";

$f=new form2("TP_PHP_Grillon_7.php");
$f->addTextZone("Votre nom: ");
$f->addTextZone("Votre code: ");
$f->addButton();
$f->addRadio("Monsieur");
$f->addRadio("Madame");
$f->addCheckbox("Tennis");
$f->addCheckbox("Equitation");
echo $f->getForm();