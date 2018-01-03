<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" href="assets/CSS/style.css">
</head>

<body>



		
		
	<div id="mainContainer">
		<h1>hello</h1>
	

	<div id="nowPlayingBarContainer">

		<div id="nowPlayingBar">
			<div id="nowPlayingLeft">

				<div class="content">
					<span class="albumLink">
						<img class="albumArt" src="assets/images/squares.jpg" alt="">
					</span>

					<div class="trackInfo">
						<span class="trackName">
							<span>Happy Bday</span>
						</span>

						<span class="artistName">
							<span>Emilee</span>
						</span>
					</div>
				</div>
				
			</div>
			<div id="nowPlayingCenter">

				<div class="content playerControls">
					<div class="buttons">
						<button class="controlButton shuffle" title="Shuffle Button">
							<img src="assets/images/icons/shuffle.png" alt="Shuffle">
						</button>

						<button class="controlButton previous" title="previous">
							<img src="assets/images/icons/left-arrow.png" alt="previous">
						</button>

						<button class="controlButton play" title="play">
							<img src="assets/images/icons/play.png" alt="play">
						</button>

						<button class="controlButton pause" title="pause" style="display:none">
							<img src="assets/images/icons/pause.png" alt="pause">
						</button>

						<button class="controlButton next" title="next">
							<img src="assets/images/icons/right-arrow.png" alt="next">
						</button>

						<button class="controlButton repeat" title="repeat">
							<img src="assets/images/icons/repeat.png" alt="repeat">
						</button>
					</div>

					<div class="playBackBar">
						<span class="progressTime current">0.00</span>
						<div class="progressBar">
							<div class="progressBarBackground">
								<div class="progress"></div>
							</div>
						</div>
						<span class="progressTime remaining">0.00</span>
					</div>
					
				</div>



				
			</div>
			<div id="nowPlayingRight">

				<div class="volumeBar">
					<button class="controlButton volume" title="volume">
						<img src="assets/images/icons/volume.png" alt="volume button">	
					</button>

					<div class="progressBar">
							<div class="progressBarBackground">
								<div class="progress"></div>
							</div>
					</div>

				</div>
				
			</div>
			
		</div>
		
	</div>

</div>

</div>






</body>

</html>
