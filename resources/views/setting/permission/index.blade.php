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
                    <div class="flex items-center pt-4">
                      <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                          </svg>
                      </button>
              
                      <div class="relative mx-4 lg:mx-0">
                        <div class="text-right mr-auto">
                            @can('Role create')
                              <a href="{{route('admin.roles.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Application Form</a>
                          </div>
                          @endcan
                      </div>
                  </div>
                </div>
            </div>
            {{-- total Calls Done Start --}}
            <div class="row pt-4" id="tcdd"> 
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Total Call's Done</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">
                                        
                                        Get In PDF
                                    </a>
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
        </main>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('#tcd').click(function(){
                $('#graph,#on,#ccd,#tod,#fund,#clod').hide('fast')
                $('#tcdd').show('fast')
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
