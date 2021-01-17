<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;

class Members extends Component
{

    public $members,$member_id, $name, $codestudy, $student_number, $research_type, $title,$first_supervisor,
    $second_supervisor,$Aim,$background,$originality,$schedule,$method;
    public $isModal = 0;

  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->members = Member::orderBy('created_at', 'DESC')->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('livewire.members'); //LOAD VIEW MEMBERS.BLADE.PHP YG ADA DI DALAM FOLDER /RESOURSCES/VIEWS/LIVEWIRE
    }

    //FUNGSI INI AKAN DIPANGGIL KETIKA TOMBOL TAMBAH ANGGOTA DITEKAN
    public function create()
    {
        //KEMUDIAN DI DALAMNYA KITA MENJALANKAN FUNGSI UNTUK MENGOSONGKAN FIELD
        $this->resetFields();
        //DAN MEMBUKA MODAL
        $this->openModal();
    }

    //FUNGSI INI UNTUK MENUTUP MODAL DIMANA VARIABLE ISMODAL KITA SET JADI FALSE
    public function closeModal()
    {
        $this->isModal = false;
    }

    //FUNGSI INI DIGUNAKAN UNTUK MEMBUKA MODAL
    public function openModal()
    {
        $this->isModal = true;
    }

    //FUNGSI INI UNTUK ME-RESET FIELD/KOLOM, SESUAIKAN FIELD APA SAJA YANG KAMU MILIKI
    public function resetFields()
    {
       
        $this->name = '';
        $this->codestudy = '';
        $this->student_number = '';
        $this->research_type = '';
        $this->title = '';
        $this->first_supervisor = '';
        $this->second_supervisor = '';
        $this->Aim = '';
        $this->background = '';
        $this->originality = '';
        $this->schedule = '';
        $this->method = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {

        //MEMBUAT VALIDASI
        $this->validate([
            'name' => 'required|string',
            'codestudy' => 'required|string',
            'student_number' => 'required|string',
            'research_type' => 'required|string',
            'title' => 'required|string',
            'first_supervisor' => 'required|string',
            'second_supervisor' => 'required|string',
            'Aim' => 'required|string',
            'background' => 'required|string',
            'originality' => 'required|string',
            'schedule' => 'required|string',
            'method' => 'required|string'
        ]);

        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        

        Member::updateOrCreate(['id' => $this->member_id], [
            'name' => $this->name,
            'codestudy' => $this->codestudy,
            'student_number' => $this->student_number,
            'research_type' => $this->research_type,
            'title' => $this->title,
            'first_supervisor' => $this->first_supervisor,
            'second_supervisor' => $this->second_supervisor,
            'Aim' => $this->Aim,
            'background' => $this->background,
            'originality' => $this->originality,
            'schedule' => $this->schedule,
            'method' => $this->method,
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->member_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {


        $member = Member::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->member_id = $id;
        $this->name = $member->name;
        $this->codestudy = $member->codestudy;
        $this->student_number = $member->student_number;
        $this->research_type = $member->research_type;
        $this->title = $member->title;
        $this->first_supervisor = $member->firsh_supervisor;
        $this->second_supervisor = $member->second_supervisor;
        $this->Aim = $member->Aim;
        $this->background = $member->background;
        $this->originality = $member->originality;
        $this->method = $member->method;
    

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $member = Member::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $member->delete(); //LALU HAPUS DATA
        session()->flash('message', $member->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}
