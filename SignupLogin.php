<html>
<head>
<title>
</title> 
<style>

{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'jost', sans-serif;
}
body{
	background:#f2f2f2;
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100vh;
}
.card{
	width: 350px;
	height: 430px;
	perspective: 1500px;
}
#chk{
	display: none;
}
#chk:checked ~ .content{
	animation: 2s animate;
	transform: rotateY(180deg);
}
@keyframes animate{
	0%{
		transform: translateZ(0px);
	}
	50%{
		transform: translateZ(100px);
	}
	100%{
		transform: rotateY(180deg);
	}
}
.content{
	width: 100%;
	height: 100%;
	transform-style: preserve-3d;
	box-shadow: 0 5px 15px rgba(0,0,0,0.5);
	transition: transform 1s cubic-bezier(0.75, 0,0.85,1);
	border-radius: 8px;
}
.front, .back{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #fff;
	backface-visibility: hidden;
	transform-style: preserve-3d;
	perspective: 1500px;
	border-radius: 8px;
}
.back{
	transform: rotateY(180deg);
}
.inner{
	height: 100%;
	padding: 1.5em;
	transform: translateZ(80px) scale(1);
}
h2{
	position: absolute;
	top: 50px;
	left: 30px;
	font-size: 28px;
	color: #000;
	font-weight: bolder;
}
p{
	font-size: 15px;
	padding: 7px;
	margin-top: 70px;
	text-align: justify;
	line-height: 1.4em;
}
input[type=text],
input[type=DOB],
input[type=integer]{
	width: 95%;
	height: 40px;
	padding: 15px;
	margin: 10px 8px;
	box-sizing: border-box;
	color: #000;
	background:#f5f0f0;
	border: none;
	outline: none;
	border-radius: 4px;
}
input[type=text]::placeholder,
input[type=DOB]::placeholder,
input[type=integer]::placeholder{
	color: #b5a1a1;
}

.front label{
	padding: 8px 6px;
	font-size: 16px;
	color: red;
	float: right;
	cursor: pointer;
}
.back label{
	position: absolute;
	bottom: 40px;
	width: 90%;
	font-size: 16px;
	text-align: center;
	color: red;
	cursor: pointer;
}
button{
	position: absolute;
	right: 30px;
	width: 82%;
	padding: 7px;
	color: #eee;
	background:red;
	text-align: center;
	font-size: 18px;
	border-radius: 4px;
	outline: none;
	border: none;
	cursor: pointer;
	transition: .3s;
}
.front button{
	bottom: 10%;
}

.back button{
	bottom: 20%;
}

button:hover{
	background-color: #cf3c27; 
}
body{
    background-image: url('nhce2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
	<!-- <img src="nhce.jpg" alt ="cllg"> -->
	<div class="card">
		<input type="checkbox" id="chk" aria-hidden="true" name="">
		<div class="content">
			<div class="front">
				<div class="inner">
					<h2>Log in to NHCE STUDY</h2>
					<p></p>
					<form  action ="button.php" method="post"> 
					<input type="text" name="username" placeholder="User usn">
					<input type="DOB" name="dob" placeholder="DOB">
					<label for="chk" aria-hidden="true">Sign Up</label>
					
					<!-- <button type="button">Login</button> -->
					<input type="submit" name = "sub"><br><br>
					<!-- <center> -->
						<a href="teachlog.php">Teacher's Login</a>
					<!-- </center> -->
				</form>
				</div>
			</div>

			<div class="back">
				<div class="inner">
					<h2>Sign Up</h2>
					<!-- Teacher's Login -->
					<p></p>
					<form  action ="insert.php" method="post"> 
					<input type="text" name="username" placeholder="User usn">
					<input type="text" name="dob" placeholder="DOB">
                                        <!-- <input type="integer" name="SEM" placeholder="SEM"> -->
					<!-- <button type="button">Register</button> -->
					<input type="submit" name = "sub1">

					<label for="chk" aria-hidden="true">Back to log-in page</label>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
