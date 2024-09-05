<?php
$paket_wifi = array("10mb" , "20mb" , "30mb"); # variabel paket yang ada
$pilihan = 2; # pilihan paket yang akan di pilih

echo "Pilihan paket yang ada : "; #Menampilkan daftar paket yang ada
foreach ($paket_wifi as $paket) { #Menampilkan daftar paket yang ada
    echo "<br>"."- $paket"; #Menampilkan daftar paket yang ada
}

function cekPaket($pilihan) { # Membuat sebuah fungsi
    if($pilihan === 1) { # Jika pilihan 1 maka memilih paket 10mb
        echo "<br>"."Anda memilih paket 10mb"; # text yang akan muncul
    } elseif ($pilihan === 2) { # jika pilihan 2 maka memilih paket 20mb
        echo "<br>"."Anda memilih paket 20mb"; # text yang akan muncul
    } elseif ($pilihan === 3) { # jika pilihan 3 maka memilih paket 30mb
        echo "<br>"."Anda memilih paket 30mb"; # text yang akan muncul
    } else { # jika yang dipilih tidak ada maka akan error
        echo "<br>"."Error... Paket tidak tersedia"; # text yang akan muncul
    }
}

cekPaket($pilihan) # memanggil fungsi agar kode berjalan

?>