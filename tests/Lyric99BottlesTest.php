<?php

namespace Song99Bottles\Tests;

use Song99Bottles\Lyric99Bottles;

class Lyric99BottlesTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function should_have_100_stanzas() {
    $lyric = new Lyric99Bottles();

    $stanzas = $lyric->stanzas();

    $this->assertCount(100, $stanzas);
  }
  
}