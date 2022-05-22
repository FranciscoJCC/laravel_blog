<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'body',
        'iframe',
        'image',
        'user_id',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }

    //Un post pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Mutator, para mostrar un extracto del body del post
    public function getGetExcerptAttribute(){
        return substr($this->body, 0, 140);
    }

}
