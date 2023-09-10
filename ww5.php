<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scavenger Hunt</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div id="page-container">
	<div class="main-content">
		<?php include 'menu.php'; ?>

		<div class="content-wrap">
		 <h1>Writers Walk 5</h1>
			<!-- Bild für die Frage -->
			<img src="pic/ww5.jpg" alt="image" class="question-image" id="fullscreenImage">
			
			<!-- Koordinatenbox -->
			<div class="coords-box">
				Coordinates: -33.8688° S, 151.2093° E <a href="https://www.google.com/maps?q=-33.859747,151.212847" target="_blank">Open in Google Maps</a>
			</div>
			
				<!-- Frage -->
			<p class="question-text">
				What is the name on the plaque you see in the picture?
			</p>
	
			<!-- Ihr Formular -->
			<form id="quizForm">
				<input type="text" id="answer" placeholder="Your answer">
				<button type="button" onclick="checkAnswer()">Send</button>
				<div id="feedbackMessage" style="color: green; margin-top: 10px;"></div>
			</form>
		</div>
	</div>
		

	<!-- Der Footer -->
	<div class="footer">
		<a href="#">About us</a>
		<a href="#">Destinations</a>
		<a href="#">Travel Tips</a>
		<a href="#">Contact us</a>
		<a href="#">Terms and Conditions</a>
	</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Aktuellen Pfad der Webseite erhalten
		var currentPath = window.location.pathname;
		console.log(currentPath);
		// Alle Links in den Menüs abrufen
		var menuLinks = document.querySelectorAll('.menu a');

		menuLinks.forEach(function(link) {
			if (link.getAttribute('href') === currentPath) {
				// Den aktiven Link markieren
				link.classList.add('active-link');

				// Übergeordnetes Menüelement (falls vorhanden) finden und erweitern
				var parentMenu = link.closest('.submenu');
				if (parentMenu) {
					parentMenu.style.display = 'block';
				}
			}
		});
	});

    function checkAnswer() {
        var userAnswer = document.getElementById("answer").value;
        var correctAnswer = "RichtigeAntwort"; // Setzen Sie hier Ihre korrekte Antwort ein
		var feedbackMessage = document.getElementById("feedbackMessage");

        if(userAnswer === correctAnswer) {
            feedbackMessage.textContent = "Correct! The 5th letter is <span class="highlight-letter">C</span>.";
        } else {
            feedbackMessage.textContent = "Wrong answer.";
        }
    }
	
	
	var img = document.getElementById('fullscreenImage');

	img.addEventListener('click', function() {
		if (document.fullscreenElement) {
			document.exitFullscreen();
		} else {
			img.requestFullscreen();
		}
	});

</script>


</body>
</html>
