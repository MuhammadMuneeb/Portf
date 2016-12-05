<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fields = [
      'Name',
      'Client review',
      'Project Date',
      'Technology used',
      'Featued Image',
      'Alt Image'
    ];
}
