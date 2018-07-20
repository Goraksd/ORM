<?php
namespace parser\models;
use \Illuminate\Database\Eloquent\Model;
class Parse extends Model
{
	protected $table = 'parse';
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $fillable = [
		'id',
		'url',
		'name',
		'uid',
		'visitors',
		'views',
		'popularity',
	];
}