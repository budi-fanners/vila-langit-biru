<?php 
namespace App\Http\Controllers\Frontend;

use Route;

use App\Http\Controllers\BaseController;

/**
 * Handle Product resource
 * 
 * @author budi
 */
class HomeController extends BaseController
{
	public function __construct()
	{
		parent::__construct();

		$this->page_attributes->title 				= 'Home';
		$this->page_attributes->source 				= 'frontend.pages';
	}

	/**
	 * Display Homepage
	 * 
	 */
	public function home()
	{
        //generate view
        $view_source                                = $this->page_attributes->source . '.home';
        $route_source                               = route(Route::CurrentRouteName(),[]);

        return $this->generateView($view_source, $route_source);   
	}
}
