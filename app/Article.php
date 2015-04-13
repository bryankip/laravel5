<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model {
  
  protected $fillable=[
      'title',
      'body',
      'published_at',
      'user_id'
  ];
	//
  //Converting db field publised_at to a Carbon instance
  protected $dates=['published_at'];
  
  //changing the field data before it is pushed to db. format set[fieldname]Attribute
  public function setPublishedAtAttribute($date){
    
    $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);

  }
 //Example of a scope that is used in ArticlesControllers published()
// Format scope[function in Controller]($query)
  public function scopePublished($query){
   
   $query->where('published_at','<=',Carbon::now());

  }

  public function scopeUnPublished($query){
   
   $query->where('published_at','>=',Carbon::now());

  }
   /*

    Articles is owned by the user

   */
  public function user(){
  
   return $this->belongsTo('APP\User');

  }

}
