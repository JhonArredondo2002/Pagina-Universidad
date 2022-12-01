<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style_most.css">
    <title>Estudiantes</title>
</head>
<body class="body_expanded">
    <div class="cont">
    <?php
        include('db/conexion.php');
        include('menuu.php');
        $cone=conectar();
        echo $menu;

        $color="rgb(91, 91, 245)";

        if(isset($_POST['registrar']))
        {
            $ti=$_POST["Ti"];
            $ti_num=$_POST["Nit"];
            $nombre=$_POST["Nombre"];
            $apellido=$_POST["apellido"];
            $edad=$_POST["edad"];
            $fech_nac=$_POST["Fech_nac"];
            $tel=$_POST["tel"];
            $fac=$_POST["fac"];
            $prog=$_POST["programa"];
            $fech_inscr=$_POST["Fech_inscr"];

            echo $prog;
            $insertar="INSERT INTO admisiones VALUES('$ti','$ti_num','$nombre','$apellido','$edad','$fech_nac','$tel','$fac','$prog','$fech_inscr')";
            $ejec_insertar=mysqli_query($cone,$insertar);
            echo "ingresado";
        }
        $consulta="SELECT*FROM admisiones";
        $ejec_consulta=mysqli_query($cone,$consulta);
        $filas=mysqli_fetch_array($ejec_consulta);

    ?>
    <h1>Estudiantes</h1>
    <table cellspacing="0">
        <tr>
            <th>Tipo de documento</th>
            <th>Numero de documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Fecha de Nacimiento</th>
            <th>Telefono</th>
            <th>Facultad</th>
            <th>Programa</th>
            <th>Fecha de inscripcion</th>
        </tr>

        <?php
            for($i=0;$i<=$filas;$i++)
            {
                echo"<tr style='background:".$color.";'>";
                echo "
                <td>".$filas['ti']."</td>
                <td>".$filas['Nit']."</td>
                <td>".$filas['Nombre']."</td>
                <td>".$filas['Apellido']."</td>
                <td>".$filas['edad']."</td>
                <td>".$filas['fech_nac']."</td>
                <td>".$filas['Tel']."</td>
                <td>".$filas['Facultad']."</td>
                <td>".$filas['Programa']."</td>
                <td>".$filas['fech_inscripcion']."</td>";
                echo"</tr>";
                if($color=="rgb(91, 91, 245)")
                {
                    $color="rgb(145, 12, 12)";
                }
                else
                {
                    $color="rgb(91, 91, 245)";
                }
                $filas=mysqli_fetch_array($ejec_consulta);
            }
            
            
        ?>
    </table>

    
    </div>
</body>
</html>