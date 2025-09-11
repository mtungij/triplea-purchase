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
    <div class="btn-group" role="group" aria-label="Actions">
        <!-- Download PDF button -->
        <a href="<?= site_url('admin/print_pdf/'.$r->id); ?>" class="btn btn-primary d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download mr-1" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5-.5H5V1.5a.5.5 0 0 1 1 0v7.9h4a.5.5 0 0 1 0 1H6v5a.5.5 0 0 1-1 0v-5H1a.5.5 0 0 1-.5-.5z"/>
            </svg>
            Download
        </a>

        <!-- Delete button -->
        <a href="<?= site_url('admin/delete_loanapp/'.$r->id); ?>" class="btn btn-danger d-flex align-items-center" onclick="return confirm('Are you sure you want to delete this record?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash mr-1" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 5h4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0V6H6v6.5a.5.5 0 0 1-1 0v-7z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 1 1 0-2h3.5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1H14a1 1 0 0 1 1 1zm-3.5 1V4H5v9a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4h-2z"/>
            </svg>
            Delete
        </a>
    </div>
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


