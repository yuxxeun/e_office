<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('login.css')}}">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <div class="top-header">
                    <h2>Login</h2>
                    <span>Silakan masukkan email dan password Anda!</span>
                </div>
                <form action="/sesi/login" method="post">
                    @csrf
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ Session::get('email') }}" autofocus required>
                        <label for=""></label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
                        <label for=""></label>
                    </div>
                    <div class="forget">
                        <div class="left">
                            <label for=""><input type="checkbox">Ingat Saya</label>
                        </div>
                        <div class="right">
                            <label>
                                <a href="#">Lupa Password</a>
                            </label>
                        </div>
                    </div>
                    <button>Masuk</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Ionic.io-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>