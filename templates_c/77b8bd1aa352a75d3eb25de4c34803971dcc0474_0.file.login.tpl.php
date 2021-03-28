<?php
/* Smarty version 3.1.33, created on 2021-03-28 23:37:23
  from 'C:\xamppNuevo\htdocs\proyecto\php\pelisgretta\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6060f713590609_82549303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b8bd1aa352a75d3eb25de4c34803971dcc0474' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\pelisgretta\\templates\\login.tpl',
      1 => 1616967440,
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
function content_6060f713590609_82549303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="sectionLogin">
        <h1>INICIAR SESION</h1>
        <form method="post" action="ingresar">
            <input type="text" name="nombre" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Clave">
            <input type="submit" id="btn-submit">
            <a type="submit" href="olvidePassword">Olvide mi contraseña</a>
        </form>


        <h1>REGISTRARSE</h1>
        <form method="post" action="registrar">
            <input type="text" name="nombre" placeholder="Usuario">
            <input type="text" name="mail" placeholder="Mail">
            <input type="password" name="clave" placeholder="Clave">
            <input type="password" name="repetirClave" placeholder="Repetir clave">
            <input type="submit" id="btn-submit">
        </form>
    </section>
   
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
