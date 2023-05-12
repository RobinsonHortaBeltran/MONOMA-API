<?php

namespace Modules\Candidate\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Candidate\Entities\Candidate;

class CandidateDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                'name'        => 'candidato 1',
                'source'      => 'Fotocasa',
                'owner'       => 1,
                'created_by'  => 2,
            ],
            [
                'name'        => 'candidato 2',
                'source'      => 'Fotocasa 2',
                'owner'       => 2,
                'created_by'  => 2,
            ],
        ];

        foreach ($users as $user) {
            Candidate::create($user);
        }
    }
}
