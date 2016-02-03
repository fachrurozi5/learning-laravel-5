<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at'
	];

	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::pasre($date);
	}

}
