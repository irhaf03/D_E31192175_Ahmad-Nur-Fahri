<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Ahmad Nur Fahri","nim"=>"E31192175"],
			
        ];
        return $data_mahasiswa;
	}
}
?>