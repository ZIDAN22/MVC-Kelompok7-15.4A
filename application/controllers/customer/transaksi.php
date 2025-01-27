<?php 
class Transaksi extends CI_Controller{

    public function index(){
        $data['title'] = "Data Transaksi";
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer
        =cs.id_customer AND cs.id_customer='$customer' ORDER BY id_rental DESC")->result();
        $this->load->view('templates_customer/header', $data);
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer');
       
    }

    public function pembayaran($id){
        $data['title'] = "Pembayaran";
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer
        =cs.id_customer AND tr.id_rental='$id' ORDER BY id_rental DESC")->result();
        $this->load->view('templates_customer/header', $data);
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }
    public function pembayaran_aksi(){
        $id                        =$this->input->post('id_rental');
        $bukti_pembayaran         = $_FILES['bukti_pembayaran']['name'];
        if($bukti_pembayaran)
        {
            $config ['upload_path']  = './assets/upload';
            $config ['allowed_types']='jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);
           if($this->upload->do_upload('bukti_pembayaran')){
            $bukti_pembayaran=$this->upload->data('file_name');   
            $this->db->set('bukti_pembayaran', $bukti_pembayaran);
           }else{
                echo $this->upload->display_errors();
           }
        }
        $data = array(
            'bukti_pembayaran'  => $bukti_pembayaran,
        );

        $where = array(
             'id_rental' => $id
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Bukti Pembayaran Anda Berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('customer/transaksi');
    }
}
?>