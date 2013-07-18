<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Validar formularios</title>
	<meta charset='utf-8'>
	<style type="text/css">
		body{
			font-family: Arial;
			
		}
		form{
			background-color: #E8E8E8;
			width: 60%;
			
			padding: 10px;

		}
		.input{
			box-sizing:border-box;
			margin: 5px;			
		}
		.input label{
			text-align: left;
			display: inline-block;
			width: 15%;
		}
		.input input{
			width: 30%;
		}
		input[type='submit']{
			border: none;
			padding: 10px 20px;
			background-color: #6A4B8E;
			color: #FFF;
			font-weight: bolder;

		}
		input[type='submit']:hover{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<form action="<?= base_url() ?>login/loguearse">
		<div class="input">
			<label>Nombre: </label>
			<input type='text' name='nombre'>*
		</div>
		<div class="input">
			<label>Contraseña: </label>
			<input type='password' name='password'>*
		</div>
		<input type='submit'>
	</form>
	<p>* Campos son obligatorios</p>
</body>
</html>