<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Junaidy Susilo',
        //     'email' => 'junaidysusilox@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        // User::create([
        //     'name' => 'Ach Rizal',
        //     'email' => 'achrizal@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum? Eum animi necessitatibus porro hic dolor quae omnis consequuntur quisquam voluptatum placeat aperiam reprehenderit, nam sed! Laborum rem provident itaque, accusamus cumque ipsum, consectetur reprehenderit, quibusdam ea labore recusandae. Doloremque sunt iure alias, corporis fuga omnis quam expedita porro deleniti numquam temporibus accusamus ipsum, inventore autem cupiditate quo voluptatibus assumenda quasi vitae. Suscipit, modi quas! Fuga incidunt quod, natus unde adipisci fugiat illum eos totam nobis neque at laboriosam explicabo cumque dolore quam exercitationem ullam. In, delectus quae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum? Eum animi necessitatibus porro hic dolor quae omnis consequuntur quisquam voluptatum placeat aperiam reprehenderit, nam sed! Laborum rem provident itaque, accusamus cumque ipsum, consectetur reprehenderit, quibusdam ea labore recusandae. Doloremque sunt iure alias, corporis fuga omnis quam expedita porro deleniti numquam temporibus accusamus ipsum, inventore autem cupiditate quo voluptatibus assumenda quasi vitae. Suscipit, modi quas! Fuga incidunt quod, natus unde adipisci fugiat illum eos totam nobis neque at laboriosam explicabo cumque dolore quam exercitationem ullam. In, delectus quae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum? Eum animi necessitatibus porro hic dolor quae omnis consequuntur quisquam voluptatum placeat aperiam reprehenderit, nam sed! Laborum rem provident itaque, accusamus cumque ipsum, consectetur reprehenderit, quibusdam ea labore recusandae. Doloremque sunt iure alias, corporis fuga omnis quam expedita porro deleniti numquam temporibus accusamus ipsum, inventore autem cupiditate quo voluptatibus assumenda quasi vitae. Suscipit, modi quas! Fuga incidunt quod, natus unde adipisci fugiat illum eos totam nobis neque at laboriosam explicabo cumque dolore quam exercitationem ullam. In, delectus quae.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minus, quidem quo sequi, eius minima, suscipit iure saepe molestias asperiores aliquam illum? Eum animi necessitatibus porro hic dolor quae omnis consequuntur quisquam voluptatum placeat aperiam reprehenderit, nam sed! Laborum rem provident itaque, accusamus cumque ipsum, consectetur reprehenderit, quibusdam ea labore recusandae. Doloremque sunt iure alias, corporis fuga omnis quam expedita porro deleniti numquam temporibus accusamus ipsum, inventore autem cupiditate quo voluptatibus assumenda quasi vitae. Suscipit, modi quas! Fuga incidunt quod, natus unde adipisci fugiat illum eos totam nobis neque at laboriosam explicabo cumque dolore quam exercitationem ullam. In, delectus quae.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
