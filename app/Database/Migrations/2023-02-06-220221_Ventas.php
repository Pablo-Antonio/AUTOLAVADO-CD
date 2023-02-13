<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ventas extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'idVenta' =>[
                'type' => 'INT',
                'auto_increment' => true
            ],
            'fechaVenta' => [
                'type' => 'DATETIME'
            ],
            'efectivo' => [
                'type' => 'DOUBLE'
            ],
            'totalVenta' => [
                'type' => 'DOUBLE'
            ],
            'atendio' => [
                'type' => 'INT'
            ]
        ]);
        $this->forge->addKey('idVenta',true);
        $this->forge->createTable('ventas');
    }

    public function down()
    {
        //
        $this->forge->dropTable('ventas');
    }
}
