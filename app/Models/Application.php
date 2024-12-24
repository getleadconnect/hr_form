<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use SoftDeletes;
	
	
	protected $guarded = [];  
	
	protected $primaryKey = 'id';
    protected $table = 'applications';

	
}
