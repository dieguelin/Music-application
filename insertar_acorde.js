function addItem(){
    var ul = document.getElementById("dynamic-list");
    var candidate = document.getElementById("candidate");
    //candidate.value es lo que esta en el tag que tiene id = candidate
    var bt = document.createElement("button");
    bt.setAttribute('id',candidate.value);
    // <li> id = "candidate.value" </li> (lo que hace linea 6) le asigna el id al boton bt
    console.log(ul);
    bt.appendChild(document.createTextNode(candidate.value));
    ul.appendChild(bt);
}

function removeItem(){
    var ul = document.getElementById("dynamic-list");
    var candidate = document.getElementById("candidate");
    var item = document.getElementById(candidate.value);
    ul.removeChild(item);
}
