<?php

namespace Database\Seeders;

use App\Models\Discussion;
use App\Models\Reply;
use Illuminate\Database\Seeder;

class DiscussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discussion::factory()
            ->has(Reply::factory()->count(10))
            ->count(10)
            ->create();
    }
}
