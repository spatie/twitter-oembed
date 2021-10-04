<?php

namespace Spatie\TwitterOEmbed;

use DateTimeImmutable;
use Symfony\Component\DomCrawler\Crawler;

class Parser
{
    public function parse(array $tweet): Tweet
    {
        return new Tweet(
            url: $tweet['url'],
            name: $tweet['author_name'],
            username: $this->extractUsername($tweet),
            html: $this->extractHtml($tweet),
            date: $this->extractDate($tweet),
        );
    }

    private function extractUsername(array $data): string
    {
        $parts = explode('/', $data['author_url']);

        return '@' . $parts[count($parts) - 1];
    }

    private function extractHtml(array $data): string
    {
        $crawler = (new Crawler($data['html']))->filter('blockquote.twitter-tweet');

        $html = '<p>' . $crawler->filter('p')->html() . '</p>';

        return str_replace('?src=hash&amp;ref_src=twsrc%5Etfw', '', $html);
    }

    private function extractDate(array $data): DateTimeImmutable
    {
        $crawler = (new Crawler($data['html']))->filter('blockquote.twitter-tweet');

        return DateTimeImmutable::createFromFormat(
            'F j, Y',
            $crawler->children()->last()->html(),
        );
    }
}
