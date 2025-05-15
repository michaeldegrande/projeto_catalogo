<!DOCTYPE html>
    <html lang="pt-BR">

        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <title>Catálogo de Livros</title>
            <style>
                html, body{
                    height:100%;
                    margin:0;
                }

                body {background-image: url('https://wallpapers.com/images/featured/imagens-da-estante-de-livros-j7fnuo9bp491ttub.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                }

                h1 {
                    color: white;
                }

                button {
                    color: black;
                }

            </style>
        </head>
        
        <body>
            
            <h1 class="w3-center w3-bold">Catálogo de Livros</h1>
            
            <form action="busca.php" method="GET" class= "w3-center">
                <div class="w3-row">
                        <div class="w3-col s6 w3-display-middle" style="margin: auto;">
                            <input type="text" name="busca" placeholder="Digite o Título ou Autor" class= "w3-center w3-input w3-round" style="width: 100%;">
                                <button type="submit" class="w3-center">Buscar</button>
                        </div>
                </div>
            </form>
        </body>
       
    </html>