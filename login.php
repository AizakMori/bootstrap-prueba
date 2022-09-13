<?php
//para validar los datos de entrada colocamos un if revisando que no este vacio los datos y avisar
if(empty($_POST['email']) || empty($_POST['password'])){
    echo "<h2> Debe completar algunos datos faltantes </h2>";
} else {
    //agarrar los datos del request (form de index.php)
    //tomamos los datos con $_post (dado que es un post y no un get)
    $usuario = $_POST['email'];
    $contra = $_POST['password'];
    echo "<p> Mail: $usuario ($contra)  </p>";};
