<?php
    $sessionAndroidDeveloper = session()->get('session_android_developer');
    $sessionAndroidDeveloperStatus = session()->get('session_android_developer_status');
?>
                                        
<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Developer</h3>
                                    <div class="nk-block-des text-soft">
                                        <p><?php echo "You have total $developerCount developers."; ?></p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" name="search_android_developer" value="<?php if(!empty($sessionAndroidDeveloper)){ echo $sessionAndroidDeveloper; } ?>" placeholder="Search by" autocomplete="off">
                                                </div>
                                                <input type="submit" class="btn btn-sm btn-info d-none" name="submit_search" value="Filter">
                                                <input type="submit" class="btn btn-sm btn-secondary d-none" name="reset_search" value="Reset">
                                            </form>
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-status" name="search_android_developer_status" data-placeholder="Select a status">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidDeveloperStatus == 'publish')){
                                                        $str.='selected';
                                                } ?> <option value="publish"<?php echo $str; ?>>Publish</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidDeveloperStatus == 'unpublish')){
                                                        $str.='selected';
                                                } ?> <option value="unpublish"<?php echo $str; ?>>Unpublish</option>
                                            </select>   
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('new-developer');?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <?php if(!empty(session('session_android_developer_status_update'))){ ?>
                            <div class="alert alert-danger alert-icon mb-2">
                                <em class="icon ni ni-alert-circle"></em>
                                <?php echo session('session_android_developer_status_update');?> <a href="<?php echo base_url('view-app');?>" class="alert-link">Application</a> <?php echo session()->remove('session_android_developer_status_update');?>
                            </div>
                        <?php } ?>
                        
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="nk-tb-col" width="10%"><span>ID</span></th>
                                        <th class="nk-tb-col" width="25%"><span>Name</span></th>
                                        <th class="nk-tb-col" width="30%"><span>Email</span></th>
                                        <th class="nk-tb-col" width="20%"><span>Mobile</span></th>
                                        <th class="nk-tb-col" width="10%"><span>Status</span></th>
                                        <th class="nk-tb-col" width="5%"><span>Action</span></th>
                                    </tr>
                                </thead>
                                <?php if(!empty($viewDeveloper)){ ?>
                                    <tbody>
                                        <?php foreach($viewDeveloper as $data){ ?>
                                            <tr class="tb-tnx-item">
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['developer_id']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['developer_name']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['developer_email']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['developer_mobile_number']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php 
                                                    $developerStatus = '';
                                                    if($data['developer_status'] == 'publish'){
                                                        $developerStatus.= '<span class="badge badge-dot badge-success">Publish</span>';
                                                    } else if($data['developer_status'] == 'unpublish'){
                                                        $developerStatus.= '<span class="badge badge-dot badge-danger">Unpublish</span>';
                                                    } 
                                                    echo $developerStatus; 
                                                ?></span></td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="<?php echo base_url('info-developer/'.urlEncodes($data['developer_id']));?>">View</a></li>
                                                                <li><a href="<?php echo base_url('edit-developer/'.urlEncodes($data['developer_id']));?>">Edit</a></li>
                                                                <?php if($data['developer_status'] == 'publish'){ ?>
                                                                    <li><a data-toggle="modal" data-target="#unpublishModal<?php echo urlEncodes($data['developer_id']);?>">Unpublish</a></li>
                                                                <?php } else { ?>
                                                                    <li><a data-toggle="modal" data-target="#publishModal<?php echo urlEncodes($data['developer_id']);?>">Publish</a></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade" tabindex="-1" id="unpublishModal<?php echo urlEncodes($data['developer_id']);?>">
                                                <div class="modal-dialog modal-dialog-top" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Developer</h5>
                                                            <a href="<?= !empty(session()->get('session_android_developer_view_previous_url')) ? session()->get('session_android_developer_view_previous_url') : base_url('view-developer'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to unpublish <?php echo $data['developer_name'];?>?</p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text"><a href="<?php echo base_url('developer-status/'.urlEncodes($data['developer_id']));?>" class="btn btn-sm btn-danger">Unpublish</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" tabindex="-1" id="publishModal<?php echo urlEncodes($data['developer_id']);?>">
                                                <div class="modal-dialog modal-dialog-top" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Developer</h5>
                                                            <a href="<?= !empty(session()->get('session_android_developer_view_previous_url')) ? session()->get('session_android_developer_view_previous_url') : base_url('view-developer'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to publish <?php echo $data['developer_name'];?>?</p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text"><a href="<?php echo base_url('developer-status/'.urlEncodes($data['developer_id']));?>" class="btn btn-sm btn-success">Publish</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </tbody>
                                <?php } else { ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6">
                                                <div class="nk-block-content text-center p-3">
                                                    <span class="sub-text">No data available in table</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center mt-3">
                        <?= $pager->links() ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $(window).bind("load", function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
    });
</script>

<script>
    document.getElementById('search-status').addEventListener('change', function() {
        var selectedStatus = this.value;
        $.ajax({
            url: '<?= base_url('view-developer'); ?>',
            type: 'POST',
            data: { search_android_developer_status: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>