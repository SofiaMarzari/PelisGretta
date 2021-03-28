<?php
/* Smarty version 3.1.33, created on 2021-03-26 01:22:33
  from 'C:\xampp\htdocs\proyecto\php\peliculasGretta\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605d29491236e4_61178849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e98a73e1b7625cfd559fd97d956784c415efd34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\peliculasGretta\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605d29491236e4_61178849 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
