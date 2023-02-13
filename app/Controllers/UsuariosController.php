<?php

namespace App\Controllers;

use App\Models\ModelUsuarios;

class UsuariosController extends BaseController
{

    public function index()
    {
        $data = [
            'page_title' => 'Usuarios',
            'page_description' => 'Usuarios Registrados',
            'functions_js' => 'functions_usuarios.js'
        ];
        if (session('type') == "empleado") {
            return view('template/header', []) . view('errors/pageError/401') . view('template/footer');
        } else {
            return view('template/header', $data) . view('modals/usuarios/nuevo') .
                view('modals/usuarios/ver') . view('modals/usuarios/actualizar') .
                view('usuarios/usuarios') . view('template/footer');
        }
    }

    public function getAll()
    {
        $usuarios = new ModelUsuarios();
        $arrData = $usuarios->findAll();
        for ($i = 0; $i < count($arrData); $i++) {
            if ($arrData[$i]["status"] == 0) {
                $arrData[$i]["status"] = $usuarios->getStatus('', $arrData[$i]["idUsr"]);
                $arrData[$i]["acciones"] = $usuarios->getBtns($arrData[$i]["idUsr"]);
            } else {
                $arrData[$i]["status"] = $usuarios->getStatus('checked="checked"', $arrData[$i]["idUsr"]);
                $arrData[$i]["acciones"] = $usuarios->getBtns($arrData[$i]["idUsr"]);
            }
        }
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function new()
    {
        $request = "";
        $arrResponse = "";
        $usuarios = new ModelUsuarios();
        $usuario = $this->request->getPost("usuario");
        $nombre = $this->request->getPost("nombre");
        $password = $this->request->getPost("password");
        $telefono = $this->request->getPost("telefono");
        $tipo = $this->request->getPost("tipo");

        $password = password_hash(strval($password), PASSWORD_DEFAULT);

        $request = $usuarios->where("usuario", $usuario)->findAll();
        if (!empty($request)) {
            $arrResponse = array('status' => false, 'msg' => 'Nombre de usuario Registrado.');
        } else {
            $datos = [
                "usuario" => $usuario, "nombre" => $nombre,
                "password" => $password, "telefono" => $telefono, "tipo" => $tipo
            ];

            $usuarios->insert($datos);
            $request = $usuarios->getInsertID();

            if ($request > 0) {
                $arrResponse = array('status' => true, 'msg' => 'Usuario Registrado.');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'No es posible registrar el usuario.');
            }
        }
        return json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function show($idUsr)
    {
        $usuarios = new ModelUsuarios();
        $arrData = $usuarios->find($idUsr);
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function update()
    {
        $usuarios = new ModelUsuarios();
        $idUser = $this->request->getPost("idUser");
        $usuario = $this->request->getPost("usrUpd");
        $nombre = $this->request->getPost("nomUpd");
        $password = $this->request->getPost("passUpd");
        $telefono = $this->request->getPost("telUpd");
        $tipo = $this->request->getPost("tipoUpd");
        $password = password_hash(strval($password), PASSWORD_DEFAULT);
        $datos = [
            "usuario" => $usuario, "nombre" => $nombre,
            "password" => $password, "telefono" => $telefono, "tipo" => $tipo
        ];
        $request = $usuarios->update($idUser, $datos);
        if ($request > 0) {
            $arrResponse = array('status' => true, 'msg' => 'Usuario Actualizado Correctamente.');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'No es posible actualizar el usuario.');
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function actDes()
    {
        $usuarios = new ModelUsuarios();
        $opcion = $this->request->getPost("opcion");
        $idUsr = $this->request->getPost("idUsr");

        $request = $usuarios->where("idUsr", $idUsr)->set('status', $opcion)->update();

        if ($request > 0) {
            if ($opcion == 0) {
                $msg = "Usuario Desactivado.";
                $bandera = true;
            } else {
                $msg = "Usuario Activado.";
                $bandera = true;
            }
        } else {
            if ($opcion == 0) {
                $msg = "No es posible Desactivar el usuario";
                $bandera = false;
            } else {
                $msg = "No es posible Activar el usuario";
                $bandera = false;
            }
        }
        $arrResponse = array('status' => $bandera, 'msg' => $msg);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
}
