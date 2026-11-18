<?php

class UsuariosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // si entran a /usuarios los mando al listado
    public function index()
    {
        $this->listar();
    }

    // listar usuarios
    public function listar()
    {
        $data["usuarios"] = $this->model->all();

        // query builder (paso 12)
        // $data["usuarios"] = $this->model->select("id, usuario, email, estado")->where(["estado = 1"])->orderBy("id", "DESC")->limit(5)->get();

        $this->views->render($this, "listar", $data);
    }

    // ver un usuario
    public function ver($id)
    {
        $data["usuario"] = $this->model->find($id);
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
        header("Location: " . BASE_URL . "usuarios");
    }

    public function editar($id)
    {
        $data["usuario"] = $this->model->find($id);
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
        header("Location: " . BASE_URL . "usuarios");
    }

    // eliminar fisico
    public function eliminar($id)
    {
        $this->model->delete($id);
        header("Location: " . BASE_URL . "usuarios");
    }
}
