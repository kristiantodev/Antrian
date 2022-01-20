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

                                 <a data-toggle="modal" data-target="#bb2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Tambah Data Manual</button>
                                </a>

                                 <a data-toggle="modal" data-target="#modal-tambah-loket">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Tambah Loket</button>
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

                                    
                                         <tr align="center">

                                                    <td></td>
                                                    <td></td>
                                                     <td></td>
                                                    <td></td>
                                                    
                                                  </tr>
                              
                                                  
                                                </tbody>
                                            </table>

                                          </div>

                                           <div class="col-lg-5 col-md-6 col-5">  

                                               <div class="alert alert-ku" role="alert">
                                                <center>
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Loket</font></b></h6>
                                                 </center>
                                                </div>

                                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                      
                                                <tr align="center">
                                    <th><b>No.</b></th>
                                    <th><b>Loket</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>

                                                </thead>
    
    
                                                <tbody>
<?php $no=1; foreach ($lokets as $loket): ?>
                                                  <tr align="center">

                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $loket->loket ?></td>
                                                     <td>
                                                       
                                                       <a data-toggle="modal" data-target="#modal-edit<?php echo $loket->id_loket ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('antrian/hapus/'.$loket->id_loket); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>

                                                     </td>
                                                    
                                                  </tr>
             <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                             


                          
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


                    <!-- Modal -->
                  <div class="modal fade text-left" id="bb2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Tambah Data Simulasi</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('antrian/add'); ?>" method="post">
                      <div class="modal-body">
                        

                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Simulasi hari ke-</label>
                          <select name="day" id="select" required class="custom-select">
                  <option value="">-- Hari ke --</option>
                  
                  <?php
                      for ($i=1; $i<=30; $i++){
                  ?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php } ?>
                </select>
                        </fieldset>

                          <fieldset class="form-group floating-label-form-group">
                          <label for="email">Pilih Loket</label>
                          <select name="id_loket" id="select" required class="custom-select">
                  <option value="">-- Loket --</option>
                  
                 <?php $no=1; foreach ($lokets as $loket): ?>
                      <option value="<?php echo $loket->id_loket ?>"><?php echo $loket->loket ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Jumlah Pengunjung</label>
                          <input type="number" name="jumlah_pengunjung" class="form-control  round <?php echo form_error('jumlah_pengunjung') ? 'is-invalid':'' ?>" id="email" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                       <font color="red"><?php echo form_error('jumlah_pengunjung') ?></font>
                        </fieldset>
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Simpan
                                </button>

                      </div>
                      </form>
                    </div>
                    </div>
                  </div>


                   <!-- modal -->
<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
      <h5 class="modal-title"><font color='white'>Konfirmasi Penghapusan</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin akan menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <a href="#" id="btn-delete" type="button" class="btn btn-danger mr-1"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <!-- Modal -->
 <?php $no=0; foreach ($lokets as $loket): ?>
                  <div class="modal fade text-left" id="modal-edit<?php echo $loket->id_loket ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Data Loket</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('antrian/edit'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$loket->id_loket;?>" name="id_loket" class="form-control" >
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Loket</label>
                          <input type="text" value="<?php echo $loket->loket ?>" required name="loket" class="form-control  round <?php echo form_error('loket') ? 'is-invalid':'' ?>" id="email">
                       <font color="red"><?php echo form_error('loket') ?></font>
                        </fieldset>           
      
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>


 <div class="modal fade text-left" id="modal-tambah-loket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Tambah Data Loket</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('antrian/addAntrian'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Loket</label>
                          <input type="text" required name="loket" class="form-control  round <?php echo form_error('loket') ? 'is-invalid':'' ?>" id="email">
                       <font color="red"><?php echo form_error('loket') ?></font>
                        </fieldset>           
      
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>

  

  <script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>
                  