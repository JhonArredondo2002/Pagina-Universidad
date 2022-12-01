<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style.css">
    <title>Estudiantes</title>
</head>
<body class="body_expanded">
    <?php
        include('db/conexion.php');
        include('menuu.php');
        $cone=conectar();
        echo $menu;

        $consulta="SELECT*FROM facultades";
        $ejec_consulta=mysqli_query($cone,$consulta);
        $filas=mysqli_fetch_array($ejec_consulta);
    ?>

    <div class="form_stu1">
        <h1>Registrar estudiantes</h1>
    <form action="est_mostrar.php" method="POST">
        <table>
            <tr>
                <td><label for="Ti">Tipo de identificacion</label></td>
                <td>
                    <select name="Ti" id="Ti">
                        <option> --------------</option>
                        <option value="CC"> Cedula de Ciudadania</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="PE">Pasaporte extranjero</option>
                    </select>
                </td>
                <td> <label for="Nit">Numero</label> </td>
                <td><input type="text" name="Nit"> </td>
            </tr>

            <tr>
                <td> <label for="Nombre">Nombre</label></td>
                <td><input type="text" name="Nombre"></td>
                <td> <label for="apellido">Apellido</label></td>
                <td><input type="text" name="apellido"> </td>
            </tr>

            <tr>
                <td><label for="edad">Edad</label></td>
                <td><input type="text" name="edad"></td>
                <td><label for="Fech_nac">Fecha de nacimiento</label></td>
                <td><input type="date" name="Fech_nac"></td>
            </tr>

            <tr>
                <td><label for="tel">Telefono</label></td>
                <td><input type="text" name="tel"></td>

                <td><label for="fac">Facultad</label></td>
                <td>
                <select name="fac" id="fac">
                <option value="--">--------------</option>
                <?php
                    for($i=0;$i<=$filas;$i++)
                    {
                        echo "<option value=".$filas['Facultad'].">".$filas['Facultad']."</option>";
                        $filas=mysqli_fetch_array($ejec_consulta);
                    }  
                ?>
                </select> 
                </td>
            </tr>

            <tr>
                <td><label for="programa">Programa</label></td>
                <td>
                    <select name="programa" id="programa">
                    <option value="--">--------------</option>
                        <?php
                              $consulta="SELECT*FROM facultades";
                              $ejec_consulta=mysqli_query($cone,$consulta);
                             $filas=mysqli_fetch_array($ejec_consulta); 
                            for($i=0;$i<=$filas;$i++)
                            {
                                echo "<option value=".$filas['programa'].">".$filas['programa']."</option>";
                                echo $filas['programa'];
                                $filas=mysqli_fetch_array($ejec_consulta);
                            }    
                        ?>
                    </select>    
                    </td>
                <td><label for="fech_inscr">Fecha de inscripcion</label></td>
                <td><input type="date" name="Fech_inscr"></td>
            </tr>
            <tr >
                <td colspan="2" style="text-align:center;">
                <input class="btn1" type="submit" value="Registrar" name="registrar">
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