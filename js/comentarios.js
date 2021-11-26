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
        element += '<button onclick="deleteComment('+comment.id_comentario+','+comment.id_auto+')">Eliminar</button>';
    }
    
    element = '<li>'+element+'</li><br><br>';
    return element;  
}
function deleteComment(idComentario, idAuto) {
    console.log('id comentario:'+idComentario);
    console.log('id auto:'+idAuto);
    id = idComentario;
    console.log('id comentario_2:'+id);
    fetch('api/comentarios/'+id, {
        method: 'DELETE',
        headers: {'Content-Type': 'application/json'},       
     })
     .then(response => {
        getComments(idAuto);
     })
     .catch(error => console.log(error));
}
