<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>
<?php
    $report_heading = isset($report_heading) ? $report_heading : 'Create Credit Report';
    $report_subheading = isset($report_subheading) ? $report_subheading : 'Credit Officer Report';
    $form_action = isset($form_action) ? $form_action : 'oficer/create_credit_report';
?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("oficer/index"); ?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active"><?php echo htmlspecialchars($report_heading); ?></li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo htmlspecialchars($report_heading); ?> <small><?php echo htmlspecialchars($report_subheading); ?></small></h2>
                        </div>
                        <div class="body">
                            <form method="post" action="<?php echo base_url($form_action); ?>">
                                <div class="mb-4">
                                    <h4>1. LOAN PROCESSING ACTIVITIES</h4>
                                    <h5>1.1 Applications Management</h5>
                                </div>
                                <div class="form-group">
                                    <label>a) Loan applications received <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="loan_applications_received" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Applications reviewed <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="applications_reviewed" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>c) Applications approved <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="applications_approved" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>d) Applications rejected <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="applications_rejected" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>e) Applications pending <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="applications_pending" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h5>1.2 Value of Loans</h5>
                                </div>
                                <div class="form-group">
                                    <label>a) Total amount applied (TZS) <span class="text-danger">*</span></label>
                                    <input type="number" min="0" step="0.01" name="total_amount_applied" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Total amount approved (TZS) <span class="text-danger">*</span></label>
                                    <input type="number" min="0" step="0.01" name="total_amount_approved" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>2. CREDIT ANALYSIS &amp; RISK ASSESSMENT</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) Number of clients assessed <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="clients_assessed" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Average DBR (%) <span class="text-danger">*</span></label>
                                    <input type="number" min="0" step="0.01" name="average_dbr" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>c) High-risk applications identified <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="high_risk_applications_identified" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>d) Over-indebted clients detected <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="over_indebted_clients_detected" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-2">
                                    <label><strong>Risk Observations:</strong></label>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>3. FIELD VERIFICATION ACTIVITIES</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) Business visits conducted <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="business_visits_conducted" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Residence visits conducted <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="residence_visits_conducted" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>c) Clients verified successfully <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="clients_verified_successfully" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>d) Cases with discrepancies <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="cases_with_discrepancies" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>4. CLIENT ACQUISITION</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) New clients sourced <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="new_clients_sourced" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Leads generated <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="leads_generated" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>c) Loan applications from own sourcing <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="loan_application_from_own_sourcing" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-2">
                                    <label><strong>Client Quality Assessment:</strong></label>
                                </div>
                                <div class="form-group">
                                    <div style="margin-left: 15px;">
                                        <label><input type="radio" name="client_quality_assessment" value="High Quality" required> a) High Quality</label>
                                    </div>
                                    <div style="margin-left: 15px;">
                                        <label><input type="radio" name="client_quality_assessment" value="Moderate" required> b) Moderate</label>
                                    </div>
                                    <div style="margin-left: 15px;">
                                        <label><input type="radio" name="client_quality_assessment" value="Low" required> c) Low</label>
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>5. PORTFOLIO MONITORING</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) Number of active clients <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="number_of_active_clients" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Clients with on-time payments <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="clients_with_on_time_payments" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>c) Clients in arrears <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="clients_in_arrears" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-2">
                                    <label><strong>PAR STATUS</strong></label>
                                </div>
                                <div class="form-group">
                                    <label>a) PAR 1–30 days (TZS) <span class="text-danger">*</span></label>
                                    <input type="number" min="0" step="0.01" name="par_1_30_days" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) PAR >30 days (TZS) <span class="text-danger">*</span></label>
                                    <input type="number" min="0" step="0.01" name="par_over_30_days" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>6. COMPLIANCE &amp; DOCUMENTATION</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) KYC completed cases <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="kyc_completed_cases" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Files fully documented <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="files_fully_documented" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>c) Incomplete documentation cases <span class="text-danger">*</span></label>
                                    <input type="number" min="0" name="incomplete_documentation_cases" class="form-control" required>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>7. COORDINATION ACTIVITIES</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) Cases submitted to Credit Committee <span class="text-danger">*</span></label>
                                    <input type="text" name="cases_submitted_to_credit_committee" class="form-control" placeholder="Enter cases submitted" required>
                                </div>
                                <div class="form-group">
                                    <label>b) Follow-ups with Collections <span class="text-danger">*</span></label>
                                    <input type="text" name="follow_ups_with_collections" class="form-control" placeholder="Enter follow-ups with collections" required>
                                </div>
                                <div class="form-group">
                                    <label>c) Follow-ups with Recovery <span class="text-danger">*</span></label>
                                    <input type="text" name="follow_ups_with_recovery" class="form-control" placeholder="Enter follow-ups with recovery" required>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>8. FINANCIAL REPORTING TASKS</h4>
                                </div>
                                <div class="form-group">
                                    <label>a) Weekly financial visibility updated <span class="text-danger">*</span></label>
                                    <div>
                                        <label><input type="radio" name="weekly_financial_visibility" value="Yes" required> Yes</label>
                                        <label><input type="radio" name="weekly_financial_visibility" value="No" required> No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>b) Monthly financial statement progress <span class="text-danger">*</span></label>
                                    <div>
                                        <label><input type="radio" name="monthly_financial_statement" value="Yes" required> Yes</label>
                                        <label><input type="radio" name="monthly_financial_statement" value="No" required> No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>c) Sales/loan budget tracking updated <span class="text-danger">*</span></label>
                                    <div>
                                        <label><input type="radio" name="sales_loan_budget_tracking" value="Yes" required> Yes</label>
                                        <label><input type="radio" name="sales_loan_budget_tracking" value="No" required> No</label>
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>9. CHALLENGES FACED</h4>
                                </div>
                                <div class="form-group">
                                    <label>CHALLENGES FACED <span class="text-danger">*</span></label>
                                    <textarea name="challenges_faced" class="form-control" rows="4" placeholder="Describe any challenges faced during the day" required></textarea>
                                </div>
                                <div class="mb-4 mt-4">
                                    <h4>10. ACTION PLAN (NEXT DAY)</h4>
                                </div>
                                <div class="form-group">
                                    <label>ACTION PLAN (NEXT DAY) <span class="text-danger">*</span></label>
                                    <textarea name="action_plan_next_day" class="form-control" rows="4" placeholder="Describe action plan for the next day" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Report</button>
                                <a href="<?php echo base_url('oficer/index'); ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php include('incs/footer.php'); ?>
