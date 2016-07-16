<?php

namespace Song99Bottles\Tests;

use Prophecy\Prophecy\ObjectProphecy;
use Song99Bottles\Output;
use Song99Bottles\Singer;
use Song99Bottles\Stanza;

class StanzaTest extends \PHPUnit_Framework_TestCase {

  /** @test */
  public function sing_second_stanza_sings_98_bottles() {
    $output = $this->output();

    $this->sing(Stanza::forBottles(98), $output);

    $output->sing("98 bottles of beer on the wall, 98 bottles of beer.")->shouldHaveBeenCalled();
  }

  /** @test */
  public function sing_second_stanza_sings_takes_one() {
    $output = $this->output();

    $this->sing(Stanza::forBottles(98), $output);

    $output->sing("Take one down and pass it around, 97 bottles of beer on the wall.")->shouldHaveBeenCalled();
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

  /** @test */
  public function singer_should_make_a_pause_sing_a_stanza() {
    $stanza = Stanza::forBottles(99);
    $singer = $this->prophesize(Singer::class);

    $stanza->sing($singer->reveal());

    $singer->pause()->shouldBeCalled();
  }
}