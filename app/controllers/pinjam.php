<?php
class pinjam extends Controller{

    public function index(){
        $data['page'] = 'Data pinjam';
        $data['pinjam'] = $this->model('mdl_pinjam')->getAllPinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/Footer');
    }
    public function tambah(){
        $data['page'] = 'Tambah Peminjaman';
        $this->view( 'templates/header', $data);
        $this->view ('pinjam/create'); 
        $this->view ('templates/footer');
    }
    public function simpanPeminjaman(){
       
        if ($_POST['jenis_barang'] == 'pilih') {
            echo "<script>alert('Gagal, Jenis barang belum terpilih');
            window.location.href = '" . BASE_URL . "/pinjam/index' ;
            </script>";
            die;
        }        

        if($this->model('mdl_pinjam')->tambahPeminjaman($_POST) > 0){
            header('location:' . BASE_URL . '/pinjam/index');
            exit;      
        }else{  
            header('location:' .  BASE_URL . '/pinjam/index');    
            exit;
        }
    }
        
    public function edit($id){ 
        $data['page'] = 'Edit Peminjaman';
        $data['pinjam'] = $this->model ('mdl_pinjam')->getBukuById ($id);
        $this->view ('templates/header', $data); 
        $this->view ('pinjam/edit', $data);
        $this->view ('templates/footer');
    }
    public function updatePeminjaman(){
        if ($this->model('mdl_pinjam')->updateDataPeminjaman($_POST) > 0 ){
            header('location: ' . BASE_URL . '/pinjam/index');
            exit;  
        }else{
            header('location: ' . BASE_URL . 'pinjam/index');
            exit;
        }
    }
    public function hapus ($id){
        if ($this->model ('mdl_pinjam')->deletePeminjaman($id)){
            header ('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header ('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }
    public function cari(){
        $data['page'] = 'Data pinjam';
        $data['pinjam'] = $this->model('mdl_pinjam')->cariDataPinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/Footer');
    }
 
}
?>