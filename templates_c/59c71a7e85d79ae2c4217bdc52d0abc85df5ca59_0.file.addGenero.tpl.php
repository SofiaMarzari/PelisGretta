<?php
/* Smarty version 3.1.33, created on 2021-06-19 20:41:11
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ce3a476a9245_72874780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c71a7e85d79ae2c4217bdc52d0abc85df5ca59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ce3a476a9245_72874780 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
