<?php 
class BukuModel {
	private $table= 'buku';
	private $db;

	public function__ construct()
	{
		$this->db = new Database;
	}
	public function getAllBuku()
	{
		$this->db->query('SELECT buku.*, kategori.nama_kategori FROM". ' _ $this->table."JOIN kategori ON kategori.id = buku.kategori_id");
		    return $this->db->resultSet();
	}

	public function tambahBuku($data)
	{
		$query= "INSERT INTO buku (judul, penerbit, pengarang, tahun, kategori_id, harga) VALUES(:judul, :penerbit, :pengarang, :tahun, :kategori_id, :harga)";
		$this->db->query($query);

		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);

		$this->db->bind('pengarang', $data['pengarang']);

		$this->db->bind('tahun', $data['tahun']);

		$this->db->bind('kategori_id', $data['kategori_id']);

		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCont();
	}
	public function getBukuById($id)
	{
		$query = "UPDATE buku SET judul=:judul, penerbit=:penerbit, pengarang=:pengarang, tahun=:tahun, kategori_id=:kategori_id, harga=:harga WHERE id=:id";
		$this->db->query($query);

		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);

		$this->db->bind('pengarang', $data['pengarang']);

		$this->db->bind('tahun', $data['tahun']);

		$this->db->bind('kategori_id', $data['kategori_id']);

		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCont();


		
	}

	public function deleteBuku($id)
	{
		$this->db->query('DELETE FROM' .  $this->table .' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->execute();
	}
	public function cariBuku()
	{
		$key = '%' . $_POST['key'] . '%';
		$query = "SELECT buku. *, kategori.nama_kategori FROM buku JOIN kategori ON kategori.id = buku.kategori_id WHERE buku.judul LIKE :key";
		$this->db->query($query);
		$this->db->bind(':key',$key);
		return $this->db->resultSet();
	}

}


	