<!DOCTYPE html>
<html>
<head>
  <?php include 'cssAndjs.php' ?>
  <script src="js/searchJs.js"></script>
  <title>
  Inicio  
  </title>
  <?php include 'header.php' ?>
  <script>
  $(document).ready(function(){
  	var title = "<?php echo $_GET["title"]; ?>";
  	<?php switch ($_GET["advanceSearch"]) {
  		case 'none':
  			echo" $(\"#listOfMovies\").html(getHtml(\"movie\",title));
                $(\"#listOfSeries\").html(getHtml(\"series\",title));
                $(\"#listOfGames\").html(getHtml(\"game\",title));			
  				";
  				break;
  		case 'movie':
  			echo " 
                $(\"#listOfMovies\").html(getAdvanceHTML(\"movie\",title));
                $(\"#listOfSeries\").html(\"\");
                $(\"#listOfGames\").html(\"\");";
                break;
        case 'series':
  			echo " 
                $(\"#listOfMovies\").html(\"\");
                $(\"#listOfSeries\").html(getAdvanceHTML(\"series\",title));
                $(\"#listOfGames\").html(\"\");";
                break;
        case 'game':
        	echo " 
                $(\"#listOfMovies\").html(\"\");
                $(\"#listOfSeries\").html(\"\");
                $(\"#listOfGames\").html(getAdvanceHTML(\"game\",title));";
                break;
  		default:
  			break;
  		} 
	     echo "checkIfNotResults();";

  	?>
	});
	</script>
</head>
<body>

<div class="app">
    <h2 id="withoutResults" hidden>No se ha encontrado ningún resultado</h2></br>
    <h2 id="tituloPeliculas" hidden>Peliculas</h2>
	    <div id="listOfMovies">
	    </div>
	<h2 id="tituloJuegos" hidden>Juegos</h2>
		<div id="listOfGames">
		</div>
	<h2 id="tituloSeries" hidden>Series</h2>
		<div id="listOfSeries">
		</div>
<div class="detail">
    <svg class="close">
      <use xlink:href="#close"></use>
    </svg>
    <div class="movie">

      <img src="http://movium.io/data/posters/eqFckcHuFCT1FrzLOAvXBb4jHwq.jpg" alt="" class="poster" />
      <div class="title">Room</div>
      <div class="info">
        <span class="length">117 min</span>
        <span class="year">2015</span>
      </div>
      <div class="desc">
        Jack is a young boy of 5 years old who has lived all his life in one room. He believes everything within it are the only real things in the world. But what will happen when his Ma suddenly tells him that there are other things outside of Room?
      </div>

      <button class="play" id="buttonPlay" onclick="showMoreInfo()">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 232.153 232.153" style="enable-background:new 0 0 232.153 232.153;" xml:space="preserve" width="10px" height="10px">
          <g id="Play">
            <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M203.791,99.628L49.307,2.294c-4.567-2.719-10.238-2.266-14.521-2.266   c-17.132,0-17.056,13.227-17.056,16.578v198.94c0,2.833-0.075,16.579,17.056,16.579c4.283,0,9.955,0.451,14.521-2.267   l154.483-97.333c12.68-7.545,10.489-16.449,10.489-16.449S216.471,107.172,203.791,99.628z" fill="#FFFFFF"/>
          </g>
        </svg> Read More
      </button>



    </div>
  </div>
</div>


<!-- Icons -->
<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 212.982 212.982">
    <g>
      <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z" fill="#525661"/>
    </g>
  </symbol>
  <symbol id="ico-search">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#363a47" d="M14.769,14.769c-0.342,0.342-0.896,0.342-1.237,0l-3.756-3.756
                                                                    c-2.399,1.793-5.801,1.623-7.981-0.557c-2.392-2.392-2.392-6.271,0-8.663s6.271-2.392,8.662,0c2.18,2.181,2.35,5.583,0.557,7.981
                                                                    l3.756,3.756C15.11,13.873,15.11,14.427,14.769,14.769z M9.219,3.032c-1.709-1.709-4.479-1.709-6.188,0
                                                                    c-1.708,1.708-1.708,4.479,0,6.188c1.709,1.708,4.479,1.708,6.188,0C10.927,7.51,10.927,4.74,9.219,3.032z"/>
  </symbol>
</svg>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="js/index.js"></script>
</body>
</html>