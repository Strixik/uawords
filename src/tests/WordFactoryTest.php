<?php


namespace Strix\UaWords\tests;

use Strix\UaWords\WordFactory;
use PHPUnit\Framework\TestCase;

class WordFactoryTest extends TestCase
{
    public function test_it_is_not_null()
    {
        $this->assertNotNull((new WordFactory())->hello());
    }
}