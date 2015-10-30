  <script src="inc/assets/js/jquery.min.js"></script>
  <script src="inc/assets/js/bootstrap.min.js"></script>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
							<h2 class="section-heading">Administrator Baru</h2>
                    </div>
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
	    <div class="col-md-6">
		      <div class="form-group">
		          <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required data-validation-required-message="Isikan Nama Lengkap">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="tempat" placeholder="Tempat Lahir" required data-validation-required-message="Isikan Tempat">
		    </div>
		      <div class="form-group">
		        <input type="date" class="form-control" id="tanggal">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="alamat" placeholder="Alamat" required data-validation-required-message="Isikan Alamat">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="telepon" placeholder="Telepon" required data-validation-required-message="Isikan Nomor Telepon">
		      </div>
		      <div class="form-group">
		        <input type="email" class="form-control" id="email" placeholder="E-mail" required data-validation-required-message="Isikan Alamat E-mail">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="kdpos" placeholder="Kode Pos" required data-validation-required-message="Isikan Kode Pos">
		      </div>
		      <div class="form-group">
		        <select name="Agama" class="form-control">
		              <option value="option1">----Agama----</option>
		              <option value="Islam">Islam</option>
		              <option value="Kristen">Kristen</option>
		              <option value="Katolik">Katolik</option>
		              <option value="Hindu">Hindu</option>
		              <option value="Budha">Budha</option>
		        </select>
		      </div>
		      <div class="form-group">
		        <input type="radio" name="sex" value="Perempuan" checked>Perempuan
		        <input type="radio" name="sex" value="Laki-laki"> Laki-laki
		      </div>
		      <div class="form-group">
		        <input type="file" class="" id="foto">
		      </div>
				<div class="col-lg-12 text-center">
						<button type="submit" class="btn btn-danger">Submit</button>
				</div>
       	</div>

		<!-- /. PAGE INNER  -->
            </div>