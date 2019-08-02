<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" style="border:0px solid #000;">
				<h3 class="page-header1" style=""><i class="fa fa-th-list"></i> Student Form Fillup</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12" style="">
				<ol class="breadcrumb">
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?php //echo site_url($module.'/Home'); ?>"> Home</a></li>
					<li><i class="fa fa-cubes"></i><a href="<?php //echo site_url($module.'/'.$controller); ?>"> Manage Examination</a></li>
					<li><i class="fa fa-th-list"></i> Student Form Fillup</li>
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
				<?php echo '<font color="#CC0000">'.$this->session->flashdata('msg').'</font>'; ?>
				<?php echo form_open('student/FormFillup'); ?>
					<input type="hidden" id="student_type" name="student_type" value="" />
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Registration No</label>
							<input type="number" id="registration_no" name="registration_no" min="0" step="1" data-bind="value:registration_no" class="form-control" required />
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">&nbsp;</label><br />
							<label class="btn btn-danger" id="chkRegNo" onclick="javascript: LoadStudentInfo();">Submit</label>
						</div>
					</div>
					<hr />
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Student Name</label>
							<?php echo form_input(array('id'=>'student_name', 'name'=>'student_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Father Name</label>
							<?php echo form_input(array('id'=>'father_name', 'name'=>'father_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Father Profession</label>
							<?php echo form_input(array('id'=>'father_profession', 'name'=>'father_profession', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Mother Name</label>
							<?php echo form_input(array('id'=>'mother_name', 'name'=>'mother_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Guardian Name</label>
							<?php echo form_input(array('id'=>'guardian_name', 'name'=>'guardian_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Last University</label>
							<?php echo form_input(array('id'=>'last_university', 'name'=>'last_university', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Religion</label>
							<?php
							$religion = array( '' => 'Select', 'I' => 'Islam', 'H' => 'Hindu', 'C' => 'Christan', 'B' => 'Buddhist' );
							echo form_dropdown('religion', $religion, '', 'id="religion" class="form-control"');
							?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Nationality</label>
							<?php echo form_input(array('id'=>'nationality', 'name'=>'nationality', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Parmanent Address</label>
							<?php echo form_input(array('id'=>'parmanent_address', 'name'=>'parmanent_address', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<fieldset><legend>If Candidate Participated Any DHMS Exam :</legend>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="exampleInputEmail1">A) Exam Name & Session</label>
								<?php echo form_input(array('id'=>'dhms_exam_name_session', 'name'=>'dhms_exam_name_session', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">B) Center</label>
								<?php echo form_input(array('id'=>'dhms_exam_center', 'name'=>'dhms_exam_center', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">C) Roll</label>
								<?php echo form_input(array('id'=>'dhms_exam_roll', 'name'=>'dhms_exam_roll', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="exampleInputEmail1">D) Year</label>
								<?php echo form_input(array('id'=>'dhms_exam_year', 'name'=>'dhms_exam_year', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
						</div>
					</fieldset>
					
					<fieldset><legend>If Disqualified In Similar Exam :</legend>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="exampleInputEmail1">Exam Name & Session</label>
								<?php echo form_input(array('id'=>'disqualified_exam_name', 'name'=>'disqualified_exam_name', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">Center</label>
								<?php echo form_input(array('id'=>'disqualified_exam_center', 'name'=>'disqualified_exam_center', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">Roll</label>
								<?php echo form_input(array('id'=>'disqualified_exam_roll', 'name'=>'disqualified_exam_roll', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="exampleInputEmail1">Year</label>
								<?php echo form_input(array('id'=>'disqualified_exam_year', 'name'=>'disqualified_exam_year', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">Punisment Type</label>
								<?php echo form_input(array('id'=>'disqualified_punishment', 'name'=>'disqualified_punishment', 'class'=>'form-control', 'required'=>'required')); ?>
							</div>
						</div>
					</fieldset>
					<hr />
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Language</label>
							<?php echo form_input(array('id'=>'language', 'name'=>'language', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Academic Language</label>
							<input type="text" id="academic_language" name="academic_language" class="form-control" required />
						</div>
					</div>
					
					<fieldset><legend>Subjects :</legend>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="exampleInputEmail1">(01)</label>
								<input type="number" id="subject_code_1" name="subject_code_1" min="0" step="1" data-bind="value:subject_code_1" class="form-control" required />
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">(02)</label>
								<input type="number" id="subject_code_2" name="subject_code_2" min="0" step="1" data-bind="value:subject_code_2" class="form-control" required />
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">(03)</label>
								<input type="number" id="subject_code_3" name="subject_code_3" min="0" step="1" data-bind="value:subject_code_3" class="form-control" required />
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="exampleInputEmail1">(04)</label>
								<input type="number" id="subject_code_4" name="subject_code_4" min="0" step="1" data-bind="value:subject_code_4" class="form-control" required />
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">(05)</label>
								<input type="number" id="subject_code_5" name="subject_code_5" min="0" step="1" data-bind="value:subject_code_5" class="form-control" required />
							</div>
							<div class="col-md-4">
								<label for="exampleInputEmail1">(06)</label>
								<input type="number" id="subject_code_6" name="subject_code_6" min="0" step="1" data-bind="value:subject_code_6" class="form-control" required />
							</div>
						</div>
					</fieldset>
					
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

	<script type="text/javascript">
		
		function LoadStudentInfo() {
			
			var registrationNo = $('#registration_no').val();
			
			var dataString = 'registrationNo='+registrationNo;
			
			if(registrationNo!='') {
				$.ajax({	
						type:'POST',
						url:'<?php echo base_url(); ?>/student/LoadStudentInfo/'+registrationNo,
						data:dataString,
						cache:false,
						dataType: 'json',
						success:function(data) { 
							//alert(data);
							//alert(data['student_name']);
							//$('a#actionDelete').parent().parent().fadeOut();
							//window.lcoation.href = c;
							if(data['student_name']!='') {
								$('#registration_no').attr('readonly', true);
								$('#student_name').val(data['student_name']);
								$('#father_name').val(data['father_name']);
								$('#father_profession').val(data['father_profession']);
								$('#mother_name').val(data['mother_name']);
								$('#guardian_name').val(data['guardian_name']);
								$('select#religion').val(data['religion']);
								$('#nationality').val(data['nationality']);
								$('#parmanent_address').val(data['parmanent_address']);
								$('#student_type').val('old');
								$('label#chkRegNo').hide();
							} 
							else {
								//alert('No Data FOund');
								$('#student_name').val('');
								$('#father_name').val('');
								$('#father_profession').val('');
								$('#mother_name').val('');
								$('#guardian_name').val('');
								$('select#religion').val('');
								$('#nationality').val('');
								$('#parmanent_address').val('');
								$('#student_type').val('new');
								$('label#chkRegNo').show().html('Insert as new Student');
							}
						}			
				});
				$('#student_type').val('new');
				return false;
			} else {
				alert('Registration No Error!');
				$('#registration_no').val('').focus();
			}
		}
								 
	</script>