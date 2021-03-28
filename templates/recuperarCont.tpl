{include file="header.tpl"}
{include file="nav.tpl"}

    <section>
        <form method="post" action="recuperarContraseña">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="submit" name="Mandar codigo">
        </form>

        <form method="post" action="validarCodigo">
            <input type="text" name="codRecuperacionIngr" placeholder="Ingresar codigo">
            <input type="submit" name="validar">
        </form>
    </section>

{include file="foot.tpl"}