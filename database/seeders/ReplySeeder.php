<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Discussion;
use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reply::factory()
            ->for(Discussion::factory())
            ->count(10)
            ->create();
    }
}
