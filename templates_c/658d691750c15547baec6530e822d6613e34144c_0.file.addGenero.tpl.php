<?php
/* Smarty version 3.1.33, created on 2021-03-15 20:39:45
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604fb801518990_38802921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658d691750c15547baec6530e822d6613e34144c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fb801518990_38802921 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
