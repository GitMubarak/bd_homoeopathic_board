<!--<h1>Here display student admission list</h1>-->
<!--<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Design <small>different form elements</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li>
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">Settings 1</a>
							</li>
							<li>
								<a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
	
			<div class="x_content">
			<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
				
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							First Name <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div id="gender" class="btn-group" data-toggle="buttons">
								<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
								</label>
								<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" name="gender" value="female"> Female
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-primary">Cancel</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				
				</form>
			</div>
		</div>
	</div>
</div>-->


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6" style="border:0px solid #000;">
				<h3 class="page-header1" style=""><i class="fa fa-th-list"></i> Student Admission</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6" style="border:0px solid #000; text-align:right; padding:5px 10px 2px;">
				<a href="<?php //echo site_url($module.'/'.$controller.'/add'); ?>" class="btn btn-info btn-fill"><i class="fa fa-refresh"></i></a>
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
				<?php echo form_open(); ?>
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Institute</label>
							<?php echo form_dropdown('category_id', '', '', 'class="form-control" id="category_id" required="required"'); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Student Name</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Father Name</label>
							<?php echo form_input(array('id'=>'item_details', 'name'=>'item_details', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Father Profession</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Mother Name</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Guardian Name</label>
							<?php echo form_input(array('id'=>'item_details', 'name'=>'item_details', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Relation With Guardian</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Gender</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Roll</label>
							<?php echo form_input(array('id'=>'item_details', 'name'=>'item_details', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Year</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Birth Date</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Nationality</label>
							<?php echo form_input(array('id'=>'item_details', 'name'=>'item_details', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Religion</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Parmanent Address</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Present Address</label>
							<?php echo form_input(array('id'=>'item_details', 'name'=>'item_details', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Current Working Company (Name,Address)</label>
							<?php echo form_input(array('id'=>'item_details', 'name'=>'item_details', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Company Permission</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Mobile</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Status</label>
							<?php echo form_input(array('id'=>'item_name', 'name'=>'item_name', 'class'=>'form-control', 'required'=>'required')); ?>
						</div>
					</div>
					
					<div class="ln_solid"></div>
					<div class="form-group col-md-12">
						<?php //echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'btn btn-primary btn-fill')); ?>
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</section>
	</div>
</div>