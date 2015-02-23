<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:28:57
         compiled from "C:\xampp\htdocs\mvc_13\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215464f95ad79f33bc4-56898232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7de6664bb4ecf7694a85b3d296ab31645587fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\login\\index.tpl',
      1 => 1335208392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215464f95ad79f33bc4-56898232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95ad7a04ceb4_07751414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95ad7a04ceb4_07751414')) {function content_4f95ad7a04ceb4_07751414($_smarty_tpl) {?><h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Usuario: </labe>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </labe>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>