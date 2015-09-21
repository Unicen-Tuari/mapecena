{include file="header.tpl" index=2}

<table class="table" style="width: 100%">
  <tr>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Puertas</th>
    <th>Airbags</th>
  </tr>
{foreach from=$cars key=car item=propiedad}
<tr>
  <td>{$car}</td>
  {foreach from=$propiedad key=clave item=valor}
    <td>
    {if $clave == "Airbags"}
      {if $valor === true}
          <input type="checkbox" disabled="true" checked />
      {else}
          <input type="checkbox" disabled="true" />
      {/if}
    {else}
      {$valor}
    {/if}
    </td>
  {/foreach}
</tr>
{/foreach}

</table>

{include file="footer.tpl"}
