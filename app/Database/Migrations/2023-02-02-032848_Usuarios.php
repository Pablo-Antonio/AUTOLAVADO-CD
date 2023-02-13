<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'idUsr' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'telefono' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'tipo' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'status' => [
                'type' => 'INT'
            ]
        ]);
        $this->forge->addKey("idUsr",true);
        $this->forge->addUniqueKey('usuario');
        $this->forge->createTable("usuarios");
    }

    public function down()
    {
        //
        $this->forge->dropTable("usuarios");
    }
}
