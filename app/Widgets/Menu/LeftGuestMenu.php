<?php namespace App\Widgets\Menu;

use Illuminate\Support\Facades\Lang;

class LeftGuestMenu { 

	/**
	 * [$guestMenuItems items from file loacalization for Menu items names in LeftSideBar]
	 * @var [array]
	 */
	protected $guestMenuItems;

	public function __construct()
	{
		$this->guestMenuItems = ['Main', 'News', 'About', 'Contacts', 'Search'];
	}

	public function render()
	{
		$data = [];
		foreach ($this->guestMenuItems as $key) {
			if (Lang::has('leftmenu.'.$key)) {
				$data[$key] = Lang::get('leftmenu.'.$key);
			}
		}
		return view('leftside/LeftGuestMenu', $data);
	}
}