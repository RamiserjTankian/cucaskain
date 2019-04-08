<header class="header header_style_01">
        <nav class="megamenu navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand .mx-auto" href="inicio"><span style="font-size: 2em; color: #FF7300;"><i class="fas fa-bug"></i> Cucas Kain</span></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <?php 
                         if (isset($_GET["ruta"]) == ""){
                          echo'  
                            <li><a class="active" href="inicio">Inicio</a></li>
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>              
                            <li><a href="testimonios">Testimonios</a></li>    
                            <li><a href="contacto">Contactanos</a></li>';
                         }

                         elseif($_GET["ruta"] == "inicio"){
                            echo'       
                            <li><a class="active" href="inicio">Inicio</a></li>               
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>              
                            <li><a href="testimonios">Testimonios</a></li>    
                            <li><a href="contacto">Contactanos</a></li>';
                         }
                         elseif($_GET["ruta"] == "nosotros"){
                            echo'       
                            <li><a href="inicio">Inicio</a></li>               
                            <li><a class="active" href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>              
                            <li><a href="testimonios">Testimonios</a></li>    
                            <li><a href="contacto">Contactanos</a></li>';
                         }
                         elseif($_GET["ruta"] == "plagas"){
                            echo'       
                            <li><a href="inicio">Inicio</a></li>               
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a class="active" href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>            
                            <li><a href="testimonios">Testimonios</a></li>                 
                            <li><a href="contacto">Contactanos</a></li>';
                         }
                         elseif($_GET["ruta"] == "servicios"){
                            echo'       
                            <li><a href="inicio">Inicio</a></li>               
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a class="active" href="servicios">Servicios</a></li>                    
                            <li><a href="testimonios">Testimonios</a></li>                     
                            <li><a href="contacto">Contactanos</a></li>';
                         }
                         elseif($_GET["ruta"] == "testimonios"){
                            echo'       
                            <li><a href="inicio">Inicio</a></li>               
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>                      
                            <li><a class="active" href="testimonios">Testimonios</a></li>                    
                            <li><a href="contacto">Contactanos</a></li>';
                         }
                         elseif($_GET["ruta"] == "contacto"){
                            echo'       
                            <li><a href="inicio">Inicio</a></li>               
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>                      
                            <li><a href="testimonios">Testimonios</a></li>                    
                            <li><a class="active" href="contacto">Contactanos</a></li>';
                         }
                         elseif($_GET["ruta"] == "404"){
                            echo'       
                            <li><a href="inicio">Inicio</a></li>               
                            <li><a href="nosotros">¿Quiénes somos?</a></li>
                            <li><a href="plagas">¿Qué son las plagas?</a></li>
                            <li><a href="servicios">Servicios</a></li>                      
                            <li><a href="testimonios">Testimonios</a></li>                    
                            <li><a href="contacto">Contactanos</a></li>';
                         }

                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>