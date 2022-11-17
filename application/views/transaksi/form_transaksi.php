                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Reservasi Studio <small>(Pilih No.Studio & Lama Sewa Studio)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  --> 

                <div class="row"> 
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('transaksi', array('class'=>'form-horizontal')); ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Pemesan</label>
                                        <div class="col-sm-10">
                                          <input list="tamu" name="tamu" placeholder="Nama" class="form-control">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">No. Ketersediaan Studio</label>
                                        <div class="col-sm-10">
                                          <input list="barang" name="barang" placeholder="Nomor Studio" class="form-control">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Lama Sewa</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="qty" placeholder="Jam" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Tambah Studio</button>
                                        </div>
                                    </div>
                                </form>
                                <datalist id="barang">
                                    <?php foreach ($barang as $b) {
                                        echo "<option value='$b->nama_barang'> $b->nama_kategori </option>";
                                    } ?>
                                </datalist>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-12"> 
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pemesan</th>
                                                <th>Nomor Sudio</th>
                                                <th>Nama Studio</th>
                                                 <th>Lama Sewa</th>
                                                <th>Harga Sewa Per Jam</th>
                                                <th>Sub Total</th>
                                                <th><center>Aksi</center></th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_tamu ?></td>
                                                <td>No. (<?php echo $r->nama_barang ?>)</td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                 <td><?php echo $r->qty ?> Jam</td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->qty*$r->harga,2) ?></td>
                                                <td class="text-center">
                                                    <?php echo anchor('transaksi/hapusitem/' .$r->t_detail_id,'Cancel',array('class'=>'btn btn-danger btn-sm'))?>
                                                </td>
                                            </tr>
                                        <?php $total=$total+($r->qty*$r->harga);
                                        $no++; } ?>
                                            <tr class="gradeA">
                                                <td colspan="4"><b>T O T A L</b></td>
                                                <td></td>
                                                <td></td>
                                                <td><b>Rp. <?php echo number_format($total,2);?></b></td> 
                                                <td class="text-center"> 
                                                    <?php echo anchor('transaksi/selesai_belanja/','bayar lunas', array('class'=>'UserLunas btn btn-success btn-sm'))?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- proses Lunas -->
            <script type="text/javascript" src="<?php echo base_url() ?>assets/js/ProsesLunas.js" charset="utf-8"></script>
                <!-- /. ROW  -->