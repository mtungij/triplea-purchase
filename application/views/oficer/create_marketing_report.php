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
                        <li class="breadcrumb-item active">Create Marketing Report</li>
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
                        <h2>Create Marketing Report <small>Marketing Officer Report</small></h2>
                    </div>
                    <div class="body">
                        <form method="post" action="<?php echo base_url('oficer/create_marketing_report'); ?>">
                            <div class="mb-4">
                                <h4>DAILY ACTIVITY</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Target</th>
                                            <th>Actual</th>
                                            <th>Variance</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($activities as $activity_key => $activity_label): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($activity_label); ?></td>
                                                <td>
                                                    <input type="number" min="0" step="0.01" name="<?php echo $activity_key; ?>_target" class="form-control js-variance-target" data-variance-key="<?php echo $activity_key; ?>" required>
                                                </td>
                                                <td>
                                                    <input type="number" min="0" step="0.01" name="<?php echo $activity_key; ?>_actual" class="form-control js-variance-actual" data-variance-key="<?php echo $activity_key; ?>" required>
                                                </td>
                                                <td>
                                                    <input type="number" step="0.01" name="<?php echo $activity_key; ?>_variance" class="form-control js-variance-output" data-variance-key="<?php echo $activity_key; ?>" readonly required>
                                                </td>
                                                <td>
                                                    <input type="text" name="<?php echo $activity_key; ?>_remarks" class="form-control" placeholder="Remarks" required>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>CLIENT ACQUISITION DETAILS</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Client Name <span class="text-danger">*</span></label>
                                        <input type="text" name="client_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Business Type <span class="text-danger">*</span></label>
                                        <input type="text" name="business_type" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Loan Amount Requested <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="0.01" name="loan_amount_requested" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status (Lead/Application/Approved) <span class="text-danger">*</span></label>
                                        <select name="client_status" class="form-control" required>
                                            <option value="">Select status</option>
                                            <option value="Lead">Lead</option>
                                            <option value="Application">Application</option>
                                            <option value="Approved">Approved</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input type="text" name="contact" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>SALES PERFORMANCE</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>a) Total Loan Value Generated (TZS) <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="0.01" name="total_loan_value_generated" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>b) Total Insurance Sales Value (TZS) <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="0.01" name="total_insurance_sales_value" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>c) Number of New Clients <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="1" name="number_of_new_clients" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>d) Conversion Rate (Leads to Applications) % <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="0.01" name="conversion_rate" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>PIPELINE STATUS</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Stage</th>
                                            <th>Number of Clients</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>New Leads</td>
                                            <td><input type="number" min="0" step="1" name="pipeline_new_leads" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Under Follow-up</td>
                                            <td><input type="number" min="0" step="1" name="pipeline_under_follow_up" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Applications Submitted</td>
                                            <td><input type="number" min="0" step="1" name="pipeline_applications_submitted" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Approved</td>
                                            <td><input type="number" min="0" step="1" name="pipeline_approved" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Rejected</td>
                                            <td><input type="number" min="0" step="1" name="pipeline_rejected" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>FIELD ACTIVITY REPORT</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>a) Areas visited <span class="text-danger">*</span></label>
                                        <input type="text" name="areas_visited" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>b) Key business sectors targeted <span class="text-danger">*</span></label>
                                        <input type="text" name="key_business_sectors_targeted" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>c) Competitor activity observed <span class="text-danger">*</span></label>
                                        <input type="text" name="competitor_activity_observed" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>d) Market feedback <span class="text-danger">*</span></label>
                                        <input type="text" name="market_feedback" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>DIGITAL MARKETING PERFORMANCE</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>a) Posts created today <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="1" name="posts_created_today" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>b) Platforms used (WhatsApp, Facebook, etc.) <span class="text-danger">*</span></label>
                                        <input type="text" name="platforms_used" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>c) Engagement level (High/Medium/Low) <span class="text-danger">*</span></label>
                                        <select name="engagement_level" class="form-control" required>
                                            <option value="">Select engagement level</option>
                                            <option value="High">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>d) Leads generated online <span class="text-danger">*</span></label>
                                        <input type="number" min="0" step="1" name="leads_generated_online" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>DAILY PERFORMANCE SCORE</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>KPI Area</th>
                                            <th>Score (1-10)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Client Acquisition</td>
                                            <td><input type="number" min="1" max="10" step="0.01" name="score_client_acquisition" class="form-control js-total-score" required></td>
                                        </tr>
                                        <tr>
                                            <td>Sales Performance</td>
                                            <td><input type="number" min="1" max="10" step="0.01" name="score_sales_performance" class="form-control js-total-score" required></td>
                                        </tr>
                                        <tr>
                                            <td>Follow-up Effectiveness</td>
                                            <td><input type="number" min="1" max="10" step="0.01" name="score_follow_up_effectiveness" class="form-control js-total-score" required></td>
                                        </tr>
                                        <tr>
                                            <td>Quality of Clients</td>
                                            <td><input type="number" min="1" max="10" step="0.01" name="score_quality_of_clients" class="form-control js-total-score" required></td>
                                        </tr>
                                        <tr>
                                            <td>Professionalism</td>
                                            <td><input type="number" min="1" max="10" step="0.01" name="score_professionalism" class="form-control js-total-score" required></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Score</strong></td>
                                            <td><input type="number" step="0.01" name="total_score" class="form-control js-total-score-output" readonly required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>CHALLENGES FACED</h4>
                            </div>
                            <div class="form-group">
                                <label>Challenges Faced <span class="text-danger">*</span></label>
                                <textarea name="challenges_faced" class="form-control" rows="4" placeholder="Describe challenges faced" required></textarea>
                            </div>

                            <div class="mb-4 mt-4">
                                <h4>ACTION PLAN FOR NEXT DAY</h4>
                            </div>
                            <div class="form-group">
                                <label>Action Plan for Next Day <span class="text-danger">*</span></label>
                                <textarea name="action_plan_next_day" class="form-control" rows="4" placeholder="Describe the next day action plan" required></textarea>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    function updateVariance(activityKey) {
        var targetInput = document.querySelector('.js-variance-target[data-variance-key="' + activityKey + '"]');
        var actualInput = document.querySelector('.js-variance-actual[data-variance-key="' + activityKey + '"]');
        var varianceInput = document.querySelector('.js-variance-output[data-variance-key="' + activityKey + '"]');

        if (!targetInput || !actualInput || !varianceInput) {
            return;
        }

        var targetValue = parseFloat(targetInput.value);
        var actualValue = parseFloat(actualInput.value);

        if (isNaN(targetValue) || isNaN(actualValue)) {
            varianceInput.value = '';
            return;
        }

        varianceInput.value = (actualValue - targetValue).toFixed(2);
    }

    var trackedInputs = document.querySelectorAll('.js-variance-target, .js-variance-actual');
    trackedInputs.forEach(function (input) {
        input.addEventListener('input', function () {
            updateVariance(input.getAttribute('data-variance-key'));
        });
    });

    function updateTotalScore() {
        var total = 0;
        var hasValue = false;
        document.querySelectorAll('.js-total-score').forEach(function (input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                total += value;
                hasValue = true;
            }
        });

        var output = document.querySelector('.js-total-score-output');
        if (!output) {
            return;
        }

        output.value = hasValue ? total.toFixed(2) : '';
    }

    document.querySelectorAll('.js-total-score').forEach(function (input) {
        input.addEventListener('input', updateTotalScore);
    });
});
</script>

<?php include('incs/footer.php'); ?>