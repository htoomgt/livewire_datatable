<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class FakePerson extends Model
{
    use Searchable;

    public $searchAttribute = ['first_name', 'last_name'];


}
