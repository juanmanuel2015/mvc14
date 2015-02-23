<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:43:06
         compiled from "C:\xampp\htdocs\mvc_13\views\error\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325754f95b0c9f35f05-10495691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de555ab444899e0f8b4f22074df778873be4b225' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\error\\access.tpl',
      1 => 1335208335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325754f95b0c9f35f05-10495691',
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
  'unifunc' => 'content_4f95b0ca080438_01380572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95b0ca080438_01380572')) {function content_4f95b0ca080438_01380572($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>