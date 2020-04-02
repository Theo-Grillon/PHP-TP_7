<title>Tp7</title>
<h1>Tp7</h1>
<h2>Exercice1</h2>
<?php
include "form_child.php";
include "shape.php";

$f=new form2("TP_PHP_Grillon_7.php");
$f->addTextZone("Votre nom: ");
$f->addTextZone("Votre code: ");
$f->addButton();
$f->addRadio("Monsieur");
$f->addRadio("Madame");
$f->addCheckbox("Tennis");
$f->addCheckbox("Equitation");
echo $f->getForm();
?>

<hr>
<h2>Exercice2</h2>
<?php
$q=new Square(5,5);
$c=new Circle(7);
$tab=[];
$tab[]=$q;
$tab[]=$c;
for ($i=0; $i<2; $i++){
    echo get_class($tab[$i])." Area : ".$tab[$i]->getArea()."<br>";
}
?>
<hr>
<h2>Exercice3</h2>
<?php
