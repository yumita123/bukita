p<?php
class Kategori extends coonroller{
	public function index()
	{
		$data['title'] = 'Data kategori';
		$data['kategori'] = $this->model{'kategoriModel'}->getAllkategori();
		$this->view('templates/header',$data);
		$this->view('templates/sidebar',$data);
		$this->view('kategori/index',$data);
		$this->view('templates/footer');
	}
	public function cari
	{

	
       {}
       public function edit($id)
          $data['title'] = 'Detail kategori';
          $data['kategori'] = $this->model('kategoriModel')->getkategoriById($id);
          $this->view('templates/header', $data);
          $this->view('templates/sidebar', $data);
          $this->view('kategori/edit',$data);
          $this->view('templates/footer');


       }

       public function tambah(){
       	{
       		$data['title'] = 'Tambah kategori';
       		$this->view('templates/header',$data);
       		$this->view('templates/sidebar',$data);
       		$this->view('kategori/create', $data);
       		$this->view('temlates/footer');
       	}

       }

       public function simpanKategori(){
       	{
       		if($this->model('KategoriModel')->tambahkategori($_POST) > 0 ){
       			Flasher::setMessage('Berhasil','ditambahkan','succes');
       			header('location: '. base_url .'/kategori');
       			exit;
       		}else{
       			Flase::setMessage('Gagal','ditambahkan','danger');
       			header('location:'. base_url .'/kategori');
       			 exit;

       		}
       	}

       }

       public function updatekaategori()
       {

       	 if( $this->model('kategoriModel')->updateDatekategori($_POST) > 0 ){
       	 	Flasher::setMessage('Berhasil','diupdate','succees',');
       	 	headerr('location: base_url . '/kategori');
       	 	exit;
       	 }else{
       	 	flasher::setMessage('Gagal','diupdate','danger');
       	 	header('location:'. base_url.'/kategori');
       	 	exit; 

      }

   }

       public function hapus($id)
       {

         if( $this->model('kaategoriModel')->deleteKategori($id)> 0){
            Flasher::setMessage('Berhasil','dihapus','succes');
            header(location: '.base_url .'/kategori);
            exit;
         }else{
            Flasher::setMessage('Gagal','dihapus','denger');
            header('location: '. base_url.'/kategori');
            exit;
         }
         public functioon cari()
         {
            $data['title'] = 'Data kategori';
            $data['kategori'] = $this->model('KategoriModel')->carikaategori();
            $data['key'] = $_POST['key'];
            $this->view('templates/header',$data);
            $this->view('templates/sidebar',$data);
            $this->view('kategori/index',$data);
            $this->view('templates/footer');
         }



       }
	}
