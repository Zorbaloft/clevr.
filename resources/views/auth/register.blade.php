<x-layout>
    <!-- Registration 8 - Bootstrap Brain Component -->
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
                                                            <img src="images/logos/clevr4.png" alt=""
                                                                width="150" height="150">
                                                        </a>
                                                    </div>
<<<<<<< HEAD
                                                    <h2 class="h4 text-center">Registro</h2>
=======
                                                    <h2 class="h4 text-center">Registo</h2>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                </div>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="name"
                                                            id="name" placeholder="First Name" required
                                                            for="name" :value="__('Name')">
                                                        <label for="firstName" class="form-label">Nome</label>
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="name@example.com" required
                                                            for="email" :value="__('Email')">
                                                        <label for="email" class="form-label">Email</label>
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" value="" placeholder="Password"
                                                            required for="password" :value="__('Password')">
                                                        <label for="password" class="form-label">Password</label>
                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control"
                                                            name="password_confirmation" id="password_confirmation" value=""
                                                            placeholder="Repita a Password" required for="password"
                                                            :value="__('Confirm Password')">
<<<<<<< HEAD
                                                        <label for="password" class="form-label">Confirm Password</label>
=======
                                                        <label for="password" class="form-label">Confirma a Password</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="iAgree" id="iAgree" required>
                                                        <label class="form-check-label text-secondary" for="iAgree">
<<<<<<< HEAD
                                                            I agree to the <a href="#!"
                                                                class="link-primary text-decoration-none">terms and
                                                                conditions</a>
=======
                                                            Eu concordo com os <a href="#!"
                                                                class="link-primary text-decoration-none">termos e condições.</a>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
<<<<<<< HEAD
                                                        <button class="btn btn-dark btn-lg" type="submit">Sign
                                                            up</button>
=======
                                                        <button class="btn btn-dark btn-lg" type="submit">Registo</button>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
<<<<<<< HEAD
                                                <p class="mb-0 mt-5 text-secondary text-center">Already have an
                                                    account? <a href="{{ route('login') }}"
                                                        class="link-primary text-decoration-none">Sign in</a></p>
=======
                                                <p class="mb-0 mt-5 text-secondary text-center">Já tens conta? <a href="{{ route('login') }}"
                                                        class="link-primary text-decoration-none">Iniciar Sessão</a></p>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
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
