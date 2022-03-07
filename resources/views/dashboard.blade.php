<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            {{-- <div class="container mx-auto px-6 py-8 d-flex">
                <h3 class="text-gray-700 text-3xl font-medium">Welcome : {{ auth()->user()->name }}</h3>
            <p>
                Role :
                <b>
                    @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach
                </b>
            </p>
            </div> --}}
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 pt-2">
                           <div class="col" id="tcd">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Total Call's Done</p>
                                            <h5 class="mb-0">867</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-cart font-30'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="chart1"></div>
                            </div>
                        </div>
                        <div class="col" id="cc">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Connected Call's</p>
                                            <h5 class="mb-0">$52,945</h5>
                                        </div>
                                        <div class="ms-auto">	
                                            <i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="chart2"></div>
                            </div>
                        </div>
                        <div class="col" id="cnc">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Call's Not Connected</p>
                                            <h5 class="mb-0">24.5K</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-group font-30'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="chart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 pt-2">
                           <div class="col" id="to">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Total Client's</p>
                                            <h5 class="mb-0">867</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-cart font-30'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="chart1"></div>
                            </div>
                        </div>
                        <div class="col" id="fun">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Funnel</p>
                                            <h5 class="mb-0">$52,945</h5>
                                        </div>
                                        <div class="ms-auto">	
                                            <i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="chart2"></div>
                            </div>
                        </div>
                        <div class="col" id="clo">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Closure</p>
                                            <h5 class="mb-0">50</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-group font-30'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- total Calls Done Start --}}
            <div class="row pt-4" id="tcdd" style="display: none">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Total Call's Done</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th>Opportunity ID</th>
                                           <th>Client Name</th>
                                           <th>Date</th>
                                           <th>Status</th>
                                           <th>Price</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>#55879</td>
                                           <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/products/15.png" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Jaysis Green Energy & Infra.</h6>
                                                </div>
                                            </div>
                                           </td>
                                           <td>22 Jun, 2020</td>
                                           <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                           <td>#149.25</td>
                                           <td>
                                            <div class="d-flex order-actions">	
                                                <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                    <i class='bx bxs-trash'></i>
                                                </a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0">
                                                    <i class='bx bxs-edit' ></i>
                                                </a>
                                            </div>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>#88379</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/16.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Headphone</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/19.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/07.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Brown Sofa</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/17.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#25796</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/14.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#98754</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/08.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   </tbody>
                               </table>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- total Calls Done End --}}
            {{-- Connected Calls Start --}}
            <div class="row pt-4" id="ccd" style="display: none">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Connected Call's</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th>Sr.no</th>
                                           <th>Contact Person</th>
                                           <th>Contact No</th>
                                           <th>Email-ID</th>
                                           <th>Disposition</th>
                                           <th>view</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>#55879</td>
                                           <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/products/15.png" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Jaysis Green Energy & Infra.</h6>
                                                </div>
                                            </div>
                                           </td>
                                           <td>22 Jun, 2020</td>
                                           <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                           <td>#149.25</td>
                                           <td>
                                            <div class="d-flex order-actions">	
                                                <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                    <i class='bx bxs-trash'></i>
                                                </a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0">
                                                    <i class='bx bxs-edit' ></i>
                                                </a>
                                            </div>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>#88379</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/16.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Headphone</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/19.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/07.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Brown Sofa</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/17.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#25796</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/14.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#98754</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/08.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   </tbody>
                               </table>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- Connected calls End --}}
            {{-- Call's not connected Start --}}
            <div class="row pt-4" id="cncd" style="display: none">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Call's Not connected</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th>Sr.no</th>
                                           <th>Contact Person</th>
                                           <th>Contact No</th>
                                           <th>Email-ID</th>
                                           <th>Disposition</th>
                                           <th>view</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>#55879</td>
                                           <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/products/15.png" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Jaysis Green Energy & Infra.</h6>
                                                </div>
                                            </div>
                                           </td>
                                           <td>22 Jun, 2020</td>
                                           <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                           <td>#149.25</td>
                                           <td>
                                            <div class="d-flex order-actions">	
                                                <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                    <i class='bx bxs-trash'></i>
                                                </a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0">
                                                    <i class='bx bxs-edit' ></i>
                                                </a>
                                            </div>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>#88379</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/16.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Headphone</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/19.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/07.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Brown Sofa</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/17.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#25796</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/14.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#98754</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/08.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   </tbody>
                               </table>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- Call's not connected End --}}
            {{-- Call's not connected Start --}}
            <div class="row pt-4" id="tod" style="display: none">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Total Client's</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th>Sr.no</th>
                                           <th>Contact Person</th>
                                           <th>Contact No</th>
                                           <th>Email-ID</th>
                                           <th>Disposition</th>
                                           <th>view</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>#55879</td>
                                           <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/products/15.png" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Jaysis Green Energy & Infra.</h6>
                                                </div>
                                            </div>
                                           </td>
                                           <td>22 Jun, 2020</td>
                                           <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                           <td>#149.25</td>
                                           <td>
                                            <div class="d-flex order-actions">	
                                                <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                    <i class='bx bxs-trash'></i>
                                                </a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0">
                                                    <i class='bx bxs-edit' ></i>
                                                </a>
                                            </div>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>#88379</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/16.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Headphone</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/19.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/07.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Brown Sofa</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/17.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#25796</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/14.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#98754</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/08.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   </tbody>
                               </table>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- Call's not connected End --}}
            {{-- Call's not connected Start --}}
            <div class="row pt-4" id="fund" style="display: none">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Funnel Data</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th>Sr.no</th>
                                           <th>Contact Person</th>
                                           <th>Contact No</th>
                                           <th>Email-ID</th>
                                           <th>Disposition</th>
                                           <th>view</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>#55879</td>
                                           <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/products/15.png" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Jaysis Green Energy & Infra.</h6>
                                                </div>
                                            </div>
                                           </td>
                                           <td>22 Jun, 2020</td>
                                           <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                           <td>#149.25</td>
                                           <td>
                                            <div class="d-flex order-actions">	
                                                <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                    <i class='bx bxs-trash'></i>
                                                </a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0">
                                                    <i class='bx bxs-edit' ></i>
                                                </a>
                                            </div>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>#88379</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/16.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Headphone</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/19.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/07.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Brown Sofa</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/17.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#25796</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/14.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#98754</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/08.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   </tbody>
                               </table>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- Call's not connected End --}}
            {{-- Call's not connected Start --}}
            <div class="row pt-4" id="clod" style="display: none">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Closure Data</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th>Sr.no</th>
                                           <th>Contact Person</th>
                                           <th>Contact No</th>
                                           <th>Email-ID</th>
                                           <th>Disposition</th>
                                           <th>view</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>#55879</td>
                                           <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/products/15.png" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Jaysis Green Energy & Infra.</h6>
                                                </div>
                                            </div>
                                           </td>
                                           <td>22 Jun, 2020</td>
                                           <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                           <td>#149.25</td>
                                           <td>
                                            <div class="d-flex order-actions">	
                                                <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                    <i class='bx bxs-trash'></i>
                                                </a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0">
                                                    <i class='bx bxs-edit' ></i>
                                                </a>
                                            </div>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>#88379</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/16.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Headphone</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/19.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/07.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Brown Sofa</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/17.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#25796</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/14.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#98754</td>
                                        <td>
                                         <div class="d-flex align-items-center">
                                             <div class="recent-product-img">
                                                 <img src="assets/images/products/08.png" alt="">
                                             </div>
                                             <div class="ms-2">
                                                 <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                             </div>
                                         </div>
                                        </td>
                                        <td>22 Jun, 2020</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>#149.25</td>
                                        <td>
                                            <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                                <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   </tbody>
                               </table>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- Call's not connected End --}}
            {{-- Performance chart Start--}}
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-12 pt-2">
                <div class="col-xl-8" id="graph">
                 <div class="card radius-10 overflow-hidden">
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <img src="/images/area_graph.png" alt="graph" class="text-center">
                         </div>
                     </div>
                     <div class="" id="chart1"></div>
                 </div>
             </div>
             <div class="col-xl-4" id="on">
                 <div class="card radius-10 overflow-hidden" >
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <div>
                                 <h1 class="mb-0"><b>Organisational News</b></h1>
                                 <h5 class="mb-0"> News Comming Soon ..... </h5>
                             </div>
                             <div class="ms-auto">	
                                 <i class='bx bx-wallet font-30'></i>
                             </div>
                         </div>
                     </div>
                     <div class="" id="chart2"></div>
                 </div>
             </div>
            </div>
        {{-- Performance chart End--}}
        </main>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('#tcd').click(function(){
                $('#graph,#on,#ccd,#tod,#fund,#clod').hide('fast')
                $('#tcdd').toggle('fast')
                $('#graph,#on').show('fast')
            })
            $('#cc').click(function(){
                $('#graph,#on,#tcdd,#cncd,#tod,#fund,#clod').hide('fast')
                $('#ccd').show('fast')
            })
            $('#cnc').click(function(){
                $('#graph,#on,#ccd,#tod,#fund,#clod').hide('fast')
                $('#cncd').show('fast')
            })
            $('#to').click(function(){
                $('#graph,#on,#tcdd,#ccd,#cncd,#fund,#clod').hide('fast')
                $('#tod').show('fast')
            })
            $('#fun').click(function(){
                $('#graph,#on,#tcdd,#ccd,#cncd,#tod,#clod').hide('fast')
                $('#fund').show('fast')
            })
            $('#clo').click(function(){
                $('#graph,#on,#tcdd,#ccd,#cncd,#tod,#fund').hide('fast')
                $('#clod').show('fast')
            })
        })
    </script>
</x-app-layout>
