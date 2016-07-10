<?php namespace App\Http\Models;

use Validator;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Villa extends Eloquent {
	use  SoftDeletes;

	protected $guarded 				= array();
	protected $table 				= 'villas';
	protected $fillable 			=	[
											'nama',
											'deskripsi',
											'slug'
										];
	protected $rules				= 	[
											'nama' 								=> 'required',
											'deskripsi' 						=> 'required',
											'slug'                      		=> 'required|max:255',
										];										
	protected $errors 				=	[];


	protected $appends				=	[
										];

	/* ---------------------------------------------------------------------------- RELATIONSHIP ---------------------------------------------*/
	public function Image()
	{
	   return $this->hasOne('App\Http\Models\Image','owner_id');
	}
	public function Images()
	{
	   return $this->hasMany('App\Http\Models\Image','owner_id');
	}	

	/* ---------------------------------------------------------------------------- SCOPE -------------------------------------------------------------------------------*/

	/* ---------------------------------------------------------------------------- ERRORS ----------------------------------------------------------------------------*/
	/**
	 * return errors
	 *
	 * @return MessageBag
	 * @author 
	 **/
	function getError()
	{
		return $this->errors;
	}	
}