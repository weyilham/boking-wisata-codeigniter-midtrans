<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data User</li>
        </ol>
    </section><br><br>
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>


        <!-- Main content -->
        <section class="content">


            <div class="row">
                <div class="col-md-8">
                    <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary">Tambah User</a><br>

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; ?>
                          <?php foreach ($user as $u): ?>
                            <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $u['nama'] ?></td>
                              <td><?= $u['email'] ?></td>

                              <?php
                                  if ($u['role'] == 1 ) {
                                    $role = "Admin";
                                  }else ($u['role'] == 2) {
                                    // code...
                                    $role = "Ketua"
                                  }

                               ?>
                              <td><?= $role ?></td>

                              <td>
                                <a href="<?= base_url('user/edit/') . $u['id_user'] ?>" class="btn btn-success">edit</a>
                                <a href="<?= base_url('user/delete/') . $u['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin data akan dihapus?');">hapus</a>
                              </td>
                          <?php endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
</div>
