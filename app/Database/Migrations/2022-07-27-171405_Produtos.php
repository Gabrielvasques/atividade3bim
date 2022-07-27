<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'descricao' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'valor' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        //
    }
}
