<?php

namespace App;

use App\Exceptions\UserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'text',
    ];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function author(User $author)
    {
        if ($this->trashed()) {
            return null;
        }

        if(empty($this->users->where('id' , $author->id))){
            return false;
        }

        return true;
    }
}
