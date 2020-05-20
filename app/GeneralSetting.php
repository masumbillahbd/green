<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable =['site_url','title','meta_description','meta_keywords','meta_author','address','copy_right'];
}
