<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelServiciosVendidos extends Model
{
    protected $table            = 'serviciosvendidos';
    protected $primaryKey       = 'idServicio';
    protected $allowedFields    = ['idServicio','cantidad','totalServicio','idVenta'];
}
