<html>
<head>
<title>Jugando al gato</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		    <!-- Bootstrap core CSS -->			
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="icon" href="xbox.png">

</head>
<body>
<nav class="navbar  ">
  <a class="navbar-brand" href="index.html">
    <img src="xbox.png" height="30" alt="mdb logo">
  </a>
  <h1 class="nav">Home</h1>
    

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
            font-size:15px;
        }
        .jugar{
            color:white;
            font-size:20px;

        }
    </style>

<center>
<h1> EMPEZAMOS </h1>
    <?php
$jd1=$_GET['jd1'];
$jd2=$_GET['jd2'];
$jd3=$_GET['jd3'];
$jd4=$_GET['jd4'];
$jd5=$_GET['jd5'];
$jd6=$_GET['jd6'];
$jd7=$_GET['jd7'];
$jd8=$_GET['jd8'];
$jd9=$_GET['jd9'];

$contador=$_GET['contador'];

$jugada=$_GET['jugada'];

$ganador=0;

//Checando Verticales


if ( $jd1 == $jugada && $jd2 == $jugada && $jd3 == $jugada )
{

$ganador=1;
}
if ( $jd4 == $jugada && $jd5 == $jugada && $jd6 == $jugada )
{
$ganador=1;
}
if ( $jd7 == $jugada && $jd8 == $jugada && $jd9 == $jugada )
{
$ganador=1;
}

//Checando Horizontales

if ( $jd1 == $jugada && $jd4 == $jugada && $jd7 == $jugada )
{
$ganador=1;
}
if ( $jd2 == $jugada && $jd5 == $jugada && $jd8 == $jugada )
{
$ganador=1;
}
if ( $jd3 == $jugada && $jd6 == $jugada && $jd9 == $jugada )
{
$ganador=1;
}

//Checando Diagonales

if ( $jd1 == $jugada && $jd5 == $jugada && $jd9 == $jugada )
{
$ganador=1;
}
if ( $jd3 == $jugada && $jd5 == $jugada && $jd7 == $jugada )
{
$ganador=1;
}

$jugador=$_GET['jugador'];


if ( $jugada=='X' || $jugada=='x')
{
$jugada='O';
}
else{
$jugada='X';
}

if ( $contador <= 8 && $ganador != 1 )
{
if ( $jugador==1)
{
$jugador=2;
}
else{
$jugador=1;
}
$contador++;
echo "<h5>Juega Jugador ",$jugador ," con una ",$jugada," (Favor escribir con Mayusculas)</h5>";
echo "<form action=\"controlador.php\" METHOD=\"GET\">";
echo "<input type=\"text\" name=\"jd1\" size=1 maxlength=1 value=",$jd1,">";
echo "<input type=\"text\" name=\"jd2\" size=1 maxlength=1 value=",$jd2,">";
echo "<input type=\"text\" name=\"jd3\" size=1 maxlength=1 value=",$jd3,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd4\" size=1 maxlength=1 value=",$jd4,">";
echo "<input type=\"text\" name=\"jd5\" size=1 maxlength=1 value=",$jd5,">";
echo "<input type=\"text\" name=\"jd6\" size=1 maxlength=1 value=",$jd6,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd7\" size=1 maxlength=1 value=",$jd7,">";
echo "<input type=\"text\" name=\"jd8\" size=1 maxlength=1 value=",$jd8,">";
echo "<input type=\"text\" name=\"jd9\" size=1 maxlength=1 value=",$jd9,">";
echo "<br>";
echo "<input type=\"hidden\" name=\"jugador\" value=",$jugador,">";
echo "<input type=\"hidden\" name=\"contador\" value=",$contador,">";
echo "<input type=\"hidden\" name=\"jugada\" value=",$jugada,">";
echo "<input class=\"enviar\" type=\"submit\" value=\"Listo\">";
echo "</form>";
}

if ( $contador < 8 && $ganador == 1 )
{
echo "<h2>Gano el Jugador ",$jugador ,"!!!";
echo "<form action=\"controlador.php\" METHOD=\"GET\">";
echo "<input type=\"text\" name=\"jd1\" size=1 maxlength=1 value=",$jd1,">";
echo "<input type=\"text\" name=\"jd2\" size=1 maxlength=1 value=",$jd2,">";
echo "<input type=\"text\" name=\"jd3\" size=1 maxlength=1 value=",$jd3,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd4\" size=1 maxlength=1 value=",$jd4,">";
echo "<input type=\"text\" name=\"jd5\" size=1 maxlength=1 value=",$jd5,">";
echo "<input type=\"text\" name=\"jd6\" size=1 maxlength=1 value=",$jd6,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd7\" size=1 maxlength=1 value=",$jd7,">";
echo "<input type=\"text\" name=\"jd8\" size=1 maxlength=1 value=",$jd8,">";
echo "<input type=\"text\" name=\"jd9\" size=1 maxlength=1 value=",$jd9,">";
echo "<br>";
echo "<input type=\"hidden\" name=\"jugador\" value=",$jugador,">";
echo "<input type=\"hidden\" name=\"contador\" value=",$contador,">";
echo "<input type=\"hidden\" name=\"jugada\" value=",$jugada,">";
echo "</form>";

}

if ( $contador == 9 && $ganador != 1 )
{
echo "<h2>Juego Terminado 
EMPATE!! ";
echo "<br>";
}
?>
<button class="btn aqua-gradient"><a  class="jugar" href="vista.php">JUGAR DE NEW</a></button>
</center>

</body>
</html>
