<?php
require_once('app/models/comments.model.php');
require_once('app/models/user.model.php');
require_once('app/api/api.view.php');

class ApiCommentsController
{

    private $model;
    private $view;
    private $data;
    private $usermodel;

    public function __construct(){
        $this->model = new CommentsModel();
        $this->usermodel = new UserModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    public function obtenerComentarios(){
        $sort = '';
        if (key_exists('sort', $_GET)) {
            $sort = $_GET['sort'];
            if (key_exists('order', $_GET)) {
                $sort = $sort . ' ' . $_GET['order'];
            }
            $sort = 'ORDER BY ' . $sort;
        } 
        else{
            $sort = 'ORDER BY id_comentario';
        }
        $comentarios = $this->model->getComments($sort);
        $this->view->response($comentarios, 200);
    }

    public function obtenerUsuarios(){
        $usuarios = $this->usermodel->getAllUsuarios();
        $this->view->response($usuarios, 200);
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
        $todoOk = $this->model->insertComment($comentario->comentario, $comentario->puntaje, $comentario->id_auto, $comentario->id_usuario);
        if ($todoOk) {
            $this->view->response("Se insertó correctamente", 200);
        } else {
            $this->view->response("Hubo un error", 500);
        }
    }

    public function eliminarComentario($params){
        $id_comentario = $params[':ID'];
        $this->model->deleteComment($id_comentario);
        $this->view->response("Se elimino el comentario correctamente", 200);
    }
}
