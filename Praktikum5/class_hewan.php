<<<<<<< HEAD
<?php
    class HewanMamalia{

        public $warna;
        public $namaHewan;
        public $habitat;


        function makan(){
            return "Mamalia makan";
        }

        function Minum(){
            return "Mamalia minum";
        }

        function Menyusui(){
            return "Mamalia menyusui";
        }
    }

    $mamalia = new HewanMamalia();
    echo $mamalia -> namaHewan = "Monyet";
    echo"<br>";
    echo $mamalia -> warna = "Abu-Abu";
    echo"<br>";
    echo $mamalia -> habitat = "Darat";
    echo"<br>";
    echo $mamalia -> Makan();
    echo"<br>";
    echo $mamalia -> Minum();
    echo"<br>";
    echo $mamalia -> Menyusui();


    class kendaraan
    
    {
        public $nama;
        public $warna;
        public $tempatOprasi;
    
        function __construct($nama, $warna, $tempatOprasi)
        {
            $this->nama=$nama;
            $this->warna=$warna;
            $this->tempatOprasi=$tempatOprasi;
        }
    }
    
    $kendaraan = new kendaraan("mobil", "merah", "darat");
    echo $kendaraan->nama;
    echo $kendaraan->warna;
    echo $kendaraan->tempatOprasi;

class Mahasiswa{
    public $namaMahasiswa,$nim,$domisili,$prodi,$ipk;

    function __construct($namaMahasiswa,$nim,$domisili,$prodi,$ipk)
    {
        $this -> namaMahasiswa = $namaMahasiswa;
        $this -> nim = $nim;
        $this -> domisili = $domisili;
        $this -> prodi = $prodi;
        $this -> ipk = $ipk;
    }

    function setPredikatIPK($ipk){
        if ($ipk > 3.5){
            echo "Cumlaude";
        } else {
            echo "you did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("Mahdi Saputra", "0110223058", "depok", " Teknik Informatika", 3.7);

echo "Nama: " . $mahasiswa->namaMahasiswa . "<br>"; 
echo "NIM: " . $mahasiswa->nim . "<br>"; 
echo "Domisili: " . $mahasiswa->domisili . "<br>"; 
echo "Program Studi: " . $mahasiswa->prodi . "<br>"; 
echo "IPK: " . $mahasiswa->ipk . "<br>"; 
echo $mahasiswa->setPredikatIPK($mahasiswa -> ipk);
   
=======
<?php
    class HewanMamalia{

        public $warna;
        public $namaHewan;
        public $habitat;


        function makan(){
            return "Mamalia makan";
        }

        function Minum(){
            return "Mamalia minum";
        }

        function Menyusui(){
            return "Mamalia menyusui";
        }
    }

    $mamalia = new HewanMamalia();
    echo $mamalia -> namaHewan = "Monyet";
    echo"<br>";
    echo $mamalia -> warna = "Abu-Abu";
    echo"<br>";
    echo $mamalia -> habitat = "Darat";
    echo"<br>";
    echo $mamalia -> Makan();
    echo"<br>";
    echo $mamalia -> Minum();
    echo"<br>";
    echo $mamalia -> Menyusui();


    class kendaraan
    
    {
        public $nama;
        public $warna;
        public $tempatOprasi;
    
        function __construct($nama, $warna, $tempatOprasi)
        {
            $this->nama=$nama;
            $this->warna=$warna;
            $this->tempatOprasi=$tempatOprasi;
        }
    }
    
    $kendaraan = new kendaraan("mobil", "merah", "darat");
    echo $kendaraan->nama;
    echo $kendaraan->warna;
    echo $kendaraan->tempatOprasi;

class Mahasiswa{
    public $namaMahasiswa,$nim,$domisili,$prodi,$ipk;

    function __construct($namaMahasiswa,$nim,$domisili,$prodi,$ipk)
    {
        $this -> namaMahasiswa = $namaMahasiswa;
        $this -> nim = $nim;
        $this -> domisili = $domisili;
        $this -> prodi = $prodi;
        $this -> ipk = $ipk;
    }

    function setPredikatIPK($ipk){
        if ($ipk > 3.5){
            echo "Cumlaude";
        } else {
            echo "you did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("Mahdi Saputra", "0110223058", "depok", " Teknik Informatika", 3.7);

echo "Nama: " . $mahasiswa->namaMahasiswa . "<br>"; 
echo "NIM: " . $mahasiswa->nim . "<br>"; 
echo "Domisili: " . $mahasiswa->domisili . "<br>"; 
echo "Program Studi: " . $mahasiswa->prodi . "<br>"; 
echo "IPK: " . $mahasiswa->ipk . "<br>"; 
echo $mahasiswa->setPredikatIPK($mahasiswa -> ipk);
   
>>>>>>> 2f31cf66a704440e3ddc36e556278265235918c7
?>