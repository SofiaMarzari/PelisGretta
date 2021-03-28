<?php
/* Smarty version 3.1.33, created on 2021-03-15 17:42:21
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\addAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604f8e6d67cca7_39031633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345500c9697c214efb3ab1d6505ca73744991e3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\addAdmin.tpl',
      1 => 1615826537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:navAdmin.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_604f8e6d67cca7_39031633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="section-formAgregar">
        <h1>Agregar peliculas o generos!</h1>
        <form method="post" action="add">
            <select>
                <option>Seleccionar</option>
                <option>Genero</option>
                <option>Pelicula</option>
            </select>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="submit" id="btn-submit">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
