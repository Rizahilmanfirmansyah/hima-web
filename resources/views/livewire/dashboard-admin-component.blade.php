<div>
    <h3>Hi, {{Auth::user()->name}}</h3>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="ti-user"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $penguruse }}</span></div>
                                <div class="stat-heading">Pengurus</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="ti-view-grid"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $divisi }}</span></div>
                                <div class="stat-heading">Divisi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="ti-agenda"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $daftar }}</span></div>
                                <div class="stat-heading">Pendaftar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="ti-video-camera"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $berita }}</span></div>
                                <div class="stat-heading">Berita</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="card" style="width: auto;">
            <div class="card-header">
                Pengurus
            </div>
            <div class="card-body">
                <table class="table" id="data">
                    <thead>
                        <tr>
                            <th>Nama Pengurus</th>
                            <th>Divisi</th>
                            <th>Jabatan</th>
                            <th>Foto</th>
                            <th>Periode</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengurus as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->divisi->nama_divisi ?? '' }}</td>
                                <td>{{ $p->jabatan }}</td>
                                <td><img src="{{ asset('assets/fotos/fotos') }}/{{ $p->foto }}"
                                        class="img-thumbnail" style=" width: 50px; height: 50px" alt=""></td>
                                <td>{{ $p->periode }}</td>
                            </tr>

                    </tbody>
                    @endforeach


                </table>

            </div>

        </div>
        <script>
            new DataTable('#data');
        </script>

    </div>
</div>
{{-- <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Custom Table</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table" id="data-product">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Avatar</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="serial">1.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5469 </td>
                            <td>  <span class="name">Louis Stanley</span> </td>
                            <td> <span class="product">iMax</span> </td>
                            <td><span class="count">231</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">2.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5468 </td>
                            <td>  <span class="name">Gregory Dixon</span> </td>
                            <td> <span class="product">iPad</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">3.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5467 </td>
                            <td>  <span class="name">Catherine Dixon</span> </td>
                            <td> <span class="product">SSD</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">4.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5466 </td>
                            <td>  <span class="name">Mary Silva</span> </td>
                            <td> <span class="product">Magic Mouse</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-pending">Pending</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div> --}}
<script>
    new DataTable('#data-product', {
        info: false,
        order: false,
        paging: false
    });
</script>
</div>
