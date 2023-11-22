<?php
class Laundry {
    function hitung_harga($jenis_laundry, $berat_pakaian, $ada_pakaian_dalam = false, $membawa_struk = true)
    {
        $harga_per_kg = 0;
        if ($jenis_laundry == 'setrika') {
            $harga_per_kg = 3500;
        } elseif ($jenis_laundry == 'cuci_setrika') {
            $harga_per_kg = 5000;
        }

        $total_harga = $harga_per_kg * $berat_pakaian;
        if ($ada_pakaian_dalam) {
            $total_harga += 5000;
        }

        if (!$membawa_struk) {
            $total_harga += 10000;
        }
        return $total_harga;
    }
}
?>