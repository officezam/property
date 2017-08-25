<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;
use Rating;


class RatingModel extends Model
{
    use Rateable;
    /**
     *The attributes that is used to define table name for this model.
     */
    protected $table = "ratings";
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rating','rateable_id' , 'user_id'
    ];




    /*
    * The Function saving data
    * */
    public function store($request)
    {

        if ($this->where('rateable_id', $request->propertyid)->where('user_id', \Auth::id())->first() == true):
            $this->where('user_id', \Auth::id())->where('rateable_id', $request->propertyid)
            ->update(['rating' => $request->rating]);
            //dd($this->averageRating);
            $post = $this->where('rateable_id', '=', $request->propertyid)->first();
            return $post->ratingPercent();
           // dd($post->averageRating);
           // return ratingPercent();
            //return $this->where('rateable_id', '=', $request->propertyid)->first()->averageRating;
        else:
            $this->rating = $request->rating;
            $this->rateable_id = $request->propertyid;
            $this->rateable_type = 'Property';
            $this->user_id = \Auth::id();
            $this->save();
            //dd($this->averageRating);
            $post = $this->where('rateable_id', '=', $request->propertyid)->first();
            return $post->ratingPercent();
            //return $this->where('rateable_id', '=', $request->propertyid)->ratingPercent();
            //return $this->where('rateable_id', '=', $request->propertyid)->first()->averageRating;
        endif;
    }
}
