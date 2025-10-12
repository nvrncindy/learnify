<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f8f9fa; 
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 900px; /* Lebar maksimum halaman profil */
            margin: 2rem auto;
            padding: 0 15px;
        }

        /* Utility Classes */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }
        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 10px;
        }
        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }
        .text-center {
            text-align: center !important;
        }
        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }
        .mb-3 {
            margin-bottom: 1rem !important;
        }
        .mt-4 {
            margin-top: 1.5rem !important;
        }
        .pt-4 {
            padding-top: 1.5rem !important;
        }
        .pb-3 {
            padding-bottom: 1rem !important;
        }
        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }
        .d-flex {
            display: flex !important;
        }
        .justify-content-between {
            justify-content: space-between !important;
        }
        .align-items-center {
            align-items: center !important;
        }
        .p-4 {
            padding: 1.5rem !important;
        }
        .text-muted {
            color: #6c757d !important;
        }
        .text-sm {
            font-size: 0.875rem !important;
        }
        .w-100 {
            width: 100% !important;
        }

        /* Card and Section Styling */
        .card {
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .card-header-gray {
            background-color: #e9ecef; /* Warna abu-abu muda untuk header section */
            padding: 1rem 1.5rem;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            font-weight: 700;
            color: #344767;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Profile Header */
        .profile-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .profile-icon {
            font-size: 4rem;
            color: #344767;
            margin-bottom: 0.5rem;
        }
        .profile-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.1rem;
            color: #344767;
        }
        .profile-email {
            font-size: 1rem;
            color: #6c757d;
        }

        /* Form Controls */
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            font-weight: 700;
            color: #344767; 
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #d2d6da;
            border-radius: 0.5rem;
            transition: box-shadow 0.15s ease, border-color 0.15s ease;
        }

        /* Button Save */
        .btn-primary {
            display: inline-block;
            font-weight: 700;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
            border-radius: 0.5rem;
            border: 0;
            background-color: #1a73e8; /* Biru default */
            transition: all 0.15s ease-in;
        }
        .btn-primary:hover {
            background-color: #17c1e8;
        }
        
        /* Button Log Out */
        .btn-danger {
            display: inline-block;
            font-weight: 700;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            padding: 0.625rem 2rem;
            font-size: 0.875rem;
            border-radius: 0.5rem;
            border: 0;
            background-color: #ea0606; /* Merah */
            transition: all 0.15s ease-in;
        }
        .btn-danger:hover {
            background-color: #c90000;
        }


        /* Learning Stats Boxes */
        .stat-box {
            background-color: #e9ecef;
            border-radius: 0.75rem;
            min-height: 100px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            flex: 1;
            margin: 0 10px;
        }
        
        .stat-container {
            display: flex;
            margin: 0 -10px; /* Mengimbangi margin stat-box */
            margin-bottom: 1.5rem;
        }

        /* List Menu (My Courses, My Certificates) */
        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 0.5rem;
            cursor: pointer;
            font-weight: 600;
            color: #344767;
            transition: background-color 0.1s;
        }
        .list-group-item:hover {
            background-color: #f0f2f5;
        }
        .list-group-icon {
            font-size: 1.2rem;
            color: #6c757d;
        }
        
        /* Settings Switches */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 25px;
        }
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 17px;
            width: 17px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #17c1e8;
        }
        input:checked + .slider:before {
            transform: translateX(20px);
        }
        .fa-user:before { content: '👤'; }
        .fa-chevron-right:before { content: '>'; }
        .fa-bell:before { content: '🔔'; }
        .fa-envelope:before { content: '✉️'; }
    </style>
</head>
<body>

    <div class="container">
        
        <div class="profile-header">
            <div class="profile-icon">👤</div>
            <h1 class="profile-name">User</h1>
            <p class="profile-email">user@gmail.com</p>
        </div>

        <div class="card">
            <div class="card-header-gray">Informasi Akun</div>
            <div class="card-body">
                <form>
                    <label for="namaLengkap">Nama Lengkap</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="namaLengkap" value="User">
                    </div>

                    <label for="email">Email</label>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" value="user@gmail.com">
                        <a href="#" class="text-sm text-muted mt-2 d-block">Ganti Kata Sandi</a>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button type="submit" class="btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header-gray">Learning History & Achievements</div>
            <div class="card-body">
                <div class="stat-container">
                    <div class="stat-box">
                        <p class="mb-0 text-sm text-muted">Total Courses Enrolled</p>
                    </div>
                    <div class="stat-box">
                        <p class="mb-0 text-sm text-muted">Courses Completed</p>
                    </div>
                    <div class="stat-box">
                        <p class="mb-0 text-sm text-muted">Average Progress</p>
                    </div>
                </div>

                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    My Courses
                    <span class="list-group-icon">></span>
                </a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    My Certificates
                    <span class="list-group-icon">></span>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header-gray">Settings and Preferences</div>
            <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                        <span class="list-group-icon">🔔</span>
                        <span class="ms-3">App Notification</span>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                        <span class="list-group-icon">✉️</span>
                        <span class="ms-3">Subscriptions</span>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="text-center my-4">
            <button class="btn-danger">Log Out</button>
        </div>

    </div>

</body>
</html>