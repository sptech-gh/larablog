<?php
namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::factory()->count(10)->create();
    }
}



