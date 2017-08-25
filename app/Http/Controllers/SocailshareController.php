<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyModel;
use Chencha\Share\Share;
use Illuminate\Support\Facades\Redirect;


class SocailshareController extends Controller
{

    public function __construct()
    {
        $this->Property = new PropertyModel();
    }

    public function twitter($properttyid)
    {
        $property = $this->Property->find($properttyid);
        $link =  url('/').'/property-detail/'.$property->id.'/'.$property->title;
        $url =  \Share::load($link, $property->description)->services('twitter');

        return redirect($url['twitter']);
    }



    public function facebook($properttyid)
    {
        $property = $this->Property->find($properttyid);
        $link =  url('/').'/property-detail/'.$property->id.'/'.$property->title;
        $url =  \Share::load($link, $property->description)->services('facebook');

        return redirect($url['facebook']);
    }



    public function gplus($properttyid)
    {
        $property = $this->Property->find($properttyid);
        $link =  url('/').'/property-detail/'.$property->id.'/'.$property->title;
        $url =  \Share::load($link, $property->description)->services('gplus');

        return redirect($url['gplus']);
    }

    public function pinterest($properttyid)
    {
        $property = $this->Property->find($properttyid);
        $link =  url('/').'/property-detail/'.$property->id.'/'.$property->title;
        $url =  \Share::load($link, $property->description)->services('pinterest');

        return redirect($url['pinterest']);
    }

}
