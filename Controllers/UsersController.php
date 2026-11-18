<?php

class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // listar usuarios
    public function index()
    {
        $data["users"] = $this->model->all();

        // query builder (paso 12)
        // $data["users"] = $this->model->select("id, usuario, email, estado")->where(["estado = 1"])->orderBy("id", "DESC")->limit(5)->get();

        $this->views->render($this, "index", $data);
    }

    // ver un usuario
    public function ver($id)
    {
        $data["user"] = $this->model->find($id);
        $this->views->render($this, "ver", $data);
    }

    public function crear()
    {
        $this->views->render($this, "crear");
    }

    public function guardar()
    {
        $data = [
            "usuario" => $_POST["usuario"],
            "email" => $_POST["email"],
            "clave" => md5($_POST["clave"]),
            "estado" => 1
        ];

        $this->model->insert($data);
        header("Location: " . BASE_URL . "users");
    }

    public function editar($id)
    {
        $data["user"] = $this->model->find($id);
        $this->views->render($this, "editar", $data);
    }

    public function actualizar($id)
    {
        $data = [
            "usuario" => $_POST["usuario"],
            "email" => $_POST["email"],
            "estado" => $_POST["estado"]
        ];

        $this->model->update($id, $data);
        header("Location: " . BASE_URL . "users");
    }

    // eliminar fisico
    public function eliminar($id)
    {
        $this->model->delete($id);
        header("Location: " . BASE_URL . "users");
    }
}
