<div class="container">
    <div class="row" id="collegeRegistrationDiv">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <h6 style="color:red">
                <?php
                $exception = $this->session->userdata('exception');
                if ($exception) {
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
                ?>
            </h6>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">College Login</legend>
                <div class="control-group">
                    <form action="<?php echo base_url(); ?>College/login" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Epin Number</label>
                            <div class="col-sm-10">
                                <input name="epin_number" type="number" class="form-control" placeholder="Epin Number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info btn-sm">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
</div>