<?php
function ctrlUserDataUpdate($request, $response, $container)
{
    $userModel = $container->users();

    $name = $request->get(INPUT_POST, "nombre");
    $lastname = $request->get(INPUT_POST, "apellido");
    $telefono = $request->get(INPUT_POST, "telefono");
    $debitCard = $request->get(INPUT_POST, "debitcard");
    $email = $request->get(INPUT_POST, "email");
    $pass = $request->get(INPUT_POST, "contrasena");

    if ($name == null || $lastname == null || $telefono == null || $debitCard == null || $email == null || $pass == null) {
        $response->redirect("Location: index.php?r=perfilUser&error=1");
        return;
    }
    if ($debitCard == -1 || $telefono == -1) {
        $response->redirect("Location: index.php?r=perfilUser&error=2");
        return;
    }
    if ($userModel) {
        $userModel->updateProfile($name, $lastname, $debitCard, $email, $pass, $telefono, $_SESSION["user"]["IDUsuario"]);
        $response->redirect("Location: index.php?r=perfilUser");
    } else {
        $response->redirect("Location: index.php?r=perfilUser");
    }
    return $response;
}
