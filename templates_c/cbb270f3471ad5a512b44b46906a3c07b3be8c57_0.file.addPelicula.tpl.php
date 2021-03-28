<?php
/* Smarty version 3.1.33, created on 2021-03-28 23:04:15
  from 'C:\xamppNuevo\htdocs\proyecto\php\pelisgretta\templates\addPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6060ef4f5ac873_92415361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb270f3471ad5a512b44b46906a3c07b3be8c57' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\pelisgretta\\templates\\addPelicula.tpl',
      1 => 1616352418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060ef4f5ac873_92415361 (Smarty_Internal_Template $_smarty_tpl) {
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
