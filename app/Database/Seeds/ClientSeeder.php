<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ClientSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $data = $this->generateFakeClient();
            $this->db->table('client')->insert($data);
        }
    }

    public function generateFakeClient() {
        $faker = Factory::create('fr_FR');


        return [
            'nom' => $faker->lastName,
            'prenom' => $faker->firstName,
            'email' => $faker->email,
            'telephone' => $faker->phoneNumber,
            'adresse' => $faker->address,
            'code_postal' => $faker->postcode,
            'ville' => $faker->city,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
    }
}
