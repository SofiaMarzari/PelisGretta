<?php
/* Smarty version 3.1.33, created on 2021-03-28 00:51:18
  from 'C:\xamppNuevo\htdocs\proyecto\php\peliculasGretta\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605fc4f6780827_52821150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c038ff5792096469c74ca1b644f737139481949d' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\peliculasGretta\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605fc4f6780827_52821150 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
