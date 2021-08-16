<?php
/* Smarty version 3.1.33, created on 2021-08-01 01:46:04
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6105e0bcbe83f1_60283685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f32df9a2f1a053d9d836d17678eb0ef4fc871849' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\pelicula.tpl',
      1 => 1627775154,
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
function content_6105e0bcbe83f1_60283685 (Smarty_Internal_Template $_smarty_tpl) {
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
        <section id="sectionComentarios">
            <h3>Comentarios</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'coment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
?>
                <article>
                    <p><?php echo $_smarty_tpl->tpl_vars['coment']->value['usuarioNombre'];?>
:</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['coment']->value['comentario'];?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['coment']->value['usuarioNombre'] == $_smarty_tpl->tpl_vars['nomUsr']->value) {?>   
                        <a id="btn-deletComent" href="eliminarComentario/<?php echo $_smarty_tpl->tpl_vars['coment']->value['id_comentario'];?>
}/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['id_pelicula'];?>
">Eliminar</a>
                    <?php }?>
                </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
