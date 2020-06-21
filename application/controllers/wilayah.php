<?php 

class Wilayah extends CI_Controller {
    public function index()
    {
      $data['wilayah'] = $this->m_wilayah->tampil_data()->
      result();

    $this->load->view('templates/header'); 
		$this->load->view('templates/sidebar'); 
		$this->load->view('wilayah', $data);
		$this->load->view('templates/footer'); 
    }
    // public function tambah(){
    // $this->load->view('templates/header'); 
		// $this->load->view('templates/sidebar'); 
		// $this->load->view('wilayah');
    // $this->load->view('templates/footer'); 
    
    
    public function tambah_aksi(){
      $provinsi   = $this->input->post('provinsi');
      $kota       = $this->input->post('kota');
      $pasar      = $this->input->post('pasar');
      $kecamatan      = $this->input->post('kecamatan');
      $jenis      = $this->input->post('jenis');
      $telp      = $this->input->post('telp');

      $data = array( 
        'provinsi'  =>  $provinsi,
        'kota'      =>  $kota,
        'pasar'     =>  $pasar,
        'kecamatan' =>  $kecamatan,
        'jenis'     =>  $jenis,
        'telp'      =>  $telp, 
      );

      $this->m_wilayah->input_data('tb_wilayah',$data);
      redirect('wilayah/index');
    }

    public function hapus ($id)
    {
      $where = array ('id' => $id); 
      $this->m_wilayah->hapus_data($where, 'tb_wilayah');
      redirect('wilayah/index'); 
    }
    public function edit($id){
      $where = array('id' =>$id);
      $data['wilayah']= $this->m_wilayah->edit_data($where,'
      tb_wilayah')->result();
      

    $this->load->view('templates/header'); 
		$this->load->view('templates/sidebar'); 
		$this->load->view('edit', $data);
		$this->load->view('templates/footer'); 
    }

    public function update(){
      $id = $this->input->post('id');
      $provinsi = $this->input->post('provinsi');
      $kota = $this->input->post('kota');
      $pasar = $this->input->post('pasar');
      $kecamatan = $this->input->post('kecamatan');
      $jenis = $this->input->post('jenis');
      $telp = $this->input->post('telp');


      $data = array(
        'provinsi'  => $provinsi,
        'kota'      => $kota,
        'pasar'     => $pasar,
        'kecamatan' =>  $kecamatan,
        'jenis'     =>  $jenis,
        'telp'      =>  $telp, 
      );

      $where = array(
        'id' => $id
      );

      $this->m_wilayah->update_data($where,$data,'tb_wilayah');
      redirect('wilayah/index');
    }

    public function detail($id)
    {
      $this->load->model('m_wilayah');
      $detail = $this->m_wilayah->detail_data($id);
      $data['detail'] = $detail; 

    $this->load->view('templates/header'); 
		$this->load->view('templates/sidebar'); 
		$this->load->view('detail', $data);
		$this->load->view('templates/footer'); 
    }


}