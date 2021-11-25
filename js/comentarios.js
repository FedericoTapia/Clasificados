"USE STRICT"

function getComments(idAuto) {
    fetch('api/comentarios/')
    .then(response => response.json())
    .then(comments => {
        let content = document.querySelector(".lista-comentarios");
        let userName = '';
        content.innerHTML = "";
        for(let comment of comments) {
            if(comment.id_auto == idAuto){
                let idusuario = comment.id_usuario;
                userName = getUsuarios(idusuario);
                content.innerHTML += createCommentHTML(comment);
            }
        }
    })
    .catch(error => console.log(error));
}

function getUsuarios(idusuario) {
    fetch('api/usuarios/')
    .then(response => response.json())
    .then(usuarios => {
        console.log(idusuario);
        console.log(usuarios);
        for(let usuario of usuarios) {
            console.log(usuario);
            if(usuario.id == idusuario){
                let username = usuario.userName;
                console.log(String(username));
                return String(username);
            }
        }
    })
    .catch(error => console.log(error));
}

function createCommentHTML(comment) {
    let admin = document.querySelector("input[name=esadmin]").value;
    let element = `<p class="price"> ${comment.comentario}</p> <h3 class="data">puntaje: ${comment.puntaje}</h3>`;   
    
    if(admin == 1){
        element += ' <a href="borrarComentario/'+comment.id_comentario+'">Eliminar</a>';
    }
    
    element = '<li>'+element+'</li><br><br>';
    return element;  
}
