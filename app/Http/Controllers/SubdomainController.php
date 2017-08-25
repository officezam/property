<?php

namespace App\Http\Controllers;

use Request;
use App\User;


class SubdomainController extends Controller
{

    /*
     *
     * Contsruct Load Class Object
    * */

    public function __construct()
    {
        $this->User = new User();
    }


    /*
     * Get UserNAme
     * Check This Username ExistorNot
     * */
    public function UserName()
    {

        $server = explode('.', Request::server('HTTP_HOST'));
        echo $server[0];exit;

    }
}
