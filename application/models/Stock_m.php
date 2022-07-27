<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('t_stock');
		if ($id != null) {
			$this->db->where('stock_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get_stock_in()
	{
		$this->db->select('t_stock.stock_id, p_item.barcode, p_item.name as item_name, qty, date, detail, supplier.name as supplier_name, p_item.item_id');
		$this->db->from('t_stock');
		$this->db->join('p_item', 't_stock.item_id = p_item.item_id');
		$this->db->join('supplier', 't_stock.supplier_id = supplier.supplier_id','left');
		$this->db->where('type', 'in');
		$this->db->order_by('stock_id', 'desc');
		$query = $this->db->get();
		return $query;
	}

	public function del($id)
	{
		$this->db->where('stock_id', $id);
		$this->db->delete('t_stock');
	}

	public function add_stock_in($post)
	{
		$params = [
			'item_id' 		=> $post['item_id'],
			'type' 			=> 'in',
			'detail' 		=> $post['detail'],
			'supplier_id' 	=> $post['supplier'] == '' ? null : $post['supplier'],
			'qty' 			=> $post['qty'],
			'date' 			=> $post['date'],
			'user_id' 		=> $this->session->userdata('userid'),
			];
		$this->db->insert('t_stock', $params);
	}

	public function get_stock_out()
	{
		$this->db->from('t_stock');
		$this->db->join('p_item', 't_stock.item_id = p_item.item_id');
		$this->db->where('type', 'out');
		$this->db->order_by('stock_id', 'desc');
		$query = $this->db->get();
		return $query;
	}

	public function add_stock_out($post)
	{
		$params = [
			'item_id' 		=> $post['item_id'],
			'type' 			=> 'out',
			'detail' 		=> $post['detail'],
			'qty' 			=> $post['qty'],
			'date' 			=> $post['date'],
			'user_id' 		=> $this->session->userdata('userid'),
			];
		$this->db->insert('t_stock', $params);
	}
}
	