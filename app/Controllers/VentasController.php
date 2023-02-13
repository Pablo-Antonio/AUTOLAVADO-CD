<?php

namespace App\Controllers;

use App\Models\ModelServiciosVendidos;
use App\Models\ModelVentas;

class VentasController extends BaseController
{

    public function index()
    {
        $data = [
            'page_title' => 'Ventas',
            'page_description' => 'Vender Servicios',
            'functions_js' => 'functions_ventas.js'
        ];
        return view('template/header', $data) . view('modals/ventas/servicios') . view('ventas/ventas') . view('template/footer');
    }

    public function new()
    {
        $ventas = new ModelVentas();
        $datosVenta = $this->request->getPost("datosVenta");
        $datos = [];
        foreach ($datosVenta as $dato) {
            $datos = [
                'fechaVenta' => $dato["fechaVenta"],
                'totalVenta' => $dato["totalVenta"],
                'efectivo' => $dato["efectivo"],
                'atendio' => $dato["atendio"]
            ];
        }
        $ventas->insert($datos);
        $request = $ventas->getInsertID();
        if ($request > 0) {
            $arrResponse = array('status' => true, 'msg' => $request);
        } else {
            $arrResponse = array('status' => false, 'msg' => 'No es posible realizar la venta.');
        }
        return json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function insertarServicios()
    {
        $servicios = new ModelServiciosVendidos();
        $serviciosVenta = $this->request->getPost("serviciosVenta");
        $datos = [];
        foreach ($serviciosVenta as $servicio) {
            $datos = [
                'idServicio' => $servicio["idServicio"],
                'cantidad' => $servicio["cantidad"],
                'totalServicio' => $servicio["totalServicio"],
                'idVenta' => $servicio["idVenta"]
            ];
            $servicios->insert($datos);
        }
        $arrResponse = array('status' => true, 'msg' => "VENTA REALIZADA");
        return json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
}
