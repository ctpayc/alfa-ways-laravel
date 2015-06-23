<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApiTest extends Model {

	use SoftDeletes;
	/**
	 * 
	 */

	protected $table = "apitest";

	protected $fillable = ['json', 'items', 'user_id','somefield'];

	protected $data = ['deleted_at'];
}
