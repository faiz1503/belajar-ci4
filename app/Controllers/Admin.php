<?php namespace App\Controllers;

class Admin extends BaseController
{

	public function home()
	{
		$data = [
			'title' => 'Home',
			'content' => 'admin/home/index'
		];
		return view('_layout/v_wrapper', $data);
	}

	public function testimonial()
	{
		$data = [
			'title' => 'Testimonial',
			'content' => 'admin/testimonial/index'
		];
		return view('_layout/v_wrapper', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Create Testimonial',
			'content' => 'admin/testimonial/create'
		];
		return view('_layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
