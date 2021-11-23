<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
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
            'tanggal_pemesanan'       => [
                'type'           => 'DATETIME',
                'constraint'     => 6,
                'null'           => false
            ],
            'jumlah'     => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null'           => true
            ],
            'Total_harga'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false
            ]
        ];

        $this->forge->addField($Fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pemesanan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
