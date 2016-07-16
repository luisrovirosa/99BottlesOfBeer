<?php

namespace Song99Bottles\Tests;

use Song99Bottles\Lyric99Bottles;
use Song99Bottles\Output;
use Song99Bottles\Singer;

class Lyric99BottlesTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function should_have_100_stanzas() {
    $lyric = new Lyric99Bottles();

    $stanzas = $lyric->stanzas();

    $this->assertCount(100, $stanzas);
  }

  /** @test */
  public function sing_second_stanza_sings_98_bottles() {
    $lyric = new Lyric99Bottles();
    $stanzas = $lyric->stanzas();
    $stanza = $stanzas[1];
    $output = $this->prophesize(Output::class);

    $stanza->sing(new Singer($output->reveal()));

    $output->sing("98 bottles of beer on the wall, 98 bottles of beer.")->shouldHaveBeenCalled();
  }
}