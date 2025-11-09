<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder {
    public function run() {
        Writer::factory()->count(5)->create();
    }
}
