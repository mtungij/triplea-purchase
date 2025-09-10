<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Branch</li>
                        </ul>
                    </div>            
                 
                </div>
            </div>
                  <?php if ($das = $this->session->flashdata('massage')): ?> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="alert alert-dismisible alert-success"> <a href="" class="close">&times;</a> 
                                    <?php echo $das;?> </div> 
                            </div> 
                        </div> 
                    <?php endif; ?>
       


                <div class="col-lg-12">
                    <div class="card">
                         <div class="header">
                            <h2>➕ Maombi Mapya ya Mkopo </h2>    
                             </div>
                          <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                                        <tr>
                                              <th>#</th>
        <th>Jina la Mwombaji</th>
        <th>Simu</th>
        <th>Kiasi (TZS)</th>
        <th>Tarehe</th>
           <th>Action</th>
       
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                              <?php $no = 1; ?>
                                     <?php foreach($records as $r): ?>
                                      
                                              <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?= htmlspecialchars($r->first_name.' '.$r->last_name, ENT_QUOTES,'UTF-8'); ?></td>
        <td><?= htmlspecialchars($r->phone, ENT_QUOTES,'UTF-8'); ?></td>
        <td class="right"><?= number_format($r->amount_requested,2); ?></td>
        <td><?= $r->created_at; ?></td>
        <td>
<!--          
          <a class="btn" href="<?= site_url('admin/print_pdf'.$r->id.'/pdf');?>">download Pdf</a> -->
        </td>                                                                                   
</tr>
 
</div>
                                         <?php endforeach; ?>
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

<?php include('incs/footer.php'); ?>


