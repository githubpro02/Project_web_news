<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Disable foreign key constraints for user and enable it again. 
        // --- Con loi chua sua duoc

        // Schema::disabledForeignKeyConstraints();
        // \App\Models\Role::truncate();
        // \App\Models\User::truncate();
        // \App\Models\Category::truncate();
        // \App\Models\Post::truncate();
        // \App\Models\Tag::truncate();
        // \App\Models\Comment::truncate();
         // \App\Models\Image::truncate();

        // Schema::enabledForeignKeyConstraints();

        // Create roles and user
        // \App\Models\Role::factory(1)->create();
        // \App\Models\Role::factory(1)->create(['name' => 'admin']);

        $permission_ids = [];
        $blog_route = Route::getRoutes();
        foreach($blog_route as $route){
            if(strpos($route->getName(), 'admin') !== false){
                $permission = \App\Models\Permission::create(['name' => $route->getName()]);
                $permission_ids[] = $permission->id;
            }
        }
        \App\Models\Role::where('name', 'admin')->first()->permissions()->sync($permission_ids);

        $users = \App\Models\User::factory(10)->create();
        \App\Models\User::Factory()->create([
            'name' => 'Nguyễn Đức Mạnh',
            'email' => 'nguyenducmanh11102002@gmail.com',
            'role_id' => 2
        ]);
        \App\Models\User::Factory()->create([
            'name' => 'Nguyễn Hải Dương',
            'email' => 'nguyenhaiduong@gmail.com',
            'role_id' => 2
        ]);

    }
}
