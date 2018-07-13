<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Jun-18
 * Time: 9:14 PM
 */
?>
<div class="row">
    <div class="col-sm-12">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-home bigger-120"></i>
                        Home
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#messages">
                        Messages
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        Dropdown &nbsp;
                        <i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-info">
                        <li>
                            <a data-toggle="tab" href="#dropdown1">@fat</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#dropdown2">@mdo</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
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
                            <?php pending_data_sheet($conn);?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="messages" class="tab-pane fade">
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
                            <?php pending_data_sheet($conn);?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="dropdown1" class="tab-pane fade">
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
                            <?php pending_data_sheet($conn);?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="dropdown2" class="tab-pane fade">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
                </div>
            </div>
        </div>
    </div><!-- /.col -->
</div>
