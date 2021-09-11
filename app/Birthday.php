<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Birthday extends Model
{
  protected $dates = ['birthday'];

  /**
   * The accessors to append to the model's array form.
   *
   * @var array
  */
  protected $appends = ['days_till_birthday'];

  protected $fillable = [
    'name',
    'birthday',
    'gender',
    'relation',
  ];

  //Added mutator to be able to handle the deadline entered in the wrong format from what SQL stores dates
  function setBirthdayAttribute($date) {
      return $this->attributes['birthday'] = Carbon::parse($date);
  }

  public function getDaysTillBirthdayAttribute()
    {
        $birthdayDate = Carbon::parse($this->attributes['birthday'])->year(date('Y'));
        $daysTillBirthday = Carbon::now()->diffInDays($birthdayDate, false);
        if ($daysTillBirthday < 0 ) {
          $nextBirthday = $birthdayDate->addYear();
          $daysTillBirthday = Carbon::now()->diffInDays($nextBirthday, false);
        }
      return $daysTillBirthday;
    }

}
