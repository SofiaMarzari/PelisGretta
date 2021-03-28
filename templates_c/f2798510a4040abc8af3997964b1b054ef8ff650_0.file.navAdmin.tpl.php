<?php
/* Smarty version 3.1.33, created on 2021-03-15 19:47:03
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604faba7978484_28145239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2798510a4040abc8af3997964b1b054ef8ff650' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\navAdmin.tpl',
      1 => 1615833704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604faba7978484_28145239 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
        <ul id="navUlPrincipal">
            <li><a href="admin"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
              </svg></a>
            </li>
            <li id="liGeneros">Generos
                <ul id="is-ulGeneros">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaGeneros']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                        <li><a href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
            <li>Noticias</li>
            <li>Contacto</li>
        </ul>
    </nav>
    <div id="contenedorPrincipal"><?php }
}
