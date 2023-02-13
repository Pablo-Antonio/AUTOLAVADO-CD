<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelVentas extends Model
{
    protected $table            = 'ventas';
    protected $primaryKey       = 'idVenta';
    protected $allowedFields    = ['fechaVenta','totalVenta','efectivo','atendio'];

}
