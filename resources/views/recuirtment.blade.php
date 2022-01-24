<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Recuirtment HIP</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <link rel="icon" href="{{url('/assets_dashboard/images/hip_no_bg.png')}}" type="image/gif">
        <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="{{url('/assets_dashboard/vendors/select2/select2.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets_dashboard/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{url('/assets_dashboard/vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{url('/assets_dashboard/vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{url('/assets_dashboard/vendors/css/vendor.bundle.base.css')}}">
        <!-- inject:css -->
        <link rel="stylesheet" href="{{url('/assets_dashboard/css/vertical-layout-light/style.css')}}">
        <style>
            * {
                margin: 0;
                padding: 0
            }

            html {
                height: 100%
            }

            #grad1 {
                background-color: #9C27B0;
                /* background-image: linear-gradient(120deg, #FF4081, #81D4FA); */
                background: url("https://cdns.klimg.com/dream.co.id/resized/640x480/news/2019/06/29/111082/antam-buka-lowongan-kerja-lulusan-d-3-bisa-daftar-1906290.jpg");
                width: 100%;
            }

            #msform {
                text-align: center;
                position: relative;
                margin-top: 20px
            }

            #msform fieldset .form-card {
                background: white;
                border: 0 none;
                border-radius: 0px;
                box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                padding: 20px 40px 30px 40px;
                box-sizing: border-box;
                width: 94%;
                margin: 0 3% 20px 3%;
                position: relative
            }

            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 0.5rem;
                box-sizing: border-box;
                width: 100%;
                margin: 0;
                padding-bottom: 20px;
                position: relative
            }

            #msform fieldset:not(:first-of-type) {
                display: none
            }

            #msform fieldset .form-card {
                text-align: left;
                color: #9E9E9E
            }

            #msform input,
            #msform textarea {
                padding: 0px 8px 4px 8px;
                border: none;
                border-bottom: 1px solid #ccc;
                border-radius: 0px;
                margin-bottom: 25px;
                margin-top: 2px;
                width: 100%;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 16px;
                letter-spacing: 1px
            }

            #msform input:focus,
            #msform textarea:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: none;
                font-weight: bold;
                border-bottom: 2px solid skyblue;
                outline-width: 0
            }

            #msform .action-button {
                width: 100px;
                background: skyblue;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 0px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px
            }

            #msform .action-button:hover,
            #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
            }

            #msform .action-button-previous {
                width: 100px;
                background: #616161;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 0px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px
            }

            #msform .action-button-previous:hover,
            #msform .action-button-previous:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
            }

            select.list-dt {
                border: none;
                outline: 0;
                border-bottom: 1px solid #ccc;
                padding: 2px 5px 3px 5px;
                margin: 2px
            }

            select.list-dt:focus {
                border-bottom: 2px solid skyblue
            }

            .card {
                z-index: 0;
                border: none;
                border-radius: 0.5rem;
                position: relative;
            }

            .fs-title {
                font-size: 25px;
                color: #2C3E50;
                margin-bottom: 10px;
                font-weight: bold;
                text-align: left
            }

            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                color: lightgrey
            }

            #progressbar .active {
                color: #000000
            }

            #progressbar li {
                list-style-type: none;
                font-size: 12px;
                width: 25%;
                float: left;
                position: relative
            }

            #progressbar #account:before {
                font-family: FontAwesome;
                content: "\f007"
            }

            #progressbar #personal:before {
                font-family: FontAwesome;
                content: "\f0c0"
            }

            #progressbar #payment:before {
                font-family: FontAwesome;
                content: "\f15b"
            }

            #progressbar #confirm:before {
                font-family: FontAwesome;
                content: "\f00c"
            }

            #progressbar li:before {
                width: 50px;
                height: 50px;
                line-height: 45px;
                display: block;
                font-size: 18px;
                color: #ffffff;
                background: lightgray;
                border-radius: 50%;
                margin: 0 auto 10px auto;
                padding: 2px
            }

            #progressbar li:after {
                content: '';
                width: 100%;
                height: 2px;
                background: lightgray;
                position: absolute;
                left: 0;
                top: 25px;
                z-index: -1
            }

            #progressbar li.active:before,
            #progressbar li.active:after {
                background: skyblue
            }

            .radio-group {
                position: relative;
                margin-bottom: 25px
            }

            .radio {
                display: inline-block;
                width: 204;
                height: 104;
                border-radius: 0;
                background: lightblue;
                box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                box-sizing: border-box;
                cursor: pointer;
                margin: 8px 2px
            }

            .radio:hover {
                box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
            }

            .radio.selected {
                box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
            }

            .fit-image {
                width: 100%;
                object-fit: cover
            }
        </style>
    </head>
    <body class='snippet-body'>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-3">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                    <center><img src="https://humaninpartner.com/wp-content/uploads/2021/10/cropped-Logo_Transparan-1-removebg-preview.png" style="width: 200px; margin-bottom: 20px" /></center>

                    <h2><strong>Recuirtment PT.Human In Partner</strong></h2>
                    <p>Mohon Melengkapi data setiap step by stepnya</p>

                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="{{url('/save_recuirtment')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Data Diri</strong></li>
                                    <li id="personal"><strong>Pendidikan dan posisi</strong></li>
                                    <li id="payment"><strong>Upload File</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Information</h2> 
                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" />
                                        <input type="email" class="form-control" name="email" placeholder="Email" />
                                        <label for="gender" class="text-dark">Jenis Kelamin</label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="gender1" name="gender" checked class="custom-control-input" value="Pria">
                                            <label class="custom-control-label text-dark" for="gender1">Laki - Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="gender2" name="gender" class="custom-control-input" value="Perempuan">
                                            <label class="custom-control-label text-dark" for="gender2">Perempuan</label>
                                        </div>
                                        <input type="text" class="form-control mt-3 number" name="nik" maxlength="16" placeholder="Nik" /> 
                                        <input type="text" class="form-control mt-3 number" name="no_telp" maxlength="13" placeholder="No Hp (Wa)" />
                                        <div class="row">
                                            <div class="col-sm-6">  
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control mt-3" name="tempat_lahir" placeholder="Tempat Lahir" /> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control mt-3" name="tanggal_lahir" placeholder="tanggal Lahir" /> 
                                            </div>
                                        </div>
                                        <textarea type="text" class="form-control" name="alamat" placeholder="Alamat" height="10"></textarea>
                                    </div> 
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-md-6 grid-margin">
                                                <h4 class="card-title">Pendidikan</h4>
                                                <div class="form-group">
                                                    <label>Pilih Pendidikan</label><br>
                                                    <select class="js-example-basic-single w-100" name="pendidikan" >
                                                        <option selected disabled>- Please Select Pendidikan -</option>
                                                        <option value="SD">SD / Sederajat</option>
                                                        <option value="SMP">SMP / Sederajat</option>
                                                        <option value="SMA">SMA / Sederajat</option>
                                                        <option value="DI">DIPLOMA I</option>
                                                        <option value="DII">DIPLOMA II</option>
                                                        <option value="DIII">DIPLOMA III</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 grid-margin">
                                                <h4 class="card-title">Posisi</h4>
                                                <div class="form-group">
                                                    <label>Pilih Posisi</label><br>
                                                    <select class="js-example-basic-single" name="posisi" >
                                                        <option selected disabled>- Please Select Posisi -</option>
                                                        <option value="Security">Security</option>
                                                        <option value="Driver">Driver</option>
                                                        <option value="Cleaning Service">Cleaning Service</option>
                                                        <option value="Produksi">Produksi</option>
                                                        <option value="Administrasi">Administrasi</option>
                                                        <option value="Supervisor">Supervisor</option>
                                                        <option value="Surveyor pertanian">Surveyor pertanian</option>
                                                        <option value="Sales Motoris">Sales Motoris</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">File Information</h2>
                                        <div class="form-group">
                                            <label class="text-danger">* Upload Berkas Lamaran Kerja (Jadikan dalam 1 File pdf)</label>
                                            <input type="file" name="file" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih File</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                    <button type="submit" class="next action-button">Confirm</button>
                                </fieldset>
                                
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Failed !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" class="fit-image" /></div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Failed Register</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Register</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <script src="{{url('/assets_dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- inject:js -->
    <script src="{{url('/assets_dashboard/js/off-canvas.js')}}"></script>
    <script src="{{url('/assets_dashboard/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('/assets_dashboard/js/template.js')}}"></script>
    <script src="{{url('/assets_dashboard/js/settings.js')}}"></script>
    <script src="{{url('/assets_dashboard/js/todolist.js')}}"></script>
    <script src="{{url('/assets_dashboard/js/file-upload.js')}}"></script>
    <script src="{{url('/assets_dashboard/vendors/select2/select2.min.js')}}"></script>
    <script src="{{url('/assets_dashboard/js/select2.js')}}"></script>
    <script type='text/Javascript'>
    
    $(document).ready(function(){

        $(function(){
            $(".number").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    $("#errmsg").html("Number Only").stop().show().fadeOut("slow");
                    return false;
                }
            });
        });

        // $(document).ready(function() {
        //     $('.js-example-basic-single').select2();
        // });

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });

        $(".previous").click(function(){
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function(){
            return false;
        })

    });
    </script>
    </body>
</html>