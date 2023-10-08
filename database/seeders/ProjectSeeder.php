<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{

    private $projects = [
        [
            'name' => 'html-london-trip',
            'slug' => 'html-london-trip',
            'description' => 'A very basic project in Html. List items, pics, icons',
            'image' => '/images/html-london-trip.png',
            'publication_date' => '2023/05/19',
            'technologies_used' => 'HTML',
            'git_link' => 'https://github.com/pierluigicarrieri/html-london-trip'
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->projects as $project) {
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->slug = $project['slug'];
            $newProject->description = $project['description'];
            $newProject->image = $project['image'];
            $newProject->publication_date = $project['publication_date'];
            $newProject->technologies_used = $project['technologies_used'];
            $newProject->git_link = $project['git_link'];
            $newProject->save();
        }
    }
}
