<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClientMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'prenom' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'telephone' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'adresse' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'code_postal' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'ville' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('client');
    }

    public function down()
    {
        $this->forge->dropTable('client');
    }
}
