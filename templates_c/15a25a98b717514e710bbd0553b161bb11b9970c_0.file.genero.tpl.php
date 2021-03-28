<?php
/* Smarty version 3.1.33, created on 2021-02-21 20:51:18
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6032b9b6234bd6_05463774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15a25a98b717514e710bbd0553b161bb11b9970c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\genero.tpl',
      1 => 1613937069,
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
function content_6032b9b6234bd6_05463774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <!--- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaPelis']->value, 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
        <section>
            <img src="" alt="">
            <p><?php echo $_smarty_tpl->tpl_vars['peli']->value['nombre'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['peli']->value['anio'];?>
</p>
            <button><a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_pelicula'];?>
">Ver</a></button>
        </section>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>--->
    <p>Holaaaa</p>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
