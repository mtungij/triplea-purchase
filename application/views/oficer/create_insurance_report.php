<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('oficer/index'); ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Create Insurance Report</li>
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
                        <h2>Create Insurance Report <small>Insurance Officer Report</small></h2>
                    </div>
                    <div class="body">
                        <form method="post" action="<?php echo base_url('oficer/create_insurance_report'); ?>">
                            <div class="mb-4">
                                <h4>1. CLIENT ACQUISITION (SALES PERFORMANCE)</h4>
                            </div>
                            <div class="form-group">
                                <label>a) New insurance clients identified <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="new_insurance_clients_identified" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) New insurance policies issued <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="new_insurance_policies_issued" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Loan clients converted to insurance <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="loan_clients_converted_to_insurance" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>d) Leads generated <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="leads_generated" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Source of Clients <span class="text-danger">*</span></label>
                                <div class="fancy-checkbox"><label><input type="checkbox" name="source_of_clients[]" value="Field visits"> <span>a) Field visits</span></label></div>
                                <div class="fancy-checkbox"><label><input type="checkbox" name="source_of_clients[]" value="Loan clients"> <span>b) Loan clients</span></label></div>
                                <div class="fancy-checkbox"><label><input type="checkbox" name="source_of_clients[]" value="Referrals"> <span>c) Referrals</span></label></div>
                                <div class="fancy-checkbox"><label><input type="checkbox" name="source_of_clients[]" value="Digital platforms"> <span>d) Digital platforms</span></label></div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>2. SALES VALUE PERFORMANCE</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Total insurance premium generated (TZS) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="total_insurance_premium_generated" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Loan-linked insurance contribution (TZS) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="loan_linked_insurance_contribution" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Initial client contribution collected (if applicable) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="initial_client_contribution_collected" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>3. FIELD ACTIVITIES</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Field visits conducted <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="field_visits_conducted" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Clients visited <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_visited" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Business/SME clients engaged <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="business_sme_clients_engaged" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>d) Insurance awareness sessions conducted <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="insurance_awareness_sessions_conducted" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>4. POLICY ADMINISTRATION</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Insurance applications received <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="insurance_applications_received" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Policies processed and registered <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="policies_processed_registered" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Pending applications <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="pending_applications" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>d) Completed documentation rate (%) <span class="text-danger">*</span></label>
                                <input type="number" min="0" step="0.01" name="completed_documentation_rate" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>5. CLAIMS MANAGEMENT</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Claims received <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="claims_received" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Claims processed <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="claims_processed" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Claims pending verification <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="claims_pending_verification" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>d) Claims resolved today <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="claims_resolved_today" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>6. LOAN-INSURANCE LINKAGE</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Loan clients covered by insurance today <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="loan_clients_covered_today" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Uninsured loan clients identified <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="uninsured_loan_clients_identified" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Follow-up actions taken <span class="text-danger">*</span></label>
                                <input type="text" name="follow_up_actions_taken" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>7. COMPLIANCE &amp; RISK CONTROL</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Fully compliant cases <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="fully_compliant_cases" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Documentation errors <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="documentation_errors" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Fraud/risk alerts <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="fraud_risk_alerts" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>8. CLIENT COMMUNICATION &amp; EDUCATION</h4>
                            </div>
                            <div class="form-group">
                                <label>a) Clients educated on insurance <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="clients_educated_on_insurance" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>b) Product explanations conducted <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="product_explanations_conducted" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>c) Client inquiries handled <span class="text-danger">*</span></label>
                                <input type="number" min="0" name="client_inquiries_handled" class="form-control" required>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>9. CHALLENGES FACED</h4>
                            </div>
                            <div class="form-group">
                                <label>9. CHALLENGES FACED <span class="text-danger">*</span></label>
                                <textarea name="insurance_challenges_faced" class="form-control" rows="4" placeholder="Write challenges faced" required></textarea>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>10. ACTION PLAN (NEXT DAY)</h4>
                            </div>
                            <div class="form-group">
                                <label>10. ACTION PLAN (NEXT DAY) <span class="text-danger">*</span></label>
                                <textarea name="insurance_action_plan_next_day" class="form-control" rows="4" placeholder="Write action plan for next day" required></textarea>
                            </div>

                            <div class="form-group mt-4">
                                <label>Date</label>
                                <input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Insurance Report</button>
                            <a href="<?php echo base_url('oficer/index'); ?>" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>