<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $Fields = [
            'id'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false
            ],
            'jenis_kelamin'     => [
                'type'           => 'ENUM',
                'constraint'     => ['L', 'P'],
                'null'           => true
            ],
            'telepon'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
                'null'           => false
            ],
            'alamat'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false
            
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false
            ]
        ];

        $this->forge->addField($Fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('customer', true);
    }

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
