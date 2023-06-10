function enviarMensaje() {
    // Se referencia al input text "nombre".
    var nombre = document.getElementById("nombre");
    // Se referencia al textarea "mensaje".
    var mensaje = document.getElementById("mensaje");
    // Se referencia al div "chat"
    var chat = document.getElementById("chat");
    // Se obtiene la fecha y hora en que se envía el mensaje.
    var date = new Date();
    var fechaHora = 
        date.getDate()+"/"+
        (date.getMonth()+1)+"/"+
        date.getFullYear()+" "+
        date.getHours()+":"+
        date.getMinutes()+":"+
        date.getSeconds();
    // Se agrega la descripción con fecha, hora y "nombre" de quien agrego el mensaje al "chat".
    chat.innerHTML += fechaHora+" por "+nombre.value+"<br>";
    // Se agrega el "mensaje" al contenido del div "chat".
    chat.innerHTML += mensaje.value+"<br>";
    // Se elimina el contenido del input text
    nombre.value = "";
    // Se elimina el contenido del textarea "mensaje".
    mensaje.value = "";
    // Se posiciona el cursor sobre el textarea "mensaje".
    mensaje.focus();


}