<?php

namespace Song99Bottles\Tests;

use Prophecy\Prophecy\ObjectProphecy;
use Song99Bottles\Lyric99Bottles;
use Song99Bottles\Output;
use Song99Bottles\Singer;
use Song99Bottles\Stanza;

class Lyric99BottlesTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function should_have_100_stanzas() {
    $lyric = new Lyric99Bottles();

    $stanzas = $lyric->stanzas();

    $this->assertCount(100, $stanzas);
  }

  /** @test */
  public function sing_second_stanza_sings_98_bottles() {
    $output = $this->output();

    $this->sing($this->stanza(), $output);

    $output->sing("98 bottles of beer on the wall, 98 bottles of beer.")->shouldHaveBeenCalled();
  }

  /** @test */
  public function sing_second_stanza_sings_takes_one() {
    $output = $this->output();

    $this->sing($this->stanza(), $output);

    $output->sing("Take one down and pass it around, 97 bottles of beer on the wall.")->shouldHaveBeenCalled();
  }

  /**
   * @return \Song99Bottles\Stanza
   */
  private function stanza() {
    $lyric = new Lyric99Bottles();
    $stanzas = $lyric->stanzas();

    return $stanzas[1];
  }

  /**
   * @param Stanza $stanza
   * @param ObjectProphecy $objectProphecy
   */
  private function sing(Stanza $stanza, ObjectProphecy $objectProphecy) {
    /** @var Output $output */
    $output = $objectProphecy->reveal();
    $stanza->sing(new Singer($output));
  }

  /**
   * @return \Prophecy\Prophecy\ObjectProphecy|\Song99Bottles\Output
   */
  private function output() {
    return $this->prophesize(Output::class);
  }
}