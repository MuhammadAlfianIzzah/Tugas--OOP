<?php
	class Mahasiswa{
		
			public $Nama, $jurusan, $email, $hobi;
			public function __construct($Nama = "Nama", $jurusan = "Jurusan", $email = "Email", $hobi = "Hobi"){
				$this->Nama = $Nama;
				$this->jurusan = $jurusan;
				$this->email = $email;
				$this->hobi = $hobi;
			
			}
			public function getinfoBook(){
				$bku = "<br>Nama : {$this->Nama}, <br>Jurusan : {$this->jurusan}, <br>Email : {$this->email}, <br>Hobi : {$this->hobi}";
				return $bku;		
			}
	}
	Class MahasiswaSatu extends Mahasiswa {
		public function getinfoBook(){
			$bku = "Mahasiswa I : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class MahasiswaDua extends Mahasiswa{
		public $Prihal;
		public function __construct($Nama, $jurusan, $email, $hobi, $Prihal){
			parent::__construct($Nama, $jurusan, $email,$hobi, $Prihal);
			$this->Prihal = $Prihal;
		}
		public function getinfoBook(){
			$bku = "Mahasiswa II : ".parent::getinfoBook()."<br>Prihal: {$this->Prihal}";
			return $bku;
		}
	}	
	$bku1 = new MahasiswaSatu("Muhammad Alfian Izzah", "Ilmu Komputer", "Alfianizzah6@Gmail.com", "Ngoding");
	$bku2 = new MahasiswaDua("Abdul Wahab", "Ilmu Komputer", "Abdul.dwahab@gmail.com", "Mengibu", "Ini adalah tugas kedua ");
	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();
?>