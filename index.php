<!DOCTYPE html>

<html>
<header>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Studio B</title>
</header>
<body>
	<div id="logo"><a href="https://www.instagram.com/studiofaceb/" target="_blank"><img class="logo_insta" src="instagram.png" alt="instagram Studio face b"></a>&nbsp;<a href="https://open.spotify.com/playlist/7GYx8eLXV8kEBvOggwUkSH?si=5k0LoNVvRAyd5UoFg0NPTg" target="_blank"><img class="logo_spotify" src="spotify.png" alt="spotify StudioB"></a></div>
	<div id="contener">
		<video src="back4.mp4" muted autoplay width="100%"></video>
		<div class="animate seven">
			<span>S</span><span>T</span><span>U</span><span>D</span><span>I</span><span>O</span>&nbsp;<span>B</span>
		</div>
	</div>

	<!-- Studio B introduction -->
	<section id="laius">
		<p class="laius">Today,<br />too many artists try to imitate, look like others.<br />But your strength is your personality.<br /><em>STUDIO B</em><br><span>highlights the unique.</span><br/>Beauty is not being flawless.<br />These are the failures that set you apart.<br />And together we will highlight them.<br />
			<p class="laius1"><span class="slogan">Be you<br />Be art<br />Be Unique<br />Studio B</span></p>
	</section>

	<!-- Prestations -->
	<section id="prestations">
		<article id="gauche" class="premier">
			<div class="photo"><img src="relation1.jpg" alt="Studio B Billie B about development and artistic direction agency"></div>
			<div class="paragraphe">
				<h1>About</h1>
				<p>STUDIO B is a development and artistic direction agency, created by Billie B. Billie B is a Franco-Swedish Artist, singer and songwriter born in France. She graduated with a high-school diploma in literature in 2014, as an external candidate and continued with art studies as she was working.<br /><br />She started to work with DJs and producers for different music projects, her role was to compose lyrics and toplines. In 2015, she moved to Stockholm. Billie develops her skills for the creation of identity for places and artists.<br/><br/>After creating different concepts for different restaurants and bars, she graduated an artistic development diploma in 2017. In 2019, she worked as the topliner and lyricist on the track “Night” with Merlin Records. Billie is also the co-creator of the web magazine <a href="http://blackdecks.se/">BLACKDECKS</a>.
				</p>

			</div>
		</article>
		<article id="droite">
			<div class="paragraphe element">
				<h1>Branding</h1>
				<p>The brand is a visual representation of identity. It is essential to understand the importance of the image in any artistic conception: how we decide to communicate, what we decide to highlight and how to highlight it...<br><br>Studio B assists you find your image what inspires you and what makes you unique.</p>
			</div>
			<div class="photo element"><img src="image2.jpg" alt="Orville © DAVID MOLLÉ"></div>
		</article>
		<article id="gauche">
			<div class="photo"><img src="image7.jpg" alt="Jess Glynne ©cover'Always in between'JessGlynne"></div>
			<div class="paragraphe">
				<h1>LINKING</h1>
				<p>The people with whom you decide to work will play a major role in the quality of your art. It's important to work with people who understand you and who will guide you while respecting your personality.<br /><br />Studio B puts you in contact with professionals adapted to your universe and your needs... Recording studios, Producers, vocal coach, Agents.</p>
			</div>
		</article>
		<article id="droite">
			<div class="paragraphe element">
				<h1>DEVELOPMENT</h1>
				<p>The last step is to put the whole process into practice : photographer, web designer and stylist, to be consistent with who you are and with the people you target.<br><br>Studio B also helps you to set up a marketing strategy, be visible on social networks, how to communicate and reach your audience the one we have defined.</p>
			</div>
			<div class="photo element"><img src="image1.jpg" alt="halsey ©cover'hopeless fountain kingdom'Hasley"></div>
		</article>
	</section>

	<!-- Contact -->
	<section id="contact">
		<h2>Contact Us</h2>
		<p>billieb@studiob.se - +46 (0)7 377 836 10</p>
	</section>

	<style type="text/css">
	/*-------------------- Fonts --------------------*/
		@font-face
		{
			font-family: 'BebasNeue-Bold';
			src: url('BebasNeue-Bold.ttf'),
			url('BebasNeue-Bold.otf');
		}

		@font-face
		{
			font-family: 'BebasNeue-Regular';
			src: url('BebasNeue-Regular.ttf'),
			url('BebasNeue-Regular.otf');
		}

		body{
			margin: 0;
			width: 100%;
		}

		/*------------- Logo networks ---------------*/
		.logo_insta
		{
			width: 30px;
		}

		.logo_spotify
		{
			padding-left: 5px;
			width: 30px;
		}

		#logo
		{
			position: absolute;
			top: 25px;
			right: 30px;
			z-index: 1;
		}
		@media only screen and (min-width: 1940px){
			.logo_insta
			{
				width: 40px;
			}

			.logo_spotify
			{
				padding-left: 5px;
				width: 40px;
			}
		}
		@media only screen and (max-width: 920px){
			.logo_insta
			{
				width: 25px;
			}

			.logo_spotify
			{
				padding-left: 5px;
				width: 25px;
			}
		}

		@media only screen and (max-width: 620px){
			.logo_insta
			{
				width: 20px;
			}

			.logo_spotify
			{
				padding-left: 5px;
				width: 20px;
			}
		}

		#contener{
			width: 100%;
			text-align: center;
		}
		/*-------------------- Video --------------------*/
		video
		{
			width: 100%;
			display: block;
		}

		@media only screen and (max-width: 620px){
			video{
				display: none;
			}
		}

		/*-------------------- Title --------------------*/

		@media only screen and (min-width: 1940px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 20rem;
				font-size: 2500%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}
		@media only screen and (max-width: 1940px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 16rem;
				font-size: 1700%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}

		@media only screen and (max-width: 1680px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 14rem;
				font-size: 1500%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}

		@media only screen and (max-width: 1440px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 12rem;
				font-size: 1400%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}

		@media only screen and (max-width: 1366px) {
				.animate {
					width: 50%;
					font-family: 'BebasNeue-Bold';
					font-weight: bold;
					text-align: center;
					transform: translate(50%,0%);
					position: absolute;
					top: 11rem;
					font-size: 1300%;
					margin:auto;
				}
				.animate span {
					display: inline-block;
				}
				.animate span:nth-of-type(1) {
					animation-delay: 1.3s;
				}
				.animate span:nth-of-type(2) {
					animation-delay: 1.5s;
				}
				.animate span:nth-of-type(3) {
					animation-delay: 2.1s;
				}
				.animate span:nth-of-type(4) {
					animation-delay: 2.3s;
				}
				.animate span:nth-of-type(5) {
					animation-delay: 2.5s;
				}
				.animate span:nth-of-type(6) {
					animation-delay: 3.1s;
				}
				.animate span:nth-of-type(7) {
					animation-delay: 5s;
				}

				.seven span
				{
					text-align: center;
					color: #FFEC82;
					opacity: 0;
					/*text-shadow: 0.01em 0.01em #000;*/
					transform: translate(-150px, 0) scale(.3);
					animation: leftRight 4s forwards;
				}

				@keyframes leftRight
				{
					/*40%
					{
					transform: translate(50px, 0) scale(.7);
					opacity: 1;
					color: #FFF3F5;
				}

				60%
				{
				color: #FFF3F5;
				}*/
				80%
				{
					transform: translate(0) scale(2);
					opacity: 0;
				}

				100%
				{
					transform: translate(0) scale(1);
					opacity: 1;
				}
			}}

		@media only screen and (max-width: 1200px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 8rem;
				font-size: 1000%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}

		@media only screen and (max-width: 920px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 6rem;
				font-size: 900%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}

		@media only screen and (max-width: 805px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 5rem;
				font-size: 800%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
		}}

		@media only screen and (max-width: 705px) {
			.animate {
				width: 50%;
				font-family: 'BebasNeue-Bold';
				font-weight: bold;
				text-align: center;
				transform: translate(50%,0%);
				position: absolute;
				top: 4rem;
				font-size: 700%;
				margin:auto;
			}
			.animate span {
				display: inline-block;
			}
			.animate span:nth-of-type(1) {
				animation-delay: 1.3s;
			}
			.animate span:nth-of-type(2) {
				animation-delay: 1.5s;
			}
			.animate span:nth-of-type(3) {
				animation-delay: 2.1s;
			}
			.animate span:nth-of-type(4) {
				animation-delay: 2.3s;
			}
			.animate span:nth-of-type(5) {
				animation-delay: 2.5s;
			}
			.animate span:nth-of-type(6) {
				animation-delay: 3.1s;
			}
			.animate span:nth-of-type(7) {
				animation-delay: 5s;
			}

			.seven span
			{
				text-align: center;
				color: #FFEC82;
				opacity: 0;
				/*text-shadow: 0.01em 0.01em #000;*/
				transform: translate(-150px, 0) scale(.3);
				animation: leftRight 4s forwards;
			}

			@keyframes leftRight
			{
				/*40%
				{
				transform: translate(50px, 0) scale(.7);
				opacity: 1;
				color: #FFF3F5;
			}

			60%
			{
			color: #FFF3F5;
			}*/
			80%
			{
				transform: translate(0) scale(2);
				opacity: 0;
			}

			100%
			{
				transform: translate(0) scale(1);
				opacity: 1;
			}
			}}

		@media only screen and (max-width: 620px){
				#contener{
					height: 9rem;
					width: 100%;
					text-align: center;
					align-items: center;
					align-content: center;
				}
				.animate {
					font-family: 'BebasNeue-Bold';
					font-weight: bold;
					color: #FFEC82;
					font-size: 5rem;
					align-items: center;
					justify-content: center;
					text-align: center;
					margin: auto;
					display: flex;
					flex-wrap: nowrap;
				}
				.animate span {
					display: inline-block;
				}

				.animate span:nth-of-type(1) {
					animation-delay: .3s;
				}
				.animate span:nth-of-type(2) {
					animation-delay: .5s;
				}
				.animate span:nth-of-type(3) {
					animation-delay: 1.1s;
				}
				.animate span:nth-of-type(4) {
					animation-delay: 1.3s;
				}
				.animate span:nth-of-type(5) {
					animation-delay: 1.5s;
				}
				.animate span:nth-of-type(6) {
					animation-delay: 2.1s;
				}
				.animate span:nth-of-type(7) {
					animation-delay: 2.6s;
				}

				.seven span
				{
					text-align: center;
					color: #FFEC82;
					opacity: 0;
					/*text-shadow: 0.01em 0.01em #000;*/
					transform: translate(-150px, 0) scale(.3);
					animation: leftRight 3s forwards;
				}}


		/*----------------- Introduction -----------------*/

		#laius
		{
			margin-top: -3%;
			display: flex;
			flex-direction: row;
			width: 100%;
		}

		/*------- Left Part ------*/
		.laius
		{
			padding-top: 2rem;
			width: 55%;
			margin-left: 4%;
			font-family: 'BebasNeue-Regular';
			font-size: 2em;
		}

		.laius em
		{
			font-weight: 700;
			font-size: 3em;
			font-style: normal;
			line-height: 90px;
			font-family: 'BebasNeue-Bold';
		}

		/*------ Right Part -----*/

		.laius1
		{
			margin-top: 2%;
			padding-top: 4%;
			width: 35%;
			height: 5em;
			padding-left: 5%;
			margin-left: 0%;
			padding-right: 1%;
			font-size: 5em;
			padding-bottom: 2%;
			font-family: 'BebasNeue-Bold';
			background: #000;
			line-height: 90px;
			color: #fff;
		}
		@media only screen and (min-width: 1940px){
			.laius {
				font-size: 3rem;
			}

			.laius em {
				font-size: 4rem;
				line-height: 150px;
			}

			.laius1 {
				font-size: 6rem;
				height: auto;
				line-height: 130px;
			}
		}
		@media only screen and (max-width: 1940px){
			.laius {
				font-size: 3rem;
			}

			.laius em {
				font-size: 4rem;
				line-height: 150px;
			}

			.laius1 {
				font-size: 6rem;
				height: auto;
				line-height: 130px;
			}
		}

		@media only screen and (max-width: 1680px){
			.laius {
				font-size: 2.7em;
			}

			.laius em {
				font-size: 3.7em;
				line-height: 140px;
			}

			.laius1 {
				font-size: 5.7em;
				height: auto;
				line-height: 120px;
			}
		}

		@media only screen and (max-width: 1366px){
			.laius {
				font-size: 2.3em;
			}

			.laius em {
				font-size: 3.3em;
				line-height: 120px;
			}

			.laius1 {
				font-size: 5.3em;
				height: auto;
				line-height: 100px;
			}
		}

		@media only screen and (max-width: 1100px){
			.laius {
				font-size: 2em;
			}

			.laius em {
				font-size: 3em;
				line-height: 100px;
			}

			.laius1 {
				font-size: 5em;
				height: auto;
				line-height: 100px;
			}
		}
		@media only screen and (max-width: 960px){

			.laius {
				font-size: 1.5em;
			}

			.laius em {
				font-size: 2.5em;
			}

			.laius1 {
				font-size: 4em;
				height: auto;
				line-height: normal;
			}
		}

		@media only screen and (max-width: 740px){
			#laius
			{
				margin-top: -2%;
			}

			.laius {
				font-size: 1.2em;
			}

			.laius em {
				font-size: 2.2em;
				line-height: normal;
			}

			.laius1 {
				font-size: 3em;
				height: auto;
				line-height: normal;
			}
		}

		@media only screen and (max-width: 620px){
			#laius
			{
				margin-top: 2%;
			}

			.laius {
				font-size: 1.2em;
				padding-top: 1%;
			}

			.laius em {
				font-size: 2.2em;
				line-height: normal;
			}

			.laius1 {
				padding-top: 4%;
				padding-bottom: 4%;
				font-size: 3em;
				height: auto;
				line-height: normal;
			}
		}

		@media only screen and (max-width: 500px){
			#laius
			{
				margin-top: 2%;
			}

			.laius {
				font-size: 1em;
				padding-top: 1%;
			}

			.laius em {
				font-size: 2em;
				line-height: normal;
			}

			.laius1 {
				font-size: 2.4em;
				height: auto;
				line-height: normal;
			}
		}

		@media only screen and (max-width: 420px){
			#laius
			{
				margin-top: 4%;
				width: 100%;
			}

			.laius {
				font-size: 0.9em;
				padding-top: 1%;
			}

			.laius em {
				font-size: 1.5em;
				line-height: normal;
			}

			.laius1 {
				font-size: 2.3em;
				height: auto;
				line-height: normal;
			}
		}

		@media only screen and (max-width: 320px){
			#laius
			{
				margin-top: 4%;
				width: 100%;
			}

			.laius {
				font-size: 0.8em;
				padding-top: 1%;
			}

			.laius em {
				font-size: 1.3em;
				line-height: normal;
			}

			.laius1 {
				font-size: 2em;
				height: auto;
				line-height: normal;
				padding-bottom: 7%;
			}
		}

		/*----------------- Prestations -----------------*/

		#prestations
		{
			margin-top: -7%;
			width: 100%;
			margin-left: 0%;
		}

		/*------- First ------*/
		#gauche.premier
		{

			margin-top: inherit;
			margin-top: 0%;
		}

		.premier .paragraphe h1
		{
			margin-top: -25%;
		}

		.premier .paragraphe a
		{
			margin-top: -5%;
			text-decoration: none;
			font-family: helvetica;
			font-size: 1rem;
			color: black;
		}

		.premier .paragraphe p
		{
			padding-left: 0%;
			margin-top: -5%;
			font-family: helvetica;
			font-size: 1rem;
		}

		/*------ Both -------*/

		#droite, #gauche
		{
			margin-top: -8%;
			display: flex;
			align-items: center;
			width: 100%;
			margin-left: 0%;
		}

		#droite, #gauche p {
			text-align: justify;
		}

		.photo img
		{
			width: 100%;
		}

		.photo
		{
			flex:50%;
		}

		.paragraphe
		{
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.paragraphe p
		{
			/*text-transform: uppercase;*/
			font-family: helvetica;
			font-size: 1rem;
			margin-top: -8%;
		}

		.paragraphe h1
		{
			text-transform: uppercase;
			font-family: 'BebasNeue-Bold';
			font-size: 3em;
			margin-top: -3%;
		}

		/*------ Left -----*/

		#gauche .paragraphe
		{
			flex:40%;
			padding-left: 5%;
			padding-right: 5%;
        	color: #000;
		}

		/*----- Right ----*/

		#droite .paragraphe
		{
			flex:40%;
			padding-left: 5%;
			padding-right: 5%;
        	color: #000;
		}
		@media only screen and (min-width: 1990px){

			#prestations{
				margin-top: -4%;
			}

			.paragraphe p{
				font-size: 1.7rem;
			}

			.premier .paragraphe h1{

				font-size: 5rem;
			}

			.premier .paragraphe p{
				font-size: 1.7rem;
			}

			.paragraphe h1{
				font-size: 5rem;
			}

			.premier .paragraphe a{
				font-size: 1.7rem;
			}

			#droite, #gauche{
				margin-top: -10%;
			}
		}
		@media only screen and (max-width: 1990px){

			#prestations{
				margin-top: -4%;
			}

			.paragraphe p{
				font-size: 1.5rem;
			}

			.premier .paragraphe h1{

				font-size: 4rem;
			}

			.premier .paragraphe p{
				font-size: 1.5rem;
			}

			.paragraphe h1{
				font-size: 4rem;
			}

			.premier .paragraphe a{
				font-size: 1.5rem;
			}

			#droite, #gauche{
				margin-top: -10%;
			}
		}

		@media only screen and (max-width: 1680px){

			#prestations{
				margin-top: -6%;
			}
		}

		@media only screen and (max-width: 1366px){

			#prestations{
				margin-top: -6%;
			}

			.paragraphe p{
				font-size: 1.3rem;
			}

			.premier .paragraphe h1{
				margin-top: -2%;
				font-size: 3rem;
			}

			.premier .paragraphe p{
				font-size: 1.3rem;
			}

			.paragraphe h1{
				font-size: 3rem;
			}

			.premier .paragraphe a{
				font-size: 1.3rem;
			}

			#droite, #gauche{
				margin-top: -5%;
			}
		}

		@media only screen and (max-width: 1100px){

			#prestations{
				margin-top: -6%;
			}

			.paragraphe p{
				font-size: 1rem;
			}

			.premier .paragraphe h1{
				margin-top: -2%;
				font-size: 2.7rem;
			}

			.premier .paragraphe p{
				font-size: 1rem;
			}

			.paragraphe h1{
				font-size: 2.7rem;
			}

			.premier .paragraphe a{
				font-size: 1rem;
			}

			#droite, #gauche{
				margin-top: -5%;
			}
		}
		@media only screen and (max-width: 750px){

			#prestations{
				margin-top: -7%;
			}

			.paragraphe p{
				font-size: .8rem;
			}

			.premier .paragraphe h1{
				margin-top: -2%;
				font-size: 2rem;
			}

			.premier .paragraphe p{
				font-size: .75rem;
			}

			.paragraphe h1{
				font-size: 2rem;
			}

			.paragraphe a{
				font-size: .8rem;
			}

			#droite, #gauche{
				margin-top: -1%;
			}
		}
		@media only screen and (max-width: 970px){

			#prestations{
				margin-top: -8%;
			}

			.paragraphe p{
				font-size: .8rem;
			}

			.premier .paragraphe h1{
				margin-top: -2%;
				font-size: 2.1rem;
			}

			.premier .paragraphe p{
				font-size: .8rem;
			}

			.paragraphe h1{
				font-size: 2.1rem;
			}

			.premier .paragraphe a{
				font-size: .8rem;
			}

			#droite, #gauche{
				margin-top: -3%;
			}
		}
		@media only screen and (max-width: 920px){

			#prestations{
				margin-top: -8%;
			}

			.paragraphe p{
				font-size: .75rem;
			}

			.premier .paragraphe h1{
				margin-top: -2%;
				font-size: 2rem;
			}

			.premier .paragraphe p{
				font-size: .8rem;
			}

			.paragraphe h1{
				font-size: 2rem;
			}

			.premier .paragraphe a{
				font-size: .8rem;
			}

			#droite, #gauche{
				margin-top: -3%;
			}
		}
		@media only screen and (max-width: 620px){

				#prestations {
					width: 100%;
					margin: auto;
					margin-top: -3rem;
				}

				#droite, #gauche {
					margin-top: 0%;
					flex-direction: column;
					justify-content: center;
	  			align-items: center;
					width: 100%;
					/*padding-left: 1%;
					padding-right: 1%;*/
				}

				/*----- Left ----*/

				#gauche .paragraphe
				{
					margin-top: 3rem;
					margin-bottom: 3rem;
					flex:40%;
					padding-left: -2%;
					padding-right: -2%;
		     	color: #000;
				}

				/*----- Right ----*/

				#droite .paragraphe
				{
					margin-top: 3rem;
					margin-bottom: 3rem;
					flex:40%;
					padding-left: -2%;
					padding-right: -2%;
		        	color: #000;
				}

				.photo
				{
					flex:100%;
				}

				.paragraphe p{
					font-size: .9rem;
				}

				.premier .paragraphe h1{
					margin-top: 2%;
					font-size: 2.3rem;
				}

				.premier .paragraphe p{
					font-size: .9rem;
				}

				.paragraphe h1{
					font-size: 2.3rem;
				}

				.paragraphe a{
					font-size: .9rem;
				}

				#droite .element:nth-child(1){
					order: 2
				}

				#droite .element:nth-child(2){
					order: 1
				}
			}

		/*----------------- Contact -----------------*/

		#contact
		{
			margin-top: -0.4%;
			width: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 300px;
			background: black;
		}

		#contact h2
		{
			text-transform: uppercase;
			font-family: 'BebasNeue-Bold';
			font-size: 3em;
			color: white;
		}

		#contact p
		{
			margin-top: 0%;
			font-family: helvetica;
			font-size: 1.5em;
			color: #fff;
		}

		@media only screen and (max-width: 620px){
			#contact h2
			{
				font-size: 2em;
			}

			#contact p
			{
				margin-top: 0%;
				font-family: helvetica;
				font-size: .8em;
				color: #fff;
			}
		}

	</style>
</body>
</html>
