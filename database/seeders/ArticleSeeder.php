<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title'     => 'Lorem Ipsum 1',
            'author'   => 'Mr. White',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus id mauris sit amet luctus. Aenean hendrerit posuere consectetur. Donec bibendum tempor mi ac elementum. Sed varius luctus ultrices. Nullam ut fringilla est. Aliquam eget lacus sit amet purus porta pulvinar nec et odio. Duis convallis odio nec metus ullamcorper pharetra. Nunc tempor gravida sem nec egestas. Pellentesque sodales placerat fermentum. Etiam pulvinar elementum lacus quis suscipit. Proin hendrerit ante nec lectus aliquet, sed pharetra turpis elementum. Vestibulum eu fermentum dui, a luctus urna. Nullam lorem purus, tincidunt sit amet lorem non, pellentesque rhoncus magna. Aliquam eleifend tellus non odio venenatis venenatis. <br>
            Nullam pulvinar iaculis lacus, id laoreet nisi aliquet eget. Morbi suscipit tempor enim vel molestie. Praesent dapibus ultrices neque sed iaculis. Sed hendrerit vel ante ut consequat. Aliquam sit amet purus ac ligula molestie vestibulum. In feugiat, lorem a dapibus posuere, metus velit sagittis nisi, in hendrerit sapien augue non ex. Sed eu dui enim. Ut pellentesque aliquet purus eu ultrices. Maecenas nec libero ante. Fusce sit amet mauris varius metus volutpat sollicitudin non vel diam.'
        ]);

        Article::create([
            'title'     => 'Lorem Ipsum 2',
            'author'   => 'Mr. White',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus id mauris sit amet luctus. Aenean hendrerit posuere consectetur. Donec bibendum tempor mi ac elementum. Sed varius luctus ultrices. Nullam ut fringilla est. Aliquam eget lacus sit amet purus porta pulvinar nec et odio. Duis convallis odio nec metus ullamcorper pharetra. Nunc tempor gravida sem nec egestas. Pellentesque sodales placerat fermentum. Etiam pulvinar elementum lacus quis suscipit. Proin hendrerit ante nec lectus aliquet, sed pharetra turpis elementum. Vestibulum eu fermentum dui, a luctus urna. Nullam lorem purus, tincidunt sit amet lorem non, pellentesque rhoncus magna. Aliquam eleifend tellus non odio venenatis venenatis. <br>
            Nullam pulvinar iaculis lacus, id laoreet nisi aliquet eget. Morbi suscipit tempor enim vel molestie. Praesent dapibus ultrices neque sed iaculis. Sed hendrerit vel ante ut consequat. Aliquam sit amet purus ac ligula molestie vestibulum. In feugiat, lorem a dapibus posuere, metus velit sagittis nisi, in hendrerit sapien augue non ex. Sed eu dui enim. Ut pellentesque aliquet purus eu ultrices. Maecenas nec libero ante. Fusce sit amet mauris varius metus volutpat sollicitudin non vel diam.'
        ]);
    }
}
