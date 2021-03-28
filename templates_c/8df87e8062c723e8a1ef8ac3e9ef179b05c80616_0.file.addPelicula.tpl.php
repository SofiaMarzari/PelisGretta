<?php
/* Smarty version 3.1.33, created on 2021-03-28 00:51:18
  from 'C:\xamppNuevo\htdocs\proyecto\php\peliculasGretta\templates\addPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605fc4f684af40_08045899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df87e8062c723e8a1ef8ac3e9ef179b05c80616' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\peliculasGretta\\templates\\addPelicula.tpl',
      1 => 1616352418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605fc4f684af40_08045899 (Smarty_Internal_Template $_smarty_tpl) {
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
