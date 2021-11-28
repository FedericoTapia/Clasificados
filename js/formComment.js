document.getElementById("form-comment").addEventListener('submit', addComment);

function addComment(e) {
    e.preventDefault();

    let data = {
        comentario:  document.querySelector("input[name=comentario]").value,
        puntaje:  document.querySelector("input[name=puntaje]").value,
        id_auto: document.querySelector("input[name=idAuto]").value,
        id_usuario: document.getElementById("usuario").value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
        getComments(document.querySelector("input[name=idAuto]").value);
     })
     .catch(error => console.log(error));
}