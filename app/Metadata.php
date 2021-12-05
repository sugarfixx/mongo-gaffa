<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/12/2021
 * Time: 00:03
 */

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Metadata extends Model
{
    protected $collection = 'metadata_model';
}
