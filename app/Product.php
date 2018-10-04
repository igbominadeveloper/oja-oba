<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable =[
    	'name','description','price'
    ];

    protected $primaryKey = 'unique_id';

    protected $hidden = ['created_at','updated_at'];

    public function setUniqueIdAttribute()
    {
    	$uniqueId = str_random(10).'-'.random_int(100, 6000).'-'.ucwords(str_random(10));
    	return $this->attributes['unique_id'] = $uniqueId;
    }

    public function getUniqueID(){
        return $this->setUniqueIDAttribute();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
