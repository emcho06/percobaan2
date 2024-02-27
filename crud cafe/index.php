<?php 
include('config.php');
include('template/header.php');

$halaman = $_GET['halaman'];

switch ($halaman) {
     case 'daftarMenu':
          include('menu/v_daftarMenu.php');
          break;
     case 'tambahMenu':
          include('menu/v_tambahMenu.php');
          break;   
     case 'simpanMenu':
           include('menu/m_tambahMenu.php');
           break;       
     
     case 'hapusMenu':
           include('menu/m_hapusMenu.php');
           break;  
     case 'ubahMenu':
           include('menu/v_ubahMenu.php');
           break;
      case 'simpanUbah':
            include('menu/m_ubahMenu.php');
            break;   
            //coding menu end
          
            //coding pesanan

     case 'daftarPesan':
          include('pesanan/v_daftarPesan.php');
          break;    
     case 'tambahPesan':
          include('pesanan/v_tambahPesan.php');
          break;
     case 'simpanPesan':
          include('pesanan/m_tambahPesan.php');
          break;
     case 'hapusPesan':
          include('pesanan/m_hapusPesan.php');
          break;
     case 'ubahPesan':
          include('pesanan/v_ubahPesan.php');
          break;
     case 'simpanUbahPesan':
          include('pesanan/m_ubahPesan.php');
          break;                         
     default:

          break;
}

include('template/footer.php');

?>