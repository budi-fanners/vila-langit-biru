<?php 
namespace App\Http\Controllers\Frontend;

use Route;

use App\Http\Models\Villa;
use App\Http\Models\Image;

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
		//get data
		$villas 									= villa::with(['image' => function ($q) {
															$q->cover();
														}])
														->get();

		$sliders 									= Image::slider()
														->get();

        //page datas
        $this->page_datas->villas	                = $villas;
        $this->page_datas->sliders	                = $sliders;

        //generate view
        $view_source                                = $this->page_attributes->source . '.home';
        $route_source                               = route(Route::CurrentRouteName(),[]);

        return $this->generateView($view_source, $route_source);   
	}
}
