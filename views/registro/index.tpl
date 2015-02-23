<h2>Registro</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="{$datos.nombre|default:""}" />
    </p>
    
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="{$datos.usuario|default:""}" />
    </p>
    
    <p>
        <label>Email: </label>
        <input type="text" name="email" value="{$datos.email|default:""}" />
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
</form>