<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/realstyle.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4 class="txt"> <img src='img/file.jpg' class='imgRedonda'/> CristianIA </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola bienvenido!, a las IA de CRISTIAN RODRIGUEZ, si buscas informacion o necesitas ayuda podes probar preguntando algo. <br> Si no sabes que preguntar, intenta con algunas de estas preguntas frecuentes: <br> Especialidades  <br>Materias <br>Inscripcion <br>Contactos</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

            <input type=button class="creador" value="Diseñado" onClick="mi_alerta()">
      
            <a href="principal.php" class="button">Inicio</a>



           </a>
        </div>
    </div>
    
    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("Este Chatbox fue diseñado por : "+
               "\n"+
               "CRISTIAN RODRIGUEZ RICOPA");
        }
        </SCRIPT>


        
</body>

</html>