<?php

namespace App\Helpers;

class helper {

    public static function IDGenerator($model, $trow, $length = 4, $prefix){

        $data = $model::orderBy('id','desc')->first();
        if (!$data){
            $og_length = $length;
            $last_number = '';
        }
        else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $kh_last_number        = ($code/1)*1;
            $increment_last_number = $kh_last_number +1;
            $last_number_length    = strlen($increment_last_number);
            $og_length             = $length - $last_number_length;
            $last_number           = $increment_last_number;
        }
        $khmer = '';
        for($i=0;$i<$og_length;$i++){
            $khmer.="0";
        }
        return $prefix.'-'.$khmer.$last_number;
    }

}
