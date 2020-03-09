<?php


namespace Strixik\UaWords\tests;

use Strixik\UaWords\WordFactory;
use PHPUnit\Framework\TestCase;

class WordFactoryTest extends TestCase
{
    public function test_it_is_not_null()
    {
        $this->assertNotNull((new WordFactory())->hello());
    }
}