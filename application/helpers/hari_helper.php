<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  if(!function_exists('hari'))
  {
    function hari($tgl_pelaksanaan_berikutnya)
    {
      $ubah = gmdate($tgl_pelaksanaan_berikutnya, time()+60*60*8);
      if($ubah == "0000-00-00" || $ubah == NULL)
      {
          echo "Belum Dijadwalkan";
      }
      else 
      {
        $NOW = date("Y-m-d");
        $date1 = $NOW;
        $date2 = $ubah;

        $diff = strtotime($date2) - strtotime($date1);

        // $years = floor($diff / (365*60*60*24));
        // $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        // $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hari = floor($diff / (24*60*60));
        
        if ($hari > 30)
        {
          $hasil_hari = '<div class="badge badge-success" style="font-size:80%; line-height:2;">'.  $hari.' hari lagi </div>';
        }
        else if ($hari > 7)
        {
          $hasil_hari = '<div class="badge badge-warning" style="font-size:80%; line-height:2;">'.  $hari.' hari lagi </div>';
        }
        else if ($hari > 0)
        {
          $hasil_hari = '<div class="badge badge-danger" style="font-size:80%; line-height:2;">'.  $hari.' hari lagi </div>';
        }
        else if ($hari == 0)
        {
          $hasil_hari = '<div class="badge badge-info" style="font-size:80%; line-height:2;"> Hari Ini </div>';
        }
        else 
        {
          $hasil_hari = '<div class="badge badge-secondary" style="font-size:80%; line-height:2;"> Terlewat </div>';
        }
        // $hasil_hari = $hari.' hari lagi';
        // $hasil_hari = $years.' tahun '.$months.' bulan '.$days.' hari lagi';
        return $hasil_hari;
      }
    }
  }

?>

