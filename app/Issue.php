<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

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
}
