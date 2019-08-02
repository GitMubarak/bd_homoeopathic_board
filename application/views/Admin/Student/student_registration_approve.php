<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
if(isset($institute)) $institute = $institute;
else $institute = '';
?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" style="border:0px solid #000;">
				<h3 class="page-header1" style=""><i class="fa fa-th-list"></i> Registration Approve</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12" style="">
				<ol class="breadcrumb">
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?php //echo site_url($module.'/Home'); ?>"> Home</a></li>
					<li><i class="fa fa-cubes"></i><a href="<?php //echo site_url($module.'/'.$controller); ?>"> New Student Admission</a></li>
					<li><i class="fa fa-th-list"></i> Student Admission</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<section class="panel">
			<!--<header class="panel-heading">
				Create New
			</header>-->
			<div class="panel-body">
				<?php echo form_open('Super_Admin/student_registration_approve'); ?>
					<div class="row form-group">
						<div class="col-md-6">
							<label for="exampleInputEmail1">Institute</label>
							<?php echo form_dropdown('institute_id', $institutes, $institute, 'class="form-control" id="institute_id"'); // ?>
						</div>
						<div class="col-md-6">
							<input type="submit" value="Load Student" class="btn btn-primary" style="margin-top:24px;" />
						</div>
					</div>
					
				<?php echo form_close(); ?>
			</div>
		</section>
	</div>
</div>

<?php //$students = array(); ?>
<?php if(isset($students) && ($students != '')) { ?>
<?php echo form_open('student/ApproveRegistration'); ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<section class="panel">
			<table width="100%" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" >
				<thead>
					<tr>
						<th style="text-align:center">#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Registration No</th>
						<th style="text-align:center">Approve All <input type="checkbox" name="chkApprAll" id="chkApprAll" /></th>
					</tr>
				</thead>
				<tbody>
					<?php $countRow=1; foreach($students as $student) { ?>
					<tr>
						<td align="center"><?php echo $countRow++; ?></td>
						<td><?php echo $student->student_name; ?></td>
						<td><?php echo $student->student_name; ?></td>
						<td><input type="text" name="registration_no<?php echo $student->id; ?>" id="registration_no<?php echo $student->id; ?>" value="" class="form-control" /></td>
						<td align="center"><input class="uk-checkbox" type="checkbox" name="student[]" value="<?php echo $student->id; ?>"></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</div>
	<div class="col-md-6">
		<input type="submit" value="Submit" class="btn btn-primary" style="margin-top:24px;" />
	</div>
</div>
<?php echo form_close(); ?>
<?php } ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#chkApprAll').click(function () {
			//alert('Hi'); 
			$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>