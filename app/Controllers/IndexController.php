<?php

namespace App\Controllers;

use App\Models\ModelUsuarios;

class IndexController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function signin()
    {
        $usuarios = new ModelUsuarios();
        $usr = $this->request->getPost("usuario");
        $pass = $this->request->getPost("password");

        $request = $usuarios->where('usuario', $usr)->find();

        if (!empty($request)) {
            if ($request[0]['status'] == 1) {
                if (password_verify(strval($pass), $request[0]['password'])) {

                    $data = [
                        'idUsr' => $request[0]['idUsr'],
                        'nombre' => $request[0]['nombre'],
                        'session' => 'si',
                        'type' => $request[0]['tipo']
                    ];

                    $session = session();
                    $session->set($data);

                    $arrResponse = array('status' => true, 'msg' => $request[0]['idUsr']);
                } else {
                    $arrResponse = array('status' => false, 'msg' => 'Usuario y/o contraseña incorrectos.');
                }
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Usuario Dado de Baja.');
            }
        } else {
            $arrResponse = array('status' => false, 'msg' => 'Usuario y/o contraseña incorrectos.');
        }
        return json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to("/");
    }
}
