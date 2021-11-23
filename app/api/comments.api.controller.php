<?php
require_once('app/models/comments.model.php');
require_once('app/api/api.view.php');

class ApiCommentsController{

    private $model;
    private $view;
    private $data;


    public function __construct()
    {
        $this->model = new CommentsModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }
    
    public function obtenerComentarios(){
        
        $comentarios = $this->model->getComments();
        $this->view->response($comentarios, 200);
 
    }
    public function obtenerComentario($params){
        $id = $params[':ID'];
        $comentario = $this->model->getComment($id);
        $this->view->response($comentario, 200);
    }
    public function get_data(){
        return json_decode($this->data);
    }
    public function agregarComentario(){
        $comentario = $this->get_data();
        $this->model->insertComment($comentario->comentario, $comentario->puntaje,$comentario->id_auto,$comentario->id_usuario);
        $this->view->response("Se inserto correctamente", 200);
    }
    public function eliminarComentario($params){
        $id = $params[':ID'];
        $this->model->deleteComment($id);
        $this->view->response("Se elimino el comentario correctamente", 200);
    }



}