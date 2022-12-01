<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style.css">
    <title>Facultades</title>
</head>
<body class="body_expanded">
    <?php
        include('db/conexion.php');
        include('menuu.php');
        $cone=conectar();
        echo $menu;
    ?>

    <div class="form_stu2">
    <h1>Registrar nueva facultad</h1>
    <form action="index.php" method="POST">
        <table>
            <tr>
                <td> <label for="fac">Facultad</label></td>
                <td><input type="text" name="fac"></td>
                <td> <label for="porg">Programa</label></td>
                <td><input type="text" name="prog"> </td>
            </tr>
            <tr >
                <td colspan="2" style="text-align:center;">
                <input class="btn1" type="submit" value="Registrar" name="registrar1">
                </td>
                <td colspan="2" style="text-align:center;">
                <input class="btn2" type="reset" value="Limpiar">
                </td>
            </tr>
        </table>
    </form>
    </div>
    
</body>
</html>