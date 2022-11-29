                   <li class="nav-item">
                       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           <i class="fas fa-fw fa-cog"></i>
                           <span>Data Akademik</span>
                       </a>
                       <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                           <div class="bg-white py-2 collapse-inner rounded">
                               <a class="collapse-item" href="<?= base_url(''); ?>">Data Mahaiswa</a>
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                       <tr>
                                           <th>Nama</th>
                                           <th>NIM</th>
                                           <th>Kelas</th>
                                           <th>Tanggal Lahir</th>
                                           <th>Tempat Lahir</th>
                                           <th>Agama</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php foreach ($this->ModelSiswa->getSiswa() as $data) : ?>
                                           <tr>
                                               <td><?= $data["nama"]; ?></td>
                                               <td><?= $data["nim"]; ?></td>
                                               <td><?= $data["kelas"]; ?></td>
                                               <td><?= $data["tanggal_lahir"]; ?></td>
                                               <td><?= $data["tempat_lahir"]; ?></td>
                                               <td><?= $data["agama"]; ?></td>
                                           </tr>
                                       <?php endforeach; ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>

                   