<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateParfumTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'warna' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('parfum');
    }

    public function down()
    {
        $this->forge->dropTable('parfum');
    }
}