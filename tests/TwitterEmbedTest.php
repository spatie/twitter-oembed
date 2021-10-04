<?php

use Spatie\TwitterOEmbed\TwitterOEmbed;

// A single integration test to see if everything's running smooth. This could
// prove to be brittle because the author name and username could change any
// time.
test('it can embed a tweet', function () {
    expect((new TwitterOEmbed())->embed('https://twitter.com/AoDespair/status/1173718972103090177'))
        ->url->toBe('https://twitter.com/AoDespair/status/1173718972103090177')
        ->name->toBe('David Simon')
        ->username->toBe('@AoDespair')
        ->html->toBe('<p>Have I seen The Wire?</p>')
        ->date->toBeDate('2019-09-16');
});
