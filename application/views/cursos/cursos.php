<? if($cursos): ?>
	<? foreach($cursos->result() as $curso): ?>
		<ul>
			<li><a href="<?= $curso->idCurso; ?>"><?= $curso->nombreCurso; ?></a></li>
		</ul>
	<?endforeach;?>
<?else:?>
	<p>Error en la aplicación</p>
<? endif; ?>


</body>
</html>