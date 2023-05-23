<?php

namespace Database\Seeders;

use App\Models\permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    protected $permission = [

        'all_categories' => 'All Categories',
        'single_category' => 'Show Single Category',
        'add_category' => 'Add New Category',
        'delete_category' => 'Delete Category',
        'edit_category' => 'Edit Category',
        'all_courses' => 'All Courses',
        'single_course' => 'Show Single Course',
        'add_course' => 'Add New Course',
        'delete_course' => 'Delete Course',
        'edit_course' => 'Edit Course',
    ];
    public function run(): void
    {
        $data = [
            ['name' => 'Super Admin'],
            ['name' => 'Category Manager'],
            ['name' => 'Course Manager']
        ];

        Role::insert($data);
        foreach ($this->permission as $code => $name) {

            permission::create([
                'name' => $name,
                'code' => $code
            ]);
        }
    }
}
