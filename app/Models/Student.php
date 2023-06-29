<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'fname', 'lname', 'gender', 'status','nationality', 'religion'];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('fname', 'like', '%' . request('search') . '%')
                ->orWhere('lname', 'like', '%' . request('search') . '%')
                ->orWhere('gender', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%')
                ->orWhere('nationality', 'like', '%' . request('search') . '%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
