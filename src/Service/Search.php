<?php

namespace App\Service;

class Search
{
    public function search_john_mary(array $names): int
    {
        $john=0;
        $mary=0;
        $count=count($names);
        for ($i=0;$i<$count;$i++){
            if(strtolower($names[$i])=='john'){
                $john+=1;
            }
            if(strtolower($names[$i])=='mary'){
                $mary+=1;
            }
        }
        if($john==$mary){
            $search=1;
        }else{
            $search=0;
        }
        return $search;
    }
}