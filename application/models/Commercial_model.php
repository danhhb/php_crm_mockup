<?php

class Commercial_model extends CI_Model {


	public function get_loans($status)
	{
		$sql = "
			SELECT
				l.id, 
				borrowers.first_name as borrower_fname, 
				borrowers.last_name as borrower_lname,
				l.prod_name,
				lenders.first_name as lender_fname,
				lenders.last_name as lender_lname,
				l.loan_amount,
				users.first_name as representative, 
				borrowers.phone as contact_phone, 
				status_poa.status as status_poa, 
				stages.stage,
				status.status,
				n.note,
				status.id as status_id
			FROM loans AS l
			LEFT JOIN borrowers
				ON l.borrower = borrowers.id
			LEFT JOIN lenders
				ON l.lender = lenders.id
			LEFT JOIN users 
				ON l.representative = users.id
			LEFT JOIN stages 
				ON l.stage = stages.id
			LEFT JOIN status
				ON l.status = status.id
			LEFT JOIN status_poa
				ON l.status_poa = status_poa.id
			LEFT JOIN (
				select notes.note, notes.loan from notes 
				inner join users
					on notes.representative = users.id
				inner join roles 
					on users.user_role = roles.id
				where roles.role = 'Manager'
			) AS n ON n.loan = l.id

			WHERE status.id = ?";

		$query = $this->db->query($sql, array($status));

		return $query->result();

	}


	public function fetch_all()
	{
		$sql = "
			SELECT
				l.id, 
				borrowers.first_name as borrower_fname, 
				borrowers.last_name as borrower_lname,
				l.prod_name,
				lenders.first_name as lender_fname,
				lenders.last_name as lender_lname,
				l.loan_amount,
				users.first_name as representative, 
				borrowers.phone as contact_phone, 
				status_poa.status as status_poa, 
				stages.stage,
				status.status,
				n.note,
				status.id as status_id
			FROM loans AS l
			LEFT JOIN borrowers
				ON l.borrower = borrowers.id
			LEFT JOIN lenders
				ON l.lender = lenders.id
			LEFT JOIN users 
				ON l.representative = users.id
			LEFT JOIN stages 
				ON l.stage = stages.id
			LEFT JOIN status
				ON l.status = status.id
			LEFT JOIN status_poa
				ON l.status_poa = status_poa.id
			LEFT JOIN (
				select notes.note, notes.loan from notes 
				inner join users
					on notes.representative = users.id
				inner join roles 
					on users.user_role = roles.id
				where roles.role = 'Manager'
			) AS n ON n.loan = l.id";

		$query = $this->db->query($sql, array($status));

		return $query->result();
	}

}