 <?php defined('BASEPATH') or exit('No direct script access allowed');

    class Model extends CI_Model
    {

        var $table = 'candidate_pres';
        var $table1 = 'candidate_wapres';
        var $table_results = 'poll_results';



        public function get_capres()
        {
            $this->db->select('* ');
            $this->db->from('candidate_pres');
            // $this->db->where('active', 1);
            // $this->db->order_by('regional', 'ASC');
            return $this->db->get()->result();
        }


        public function get_cawapres()
        {
            $this->db->select('* ');
            $this->db->from('candidate_wapres');
            // $this->db->where('active', 1);
            // $this->db->order_by('regional', 'ASC');
            return $this->db->get()->result();
        }

        public function save($data, $where)
        {

            $this->db->insert($this->table_results, $data, $where);
            return $this->db->insert_id();
        }
    }
