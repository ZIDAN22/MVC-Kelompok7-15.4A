<?php

class data_tipe extends CI_Controller{

    public function index(){
        $data['title'] = "Data Tipe";
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_tipe', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_tipe(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_tipe');
        $this->load->view('templates_admin/footer');
    }
    public function tambah_tipe_aksi()
    {
        $this->_rules();
        if($this->form_validation->run()==FALSE){
                $this->tambah_tipe();
        }else{
            $kode_tipe          = $this->input->post('kode_tipe');
            $nama_tipe          = $this->input->post('nama_tipe');

            $data = array(
                'kode_tipe'         => $kode_tipe,
                'nama_tipe'         => $nama_tipe,
            );
            $this->rental_model->insert_data($data, 'tipe');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Data Tipe Berhasil Ditambahkan!
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
            redirect('admin/data_tipe');
        }
    }
    
    public function update_tipe($id){
        $where = array('id_tipe' => $id);
        $data['tipe'] = $this->db->query("SELECT * FROM tipe WHERE id_tipe='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_tipe', $data);
        $this->load->view('templates_admin/footer');

    }

    public function update_tipe_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->update_tipe;
        }else{
                $id                =$this->input->post('id_tipe');
                $kode_tipe         =$this->input->post('kode_tipe');
                $nama_tipe         =$this->input->post('nama_tipe');

                $data = array (
                    'kode_tipe' => $kode_tipe,
                    'nama_tipe' => $nama_tipe,
                );
                $where = array(
                    'id_tipe' => $id
                );

                $this->rental_model->update_data('tipe', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Data Tipe Berhasil DiUpdate!
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
                redirect('admin/data_tipe');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_tipe', 'kode tipe', 'required');
        $this->form_validation->set_rules('nama_tipe', 'nama tipe', 'required');
    }

    public function delete_tipe($id)
    {
        $where = array('id_tipe'=> $id);
        $this->rental_model->delete_data($where, 'tipe');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    Data Tipe Berhasil DiHapus!
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
            redirect('admin/data_tipe');
    }

}

?>