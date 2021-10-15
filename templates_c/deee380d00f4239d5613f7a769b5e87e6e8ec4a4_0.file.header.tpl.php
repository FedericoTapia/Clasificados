<?php
/* Smarty version 3.1.39, created on 2021-10-15 08:00:09
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616918e9617c18_67283378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deee380d00f4239d5613f7a769b5e87e6e8ec4a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\header.tpl',
      1 => 1634277414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/delete.tpl' => 1,
  ),
),false)) {
function content_616918e9617c18_67283378 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/cars.style.css">

</head>
    <header>
        <div id="logoDiv">
            <img src="libs/images/Logo.png" alt="logo" id="logoBajitos">
        </div>
        <div class="navegacion">
        
            <li><a href="home"><button class="btn btn-warning btn-lg">Index</button></a></li>

        </div>
        <div class="col-sm-4 text-center" style="padding-top:55px" >
            <a href="showAgregarAuto"><button class="btn btn-success btn-lg"> Agregar Auto</button></a>
            
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </header>
<body>
    <div class="container-fluid">
    <?php if ($_smarty_tpl->tpl_vars['email']->value != '') {?>
            <p>Logeado como <b><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</b></p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
logout">SALIR</a>
        <?php }
}
}
