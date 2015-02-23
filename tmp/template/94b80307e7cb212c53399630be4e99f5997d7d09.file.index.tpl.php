<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:59:29
         compiled from "C:\xampp\htdocs\mvc_13\views\error\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116054f95b4a17fd0d9-78479280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b80307e7cb212c53399630be4e99f5997d7d09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\error\\index.tpl',
      1 => 1335208340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116054f95b4a17fd0d9-78479280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95b4a1862c61_84510879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95b4a1862c61_84510879')) {function content_4f95b4a1862c61_84510879($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a><?php }} ?>