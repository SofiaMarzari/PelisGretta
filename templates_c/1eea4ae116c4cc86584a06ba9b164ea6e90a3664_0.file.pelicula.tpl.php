<?php
/* Smarty version 3.1.33, created on 2021-03-29 01:50:27
  from 'C:\xamppNuevo\htdocs\proyecto\php\pelisgretta\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60611643a186a6_23569971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eea4ae116c4cc86584a06ba9b164ea6e90a3664' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\pelisgretta\\templates\\pelicula.tpl',
      1 => 1616975233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60611643a186a6_23569971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="is-sectionPeliculaParticular">
        <img class="imgpelicula" src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['imagen'];?>
" alt="peli">
        <h1><?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['nombre'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['descripcion'];?>
</p>
        <section id="section-listaComentarios">
        </section>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
            <section id="is-sectionformcomentario">
                <form method="post" action="comentar/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['id_pelicula'];?>
">
                    <textarea name="comentario"></textarea>
                    <input type="submit">
                </form>
            </section>
        <?php }?>
    </section>
    
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
