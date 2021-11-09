<?php


use langdonglei\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testShow()
    {
        Text::show('abc', '_', 10);
    }
}
