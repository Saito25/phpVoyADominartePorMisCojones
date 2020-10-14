<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Manuel Pérez Soto - Boletín Variables</title>
</head>
<body>

    <header class="header">
        <div class="header-top-line"></div>
        <div class="header-bottom-line">
            <div class="header-margin">
                <h1>Manuel Pérez Soto - Boletín variables</h1>
            </div>
        </div>
    </header>

    <main class="main">
        <nav class="main-nav">
            <ol class="main-nav-ol">
                <li class="main-nav-ol-li">
                    <a href="#exercise-one" class="main-nav-ol-li-a">1</a>
                </li>
                <li class="main-nav-ol-li">
                    <a href="#exercise-two" class="main-nav-ol-li-a">2</a>
                </li>
                <li class="main-nav-ol-li">
                    <a href="#exercise-three" class="main-nav-ol-li-a">3</a>
                </li>
                <li class="main-nav-ol-li">
                    <a href="#exercise-four" class="main-nav-ol-li-a">4</a>
                </li>
                <li class="main-nav-ol-li">
                    <a href="#exercise-five" class="main-nav-ol-li-a">5</a>
                </li>
                <li class="main-nav-ol-li">
                    <a href="#exercise-six" class="main-nav-ol-li-a">6</a>
                </li>
                <li class="main-nav-ol-li">
                    <a href="#exercise-seven" class="main-nav-ol-li-a">7</a>
                </li>
            </ol>
        </nav>

        <section class="main-section">
            <article id="exercise-one" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 1: Mostrar nombre y curso</h2>
<pre><code><\?php
    echo ("Manuel Pérez Soto - 2º CFGS DAM");
?>
</code>
                        <p>Salida:</p>
<samp><?php
    echo ("Manuel Pérez Soto - 2º CFGS DAM");
    ?> </samp>
                    </pre>
                </div>
            </article>

            <article id="exercise-two" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 2: Mostrar nombre, dirección, curso y asignaturas</h2>
                    <pre><code><\?php
    echo ("Manuel Pérez Soto - C/ Algún sitio de algeciras - 2º CFGS DAM\n");
    echo ("PMDMO, PSPRO, INTERFACES, HLC, EIE, ACDTO")
?>
</code>
                        <p>Salida:</p>
<samp><?php
    echo ("Manuel Pérez Soto - C/ Algún sitio de algeciras - 2º CFGS DAM\n");
    echo ("PMDMO, PSPRO, INTERFACES, HLC, EIE, ACDTO")
    ?> </samp>
                    </pre>
                </div>
            </article>

            <article id="exercise-three" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 3: horario</h2>
