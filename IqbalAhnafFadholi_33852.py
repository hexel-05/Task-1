paket_wifi = ["10mb" , "20mb" , "30mb"] # variabel dengan paket wifi yang ada

print("\nList paket wifi yang tersedia : ") # Menampilkan menu paket yang tersedia
for pkt in paket_wifi:
    print(f"- {pkt}")

pilih_paket = input("\nPilih paket anda : ") # variabel dengan input untuk mengisi pilihan paket yang ingin di pilih

def main(): # membuat sebuah fungsi
    for paket in paket_wifi: # perulangan agar paket_wifi terdapat dalam daftar
        if paket == pilih_paket: # untuk mengecek kondisi apakah paket tersedia
            print(f"\nAnda memilih paket {pilih_paket}") # text yang akan muncul jika paket tersedia di daftar
            break # berhenti jika sudah benar kondisinya
    else: # jika paket tidak dalam daftar , maka muncul text tidak tersedia
        print(f"\nPaket tidak tersedia") # text yang akan muncul jika paket tidak tersedia

    
main() # memanggil sebuah fungsi agar berjalan