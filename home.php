<?php 

class Home_Controller extends Bas_Controller

{
	public function action_index(){
		return View::make('home.index')
	}
}