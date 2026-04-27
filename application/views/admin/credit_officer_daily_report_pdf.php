<?php
$isInsuranceReport = stripos((string) ($report->report_title ?? ''), 'INSURANCE') !== false;
$isCollectionReport = stripos((string) ($report->report_title ?? ''), 'COLLECTION') !== false;
$isMarketingReport = stripos((string) ($report->report_title ?? ''), 'MARKETING') !== false;

if ($isCollectionReport) {
    $primaryColor = '#b54708';
    $primarySoftBg = '#fff1e8';
    $primarySoftBorder = '#f7d6bf';
    $primarySoftText = '#9a3412';
    $altSectionBg = '#ffd9c2';
    $altSectionText = '#7c2d12';
    $bannerTitle = 'Collection Officer Report';
    $bannerSubtitle = 'Formal collections, arrears monitoring, recovery support and reconciliation summary';
} elseif ($isInsuranceReport) {
    $primaryColor = '#0b6e4f';
    $primarySoftBg = '#e8f5ef';
    $primarySoftBorder = '#cfe7db';
    $primarySoftText = '#1f6d56';
    $altSectionBg = '#dbf0e7';
    $altSectionText = '#0f513b';
    $bannerTitle = 'Insurance Officer Daily Report';
    $bannerSubtitle = 'Formal client acquisition, policy administration and claims operations summary';
} elseif ($isMarketingReport) {
    $primaryColor = '#9a3412';
    $primarySoftBg = '#fff7ed';
    $primarySoftBorder = '#fed7aa';
    $primarySoftText = '#9a3412';
    $altSectionBg = '#ffedd5';
    $altSectionText = '#7c2d12';
    $bannerTitle = 'Marketing Officer Daily Report';
    $bannerSubtitle = 'Formal lead generation, campaign outreach and market feedback summary';
} else {
    $primaryColor = '#0f4c81';
    $primarySoftBg = '#eef5fb';
    $primarySoftBorder = '#d7e8f7';
    $primarySoftText = '#486581';
    $altSectionBg = '#d9eaf7';
    $altSectionText = '#12344d';
    $bannerTitle = 'Credit Officer Daily Report';
    $bannerSubtitle = 'Formal field activity, portfolio, compliance and planning summary';
}

