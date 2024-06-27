<?php

class Transaksi extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Transaksi";
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer
        =cs.id_customer")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }
    public function pembayaran($id)
    {
        $where = array('id_rental' => $id);
        $data['title'] = "Pembayaran";
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }
    public function cek_pembayaran()
    {
        $id                 = $this->input->post('id_rental');
        $status_pembayaran  = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran' => $status_pembayaran,
        );

        $where = array(
            'id_rental' => $id
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        redirect('admin/transaksi');
    }
    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->rental_model->downloadPembayaran($id);
        $file = 'assets/upload/' . $filePembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }

    public function transaksi_selesai($id)
    {
        $data['title'] = "transaksi Selesai";
        $where = array('id_rental' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function transaksi_selesai_aksi()
    {
        $id                             =$this->input->post('id_rental');
        $tanggal_pengembalian           =$this->input->post('tanggal_pengembalian');
        $status_rental                  =$this->input->post('status_rental');
        $status_pengembalian            =$this->input->post('status_pengembalian');

        $data = array(
            'tanggal_pengembalian'       =>  $tanggal_pengembalian,
            'status_rental'              =>  $status_rental,
            'status_pengembalian'        =>  $status_pengembalian,
        );

        $where = array(
            'id_rental'  => $id
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    Transaksi Berhasil DiUpdate!
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
            redirect('admin/transaksi');


    }
}
