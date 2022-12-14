<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveContact extends Model
{
    use HasFactory;
    // protected $table ='save_contacts';
    protected $fillable =['id','name','email','subject','content'];
}
