<?php
/********DOKUMENTACIJA

https://github.com/elasticquent/Elasticquent
http://fullstackstanley.com/read/simple-search-with-laravel-and-elasticsearch

ELATIC CLIENT :https://michaelstivala.com/learning-elasticsearch-with-laravel/

slijedi:*** http://itsolutionstuff.com/post/how-to-use-elasticsearch-from-scratch-in-laravel-5example.html

NAPREDNI QUERY BUILDER ZA ELOQUENT https://github.com/basemkhirat/elasticsearch

********/


namespace App;

use Elasticquent\ElasticquentTrait;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use ElasticquentTrait;
	
	public $fillable=['title','content','tags'];
	
}
