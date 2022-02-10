<?php

/*$modelo = $_POST['modelo'];
$style1 = $_POST['inlineSCheckbox1'];
$style2 = $_POST['inlineSCheckbox2'];
$style3 = $_POST['inlineSCheckbox3'];
$style4 = $_POST['inlineSCheckbox4'];
$material1 = $_POST['inlineMCheckbox1'];
$material2 = $_POST['inlineMCheckbox2'];
$material3 = $_POST['inlineMCheckbox3'];
$material4 = $_POST['inlineMCheckbox4'];
$color = $_POST['color'];
$size1 = $_POST['inlineTCheckbox1'];
$size2 = $_POST['inlineTCheckbox2'];
$size3 = $_POST['inlineTCheckbox3'];
$size4 = $_POST['inlineTCheckbox4'];
$size5 = $_POST['inlineTCheckbox5'];
$size6 = $_POST['inlineTCheckbox6'];
$size7 = $_POST['inlineTCheckbox7'];
$size8 = $_POST['inlineTCheckbox8'];
$frontFile01 = $_POST['inputFrontFile01'];
$frontFile02 = $_POST['inputFrontFile02'];
$frontFile03 = $_POST['inputFrontFile03'];
$frontFile04 = $_POST['inputFrontFile04'];
$frontFile05 = $_POST['inputFrontFile05'];
$frontFile06 = $_POST['inputFrontFile06'];
$frontFile07 = $_POST['inputFrontFile07'];
$frontFile08 = $_POST['inputFrontFile08'];
$frontFile09 = $_POST['inputFrontFile09'];
$frontFile10 = $_POST['inputFrontFile10'];
$frontFile11 = $_POST['inputFrontFile11'];
$frontFile12 = $_POST['inputFrontFile12'];
$frontFile13 = $_POST['inputFrontFile13'];
$frontFile14 = $_POST['inputFrontFile14'];
$frontFile15 = $_POST['inputFrontFile15'];
$frontFile16 = $_POST['inputFrontFile16'];
$backFile01 = $_POST['inputBackFile01'];
$backFile02 = $_POST['inputBackFile02'];
$backFile03 = $_POST['inputBackFile03'];
$backFile04 = $_POST['inputBackFile04'];
$backFile05 = $_POST['inputBackFile05'];
$backFile06 = $_POST['inputBackFile06'];
$backFile07 = $_POST['inputBackFile07'];
$backFile08 = $_POST['inputBackFile08'];
$backFile09 = $_POST['inputBackFile09'];
$backFile10 = $_POST['inputBackFile10'];
$backFile11 = $_POST['inputBackFile11'];
$backFile12 = $_POST['inputBackFile12'];
$backFile13 = $_POST['inputBackFile13'];
$backFile14 = $_POST['inputBackFile14'];
$backFile15;
$backFile16;

$year = 2021;
$month = 12;
$url = $_SERVER['HTTP_HOST'] . '/plugin/wp-content/uploads/';
$target_pathSu = $_SERVER['HTTP_HOST'] . "/plugin/wp-content/uploads/";
$target_pathSu = $target_pathSu . $year."\/". $month ."\/".basename( $_FILES['frontFile01']['name']);
$linkSu = $url . $year . "/" . $month . "/" . basename( $_FILES['frontFile01']['name']);

if (!file_exists($target_path)) {
  if(move_uploaded_file($_FILES['frontFile01']['tmp_name'], $target_pathSu)) {
    $name = basename( $_FILES['frontFile01']['name']);
    $resultado = "El archivo ".  basename( $_FILES['frontFile01']['name']). " ha sido subido";
    /*$query="INSERT INTO documentos (nombre_docu, link_acceso, fecha_registro, tipo_documento, id_page, elaborado_por, aprobado_por, version, naturaleza_cam, codigo ) VALUES ('$name', '$linkSu', $fechaSu, '$typeDocSu', '$pageidSu', '$elaboradoSu', '$aprobadoSu', '$versionSu', '$cambioNatSu', '$codigoSu')";
    $resultado=ejecutar($query);
  } else {
    $resultado = "Ha ocurrido un error, trate de nuevo!";
    $name = "ERROR";
  }
  # Codificarla e imprimirla
  $respuestaCodificada = json_encode($resultado);
  echo $respuestaCodificada;
} else {
  $resultado = "El archivo ya existe";
  $respuestaCodificada = json_encode($resultado);
  echo $respuestaCodificada;
}*/
?>

