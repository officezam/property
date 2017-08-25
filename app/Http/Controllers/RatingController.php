<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RatingModel;

class RatingController extends Controller
{

    public function __construct()
    {
        $this->RatingModel = new RatingModel();
    }



    public function store(Request $request)
    {
        $Rating =  $this->RatingModel->store($request);
        //dd($Rating);
       echo $Rating;
    }


}
