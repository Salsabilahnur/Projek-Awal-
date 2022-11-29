
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Data Buku Perpustakaan</h1>
                        <p class="mb-4">Universitas Bina Sarana Informatika - For more information about Data, 
                            please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($this->ModelBuku->getBuku() as $data) : ?>
                                                    <tr>
                                                        <td><?= $data["judul_buku"]; ?></td>
                                                        <td><?= $data["pengarang"]; ?></td>
                                                        <td><?= $data["penerbit"]; ?></td>
                                                        <td><?= $data["tahun_terbit"]; ?></td>
                                                        <td><?= $data["stok"]; ?></td>
                                                        <td><?= $data["dipinjam"]; ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- End of Main Content -->
                    </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

