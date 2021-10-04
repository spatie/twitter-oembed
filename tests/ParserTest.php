<?php

use Spatie\TwitterOEmbed\Parser;

$parser = new Parser();

test('it can parse a URL from a simple tweet')
    ->expect($parser->parse(require 'data/simple-tweet.php'))
    ->url->toBe('https://twitter.com/AoDespair/status/1173718972103090177');

test('it can parse a name from a simple tweet')
    ->expect($parser->parse(require 'data/simple-tweet.php'))
    ->name->toBe('David Simon');

test('it can parse a username from a simple tweet')
    ->expect($parser->parse(require 'data/simple-tweet.php'))
    ->username->toBe('@AoDespair');

test('it can parse HTML from a simple tweet')
    ->expect($parser->parse(require 'data/simple-tweet.php'))
    ->html->toBe('<p>Have I seen The Wire?</p>');

test('it can parse HTML from a tweet with an image')
    ->expect($parser->parse(require 'data/tweet-with-image.php'))
    ->html->toBe('<p>One of my favorites <a href="https://t.co/CFFyAvPRXD">pic.twitter.com/CFFyAvPRXD</a></p>');

test('it can parse a date from a simple tweet')
    ->expect($parser->parse(require 'data/simple-tweet.php'))
    ->date->toBeDate('2019-09-16');
