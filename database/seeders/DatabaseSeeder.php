<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $questions = [ 
            ['title' => 'what is the clarity of the project requirements?', 'criteria' => 'requirements'],
            ['title' => 'how much cost is for the project?', 'criteria' => 'cost'],
            ['title' => 'how long does the project have?', 'criteria' => 'duration'],
            ['title' => 'how flexible a project is for changes?', 'criteria' => 'flexible_to_change'],
            ['title' => 'what is the customer availability during the project lifecycle?', 'criteria' => 'customer_availability'],
            ['title' => 'what is ratio of simplicity in a project?', 'criteria' => 'simplicity_ratio'],
            ['title' => 'how much project size is?', 'criteria' => 'project_size'],
            ['title' => 'how complex is the project?', 'criteria' => 'project_complex']
        ];

        foreach ($questions as $question) {
            \App\Models\Question::create($question);
        }

        $user = [
            'name' => 'Ateeq',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        
        // \App\Models\User::create($user);


        // \App\Models\User::factory(10)->create();
    }
}
