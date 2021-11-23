<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Film extends Migration
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
            'judul'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false
            ],
            'genre'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true
            ],
            'kategori'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false
            ],
            'tayang'     => [
                'type'           => 'DATETIME',
                'constraint'     => 6,
                'null'           => false
            
            ]
        ];

        $this->forge->addField($Fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('film', true);
    }

    public function down()
    {
        $this->forge->dropTable('film');
    }
}
