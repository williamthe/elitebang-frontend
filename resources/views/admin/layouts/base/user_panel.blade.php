<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
		<h3 class="font-weight-bold m-0">User Profile</h3>
		<a href="javascript:;" class="btn btn-xs btn-icon btn-light btn-hover-danger" id="kt_quick_user_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>
	<div class="offcanvas-content pr-5 mr-n5">
		<div class="d-flex align-items-center mt-5">
			<div class="symbol symbol-100 mr-5">
				<div class="symbol-label" style="background-image:url('{{ asset('media/users/300_21.jpg') }}')"></div>
				<i class="symbol-badge bg-success"></i>
			</div>
			<div class="d-flex flex-column">
				<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Session::get('user')['username'] }}</a>
				<div class="text-muted mt-1">Application Developer</div>
				<div class="navi mt-2">
					<a href="#" class="navi-item">
						<span class="navi-link p-0 pb-2">
							<span class="navi-icon mr-1">
								<span class="svg-icon svg-icon-lg svg-icon-primary">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"/>
											<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
											<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
										</g>
									</svg>
								</span>
							</span>
							<span class="navi-text text-muted text-hover-primary">{{ Session::get('user')['username'] }}</span>
						</span>
					</a>
					<a href="javascript:;" id="btn_logout" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" onclick="logout()">Sign Out</a>
				</div>
			</div>
		</div>
		<div class="separator separator-dashed mt-8 mb-5"></div>
{{--		<div class="navi navi-spacer-x-0 p-0">--}}
{{--			<a href="javascript:;" class="navi-item user-menu" onclick="add_page('profile','profile','Profile')">--}}
{{--				<div class="navi-link">--}}
{{--					<div class="symbol symbol-40 bg-light mr-3">--}}
{{--						<div class="symbol-label">--}}
{{--							<span class="svg-icon svg-icon-md svg-icon-success">--}}
{{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--										<rect x="0" y="0" width="24" height="24"/>--}}
{{--										<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"/>--}}
{{--										<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"/>--}}
{{--									</g>--}}
{{--								</svg>--}}
{{--							</span>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="navi-text">--}}
{{--						<div class="font-weight-bold">My Profile</div>--}}
{{--						<div class="text-muted">Account settings and more</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</a>--}}
{{--			<a href="javascript:;" class="navi-item user-menu">--}}
{{--				<div class="navi-link">--}}
{{--					<div class="symbol symbol-40 bg-light mr-3">--}}
{{--						<div class="symbol-label">--}}
{{--							<span class="svg-icon svg-icon-md svg-icon-warning">--}}
{{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--										<rect x="0" y="0" width="24" height="24"/>--}}
{{--										<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"/>--}}
{{--										<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"/>--}}
{{--										<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>--}}
{{--										<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"/>--}}
{{--									</g>--}}
{{--								</svg>--}}
{{--							</span>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="navi-text">--}}
{{--						<div class="font-weight-bold">My Messages</div>--}}
{{--						<div class="text-muted">Inbox and tasks</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</a>--}}
{{--			<a href="javascript:;" class="navi-item user-menu">--}}
{{--				<div class="navi-link">--}}
{{--					<div class="symbol symbol-40 bg-light mr-3">--}}
{{--						<div class="symbol-label">--}}
{{--							<span class="svg-icon svg-icon-md svg-icon-danger">--}}
{{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--										<polygon points="0 0 24 0 24 24 0 24"/>--}}
{{--										<path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
{{--										<path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>--}}
{{--									</g>--}}
{{--								</svg>--}}
{{--							</span>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="navi-text">--}}
{{--						<div class="font-weight-bold">My Activities</div>--}}
{{--						<div class="text-muted">Logs and notifications</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</a>--}}
{{--		</div>--}}
{{--		<div class="separator separator-dashed my-7"></div>--}}
{{--		<div>--}}
{{--			<h5 class="mb-5">Recent Notifications</h5>--}}
{{--		</div>--}}
	</div>
</div>
@push('js')
<script>
	$(function () {
		$('.user-menu').click(function () {
		  console.log('ok');
			$('#kt_quick_user_close')[0].click();
    });
  });

	function logout() {
    var btn_logout = KTUtil.getById("btn_logout");
    KTUtil.btnWait(btn_logout, "spinner spinner-right spinner-white pr-15", "Please wait");
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
      type: "GET",
      timeout: 50000,
      url: '{{ route('logout') }}',
      success: function (res) {
        window.location.replace("{{ url('login')  }}");
        console.log(res);
      },
      error: function (res, textstatus) {
        KTUtil.btnRelease(btn_logout);
        if (textstatus === "timeout") {
          swal.fire({
            text: "Response Time Out.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn font-weight-bold btn-light-primary"
            }
          }).then(function () {
            KTUtil.scrollTop();
          });
        } else {
          swal.fire({
            text: res.responseJSON.message,
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn font-weight-bold btn-light-primary"
            }
          }).then(function () {
            KTUtil.scrollTop();
          });
        }

      }
    });
  }
</script>
@endpush
