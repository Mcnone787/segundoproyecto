<?php

/**
 * Example function - Exemple d'estructura d'una funció middleware.
 *
 * @param \Emeset\Request $request
 * @param \Emeset\Response $response
 * @param \Emeset\Container $container
 * @param callable $next
 * @return \Emeset\Response
 */
function isadmin($request, $response, $container, $next){

    // Aquí va el codi del middleware
    $logged = $request->get("SESSION", "logged");

    if(!$logged) {
        $response->redirect("location: index.php?r=login");
        return $response;
    }else{
        
        
        if($_SESSION["user"]["Rol"]=="admin"){
            $response->set("user", $request->get("SESSION", "user"));
            $response = $next($request, $response, $container);
            return $response;

        }else{
            $response->redirect("location: index.php?r=index");

        }
        
    }

   


    
}