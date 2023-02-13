<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servicios extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'idServicio' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ],
            'descripcion' => [
                'type' => 'TEXT'
            ],
            'precio' => [
                'type' => 'DOUBLE',
                'unsigned' => true,
            ],
            'status' => [
                'type' => 'INT'
            ]
        ]);
        $this->forge->addKey("idServicio",true);
        $this->forge->createTable("servicios");
    }

    public function down()
    {
        //
        $this->forge->dropTable("servicios");
    }
}
