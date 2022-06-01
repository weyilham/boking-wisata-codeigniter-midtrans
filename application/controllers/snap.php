<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-Ch3-rHUTXb8VN8zS1hCfvbvz', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {

			$data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();

			$nama = $this->input->post('nama');
			$total = $this->input->post('total');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');



		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $total, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $total,
		  'quantity' => 1,
		  'name' => "Pembayaran Pemesanan Tiket"
		);




		// Optional
		$item_details = array ($item1_details);

		// // Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );
		//
		// // Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
		  'first_name'    => $nama,
		  'email'         => $email,
		  'phone'         => $no_hp,
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'day',
            'duration'  => 1
        );

        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry,
						'enabled_payments' 	=> array('bca_va', 'bni_va', 'bri_va')
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
			$data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();
			$result = json_decode($this->input->post('result_data'), true);

    	$data = [
				'order_id' => $result['order_id'],
				'id_pelanggan' => $data['user']['id_pelanggan'],
				'jenis_pembayaran' => $result['payment_type'],
				'bank' => $result['va_numbers'][0]['bank'],
				'va_number' => $result['va_numbers'][0]['va_number'],
				'total_bayar' => $result['gross_amount'],
				'tgl_pesan' => $result['transaction_time'],
				'intruksi' => $result['pdf_url'],
				'status_pembayaran' => $result['transaction_status']
			];

			$this->db->insert('tb_pesanan', $data);
			$this->cart->destroy();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Pemesanan berhasil dibuat, silahkan segera melakukan pembayaran !
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
			 </button>
		 </div>');
			redirect('home/detail_pesanan');

    }
}
