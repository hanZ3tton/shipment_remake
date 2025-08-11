<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #f093fb, #f5576c);
            min-height: 100vh;
        }

        .card-registration {
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        /* Pendekkan form */
        .form-control-lg {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 8px;
        }

        .btn-custom {
            background: #f5576c;
            border: none;
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #d74457;
        }

        h3 {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

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