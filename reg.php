<?php

include 'connect.php';

if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome
                        <input type="text" name="text" placeholder="Digite seu nome">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nome de usuário
                        <input type="text" name="user" placeholder="Digite seu nome de usuário">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha
                        <input type="password" name="pass" placeholder="Digite sua senha">
                    </td>
                </tr>
                <tr>
                    <td>
                        Cidade
                        <select name="city">
                            <option value="">-select-</option>
                            <?php
                            $sqlCity = mysqli_query($con, "select * from city");

                            while($item = mysqli_fetch_assoc($sqlCity))
                            {
                                $nomeItem = $item["cidade"];
                                $idCity = $item["idCidade"];
                                echo"
                                <option value=$nomeItem>$nomeItem</option>
                                ";
                            }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gênero
                        <input type="radio"name="gen" id="gen" value="male">Masculino
                        <input type="radio" name="gen" id="gen" value="female">Feminino
                    </td>
                </tr>
                <tr>
                    <td>
                        Imagem 
                        <input type="file" name="f1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Registrar-se" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
