<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .gradient-custom {
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                            <form>
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="email" id="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div>

                                    <!-- Username -->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="username" class="form-control form-control-lg" />
                                            <label class="form-label" for="username">Username</label>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="password" id="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>
                                    </div>

                                    <!-- Birthday -->
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline w-100">
                                            <input type="date" id="birthdayDate" class="form-control form-control-lg" />
                                            <label class="form-label" for="birthdayDate">Birthday</label>
                                        </div>
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline w-100">
                                            <input type="text" id="state" class="form-control form-control-lg" />
                                            <label class="form-label" for="state">State</label>
                                        </div>
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline w-100">
                                            <input type="text" id="city" class="form-control form-control-lg" />
                                            <label class="form-label" for="city">City</label>
                                        </div>
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline w-100">
                                            <input type="text" id="address" class="form-control form-control-lg" />
                                            <label class="form-label" for="address">Address</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Submit Button -->
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>