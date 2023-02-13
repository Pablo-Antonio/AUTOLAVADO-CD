<?php

namespace App\Controllers;

use App\Models\ModelUsuarios;
use App\Models\ModelVentas;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Dashboard',
            'page_description' => 'Estadisticas',
            'functions_js' => 'functions_dashboard.js'
        ];
        if (session('type') == "empleado") {
            return view('template/header',[]) . view('errors/pageError/401') . view('template/footer');
        } else {
            return view('template/header', $data) . view('dashboard/dashboard') . view('template/footer');
        }
    }

    public function getUsers()
    {
        $db = \Config\Database::connect();
        $query = $db->table('usuarios');
        $query->select('COUNT(idUsr) as usuarios');
        $query->where("status = 1");
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getServicios()
    {
        $db = \Config\Database::connect();
        $query = $db->table('servicios');
        $query->select('COUNT(idServicio) as servicios');
        $query->where("status = 1");
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getVentas()
    {
        $db = \Config\Database::connect();
        $query = $db->table('ventas');
        $query->select('COUNT(idVenta) as ventas');
        $query->where("DAY(fechaVenta) = DAY(CURDATE())");
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getIngresos()
    {
        $db = \Config\Database::connect();
        $query = $db->table('ventas');
        $query->select('SUM(totalVenta) as ingresos');
        $query->where("DAY(fechaVenta) = DAY(CURDATE())");
        $arrData = $query->get()->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getTop10()
    {
        $db = \Config\Database::connect();
        $query = $db->table('serviciosvendidos as sv');
        $query->select('sv.idServicio, COUNT(sv.idServicio) as cantidad, 
        SUM(sv.totalServicio) as total, s.nombre as nombre');
        $query->join('servicios as s', 'sv.idServicio = s.idServicio');
        $query->groupBy('idServicio', 'ASC');
        $arrData = $query->get(10)->getResult();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getVentasMes()
    {
        $year = $this->request->getPost("year");
        //echo $year;
        $ventas = new ModelVentas();
        $arrData = $ventas->select("SUM(totalVenta) AS Total, MONTHNAME(fechaVenta) AS Mes")
            ->where("YEAR(fechaVenta)", $year)
            ->groupBy("Mes")
            ->findAll();
        return json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }
}
