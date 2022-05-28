<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();
    //     Listing::create(
    //     [
    //         'id' => 1,
    //         'title' => 'Senior software engineer',
    //         'tags' => 'laravel, java script',
    //         'company' => 'Terracodez',
    //         'email' => 'terracodez@gmail.com',
    //         'website' => 'https://www.terracodez.com',
    //         'location' => 'Galle',
    //         'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores ducimus modi, voluptatum, animi molestiae autem aliquid architecto natus itaque harum perferendis vero minus dolorum numquam explicabo, accusamus distinctio qui quos!',
    //         'created_at'=> date('Y-m-d H:i:s'),
    //         'updated_at'=> date('Y-m-d H:i:s')
    //     ]
    // );

    // Listing::create(
    //     [
    //         'id' => 2,
    //         'title' => 'Associative software engineer',
    //         'tags' => 'laravel, java script',
    //         'company' => 'Terracodez',
    //         'email' => 'terracodez@gmail.com',
    //         'website' => 'https://www.terracodez.com',
    //         'location' => 'Galle',
    //         'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores ducimus modi, voluptatum, animi molestiae autem aliquid architecto natus itaque harum perferendis vero minus dolorum numquam explicabo, accusamus distinctio qui quos!',
    //         'created_at'=> date('Y-m-d H:i:s'),
    //         'updated_at'=> date('Y-m-d H:i:s')
    //     ]
    // );

    }
}
