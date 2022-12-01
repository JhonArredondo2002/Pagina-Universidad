<?php
    $menu="
    <!--Inicio del Menu -->
    <div id='sidemenu' class='menu_expanded'>
        
    <!--Encabezado del menu-->    
        <div id='header'>
        <div id='menu-btn'>
                <div class='btn-hamburguer'></div>
                <div class='btn-hamburguer'></div>
                <div class='btn-hamburguer'></div>
            </div>
            <div id='title'><span><strong>Gestion</strong></span></div>
            
        </div>

    <!--Foto de la empresa-->    
        <div id='profile'>
            <div id='photo'><img src='iconos/Profile.jpg' alt=''></div>
        </div>

    <!--Grupo de items-->    
        <div id='menu_itmes'>
            <div class='item'>
                <a href='index.php'>
                    <div class='icon'><img src='iconos/inicio.png' alt=''></div>
                    <div class='title'><span>Inicio</span></div>
                </a>

                <a href='est_nuevo.php'>
                    <div class='icon'><img src='iconos/Calendario.png' alt=''></div>
                    <div class='title'><span>Estudiantes</span></div>
                </a>

                <a href='est_mostrar.php'>
                    <div class='icon'><img src='iconos/mostrar.png' alt=''></div>
                    <div class='title'><span>Ver Estudiantes</span></div>
                </a>
        </div>
    
        <div class='separator'></div> 
        
        <div class='item'>
                <a href='fac_nuevo.php'>
                    <div class='icon'><img src='iconos/info.png' alt=''></div>
                    <div class='title'><span>Facultades</span></div>
                </a>
        </div>

        </div>
        
    </div>
    <script>
        const btn= document.querySelector('#menu-btn'); /*Selecciona el elemnto que coincida*/
        const menu= document.querySelector('#sidemenu');
        btn.addEventListener('click',e=>{
            menu.classList.toggle('menu_expanded'); /*comprueba si la clase ya esta asignada al elemento, si es asi, la elimina, si no la agrega*/
            menu.classList.toggle('menu-collapsed');

            document.querySelector('body').classList.toggle('body_expanded');
        });
    </script>"
?>