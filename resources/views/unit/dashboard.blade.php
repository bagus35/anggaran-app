@extends('unit.layouts.app')

@section('content')
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
                                    <h4 class="text-c-purple">Rp. 4.367.000</h4>
                                    <h6 class="text-muted m-b-0">Sisa Saldo Anggaran</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fa fa-bar-chart f-28"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- task, page, download counter  end -->
                
                <!--  tabel  -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Data Anggaran Setiap Unit</h5>
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
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Total Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Workshop Pelatihan</td>
                                    <td>09/12/2023</td>
                                    <td>2.000.000</td>
                            
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Pelatihan Kerja</td>
                                    <td>10/10/2023</td>
                                    <td>4.000.000</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Workshop Outdoor</td>
                                    <td>11/07/2023</td>
                                    <td>2.000.000</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Page-body end -->
    </div>
    <div id="styleSelector"> </div>
</div>
@endsection