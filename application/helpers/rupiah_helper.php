<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  if (!function_exists('rupiah')) 
  {
    function rupiah($angka)
    {
      if($angka == NULL)
      {
        echo "Belum Diberi Harga";
      }
      else 
      {
        $hasil = number_format($angka,0,',','.');
        $hasil_rupiah = 'Rp'.$hasil.',00';
        return $hasil_rupiah;
      }
    }
  }
?>