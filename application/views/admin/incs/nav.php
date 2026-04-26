<div id="wrapper">
<!-- PWA Install Banner -->
<div id="pwa-install-banner" style="display:none;position:fixed;bottom:0;left:0;right:0;z-index:9999;background:#1a73e8;color:#fff;padding:12px 20px;align-items:center;justify-content:space-between;box-shadow:0 -2px 8px rgba(0,0,0,0.2);">
    <div style="display:flex;align-items:center;gap:12px;">
        <img src="<?php echo base_url(); ?>assets/img/icon-192.png" style="width:36px;height:36px;border-radius:6px;" alt="Triplea Finance">
        <span style="font-size:14px;font-weight:500;">Install <strong>Triplea Finance</strong> app for quick access</span>
    </div>
    <div style="display:flex;gap:8px;">
        <button id="pwa-install-btn" style="background:#fff;color:#1a73e8;border:none;padding:6px 16px;border-radius:4px;font-weight:600;cursor:pointer;">Install</button>
        <button id="pwa-install-dismiss" style="background:transparent;color:#fff;border:1px solid rgba(255,255,255,0.5);padding:6px 12px;border-radius:4px;cursor:pointer;">Not now</button>
    </div>
</div>


<?php
$CI =& get_instance();
$CI->load->model('queries');

// idadi ya maombi yote
$total_notifications = $CI->queries->count_all();

// maombi 5 ya mwisho
$notifications = $CI->queries->all(5);
?>


    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="icon-list"></i></button>
            </div>

            <div class="navbar-brand">
                <a href=""><img src="<?php echo base_url() ?>assets/img/mikopo.png" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search Customer..." type="text">
                    <button type="submit" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:;" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                        </li>
                   <li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
        <i class="icon-bell"></i>
        <?php if ($total_notifications > 0): ?>
            <span class="badge badge-danger"><?= $total_notifications ?></span>
        <?php endif; ?>
    </a>
    <ul class="dropdown-menu notifications">
        <li class="header">
            <strong>Una jumla ya <?= $total_notifications ?> taarifa mpya</strong>
        </li>

        <?php if (!empty($notifications)): ?>
            <?php foreach ($notifications as $n): ?>
                <li>
                    <a href="javascript:void(0);">
                        <div class="media">
                            <div class="media-left">
                                <i class="icon-info text-warning"></i>
                            </div>
                            <div class="media-body">
                                <p class="text">
                                    Ombi jipya la mkopo kutoka 
                                    <strong><?= htmlspecialchars($n->first_name . ' ' . $n->last_name, ENT_QUOTES, 'UTF-8'); ?></strong>
                                    kiasi: <strong><?= number_format($n->amount_requested, 2) ?> TZS</strong>
                                </p>
                                <span class="timestamp">
                                    <?= date("d M Y H:i", strtotime($n->created_at)) ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>
                <a href="javascript:void(0);">
                    <div class="media">
                        <div class="media-body">
                            <p class="text text-muted">Hakuna taarifa mpya</p>
                        </div>
                    </div>
                </a>
            </li>
        <?php endif; ?>

        <li class="footer">
            <a href="<?= site_url('admin/new_loans') ?>" class="more">Angalia taarifa zote</a>
        </li>
    </ul>
</li>


                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                            <ul class="dropdown-menu user-menu menu-icon">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                                <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>                                
                                <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url("welcome/logout"); ?>" class="icon-menu"><i class="icon-logout"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>