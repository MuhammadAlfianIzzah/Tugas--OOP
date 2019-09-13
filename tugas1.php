<?php  //pembuka sintax php

 class mahasiswa {  // pada baris ini ditujukan untuk membuat class/cetak biru/kerangka/hampir mirip dengan function.dimana class ini diberi  nama mahasiswa;

 	public $Nim, $Nama, $prodi,$Asal_Sma; //selanjutnya adalah perintah public dimana didalamnya terdapat variabel nim,nama,asal sma;
 	public function __construct($Nim="Nim",$Nama="Nama",$prodi="prodi",$Asal_Sma="Asal_Sma"){ //pada baris ini kita membuat fungsi contruct yang berguna untuk memberi nilai kepada properti $nim dengan nama ,dan seterusnya
 		$this->Nim =$Nim; //$this digunakan sebagai penunjuk property/method pada class.  pada baris ini memasukan Nim kedalam variabel $nim
 		$this->Nama =$Nama; //pada baris ini memasukan nama kedalam variabel $nama;
 		$this->prodi =$prodi; // pada baris ini memasukan prodi kedalam variabel $prodi
 		$this->Asal_Sma=$Asal_Sma;  //pada baris ini memasukan asal kedalam variabel $asalsma
 	} //baris penutup public fungction contruck
	 public function getInfoMahasiswa(){  //pada baris ini kita membuat sebuah public function/fungsi yang bernama  getinfomahasiswa;
	 	//function berfungsi sebagai menyelesaikan sebuah tugas tertentu, dan merupakan bagian dari program utama;
 		$mhs="Nama : {$this->Nama},Nim : {$this->Nim},Asal_Sma : {$this->Asal_Sma}"; //dibaris ini kita membuat variabel mahasiswa($mhs) 

 		return $mhs; //perintah return berfungsi untuk mengembalikan nilai $mhs/variabel mahasiswa;
 	} //penutup
 } //penutup

class mahasiswastratasatu extends mahasiswa{ //pada baris ini kita membuat sebuah class mahasiswastratasatu yang merupakan hasil gabungan dari class sebelumnya/atau bisa dibilang sebagai pewarisan class dengan menggunakan perintah extends

 	public function getInfoMahasiswa(){ //pada baris kita memanggil kembali/mengaktifkan public function getinfomahasiswa
 		$mhs = "Mahasiswa S1 : ".parent::getInfoMahasiswa();  //pada baris ini kita membuat sebuah statment variabel mahasiswa yang bernilai/berstring mahasiswa satu,dengan parent  getinfo mahasiswa
 		return $mhs; //mengembalikan  variabel mhs/$mhs
 	}
}

class mahasiswastratadua extends mahasiswa{  //pada baris ini kita membuat class baru lagi bernama mahasiswastratadua hasil warisan/extends dari mahasiswa.

	public $asals1; //membuat variabel baru bernama "$asals1"
	public function __construct($Nim, $Nama, $prodi, $Asal_Sma, $asals1){ //memanggil kembali fungsi contruct
		parent:: __construct($Nim,$Nama,$prodi,$Asal_Sma);//untuk menjalankan kembali fungsi contruct/menjalankan constructnya dua kali
		$this->asals1=$asals1;//memasukan nilai asals1 kedalam $asals1
	}
	public function getInfoMahasiswa(){//pada baris kita memanggil kembali/mengaktifkan public function getinfomahasiswa

		$mhs="Mahasiswa S2 :".parent::getInfoMahasiswa()."Asal S1 :{$this->asals1}"; //pada baris ini kita membuat sebuah statment variabel mahasiswa yang bernilai/berstring mahasiswa satu,dengan parent  getinfo mahasiswa
		return $mhs;//mengembalikan variabel mhs;
	}
}

$mahasiswa1 = new mahasiswastratasatu("F1a103032","NATALIS RANSI","MATEMATIKA","SMAN 2 RAHA");//pada baris ini membuat variabel $mahasiswa1 untuk mahasiswastratasatu dengan nilai string (F1A103032 untuk $nim,NATALIS RANSI untuk $nama,dan seterusnya)
$mahasiswa2 = new mahasiswastratadua("F1g119030","Juan antonio","Ilmu Komputer","SMAN 1 OK","UHO");//pada baris ini membuat variabel $mahasiswa2 untuk mahasiswastratadua dengan nilai string (F1g119030 untuk $nim,Juan antonio untuk $nama,dan seterusnya)

echo $mahasiswa1->getInfoMahasiswa(); //pada baris ini kita memprint/menampilkan $mahasiswa1 dengan printah echo dengan menggunakan parent getinfomahasiswa
echo "<br>";//menampilkan enter/baris baru
echo $mahasiswa2->getInfoMahasiswa();//pada baris ini kita memprint/menampilkan $mahasiswa2 dengan printah echo dengan menggunakan parent getinfomahasiswa

 ?> <!-- penutup php -->