$logoSrc = '';
$defaultLogoPath = FCPATH . 'assets/img/tripl.png';
if (file_exists($defaultLogoPath)) {
    // Keep logo source consistent with admin/print_pdf.
    $logoSrc = $defaultLogoPath;
} elseif (!empty($compdata->comp_logo)) {
    $logoFilePath = FCPATH . 'assets/img/' . $compdata->comp_logo;
    if (file_exists($logoFilePath)) {
        $logoSrc = $logoFilePath;
    } else {
        $logoSrc = base_url('assets/img/' . $compdata->comp_logo);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($report->report_title); ?></title>
    <style>
        body {
            font-family: dejavusans, sans-serif;
            font-size: 11px;
            color: #1f2933;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }
        .page {
            padding: 18px 24px 24px;
        }
        .header {
            border-bottom: 2px solid <?php echo $primaryColor; ?>;
            padding-bottom: 14px;
            margin-bottom: 18px;
        }
        .branding-table,
        .meta-table,
        .items-table {
            width: 100%;
            border-collapse: collapse;
        }
        .logo-cell {
            width: 90px;
            vertical-align: top;
        }
        .logo {
            width: 72px;
            height: 72px;
            object-fit: contain;
        }
        .brand-title {
            font-size: 19px;
            font-weight: bold;
            color: #0f172a;
            margin: 0 0 4px;
            text-transform: uppercase;
        }
        .brand-subtitle {
            font-size: 10px;
            color: #52606d;
            margin: 0;
        }
        .report-banner {
            margin-top: 12px;
            background: <?php echo $primarySoftBg; ?>;
            border: 1px solid <?php echo $primarySoftBorder; ?>;
            padding: 10px 12px;
        }
        .report-banner-title {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
            color: <?php echo $primaryColor; ?>;
            text-transform: uppercase;
        }
        .report-banner-subtitle {
            margin: 4px 0 0;
            font-size: 10px;
            color: <?php echo $primarySoftText; ?>;
        }
        .meta-wrap {
            margin-bottom: 18px;
        }
        .meta-table td {
            width: 50%;
            padding: 8px 10px;
            border: 1px solid #d9e2ec;
            background: #f8fbfd;
        }
        .meta-label {
            display: block;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #7b8794;
            margin-bottom: 3px;
        }
        .meta-value {
            font-size: 11px;
            font-weight: bold;
            color: #102a43;
        }
        .section {
            margin-bottom: 14px;
            border: 1px solid #e4ecf3;
        }
        .section-title {
            background: <?php echo $primaryColor; ?>;
            color: #ffffff;
            font-weight: bold;
            font-size: 11px;
            padding: 8px 10px;
            text-transform: uppercase;
        }
        .section-title.alt {
            background: <?php echo $altSectionBg; ?>;
            color: <?php echo $altSectionText; ?>;
        }
        .section-body {
            padding: 0;
            background: #ffffff;
        }
        .items-table td {
            border-bottom: 1px solid #eef2f6;
            padding: 7px 10px;
            vertical-align: top;
        }
        .items-table tr:last-child td {
            border-bottom: none;
        }
        .item-label {
            width: 64%;
            color: #243b53;
        }
        .item-value {
            width: 36%;
            text-align: right;
            font-weight: bold;
            color: #102a43;
        }
        .note-block {
            padding: 10px;
            line-height: 1.6;
            color: #243b53;
        }
        .note-title {
            font-weight: bold;
            color: #12344d;
            margin-bottom: 6px;
            text-transform: uppercase;
        }
        .empty-note {
            color: #829ab1;
            font-style: italic;
        }
        .footer-line {
            margin-top: 20px;
            border-top: 1px solid #d9e2ec;
            padding-top: 8px;
            font-size: 9px;
            color: #7b8794;
            text-align: right;
        }
        .review-block {
            margin-top: 18px;
            border: 1px solid #e4ecf3;
            background: #fbfdff;
        }
        .review-title {
            background: <?php echo $primaryColor; ?>;
            color: #ffffff;
            font-weight: bold;
            font-size: 11px;
            padding: 8px 10px;
            text-transform: uppercase;
        }
        .review-body {
            padding: 10px;
            color: #243b53;
            line-height: 1.7;
        }
        .review-line {
            margin-top: 12px;
        }
    </style>
</head>
<body>
<?php
$rawLines = preg_split('/\r\n|\r|\n/', (string) $report->report_body);
$sections = [];
$currentSection = null;
$currentItems = [];
$currentParagraphs = [];

$flushSection = function () use (&$sections, &$currentSection, &$currentItems, &$currentParagraphs) {
    if ($currentSection === null) {
        return;
    }

    $sections[] = [
        'title' => $currentSection,
        'items' => $currentItems,
        'paragraphs' => $currentParagraphs,
    ];

    $currentItems = [];
    $currentParagraphs = [];
};

foreach ($rawLines as $line) {
    $line = trim($line);

    if ($line === '') {
        continue;
    }

    if (preg_match('/^\d+(?:\.\d+)?\s*/', $line) || in_array($line, ['PAR STATUS', 'Risk Observations:', 'Client Quality Assessment:'], true)) {
        $flushSection();
        $currentSection = rtrim($line, ':');
        continue;
    }

    if (preg_match('/^[a-z]\)\s*(.+?)(?::\s*(.*))?$/i', $line, $matches)) {
        $currentItems[] = [
            'label' => $matches[1],
            'value' => isset($matches[2]) ? $matches[2] : '',
        ];
        continue;
    }

    if (strpos($line, ':') !== false) {
        [$label, $value] = array_pad(explode(':', $line, 2), 2, '');
        $currentItems[] = [
            'label' => trim($label),
            'value' => trim($value),
        ];
        continue;
    }

    $currentParagraphs[] = $line;
}

$flushSection();
?>
<div class="page">
    <div class="header">
        <table class="branding-table">
            <tr>
                <td class="logo-cell">
                    <?php if ($logoSrc !== ''): ?>
                        <img class="logo" src="<?php echo $logoSrc; ?>" alt="Company Logo">
                    <?php endif; ?>
                </td>
                <td>
                    <p class="brand-title"><?php echo htmlspecialchars($compdata->comp_name ?? 'Company'); ?></p>
                    <p class="brand-subtitle"><?php echo htmlspecialchars($compdata->adress ?? ''); ?></p>
                </td>
            </tr>
        </table>

        <div class="report-banner">
            <p class="report-banner-title"><?php echo htmlspecialchars($bannerTitle); ?></p>
            <p class="report-banner-subtitle"><?php echo htmlspecialchars($bannerSubtitle); ?></p>
        </div>
    </div>

    <div class="meta-wrap">
        <table class="meta-table">
            <tr>
                <td>
                    <span class="meta-label">Officer Name</span>
                    <span class="meta-value"><?php echo htmlspecialchars($report->empl_name ?: 'N/A'); ?></span>
                </td>
                <td>
                    <span class="meta-label">Branch</span>
                    <span class="meta-value"><?php echo htmlspecialchars($report->blanch_name ?: 'N/A'); ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="meta-label">Report Date</span>
                    <span class="meta-value"><?php echo htmlspecialchars(date('F j, Y', strtotime($report->report_date))); ?></span>
                </td>
                <td>
                    <span class="meta-label">Report Title</span>
                    <span class="meta-value"><?php echo htmlspecialchars($report->report_title); ?></span>
                </td>
            </tr>
        </table>
    </div>

    <?php foreach ($sections as $section): ?>
        <?php $isAlt = in_array($section['title'], ['PAR STATUS', 'Risk Observations', 'Client Quality Assessment'], true); ?>
        <div class="section">
            <div class="section-title<?php echo $isAlt ? ' alt' : ''; ?>"><?php echo htmlspecialchars($section['title']); ?></div>
            <div class="section-body">
                <?php if (!empty($section['items'])): ?>
                    <table class="items-table">
                        <?php foreach ($section['items'] as $item): ?>
                            <tr>
                                <td class="item-label"><?php echo htmlspecialchars($item['label']); ?></td>
                                <td class="item-value"><?php echo htmlspecialchars($item['value'] !== '' ? $item['value'] : '-'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>

                <?php if (!empty($section['paragraphs'])): ?>
                    <div class="note-block">
                        <?php foreach ($section['paragraphs'] as $paragraph): ?>
                            <div><?php echo htmlspecialchars($paragraph); ?></div>
                        <?php endforeach; ?>
                    </div>
                <?php elseif (empty($section['items'])): ?>
                    <div class="note-block empty-note">No details recorded.</div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="review-block">
        <div class="review-title">Declaration</div>
        <div class="review-body">
            <div>I confirm that the above information is accurate and complete.</div>
            <div class="review-line">Signature: __________________________</div>
            <div class="review-line">Date: __________________________</div>
        </div>
    </div>

    <div class="review-block">
        <div class="review-title">11. Management Review</div>
        <div class="review-body">
            <div>Comments:</div>
            <div style="height: 48px;"></div>
            <div class="review-line">Signature: __________________________</div>
        </div>
    </div>

    <div class="footer-line">
        Generated on <?php echo date('F j, Y g:i A'); ?>
    </div>
</div>
</body>
</html>