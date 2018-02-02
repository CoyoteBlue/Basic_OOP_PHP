<div style="visibility:hidden;height:0px;display:none;">
<?php
ob_start();
include ('/includes/parentclass.inc.php');
include ('/includes/extendclass.inc.php');
include ('/includes/newclass.inc.php');
$parentobject = new ParentClass;
$object = new NewClass;
$extendobject = new ExtendClass;
ob_flush();
?>
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OOP - Object Orientated PHP</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <h1>OOP Object Orientated PHP</h1>
      <?php
      echo "<h2>Welcome to Object Orientated PHP</h2><br />";

      echo "<p class='show'>This is the info from a basic class</p>";
      echo $object->info;
      echo "<p class='show'><br />This is the info from a extended class and public</p>";
      echo $parentobject->name;
      echo "<p class='show'><br />This is the info from a extended class and protected(property)</p>";
      echo $extendobject->message();
      echo "<p class='show'><br />This is the info from a parent class and private object(property) but public function</p>";
      echo $parentobject->secret();
       ?>
  </body>
</html>
