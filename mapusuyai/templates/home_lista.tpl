{include file="header.tpl" index=1}

<ul>
{foreach from=$cars key=car item=propiedad}
<li>{$car}</li>
<ul>
  {foreach from=$propiedad key=clave item=valor}
    <li>{$clave}: {$valor}</li>
  {/foreach}
</ul>
{/foreach}

</ul>

{include file="footer.tpl"}
