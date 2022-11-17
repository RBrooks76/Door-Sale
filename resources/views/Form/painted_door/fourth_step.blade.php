@extends('Form.Layout.index')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <div id="kt_header_mobile" class="header-mobile">
                <a href="index.html">
                    <img alt="Logo" src="assets/media/logos/logo-default.png" class="max-h-30px" />
                </a>
                <div class="d-flex align-items-center">
                    <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                        <span></span>
                    </button>
                    <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                        <span class="svg-icon svg-icon-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <div class="d-flex flex-row flex-column-fluid container">
                <div class="main d-flex flex-column flex-row-fluid">
                    <div class="content flex-column-fluid" id="kt_content">
                        <div class="card card-custom overflow-hidden">
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                                    <div class="col-md-9">
                                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                            <h1 class="display-4 font-weight-boldest mb-10">INVOICE</h1>
                                            <div class="d-flex flex-column align-items-md-end px-0">
                                                <a href="#" class="mb-5">
                                                    <img src="assets/media/logos/logo-dark.png" alt="" />
                                                </a>
                                                <span class="d-flex flex-column align-items-md-end opacity-70">
                                                    <span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
                                                    <span>Mississippi 96522</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-bottom w-100"></div>
                                        <div class="d-flex justify-content-between pt-6">
                                            <div class="d-flex flex-column flex-root">
                                                <span class="font-weight-bolder mb-2">DATA</span>
                                                <span class="opacity-70">Dec 12, 2017</span>
                                            </div>
                                            <div class="d-flex flex-column flex-root">
                                                <span class="font-weight-bolder mb-2">INVOICE NO.</span>
                                                <span class="opacity-70">{{$SerialNumber}}</span>
                                            </div>
                                            <div class="d-flex flex-column flex-root">
                                                <span class="font-weight-bolder mb-2">INVOICE TO.</span>
                                                <span class="opacity-70">Iris Watson, P.O. Box 283 8562 Fusce RD.
                                                <br />Fredrick Nebraska 20620</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-9">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pl-0 font-weight-bold text-muted text-uppercase"></th>
                                                        <th class="text-right font-weight-bold text-muted text-uppercase">Amount</th>
                                                        <th class="text-right font-weight-bold text-muted text-uppercase">GST</th>
                                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="font-weight-boldest">
                                                        <td class="pl-0 pt-7">Doors</td>
                                                        <td class="text-right pt-7">80</td>
                                                        <td class="text-right pt-7">$40.00</td>
                                                        <td class="text-danger pr-0 pt-7 text-right">$3200.00</td>
                                                    </tr>
                                                    <tr class="font-weight-boldest border-bottom-0">
                                                        <td class="border-top-0 pl-0 py-4">Open Cabinets</td>
                                                        <td class="border-top-0 text-right py-4">120</td>
                                                        <td class="border-top-0 text-right py-4">$40.00</td>
                                                        <td class="text-danger border-top-0 pr-0 py-4 text-right">$4800.00</td>
                                                    </tr>
                                                    <tr class="font-weight-boldest border-bottom-0">
                                                        <td class="border-top-0 pl-0 py-4">Smart Zeev</td>
                                                        <td class="border-top-0 text-right py-4">210</td>
                                                        <td class="border-top-0 text-right py-4">$60.00</td>
                                                        <td class="text-danger border-top-0 pr-0 py-4 text-right">$12600.00</td>
                                                    </tr>
                                                    <tr class="font-weight-boldest border-bottom-0">
                                                        <td class="border-top-0 pl-0 py-4">Extra Paint</td>
                                                        <td class="border-top-0 text-right py-4">210</td>
                                                        <td class="border-top-0 text-right py-4">$60.00</td>
                                                        <td class="text-danger border-top-0 pr-0 py-4 text-right">$12600.00</td>
                                                    </tr>
                                                    <tr class="font-weight-boldest border-bottom-0">
                                                        <td class="border-top-0 pl-0 py-4">Minimum Invoice</td>
                                                        <td class="border-top-0 text-right py-4">210</td>
                                                        <td class="border-top-0 text-right py-4">$60.00</td>
                                                        <td class="text-danger border-top-0 pr-0 py-4 text-right">$12600.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-9">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="font-weight-bold text-muted text-uppercase">BANK</th>
                                                        <th class="font-weight-bold text-muted text-uppercase">ACC.NO.</th>
                                                        <th class="font-weight-bold text-muted text-uppercase">DUE DATE</th>
                                                        <th class="font-weight-bold text-muted text-uppercase">TOTAL AMOUNT</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="font-weight-bolder">
                                                        <td>BARCLAYS UK</td>
                                                        <td>12345678909</td>
                                                        <td>Jan 07, 2018</td>
                                                        <td class="text-danger font-size-h3 font-weight-boldest">20,600.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-9 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light-primary font-weight-bold mr-2" onclick="window.print();">Download Invoice</button>
                                            <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light-primary font-weight-bold mr-2" onclick="window.print();">Download Invoice</button>
                                            <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2"></span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-white text-hover-primary"></a>
                    </div>
                    <div class="nav nav-dark order-1 order-md-2">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0 text-muted text-hover-primary"></a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3 text-muted text-hover-primary"></a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0 text-muted text-hover-primary"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
    </span>
</div>

@endsection('content')
