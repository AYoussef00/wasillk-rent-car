<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- تضمين Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- تضمين Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- إضافة CSS مخصص -->
    <style>
        .dropdown-menu {
            min-width: 200px; /* تحديد عرض البوكس */
            padding: 10px; /* إضافة حشو داخلي */
        }
        .dropdown-item {
            padding: 10px; /* زيادة المساحة الداخلية لكل عنصر */
        }
    </style>
</head>
<body>

    <!-- ✅ الهيدر مع القوائم المنسدلة -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <!-- اللوجو على اليسار -->
            <a class="navbar-brand" href="#" style="color: white;">
                <img src="{{ asset('path-to-your-logo.png') }}" alt="Wasil-lk" width="100">
            </a>

            <!-- زر القائمة للجوال -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item dropdown me-3"> 
                        <a class="nav-link dropdown-toggle" href="#" id="howItWorksDropdown" role="button" style="color: white;">
                            How it works
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="howItWorksDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>Subscribe to Own</strong><br>
                                    <small>Learn More about this product</small>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>Monthly Plan</strong><br>
                                    <small>Learn More about this product</small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-3"> 
                        <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" style="color: white;">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>About Us</strong><br>
                                    <small>Learn more about us</small>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>Contact</strong><br>
                                    <small>Get in touch with us</small>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>FAQ</strong><br>
                                    <small>Frequently Asked Questions</small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-3"> 
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" style="color: white;">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>My Account</strong><br>
                                    <small>Manage your account</small>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>Settings</strong><br>
                                    <small>Adjust your preferences</small>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>Logout</strong><br>
                                    <small>Sign out from your account</small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" style="color: white;">
                            <i class="fas fa-globe"></i> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>English</strong><br>
                                    <small>Switch to English</small>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <strong>Arabic</strong><br>
                                    <small>Switch to Arabic</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-item.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).slideDown(200);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).slideUp(200);
            });
        });
    </script>
</body>
</html>
