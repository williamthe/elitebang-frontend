@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap pl-0">
                <div class="col-md-12 pr-5 mr-2">
                    {{--                    <ul class="nav nav-light-primary nav-pills tabs-unlimited" id="menu_tab" role="tablist"></ul>--}}
                    <span class="nav-text bold ml-5">Surat Masuk - Edit Data</span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
                <div class="tab-content" id="page_content">
                    <div class="card">
                        <form id="form_edit_usulan_penelitian">
                            <div class="card-body">
                                <div class="row mb-5">
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Nomor:</label>
                                        <input name="id" type="hidden" class="form-control" placeholder="Nomor" value="{{ $data['id'] }}" />
                                        <input name="nomor_urut" type="text" class="form-control" placeholder="Nomor" value="{{ $data['nomor_urut']}}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Tanggal Surat:</label>
                                        <div class="input-group date" id="sur_mas_edit" data-target-input="nearest">
                                            <input name="tanggal_surat" onkeydown="return false" type="text" class="form-control datetimepicker-input" placeholder="Pilih Tanggal" data-target="#sur_mas_edit" value="{{ \Carbon\Carbon::parse($data['tanggal_surat'])->format('d-m-Y') }}"/>
                                            <div class="input-group-append" data-target="#sur_mas_edit" data-toggle="datetimepicker">
                                                <span class="input-group-text"><i class="ki ki-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Pengirim:</label>
                                        <input name="pengirim" type="text" class="form-control" placeholder="Nomor" value="{{ $data['pengirim']}}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Tanggal Penerimaan:</label>
                                        <div class="input-group date" id="tanggal_pengiriman_pesanan_add" data-target-input="nearest">
                                            <input name="tanggal_penerimaan" onkeydown="return false" type="text" class="form-control datetimepicker-input" placeholder="Pilih Tanggal" data-target="#tanggal_pengiriman_pesanan_add" value="{{ \Carbon\Carbon::parse($data['tanggal_penerimaan'])->format('d-m-Y') }}"/>
                                            <div class="input-group-append" data-target="#tanggal_pengiriman_pesanan_add" data-toggle="datetimepicker">
                                                <span class="input-group-text"><i class="ki ki-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Nomor Surat</label>
                                        <input name="nomor_surat" type="text" class="form-control" placeholder="Nomor" value="{{ $data['nomor_surat'] }}" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Klasifikasi Surat:</label>
                                        <select name="klasifikasi" class="form-control selectpicker" id ="pelanggan_pengiriman_penjualan_add" title="Pilih Jenis Surat" data-size = "7" data-live-search = "true" data-toggle="ajax" onchange="setNomor(this)">
                                            @foreach($jenis_surat as $jst => $js)
                                                @if($js['id'] == $data['klasifikasi_surat_id'])
                                                    <option value="{{ $js['id'] }}" data-kode="{{ $js['kode'] }}"  selected  > {{ $js['jenis'] }}</option>
                                                @else
                                                    <option value="{{ $js['id'] }}" data-kode="{{ $js['kode'] }}"> {{ $js['jenis'] }}</option>
                                                @endif
                                            @endforeach
                                        </select>
{{--                                        {{ Form::select('klasifikasi',$jenis_surat,$data['klasifikasi_surat_id'], ['title' => 'Pilih Instansi','class' => 'form-control selectpicker', 'id' => 'pelanggan_pengiriman_penjualan_add', 'data-size' => '7', 'data-live-search' => 'true', 'data-toggle'=>'ajax']) }}--}}
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Perihal:</label>
                                        <textarea name="isi_perihal_singkat" class="form-control" cols="30" rows="4">{{ $data['isi_perihal_singkat'] }}</textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Tujuan:</label>
                                        <textarea name="tujuan" class="form-control" cols="30" rows="4">{{ $data['tujuan'] }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Isi Disposisi:</label>
                                        <textarea name="isi_disposisi" class="form-control" cols="30" rows="4">{{ $data['isi_disposisi'] }}</textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Disposisi Kepada:</label>
                                        <textarea name="disposisi_kepada" class="form-control" cols="30" rows="4">{{ $data['disposisi_kepada'] }}</textarea>
                                    </div>
                                </div>
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <label>Detail Berita:</label>--}}
{{--                                        <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                                            <textarea class="summernote" id="kt_summernote_1" name="surat_keluar">{{ $data['surat_keluar'] }}</textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <input type="file" id="filesurat" style="display: none" src="'{{ asset('surat-keluar/'.$data['surat_masuk']) }}'" >
                                    <div class="col-lg-6">
                                        <!--begin::Card-->
                                        <div class="card card-custom card-stretch">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label">Upload File Baru</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="uppy" id="kt_uppy_1">
                                                    <div class="uppy-Root" dir="ltr">
                                                        <div class="uppy-Dashboard DashboardContainer uppy-Dashboard--animateOpenClose uppy-size--height-md uppy-Dashboard--isInnerWrapVisible" data-uppy-theme="light" data-uppy-num-acquirers="0" data-uppy-drag-drop-supported="true" aria-hidden="false" aria-label="File Uploader">
                                                            <div class="uppy-Dashboard-overlay" tabindex="-1"></div>
                                                            <div class="uppy-Dashboard-inner" style="width: 750px; height: 470px;">
                                                                <div class="uppy-Dashboard-innerWrap">
                                                                    <div class="uppy-Dashboard-dropFilesHereHint">Drop your files here</div>
                                                                    <div class="uppy-Dashboard-AddFiles">
                                                                        <input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" type="file" name="files[]" multiple="" accept="image/*,video/*">
                                                                        <input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" webkitdirectory="" type="file" name="files[]" multiple="" accept="image/*,video/*">
                                                                        <div class="uppy-Dashboard-AddFiles-title">Drop files here or <button type="button" class="uppy-u-reset uppy-Dashboard-browse UppyModalOpenerBtn" data-uppy-super-focusable="true">browse files</button>
                                                                        </div>
                                                                        <div class="uppy-Dashboard-AddFiles-info">
                                                                            <div class="uppy-Dashboard-note">Images and video only, 2–3 files, up to 1 MB</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-Dashboard-progressindicators">
                                                                        <div class="uppy-StatusBar is-waiting" aria-hidden="true">
                                                                            <div class="uppy-StatusBar-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;">

                                                                            </div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                        <div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
{{--                                    <div class="col-lg-6">--}}
{{--                                        <label>Surat Terupload:</label>--}}
{{--                                        <a href="/open-file/{{ $data['surat_keluar'] }}"><i class="flaticon2-file"></i>{{ $data['surat_keluar'] }}</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="button" id="btn_usulan_penelitian_edit_data" class="btn btn-primary mr-2">Save</button>
                                        <button type="button" class="btn btn-secondary mr-2" onclick="close_content_tab('pembelian_permintaan_pembelian','tambah_data')">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('admin/js/pages/crud/forms/editors/summernote.js') }}"></script>
    <script>
        // Class definition

        var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
                $('.summernote').summernote({
                    height: 390
                });
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTSummernoteDemo.init();
        });
    </script>
    <script src="{{ asset('admin/plugins/custom/uppy/uppy.bundle.js') }}"></script>
    <script>
        "use strict";
        var file_list = [];
        // Class definition
        var KTUppy = function () {
            const Tus = Uppy.Tus;
            const ProgressBar = Uppy.ProgressBar;
            const StatusBar = Uppy.StatusBar;
            const FileInput = Uppy.FileInput;
            const Informer = Uppy.Informer;

            // to get uppy companions working, please refer to the official documentation here: https://uppy.io/docs/companion/
            const Dashboard = Uppy.Dashboard;
            const Dropbox = Uppy.Dropbox;
            const GoogleDrive = Uppy.GoogleDrive;
            const Instagram = Uppy.Instagram;
            const Webcam = Uppy.Webcam;


            // Private functions
            var initUppy1 = function(){
                var id = '#kt_uppy_1';

                var options = {
                    proudlyDisplayPoweredByUppy: false,
                    target: id,
                    inline: true,
                    replaceTargetContent: true,
                    showProgressDetails: true,
                    note: 'No filetype restrictions.',
                    height: 470,
                    remove : true,
                    metaFields: [
                        { id: 'name', name: 'Name', placeholder: 'file name' },
                        { id: 'caption', name: 'Caption', placeholder: 'describe what the image is about' }
                    ],
                    browserBackButtonClose: true
                }

                var uppyDashboard = Uppy.Core({
                    //autoProceed: true,
                    restrictions: {
                        //maxFileSize: 1000000, // 1mb
                        maxNumberOfFiles: 1,
                        minNumberOfFiles: 1
                    }
                });

                uppyDashboard.use(Dashboard, options);
                uppyDashboard.use(Tus, { endpoint: 'https://master.tus.io/files/' });
                uppyDashboard.on('complete',function (f) {
                    console.log(f);
                    file_list = (f.successful.map((e, index) => { return {url :e.response.uploadURL,nama :e.name}  }));

                });
                uppyDashboard.on('file-added', (file) => {
                    console.log('Added file', file)
                })


                var file_img = "{!! asset('files-attachment/surat-masuk') !!}/" + '{{ $data['surat_masuk'] }}';
                //var file_blob = file_img.blob();
                // var tag_img = `<img src="${file_img}" style="display: none;" id="${val.nama}">`;
                // $('#form_edit_kelitbangan').append(tag_img);

                var file_blob ;
                fetch(file_img)
                    .then(res => res.blob())
                    .then(blob => {
                        const file = new File([blob], '{{ $data['surat_masuk'] }}', blob)
                        console.log(file)
                        file_blob = file;
                        console.log('satu')
                    })
                    .then(
                        function () {
                            console.log('dua')
                            uppyDashboard.addFile({
                                name: '{{ $data['surat_masuk'] }}', // file name
                                type: '{!! $data['surat_masuk'] !!}'.toString().split('.')[-1], // file type
                                data: file_blob, // file blob
                                meta: {
                                    // optional, store the directory path of a file so Uppy can tell identical files in different directories apart.
                                    relativePath: "",
                                },
                                source: "{!! asset('files-attachment/surat-masuk') !!}/" + '{{ $data['surat_masuk'] }}', // optional, determines the source of the file, for example, Instagram.
                                isRemote: false, // optional, set to true if actual file is not in the browser, but on some remote server, for example,
                                // when using companion in combination with Instagram.
                            })
                            uppyDashboard.upload()

                        }

                    )


                // uppyDashboard.use(GoogleDrive, { target: Dashboard, companionUrl: 'https://companion.uppy.io' });
                // uppyDashboard.use(Dropbox, { target: Dashboard, companionUrl: 'https://companion.uppy.io' });
                // uppyDashboard.use(Instagram, { target: Dashboard, companionUrl: 'https://companion.uppy.io' });
                // uppyDashboard.use(Webcam, { target: Dashboard });
            }

            return {
                // public functions
                init: function() {
                    initUppy1();
                }
            };
        }();

        KTUtil.ready(function() {
            KTUppy.init();
        });

        // uppy.on('upload-success', (file, response) => {
        //     console.log(file)
        //     console.log(response)
        // })


    </script>
    <script>

        $(function () {

            $('#menu_tab').scrollingTabs({
                bootstrapVersion: 4,
                enableSwiping: true,
                cssClassLeftArrow: 'fa fa-chevron-left',
                cssClassRightArrow: 'fa fa-chevron-right',
                scrollToTabEdge: true,
                handleDelayedScrollbar: true,
                scrollToActiveTab: true
            });

            $('#btn_usulan_penelitian_edit_data').click(function(){
                let data = $('#form_edit_usulan_penelitian').serializeArray();
                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    timeout: 50000,
                    url: '/surat-masuk-update',
                    async: true,
                    data: {
                        datas : JSON.stringify(data), file_surat : JSON.stringify(file_list)
                    },
                    success: function (res) {
                        console.log(res)
                        if (res.status === true){
                            Swal.fire('Berhasil!', 'Surat Berhasil Diupdate!', 'success').then(
                                function (e) {
                                    window.close();
                                }
                            )
                        }else{
                            Swal.fire('Gagal!', 'Surat Gagal Diupdate', 'danger');
                        }

                    },
                    error: function (res, textstatus) {
                        if (textstatus === "timeout") {
                            notice('Response Time Out', 'error');
                        } else {
                            notice(res.responseJSON.message, 'error');
                        }
                    }
                });
            });
        })

    </script>
@endpush
