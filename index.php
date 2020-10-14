<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Manuel Pérez Soto - Ejercicio de cadenas</title>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <h1 class="header-title">Pérez Soto Manuel - Ejercicio de cadenas</h1>
            <p class="header-text">Asignatura de HLC</p>
        </div>
    </header>

    <main class="main">
        <section class="main-section">
            <article class="main-section-article">
                <p class="main-section-article-p">
                    <a href="#exercise1" class="main-section-article-p-a">Ejercicio 1</a>
                </p>

                <div id="exercise1" class="main-section-article-div">
                    <pre class="main-section-article-div-pre">
1. Escribe un script PHP para:
a) transforma un cadena con todas sus letras en mayúsculas.
b) transforma un cadena con todas sus letras en minúsuclas.
c) primera letra de la cadena en mayúsculas.
d) primera letra de cada palabra de mi cadena en mayúsculas.
La cadena a transformar es: "En un lugar de la mancha de cuyo nombre"</pre>

                    <div class="main-section-article-div-div">
                        <form action="index.php" method="post" class="form-exercise">
                            <label for="exercise1text">Texto a convertir</label>
                            <input type="text" name="exercise1text" id="exercise1text">
                            <button type="submit">Enviar</button>
                        </form>

                        <div class="main-section-article-div-div-exercise1">
                            <?php
                                print("<p>Texto en mayúsculas: ");
                                if(isset($_POST["exercise1text"])) {
                                    if($_POST["exercise1text"] != "") {
                                        $reslt = strtoupper($_POST["exercise1text"]);
                                        print("$reslt </p>");
                                    } else {
                                        print("</p>");
                                    }

                                } else {
                                    print("</p>");
                                }
                            ?>

                            <?php
                            print("<p>Texto en minúsculas: ");
                            if(isset($_POST["exercise1text"])) {
                                if($_POST["exercise1text"] != "") {
                                    $reslt = strtolower($_POST["exercise1text"]);
                                    print("$reslt </p>");
                                } else {
                                    print("</p>");
                                }

                            } else {
                                print("</p>");
                            }
                            ?>

                            <?php
                            print("<p>Texto primera en mayúscula: ");
                            if(isset($_POST["exercise1text"])) {
                                if($_POST["exercise1text"] != "") {
                                    $reslt = ucfirst(($_POST["exercise1text"]));
                                    print("$reslt </p>");
                                } else {
                                    print("</p>");
                                }

                            } else {
                                print("</p>");
                            }
                            ?>

                            <?php
                            print("<p>Texto primera letra de cada palabra en mayúscula: ");
                            if(isset($_POST["exercise1text"])) {
                                if($_POST["exercise1text"] != "") {
                                    $reslt = ucwords(($_POST["exercise1text"]));
                                    print("$reslt </p>");
                                } else {
                                    print("</p>");
                                }

                            } else {
                                print("</p>");
                            }
                            ?>

                        </div>
                    </div>

                </div>
            </article>

            <article class="main-section-article">
                <p class="main-section-article-p">
                    <a href="#exercise2" class="main-section-article-p-a">Ejercicio 2</a>
                </p>

                <div id="exercise2" class="main-section-article-div">
                    <pre class="main-section-article-div-pre">
2. Escribe un script PHP para dividir la siguiente cadea:
Cadena de entrada: '082307'
Salida esperada : 08:23:07</pre>

                    <div class="main-section-article-div-div">
                        <form action="index.php" method="post" class="form-exercise">
                            <label for="exercise2text">Número a formatear</label>
                            <input type="number" name="exercise2text" id="exercise2text">
                            <button type="submit">Enviar</button>
                        </form>

                        <div class="main-section-article-div-div-exercise1">
                            <?php
                            print("<p>Número formateado: ");
                            if(isset($_POST["exercise2text"])) {
                                if($_POST["exercise2text"] != "") {
                                    $result = null;
                                    $string = $_POST["exercise2text"];
                                    $lengthNumber = strlen(strval($string));

                                    if($lengthNumber % 2 != 0) {
                                        $result = substr($_POST["exercise2text"], 0, 1) . ":";
                                        $string = substr($_POST["exercise2text"], 1);
                                    }

                                    for($i = 1; $i <= strlen($string); $i += 2) {
                                        $result .= substr($string, $i - 1, 2) . ":";
                                    }

                                    $result = substr($result, 0, strlen($result) - 1);

                                    print("$result </p>");
                                } else {
                                    print("</p>");
                                }

                            } else {
                                print("</p>");
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </article>

        </section>
    </main>
</body>
</html>
