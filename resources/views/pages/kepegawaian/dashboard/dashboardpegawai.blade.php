@extends('layouts.Admin.adminpegawai')

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-2">
                        <h1 class="page-header-title">
                            <div class="page-header-icon pt-2 mr-3"><i class="far fa-user"></i></div>
                            Dashboard Pegawai
                        </h1>
                        <div class="page-header-subtitle"> Manajemen Pegawai</div>
                    </div>                                    
                </div>
            </div>
        </div>
</main>
    <div class="container mt-n10">
        <div class="card card-waves mb-4">
            <div class="card-body p-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <h2 class="text-primary">Welcome back, your dashboard is ready!</h2>
                        <p class="text-gray-700">Great job, your affiliate dashboard is ready to go! You can view sales, generate links, prepare coupons, and download affiliate reports using this dashboard.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main page content-->
    <div class="container mt-2">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ml-0" href="account-profile.html">Profile Pegawai</a>
            <a class="nav-link" href="account-security.html">Security</a>
            <a class="nav-link" href="account-security.html">Riwayat Pegawai</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="/backend/src/assets/img/freepik/profiles/profile-6.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">Upload Profile Picture Pegawai</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card card-header-actions mb-4">
                    <div class="card-header">Profile Pegawai
                        <button class="btn btn-primary">Edit Profile</button>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="form-group">
                                <label class="small mb-1" for="inputUsername">Nama Lengkap Pegawai</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="I Putu Adi Merta Pratama" readonly>
                            </div>
                            <!-- Form Row-->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputFirstName">Nama Panggilan</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Adim" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputOrgName">Tempat Lahir</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Tabanan" readonly>
                                </div>
                               
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLocation">Tanggal Lahir</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="12/12/1998" readonly>
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLastName">Nomor Induk Pegawai</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="992093819" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLastName">Unit Kerja</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="992093819" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLastName">Jabatan</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="992093819" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputOrgName">Jenis Kelamin</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Laki-Laki" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLocation">Agama</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="Hindu" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLocation">No Telephone</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="081246602400" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputOrgName">Status Perkawinan</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Lajang" readonly>
                                </div>
                               
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLocation">Golongan Darah</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="A" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="small mb-1" for="inputLocation">Jumlah Tanggungan</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="-" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="adimertap@gmail.com" readonly>
                            </div>
                            <!-- Form Row-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="small mb-1" for="inputPhone">Kota Asal</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="Tabanan" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1" for="inputPhone">Pendidikan Terakhir</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="SMA" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Alamat Lengkap</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="Jalan Anyelir Bongan Kauh Tabanan" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 
@endsection