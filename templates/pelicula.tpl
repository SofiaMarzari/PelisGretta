{include file="header.tpl"}
{include file="nav.tpl"}

    <section class="is-sectionPeliculaParticular">
        <img src="{$pelicula[0]['imagen']}" alt="peli">
        <h1>{$pelicula[0]['nombre']}</h1>
        <p>{$pelicula[0]['descripcion']}</p>
        <section id="section-listaComentarios">
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