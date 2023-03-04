@extends('layout')

@section('content')
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="form-widget">

                <div class="form-result" style="text-align: center">
                    <h3> <u>Form Layanan INKUBATOR </u></h3>
                </div>

                <div class="row shadow bg-light border">

                    <link href="https://releases.transloadit.com/uppy/v2.12.2/uppy.min.css" rel="stylesheet">
                    <div class="col-lg-12 p-5">
                        <form class="row mb-0" id="form_usulan_penelitian"   enctype="multipart/form-data">
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-name">Nomor Surat:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="nomor_surat" id="fitness-form-name" class="form-control required"  >
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-name">File Surat:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div id="drag-drop-area"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-name">Layanan:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        {{ Form::select('layanan[]',$layanan,null, ['title' => 'Pilih Layanan','class' => 'form-control multi-select2', 'id' => 'jenis_layanan', 'data-size' => '7', 'data-live-search' => 'true', 'data-toggle'=>'ajax','multiple' => 'multiple']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-name">Nama Pengaju:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="pengguna_layanan" id="fitness-form-name" class="form-control required" value="" placeholder="Nama Pengusul">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-email">Nomor Kontak:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="nomor_pengaju" id="fitness-form-email" class="form-control required" value="" placeholder="No Kontak Pengusul">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-email">Email:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="email_pengaju" id="fitness-form-email" class="form-control required" value="" placeholder="Email Pengusul">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-name">Instansi:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        {{ Form::select('instansi',$instansi,null, ['title' => 'Pilih Instansi','class' => 'form-control selectpicker', 'id' => 'inovasi_instansi_add', 'data-size' => '7', 'data-live-search' => 'true', 'data-toggle'=>'ajax']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 form-group" id="ide-gagasan" style="display: none">
                                <div class="row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="fitness-form-name">Ide Gagasan:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="ide_gagasan"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div id="profil" class="col-lg-12 row" style="display:none;">
                                <label for="fitness-form-name"><strong>Profil</strong>:</label>
                                <label for="fitness-form-name">Rancang Bangun: ( Minimal 300 Kata) , Total Sekarang : <span  id="total_kata"></span> </label>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Dasar Hukum:</label>
                                            <button type="button" class="btn btn-info me-2 btn-sm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">contoh</button>

                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control rancang-bangun" name="dasar_hukum" id="dasar_hukum" rows="3"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Permasalahan:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control rancang-bangun" name="permasalahan" id="permasalahan" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Isu Strategi:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control rancang-bangun" name="isu_strategis" id="isu_strategis" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Metode Pembaharuan:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control rancang-bangun" name="metode" id="metode" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Keunggulan:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control rancang-bangun" name="keunggulan" id="keunggulan" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Cara Kerja:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control rancang-bangun" name="cara_kerja" id="cara_kerja" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                 <div style="height: 80px;">

                                 </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Tujuan:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="tujuan" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Manfaat:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="manfaat"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Kaitan Dengan SDGS:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="kaitan_dengan_sdgs"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Proses:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="proses"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Kecepatan:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="kecepatan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group" >
                                    <div class="row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="fitness-form-name">Hasil:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="hasil"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 d-flex justify-content-end align-items-center">
                                <div id="alert-info" ></div>
                                <button type="button" id="btn_submit_usulan" disabled class="btn btn-success ms-2 ml-5">Submit Usulan</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
@push('custom-scripts')
    <script src="{{ asset('admin/plugins/custom/uppy/uppy.bundle.js') }}"></script>
    <script>
        $(function () {
            $('.multi-select2').select2();
            $('.selectpicker').select2();
        })
        var file_list = [];
        var uppy = new Uppy.Core()
            .use(Uppy.Dashboard, {
                inline: true,
                target: '#drag-drop-area',
                height: 150,
                maxNumberOfFiles: 1,
                minNumberOfFiles: 1,
                restrictions: {
                    //maxFileSize: 1000000, // 1mb
                    maxNumberOfFiles: 1,
                    minNumberOfFiles: 1
                }
            })

            .use(Uppy.Tus, {endpoint: 'https://tusd.tusdemo.net/files/'})

        uppy.on('complete', (result) => {
            //console.log(result);
            file_list = (result.successful.map((e, index) => { return { url :e.response.uploadURL,nama :e.name,tipe:e.type.split('/')[0] }  }));
            console.log('Upload complete! We’ve uploaded these files:', result.successful)
        })
    </script>

    <script>
        $('#btn_submit_usulan').click(function(){
            $('#alert-info').html('Memproses...  '+'<div class="class="spinner-grow"></div>');
             let data = $('#form_usulan_penelitian').serializeArray();
            let jenisLayanan = JSON.stringify($('#jenis_layanan').val());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                timeout: 50000,
                url: '/layanan-incubator-store',
                async: true,
                data: {
                    datas:JSON.stringify(data),filex : JSON.stringify(file_list), jenisLayanan:jenisLayanan,
                },
                success: function (res) {
                    console.log(res);
                    if (res.status === true){
                        $('#alert-info').html('<div class="alert alert-success"><p>'+res.message+'</p></div>');
                        $('#form_usulan_penelitian').trigger('reset')
                    }else{
                        $('#alert-info').html('<div class="alert alert-success"><p>'+res.message+'</p></div>');
                    }
                    //res.status === true ? Swal.fire('Berhasil!', res.message, 'success');  : Swal.fire('Gagal!', res.message, 'danger');
                },
                error: function (res, textstatus) {
                    if (textstatus === "timeout") {
                        $('#alert-info').html('<div class="alert alert-danger"><p>'+res.message+'</p></div>');
                    } else {
                        $('#alert-info').html('<div class="alert alert-danger"><p>'+res.message+'</p></div>');
                    }
                }
            });
        });

        $('#jenis_layanan').change(function(){
            let jenisLayanan = ($('#jenis_layanan').val());
            let ide = 0;
            let rancang = 0;
            console.log(jenisLayanan);
            if(jenisLayanan.length == 0){
                $('#ide-gagasan').css('display','none') ;
                $('#profil').css('display','none') ;
            }

            $.each(jenisLayanan, function (i,v) {

                if (v.toString().toLowerCase().includes('ide gagasan')){
                    ide = 1;

                }
                else{
                    rancang = 1;
                }
            });
            ide == 1 ? $('#ide-gagasan').css('display','block') : $('#ide-gagasan').css('display','none');
            rancang == 1 ? $('#profil').css('display','inherit') : $('#profil').css('display','none');
            ide = rancang = 0;

        });

        $('.rancang-bangun' ).keyup(function (){
            let total = 0
            let dasar_hukum  = $('#dasar_hukum').val().toString().split(/[\s\.\?]+/);
            let permasalahan  = $('#permasalahan').val().toString().split(/[\s\.\?]+/);
            let isu_strategis  = $('#isu_strategis').val().toString().split(/[\s\.\?]+/);
            let metode  = $('#metode').val().toString().split(/[\s\.\?]+/);
            let keunggulan  = $('#keunggulan').val().toString().split(/[\s\.\?]+/);
            let cara_kerja  = $('#cara_kerja').val().toString().split( /[\s\.\?]+/);
            total = dasar_hukum.length + permasalahan.length + isu_strategis.length + metode.length + keunggulan.length + cara_kerja.length;
            if(total >= 10){
                $('#btn_submit_usulan').attr('disabled', false)
            }else{
                $('#btn_submit_usulan').attr('disabled', true)
            }
            $('#total_kata').html(total.toString());
        });
    </script>
@endpush
