<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/index'); ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Reports</li>
                        <li class="breadcrumb-item active">OFFICER - DAILY REPORT</li>
                    </ul>
                </div>
            </div>
        </div>

        <?php if ($msg = $this->session->flashdata('massage')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-success">
                        <a href="" class="close">&times;</a>
                        <?php echo htmlspecialchars($msg); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row clearfix">
            <div class="col-lg-12">
                <!-- Filter Form -->
                <div class="card">
                    <div class="header"><h2>Filter Reports</h2></div>
                    <div class="body">
                        <form method="get" action="<?php echo base_url('admin/officer_daily_reports'); ?>" class="form-inline flex-wrap" style="gap:10px;">
                            <div class="form-group mr-2 mb-2">
                                <label class="mr-1">From&nbsp;Date</label>
                                <input type="date" name="from_date" class="form-control form-control-sm"
                                    value="<?php echo htmlspecialchars($filter_from); ?>">
                            </div>
                            <div class="form-group mr-2 mb-2">
                                <label class="mr-1">To&nbsp;Date</label>
                                <input type="date" name="to_date" class="form-control form-control-sm"
                                    value="<?php echo htmlspecialchars($filter_to); ?>">
                            </div>
                            <div class="form-group mr-2 mb-2">
                                <label class="mr-1">Report&nbsp;Type</label>
                                <select name="report_type" class="form-control form-control-sm">
                                    <option value="all"        <?php echo ($filter_type === 'all')        ? 'selected' : ''; ?>>All Types</option>
                                    <option value="credit"     <?php echo ($filter_type === 'credit')     ? 'selected' : ''; ?>>Credit Officer</option>
                                    <option value="insurance"  <?php echo ($filter_type === 'insurance')  ? 'selected' : ''; ?>>Insurance Officer</option>
                                    <option value="collection" <?php echo ($filter_type === 'collection') ? 'selected' : ''; ?>>Collection Officer</option>
                                    <option value="marketing"  <?php echo ($filter_type === 'marketing')  ? 'selected' : ''; ?>>Marketing Officer</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary btn-sm mr-1">Filter</button>
                                <a href="<?php echo base_url('admin/officer_daily_reports'); ?>" class="btn btn-default btn-sm">Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Reports Card -->
                <div class="card">
                    <div class="header">
                        <h2>OFFICER - DAILY REPORTS</h2>
                    </div>
                    <div class="body">
                        <?php
                        // Determine which tab should be active based on filter_type
                        $active_credit     = ($filter_type === 'all' || $filter_type === 'credit')     ? 'active' : '';
                        $active_insurance  = ($filter_type === 'insurance')                            ? 'active' : '';
                        $active_collection = ($filter_type === 'collection')                           ? 'active' : '';
                        $active_marketing  = ($filter_type === 'marketing')                            ? 'active' : '';
                        if ($filter_type === 'all') {
                            $active_credit = 'active'; $active_insurance = ''; $active_collection = ''; $active_marketing = '';
                        }
                        ?>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link <?php echo $active_credit; ?>" data-toggle="tab" href="#credit_reports_tab">Credit Officer Report</a></li>
                            <li class="nav-item"><a class="nav-link <?php echo $active_insurance; ?>" data-toggle="tab" href="#insurance_reports_tab">Insurance Officer Report</a></li>
                            <li class="nav-item"><a class="nav-link <?php echo $active_collection; ?>" data-toggle="tab" href="#collection_reports_tab">Collection Officer Report</a></li>
                            <li class="nav-item"><a class="nav-link <?php echo $active_marketing; ?>" data-toggle="tab" href="#marketing_reports_tab">Marketing Officer Report</a></li>
                        </ul>
                        <div class="tab-content m-t-15">
                            <div class="tab-pane <?php echo $active_credit; ?>" id="credit_reports_tab" role="tabpanel">
                                <h4>Credit Officer Report</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover j-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Officer Name</th>
                                                <th>Branch</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($credit_reports)): ?>
                                                <?php foreach ($credit_reports as $index => $report): ?>
                                                    <tr>
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td><?php echo htmlspecialchars($report->empl_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->blanch_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_title); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_date); ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/officer_daily_report_view/' . $report->report_id); ?>" class="btn btn-sm btn-info">View</a>
                                                            <a href="<?php echo base_url('admin/officer_daily_report_download/' . $report->report_id); ?>" class="btn btn-sm btn-primary" target="_blank">Download</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No credit officer reports found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo $active_insurance; ?>" id="insurance_reports_tab" role="tabpanel">
                                <h4>Insurance Officer Report</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover j-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Officer Name</th>
                                                <th>Branch</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($insurance_reports)): ?>
                                                <?php foreach ($insurance_reports as $index => $report): ?>
                                                    <tr>
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td><?php echo htmlspecialchars($report->empl_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->blanch_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_title); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_date); ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/insurance_daily_report_view/' . $report->report_id); ?>" class="btn btn-sm btn-info">View</a>
                                                            <a href="<?php echo base_url('admin/insurance_daily_report_download/' . $report->report_id); ?>" class="btn btn-sm btn-primary" target="_blank">Download</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No insurance officer reports found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo $active_collection; ?>" id="collection_reports_tab" role="tabpanel">
                                <h4>Collection Officer Report</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover j-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Officer Name</th>
                                                <th>Branch</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($collection_reports)): ?>
                                                <?php foreach ($collection_reports as $index => $report): ?>
                                                    <tr>
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td><?php echo htmlspecialchars($report->empl_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->blanch_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_title); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_date); ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/collection_daily_report_view/' . $report->report_id); ?>" class="btn btn-sm btn-info">View</a>
                                                            <a href="<?php echo base_url('admin/collection_daily_report_download/' . $report->report_id); ?>" class="btn btn-sm btn-primary" target="_blank">Download</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No collection officer reports found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo $active_marketing; ?>" id="marketing_reports_tab" role="tabpanel">
                                <h4>Marketing Officer Report</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover j-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Officer Name</th>
                                                <th>Branch</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($marketing_reports)): ?>
                                                <?php foreach ($marketing_reports as $index => $report): ?>
                                                    <tr>
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td><?php echo htmlspecialchars($report->empl_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->blanch_name ?: 'N/A'); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_title); ?></td>
                                                        <td><?php echo htmlspecialchars($report->report_date); ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/marketing_daily_report_view/' . $report->report_id); ?>" class="btn btn-sm btn-info">View</a>
                                                            <a href="<?php echo base_url('admin/marketing_daily_report_download/' . $report->report_id); ?>" class="btn btn-sm btn-primary" target="_blank">Download</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No marketing officer reports found.</td>
                                                </tr>
                                            <?php endif; ?>
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

<?php include('incs/footer.php'); ?>