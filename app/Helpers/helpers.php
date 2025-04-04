<?php

if (!function_exists('clean_html')) {
    function clean_html($content)
    {
        // Buat konfigurasi HTMLPurifier langsung dengan namespace global
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', 'p,b,i,u,a[href|title],ul,ol,li,img[src|alt|width|height]');

        // Inisialisasi purifier dengan konfigurasi
        $purifier = new \HTMLPurifier($config);

        // Bersihkan konten
        return $purifier->purify($content);
    }
}

if (! function_exists('formatPrice')) {
    /**
     * formatPrice
     *
     * @param  mixed $str
     * @return void
     */
    function formatPrice($str) {
        return 'Rp. ' . number_format($str, '0', '', '.');
    }
}

// if (! function_exists('setActive')) {
//     /**
//      * setActive
//      *
//      * @param  mixed $path
//      * @return void
//      */
//     function setActive($path)
//     {
//         return Request::is($path . '*') ? ' active' :  '';
//     }
// }

if (! function_exists('TanggalID')) {

    /**
     * TanggalID
     *
     * @param  mixed $tanggal
     * @return void
     */
    function TanggalID($tanggal) {
        $value = Carbon\Carbon::parse($tanggal);
        $parse = $value->locale('id');
        return $parse->translatedFormat('l, d F Y');
    }
}
