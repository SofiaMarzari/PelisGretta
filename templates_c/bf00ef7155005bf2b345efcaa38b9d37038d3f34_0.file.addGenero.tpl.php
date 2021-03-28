<?php
/* Smarty version 3.1.33, created on 2021-03-28 23:04:15
  from 'C:\xamppNuevo\htdocs\proyecto\php\pelisgretta\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6060ef4f4cf8b5_46707978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf00ef7155005bf2b345efcaa38b9d37038d3f34' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\pelisgretta\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060ef4f4cf8b5_46707978 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
