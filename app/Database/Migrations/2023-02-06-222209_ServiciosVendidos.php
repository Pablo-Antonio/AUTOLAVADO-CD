<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiciosVendidos extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'idServicio' => [
                'type' => 'INT'
            ],
            'cantidad' => [
                'type' => 'INT'
            ],
            'totalServicio' => [
                'type' => 'DOUBLE'
            ],
            'idVenta' => [
                'type' => 'INT'
            ]
        ]);
        //$this->forge->addKey('idServicio',true);
        $this->forge->createTable('serviciosVendidos');
    }

    public function down()
    {
        //
        $this->forge->dropTable('serviciosVendidos');
    }
}
