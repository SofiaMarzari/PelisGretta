<?php
/* Smarty version 3.1.33, created on 2021-03-26 01:22:33
  from 'C:\xampp\htdocs\proyecto\php\peliculasGretta\templates\addPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605d294926c508_95059158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e9b02e0b0a3c651f04f206f1a2cf66b73abb70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\peliculasGretta\\templates\\addPelicula.tpl',
      1 => 1616352418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605d294926c508_95059158 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Pelicula</h1>
        <form action="addPelicula" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="text" name="genero" placeholder="Genero">
            <input type="number" name="duracion" placeholder="Duracion">
            <input type="number" name="anio" placeholder="Año">
            <input type="file" name="img_input">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
