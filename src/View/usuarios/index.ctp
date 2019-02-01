<h1>usuarios</h1>
<? php if(empty($usuarios)):?>
No hay usuarios
<?php else:?>
<table>
<tr>
<th>Nombre</th>
<th>Apellido</th>
</tr>
<?php foreach ($usuarios as $usuario):?>
<tr>
<td>
<?php echo $usuario['Usuario']['usu_nombre']>

</td>
</tr>
<?php endforeach>
</table>
