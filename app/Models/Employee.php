<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
          'cid',
          'fname',
          'sname',
          'email',
          'phone',
      ];

    public function customers(){
        return $this->belongsTo('App\Models\Customer', 'id', 'name');
    }

    use HasFactory;

}
