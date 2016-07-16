<?php

namespace Song99Bottles\Tests;

use Song99Bottles\Output;
use Song99Bottles\Song99Bottles;

class Song99BottlesTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function should_song_the_first_sentence() {
    $output = $this->prophesize(Output::class);
    $song = new Song99Bottles($output->reveal());

    $song->sing();

    $firstSentence = '99 bottles of beer on the wall, 99 bottles of beer.';
    $output->sing($firstSentence)->shouldHaveBeenCalled();
  }

  /** @test */
  public function should_song_the_second_sentence() {
    $output = $this->prophesize(Output::class);
    $song = new Song99Bottles($output->reveal());

    $song->sing();

    $secondSentence = 'Take one down and pass it around, 98 bottles of beer on the wall.';
    $output->sing($secondSentence)->shouldHaveBeenCalled();
  }
}