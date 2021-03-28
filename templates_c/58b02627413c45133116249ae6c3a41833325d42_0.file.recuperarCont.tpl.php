<?php
/* Smarty version 3.1.33, created on 2021-03-28 23:37:27
  from 'C:\xamppNuevo\htdocs\proyecto\php\pelisgretta\templates\recuperarCont.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6060f717471566_27117403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b02627413c45133116249ae6c3a41833325d42' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\pelisgretta\\templates\\recuperarCont.tpl',
      1 => 1616967416,
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
function content_6060f717471566_27117403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <form method="post" action="recuperarContraseña">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="submit" name="Mandar codigo">
        </form>

        <form method="post" action="validarCodigo">
            <input type="text" name="codRecuperacionIngr" placeholder="Ingresar codigo">
            <input type="submit" name="validar">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
