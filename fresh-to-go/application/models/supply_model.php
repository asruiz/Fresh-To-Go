<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supply_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    function create($data)
    {
        return $this->db->insert('supply', $data);
    }

    function all_products()
    {
    	$show = $this->db->get_where ('supply', array('supply_owner_id !=' => $this->session->userdata('uname') ));

    	//$show = $this->db->get_where('product', array('pro_author' != $this->session->userdata('uname'))  );
    		//$show = $this->db->query('SELECT * FROM product WHERE (pro_author)');

			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} //end if num_rows
    }

    function distinct_products()     //without repeated values
    {
            $this->db->distinct();
            $query = $this->db->query('SELECT DISTINCT cat_name FROM categories');
            return $query->result();
    }

    function showme($supply_category)
    { 
        $query = $this->db->get_where('supply', array('supply_category' => $supply_category));
        return $query->result();        
    }

    function showmesales()
    { 
        $query = $this->db->query('SELECT * FROM supply WHERE (supply_sale IS NOT NULL) AND (supply_sale != 0)');
        return $query->result();            
    }

    function find($id) //this is for find record id->product
    { 
        $code = $this->db->where('id',$id)
        ->limit(1)
        ->get('supply');
        if ($code->num_rows() > 0 )
        {
            return $code->row();
        }else {
            return array();
        }//end if code->num_rows > 0 

    }//end function find

    function edit($id,$data_products)
    {
        //guery update FROM .. WHERE id->products
        return $this->db->where('id',$id)
                ->update('supply',$data_products);
    }

    function delete($id)
    {
        //guery delete id->products
        return $this->db->where('id',$id)
                ->delete('supply');
    }


    function get_categories(){

        $this->db->select('*');
        $this->db->from('categories');
        // $this->db->where('parent_id', 0);

        $parent = $this->db->get();
        
        $categories = $parent->result();
        $i=0;
        foreach($categories as $p_cat){

            // $categories[$i]->sub = $this->sub_categories($p_cat->cat_id);
            $i++;
        }
        return $categories;
    }
}
?>