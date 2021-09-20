<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" />

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>

                        <div class="row">


                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h3 class="page-title"><b><i class="fas fa-balance-scale"></i>&nbsp;&nbsp;Simulasi Antrian</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Pemodelan dan Simulasi</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                                            
                                <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Import Data Simulasi</button>
                                </a>
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
            
                                <div class="col-12">      
                                    <div class="card m-b-20">
                                        <div class="card-body">  


                                        <div class="row">       

                     <div class="col-lg-7 col-md-6 col-5">                                        

                   

                                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr align="center">
                                    <th><b>Lama Pengamatan (Hari)</b></th>
                                    <th><b>Loket Antrian 1 (Orang)</b></th>
                                    <th><b>Loket Antrian 2 (Orang)</b></th>
                                    <th><b>Total Kedatangan (Orang)</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                    <?php $no=1; $total=0; $rata2; $jumlah=0; foreach ($simulasi as $s): ?>
                                     <?php 
                                       $total=$total+$s->total;
                                       $jumlah=$jumlah+1;
                                     ?>
                                                  <tr align="center">

                                                    <td><?php echo $s->hari ?></td>
                                                    <td><?php echo $s->totalLoket1 ?></td>
                                                     <td><?php echo $s->totalLoket2 ?></td>
                                                    <td><?php echo $s->total ?></td>
                                                    
                                                  </tr>
                                      <?php endforeach; ?>
                                                  <tr align="center">
                                                    <td colspan="3"><b>Jumlah</b></td>
                                                    <td><b><?php echo $total ?></b></td>
                                                  </tr>
                                                  <tr align="center">
                                                    <td colspan="3"><b>Rata-rata</b></td>
                                                    <td><b><?php echo number_format($total/$jumlah,2) ?></b></td>
                                                  </tr>
                                                </tbody>
                                            </table>


                                            Dari data hasil pengamatan dapat diketahui :
                                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr align="right">
                                    <th align="right">Rata-rata tingkat kedatangan (Mean arrival rate)</th>
                                    <td align="center"><?php echo number_format($total/$jumlah,0) ?></td>
                                </tr>
                                <tr align="right">
                                    <th align="right">Rata-rata tingkat pelayanan (Mean server rate)</th>
                                    <td align="center"><?php echo number_format(($total/$jumlah)/2,0) ?></td>
                                </tr>

                                <tr align="right">
                                    <th align="right">Lama waktu pengamatan (M)</th>
                                    <td align="center">2 Jam/Hari</td>
                                </tr>
                                                </thead>
                                              </table>


                                          </div>

                                          <?php
                                          $lamda = number_format($total/$jumlah,0);
                                          $miu = number_format(($lamda)/2,2);

                                           $pembagi = (1 +(0.5*(($lamda/$miu)*2)))*((2*$miu)/(2*$miu)-$lamda);
                                           $Po = 1/$pembagi;

                                           if ($Po < 0) {
                                             $Po = $Po*-1;
                                           }

                                           $Ls1 = $lamda*$miu*(pow($lamda/$miu, 2));
                                           $Ls2 = pow((2*$miu)-$miu, 2);
                                           $Ls3 = $Po + ($lamda/$miu);

                                           $Ls = number_format(($Ls1/$Ls2)*$Ls3, 2);
                                           $Lq = $Ls/($lamda/$miu);

                                           $Ws = $Ls/$miu;
                                           $Wq = $Ls/$lamda;
                                           ?>

                                           <div class="col-lg-5 col-md-6 col-5">  
                                             
             <div class="col-xl-12">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Antrian</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Probabilitas Tidak Ada Pengunjung (Po)</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 


                                                    <?php echo number_format($Po,2) ?> %</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-balance-scale display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                 <div class="col-xl-12">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Antrian</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Rata-rata Pengunjung dalam Sistem (Ls)</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 


                                                    <?php echo number_format($Ls,2) ?> Orang</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-balance-scale display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Antrian</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Rata-rata Pengunjung Menunggu dalam Antrian (Lq)</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 


                                                    <?php echo number_format($Lq,2) ?> Orang</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-balance-scale display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                 <div class="col-xl-12">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Antrian</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Rata-rata waktu yang dihabiskan seorang pengunjung di dalam sistem (Ws)</h6>
                                                    <h4 class="mb-3 mt-0"><b> 


                                                    <?php echo number_format($Ws,2) ?> Menit</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-balance-scale display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                 <div class="col-xl-12">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Antrian</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Rata-rata waktu yang dihabiskan oleh seorang pelanggan di dalam antrian (Wq)</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 


                                                    <?php echo number_format($Wq,2) ?> Menit</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-balance-scale display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                          
                                           </div>

                                         </div>



                                            
    
                                       
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    
</div>
        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->



              
<!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Import Data Simulasi</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                     
                     <br><br>

                     <center>

<?= form_open_multipart(); ?>
        <input type="file" name="excel" />
        <button type="submit" name="submit" value="upload">Upload</button>
    <?= form_close(); ?>

                    </center>

  <br><br>
                    </div>
                    </div>
                  </div>
                  