<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1">
                <div class="bg-white shadow-md rounded my-6 p-5">
                    <form method="POST" action="{{ route('admin.roles.store') }}">
                        @csrf
                        @method('post')
                        <div class="row align-items-center justify-content-center g-3">
                            <div class="col-auto">
                                <label class="" for="inputEmail">Client Name :</label>
                                <input type="email" class="form-control rounded" id="inputEmail"
                                    placeholder="Full Name">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Contact No:</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="Mobile No / Telephone No">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Email-ID :</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="client@gmail.com">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Correnpondance Address :</label>
                                <input type="textarea" class="form-control rounded" id="inputPassword"
                                    placeholder="Write here..">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center g-3 py-2">
                          <div class="col-auto">
                              <label class="" for="inputEmail">Parmanent Address :</label>
                              <input type="text-area rounded" class="form-control rounded" id="inputEmail"
                                  placeholder="Email">
                          </div>
                            <div class="col-auto">
                                <label class="" for="inputEmail">Segment Type :</label>
                                <input type="text-area" class="form-control rounded" id="inputEmail"
                                    placeholder="Email">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Company Name:</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="If E.B.U">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Password</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center g-3 py-2">
                            <div class="col-auto">
                                <label class="" for="inputEmail">Client Name :</label>
                                <input type="email" class="form-control rounded" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Password</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="Password">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Password</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="Password">
                            </div>
                            <div class="col-auto">
                                <label class="" for="inputPassword">Password</label>
                                <input type="password" class="form-control rounded" id="inputPassword"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center g-3 py-2">
                            <div class="col-auto">
                                <label class="" for="inputPassword">Password</label>
                                <input type="file" class="form-control rounded" id="inputPassword"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="text-center mt-16">
                            <button type="submit"
                                class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </main>
    </div>
    </div>
</x-app-layout>
