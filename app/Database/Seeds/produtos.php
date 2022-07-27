<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class produtos extends Seeder
{
    public function run()
    {
    $des = ['notebook','tablet','PC'];
    $val = ['2000','1000','5000'];
    for($x=0;$x<3;$x++){
        $data = [
            'descricao' => $des[$x],
            'valor'    => $val[$x],
        ];

        $this->db->table('produtos')->insert($data);
        }
    }
}