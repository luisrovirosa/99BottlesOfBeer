<?php

namespace Song99Bottles\Tests\Sentence;

use Song99Bottles\Sentence\BottleOnTheWallSentence;
use Song99Bottles\Singer;

class BottleOnTheWallSentenceTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function the_first_sentence_is_99_bottles() {
    $sentence = new BottleOnTheWallSentence(1);
    $singer = $this->prophesize(Singer::class);

    $sentence->sing($singer->reveal());

    $singer->sing('99 bottles of beer on the wall, 99 bottles of beer.')->shouldHaveBeenCalled();
  }

  /** @test */
  public function the_last_sentence_is_no_more_bottles() {
    $sentence = new BottleOnTheWallSentence(100);
    $singer = $this->prophesize(Singer::class);

    $sentence->sing($singer->reveal());

    $singer->sing('No more bottles of beer on the wall, no more bottles of beer.')->shouldHaveBeenCalled();
  }
}