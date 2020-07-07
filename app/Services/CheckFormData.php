<?php

namespace App\Services;

class CheckFormData
{
    public static function checkGender($data)
    {
        if ($data->gender === 0) {
            $gender = '男性';
        } elseif ($data->gender === 1) {
            $gender = '女性';
        }

        return $gender;
    }

    public static function checkAge($data)
    {
        switch ($data->age) {
            case 1:
                $age = '～ 19歳';
                break;
            case 2:
                $age = '20歳 ～ 29歳';
                break;
            case 3:
                $age = '30歳 ～ 39歳';
                break;
            case 4:
                $age = '40歳 ～ 49歳';
                break;
            case 5:
                $age = '50歳 ～ 59歳';
                break;
            case 6:
                $age = '60歳 ～';
                break;
        }

        return $age;
    }
}
