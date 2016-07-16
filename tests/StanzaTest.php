<?php

namespace Song99Bottles\Tests;

use Song99Bottles\Singer;
use Song99Bottles\Stanza;

class StanzaTest extends \PHPUnit_Framework_TestCase {

  /** @test */
  public function singer_should_make_a_pause_sing_a_stanza() {
    $stanza = Stanza::forBottles(99);
    $singer = $this->prophesize(Singer::class);

    $stanza->sing($singer->reveal());

    $singer->pause()->shouldBeCalled();
  }
}