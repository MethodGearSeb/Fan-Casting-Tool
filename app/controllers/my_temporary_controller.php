<?php
	
	class MyTemporaryController extends BaseController{

		public static function adaptations(){
			View::make('adaptations.html');
		}

		public static function actors(){
			View::make('actors.html');
		}

		public static function thelastofus(){
			View::make('thelastofus.html');
		}

		public static function thesnowman(){
			View::make('thesnowman.html');
		}

		public static function hughjackman(){
			View::make('hughjackman.html');
		}

		public static function kateesackhoff(){
			View::make('kateesackhoff.html');
		}

		public static function maisiewilliams(){
			View::make('maisiewilliams.html');
		}

		public static function michaelfassbender(){
			View::make('michaelfassbender.html');
		}
	}