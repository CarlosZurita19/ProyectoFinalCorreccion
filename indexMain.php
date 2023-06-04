<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PelisMedia</title>
</head>
<body>
    <header>
        <div class="logo">
            <div class="textlogo" >
                <p class="logo1" onclick="recargarPagina();">Pelis<span class ="logo2" onclick="recargarPagina();">Media</span></p>
            </div>
            <div class="btnGeneros"> 
                <a href="generos.php" onclick="setGenre();" style="text-decoration:none"><span class="generos">Generos</span></a>
            </div>
        
        </div>
        <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
    </header>
    <div id="tags">
        
    </div>
    <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>
      </div>


      
    <main id="main">
        
    </main>
    <div class="pagination">
        <div class="page" id="prev">Página anterior</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Siguiente página</div>

    </div>
    <script src="script.js"></script>
    <script src="generos.html"></script>
</body>
</html>