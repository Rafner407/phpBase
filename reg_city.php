<?php
include 'connect.php';
include'checklogin.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $nomeCidade=$_POST['text'];

    //$i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";

    $i = "insert into city (nomeCidade) values ('$nomeCidade')";
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
                        Name
                        <input type="text" name="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">

                    </td>
                    <td> 
                        <button> <a href="login.php"> Login </a> </button>



                    </td>
                </tr>
            </table>
    </body>
</html>