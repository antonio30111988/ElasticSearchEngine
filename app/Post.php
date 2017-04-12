<?php

namespace App;

use Elasticquent\ElasticquentTrait;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use ElasticquentTrait;
	
	public $fillable=['title','content','tags'];
	
}
