@extends('user.layouts.app')

@section('content')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <!-- task, page, download counter  start -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-purple">$30200</h4>
                                        <h6 class="text-muted m-b-0">Anggaran Tahun 2024</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-bar-chart f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">290+</h4>
                                        <h6 class="text-muted m-b-0">Anggaran Terserap</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-file-text-o f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">145</h4>
                                        <h6 class="text-muted m-b-0">Anggaran Belum Terserap</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-calendar-check-o f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>                                 
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Data Saldo Per Unit</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Unit</th>
                                <th>Jumlah Anggaran</th>
                                <th>Anggaran Terserap</th>
                                <th>Anggaran Belum Terserap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Unit A</td>
                                <td>7.500.000</td>
                                <td>5.000.000</td>
                                <td>2.500.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Unit B</td>
                                <td>7.800.000</td>
                                <td>3.500.000</td>
                                <td>3.800.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Unit C</td>
                                <td>7.500.000</td>
                                <td>5.000.000</td>
                                <td>2.500.000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Unit D</td>
                                <td>5.500.000</td>
                                <td>5.000.000</td>
                                <td>500.000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Unit E</td>
                                <td>9.000.000</td>
                                <td>5.000.000</td>
                                <td>4.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="styleSelector"> </div>
    </div>
</div>
@endsection