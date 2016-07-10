<?php namespace App\Http\Models;

use Validator;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Eloquent {
	use  SoftDeletes;

	protected $guarded 				= array();
	protected $table 				= 'images';
	protected $fillable 			=	[
											'tipe',
											'sumber',
											'owner_id'
										];
	protected $rules				= 	[
											'tipe' 							=> 'required',
											'sumber' 						=> 'required',
										];										
	protected $errors 				=	[];


	protected $appends				=	[
										];

	/* ---------------------------------------------------------------------------- RELATIONSHIP ---------------------------------------------*/
	public function Villa()
	{
	   return $this->belongsTo('App\Http\Models\Villa');
	}		

	/* ---------------------------------------------------------------------------- SCOPE -------------------------------------------------------------------------------*/
    public function scopeSlider($query)
    {
        return $query->where('tipe', 'slider');
    }

    public function scopeCover($query)
    {
        return $query->where('tipe', 'cover');
    }

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