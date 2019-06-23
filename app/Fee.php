<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public $primaryKey = 'fee_id';
    public $foreignKey = 'student_id';
    public function students(){
        return $this->belongsTo('App\Student','student_id','student_id');
    }
}
