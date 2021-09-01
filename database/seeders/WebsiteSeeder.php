<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Website;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $website = Str::random(10);
        // DB::table('websites')
        // ->insert([
        //     'name' => $website,
        //     'url' => 'www.'.$website.'.com',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);
        Website::factory()
            ->count(5)
            ->create();
    }
}
