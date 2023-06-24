<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * a task belong to a user
     *
     * @return void
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
