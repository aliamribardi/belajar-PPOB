<?php

namespace App\Http\Repositories;

use App\Models\Pulsa;
use App\Http\Helpers\PPOB;
use App\Http\Repositories\BaseRepository;

class PulsaRepository extends BaseRepository
{
    protected $pulsa;

    public function __construct(Pulsa $pulsa)
    {
        $this->pulsa = $pulsa;
    }

    public function indexCekHarga()
    {
        $data = new PPOB;
        $a = $data->cekHarga();
        $b = json_decode($a);
        $j = collect($b->message)->groupBy('provider')->all();

        return $j;
    }

    public function detailPulsa($pulsa)
    {
        // dd($pulsa);
        $data = new PPOB;
        $a = $data->cekHarga();
        $b = json_decode($a);
        // $j = [];
        // $p = '';
        // $j = collect($b->message);
        $p = collect($b->message)->where('provider', $pulsa)->where('provider_sub', 'REGULER')->all();

        $pkt = telkomsel($p);


        $arrHelp = array(
            'TELKOMSEL' => 'S',
            'AXIS' => 'AX',
            'TRI' => 'T',
            'XL' => 'X',
            'SMARTFREN' => 'SM',
        );

        dd($arrHelp[$pulsa]);

        // dd($pkt);
    
        // foreach($b->message as $i)
        // {
        //     if( $i->provider == $pulsa && $i->provider_sub == 'REGULER'){
        //         $j[] = $i;
        //     }
        //     // if( $i->provider != $p){
        //     //     $j[] = $i;
        //     // }
        //     // $p = $i->provider;
        // }
        // dd($j);

        return $pkt;
    }
}