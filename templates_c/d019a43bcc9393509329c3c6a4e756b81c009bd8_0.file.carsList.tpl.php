<?php
/* Smarty version 3.1.39, created on 2021-10-15 07:54:00
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\carsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6169177897e7c6_81323829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd019a43bcc9393509329c3c6a4e756b81c009bd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\carsList.tpl',
      1 => 1634277182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6169177897e7c6_81323829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <div class="row">
    
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autos']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>


    <div class="col-sm-4 text-center" >
    
        <div class="test">
        <img src="./libs/images/index/370z.jpg" class="product">
        <h1><?php echo $_smarty_tpl->tpl_vars['auto']->value->modelo;?>
</h1>
        <p class="price">Precio: <?php echo $_smarty_tpl->tpl_vars['auto']->value->precio;?>
</p>
        <h3 class="data">Fabricante: <?php echo $_smarty_tpl->tpl_vars['auto']->value->fabricante;?>
</h3>
        <h3 class="data">Modelo: <?php echo $_smarty_tpl->tpl_vars['auto']->value->anio;?>
</h3>
        <h3 class="data">Tipo de carroseria: 
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carroceria']->value, 'chasis');
$_smarty_tpl->tpl_vars['chasis']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chasis']->value) {
$_smarty_tpl->tpl_vars['chasis']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['auto']->value->id_carroceria_fk == $_smarty_tpl->tpl_vars['chasis']->value->id_carroceria) {?>
                <?php echo $_smarty_tpl->tpl_vars['chasis']->value->Carroceria;?>
</h3>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        
         
        <button class="btn btn-success btn-lg">Comprar</button>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



</div>




<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
