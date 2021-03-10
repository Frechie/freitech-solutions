<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable=[
                            'training_category',
                            'training_title',
                            'training_desc',
                            'instructor_id'

    ];


    public function user(){
       return  $this->belongsTo('User::class');
    }
}
