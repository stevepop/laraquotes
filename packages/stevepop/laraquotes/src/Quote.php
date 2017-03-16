<?php

namespace Stevepop\Laraquotes;

use Illuminate\Support\Collection;

class Quote {
	public static function fetch() {
		return Collection::make([
			'The most technologically efficient machine that man has ever invented is the book. - Northrop Frye',
			'Just because something doesn’t do what you planned it to do doesn’t mean it’s useless. - Thomas Edison da Vinci',
			'It has become appallingly obvious that our technology has exceeded our humanity. - Albert Einstein',
			'One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man. - Elbert Hubbard',

			'Technology is a word that describes something that doesn’t work yet. - Douglas Adams',
			'All this modern technology just makes people try to do everything at once. - Bill Watterson',
			'We are stuck with technology when what we really want is just stuff that works. - Douglas Adams',
			'Humanity is acquiring all the right technology for all the wrong reasons. - R. Buckminster Fuller',
			'It’s supposed to be automatic, but actually you have to push this button. - John Brunner',
			'Genius is one percent inspiration and ninety-nine percent perspiration. - Thomas Edison',
			'Computer science is no more about computers than astronomy is about telescopes. - Edsger Dijkstra',
		])->random();
	}
}