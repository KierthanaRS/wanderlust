<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<style>
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
    body {
	height: 100vh;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-perspective: 1000px;
	perspective: 1000px;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	position: relative;
	background-color: #111;
	font-family: "Montserrat";
}

.container {
	min-width: 90%;
	min-height: 90%;
	border-radius: 20px;
	position: relative;
	-webkit-transition: 1.5s ease-in-out;
	transition: 1.5s ease-in-out;
	transform-style: preserve-3d;
}
@media (min-width: 1001px){
	.container{
		min-width: 70%;
		min-height: 75%;
	}
}
.side {
	position: absolute;
	text-align: center;
	width: 100%;
	height: 100%;
	padding: 20px 50px;
	color: #fff;
	transform-style: preserve-3d;
	backface-visibility: hidden;
	border-radius: 20px;
}
.content {
	transform: translatez(70px) scale(0.8);
	line-height: 1.5em;
}
.content h1 {
	position: relative;
}
.content p {
	margin-top: 50px;
	line-height: 2em;
}
.content h1:before {
	content: "";
	position: absolute;
	bottom: -20px;
	height: 3px;
	background-color: #3e3;
	width: 70px;
	left: 50%;
	transform: translateX(-50%);
}
.front {
	z-index: 2;
	background-size: 100vh;
	background-size: cover;
	background-image: url(me2.jpg);
}
.back {
	background-color: #333;
	transform: rotateY(180deg);
	z-index: 0;
	padding-top: 10px;
	background-image: url(me1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.container:hover {
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}
form {
	text-align: left;
}
.back h1 {
	margin: 0;
}
form label,
form input {
	display: block;
	font-size: large;
}
form input,
form textarea {
	background: transparent;
	border: 0;
	border-bottom: 5px solid #444;
	padding: 5px;
	width: 100%;
	height:10%;
	color: #fff;
	font-size:large;
}
form label {
	margin: 15px 0;
	font-size: 150%;
}
button{
	display: block;
	font-size: 125%;
	width: auto;
	margin: 10px auto;
	padding: 5px 10px;
	border: 3px solid #555;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	background-color: #111;
}
button:hover{
	color: #111;
	background-color: #fff;
}

</style>
<body>
    <div class="container">
        <div class="front side">
          <div class="content">
            <h1>Kierthana</h1>
			<br>
			<br>
			<hr>
			<br>
			<img style="border-radius: 50%;margin-left: 3%;width: 30%;height: 30%;" src="mine.jpg" >
			<br>
			<br>
            <p style="font-size: 150%;">I am a student currently pursuing B.Tech in Information Technology at Chennai Institute of Technology. I am an enthusiastic learner and is currectly working on Full stack projects.I work with HTML, CSS, Javascript, React js and Mysql.
            </p>
          </div>
        </div>
        <div class="back side">
          <div class="content">
            <h1>Contact Me</h1>
			<br>
			<br>
			<hr>
			<br>
            <form name="myform" method="post" action="aboutme.php">
              <label>Name :</label>
              <input type="text" id="name" name="name" placeholder="Your name">
              <label>E-mail :</label>
              <input type="text" id="email" name="email" placeholder="Example@mail.com">
              <label>Your message :</label>
              <textarea id="message" name="message" placeholder="The Subject"></textarea>
              <!--<input type="submit" value="Done" onclick="window.location.href='frontpage.html'">-->
			  <button type="submit" name="complain">Done</button>
            </form>
          </div>
        </div>
      </div>

</body>
</html>