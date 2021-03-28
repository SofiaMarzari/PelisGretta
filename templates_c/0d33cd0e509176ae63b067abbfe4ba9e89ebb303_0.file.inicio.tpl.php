<?php
/* Smarty version 3.1.33, created on 2021-03-26 00:23:32
  from 'C:\xampp\htdocs\proyecto\php\pelisgreta\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605d1b746a4a40_78805389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d33cd0e509176ae63b067abbfe4ba9e89ebb303' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgreta\\templates\\inicio.tpl',
      1 => 1616714357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:addGenero.tpl' => 1,
    'file:addPelicula.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_605d1b746a4a40_78805389 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="section-galeria">
        <img src="css/img/galeria1.jpg" alt="imgGaleriaIzq" class="is-imgsGaleria" id="imgGaleriaIzq">
        <img src="css/img/galeria2.jpg" alt="imgGaleriaDer" class="is-imgsGaleria" id="imgGaleriaDer">
    </section>
    <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
        <section id="section-agregar">
            <select id="select" name="seleccionAgregar">
                <option>Seleccionar</option>
                <option>Genero</option>
                <option>Pelicula</option>    
            </select>
            <button id="btn-agregar" type="submit">
                <a>Agregar</a>
            </button>
        </section>
    <?php }?>
 
    <section class="is-sectionAgregarPeliOGen" id="section-agregarGenero">
        <?php $_smarty_tpl->_subTemplateRender("file:addGenero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
    <section class="is-sectionAgregarPeliOGen" id="section-agregarPelicula">
        <?php $_smarty_tpl->_subTemplateRender("file:addPelicula.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>

    <section id="section-utlimasAgregadas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaPeliculas']->value, 'peli');
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
    </section>
    <section id="section-top5">
        <h1>TOP 5</h1>
        <section class="pelisDelTop">  

        </section>
        <section class="pelisDelTop"> 

        </section>
    </section>
    <article id="article-redesSocialesInicio">
        <img class="is-redesSociales" src="css/img/instagram.png" alt="instagram">
        <img class="is-redesSociales" src="css/img/youtube.png" alt="youtube">
        <img class="is-redesSociales" src="css/img/face.png" alt="facebook">
    </article>
    <?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
