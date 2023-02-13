<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsuarios extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'idUsr';
    protected $allowedFields    = ['usuario', 'password', 'nombre', 'telefono', 'tipo', 'status'];

    function getStatus($check, $idUsr)
    {
        //$status = '<span class="badge badge-pill badge-' . $type . '">' . $text . '</span>';
        $status = '<div class="toggle-flip"><label>
        <input type="checkbox" ' . $check . ' id="chck' . $idUsr . '" onClick="status(' . $idUsr . ')">
        <span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF">
        </span></label></div>';
        return $status;
    }

    function getBtns($idUsr)
    {
        $btns = '';
        $btnView = '<button class="btn btn-info btn-sm" onClick="viewUsr(' . $idUsr . ')" title="Ver Usuario"><i class="fa fa-eye"></i></button>';
        $btnUpd = '<button class="btn btn-primary btn-sm" onClick="viewFormUpd(' . $idUsr . ')" title="Actualizar Usuario"><i class="fa fa-pencil-square"></i></button>';
        $btns = '<div class="text-center">' . $btnView . ' ' . $btnUpd .  '</div>';
        return $btns;
    }
}
