function dom(objeto) {
    var nodosHijos = objeto.childNodes;
    var i;
    // Dependiendo del tipo de nodo muestra diferentes propiedades
    switch (objeto.nodeType) {
        case 1: // Tipo de nodo "Element"
            // Se cambia el estilo del objeto para que se visualice de color "silver"
            objeto.style.backgroundColor = "#C0C0C0";
            // Se muestra un alert con el contenido del nodo
            alert("Tipo Nodo Elemento: "+objeto.nodeType+"\nNombre del Tag: "+objeto.tagName+"\n"+objeto.innerHTML);
            // Se cambia el estilo del objeto al color por default
            objeto.style.backgroundColor = "";
            // Para cada uno de los nodos hijos se ejecuta nuevamente la función dom()
            for (i in nodosHijos) {
                dom(nodosHijos[i]);
            }
            break;
        case 2: // Tipo de nodo "Text"
            // Se muestra un alert con el contenido del nodo
            alert("Tipo Nodo Texto: "+objeto.nodeType+"\nValor del Nodo: "+objeto.nodeValue);
            break;
    }
}