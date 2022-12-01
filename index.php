<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Universidad</title>
</head>
<body class="body_expanded">
    <?php
        include('db/conexion.php');
        include('menuu.php');
        $cone=conectar();
        echo $menu;
    ?>
    <div class="slider">
    <ul>
        <li>
            <img src="slider/ima1.jpg">
        </li>
        <li>
            <img src="slider/ima2.jpg">
        </li>
        <li>
            <img src="slider/ima3.jpg">
        </li>
        <li>
            <img src="slider/ima4.jpg">
        </li>
    </ul>
</div>
    <div class="enlaces">
    <a href="est_mostrar.php">
    <div class="Estudiantes">
        <h2>Estudiantes</h2>
    </div>
    </a>

    <a href="fac_nuevo.php">
    <div class="Facult">
        <h2>Facultades Y Carreras</h2>
    </div>
    </a>
    </div>
    <?php
        if(isset($_POST['registrar1']))
        {
            $facultad=$_POST["fac"];
            $programa=$_POST["prog"];

            $insertar="INSERT INTO facultades VALUES('$facultad','$programa')";
            $ejec_insertar=mysqli_query($cone,$insertar);
            if(!$ejec_insertar)
            {
                echo"";
            }
            else
            {
                echo "<script>alert('Facultad Registrada');</script>";
            }
            
        }
    ?>
</body>
</html>