<!DOCTYPE html>
<html lang="sk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-COMPATIBLE" content="IE=EDGE, chrome=1">
<title>Unknown</title>
<!--BOOTSTRAP LIBRARY -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--END-->
<!--FONT AWESOME ICON LIB -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!--END-->
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">

<div class="container">
	<div class="row">
		<img src="img/zlate-tehly_banner.jpg" alt="banner" class="mx-auto img-responsive" id="baner">
	</div>
</div>

<nav id="menu" class="navbar navbar-expand-md navbar-light">
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Hlavna stránka</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kontakt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nákupný košík</a>
      </li>

      <div class="dropdown">
    		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Klientská zóna
    		<span class="caret"></span></button>
    			<ul class="dropdown-menu">
      				<li class="nav-item"><a href="#" class="nav-link">Login</a></li>
      				<li class="nav-item"><a href="#" class="nav-link">Sledovanie objednávky</a></li>
     			 	<li class="nav-item"><a href="#" class="nav-link">Moje objednávky</a></li>
    			</ul>
 	  </div>

    </ul>
  </div>  
</nav>


<div class="container" id="text">
	<div class="row">
		
			<h2>Cenník investičných zlatých mincí</h2>
			<p>Tento cenník je online prepojený na burzu. Takže ceny v ňom uvedené sú platné. Pokiaľ máte záujem nakúpiť, pošlite prosím svoju objednávku mailom, alebo prostredníctvom <a href="#" class="link">kontaktného formulára</a>. V prípade nejasností navštívte prosím rubriku<a href="#" class="link"> 
			"Ako nakupovať"</a>, alebo <a href="#" class="link">"Často kladené otázky".</a></p>	
	</div>
</div>
<br><br><br>
<div class="container" id="combobox">
	<div class="row">
		<div class="col-md-3">
			<select class="form-control">
			  <option selected>Materiál</option>
			  <option value="1">Zlato</option>
			  <option value="2">Striebro</option>
			</select>
		</div>

		<div class="col-md-3">
			<select class="form-control">
			  <option selected>Druh</option>
			  <option value="1">Minca</option>
			  <option value="2">Tehlička</option>
			</select>
		</div>

		<div class="col-md-3">
			<select class="form-control">
			  <option selected>Hmotnosť</option>
			  <option value="1">1g</option>
			  <option value="2">2g</option>
			  <option value="2">3g</option>
			  <option value="2">4g</option>
			</select>
		</div>

		<div class="col-md-3">
			<select class="form-control">
			  <option selected>Skladom</option>
			  <option value="1">Skladom</option>
			  <option value="2">Na objednávku</option>
			</select>
		</div>
	</div>
</div>
<br><br><br>
<div class="container" id="table">
	<div class="row">
		<div class="table-responsive">
			<table class="table table-borderless">
			  <tbody>
			    <tr>
			      <td>
			      	<img src="example.jpg" alt="minca" class="img-fluid hover-shadow cursor" style="width: auto; height: 50px;" onclick="openModal();currentSlide(1)">
			      	<img src="example2.jpg" alt="minca" class="img-fluid hover-shadow cursor" style="width: auto; height: 50px;" onclick="openModal();currentSlide(2)">

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 2</div>
      <img src="example.jpg" alt="example" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 2</div>
      <img src="example2.jpg" alt="example2" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

			      </td>
			      <td>Maple Leaf 1 Oz - 40. výročie 2019<br>999,9/1000 Au</td>
			      <td>na objednávku<br>(akcia)</td>
			      <td>predaj: 1 266,40<br>výkup: 1 168,40</td>
			      <td><a href="#" style="color: #816912;"><i class="fas fa-cart-arrow-down fa-3x"></i></a></td>
			    </tr>
			    <tr>
			      <td><img src="example.jpg" alt="minca" class="img-fluid" style="width: auto; height: 50px;"></td>
			      <td>Maple Leaf 1 Oz - 40. výročie 2019<br>999,9/1000 Au</td>
			      <td>na objednávku<br>(akcia)</td>
			      <td>predaj: 1 266,40<br>výkup: 1 168,40</td>
			      <td><a href="#" style="color: #816912;"><i class="fas fa-cart-arrow-down fa-3x"></i></a></td>
			    </tr>
			    <tr>
			      <td><img src="example.jpg" alt="minca" class="img-fluid" style="width: auto; height: 50px;"></td>
			      <td class="nazov">Maple Leaf 1 Oz - 40. výročie 2019<br>999,9/1000 Au</td>
			      <td>na objednávku<br>(akcia)</td>
			      <td>predaj: 1 266,40<br>výkup: 1 168,40</td>
			      <td><a href="#" style="color: #816912;"><i class="fas fa-cart-arrow-down fa-3x"></i></a></td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>	
</div>




</div>
<script>
	
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<!--BOOTSRAP SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>
</html>