    {include file="header.tpl"}
    {include file="nav.tpl"}

    <div id="is-contenedorPeliculasGenero">
        {foreach from=$listaPelis item=peli}
            <section class="is-sectionPeliculaGenero">
                <img class="imgpelicula" src="{$peli['imagen']}" alt="peli">
                <p>{$peli['nombre']}</p>
                <p>{$peli['anio']}</p>
                <button>
                    <a href="pelicula/{$peli['id_pelicula']}">Ver</a>
                </button>
                {if $admin == true}
                    <button>
                        <a href="delete/{$peli['id_pelicula']}">Eliminar</a>
                    </button>
                {/if}
            </section>
        {/foreach}
    </div>
    {include file="foot.tpl"}