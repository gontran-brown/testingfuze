<?php
  $arraypage = array(
      "inscription" => array(
          'file' => "inscription"
          'label' => "Inscription"
      ),

      $arraypage = array(
          "acccueil" => array(
              'file' => "accueil"
              'label' => "VIP"
          )
      );

$nopage = true;
$defaultpage = "accueil";

if (isset($_GET['page'])){
    $pageactive = $_GET['page'];
}
if ($nopage && empty($pageactive)){
    $pageactive = $defaultpage;
    $nopage = false;
}
if ($nopage && !array_key_exists( $pageactive, $arraypage)){
    $pageactive = $defaultpage;
    $nopage = false;
}
$page = $arraypage[$pageactive]["file"];
if ($nopage && !file_existes("pages/$page.php")){
    $pageactive = $defaultpage;
    $page = $arraypage[$pageactive]["file"];
    $nopage = false;
}
?>
