<?php
class barang {
    public string $barcode;
    public string $nama;
    public int $stok;

    public function __construct($barcode, $nama, $stok) {
        $this->barcode = $barcode;
        $this->nama = $nama;
        $this->stok = $stok;

    }
    public function isHabis() {
        if ($this->stok <= 10) {
            return "($this->nama) habis loh"; 
        }

        return "barang ($this->nama) masih banyak";
    }
}

$buah = new Barang("123", "buah", 7);
echo $buah->isHabis();

?>
