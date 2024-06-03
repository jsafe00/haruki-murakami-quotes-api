<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Book::create([
            'title' => 'What I Talk About When I Talk About Running',
            'image' => 'what-i-talk-about-when-i-talk-about-running.jpg'
        ]);

        \App\Book::create([
            'title' => 'Kafka On The Shore',
            'image' => 'kafka-on-the-shore.jpg'
        ]);

        \App\Book::create([
            'title' => 'Sputnik  Sweetheart',
            'image' => 'sputnik-sweetheart.jpg'
        ]);

        \App\Book::create([
            'title' => 'Norwegian Wood',
            'image' => 'norwegian-wood.jpg'
        ]);

        \App\Book::create([
            'title' => 'Men Without Women',
            'image' => 'men-without-women.jpg'
        ]);

        \App\Book::create([
            'title' => 'The Wind Up Bird Chronicle',
            'image' => 'the-wind-up-bird-chronicle.jpg'
        ]);

        \App\Book::create([
            'title' => 'South of the Border, West of the Sun',
            'image' => 'south-of-the-border.jpg'
        ]);

        \App\Book::create([
            'title' => 'Dance Dance Dance',
            'image' => 'dance.jpeg'
        ]);

        \App\Book::create([
            'title' => 'Blind Willow, Sleeping Woman',
            'image' => 'blind-willow.jpeg'
        ]);

        \App\Book::create([
            'title' => 'After Dark',
            'image' => 'after-dark.jpeg'
        ]);

        \App\Book::create([
            'title' => '1Q84',
            'image' => '1Q84.jpeg'
        ]);

        \App\Book::create([
            'title' => 'Hard-Boiled Wonderland and the End of the World',
            'image' => 'hard-boiled-wonderland.jpeg'
        ]);
    }
}
