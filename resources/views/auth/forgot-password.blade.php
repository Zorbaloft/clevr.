<x-layout>
    <section class="bg-light p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="card border-light-subtle shadow-sm">
                        <div class="row g-0">
                            <div class="col-12 col-md-6">
                                <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                                    src="images/banners/LoginBanner.jpg" alt="Welcome back you've been missed!">
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-lg-11 col-xl-10">
                                    <div class="card-body p-3 p-md-4 p-xl-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-5">
                                                    <div class="text-center mb-4">
                                                        <a href="#!">
                                                            <img src="images/logos/clevr4.png" alt="" width="150"
                                                                height="150">
                                                        </a>
                                                    </div>
                                                    <h2 class="h4 text-center">Password Reset</h2>
                                                    <h3 class="fs-6 fw-normal text-secondary text-center m-0">Provide
                                                        the email address associated with your account to recover your
                                                        password.</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="name@example.com" required
                                                            for="email" :value="__('Email')">
                                                        <label for="email" class="form-label">Email</label>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-dark btn-lg" type="submit">Reset
                                                            Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                                                    <a href="{{route('login')}}"
                                                        class="link-secondary text-decoration-none">Login</a>
                                                    <a href="{{route('register')}}"
                                                        class="link-secondary text-decoration-none">Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>