<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <title>CRM Mockup</title>
  </head>
  <body>
 
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Commercial pipeline</a>
    </nav>
 
	<div class="container-fluid" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-12" align="right">
				<button type="button" class="btn btn-success" onclick="<?php echo base_url()?>commercial/report">Gen. Report</button>
			</div>
		</div>
		
	</div>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">TERMS ACCEPTED</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">APPROVAL ACTIVE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">IN PROCESS</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="Terms Accepted">
     	<table class="table table-hover">
      	  <thead>
      	    <tr>
      	      <th scope="col">#</th>
      	      <th scope="col">Borrower Name</th>
      	      <th scope="col">Deal/Product Name</th>
      	      <th scope="col">Lender</th>
      	      <th scope="col">Loan Amount</th>
      	      <th scope="col">Representative</th>
      	      <th scope="col">Borrower/Affiliate Phone Number</th>
      	      <th scope="col">Current Status/POA</th>
      	      <th scope="col">Stage</th>
      	      <th scope="col">Manager Notes</th>
      	    </tr>
      	  </thead>
      	  <tbody>
      	  <?php if (count($accepted) > 0 ) { ?>
      	  	<?php $num = 1; ?>
      	  	<?php foreach($accepted as $record) { ?>	
	      	    <tr>
	      	      <th scope="row"><?php echo $num; ?></th>
	      	      <td><?php echo $record->borrower_fname.' '.$record->borrower_lname; ?></td>
	      	      <td><?php echo $record->prod_name; ?></td>
	      	      <td><?php echo $record->lender_fname.' '.$record->lender_lname; ?></td>
	      	      <td>&dollar;<?php echo $record->loan_amount; ?></td>
	      	      <td><?php echo $record->lender_fname; ?></td>
	      	      <td><?php echo $record->contact_phone; ?></td>
	      	      <td><?php echo $record->status_poa; ?></td>
	      	      <td><?php echo $record->stage; ?></td>
	      	      <td><?php echo $record->note; ?></td>
	      	    </tr>
	      	<?php $num++; } ?>
		  <?php } ?>		
      	  </tbody>
      	</table> 	
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="Approval Active">
      	<table class="table table-hover">
      	  <thead>
      	    <tr>
      	      <th scope="col">#</th>
      	      <th scope="col">Borrower Name</th>
      	      <th scope="col">Deal/Product Name</th>
      	      <th scope="col">Lender</th>
      	      <th scope="col">Loan Amount</th>
      	      <th scope="col">Representative</th>
      	      <th scope="col">Borrower/Affiliate Phone Number</th>
      	      <th scope="col">Current Status/POA</th>
      	      <th scope="col">Stage</th>
      	      <th scope="col">Manager Notes</th>
      	    </tr>
      	  </thead>
      	  <tbody>
      	   <?php if (count($active) > 0 ) { ?>
      	  	<?php $num = 1; ?>
      	  	<?php foreach($active as $record) { ?>	
	      	    <tr>
	      	      <th scope="row"><?php echo $num; ?></th>
	      	      <td><?php echo $record->borrower_fname.' '.$record->borrower_lname; ?></td>
	      	      <td><?php echo $record->prod_name; ?></td>
	      	      <td><?php echo $record->lender_fname.' '.$record->lender_lname; ?></td>
	      	      <td>&dollar;<?php echo $record->loan_amount; ?></td>
	      	      <td><?php echo $record->lender_fname; ?></td>
	      	      <td><?php echo $record->contact_phone; ?></td>
	      	      <td><?php echo $record->status_poa; ?></td>
	      	      <td><?php echo $record->stage; ?></td>
	      	      <td><?php echo $record->note; ?></td>
	      	    </tr>
	      	<?php $num++; } ?>
		  <?php } ?>
      	  </tbody>
      	</table> 
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="In Process">
      	<table class="table table-hover">
      	  <thead>
      	    <tr>
      	      <th scope="col">#</th>
      	      <th scope="col">Borrower Name</th>
      	      <th scope="col">Deal/Product Name</th>
      	      <th scope="col">Lender</th>
      	      <th scope="col">Loan Amount</th>
      	      <th scope="col">Representative</th>
      	      <th scope="col">Borrower/Affiliate Phone Number</th>
      	      <th scope="col">Current Status/POA</th>
      	      <th scope="col">Stage</th>
      	      <th scope="col">Manager Notes</th>
      	    </tr>
      	  </thead>
      	  <tbody>
      	    <?php if (count($in_process) > 0 ) { ?>
      	  	<?php $num = 1; ?>
      	  	<?php foreach($in_process as $record) { ?>	
	      	    <tr>
	      	      <th scope="row"><?php echo $num; ?></th>
	      	      <td><?php echo $record->borrower_fname.' '.$record->borrower_lname; ?></td>
	      	      <td><?php echo $record->prod_name; ?></td>
	      	      <td><?php echo $record->lender_fname.' '.$record->lender_lname; ?></td>
	      	      <td>&dollar;<?php echo $record->loan_amount; ?></td>
	      	      <td><?php echo $record->lender_fname; ?></td>
	      	      <td><?php echo $record->contact_phone; ?></td>
	      	      <td><?php echo $record->status_poa; ?></td>
	      	      <td><?php echo $record->stage; ?></td>
	      	      <td><?php echo $record->note; ?></td>
	      	    </tr>
	      	<?php $num++; } ?>
		  <?php } ?>
      	  </tbody>
      	</table> 
      </div>
    </div>
 
    <footer class="container">
      <p><center>National Lending Direct</center></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first then Bootstrap JS -->
	<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/jquery.validate.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
  </body>
</html>