<?= $this->extend('admin/vtemplate'); ?>
<?= $this->section('content'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <!-- <div class="theme-panel">
                        <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-small">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-small">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style</span>
                                <select class="sidebar-style-option form-control input-small">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-small">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <!-- END THEME PANEL -->
                    <h1 class="page-title"> Products Catergory
                        
                    </h1>
                    <!-- modal add-->
                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new product category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url()?>/AdminWeb/GroupProducts/addgroupProduct" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product category</label>
            <input class="form-control <?= ($validation->hasError('productGroups_name')) ? 'is-invalid' : ''; ?>" type="text" name="productGroups_name">
            <div class="invalid-feedback">
                <?= $validation->getError('productGroups_name'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Status</label>
            <select class="form-control <?= ($validation->hasError('productGroups_status')) ? 'is-invalid' : ''; ?>" name="productGroups_status">
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('productGroups_status'); ?>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
                    <!-- end modal add-->
                    <!-- modal edit-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit product category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url()?>/AdminWeb/GroupProducts/editgroupProduct" method="post">
      <div class="modal-body">
        <!-- <input type="text" name="productGroups_code" id="productGroups_code"></input> -->
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product category code</label>
            <input class="form-control" type="text" name="productGroups_code" id="productGroups_code" readonly>
          </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product category</label>
            <input class="form-control" type="text" name="productGroups_name" id="productGroups_name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Status</label>
            <select class="form-control" name="productGroups_status" id="productGroups_status">
                <option>Active</option>
                <option>Inactive</option>
            </select>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>
                    <!-- end modal edit -->

                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Dashboard</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Master Products</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Products Catergory</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    
                    <div class="row">
                    <?php if (session()->has('successinsertgroup')) : ?>
                        <div class="alert alert-success" role="alert"><?= session('successinsertgroup')?></div>
                    <?php elseif(session()->has('errupdategroup')) : ?>
                        <div class="alert alert-danger" role="alert"><?= session('errupdategroup')?></div>
                    <?php elseif(session()->has('delsuccess')) : ?>
                        <div class="alert alert-success" role="alert"><?= session('delsuccess')?></div>
                    <?php endif; ?>
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Products Catergory</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <!-- <button id="sample_editable_1_new" class="btn green"> Add New -->
                                                    <button type="button" class="btn green" data-toggle="modal" data-target="#addModal" data-whatever="@mdo">Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>

                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Product category code</th>
                                                <th> Product Category </th>
                                                <th> Status </th>
                                                <th> Created at </th>
                                                <th> Created by </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=0;
                                            foreach($groupProduct as $value) :
                                                $no++;
                                                $row['no'] = $no;
                                                $row['id'] = $value->productGroups_id;
                                                $row['productGroups_code'] = $value->productGroups_code;
                                                $row['productGroups_name'] = $value->productGroups_name;
                                                $row['productGroups_status'] = $value->productGroups_status;
                                                $row['productGroups_createdat'] = $value->productGroups_createdat;
                                                $row['productGroups_createdby'] = $value->productGroups_createdby;
                                            
                                            ?>
                                            <tr>
                                                <td><?=$row['no']?></td>
                                                <td><?=$row['productGroups_code']?></td>
                                                <td><?=$row['productGroups_name']?></td>
                                                <td><?=$row['productGroups_status']?></td>
                                                <td><?=$row['productGroups_createdat']?></td>
                                                <td><?=$row['productGroups_createdby']?></td>
                                                <td>
                                                    <a class="editbtn" > Edit </a>
                                                    <!-- <button type="button" class="btn btn-primary editbtn">Edit</button> -->
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('Are you sure want to delete this user ?')" href="<?= base_url()?>/AdminWeb/GroupProducts/delgroupProduct/<?=$row['id']?>"> Delete </a>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td> lisa </td>
                                                <td> Lisa Wong </td>
                                                <td> 434 </td>
                                                <td class="center"> new user </td>
                                                <td>
                                                    <a class="edit" href="javascript:;"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class="delete" href="javascript:;"> Delete </a>
                                                </td>
                                            </tr> -->
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->


<?= $this->endSection(); ?>