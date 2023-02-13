<?php

namespace App\Controllers;

use App\Models\ModelServicios;

class ServiciosController extends BaseController
{

    public function index()
    {
        $data = [
            'page_title' => 'Servicios',
            'page_description' => 'Servicios Registrados',
            'functions_js' => 'functions_servicios.js'
        ];
        if (session('type') == "empleado") {
            return view('template/header', []) . view('errors/pageError/401') . view('template/footer');
        } else {
            return view('template/header', $data) .  view('modals/servicios/nuevo') . view('modals/servicios/ver') .
                view('modals/servicios/actualizar') . view('servicios/servicios') . view('template/footer');
        }
    }

    public function getAll()
    {
        $servicios = new ModelServicios();
        $arrData = $servicios->findAll();
        for ($i = 0; $i < count($arrData); $i++) {
            if ($arrData[$i]["status"] == 0) {
                $arrData[$i]["status"] = $servicios->getStatus('', $arrData[$i]["idServicio"]);
                $arrData[$i]["acciones"] = $servicios->getBtns($arrData[$i]["idServicio"]);
            } else {
                $arrData[$i]["status"] = $servicios->getStatus('checked="checked"', $arrData[$i]["idServicio"]);
                $arrData[$i]["acciones"] = $servicios->getBtns($arrData[$i]["idServicio"]);
            }
        }
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getSell()
    {
        $servicios = new ModelServicios();
        $arrData = $servicios->where("status", 1)->findAll();
        for ($i = 0; $i < count($arrData); $i++) {
            $arrData[$i]["acciones"] = $servicios->getBtnSell($arrData[$i]["idServicio"]);
        }
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function new()
    {
        $servicios = new ModelServicios();
        $nombre = $this->request->getPost("nombre");
        $descripcion = $this->request->getPost("descripcion");
        $precio = $this->request->getPost("precio");
        $precio = doubleval($precio);

        $datos = ["nombre" => $nombre, "descripcion" => $descripcion, "precio" => $precio];

        $servicios->insert($datos);
        $request = $servicios->getInsertID();

        if ($request > 0) {
            $arrResponse = array('status' => true, 'msg' => 'Servicio Registrado.');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'No es posible registrar el servicio.');
        }

        return json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function show($idServicio)
    {
        $servicios = new ModelServicios();
        $arrData = $servicios->find($idServicio);
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function update()
    {
        $servicios = new ModelServicios();
        $idServicio = $this->request->getPost("hddUp");
        $nombre = $this->request->getPost("nomUpd");

        $descripcion = $this->request->getPost("desUpd");
        $precio = $this->request->getPost("precioUpd");
        $precio = doubleval($precio);

        $datos = ["idServicio" => $idServicio, "nombre" => $nombre, "descripcion" => $descripcion, "precio" => $precio];

        $request = $servicios->update($idServicio, $datos);
        if ($request > 0) {
            $arrResponse = array('status' => true, 'msg' => 'Servicio Actualizado Correctamente.');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'No es posible actualizar el servicio.');
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function actDes()
    {
        $servicios = new ModelServicios();
        $opcion = $this->request->getPost("opcion");
        $idServicio = $this->request->getPost("idServicio");

        $request = $servicios->where("idServicio", $idServicio)->set('status', $opcion)->update();

        if ($request > 0) {
            if ($opcion == 0) {
                $msg = "Servicio Desactivado.";
                $bandera = true;
            } else {
                $msg = "Servicio Activado.";
                $bandera = true;
            }
        } else {
            if ($opcion == 0) {
                $msg = "No es posible Desactivar el servicio";
                $bandera = false;
            } else {
                $msg = "No es posible Activar el servicio";
                $bandera = false;
            }
        }
        $arrResponse = array('status' => $bandera, 'msg' => $msg);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
}
