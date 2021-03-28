<?php
/* Smarty version 3.1.33, created on 2021-03-28 00:53:12
  from 'C:\xamppNuevo\htdocs\proyecto\php\peliculasGretta-\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605fc5688dadc6_78502464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3b4913fe93cce1a92f8e68c02fb4ead54a4245' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\peliculasGretta-\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605fc5688dadc6_78502464 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
