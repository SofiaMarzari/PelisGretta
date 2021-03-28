<?php
/* Smarty version 3.1.33, created on 2021-03-28 01:14:34
  from 'C:\xamppNuevo\htdocs\proyecto\php\peliculasGretta-\templates\itemgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605fca6a430793_42599344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b25496e8b26300e68d5cf96fac0f9abe7f2f5f1' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\peliculasGretta-\\templates\\itemgenero.tpl',
      1 => 1616513229,
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
function content_605fca6a430793_42599344 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="is-contenedorPeliculasGenero">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaPelis']->value, 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
            <section class="is-sectionPeliculaGenero">
                <img src="<?php echo $_smarty_tpl->tpl_vars['peli']->value['imagen'];?>
" alt="peli">
                <p><?php echo $_smarty_tpl->tpl_vars['peli']->value['nombre'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['peli']->value['anio'];?>
</p>
                <button>
                    <a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_pelicula'];?>
">Ver</a>
                </button>
                <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                    <button>
                        <a href="delete/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_pelicula'];?>
">Eliminar</a>
                    </button>
                <?php }?>
            </section>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
