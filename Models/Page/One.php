<?php

namespace Models\Page;

use Core\DbModel;
use Helpers\Helpers;

class One /*extends DbModel*/
{
    public function saveList($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        //$Result['Result'] = ($Result['Errors'] == "");
        //Helpers::get_pr('Вроде сохранили');
        return $Result;
    }
}