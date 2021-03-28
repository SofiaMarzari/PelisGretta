{include file="header.tpl"}
{include file="nav.tpl"}

    <section>
        <form method="post" action="nuevaPassword">
            <input type="password" name="claveNueva" placeholder="Clave nueva">
            <input type="password" name="repetirClaveNueva" placeholder="Repetir clave nueva">
            <input type="submit" name="enviar">
        </form>
    </section>

{include file="foot.tpl"}