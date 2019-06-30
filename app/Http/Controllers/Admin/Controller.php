<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use App\Services\StringService;

class Controller extends BaseController
{
    /**
     *
     * @var $users
     */
    protected $name;
    protected $model;


    /**
     *
     * @return void
     */
    public function __construct()
    {
        $currentURL = URL::current();
        // $slag = explode("/", $currentURL)[6];
        $slag = StringService::get_string_between($currentURL, 'admin/', '/'); 
        
        if (!empty($slag)) {
            $this->name = $slag;
            $model = 'App\\Models\\' . ucfirst($slag);
            $this->model = new $model();
        }
    }

    /**
     * Validate Rules
     *
     * @param $request
     * @return array
     */
    public function validateRule(Request $request)
    {
        return $request->validate( $this->model->getValidateRules());
    }
}

           