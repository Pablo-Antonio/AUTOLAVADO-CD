<?php

namespace App\Controllers;

use App\Models\ModelServiciosVendidos;
use App\Models\ModelVentas;

class ReportesController extends BaseController
{
    public function viewTicket()
    {
        $data = [
            'page_title' => 'Ticket',
            'page_description' => 'Buscar Ticket',
            'functions_js' => 'functions_reportes.js'
        ];
        return view('template/header', $data) . view('ventas/buscarTicket') . view('template/footer');
    }

    public function buscarTicket()
    {
        $db = \Config\Database::connect();
        $idVenta  = $this->request->getPost("ticket");
        $query = $db->table('ventas as v');
        $query->select('v.idVenta, v.fechaVenta, v.efectivo, v.totalVenta, v.atendio, 
        sv.idServicio, sv.cantidad, sv.totalServicio, sv.idVenta,
        s.nombre, u.nombre as atendio');
        $query->join('serviciosvendidos as sv', 'v.idVenta = sv.idVenta');
        $query->join('servicios as s', 'sv.idServicio = s.idServicio');
        $query->join('usuarios as u', 'v.atendio = u.idUsr');
        $query->where('v.idVenta', $idVenta);
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function viewCorteCaja()
    {
        $data = [
            'page_title' => 'Corte de Caja',
            'page_description' => 'Realizar Corte de Caja',
            'functions_js' => 'functions_reportes.js'
        ];
        return view('template/header', $data) . view('ventas/corteCaja') . view('template/footer');
    }

    public function getCorte()
    {
        $fecha = $this->request->getPost("fecha");

        $db = \Config\Database::connect();
        $query = $db->table('ventas');
        $query->select('SUM(totalVenta) as total, COUNT(idVenta) as ventas');
        $query->where("DAY(fechaVenta) = DAY('$fecha')");
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function viewReporteMensual()
    {
        $data = [
            'page_title' => 'Reporte Mensual',
            'page_description' => 'Realizar Reporte Mensual',
            'functions_js' => 'functions_reportes.js'
        ];
        if (session('type') == "empleado") {
            return view('template/header', []) . view('errors/pageError/401') . view('template/footer');
        } else {
            return view('template/header', $data) . view('ventas/reporteMensual') . view('template/footer');
        }
    }

    public function getReporte()
    {
        $de = $this->request->getPost("fechaDe");
        $hasta = $this->request->getPost("fechaHasta");

        $db = \Config\Database::connect();
        $query = $db->table('ventas');
        $query->select('SUM(totalVenta) as total, COUNT(idVenta) as ventas');
        $query->where("DAY(fechaVenta) BETWEEN DAY('$de') and DAY('$hasta')");
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }
}
