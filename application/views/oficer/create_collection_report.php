<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>
<?php
    $report_heading = isset($report_heading) ? $report_heading : 'Create Collection Report';
    $report_subheading = isset($report_subheading) ? $report_subheading : 'Collection Officer Report';
    $form_action = isset($form_action) ? $form_action : 'oficer/create_collection_report';
?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('oficer/index'); ?>"><i class="icon-home"></i></a></li>
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
                                <h4>1. COLLECTION PERFORMANCE</h4>
                                <h5>1.1 Daily Collection Summary</h5>
                            </div>
                            <div class="form-group">
                                <label>a) Total amount due today (TZS) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="total_amount_due_today" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Total amount collected (TZS) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="total_amount_collected" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Collection efficiency (%) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="collection_efficiency" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h5>1.2 Client Payment Status</h5>
                            </div>
                            <div class="form-group">
                                <label>a) Number of clients who paid <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_who_paid" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Number of clients who did not pay <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_who_did_not_pay" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Partial payments <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="partial_payments" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>2. FOLLOW-UP ACTIVITIES</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Calls made <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="calls_made" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) SMS reminders sent <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="sms_reminders_sent" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Field visits conducted <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="field_visits_conducted" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h5>Follow-Up Outcomes</h5>
                            </div>
                            <div class="form-group">
                                <label>a) Promises to pay <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="promises_to_pay" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Payments secured after follow-up <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="payments_secured_after_follow_up" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Clients unreachable <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_unreachable" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>3. ARREARS &amp; PAR MONITORING</h4>
                            </div>
                            <div class="form-group">
                                <label>Clients in arrears (1-30 days) <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_in_arrears_1_30_days" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Clients in arrears (&gt;30 days) <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_in_arrears_over_30_days" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>PAR &gt;30 days (TZS) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="par_over_30_days_tzs" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>High-Risk Clients Identified <span class="text-danger">*</span></label>
                                <textarea name="high_risk_clients_identified" class="form-control" rows="4" placeholder="Describe high-risk clients identified" required></textarea>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>4. RECOVERY SUPPORT ACTIVITIES</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Cases escalated to Recovery Officer <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="cases_escalated_to_recovery_officer" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Guarantors contacted <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="guarantors_contacted" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Collateral follow-up initiated <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="collateral_follow_up_initiated" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>5. CLIENT ACQUISITION</h4>
                                <h5>5.1 Leads Generated</h5>
                            </div>
                            <div class="form-group">
                                <label>a) Number of potential clients identified <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="potential_clients_identified" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Source <span class="text-danger">*</span></label>
                                <div style="margin-left: 15px;">
                                    <label><input type="checkbox" name="source_of_leads[]" value="Existing clients"> 1. Existing clients</label>
                                </div>
                                <div style="margin-left: 15px;">
                                    <label><input type="checkbox" name="source_of_leads[]" value="Field visits"> 2. Field visits</label>
                                </div>
                                <div style="margin-left: 15px;">
                                    <label><input type="checkbox" name="source_of_leads[]" value="Referrals"> 3. Referrals</label>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h5>5.2 Loan Opportunities</h5>
                            </div>
                            <div class="form-group">
                                <label>a) Loan inquiries received <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="loan_inquiries_received" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Clients referred to Marketing/Credit <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_referred_to_marketing_credit" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h5>5.3 Client Quality</h5>
                            </div>
                            <div class="form-group">
                                <div style="margin-left: 15px;">
                                    <label><input type="radio" name="client_quality" value="High quality" required> 1. High quality</label>
                                </div>
                                <div style="margin-left: 15px;">
                                    <label><input type="radio" name="client_quality" value="Moderate" required> 2. Moderate</label>
                                </div>
                                <div style="margin-left: 15px;">
                                    <label><input type="radio" name="client_quality" value="Low" required> 3. Low</label>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>6. CUSTOMER RELATIONSHIP MANAGEMENT</h4>
                            </div>
                            <div class="form-group">
                                <label>1. Client complaints received <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="client_complaints_received" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>2. Complaints resolved <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="complaints_resolved" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Client Feedback <span class="text-danger">*</span></label>
                                <textarea name="client_feedback" class="form-control" rows="4" placeholder="Enter client feedback" required></textarea>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>7. CASH &amp; RECONCILIATION</h4>
                            </div>
                            <div class="form-group">
                                <label>1. Cash collected <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="cash_collected" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>2. Mobile money collected <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="mobile_money_collected" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>3. Bank deposits made <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="bank_deposits_made" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>4. Reconciliation completed <span class="text-danger">*</span></label>
                                <div>
                                    <label><input type="radio" name="reconciliation_completed" value="Yes" required> Yes</label>
                                    <label><input type="radio" name="reconciliation_completed" value="No" required> No</label>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>8. CHALLENGES FACED</h4>
                            </div>
                            <div class="form-group">
                                <label>CHALLENGES FACED <span class="text-danger">*</span></label>
                                <textarea name="collection_challenges_faced" class="form-control" rows="4" placeholder="Describe challenges faced" required></textarea>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>9. ACTION PLAN (NEXT DAY)</h4>
                            </div>
                            <div class="form-group">
                                <label>ACTION PLAN (NEXT DAY) <span class="text-danger">*</span></label>
                                <textarea name="collection_action_plan_next_day" class="form-control" rows="4" placeholder="Describe action plan for next day" required></textarea>
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
