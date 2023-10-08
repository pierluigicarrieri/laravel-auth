<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    private $projects = [
        [
            'name' => 'html-london-trip',
            'slug' => 'html-london-trip',
            'description' => 'A very basic project in Html. List items, pics, icons',
            'image' => '',
            'publication_date' => '19/05/2023',
            'technologies_used' => 'HTML',
            'git_link' => 'https://github.com/pierluigicarrieri/html-london-trip'
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
