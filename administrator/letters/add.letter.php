<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 17-Jun-18
 * Time: 2:33 PM
 */

?>
<div class='row'>
    <div class='col-lg-12 widget-container-col' id='widget-container-col-13'>
        <div class='widget-box transparent' id='widget-box-13'>
            <div class='widget-header'>
                <h4 class='widget-title lighter'>Registry Number : <?php echo $reg_no;?></h4>

                <div class='widget-toolbar no-border'>
                    <ul class='nav nav-tabs' id='myTab2'>
                        <li class='active'>
                            <a data-toggle='tab' href='#complain-form'>Complain Form</a>
                        </li>

                        <li>
                            <a data-toggle='tab' href='#complain-list'>Complain List</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class='widget-body'>
                <div class='widget-main padding-12 no-padding-left no-padding-right'>
                    <div class='tab-content padding-4'>
                        <div id='complain-form' class='tab-pane in active'>
                            <div class='col-xs-8'>
                                <div class='scrollable-horizontal' data-size='800'>
                                    <form class='form-horizontal' role='form' method='POST' action='model.php' enctype='multipart/form-data'>
                                        <input type='hidden' name='ui' value='complaint-book'>
                                        <input type='hidden' name='token' value='<?php echo $_GET['token']?>'>
                                        <input type='hidden' name='reg' value='<?php echo $reg_no;?>'>
                                        <div class='form-group'>
                                            <label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Date </label>

                                            <div class='col-sm-9'>
                                                <input type='date' name='date' value='<?php echo $date;?>' id='form-field-1' placeholder='<?php echo date('Y-m-d');?>' class='col-xs-10 col-sm-10' />
                                            </div>
                                        </div>

                                        <div class='space-4'></div>

                                        <div class='form-group'>
                                            <label class='col-sm-3 control-label no-padding-right' for='form-field-1'> Complaint Name/Company </label>

                                            <div class='col-sm-9'>
                                                <input type='text' name='name' value='<?php echo $name;?>' id='form-field-1' placeholder='' class='col-xs-10 col-sm-10' />
                                            </div>
                                        </div>

                                        <div class='space-4'></div>

                                        <div class='form-group'>
                                            <label class='col-sm-3 control-label no-padding-right' for='form-field-1'> Mobile Number </label>

                                            <div class='col-sm-9'>
                                                <input type='text' name='mobile' value='<?php echo $mobile;?>' id='form-field-1' placeholder='' class='col-xs-10 col-sm-10' />
                                            </div>
                                        </div>

                                        <div class='space-4'></div>

                                        <div class='form-group'>
                                            <label class='col-sm-3 control-label no-padding-right' for='form-field-1'> Subject </label>

                                            <div class='col-sm-9'>
                                                <input type='text' name='subject' value='<?php echo $subject;?>' id='form-field-1' placeholder='' class='col-xs-10 col-sm-10' />
                                            </div>
                                        </div>

                                        <div class='space-4'></div>

                                        <div class='form-group'>
                                            <label class='col-sm-3 control-label no-padding-right' for='form-field-1'> Subject </label>

                                            <div class='col-sm-9'>
                                                <select name='subject' id='form-field-1' class='col-xs-10 col-sm-10'>
                                                    <?php cmb_department($conn);?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class='space-4'></div>

                                        <div class='form-group'>
                                            <label class='col-sm-3 control-label no-padding-right' for='form-field-1'> Attach Document </label>

                                            <div class='col-sm-9'>
                                                <input type='file' name='document' value='' id='form-field-1' placeholder='' class='col-xs-10 col-sm-10' />
                                            </div>
                                        </div>

                                        <div class='space-4'></div>

                                        <div class='form-group'>
                                            <input type='submit' name='submit' value='Submit' class='btn btn-primary'>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class='col-xs-6 widget-container-col' id='widget-container-col-2'>

                            </div><!-- /.span -->
                        </div>

                        <div id='complain-list' class='tab-pane'>
                            <div class='scrollable' data-size='100' data-position='left'>
                                <div class='row'>
                                    <div class='col-xs-12'>
                                        <div class='clearfix'>
                                            <div class='pull-right tableTools-container'></div>
                                        </div>
                                        <div class='table-header'>
                                            Results for 'Latest Registered Domains'
                                        </div>

                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id='dynamic-table' class='table table-striped table-bordered table-hover'>
                                                <thead>
                                                <tr>
                                                    <th class='center'>
                                                        <label class='pos-rel'>
                                                            <input type='checkbox' class='ace' />
                                                            <span class='lbl'></span>
                                                        </label>
                                                    </th>
                                                    <th>Date</th>
                                                    <th>RegNo</th>
                                                    <th class='hidden-480'>Name</th>

                                                    <th>
                                                        <i class='ace-icon fa fa-clock-o bigger-110 hidden-480'></i>
                                                        Mobile
                                                    </th>
                                                    <th class='hidden-480'>Subject</th>

                                                    <th></th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php complain_data_sheet($conn);?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
