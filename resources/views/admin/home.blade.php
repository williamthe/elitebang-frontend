@extends('admin.layouts.app')
@section('title')
    Admin
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap pl-0">
			<div class="col-md-12 pr-5 mr-2">
				<ul class="nav nav-light-primary nav-pills tabs-unlimited" id="menu_tab" role="tablist"></ul>
			</div>
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class="container-fluid">
			<div class="tab-content" id="page_content">
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 13-->
                        <a href="#" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Cart3.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5">{{ $data['kelitbangan'] }}</div>
                                <div class="font-weight-bold text-inverse-danger font-size-sm">Total Data Kelitbangan</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Stats Widget 13-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 14-->
                        <a href="#" class="card card-custom bg-primary bg-hover-state-primary card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
												<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
															<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">{{ $data['inovasi'] }}</div>
                                <div class="font-weight-bold text-inverse-primary font-size-sm">Total Data Inovasi</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Stats Widget 14-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 15-->
                        <a href="#" class="card card-custom bg-success bg-hover-state-success card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
												<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
															<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
															<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
															<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">{{ $data['penelitian'] }}</div>
                                <div class="font-weight-bold text-inverse-success font-size-sm">Total Data Penelitian</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Stats Widget 15-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin: Stats Widget 19-->
                        <div class="card card-custom bg-light-success card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body my-3">
                                <a href="#" class="card-title font-weight-bolder text-success text-hover-state-dark font-size-h6 mb-4 d-block">Agenda</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-size-h2 font-weight-bolder mr-2">{{ $data['agenda'] }}</span>Total</div>
                                <div class="progress progress-xs mt-7 bg-success-o-60">
{{--                                    <div class="progress-bar bg-success" role="progressbar" style="width: 67%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                </div>
                            </div>
                            <!--end:: Body-->
                        </div>
                        <!--end: Stats:Widget 19-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 20-->
                        <div class="card card-custom bg-light-warning card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-warning font-size-h6 mb-4 text-hover-state-dark d-block">Berita</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">{{ $data['berita'] }}</span>Data</div>
                                <div class="progress progress-xs mt-7 bg-warning-o-60">
{{--                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 20-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 21-->
                        <div class="card card-custom bg-light-info card-stretch gutter-b">
                            <!--begin::ody-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Regulasi</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">{{ $data['regulasi'] }}</span>Data</div>
                                <div class="progress progress-xs mt-7 bg-info-o-60">
{{--                                    <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 21-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 22-->
                        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(/metronic/theme/html/demo1/dist/assets/media/svg/shapes/abstract-3.svg)">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Surat Masuk</a>
                                <div class="font-weight-bold text-muted font-size-sm">
                                    <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">{{ $data['surat_masuk'] }}</span>Total Surat</div>
                                <div class="progress progress-xs mt-7 bg-info-o-60">
{{--                                    <div class="progress-bar bg-info" role="progressbar" style="width: 67%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 22-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 23-->
                        <div class="card card-custom bg-info card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">Surat Keluar</a>
                                <div class="font-weight-bold text-white font-size-sm">
                                    <span class="font-size-h2 mr-2">{{ $data['surat_keluar'] }}</span>Total Surat</div>
                                <div class="progress progress-xs mt-7 bg-white-o-90">
{{--                                    <div class="progress-bar bg-white" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 23-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 24-->
                        <div class="card card-custom bg-dark card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body my-4">
                                <a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">Jenis Surat</a>
                                <div class="font-weight-bold text-white font-size-sm">
                                    <span class="font-size-h2 mr-2">{{ $data['jenis_surat'] }}</span></div>
                                <div class="progress progress-xs mt-7 bg-white-o-90">
{{--                                    <div class="progress-bar bg-white" role="progressbar" style="width: 52%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats: Widget 24-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 25-->
                        <div class="card card-custom bg-light-success card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-opened.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
															<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $data['usulan_inovasi'] }}</span>
                                <span class="font-weight-bold text-muted font-size-sm">Usulan Inovasi</span>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 25-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 26-->
                        <div class="card card-custom bg-light-danger card-stretch gutter-b">
                            <!--begin::ody-->
                            <div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"></polygon>
															<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $data['surat_rekomendasi'] }}</span>
                                <span class="font-weight-bold text-muted font-size-sm">Permintaan Rekomendasi</span>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 26-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 27-->
                        <div class="card card-custom bg-light-info card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-info">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
															<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
															<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
															<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $data['survey'] }}</span>
                                <span class="font-weight-bold text-muted font-size-sm">Jenis Survey</span>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 27-->
                    </div>
                </div>

            </div>
		</div>
	</div>
</div>
@endsection
@push('js')
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
      //add_page('dashboard','dashboard','Dashboard');
    })
	</script>
@endpush
