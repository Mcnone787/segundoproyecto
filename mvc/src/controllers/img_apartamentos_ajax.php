<?php
function   img_apartamentos_ajax($request, $response, $container){
            $file_json_img=file_get_contents("../src/jsons/img.json");
            echo json_encode($file_json_img);
}