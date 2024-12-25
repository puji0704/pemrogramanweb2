<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatBooksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'judul' =>[
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'pengarang' =>[
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'penerbit' =>[
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'tahun' =>[
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'cover' =>[
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'harga' =>[
                'type' => 'INT',
                'constraint' => 150,
            ],
        ]);   
    }

    public function down()
    {
        //
    }
}