<pre><code><\?php
$one = "ACDAT";
$two = "EIE";
$three = "PMDMO";
$four = "PSPRO";
$five = "HLC";
$six = "SGMPD";
$seven = "DEINT";
$none = "Recreo";
print("
<table>
    <thead>
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>8:15 - 9:15</th>
            <td>$four</td>
            <td>$five</td>
            <td>$three</td>
            <td>$seven</td>
            <td>$one</td>
        </tr>
        
         <tr>
            <th>9:15 - 10:15</th>
            <td>$five</td>
            <td>$seven</td>
            <td>$three</td>
            <td>$three</td>
            <td>$seven</td>
         </tr>
        
         <tr> 
            <th>10:15 - 11:15</th>
            <td>$one</td>
            <td>$seven</td>
            <td>$five</td>
            <td>$three</td>
            <td>$seven</td>
         </tr>
         
         <tr>
            <th>11:15 - 11:45</th>
            <td colspan='5'>$none</td>
         </tr>
         
         <tr>
            <th>11:45 - 12:45</th>
            <td>$four</td>
            <td>$four</td>
            <td>$seven</td>
            <td>$four</td>
            <td>$six</td>
         </tr>
         
         <tr>
            <th>12:45 - 13:45</th>
            <td>$seven</td>
            <td>$four</td>
            <td>$two</td>
            <td>$two</td>
            <td>$two</td>
         </tr>
                <tr>
            <th>13:45 - 14:45</th>
            <td>$six</td>
            <td>$two</td>
            <td>$six</td>
            <td>$six</td>
            <td>$four</td>
        </tr>
    </tbody>
</table>");
?>
</code>
                        <p>Salida:</p>
<samp><?php
$one = "ACDAT";
$two = "EIE";
$three = "PMDMO";
$four = "PSPRO";
$five = "HLC";
$six = "SGMPD";
$seven = "DEINT";
$none = "Recreo";
echo("<table class=\"table\">
        <thead>
            <tr>
                <th></th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>8:15 - 9:15</th>
                <td>$four</td>
                <td>$five</td>
                <td>$three</td>
                <td>$seven</td>
                <td>$one</td>
            </tr>
            
             <tr>
                <th>9:15 - 10:15</th>
                <td>$five</td>
                <td>$seven</td>
                <td>$three</td>
                <td>$three</td>
                <td>$seven</td>
             </tr>
            
             <tr> 
                <th>10:15 - 11:15</th>
                <td>$one</td>
                <td>$seven</td>
                <td>$five</td>
                <td>$three</td>
                <td>$seven</td>
             </tr>
             
             <tr>
                <th>11:15 - 11:45</th>
                <td colspan='5'>$none</td>
             </tr>
             
             <tr>
                <th>11:45 - 12:45</th>
                <td>$four</td>
                <td>$four</td>
                <td>$seven</td>
                <td>$four</td>
                <td>$six</td>
             </tr>
             
             <tr>
                <th>12:45 - 13:45</th>
                <td>$seven</td>
                <td>$four</td>
                <td>$two</td>
                <td>$two</td>
                <td>$two</td>
             </tr>
                    <tr>
                <th>13:45 - 14:45</th>
                <td>$six</td>
                <td>$two</td>
                <td>$six</td>
                <td>$six</td>
                <td>$four</td>
            </tr>
        </tbody>
    </table>");
?>
</samp>
                    </pre>
                </div>
            </article>

            <article id="exercise-four" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 4: Mostrar nombre y curso con variables</h2>
                    <pre><code><\?php
    $name = "Manuel Pérez Soto";
    $ciclo = "2º CFGS DAM";
    echo ($name . " - " . $ciclo);
?>
</code>
                        <p>Salida:</p>
<samp><?php
    $name = "Manuel Pérez Soto";
    $ciclo = "2º CFGS DAM";
    echo ($name . " - " . $ciclo);
    ?> </samp>
                    </pre>
                </div>
            </article>

            <article id="exercise-five" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 5: Divisas americana y australiana</h2>
                    <pre><code><\?php
    $dolarToAustralian = 1.37995;
    $australianToDolar = 0.724662;
    print("
    <form action=\"index.php\" method=\"post\">
        Conversor de divisas:
        USA: <input type=\"number\" name=\"american\" value='0'/>
        Australia: <input type=\"number\" name=\"australian\" value='0'/>
        <input type=\"submit\" />
    </form>
    ");
     print("<p>" . (double)($_POST['american'] * $dolarToAustralian) . " Dolar americano a Australiano</p>");
     print("<p>" . (double)($_POST['australian'] * $australianToDolar) . " Dolar australiano a americano</p>");
?>

</code>
                        <p>Salida:</p>
<samp><?php
    $dolarToAustralian = 1.37995;
    $australianToDolar = 0.724662;
    print("
    <form action=\"index.php\" method=\"post\">
        Conversor de divisas:
        USA: <input type=\"number\" name=\"american\" value='0'/>
        Australia: <input type=\"number\" name=\"australian\" value='0'/>
        <input type=\"submit\" />
    </form>
    ");
     print("<p>" . (double)($_POST['american'] * $dolarToAustralian) . " Dolar americano a Australiano</p>");
     print("<p>" . (double)($_POST['australian'] * $australianToDolar) . " Dolar australiano a americano</p>");
    ?> </samp>
                    </pre>
                </div>
            </article>

            <article id="exercise-six" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 6: Divisas libras y dolares australianos</h2>
                    <pre><code><\?php
    $libraToAustralian = 1.80109;
    $australianToLibra = 0.55494;
    print("
    <form action=\"index.php\" method=\"post\">
        Conversor de divisas:
        USA: <input type=\"number\" name=\"libra\" value='0'/>
        Australia: <input type=\"number\" name=\"australian\" value='0'/>
        <input type=\"submit\" />
    </form>
    ");
     print("<p>" . (double)($_POST['libra'] * $libraToAustralian) . " Libra a australiano</p>");
     print("<p>" . (double)($_POST['australian'] * $australianToLibra) . " Dolar australiano a libra</p>");
?>

</code>
                        <p>Salida:</p>
<samp><?php
    $libraToAustralian = 1.80109;
    $australianToLibra = 0.55494;
    print("
    <form action=\"index.php\" method=\"post\">
        Conversor de divisas:
        USA: <input type=\"number\" name=\"libra\" value='0'/>
        Australia: <input type=\"number\" name=\"australian\" value='0'/>
        <input type=\"submit\" />
    </form>
    ");
     print("<p>" . (double)($_POST['libra'] * $libraToAustralian) . " Libra a australiano</p>");
     print("<p>" . (double)($_POST['australian'] * $australianToLibra) . " Dolar australiano a libra</p>");
    ?> </samp>
                    </pre>
                </div>
            </article>

            <article id="exercise-seven" class="main-section-arcticle">
                <div class="main-section-article-div">
                    <h2>Ejercicio 7: Pirámide invertida</h2>
                    <pre><code><\?php
    $rows = 10;
    for ($i = $rows; $i >= 1; $i--) {

        for($j = 1; $j <= $rows - $i; $j++) {
            print(" ");
        }

        for($j = 1; $j <= $i; $j++) {
            print("* ");
        }

        print ("\n");
    }
?>
</code>
                        <p>Salida:</p>
<samp><?php
    $rows = 10;
    for ($i = $rows; $i >= 1; $i--) {

        for($j = 1; $j <= $rows - $i; $j++) {
            print(" ");
        }

        for($j = 1; $j <= $i; $j++) {
            print("* ");
        }

        print ("\n");
    }
    ?> </samp>
                    </pre>
                </div>
            </article>
        </section>
    </main>
</body>
</html>





