<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:19:49
  from 'C:\xampp\htdocs\TPEweb2\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ec895a39438_46081214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fcc6fc70d47f0851635e3261e7f34e227ca6fb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\filtro.tpl',
      1 => 1637791655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_619ec895a39438_46081214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcaFiltro']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
        <a href="botin/<?php echo $_smarty_tpl->tpl_vars['m']->value->id_botin;?>
" class="hrefBotines">
            <div class="col-md-8 contenedorDetalles">
                <div class="marca">
                    <?php echo $_smarty_tpl->tpl_vars['m']->value->nombre;?>

                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['m']->value->imagen == NULL) {?>
                        <img class="errorBotines" src="img/botines/botinSinFoto.png" />
                    <?php } else { ?>
                        <img class="tamañoImagenBootList" src="<?php echo $_smarty_tpl->tpl_vars['m']->value->imagen;?>
" />
                    <?php }?>
                </div>
                <div class="modelo">
                    <?php echo $_smarty_tpl->tpl_vars['m']->value->modelo;?>

                </div>
                <div class="talle">
                    <p>Talle: <?php echo $_smarty_tpl->tpl_vars['m']->value->talle;?>
 </p>
                </div>
                <div class="precio">
                    <p class="fas fa-dollar-sign"></p> <?php echo $_smarty_tpl->tpl_vars['m']->value->precio;?>

                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['admin']->value)) {?>
                    <div class="botonesByE">
                        <a class="btn btn-primary btn-sm borrar" href="deleteBoot/<?php echo $_smarty_tpl->tpl_vars['m']->value->id_botin;?>
">Borrar</a>
                        <a class="btn btn-secondary btn-sm editar" href="showForm/<?php echo $_smarty_tpl->tpl_vars['m']->value->id_botin;?>
">Editar</a>
                    </div>
                <?php }?>
            </div>
        </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<a class="vovler" href="botines/page/1"> Volver </a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
