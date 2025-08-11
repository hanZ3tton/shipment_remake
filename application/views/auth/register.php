<body>
    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-registration p-4">
                        <h3 class="text-center mb-4">Registration Form</h3>
                        <form>
                            <!-- Full Name dan Username (2 kolom) -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="fullname" class="form-control form-control-lg" placeholder="Full Name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" />
                                </div>
                            </div>

                            <!-- Email (1 kolom penuh) -->
                            <div class="mb-3">
                                <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" />
                            </div>

                            <!-- Password dan Phone Number (2 kolom) -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="phonenumber" class="form-control form-control-lg" placeholder="Phone Number" />
                                </div>
                            </div>

                            <!-- Birthday (1 kolom penuh) -->
                            <div class="mb-3">
                                <input type="text" id="birthday" class="form-control form-control-lg"
                                    placeholder="Birth Date"
                                    onfocus="this.type='date'"
                                    onblur="if(!this.value) this.type='text'" />
                            </div>
                            <!-- State dan City (2 kolom) -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="state" class="form-control form-control-lg" placeholder="State" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="city" class="form-control form-control-lg" placeholder="City" />
                                </div>
                            </div>

                            <!-- Address (1 kolom penuh) -->
                            <div class="mb-3">
                                <input type="text" id="address" class="form-control form-control-lg" placeholder="Address" />
                            </div>

                            <!-- Tombol -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-custom btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>