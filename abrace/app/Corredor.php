<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Corredor extends Model
{
    protected $table = 'corredores';


    protected $fillable = ['nombre', 'apellido', 'horario', 'fono', 'img'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    //Mutador para la img "Para el metodo PUT ES VITAL"
    public function setImgAttribute($img)
    {
        if (!empty($img)) {
            $this->attributes['img'] = Carbon::now()->second . $img->getClientOriginalName();
            $name = Carbon::now()->second . $img->getClientOriginalName();
            \Storage::disk('imgCorredor')->put($name, \File::get($img));
        }
    }


    public static function Corredores(){

        return DB::table('corredores')
            ->select('corredores.*')->get();

    }
}
