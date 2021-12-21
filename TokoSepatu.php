<?php
class TokoSepatu extends CI_Controller
{
    public function index()
    {
    $this->load->view('view-toko-sepatu');
    }
 
    public function cetak()
    {
    $data = [
        'nama' => $this->input->post('nama'),
        'notelp' => $this->input->post('notelp'),
        'merksepatu' => $this->input->post('merksepatu'),
        'ukuran' => $this->input->post('ukuran'),
        'harga' => $this->input->post('harga')
    ];
    if ($this->input->post('merksepatu') == 'Nike') {$data['harga'] = 375000;} 
    elseif ($this->input->post('merksepatu') == 'Addidas') {$data['harga'] = 300000;} 
    elseif ($this->input->post('merksepatu') == 'Kickers') {$data['harga'] = 250000;} 
    elseif ($this->input->post('merksepatu') == 'Eiger') {$data['harga'] = 275000;} 
    elseif ($this->input->post('merksepatu') == 'Bucherri') {$data['harga'] = 400000;}
    
    $this->load->view('view-data-toko', $data);
    }
}
?>