<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companies';

    protected $primarykey = 'id';
    
    protected $fillable = [
        'razao',
        'fantasia',
        'documento',
        'phone',
        'cell',
        'address',
        'neighborhood',
        'city',
        'cep',
        'uf',
        'email',
        'representante',
        'status',
        'complemento',
        'logo',
        'company_type',
    ];
    public $timestamps = true;

   
    protected $dates = ['deleted_at'];

    


    // ...
}
