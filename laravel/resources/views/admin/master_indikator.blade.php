@extends('layout.master_admin')

@section('title','Master Indikator SDGs')
@section('Judul','Master Indikator')
@section('JudulDesc','Ini adalah halaman master indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data master.')
@section('content')
  <br>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Dokter</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NID</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>ID Poli</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>NID x</th>
              <th>Nama x</th>
              <th>Jenis Kelamin x</th>
              <th>ID Poli x</th>
              <th>
                <a href="#" class="btn btn-info btn-circle btn-sm">
                  <i class="fas fa-user-plus"></i>
                </a>
                <a href="#" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-circle btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </th>
            </tr>
            <tr>
              <th>NID x</th>
              <th>Nama x</th>
              <th>Jenis Kelamin x</th>
              <th>ID Poli x</th>
              <th>
                <a href="#" class="btn btn-info btn-circle btn-sm">
                  <i class="fas fa-user-plus"></i>
                </a>
                <a href="#" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-circle btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </th>
            </tr>
            <tr>
              <th>NID x</th>
              <th>Nama x</th>
              <th>Jenis Kelamin x</th>
              <th>ID Poli x</th>

              <th>
                <a href="#" class="btn btn-info btn-circle btn-sm">
                  <i class="fas fa-user-plus"></i>
                </a>
                <a href="#" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-circle btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </th>
            </tr>
            <tr>
              <th>NID x</th>
              <th>Nama x</th>
              <th>Jenis Kelamin x</th>
              <th>ID Poli x</th>

              <th>
                <a href="#" class="btn btn-info btn-circle btn-sm">
                  <i class="fas fa-user-plus"></i>
                </a>

                <a id="myBtn" href="#" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>

                    <!-- <ol>
                      <li>Mahasiswa 1</li>
                      <li>Mahasiswa 2</li>
                      <li>...</li>
                      <li>Mahasiswa n</li>
                    </ol> -->
                </div>

                <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                  modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
              </script>
            </div>

              <a href="#" class="btn btn-danger btn-circle btn-sm">
                <i class="fas fa-trash"></i>
              </a>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  <br>
@endsection
