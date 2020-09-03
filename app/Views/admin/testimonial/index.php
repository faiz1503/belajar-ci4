  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/home/index.php">Home</a></li>
              <li class="breadcrumb-item active">Testimonial</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <a class="btn btn-success" href="<?= base_url(); ?>/admin/testimonial/create">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $nomor = 0; ?>
                    <?php foreach($testimonial as $key => $row) { ?>
                      <tr>
                        <td><?php echo ++$nomor; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><img class='rounded-circle' src=" <?php echo base_url('uploads/' . $row['image']) ?> " width="100" height="100"></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->