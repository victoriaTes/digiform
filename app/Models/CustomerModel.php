<?php

namespace App\Models\CustomerModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerModel extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $primaryKey = 'id_request';
}
