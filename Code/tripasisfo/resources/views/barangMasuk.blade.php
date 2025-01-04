<x-layout>
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Transaksi Barang Masuk</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Kode Transaksi</th>
                  <th scope="col" class="sort" data-sort="budget">Nama Barang</th>
                  <th scope="col" class="sort" data-sort="status">Kuantitas</th>
                  <th scope="col" class="sort" data-sort="status">Tujuan</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($listBarangKeluar as $barangKeluar)
                <tr>
                  <th scope="row">
                    {{$barangKeluar->id}}
                  </th>
                  <td class="budget">
                    {{$barangKeluar->nama_barang}}
                  </td>
                  <td>
                    {{$barangKeluar->kuantitas}}
                  </td>
                  <td>
                    {{$barangKeluar->asal_tujuan_barang}}
                  </td>
                  <td>
                    {{$barangKeluar->created_at->format('d/m/Y h:i:s')}}
                    <br>
                     <span class="text-center">{{$barangKeluar->created_at->diffForHumans()}}</span>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>

          <!-- Card footer -->
          <div class="card-footer py-4">
            {{$listBarangKeluar->links()}}
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</x-layout>