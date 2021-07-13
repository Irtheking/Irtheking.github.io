<div class="container">
    <h2>Form Prodi</h2>
    <?php echo form_open("prodi/save"); ?>
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_prodi" class="col-4 col-form-label">Nama Prodi</label> 
            <div class="col-8">
                <input id="nama_prodi" name="nama_prodi" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    <?php echo form_close()?>
</div> 