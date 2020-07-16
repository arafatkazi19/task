<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    protected $fillable=['title','short_description','description','type','file','publication_status'];
}
