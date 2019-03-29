<?php
/**
 * Created by PhpStorm.
 * User: caruso
 * Date: 3/28/2019
 * Time: 7:53 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class usuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
    public $timestamps = false;

}