<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'fullName',
        'email',
        'phoneNumber',
        'gender',
        'password',
    ];
}
