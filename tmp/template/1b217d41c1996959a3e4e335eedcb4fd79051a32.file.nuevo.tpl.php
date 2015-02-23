<?php /* Smarty version Smarty-3.1.8, created on 2012-05-11 03:02:06
         compiled from "/var/www/mvc/views/post/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15086962614facb543339931-89953297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b217d41c1996959a3e4e335eedcb4fd79051a32' => 
    array (
      0 => '/var/www/mvc/views/post/nuevo.tpl',
      1 => 1336719720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15086962614facb543339931-89953297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4facb54365f2d7_07053549',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4facb54365f2d7_07053549')) {function content_4facb54365f2d7_07053549($_smarty_tpl) {?><form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo"
      enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></p>
    
    <input type="file" name="imagen" />
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form><?php }} ?>