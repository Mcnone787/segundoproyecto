<?php
function CtrlAddUser($request, $response, $container)
{
    $response->setTemplate("addUser.php");
    $response->set("container", $container);
}