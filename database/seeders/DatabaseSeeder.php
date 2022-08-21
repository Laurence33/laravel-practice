<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\{User, Post, Category};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Post::truncate();
        Category::truncate();


        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Laurence Cortez',
        //     'email' => 'laurencecortz26.lc@example.com',
        // ]);

        Category::factory()->create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::factory()->create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Category::factory()->create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);
        Category::factory()->create([
            'name' => 'Side Projects',
            'slug' => 'side-projects'
        ]);


        // Post::factory(200)->create();

        //loop to create custom users
        $users = [[
            'name' => 'Laurence Cortez',
            'email' => 'laurencecortez26.lc@gmail.com'
        ], [
            'name' => 'Julie Beth Arao',
            'email' => 'juliebetharao@gmail.com'
        ], [
            'name' => 'Jobert Adviento',
            'email' => 'jobertadviento@gmail.com'
        ], [
            'name' => 'Ronel Milante',
            'email' => 'ronelmilante@gmail.com'
        ]];

        foreach ($users as $user) {
            $newUser = User::factory()->create($user);
            Post::factory(5)->create([
                'user_id' => $newUser->id
            ]);
        };
    }
}
