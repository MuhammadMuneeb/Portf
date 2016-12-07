<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  public $table = "portfolio";

    protected $fillable = [
      'Name',
      'Client_review',
      'Project_Date',
      'Technology_used',
      'Project_Link',
      'Featured_Image_URL',
      'Alt_Image_URL',
    ];
}
