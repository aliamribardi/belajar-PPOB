<?php

namespace App\Http\Helpers;

class PPOB
{

    public function cekHarga()
    {
        $data = array(
            'inquiry' => 'HARGA', // konstan
            'code' => 'PULSA', // pilihan: pln, pulsa, game
        );
        $url = 'http://portalpulsa.com/api/connect/';

		$header = array(
            'portal-userid:' .config('PPOB.user_id'),
            'portal-key:' .config('PPOB.key'), // lihat hasil autogenerate di member area
            'portal-secret:' .config('PPOB.secret'), // lihat hasil autogenerate di member area
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
		$result = curl_exec($ch);
        return $result;
    }

}