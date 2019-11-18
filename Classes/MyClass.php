<?php

namespace Classes;

class MyClass{

    public function getGrade($val){
        if($val > 90){
            return 'A';
        }else if ($val > 70){
            return 'B';
        }else{
            return 'C';
        }
    }

    public function getValue($val){
        $i = 1;

        if($val > 10){
            $i = 10;
        }

        return $i;
    }

}
