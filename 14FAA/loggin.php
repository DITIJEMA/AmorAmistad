
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 DE FEBRERO</title>
</head>
<body>
    <style>
        * {
	padding: 0;
	margin: 0;
	font-family: century gothic;
	text-align: center;
}

form {
    height: 25%;
	padding: 50px 20px;
	background:url("IMG/madera3.jpg");
    background-size: cover;
	margin: calc(25% + 120px);
	margin-top: 100px;
	padding-top: 40px;
	margin-bottom: 30px
}

h1 {
	text-align: center;
	padding: 12px;
	color: rgb(206, 203, 203)
}

input {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px
}

input[type='submit']{
	background-color: #48e;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;
	
}
.ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
.off{
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: rgb(0, 0, 0);
	color: #fff

}
body{
	background:url("IMG/img.jpg");
	width: 100%;
	height:100%vh;
	background-size: cover;
	color:white;
	
}
.mensaje{
	width: 100%;
	max-width: 350px;
	margin: auto;
	margin-top: 20px;
	text-align: left;
	padding: 6px;
	color: red;

}
h6 {
	text-align: center;
	padding: 12px;
    color: rgb(206, 203, 203);
    line-height: 20px;
}
.gabo{
	padding: 50px 20px;
	background-color: #381b1ba6;
	margin: calc(25% + 100px);
	margin-top: 70px;
	padding-top: 28px;
    margin-bottom: 30px;
    line-height: 20px;
}
header{
    width: 100%;
    color: #fff;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    align-content: space-between;
    background-color: rgba(0, 0, 0,.3);
}
header h1{
    margin-left: 5px;
    align-items: center;
    width: calc(20% - 100px);
    font-family: montez;
    font-size: 55px;
}
header a{
    margin-right: 30px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-size: 25px;
    transition: all ease 300ms;
}
.login-box{
	background-image:url(../IMG/logogae.png);
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
    </style>
    <form action="validar.php" method="post">
        <h1>INICIO DE SESION</h1>
        <p>USUARIO <input type="text" placeholder="INGRESE SU NOMBRE" name="usuario"></p>
        <p>CONTRASEÑA<input type="password" placeholder="INGRESE SU CONTRASEÑA" name="contraseña"></p>
        <input type="submit" value="Ingresar">
    </form>
    
</body>
</html>