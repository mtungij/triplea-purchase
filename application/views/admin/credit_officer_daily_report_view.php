<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>
<?php
$reportTitle = (string) ($report->report_title ?? '');
$isInsuranceReport = stripos($reportTitle, 'INSURANCE') !== false;
$isCollectionReport = stripos($reportTitle, 'COLLECTION') !== false;
$reportsLabel = $isCollectionReport
    ? 'COLLECTION OFFICER - DAILY REPORTS'
    : ($isInsuranceReport ? 'INSURANCE OFFICER - DAILY REPORTS' : 'CREDIT OFFICER - DAILY REPORTS');
$downloadPath = $isCollectionReport
    ? 'admin/collection_daily_report_download/' . $report->report_id
    : ($isInsuranceReport ? 'admin/insurance_daily_report_download/' . $report->report_id : 'admin/officer_daily_report_download/' . $report->report_id);
?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/index'); ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/officer_daily_reports'); ?>"><?php echo htmlspecialchars($reportsLabel); ?></a></li>
                        <li class="breadcrumb-item active">View Report</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><?php echo htmlspecialchars($report->report_title); ?></h2>
                        <ul class="header-dropdown">
                            <li><a href="<?php echo base_url($downloadPath); ?>" class="btn btn-sm btn-primary" target="_blank">Download</a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4"><strong>Officer Name:</strong> <?php echo htmlspecialchars($report->empl_name ?: 'N/A'); ?></div>
                            <div class="col-md-4"><strong>Branch:</strong> <?php echo htmlspecialchars($report->blanch_name ?: 'N/A'); ?></div>
                            <div class="col-md-4"><strong>Date:</strong> <?php echo htmlspecialchars($report->report_date); ?></div>
                        </div>
                        <hr>
                        <pre style="white-space: pre-wrap; font-family: inherit; margin: 0;"><?php echo htmlspecialchars($report->report_body); ?></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>