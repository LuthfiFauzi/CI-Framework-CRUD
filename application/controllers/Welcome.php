<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data = $this->mymodel->GetSiswa();
		foreach($data as $d){
			echo "Nama : ".$d['Nama']."</br >"; 
			echo "NIM : ".$d['NIM']."</br >"; 
			echo "Kelas : ".$d['Kelas']."</br >"; 
			echo "Jurusan : " .$d['Jurusan']."</br >"; 
			echo "Kontak : " .$d['Kontak']."<hr />"; 
		}
	}
	public function insert(){
		$res = $this->mymodel->InsertData('siswa',array(
			"Id" => "3",
			"Nama" => "Uzi",
			"NIM" => "93783902929",
			"Kelas" => "D3TT-39-03",
			"Jurusan" => "Teknik",
			"Kontak" => "08987653746",
			));
		if($res>=1){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	public function update(){
		$res = $this->mymodel->UpdateData('siswa',array(
			"Nama" => "Upi",
			),array('Id' => '3')
	);
		if($res>=1){
			echo "UPDATE Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	public function delete(){
		$res = $this->mymodel->DeleteData('siswa',array('Id' => "3"));
		if($res>=1){
			echo "HAPUS Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
}
