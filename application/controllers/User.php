<?php
	class user extends CI_Controller{
	
		public function index(){
			$data['daftaruser'] = $this->m_user->tampil_data()->result();
			$this->load->view('v_user',$data);
		}
					
			//user
			public function v_user(){
				$this->load->model('m_user');
				$user = new m_user();
				$data["daftaruser"] = $user->tabelUser();
				$this->load->view('v_user',$data);
			}
			
			public function delete($id_user){
				$this->load->model('m_user');
				$where = array('id_user' => $id_user);
				$this->m_user->deleteData($where,'user');
				$user = new m_user();
				$data["daftaruser"] = $user->tabelUser();
				$this->load->view('v_user',$data);
			}
			
			Public function edit($id_user){
				$this->load->model('m_user');
				$where = array('id_user' => $id_user);
				$data['user'] = $this->m_user->editData($where,'user')->result();
				$this->load->view('v_useredit',$data);
			}
			
			Public Function update(){
				$this->load->model('m_user');
				$id_user = $this->input->post('id_user');
				$nip = $this->input->post('nip');
				$nama = $this->input->post('nama');
				$jk = $this->input->post('jk');
				$jabatan = $this->input->post('jabatan');
				$telp = $this->input->post('telp');
				$username = $this->input->post('username');
				$password = $this->input->post('password');

			 
				$data = array(
					'nip' => $nip,
					'nama' => $nama,
					'jk' => $jk,
					'jabatan' => $jabatan,
					'telp' => $telp,
					'username' => $username,
					'password' => $password

				);
			 
				$where = array(
					'id_user' => $id_user
				);
			 
				$this->m_user->updateData($where,$data,'user');
				redirect('user/v_user');
			}
			

			
			public function userentry(){
				$this->load->view('v_userentry');
			}
		
			public function userentry_action(){
				$nip = $this->input->post('nip');
				$nama = $this->input->post('nama');
				$jk = $this->input->post('jk');
				$jabatan = $this->input->post('jabatan');
				$telp = $this->input->post('telp');
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$data = array(
					'nip' => $nip,
					'nama' => $nama,
					'jk' => $jk,
					'jabatan' => $jabatan,
					'telp' => $telp,
					'username' => $username,
					'password' => $password,
					);
				$this->m_user->entryData($data,'user');
				redirect('user/v_user');
			}
			
			public function v_jsonxml(){
				$this->load->model('m_user');
				$user = new m_user();
				$data["daftaruser"] = $user->tabelUser();
				$this->load->view('v_jsonxml',$data);
			}
			
			public function jsonwrite(){
				$this->load->model('m_user');
				$user = new m_user();
				$data["tabeluser"] = $user->tabelUser();
				//$this->output->set_content_type('application/json')->set_output(json_encode($data));
				header("Content-Type: application/json");
				echo json_encode($data);
			}
			
			public function xmlwrite(){
				$this->load->model('m_user');
				$user = new m_user();
				$data = $user->tabelUser();

				header ("Content-type: text/xml");
	
				$xmluser = "<user>";
				
				for ($i=0; $i < count($data); $i++) {
					$xmluser .= "<datauser>";
						$xmluser .= "<id_user>".$data[$i]->id_user."</id_user>";
						$xmluser .= "<nama>".$data[$i]->nama."</nama>";
						$xmluser .= "<nip>".$data[$i]->nip."</nip>";
						$xmluser .= "<jk>".$data[$i]->jk."</jk>";
						$xmluser .= "<jabatan>".$data[$i]->jabatan."</jabatan>";
						$xmluser .= "<telp>".$data[$i]->telp."</telp>";
						$xmluser .= "<username>".$data[$i]->username."</username>";
					$xmluser .= "</datauser>";
				}
				
				$xmluser .= "</user>";
				$this->output->set_content_type('text/xml')->set_output($xmluser);
			}
			
			public function jsonread(){
				$this->load->view('v_json-read');
			}
		
			public function xmlread(){
				$get_xml = file_get_contents("http://uas-awp2.pe.hu/index.php/welcome/xmltulis");
				$xml=simplexml_load_string($get_xml);

				$data['xml'] = $xml;
				$this->load->view('v_xml-read',$data);
			}

	}
?>