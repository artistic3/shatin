<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 10, 5, 3',
		'suggestions' => [
			'win' => '1, 4, 10',
			'qin' => '1, 4, 10',
			'trio' => '1, 2, 4, 7, 10, 12',//count trio: 6
			'inter' => '1, 10',
		],
		'win amount' => 73,
		'qin amount' => 286,
		'trio amount' => 1607,
		'place amount' => [
			4 => 26,
			10 => 21.5,
			5 => 52,
		],
		'win inter' => '1',
		'win inter 2' => '1',
		'allValues' => '1, 5, 6, 7, 9, 10',
		'bets' => [
			'place(end-favorites )' => '10',
			'1 won(place bet)' => 215,
		],
		'total bets' => 100,
		'wp' => '1, 10',//count wp: 2
		'total won in race 1' => 115,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 10, 3, 9',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 63.5,
		'qin amount' => 222.5,
		'trio amount' => 895,
		'place amount' => [
			4 => 21.5,
			10 => 27.5,
			3 => 34.5,
		],
		'win inter' => '2, 4, 9',
		'allValues' => '2, 4, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 9',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '9, 4, 1, 8',
		'suggestions' => [
			'win' => '1, 7',
			'qin' => '1, 3, 7, 8',
			'trio' => '1, 3, 7, 8, 11',//count trio: 5
			'inter' => '1',
		],
		'win amount' => 83,
		'qin amount' => 620.5,
		'trio amount' => 826,
		'place amount' => [
			9 => 22,
			4 => 34,
			1 => 18,
		],
		'win inter' => '1, 2, 5, 7, 10',
		'win inter 2' => '1, 7',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 6, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 5, 1, 9',
		'suggestions' => [
			'win' => '1, 2, 4, 6, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 13',//count trio: 10
			'inter' => '1, 6, 11',
		],
		'win amount' => 168,
		'qin amount' => 5059,
		'trio amount' => 3940,
		'place amount' => [
			10 => 33.5,
			5 => 152.5,
			1 => 13,
		],
		'win inter' => '11',
		'win inter 2' => '11',
		'allValues' => '1, 2, 4, 5',
		'bets' => [
			'place(end-favorites )' => '11',
			'place(wp )' => '1',
			'3 won(place bet 1)' => 390,
		],
		'total bets' => 400,
		'wp' => '1',//count wp: 1
		'total won in race 4' => -10,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 11, 10, 12',
		'suggestions' => [
			'win' => '1, 2, 4, 10',
			'qin' => '1, 2, 4, 10, 11',
			'trio' => '1, 2, 4, 6, 10, 11',//count trio: 6
			'inter' => '4, 10',
		],
		'win amount' => 95.5,
		'qin amount' => 800,
		'trio amount' => 960,
		'place amount' => [
			3 => 41,
			11 => 40,
			10 => 18,
		],
		'win inter' => '2',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
		'bets' => [
			'win(union)' => '2, 4, 10, 12',
			'7 won(place bet 10)' => 180,
			'place(end-favorites )' => '12',
		],
		'total bets' => 900,
		'wp' => '4, 10',//count wp: 2
		'total won in race 5' => -720,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '2, 11, 12, 7',
		'suggestions' => [
			'win' => '1, 2, 6, 9, 11',
			'qin' => '1, 2, 6, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 6',
		],
		'win amount' => 35.5,
		'qin amount' => 193.5,
		'trio amount' => 430,
		'place amount' => [
			2 => 14.5,
			11 => 32.5,
			12 => 20,
		],
		'win inter' => '9, 11',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '11, 3, 6, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6',
			'qin' => '1, 2, 3, 4, 5, 6, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 8',//count trio: 7
			'inter' => '6',
		],
		'win amount' => 69,
		'qin amount' => 231,
		'trio amount' => 521,
		'place amount' => [
			11 => 26.5,
			3 => 19,
			6 => 25,
		],
		'win inter' => '1, 3',
		'allValues' => '1, 2, 3, 4, 5',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '5, 4, 1, 12',
		'suggestions' => [
			'win' => '1, 2, 5, 12, 13, 14',
			'qin' => '1, 2, 3, 5, 7, 8, 11, 12, 13, 14',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 12, 13, 14',//count trio: 12
			'inter' => '1, 5',
		],
		'win amount' => 47.5,
		'qin amount' => 222.5,
		'trio amount' => 536,
		'place amount' => [
			5 => 19,
			4 => 24.5,
			1 => 30,
		],
		'win inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 5, 7',//count wp: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '10, 6, 8, 9',
		'suggestions' => [
			'win' => '',
			'qin' => '10',
			'trio' => '7, 10',//count trio: 2
			'inter' => '',
		],
		'win amount' => 24.5,
		'qin amount' => 52.5,
		'trio amount' => 121,
		'place amount' => [
			10 => 13.5,
			6 => 15.5,
			8 => 22,
		],
		'win inter' => '3',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '7, 9, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '2, 9, 4, 1',
		'suggestions' => [
			'win' => '3, 10',
			'qin' => '1, 3, 10, 12',
			'trio' => '1, 3, 8, 10, 12',//count trio: 5
			'inter' => '',
		],
		'win amount' => 69,
		'qin amount' => 149.5,
		'trio amount' => 590,
		'place amount' => [
			2 => 24,
			9 => 17.5,
			4 => 31.5,
		],
		'win inter' => '3, 10',
		'allValues' => '1, 3, 4, 5, 6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -85
//total place end wp: 0
//total place wp: 90
//total sure place: 0
//total win: -400
//total place union: -220
//total: -615
