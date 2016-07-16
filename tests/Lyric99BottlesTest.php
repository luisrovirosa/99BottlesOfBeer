<?php

namespace Song99Bottles\Tests;

use Song99Bottles\Lyric99Bottles;
use Song99Bottles\Stanza;

class Lyric99BottlesTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function should_have_100_stanzas() {
    $lyric = new Lyric99Bottles();

    $stanzas = $lyric->stanzas();

    $this->assertCount(100, $stanzas);
  }

  /** @test */
  public function the_first_stanza_of_the_lyric_should_be_the_fist_stanza() {
    $lyric = new Lyric99Bottles();

    $stanzas = $lyric->stanzas();

    $this->assertEquals(Stanza::sentence(1), $stanzas[0]);
  }

}