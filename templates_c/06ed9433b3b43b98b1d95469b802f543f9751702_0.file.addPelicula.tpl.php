<?php
/* Smarty version 3.1.33, created on 2021-03-21 21:00:54
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\addPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6057a5f6b39049_46636490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06ed9433b3b43b98b1d95469b802f543f9751702' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\addPelicula.tpl',
      1 => 1616352418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6057a5f6b39049_46636490 (Smarty_Internal_Template $_smarty_tpl) {
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
