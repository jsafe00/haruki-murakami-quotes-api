<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertRunningQuotes();
        $this->insertKafkaQuotes();
        $this->insertSputnikQuotes();
        $this->insertNorwegianQuotes();
        $this->insertMenQuotes();
        $this->insertChroniclesQuotes();
    }

    private function insertRunningQuotes()
    {
        $book = \App\Book::where('title', 'What I Talk About When I Talk About Running')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'Pain is inevitable. Suffering is optional.']),
            new \App\Quote(['text' => 'The most important thing we learn at school is the fact that the most important things can\'t be learned at school.']),
            new \App\Quote(['text' => 'I’m the kind of person who likes to be by himself. To put a finer point on it, I’m the type of person who doesn’t find it painful to be alone.']),
            new \App\Quote(['text' => 'I could always think of things to do by myself.']),
            new \App\Quote(['text' => 'I look up at the sky, wondering if I\'ll catch a glimpse of kindness there, but I don\'t. All I see are indifferent summer clouds drifting over the Pacific. I probably shouldn\'t be looking up at them. What I should be looking at is inside of me. ']),
            new \App\Quote(['text' => 'I\'ve always done whatever I felt like doing in life. People may try to stop me, and convince me I\'m wrong, but I won\'t change.']),
            new \App\Quote(['text' => 'When I\'m running I don\'t have to talk to anybody and don\'t have to listen to anybody. This is a part of my day I can\'t do without.']),
            new \App\Quote(['text' => 'In certain areas of my life, I actively seek out solitude. Especially for someone in my line of work, solitude is, more or less, an inevitable circumstance.']),
            new \App\Quote(['text' => 'In other words, let\'s face it: Life is basically unfair. But even in a situation that\'s unfair, I think it\'s possible to seek out a kind of fairness.']),
            new \App\Quote(['text' => 'Sometimes taking time is actually a shortcut.']),
            new \App\Quote(['text' => 'All I do is keep on running in my own cozy, homemade void, my own nostalgic silence. And this is a pretty wonderful thing. No matter what anybody else says']),
            new \App\Quote(['text' => 'In long-distance running the only opponent you have to beat is yourself, the way you used to be.']),
            new \App\Quote(['text' => 'Being active every day makes it easier to hear that inner voice']),
            new \App\Quote(['text' => 'It doesn’t matter how old I get, but as long as I continue to live I’ll always discover something new about myself.']),
            new \App\Quote(['text' => 'To keep on going, you have to keep up the rhythm.']),
            new \App\Quote(['text' => 'I\'ll be happy if running and I can grow old together.']),
            new \App\Quote(['text' => 'Sometimes taking time is actually a shortcut.']),
        ]);
    }

    private function insertKafkaQuotes()
    {
        $book = \App\Book::where('title', 'Kafka On The Shore')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'Memories warm you up from the inside. But they also tear you apart.']),
            new \App\Quote(['text' => 'If you remember me, then I don\'t care if everyone else forgets.']),
            new \App\Quote(['text' => 'You won\'t even be sure, in fact, whether the storm is really over. But one thing is certain. When you come out of the storm you won\'t be the same person who walked in. That\'s what this storm\'s all about.']),
            new \App\Quote(['text' => 'Lost opportunities, lost possibilities, feelings we can never get back. That\'s part of what it means to be alive.']),
            new \App\Quote(['text' => 'Silence, I discover, is something you can actually hear.']),
            new \App\Quote(['text' => 'Closing your eyes isn\'t going to change anything. Nothing\'s going to disappear just because you can\'t see what\'s going on. In fact, things will even be worse the next time you open your eyes.']),
            new \App\Quote(['text' => 'Taking crazy things seriously is a serious waste of time.']),
            new \App\Quote(['text' => 'Whatever it is you\'re seeking won\'t come in the form you\'re expecting.']),
            new \App\Quote(['text' => 'Anyone who falls in love is searching for the missing pieces of themselves. So anyone who\'s in love gets sad when they think of their lover. It\'s like stepping back inside a room you have fond memories of, one you haven\'t seen in a long time.']),
            new \App\Quote(['text' => 'Listen up — there\'s no war that will end all wars.']),
            new \App\Quote(['text' => 'Narrow minds devoid of imagination. Intolerance, theories cut off from reality, empty terminology, usurped ideals, inflexible systems. Those are the things that really frighten me. What I absolutely fear and loathe.']),
            new \App\Quote(['text' => 'A certain type of perfection can only be realized through a limitless accumulation of the imperfect. And personally I find that encouraging.']),
            new \App\Quote(['text' => 'It\'s hard to tell the difference between sea and sky, between voyager and sea. Between reality and the workings of the heart.']),
            new \App\Quote(['text' => 'Time weighs down on you like an old, ambiguous dream. You keep on moving, trying to sleep through it. But even if you go to the ends of the earth, you won\'t be able to escape it. Still, you have to go there — to the edge of the world. There\'s something you can\'t do unless you get there.']),
        ]);
    }

    private function insertSputnikQuotes()
    {
        $book = \App\Book::where('title', 'Sputnik  Sweetheart')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'I dream. Sometimes I think that\'s the only right thing to do']),
            new \App\Quote(['text' => 'We\'re both looking at the same moon, in the same world. We\'re connected to reality by the same line. All I have to do is quietly draw it towards me.']),
            new \App\Quote(['text' => 'Sometimes you’re just the sweetest thing. Like Christmas, summer vacation, and a brand-new puppy all rolled into one.']),
            new \App\Quote(['text' => 'I was alive in the past, and I’m alive now, sitting here talking to you. But what you see here isn’t really me. This is just a shadow of who I was.']),
            new \App\Quote(['text' => 'After all this, I won\'t start to hate you.']),
            new \App\Quote(['text' => 'I have this strange feeling that I\'m not myself anymore. It\'s hard to put into words, but I guess it\'s like I was fast asleep, and someone came, disassembled me, and hurriedly put me back together again. That sort of feeling.']),
        ]);
    }

    private function insertNorwegianQuotes()
    {
        $book = \App\Book::where('title', 'Norwegian Wood')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'If you only read the books that everyone else is reading, you can only think what everyone else is thinking.']),
            new \App\Quote(['text' => 'What happens when people open their hearts?. They get better.']),
            new \App\Quote(['text' => 'Don\'t feel sorry for yourself. Only assholes do that.']),
            new \App\Quote(['text' => 'Despite your best efforts, people are going to be hurt when it\'s time for them to be hurt.']),
            new \App\Quote(['text' => 'Not that we were incompatible: we just had nothing to talk about.']),
            new \App\Quote(['text' => 'Nobody likes being alone that much. I don\'t go out of my way to make friends, that\'s all. It just leads to disappointment.']),
            new \App\Quote(['text' => 'But who can say what\'s best? That\'s why you need to grab whatever chance you have of happiness where you find it, and not worry about other people too much. My experience tells me that we get no more than two or three such chances in a life time, and if we let them go, we regret it for the rest of our lives.']),
            new \App\Quote(['text' => 'It\'s like Tolstoy said. Happiness is an allegory, unhappiness a story.']),
            new \App\Quote(['text' => 'Death is not the opposite of life, but a part of it.']),
        ]);
    }

    private function insertMenQuotes()
    {
        $book = \App\Book::where('title', 'Men Without Women')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'A clever person solves a problem. A wise person avoids it.']),
            new \App\Quote(['text' => 'Women are all born with a special, independent organ that allows them to lie']),
            new \App\Quote(['text' => 'If you don’t know what you’re looking for, it’s not easy to look for it.']),
            new \App\Quote(['text' => 'I need to learn not just to forget but to forgive.']),
            new \App\Quote(['text' => 'No matter how empty it may be, this is still my heart.']),
            new \App\Quote(['text' => 'I’m human, after all. I was hurt. But whether it was a lot or a little I can’t say.']),
        ]);
    }

    private function insertChroniclesQuotes()
    {
        $book = \App\Book::where('title', 'The Wind Up Bird Chronicle')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'The better you were able to imagine what you wanted to imagine, the farther you could flee from reality.']),
            new \App\Quote(['text' => 'I was living for one thing only, and that was to confirm my own lack of feeling.']),
            new \App\Quote(['text' => 'I was enveloped in numbness, and absence of feeling so deep the bottom was lost from view.']),
            new \App\Quote(['text' => 'Spend your money on the things money can buy. Spend your time on the things money can\'t buy.']),
        ]);
    }

    private function insertSouthOfTheBorderQuotes()
    {
        $book = \App\Book::where('title', 'South of the Border, West of the Sun')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'Sometimes when I look at you, I feel I\'m gazing at a distant star. It\'s dazzling, but the light is from tens of thousands of years ago. Maybe the star doesn\'t even exist any more. Yet sometimes that light seems more real to me than anything.']),
            new \App\Quote(['text' => 'But I didn\'t understand then. That I could hurt somebody so badly she would never recover. That a person can, just by living, damage another human being beyond repair.']),
        ]);
    }

    private function insertDanceQuotes()
    {
        $book = \App\Book::where('title', 'Dance Dance Dance')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'Unfortunately, the clock is ticking, the hours are going by. The past increases, the future recedes. Possibilities decreasing, regrets mounting.']),
            new \App\Quote(['text' => 'The sky grew darker, painted blue on blue, one stroke at a time, into deeper and deeper shades of night.']),
        ]);
    }

    private function insertBlindWillowQuotes()
    {
        $book = \App\Book::where('title', 'Blind Willow, Sleeping Woman')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'I sometimes think that people\'s hearts are like deep wells. Nobody knows what\'s at the bottom. All you can do is imagine by what comes floating to the surface every once in a while.']),
            new \App\Quote(['text' => 'No matter what they wish for, no matter how far they go, people can never be anything but themselves. That\'s all.']),
            new \App\Quote(['text' => 'Time weighs down on you like an old, ambiguous dream. You keep on moving, trying to sleep through it. But even if you go to the ends of the earth, you won\'t be able to escape it. Still, you have to go there — to the edge of the world. There\'s something you can\'t do unless you get there.']),
            new \App\Quote(['text' => 'I said nothing for a time, just ran my fingertips along the edge of the human-shaped emptiness that had been left inside me.']),
        ]);
    }

    private function insertAfterDarkQuotes()
    {
        $book = \App\Book::where('title', 'After Dark')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'In this world, there are things you can only do alone, and things you can only do with somebody else. It\'s important to combine the two in just the right amount.']),
            new \App\Quote(['text' => 'As time goes on, you\'ll understand. What lasts, lasts; what doesn\'t, doesn\'t. Time solves most things. And what time can\'t solve, you have to solve yourself.']),
        ]);
    }

    private function insert1Q84Quotes()
    {
        $book = \App\Book::where('title', '1Q84')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'I can bear any pain as long as it has meaning.']),
            new \App\Quote(['text' => 'Even if we could turn back, we\'d probably never end up where we started.']),
            new \App\Quote(['text' => 'It is not that the meaning cannot be explained. But there are certain meanings that are lost forever the moment they are explained in words.']),
        ]);
    }

    private function insertHardBoiledWonderlandQuotes()
    {
        $book = \App\Book::where('title', 'Hard-Boiled Wonderland and the End of the World')->first();
        $book->quotes()->saveMany([
            new \App\Quote(['text' => 'Two people can sleep in the same bed and still be alone when they close their eyes.']),
        ]);
    }
}
