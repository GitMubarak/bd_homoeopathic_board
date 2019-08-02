<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" style="border:0px solid #000;">
				<h3 class="page-header1" style=""><i class="fa fa-th-list"></i> Student Admission</h3>
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
				<?php echo form_open('student/Insert'); ?>
					<div class="row form-group">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Institute</label>
							<?php echo form_dropdown('institute_id', $institutes, 32, 'class="form-control" id="institute_id" readonly="readonly"'); ?>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Student Name</label>
							<?php echo form_input(array('id'=>'student_name', 'name'=>'student_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Father Name</label>
							<?php echo form_input(array('id'=>'father_name', 'name'=>'father_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Father Profession</label>
							<?php echo form_input(array('id'=>'father_profession', 'name'=>'father_profession', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Mother Name</label>
							<?php echo form_input(array('id'=>'mother_name', 'name'=>'mother_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Guardian Name</label>
							<?php echo form_input(array('id'=>'guardian_name', 'name'=>'guardian_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Relation With Guardian</label>
							<?php echo form_input(array('id'=>'relation_with_guardian', 'name'=>'relation_with_guardian', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Gender</label>
							<?php
							$gender = array( 'M' => 'Male', 'F' => 'Female' );
							echo form_dropdown('gender', $gender, 'M', 'id="gender" class="form-control"');
							?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Year</label>
							<input type="number" id="year" name="year" min="2000" step="1" data-bind="value:year" class="form-control" required />
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Birth Date</label>
							<?php echo form_input(array('id'=>'date_of_birth', 'name'=>'date_of_birth', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Nationality</label>
							<?php echo form_input(array('id'=>'nationality', 'name'=>'nationality', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Religion</label>
							<?php
							$religion = array( 'I' => 'Islam', 'H' => 'Hindu', 'C' => 'Christan', 'B' => 'Buddhist' );
							echo form_dropdown('religion', $religion, 'I', 'id="religion" class="form-control"');
							?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Mobile</label>
							<input type="number" id="mobile" name="mobile" min="0" step="1" data-bind="value:mobile" class="form-control" required />
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Parmanent Address</label>
							<?php echo form_input(array('id'=>'parmanent_address', 'name'=>'parmanent_address', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Present Address</label>
							<?php echo form_input(array('id'=>'present_address', 'name'=>'present_address', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Current Working Company (Name,Address)</label>
							<?php echo form_input(array('id'=>'current_working_company_name_address', 'name'=>'current_working_company_name_address', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Company Permission</label>
							<?php echo form_input(array('id'=>'company_permission', 'name'=>'company_permission', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="ln_solid"></div>
					<div class="form-group col-md-12">
						<?php //echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'btn btn-primary btn-fill')); ?>
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'btn btn-success btn-fill')); ?>
                        </div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</section>
	</div>
</div>