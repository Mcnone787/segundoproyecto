<?php

function modifygalery($request, $response, $container){
        // print_r($_POST);
        // print_r($_FILES);
        // print_r($_GET);
        $id_aparta=$_GET["id"];
        $valores2 = $_FILES;
        $rutaimagen=[];
        $ruta_json="../src/jsons/img.json";
        $jsoninfoimgs=file_get_contents($ruta_json);
        $jsoninfoimgsdecode=json_decode($jsoninfoimgs,true);
       
        $remove_img=$_POST;
        $valores = $_FILES;
        $nombreImagen="";
        $rutaimagen=[];
       $idEleminar=[];
      
        if(isset($_FILES["fichero_usuario"])){
            
            for($i=0;$i<count($_FILES["fichero_usuario"]["name"]);$i++){
                $tmp_nameimg = $_FILES["fichero_usuario"]["tmp_name"][$i];
                $url_img = "imgs/" . $id_aparta."".time()."".$i.".png";
               
                
                if($_FILES["fichero_usuario"]["tmp_name"][$i]!=""){
                    $rutaimagen[]=$url_img;
                    move_uploaded_file($tmp_nameimg, $url_img);
                }      
                
            }
        
        }
        foreach ($remove_img as $key => $value) {
            if (str_contains($key, 'remove')) {
                $idEleminar[] = str_replace("remove", "", $key);
            }
        }
     
        if(array_key_exists($id_aparta,$jsoninfoimgsdecode["src"])){
      
            foreach ($rutaimagen as $key => $value) {
                echo $value;
                $jsoninfoimgsdecode["src"][$id_aparta]["src_imagen"][]=$value;

            }
            foreach ($idEleminar as $value) {
                unset($jsoninfoimgsdecode["src"][$id_aparta]["src_imagen"][$value]);
                
            }
            array_values( $jsoninfoimgsdecode["src"][$id_aparta]["src_imagen"]);
        }else{
            $jsoninfoimgsdecode["src"][$id_aparta]=[
                "id"=>$id_aparta,
                "src_imagen"=>$rutaimagen
                
            ];
        }
      
        $jsoninfoimgsdecode["src"][$id_aparta]["src_imagen"]=array_values( $jsoninfoimgsdecode["src"][$id_aparta]["src_imagen"]);
        print_r($jsoninfoimgsdecode);
    
        
      $guardar=json_encode($jsoninfoimgsdecode);
      file_put_contents($ruta_json,$guardar);
        
    
}