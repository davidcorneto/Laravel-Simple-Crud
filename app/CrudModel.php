<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    //
    protected $table = 'crud';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','alamat','pekerjaan'];
    public $timestamps = true;


}
