{include file="header.tpl"}

   

<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">

<h2 class="style ">Usuarios</h2>
<div class="table-responsive">
  
  <div class="table-responsive">
  <table class=" table table-condensed" data-toggle="table" style="text-align:center">
<tbody >
<TR ALIGN=center>
    <TH scope="col"><h3>Usuario</h3></TH>
    <TH scope="col"><h3>Nombre</h3></TH>
    <TH scope="col"><h3>Apellido</h3></TH>
    <TH scope="col"><h3>Es Administrador</h3></TH>
    <TH scope="col"><h3>Promover</h3></TH>
    <TH scope="col"><h3>Eliminar</h3></TH>
</TR>
{foreach key=idUsuario item=user from=$Users}
  <tr>
    <td class="success">{$user['Usuario']}</td>
    <td class="active">{$user['nombre']}</td>
    <td class="success">{$user['apellido']}</td>
    <td class="active">{$user['esAdmin']}</td>
    <td class="success">
        <form name = "modificar" action="index.php?action=modificarUsuario" method="POST">
            <input name = "idUsuario" type = "hidden" value = "{$user['idUsuario']}">
            <button class = "glyphicon glyphicon-edit btn btn-default" type = "submit"></button>
        </form></td> 
    <td class="active">
        <form name = "eliminar" action="index.php?action=eliminarUsuario" method="POST">
            <input name = "idUsuario" type = "hidden" value = "{$user['idUsuario']}">
            <button class="glyphicon glyphicon-remove btn btn-default" type = "submit"></button>
        </form></td>
  </tr>
{/foreach}

</tbody>
</table>
<br>
</div>
</div>
</div>
</div>
</div>
</div>

{include file="footer.tpl"}