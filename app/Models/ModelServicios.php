<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelServicios extends Model
{
    protected $table            = 'servicios';
    protected $primaryKey       = 'idServicio';
    protected $allowedFields    = ['nombre', 'descripcion', 'precio', 'status'];

    function getStatus($check, $idServicio)
    {
        //$status = '<span class="badge badge-pill badge-' . $type . '">' . $text . '</span>';
        $status = '<div class="toggle-flip"><label>
        <input type="checkbox" ' . $check . ' id="chck' . $idServicio . '" onClick="status(' . $idServicio . ')">
        <span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF">
        </span></label></div>';
        return $status;
    }

    function getBtns($idServicio)
    {
        $btns = '';
        $btnView = '<button class="btn btn-info btn-sm" onClick="viewSer(' . $idServicio . ')" title="Ver Servicio"><i class="fa fa-eye"></i></button>';
        $btnUpd = '<button class="btn btn-primary btn-sm" onClick="viewFormUpd(' . $idServicio . ')" title="Actualizar Servicio"><i class="fa fa-pencil-square"></i></button>';
        $btns = '<div class="text-center">' . $btnView . ' ' . $btnUpd .  '</div>';
        return $btns;
    }

    function getBtnSell($idServicio)
    {
        $btn = '';
        $btnView = '<button class="btn btn-success btn-sm" onClick="agregarCarrito(' . $idServicio . ')" title="Agregar Servicio"><i class="fa fa-plus-square"> Agregar</i></button>';
        $btn = '<div class="text-center">' . $btnView . '</div>';
        return $btn;
    }
}
