<?php

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$this->template->content = View::forge('home/index');
	}

	public function action_404()
	{
		$this->template->content = View::forge('home/404');
	}

}
