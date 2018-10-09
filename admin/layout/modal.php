            <!-- Tambah Artikel -->
            <div class="modal fade" id="tambahArtikel" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
                    <form method="POST" action="add.php">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Tambah Artikel</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Judul Artikel</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="judul" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Foto</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="foto" class="form-control-file">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Isi Artikel</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="artikel"  rows="9" class="form-control"></textarea>
                                </div>
                            </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
					</div>
                </div>
            </div>


            <!-- Detail -->
            
			<div class="modal fade" id="detailArtikel" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
                        <form>
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Detail Artikel</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <h3>Judul Artikel</h3>
                            <br />
                            <div class="text-center">
                                <img src="../assets/images/icon/logo.png" alt="CoolAdmin" />
                            </div>
                            <br />
							<p>
								There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
								zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
								resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
								genus Equus, along with other living equids.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>
					</div>
				</div>
            </div>
            
             <!-- Tambah Staff -->

            <div class="modal fade" id="tambahStaff" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
                    <form>
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Tambah Staff</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="Nama" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">NIP</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="NIP" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Telepon</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="telepon" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Foto</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="foto" class="form-control-file">
                                </div>
                            </div>
                        </div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Tambah</button>
                        </div>

                     </form>
                    </div>
				</div>
			</div>
                            
             <!-- Detail Staff -->

			<div class="modal fade" id="detailStaff" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
                        <form>
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Detail Artikel</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            
                            <table class="table table-borderless table-data2">
                                <tr>
                                    <td rowspan="5"><img src="../assets/images/icon/logo.png"></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>Ini Nama</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>8130581293735</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>ininama@ulm.ac.id</td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>01234567890</td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>
                    </div>
				</div>
			</div>