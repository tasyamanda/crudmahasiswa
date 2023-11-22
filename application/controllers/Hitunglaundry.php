<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hitunglaundry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('laundry');
    }

    function index()
    {
        $ani = $this->laundry->hitung_harga('setrika', 6.5, false, true);
        $ina = $this->laundry->hitung_harga('cuci_setrika', 8, true, true);
        $nia = $this->laundry->hitung_harga('setrika', 3.5, false, false);

        echo 'Total harga yang harus dibayar Ani: Rp. ' . $ani . '<br>';
        echo 'Total harga yang harus dibayar Ina: Rp. ' . $ina . '<br>';
        echo 'Total harga yang harus dibayar Nia: Rp. ' . $nia;
    }
}

?>