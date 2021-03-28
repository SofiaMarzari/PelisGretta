<?php
/* Smarty version 3.1.33, created on 2021-03-26 00:10:26
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605d1861edc5d2_13350263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6c5ae53549a70e51c9a402a38a70dd19e37e05a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\pelicula.tpl',
      1 => 1616696212,
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
function content_605d1861edc5d2_13350263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section class="is-sectionPeliculaParticular">
        <img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['imagen'];?>
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
