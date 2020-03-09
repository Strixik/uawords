<?php

namespace Strixik\UaWords\tests;

use PHPUnit\Framework\TestCase;
use Strixik\UaWords\WordFactory;

class WordFactoryTest extends TestCase
{
    public function test_it_is_not_null()
    {
        $this->assertNotNull((new WordFactory())->hello());
    }

}