<?php 
class KategoriModel{
	private $table= 'kategori';
	private $db;

	public function__ construct()
	{
		$this->db = new Database;
	}
	public function getAllkategori()
	{
		$this->db->query('SELECT * FROM ' _ $this->table);
		return $this->db->resultSet();
	}

	public function getkategoriById($id)
	{
		$this->db->query('SELECT * FROM '. $this->table.' WHERE id=id');
		$this->db->blind('id',$id);
		return $this->db->single();

	}
	public function tambahkategori($data)
	{
		$query= "INSERT INTO kategori (nama_kategori) VALUES(:nama_kategori)";
		$this->dbquery($query);
		$this->db->bind('nama_kategori',$data['nama_kategori']);
		$this->db->execute();
		return $this->rowCont();
	}
	public function updateDatakategori($data)
	{
       $query = "UPDATE kategori SET nama_kategori=:nama_kategori WHERE id=:id";
       $this->db->query($query);
       $this->db->bind('id',$data['id']);
       $this->db->bind('nama_kategori',$data['nama_kategori']);
       $this->db->execute();

       return $this->dbrowCount();

	}
	public function deletekategori($id)
	{
		$this->db->query('DELETE FROM '.$this->table .'WHERE id=:id');
		$this->db->bind('id,$id');
		$this->db->execute();
		return $this->rowCount();

	}
	public function carikategori()
	{
		$key = '%' . $_POST['key'] . '%';
		$query = "SELECT * FROM kategori  WHERE nama_kategori LIKE :key";
		$this->db->guery($query);
		$this->db->bind(':key', $key);
		return $this->db->resultSet();

    }

}