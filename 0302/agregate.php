<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 3, 5, 8, 9, 10',
		'unions($10)' => '1, 3, 5, 7, 9, 10',
		'union + favorites' => '1, 3, 5, 7, 8, 9, 10',
		'count union + favorites' => '7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 7, 10, 11',
		'unions($10)' => '1, 4, 7, 10, 11',
		'union + favorites' => '1, 4, 7, 10, 11',
		'count union + favorites' => '5',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 5, 6, 8',
		'qin(union )' => '2, 5, 6, 8',
		'unions($10)' => '1, 2, 5, 6, 8',
		'union + favorites' => '1, 2, 5, 6, 8',
		'count union + favorites' => '5',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 3, 7, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 3, 11, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1, 3, 7, 13',
		'unions($10)' => '3, 7, 12, 13',
		'union + favorites' => '1, 3, 7, 12, 13',
		'count union + favorites' => '5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 6, 10, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 2, 4, 5, 11',
		'unions($10)' => '1, 4, 5, 11',
		'union + favorites' => '1, 2, 4, 5, 11',
		'count union + favorites' => '5',
		'sevens($10)' => '1, 2, 3, 4, 5, 6, 8',
		'count sevens' => '7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 5, 6, 7, 10, 14',
		'unions($10)' => '3, 5, 10, 12',
		'union + favorites' => '3, 5, 6, 7, 10, 12, 14',
		'count union + favorites' => '7',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 1, 2, 3, 5, 11',
		'unions($10)' => '1, 2, 3, 4, 5, 7, 11',
		'union + favorites' => '1, 2, 3, 4, 5, 7, 11',
		'count union + favorites' => '7',
		'qin(union 1020)' => '1, 2, 5, 11',
	],
];
