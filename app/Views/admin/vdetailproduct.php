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
                    <h1 class="page-title"> Detail product
                        <!-- <small>edit product</small> -->
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="">Master product</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Products</span>
                            </li>
                            <li>
                                <span>Detail product</span>
                            </li>
                        </ul>
                        <!-- <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal form-row-seperated" action="#">
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-shopping-cart"></i>Detail Product </div>
                                        <div class="actions btn-set">
                                            <button type="button" name="back" class="btn btn-secondary-outline">
                                                <i class="fa fa-angle-left"></i> Back</button>
                                            <button class="btn btn-secondary-outline">
                                                <i class="fa fa-reply"></i> Reset</button>
                                            <button class="btn btn-success">
                                                <i class="fa fa-check"></i> Save</button>
                                            <!-- <button class="btn btn-success">
                                                <i class="fa fa-check-circle"></i> Save & Continue Edit</button> -->
                                            <!-- <div class="btn-group">
                                                <a class="btn btn-success dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-share"></i> More
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;"> Duplicate </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Delete </a>
                                                    </li>
                                                    <li class="dropdown-divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Print </a>
                                                    </li>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable-bordered">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_general" data-toggle="tab"> General </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_meta" data-toggle="tab"> Meta </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_images" data-toggle="tab"> Images </a>
                                                </li>
                                                <!-- <li>
                                                    <a href="#tab_reviews" data-toggle="tab"> Reviews
                                                        <span class="badge badge-success"> 3 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_history" data-toggle="tab"> History </a>
                                                </li> -->
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_general">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Product code:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control input-medium" name="products_code" placeholder=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Product name:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                            <input type="text" class="form-control" name="products_name" placeholder=""> </div>
                                                            </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Product category:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                            <input type="text" class="form-control" name="products_name" placeholder=""> </div>
                                                            </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Description:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="products_description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Short Description:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="products_shortdesc"></textarea>
                                                                <span class="help-block"> shown in product listing </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Spesification:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="products_specification"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Packaging:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                            <input type="text" class="form-control" name="products_packaging" placeholder="">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label class="col-md-2 control-label">Categories:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <div class="form-control height-auto">
                                                                    <div class="scroller" style="height:275px;" data-always-visible="1">
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <label>
                                                                                    <input type="checkbox" name="product[categories][]" value="1">Mens</label>
                                                                                <ul class="list-unstyled">
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Footwear</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Clothing</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Accessories</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Fashion Outlet</label>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                <label>
                                                                                    <input type="checkbox" name="product[categories][]" value="1">Football Shirts</label>
                                                                                <ul class="list-unstyled">
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Premier League</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Football League</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Serie A</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Bundesliga</label>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                <label>
                                                                                    <input type="checkbox" name="product[categories][]" value="1">Brands</label>
                                                                                <ul class="list-unstyled">
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Adidas</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Nike</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Airwalk</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="checkbox" name="product[categories][]" value="1">Kangol</label>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <span class="help-block"> select one or more categories </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Available Date:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                    <input type="text" class="form-control" name="product[available_from]">
                                                                    <span class="input-group-addon"> to </span>
                                                                    <input type="text" class="form-control" name="product[available_to]"> </div>
                                                                <span class="help-block"> availability daterange. </span>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Tag:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                            <input type="text" class="form-control" name="products_tag" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">SKU:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="products_sku" placeholder=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Status:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                            <input type="text" class="form-control input-medium" name="products_status" placeholder="">
                                                            <!-- <select class="form-control input-medium" name="products_status">
                                                                    <option>Active</option>
                                                                    <option>Inactive</option>
                                                            </select> -->
                                                        </div>
                                                        </div>
                                                        
                                                        <!-- <div class="form-group">
                                                            <label class="col-md-2 control-label">Status:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <select class="table-group-action-input form-control input-medium" name="product[status]">
                                                                    <option value="">Select...</option>
                                                                    <option value="1">Published</option>
                                                                    <option value="0">Not Published</option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_meta">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Meta Title:</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control maxlength-handler" name="product[meta_title]" maxlength="100" placeholder="">
                                                                <span class="help-block"> max 100 chars </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Meta Keywords:</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control maxlength-handler" rows="8" name="product[meta_keywords]" maxlength="1000"></textarea>
                                                                <span class="help-block"> max 1000 chars </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Meta Description:</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control maxlength-handler" rows="8" name="product[meta_description]" maxlength="255"></textarea>
                                                                <span class="help-block"> max 255 chars </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_images">
                                                    <div class="alert alert-success margin-bottom-10">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                        <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div>
                                                    <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                                        <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">
                                                            <i class="fa fa-plus"></i> Select Files </a>
                                                        <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
                                                            <i class="fa fa-share"></i> Upload Files </a>
                                                    </div>
                                                    <div class="row">
                                                        <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                                    </div>
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr role="row" class="heading">
                                                                <th width="8%"> Image </th>
                                                                <th width="25%"> Label </th>
                                                                <th width="8%"> Sort Order </th>
                                                                <th width="10%"> Base Image </th>
                                                                <th width="10%"> Small Image </th>
                                                                <th width="10%"> Thumbnail </th>
                                                                <th width="10%"> </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="../assets/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                        <img class="img-responsive" src="../assets/pages/media/works/img1.jpg" alt=""> </a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image"> </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="product[images][1][sort_order]" value="1"> </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][1][image_type]" value="1"> </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][1][image_type]" value="2"> </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][1][image_type]" value="3" checked> </label>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                                        <i class="fa fa-times"></i> Remove </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="../assets/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                        <img class="img-responsive" src="../assets/pages/media/works/img2.jpg" alt=""> </a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="product[images][2][label]" value="Product image #1"> </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="product[images][2][sort_order]" value="1"> </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][2][image_type]" value="1"> </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][2][image_type]" value="2" checked> </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][2][image_type]" value="3"> </label>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                                        <i class="fa fa-times"></i> Remove </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="../assets/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                        <img class="img-responsive" src="../assets/pages/media/works/img3.jpg" alt=""> </a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="product[images][3][label]" value="Product image #2"> </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="product[images][3][sort_order]" value="1"> </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][3][image_type]" value="1" checked> </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][3][image_type]" value="2"> </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="radio" name="product[images][3][image_type]" value="3"> </label>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                                        <i class="fa fa-times"></i> Remove </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- <div class="tab-pane" id="tab_reviews">
                                                    <div class="table-container">
                                                        <table class="table table-striped table-bordered table-hover" id="datatable_reviews">
                                                            <thead>
                                                                <tr role="row" class="heading">
                                                                    <th width="5%"> Review&nbsp;# </th>
                                                                    <th width="10%"> Review&nbsp;Date </th>
                                                                    <th width="10%"> Customer </th>
                                                                    <th width="20%"> Review&nbsp;Content </th>
                                                                    <th width="10%"> Status </th>
                                                                    <th width="10%"> Actions </th>
                                                                </tr>
                                                                <tr role="row" class="filter">
                                                                    <td>
                                                                        <input type="text" class="form-control form-filter input-sm" name="product_review_no"> </td>
                                                                    <td>
                                                                        <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                                            <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-sm default" type="button">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                                            <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-sm default" type="button">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control form-filter input-sm" name="product_review_customer"> </td>
                                                                    <td>
                                                                        <input type="text" class="form-control form-filter input-sm" name="product_review_content"> </td>
                                                                    <td>
                                                                        <select name="product_review_status" class="form-control form-filter input-sm">
                                                                            <option value="">Select...</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="approved">Approved</option>
                                                                            <option value="rejected">Rejected</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <div class="margin-bottom-5">
                                                                            <button class="btn btn-sm btn-success filter-submit margin-bottom">
                                                                                <i class="fa fa-search"></i> Search</button>
                                                                        </div>
                                                                        <button class="btn btn-sm btn-danger filter-cancel">
                                                                            <i class="fa fa-times"></i> Reset</button>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody> </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_history">
                                                    <div class="table-container">
                                                        <table class="table table-striped table-bordered table-hover" id="datatable_history">
                                                            <thead>
                                                                <tr role="row" class="heading">
                                                                    <th width="25%"> Datetime </th>
                                                                    <th width="55%"> Description </th>
                                                                    <th width="10%"> Notification </th>
                                                                    <th width="10%"> Actions </th>
                                                                </tr>
                                                                <tr role="row" class="filter">
                                                                    <td>
                                                                        <div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
                                                                            <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-sm default date-set" type="button">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
                                                                            <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-sm default date-set" type="button">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To" /> </td>
                                                                    <td>
                                                                        <select name="product_history_notification" class="form-control form-filter input-sm">
                                                                            <option value="">Select...</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="notified">Notified</option>
                                                                            <option value="failed">Failed</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <div class="margin-bottom-5">
                                                                            <button class="btn btn-sm btn-default filter-submit margin-bottom">
                                                                                <i class="fa fa-search"></i> Search</button>
                                                                        </div>
                                                                        <button class="btn btn-sm btn-danger-outline filter-cancel">
                                                                            <i class="fa fa-times"></i> Reset</button>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody> </tbody>
                                                        </table>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
<?= $this->endSection(); ?>