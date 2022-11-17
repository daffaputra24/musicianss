                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Tambah Studio <small>(Data Studio)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barang/post'); ?>
                                <div class="form-group">
                                    <label>No. Studio (lantai. )</label>
                                    <input class="form-control" name="nama_barang" placeholder="No. Kamar">
                                </div>
                                <div class="form-group">
                                    <label>Nama Kamar</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'> $k->nama_kategori </option>";
                                        } ?>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Harga Sewa Per Hari</label>
                                    <input class="form-control" name="harga" placeholder="harga">
                                </div> -->

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->