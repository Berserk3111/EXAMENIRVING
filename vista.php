<html>

<head>
    <title> Juego del gato
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link rel="icon" href="xbox.png">
      
    </title>
</head>
<body>
    <!-- Just an image -->
<nav class="navbar  ">
  <a class="navbar-brand" href="index.html">
    <img src="xbox.png" height="30" alt="mdb logo">
  </a>
  <h1 class="nav">Home</h1>
</nav>
<style>
        body{
            background-image: url("https://fondosmil.com/fondo/7687.png");
           
            color:white;
            
        }
        input{
            background: rgb(0, 0, 0);
            color: azure;
            font-size: 60px;
        }
        .new{
            color:white;
        }
        .enviar{
            font-size:30px;
        }
        .nav{ 
            color:white;
        
        font-size:15px;}
      
    </style>

    
    <center>
        <h1> VAMOS A JUGAR</h1>
        <h5>Juega Jugador 1 con una 'X' (Favor escribir con Mayusculas)</h5>
        <form action="controlador.php" METHOD="GET">
            <input type="text" name="jd1" size=1 maxlength=1>
            <input type="text" name="jd2" size=1 maxlength=1>
            <input type="text" name="jd3" size=1 maxlength=1>
            <br>
            <input type="text" name="jd4" size=1 maxlength=1>
            <input type="text" name="jd5" size=1 maxlength=1>
            <input type="text" name="jd6" size=1 maxlength=1>
            <br>
            <input type="text" name="jd7" size=1 maxlength=1>
            <input type="text" name="jd8" size=1 maxlength=1>
            <input type="text" name="jd9" size=1 maxlength=1>
            <br>
            <input type="hidden" name="jugador" value="1">
            <input type="hidden" name="contador" value="0">
            <input type="hidden" name="jugada" value="X">
            <input type="submit" value="Listo">
        </form>
    </center>
    
</body>

</html>