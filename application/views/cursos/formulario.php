<? 
	echo validation_errors();
?>
<?=  form_open("/cursos/recibirDatos") ?>

<?
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu nombre'
	);
	$videos = array(
		'name' => 'videos',
		'placeholder' => 'Cantidad vídeos del curso'
	);
?>
<?= form_label('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Número vídeos: ', 'videos') ?>
<?= form_input($videos) ?>
<br>
<?= form_submit('','Subir curso') ?>
<?= form_close() ?>
</body>
</html>