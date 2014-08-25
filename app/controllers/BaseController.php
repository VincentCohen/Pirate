<?php

class BaseController extends Controller {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    public function __construct()
    {

        /* @var $response Illuminate\Http\Response */
        $this->afterFilter(function($route, $request, $response){

//            var_dump('<pre>after');

//            if (Input::get('format'))
//            {
//                if (Input::get('format') == 'json')
//                {
//
//                    echo 'has json; get contents';
////                    var_dump($response);
//                    var_dump($response->getOriginalContent());
//                }
//            }
//            var_dump($route, $request, $response);
//            die;
        });
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
