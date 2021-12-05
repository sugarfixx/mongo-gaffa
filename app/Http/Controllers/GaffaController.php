<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/12/2021
 * Time: 00:10
 */

namespace App\Http\Controllers;


use App\Metadata;
use Illuminate\Support\Facades\Storage;

class GaffaController
{
    public function index()
    {
        return response()->json(Metadata::all());
    }

    public function ingestData()
    {
        $json = Storage::disk('local')->get('data.json');
        foreach ($json as $document) {
            Metadata::create([$document]);
        }
    }
}
