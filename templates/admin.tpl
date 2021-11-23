{include file="templates/header.tpl"}
{if $admin == 1}
    <div class="row">
    
    {foreach from=$usuarios item=$usuario}


    <div class="col-sm-4 text-center" >
        <div>
            <h1>{$usuario->userName}</h1>
        <ul>
            <li>Email: {$usuario->email}</li>
            <li>id: {$usuario->id}</li>
            <li>Es admin: {if $usuario->admin == 1}
                Si
                {else}
                No
            {/if}</li>
        </ul>
        </div>
    </div>

{/foreach}
{include file="templates/deleteUser.tpl"}
{include file="templates/addAdmin.tpl"}
{else}
<h2>No puedes ingresar a este sitio porque no eres administrador.</h2>
{/if}
    
        


</div>




{include file="templates/footer.tpl"}