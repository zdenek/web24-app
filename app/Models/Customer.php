<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','city','NIP','zipcode'];

    use HasFactory;

    public function empoloyees(){
        return $this->belongsTo('App\Models\Employee', 'id', 'fname', 'sname');
    }
}
