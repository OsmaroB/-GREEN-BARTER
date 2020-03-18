/**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['../web/img/index/agriculture-bottles-close-up-2505705.jpg',''],
        ['../web/img/index/bottles-container-daylight-802221.jpg',''],
        ['../web/img/index/bottles-dirty-disposal-2547565.jpg',''],
        ['../web/img/index/bottles-many-net-2602537.jpg','']
    );
    var contador=0;
 
    /**
     * Funcion para cambiar la imagen y link
     */
    function rotarImagenes()
    {
        // cambiamos la imagen y la url
        contador++
        document.getElementById("imagen").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link").href=imagenes[contador%imagenes.length][1];
    }
 
    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }