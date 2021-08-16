{include file="header.tpl"}
{include file="nav.tpl"}

    <section id="is-sectionPeliculaParticular">
        <img class="imgpelicula" src="{$pelicula[0]['imagen']}" alt="peli">
        <h1>{$pelicula[0]['nombre']}</h1>
        <p>{$pelicula[0]['descripcion']}</p>
        <section id="sectionComentarios">
            <h3>Comentarios</h3>
            {foreach from=$comentarios item=coment}
                <article>
                    <p>{$coment['usuarioNombre']}:</p>
                    <p>{$coment['comentario']}</p>
                    {if $coment['usuarioNombre']==$nomUsr}   
                        <a id="btn-deletComent" href="eliminarComentario/{$coment['id_comentario']}}/{$pelicula[0]['id_pelicula']}">Eliminar</a>
                    {/if}
                </article>
            {/foreach}
        </section>
        {if $admin == true}
            <section id="is-sectionformcomentario">
                <form method="post" action="comentar/{$pelicula[0]['id_pelicula']}">
                    <textarea name="comentario"></textarea>
                    <input type="submit">
                </form>
            </section>
        {/if}
    </section>
    
{include file="foot.tpl"}