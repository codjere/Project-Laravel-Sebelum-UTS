<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    public function run() {
        $lastDigit = intval(env('NIM_LAST_DIGIT', 1));
        $isEven = $lastDigit % 2 === 0;

        $cats = $isEven
            ? ['Interactive Multimedia', 'Software Engineering']
            : ['Data Science', 'Network Security'];

        foreach ($cats as $c) {
            Category::create(['name' => $c, 'slug' => Str::slug($c)]);
        }
    }
}
