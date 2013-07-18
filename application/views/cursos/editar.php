<?=  form_open("/cursos/actualizar/".$id) ?>
<?
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu nombre',
		'value' => $curso->result()[0]->nombreCurso
	);
	$videos = array(
		'name' => 'videos',
		'placeholder' => 'Cantidad vídeos del curso',
		'value' => $curso->result()[0]->videosCurso
	);
?>
<?= form_label('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Número vídeos: ', 'videos') ?>
<?= form_input($videos) ?>
<br>
<?= form_submit('','Actualizar curso') ?>
<?= form_close() ?>
</body>
</html>