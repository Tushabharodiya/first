<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Facebook</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>New Facebook</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_account_facebook_view_previous_url')) ? session()->get('session_account_facebook_view_previous_url') : base_url('view-facebook'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="account_name">Account Name *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="account_name" placeholder="Enter account name" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="account_email">Account Email *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="email" class="form-control" name="account_email" placeholder="Enter account email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="account_mobile_number">Account Mobile Number *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" name="account_mobile_number" placeholder="Enter mobile number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="account_note">Account Note *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="account_note" placeholder="Enter account note" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="account_birth_date">Account Birth Date *</label> 
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" name="account_birth_date" placeholder="Enter account birth date" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="account_create_date">Account Create Date *</label> 
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" name="account_create_date" placeholder="Enter account create date" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="account_gender">Account Gender *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="account_gender" data-placeholder="Select a gender" required>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="account_status">Account Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="account_status" data-placeholder="Select a status" required>
                                                        <option value="publish">Publish</option>
                                                        <option value="unpublish">Unpublish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md btn-primary">Save Informations</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>