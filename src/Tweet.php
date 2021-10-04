<?php

namespace Spatie\TwitterOEmbed;

use DateTimeImmutable;

class Tweet
{
    public function __construct(
        public string $url,
        public string $name,
        public string $username,
        public string $html,
        public DateTimeImmutable $date,
    ) {}
}
