<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8" />
    <title>Fomu ya Maombi ya Mkopo</title>
    <style>
        body { font-family: sans-serif; font-size: 10px; }
        .container { width: 100%; margin: 0 auto; }
        .logo { text-align: center; margin-bottom: 5px; }
        .logo img { width: 150px; }
        .header-title { text-align: center; font-weight: bold; font-size: 12px; margin-bottom: 10px; border: 1px solid #000; padding: 5px; background-color: #d3d3d3; }
        .section-title { font-weight: bold; background-color: #d3d3d3; padding: 4px; border: 1px solid #000; text-align: left; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        td, th { border: 1px solid #000; padding: 4px; text-align: left; }
        .no-border-table td { border: none; padding: 2px; }
        .outer-bordered-table { border: 1px solid black; }
        .inner-table td { border: 1px solid black; }
        .center-text { text-align: center; }
        .right-text { text-align: right; }
        .bold { font-weight: bold; }
        .footer { text-align: center; font-size: 9px; margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="https://i.ibb.co/9g3v2cv/logo.png" alt="Tripple Finance Limited"/>
    </div>

    <div class="header-title">FOMU YA MAOMBI YA MKOPO</div>
    <div style="text-align: right; font-weight: bold; margin-bottom: 5px">
        NB: Sehemu Zote Zijazwe Kwa Kalamu ya Bluu na Herufi Kubwa
    </div>

    <!-- 1. TAARIFA YA MTEJA -->
    <div class="section-title">1. TAARIFA YA MTEJA</div>
    <table class="outer-bordered-table">
        <tr>
            <td colspan="4">Jina Kamili (kama lilivyo kwenye kitambulisho)</td>
        </tr>
        <tr>
            <td><?= $record['app']->first_name ?></td>
            <td><?= $record['app']->middle_name ?></td>
            <td><?= $record['app']->last_name ?></td>
            <td><?= $record['app']->nickname ?? '' ?></td>
        </tr>
        <tr>
            <td><?= $record['app']->id_number ?></td>
            <td><?= $record['app']->dob ?></td>
            <td><?= $record['app']->gender ?></td>
            <td><?= $record['app']->marital_status ?></td>
        </tr>
        <tr>
            <td><?= $record['app']->children_count ?></td>
            <td colspan="2"><?= $record['app']->dependents_count ?></td>
            <td><?= $record['app']->spouse_name ?? '' ?></td>
        </tr>
        <tr>
            <td><?= $record['app']->spouse_nida ?? '' ?></td>
            <td><?= $record['app']->phone ?></td>
            <td colspan="2"><?= $record['app']->phone_alt ?? '' ?></td>
        </tr>
        <tr>
            <td><?= $record['app']->education_level ?></td>
            <td colspan="3"><?= $record['app']->postal_address ?? '' ?></td>
        </tr>
        <tr>
            <td><?= $record['app']->permanent_residence ?? '' ?></td>
            <td><?= $record['app']->business_address ?? '' ?></td>
            <td><?= $record['app']->shina ?? '' ?></td>
            <td><?= $record['app']->mtaa ?? '' ?></td>
        </tr>
    </table>

    <!-- 2. TAARIFA YA BIASHARA -->
    <div class="section-title">2. TAARIFA YA BIASHARA</div>
    <table class="outer-bordered-table">
        <tr>
            <td>Aina ya Biashara</td>
            <td colspan="3"><?= $record['app']->business_type ?></td>
            <td>Manunuzi ya Bidhaa kwa Mwezi</td>
            <td colspan="2"><?= number_format($record['app']->monthly_purchases, 2) ?></td>
        </tr>
        <tr>
            <td>Mauzo ya Mwezi</td>
            <td colspan="3"><?= number_format($record['app']->monthly_sales, 2) ?></td>
            <td>Kodi ya Biashara</td>
            <td colspan="2"><?= number_format($record['app']->business_tax, 2) ?></td>
        </tr>
        <tr>
            <td>Faida ya Mwezi</td>
            <td colspan="3"><?= number_format($record['app']->monthly_profit, 2) ?></td>
            <td>Matumizi ya Familia</td>
            <td colspan="2"><?= number_format($record['app']->family_expenses, 2) ?></td>
        </tr>
        <tr>
            <td>Matumizi Mengineyo</td>
            <td colspan="3"><?= number_format($record['app']->other_expenses, 2) ?></td>
            <td>Jumla ya Mapato</td>
            <td colspan="2"><?= number_format($record['app']->total_income, 2) ?></td>
        </tr>
        <tr>
            <td>Vyanzo vya Ziada</td>
            <td colspan="3"><?= $record['app']->additional_sources ?></td>
            <td>Jumla ya Matumizi</td>
            <td colspan="2"><?= number_format($record['app']->total_expenses, 2) ?></td>
        </tr>
    </table>

    <!-- 3. LENGO LA MKOPO -->
    <div class="section-title">3. LENGO LA MKOPO</div>
    <table class="outer-bordered-table">
        <tr>
            <td>Kiasi cha Mkopo Kinachoombwa TZS</td>
            <td><?= number_format($record['app']->amount_requested, 2) ?></td>
        </tr>
        <tr>
            <td>Lengo la Mkopo</td>
            <td><?= $record['app']->loan_purpose ?></td>
        </tr>
    </table>

    <!-- 4. TAARIFA ZANGU ZA UKOPAJI -->
    <div class="section-title">4. TAARIFA ZANGU ZA UKOPAJI</div>
    <table class="outer-bordered-table">
        <tr>
            <th>Count</th>
            <th>Kampuni</th>
            <th>Kiasi</th>
            <th>Tarehe</th>
        </tr>
        <?php foreach($record['loans'] as $loan): ?>
        <tr>
            <td><?= $loan->count ?></td>
            <td><?= $loan->company ?></td>
            <td><?= number_format($loan->amount, 2) ?></td>
            <td><?= $loan->end_date ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- 5. DHAMANA -->
    <div class="section-title">5. DHAMANA</div>
    <table>
        <tr>
            <td>Aina ya Dhamana</td>
            <td class="center-text">1</td>
            <td class="center-text">2</td>
            <td class="center-text">3</td>
            <td class="center-text">4</td>
            <td class="center-text">5</td>
            <td class="center-text">6</td>
            <td class="center-text">7</td>
        </tr>
    </table>

    <!-- 6. NDUGU WA KARIBU -->
    <div class="section-title">6. NDUGU WA KARIBU</div>
    <table class="no-border-table">
        <tr>
            <?php foreach($record['relatives'] as $kin): ?>
            <td style="width: <?= 100 / count($record['relatives']) ?>%">
                <table class="inner-table">
                    <tr>
                        <td>Jina Kamili</td>
                        <td><?= $kin->name ?></td>
                    </tr>
                    <tr>
                        <td>Mahusiano</td>
                        <td><?= $kin->relation ?></td>
                    </tr>
                    <tr>
                        <td>Makazi</td>
                        <td><?= $kin->residence ?></td>
                    </tr>
                    <tr>
                        <td>Mawasiliano</td>
                        <td><?= $kin->phone ?></td>
                    </tr>
                </table>
            </td>
            <?php endforeach; ?>
        </tr>
    </table>

    <!-- 7. WADHAMINI -->
    <div class="section-title">7. WADHAMINI</div>
    <table class="no-border-table">
        <tr>
            <td style="width: 50%">
                <table class="inner-table">
                    <tr><td>Jina Kamili (1)</td><td></td></tr>
                    <tr><td>Uhusiano na Mteja</td><td></td></tr>
                    <tr><td>Mwaka mliofahamiana</td><td></td></tr>
                    <tr><td>Kazi</td><td></td></tr>
                    <tr><td>Miaka ya unapoishi</td><td></td></tr>
                </table>
            </td>
            <td style="width: 50%">
                <table class="inner-table">
                    <tr><td>Anuani ya Makazi</td><td></td></tr>
                    <tr><td>Anuani ya Biashara</td><td></td></tr>
                    <tr><td>Saini</td><td></td></tr>
                    <tr><td>Tarehe</td><td></td></tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- 8. KIAPO -->
    <div class="section-title">8. KIAPO</div>
    <table class="outer-bordered-table">
        <tr>
            <td colspan="8">
                Mimi ................................................. Makazi
                ................................................. Jinsia
                ..................... wa S.L.P .................................
                Dares Salaam, Umri ........... Dini ...................... Kabila
                ......................
            </td>
        </tr>
    </table>

    <!-- 9. RAMANI YA NYUMBANI -->
    <div class="section-title">9. RAMANI YA NYUMBANI</div>
    <table class="outer-bordered-table">
        <tr>
            <td style="width: 50%; height: 150px; vertical-align: top">RAMANI YA NYUMBANI</td>
            <td style="width: 50%; height: 150px; vertical-align: top">RAMANI YA BIASHARA</td>
        </tr>
    </table>

    <!-- 10. UHAKIKI -->
    <div class="section-title">10. UHAKIKI (KWA MATUMIZI YA OFISI TU)</div>
    <table>
        <thead>
        <tr>
            <th>CHEO</th>
            <th>JINA</th>
            <th>KIWANGO CHA MKOPO</th>
            <th>SAHIHI</th>
            <th>TAREHE</th>
        </tr>
        </thead>
        <tbody>
        <tr><td>AFISA MIKOPO</td><td></td><td></td><td></td><td></td></tr>
        <tr><td>KAMATI YA MIKOPO</td><td></td><td></td><td></td><td></td></tr>
        <tr><td>1</td><td></td><td></td><td></td><td></td></tr>
        <tr><td>2</td><td></td><td></td><td></td><td></td></tr>
        <tr><td>3</td><td></td><td></td><td></td><td></td></tr>
        <tr><td>4</td><td></td><td></td><td></td><td></td></tr>
        <tr><td>MTENDAJI WA KAMPUNI</td><td></td><td></td><td></td><td></td></tr>
        </tbody>
    </table>

    <div class="footer">
        Eneo: Sinza Kumekucha<br />
        Mawasiliano:+255(0) 786542628<br />
        Uaminifu ni Mtaji
    </div>
</div>
</body>
</html>
