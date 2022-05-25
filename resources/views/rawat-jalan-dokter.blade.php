@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

    @section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Layanan</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Rawat Jalan</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Rawat Jalan</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Keluhan</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Udin</td>
                                    <td>Pusing, Panas</td>
                                    <td>27/05/2022</td>
                                    <td>
                                        <button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-detail"></i></button>
                                        <button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-pencil"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Joko</td>
                                    <td>Mual</td>
                                    <td>28/05/2022</td>
                                    <td>
                                        <button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-detail"></i></button>
                                        <button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-pencil"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Slamet</td>
                                    <td>Batuk</td>
                                    <td>30/05/2022</td>
                                    <td>
                                        <button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-detail"></i></button>
                                        <button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-pencil"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    @endsection

@section("script")
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            // buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
@endsection

	