    {include file="header.tpl"}
    {include file="nav.tpl"}

    <section id="section-galeria">
        <img src="css/img/galeria1.jpg" alt="imgGaleriaIzq" class="is-imgsGaleria" id="imgGaleriaIzq">
        <img src="css/img/galeria2.jpg" alt="imgGaleriaDer" class="is-imgsGaleria" id="imgGaleriaDer">
    </section>
    {if $admin == true}
        <section id="section-agregar">
            <select id="select" name="seleccionAgregar">
                <option>Seleccionar</option>
                <option>Genero</option>
                <option>Pelicula</option>    
            </select>
            <button id="btn-agregar" type="submit">
                <a>Agregar</a>
            </button>
        </section>
    {/if}
 
    <section class="is-sectionAgregarPeliOGen" id="section-agregarGenero">
        {include file="addGenero.tpl"}
    </section>
    <section class="is-sectionAgregarPeliOGen" id="section-agregarPelicula">
        {include file="addPelicula.tpl"}
    </section>

    <section id="section-utlimasAgregadas">
        {foreach from=$listaPeliculas item=peli}
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
    </section>
    <section id="section-top5">
        <h1>TOP 5</h1>
        <section class="pelisDelTop">  

        </section>
        <section class="pelisDelTop"> 

        </section>
    </section>
    <article id="article-redesSocialesInicio">
        <img class="is-redesSociales" src="css/img/instagram.png" alt="instagram">
        <img class="is-redesSociales" src="css/img/youtube.png" alt="youtube">
        <img class="is-redesSociales" src="css/img/face.png" alt="facebook">
    </article>
    {include file="foot.tpl"}