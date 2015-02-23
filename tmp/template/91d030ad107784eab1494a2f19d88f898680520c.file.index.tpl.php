<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:57:23
         compiled from "C:\xampp\htdocs\mvc_13\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41084f95b42375baa8-56488218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91d030ad107784eab1494a2f19d88f898680520c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\registro\\index.tpl',
      1 => 1335211032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41084f95b42375baa8-56488218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95b4237ce2a4_28597807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95b4237ce2a4_28597807')) {function content_4f95b4237ce2a4_28597807($_smarty_tpl) {?><h2>Registro</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Email: </label>
        <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </label>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <label>Confirmar: </label>
        <input type="password" name="confirmar" />
    </p>    
        
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>