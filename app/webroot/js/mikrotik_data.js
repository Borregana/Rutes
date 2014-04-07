function show_data(){
    //httpGet("www.ivanvdc.com");
    document.write("Hola Mundo");
}


function httpGet(theUrl){
    var xmlHttp = null;

    xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
    return xmlHttp.responseText;
}