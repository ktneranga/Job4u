<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $table = 'listings';

    protected $fillable = ['title', 'company', 'website', 'email', 'location', 'description', 'logo','tags'];

    public function scopeFilter($query, array $filters) {
        if(isset($filters['tag'])){
             return $query->where('tags', 'like', '%'. $filters['tag'] .'%');
        }

        if(isset($filters['search'])){
            return $query->where('title', 'like', '%'.$filters['search'].'%')
                ->orWhere('company', 'like', '%'.$filters['search'].'%')
                ->orWhere('description', 'like', '%'.$filters['search'].'%')
                ->orWhere('location', 'like', '%'.$filters['search'].'%');
        }

    }

}
