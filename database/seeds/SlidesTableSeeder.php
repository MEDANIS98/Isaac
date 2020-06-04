<?php

declare(strict_types=1);

use App\Slide;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('slides');
        Storage::disk('public')->makeDirectory('slides');
        factory(Slide::class, 2)->create();
    }
}
