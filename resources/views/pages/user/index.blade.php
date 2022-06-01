@extends('templates.master-admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}" class="link"><i
                                    class="ri-home-3-line fs-5"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Data User
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Data User</h1>
            </div>
            <div
                class="
            col-lg-4 col-md-6
            d-none d-md-flex
            align-items-center
            justify-content-end
            ">
                <a href="{{ route('user.create') }}" class="btn btn-info d-flex align-items-center ms-2">
                    <i class="ri-add-line me-1"></i>
                    Tambah Baru
                </a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================= -->
    <!-- Container fluid  -->
    <!-- ============================================================= -->
    <div class="container-fluid">
        <!-- ============================================================= -->
        <!-- Start Page Content -->
        <!-- ============================================================= -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabel-data" class="table customize-table mb-0 v-middle text-nowrap">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th class="border-bottom border-top">NO</th>
                                        <th class="border-bottom border-top">NAMA</th>
                                        <th class="border-bottom border-top">EMAIL</th>
                                        <th class="border-bottom border-top">ROLE</th>
                                        <th class="border-bottom border-top">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($users as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->getRoleNames()[0] }}</td>
                                            <td>
                                                @if ($item->id != 1)
                                                    <div class="dropdown dropstart">
                                                        <a href="#" class="link" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-more-horizontal feather-sm">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('user.edit', $item->id) }}">Edit</a>
                                                            </li>
                                                            @if ($item->id != Auth::user()->id)
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)"
                                                                        onclick="hapusData('{{ $item->id }}')">Hapus</a>
                                                                </li>

                                                                <form id="data-{{ $item->id }}"
                                                                    action="{{ route('user.destroy', $item->id) }}"
                                                                    method="post" style="display:none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            @endif
                                                        </ul>

                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center"></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================= -->
        <!-- End PAge Content -->
        <!-- ============================================================= -->
    </div>
    <!-- ============================================================= -->
    <!-- End Container fluid  -->
    <!-- ============================================================= -->
@endsection

@section('myjs')
    <script>
        $(function() {
            $("#menu-user").addClass('active');
            $("#tabel-data").DataTable({
                responsive: true,
            });
        });

        function hapusData(id) {
            let y = confirm('Yakin mau dihapus ?');
            if (y == true) {
                $("#data-" + id).submit();
            }
        }
    </script>
@endsection
