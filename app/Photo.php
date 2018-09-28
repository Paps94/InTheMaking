<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{

  protected $table = 'issue_photos';

  protected $fillable = ['path'];

  protected $baseDir = 'images/issues/photos';

  public function issue()
 {
   /**
   * An Issue has only one photo (screenshot)
   * @return Illuminate\Database\Eloquent\Relations\HasOne
   */

    return $this->belongsTo('App\Issue');

  }

  public static function fromForm(UploadedFile $file)
  {

      $photo = new static;

      $name = time() . $file->getClientOriginalName();

      $photo->path = $photo->baseDir . '/' . $name;

      $file->move($photo->baseDir, $name);

      return $photo;
    }
}
