<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Música más escuchada</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1f1f2e, #2d2d4b);
            color: white;
        }

        header {
            background-color: #29293d;
            padding: 20px;
            border-radius: 10px;
        }

        section {
            background-color: #2e2e4d;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-transform: uppercase;
            font-weight: bold;
        }

        ol {
            padding-left: 20px;
        }

        ol li {
            margin-bottom: 5px;
        }

        img {
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
        }

        footer {
            background-color: #29293d;
            color: #b3b3ff;
            padding: 10px;
            border-radius: 10px;
        }

        .btn {
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container my-5">
   
        <header class="mb-4 text-center">
            <h1 class="display-4 text-primary">Música más escuchada</h1>
        </header>

       
        <main>
           
            <section id="pop">
                <h2 class="text-center text-success">Música del género Pop</h2>
                <p>
                    El género Pop es uno de los más populares y reconocidos a nivel mundial. Artista más conocido: 
                    Michael Jackson. Sus icónicas canciones como <em>Bad</em> y <em>Thriller</em> revolucionaron la música 
                    en los años 80. A continuación, algunas de las canciones más escuchadas del género:
                </p>
                <ol>
                    <li>'Good Vibrations', de The Beach Boys</li>
                    <li>'Respect', de Aretha Franklin</li>
                    <li>'Dancing Queen', de ABBA</li>
                    <li>'Yesterday', de The Beatles</li>
                    <li>'Bohemian Rhapsody', de Queen</li>
                </ol>
                <div class="text-center mt-3">
                    <img src="img/pop.jfif" alt="Imagen Salsa" class="img-fluid">
                </div>
                <div class="text-center mt-3">
                    <a class="btn btn-primary w-75" href="./include/login.php">Escuchar</a>
                </div>
            </section>

            
            <section id="salsa">
                <h2 class="text-center text-danger">Música del género Salsa</h2>
                <p>
                    La Salsa es un género musical que tiene su origen en el Caribe, especialmente en Cuba y Puerto Rico. 
                    Artista más reconocido: Héctor Lavoe. Algunas de las canciones más representativas de la Salsa incluyen:
                </p>
                <ol>
                    <li>'Vivir Mi Vida', de Marc Anthony</li>
                    <li>'El Cantante', de Héctor Lavoe</li>
                    <li>'Llorarás', de Oscar D’León</li>
                    <li>'La Rebelión', de Joe Arroyo</li>
                    <li>'Quimbara', de Celia Cruz</li>
                </ol>
                <div class="text-center my-3">
                    <img src="img/salsa.jpg" alt="Imagen Salsa" class="img-fluid">
                </div>
                <div class="text-center">
                    <a class="btn btn-danger w-75" href="./include/login.html">Escuchar</a>
                </div>
            </section>

           
            <section id="bachata">
                <h2 class="text-center text-info">Música del género Bachata</h2>
                <p>
                    La Bachata es un género musical originario de la República Dominicana. Artista más famoso: Romeo Santos. 
                    Algunas de las canciones más populares incluyen:
                </p>
                <ol>
                    <li>'La Bachata'</li>
                    <li>'Quiéreme Mientras Se Pueda'</li>
                    <li>'Una Lady Como Tú'</li>
                </ol>
                <div class="text-center my-3">
                    <img src="img/bachata.jpg" alt="Imagen Bachata" class="img-fluid">
                </div>
                <div class="text-center">
                    <a class="btn btn-info w-75" href="./include/login.html">Escuchar</a>
                </div>
            </section>

          
            <section id="rock">
                <h2 class="text-center text-dark">Música del género Rock</h2>
                <p>
                    El Rock es uno de los géneros más influyentes a nivel mundial. Artista más conocido: Mick Jagger. 
                    Algunas de las canciones más escuchadas del Rock son:
                </p>
                <ol>
                    <li>'Comfortably Numb', de Pink Floyd</li>
                    <li>'Thunder Road', de Bruce Springsteen</li>
                    <li>'Highway to Hell', de AC/DC</li>
                </ol>
                <div class="text-center my-3">
                    <img src="img/rock.jpg" alt="Imagen Rock" class="img-fluid">
                </div>
                <div class="text-center">
                    <a class="btn btn-dark w-75" href="./include/login.html">Escuchar</a>
                </div>
            </section>

          
            <section id="integrantes" class="text-center py-3">
                <h2>Integrantes</h2>
                <p><i>Zabdi Berenice Barragán García</i></p>
                <p><i>jessica sofia bartolo atanasios</i></p>
            </section>
        </main>

      
      
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>