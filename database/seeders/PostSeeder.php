<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder {
    public function run() {
        // buat banyak post (pastikan category & writers ada)
        Post::factory()->count(20)->create();
    }
}
