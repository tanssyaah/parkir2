<style>
    body{
    height: 100vh;
    background-image: url(hexagons.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat
}

* {
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}



.container {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 20px 25px;
    width: 300px;
    border: 2px solid #206d91;
    border-radius: 10px;
    background-image: linear-gradient(to right, #4297a0, #e57f84);
    box-shadow: 0 0 10px rgba(167, 161, 161, 0.3);

}

.container h1 {
    text-align: center;
    color: #ffffff;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 1px solid #e8e8e872;
}

.container label {
    text-align: left;
    color: #ffffff;
}

.container form input {
    width: -webkit-fill-available;
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #ffffff;
    color: rgb(255, 255, 255);
}

.container form button {
    width: 100%;
    height: 50px;
    padding: 5px 0;
    border: none;
    background-color: #2f5061;
    font-size: 18px;
    border-radius: 6px;
    color: #fafafa;
    cursor: pointer;
}

.container input:hover{
    background-color: #fafafa;
    color: black;
    border-radius: 5px;
    transition: all 0.6s ease-in-out;
}

.col {
    float: none;
    width: 80%;
    margin: auto;
    padding: 5px;
    text-align: center;
    margin-top: 6px;
}

.col p {
    font-size: 20px;
    padding: 10px;
    font-weight: bold;
    color: #fafafa;
}

.col .fa-facebook {
    font-size: 30px;
    text-align: center;
    text-decoration: none;
    color: #3b5998;
    cursor: pointer;
}

.col .fa-twitter {
    font-size: 30px;
    text-align: center;
    text-decoration: none;
    color: #55acee;
    cursor: pointer;
}

.col .fa-linkedin {
    font-size: 30px;
    text-align: center;
    text-decoration: none;
    color: #007bb5;
    cursor: pointer;
}

.ketengah {
	display: flex;
	/* flex-direction: column; */
	justify-content: center;
	justify-items: center;
	width: 100%;
	height: 100px;
	margin-bottom: 12px;
}
.title {
	text-align: center;
}
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	</style>
</head>
<body>
		<div class="ketengah">
             <img src="logo-12.png">
		</div>
        <h3 class="title">PARKIRAN SMK AMALIAH</h3>
    <div class="container">
    <form method="POST" action="proses_login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
</div>   
    </form>
</body>
</html>