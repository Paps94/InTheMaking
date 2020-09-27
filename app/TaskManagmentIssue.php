<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TaskManagmentIssue extends Model
{

    protected $dates = ['deadline'];

    protected $fillable = [
      'name',
      'description',
      'priority',
      'deadline'
    ];

    public function photos()
    {

      /**
      * An Issue has many photos (screenshot)
      * @return Illuminate\Database\Eloquent\Relations\HasMany
      */
        return $this->hasMany('App\Photo');
    }

    public function addPhoto(Photo $photo)
    {

        return $this->photos()->save($photo);

    }

    //Added mutator to be able to handle the deadline entered in the wrong format from what SQL stores dates
    function setDeadlineAttribute($date) {

        return $this->attributes['deadline'] = Carbon::parse($date);

    }



}
