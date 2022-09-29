<?php

use App\Models\Pulsa;

if(! function_exists('telkomsel'))
{
    function telkomsel($paket, $op)
    {
        // $pulsa = [
        //     (object) ['pulsa' => '5.000'],
        //     (object) ['pulsa' => '10.000'],
        //     (object) ['pulsa' => '15.000'],
        //     (object) ['pulsa' => '20.000'],
        // ]; 
        
        $c = strlen($op);
        // dd($c);

        $db = Pulsa::all();

        foreach($paket as $p) {
            if($p->operator_sub == $op) {
                $code[] = $p;
            }
        }

        foreach($code as $cd) {
            // $pulsa[] = (object) ['pulsa' => substr($cd->code,1)];
            $pulsa[] = substr($cd->code,$c);
        }

        foreach($pulsa as $pul) {
            foreach($db as $d) {
                if($pul == $d->pulsa) {
                    $pls[] = (object) ['pulsa' => $d->pulsa, 'harga' => $d->harga];
                }
            }
        }
        
        // dd(collect($pls)->sortBy('pulsa')->all());


        return collect($pls)->sortBy('pulsa')->all();
    }
}

