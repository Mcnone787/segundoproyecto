<?php

function doanadiraparta($request, $response, $container){
    $Modaapartameto=$container->apartamentos();
    $Modelservicio_apartamentos=$container->servicios_apartamentos();
  
    $id=$_SESSION["user"]["IDUsuario"];
    $Titulo = $request->get(INPUT_POST, "Titulo"); 
    $CP = $request->get(INPUT_POST, "CP"); 
    $Laltitud = $request->get(INPUT_POST, "Laltitud"); 
    $Longitud = $request->get(INPUT_POST, "Longitud"); 
    $descripcion = $request->get(INPUT_POST, "descripcion"); 
    $m2 = $request->get(INPUT_POST, "m2"); 
    $Longitud = $request->get(INPUT_POST, "Longitud"); 
    $descripcion = $request->get(INPUT_POST, "descripcion"); 
    $add =[];
    $rm=[];
    $precioalt = $request->get(INPUT_POST, "precioalt"); 
    $preciobaj = $request->get(INPUT_POST, "preciobaj"); 
    $numhabita = $request->get(INPUT_POST, "numhabita"); 
    $valores=$_POST;
    $valores2 = $_FILES;
    $rutaimagen=[];
    $ruta_json="../src/jsons/img.json";
    $jsoninfoimgs=file_get_contents($ruta_json);
    $jsoninfoimgsdecode=json_decode($jsoninfoimgs,true);
    

    if($Titulo == null || $CP == null || $Laltitud == null || $Longitud == null || $descripcion == null || $m2 == null || $precioalt == null || $preciobaj == null || $numhabita == null){
        $response->redirect("Location: index.php?r=gestores&error=1");
        return;
    }
    if($m2 == -1 || $precioalt == -1 || $preciobaj == -1 || $numhabita == -1){
        $response->redirect("Location: index.php?r=gestores&error=2");
        return;
    }
    if($precioalt < $preciobaj){
        $response->redirect("Location: index.php?r=gestores&errorApartamento=1");
        return;
    }
    $valores = $_FILES;
    $nombreImagen="";
    $rutaimagen="";

    if(isset($_FILES["fichero_usuario"])){
        for($i=0;$i<count($_FILES["fichero_usuario"]["name"]);$i++){
            $tmp_nameimg = $_FILES["fichero_usuario"]["tmp_name"][$i];
            $url_img = "imgs/" . $Titulo."".time()."".$i.".png";
            $rutaimagen[]=$url_img;
            move_uploaded_file($tmp_nameimg, $url_img);
        }
        
    }
  $idUltimoapartamento=($Modaapartameto->ultimoapartamento());
  $id_=$idUltimoapartamento["ApartamentosID"]+1;
  

    $prueba=[
        $id_=>"d"
    ];

    $jsoninfoimgsdecode["src"][$id_]=[
        "id"=>$id_,
        "src_imagen"=>$rutaimagen
        
    ];
 

    
  $guardar=json_encode($jsoninfoimgsdecode);
  file_put_contents($ruta_json,$guardar);
  

    // echo $id,$Titulo,
    // $CP,
    // $Laltitud ,
    // $Longitud,
    // $descripcion ,
    // $m2,
    // $add ,
    // $precioalt,
    // $preciobaj,
    // $temporada,
    // $estados;

    foreach ($valores as $i => $item) {
        
        if (str_contains($i, 'add')) {
            $add[] = str_replace("add", "", $i);
        }
    }

    $updateaparmeto = $Modaapartameto->setaddapartamento(
        $id,
        $Titulo,
        $CP,
        $Laltitud,
        $Longitud,
        $descripcion,
        $m2,
        $precioalt,
        $preciobaj,
        $numhabita
    );
    $ultimo_apartamento = $Modaapartameto->ultimoapartamento();
   
    
    foreach ($add as $item) {
        $Modelservicio_apartamentos->add_servicios($ultimo_apartamento["ApartamentosID"], $item);
    }

     $response->redirect("location: index.php?r=gestores");
    
}
