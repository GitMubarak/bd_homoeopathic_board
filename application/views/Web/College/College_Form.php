<div class="container">
    <div class="row" id="collegeRegistrationDiv">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <?php
            $message = $this->session->userdata('message');
            if ($message) {
                ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> 
                    <?php
                    echo $message;
                    $this->session->unset_userdata('message');
                    ?>
                </div>
            <?php } ?>

            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Collage Registration</legend>
                <div class="control-group">
                    <form action="<?php echo base_url(); ?>College/store_registration_info" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Collage Name</label>
                            <div class="col-sm-10">
                                <input name="college_name" type="text" class="form-control" placeholder="College Name">                                
                                <a style="color: red;"><?php echo form_error('college_name'); ?></a>                               
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Reg. No.</label>                            
                            <div class="col-sm-10">

                                <input name="registration_number" type="number" class="form-control" placeholder="Registration Number">
                                <a style="color: red;"><?php echo form_error('registration_number'); ?></a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" placeholder="Email Address">
                                <a style="color: red;"><?php echo form_error('email'); ?></a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input name="phone" type="number" class="form-control" placeholder="Phone Number">
                                <a style="color: red;"><?php echo form_error('phone'); ?></a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Division</label>
                            <div class="col-sm-10">
                                <select name="division_id" class="form-control">
                                    <option selected="" disabled="true">Select Division</option>
                                    <?php foreach ($divisions as $division) { ?>
                                        <option value="<?php echo $division->id; ?>"><?php echo $division->name . ' - ' . $division->bn_name; ?></option>
                                    <?php } ?>
                                </select>
                                <a style="color: red;"><?php echo form_error('division_id'); ?></a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">District</label>
                            <div class="col-sm-10">
                                <select name="district_id" class="form-control">
                                    <option disabled="true" selected="">Select District</option>
                                    <?php foreach ($districts as $district) { ?>
                                        <option value="<?php echo $district->id; ?>"><?php echo $district->name . ' - ' . $district->bn_name; ?></option>
                                    <?php } ?>
                                </select>
                                <a style="color: red;"><?php echo form_error('district_id'); ?></a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upazila</label>
                            <div class="col-sm-10">
                                <select name="upazila_id" class="form-control">
                                    <option disabled="true" selected="">Select Upazila</option>
                                    <?php foreach ($upazilas as $upazila) { ?>
                                        <option value="<?php echo $upazila->id; ?>"> <?php echo $upazila->name . ' - ' . $upazila->bn_name; ?> </option>
                                    <?php } ?>

                                </select>
                                <a style="color: red;"><?php echo form_error('upazila_id'); ?></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea name="address" class="form-control" placeholder="Address"></textarea>
                                <a style="color: red;"><?php echo form_error('address'); ?></a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info btn-sm">Registration</button>
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
</div>