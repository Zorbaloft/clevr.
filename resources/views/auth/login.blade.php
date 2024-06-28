<x-layout>
    <section class="bg-light p-3 p-md-4 p-xl-5">
        <div class="container p-5">
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
                                                            <img src="images/logos/clevr4.png"
                                                                alt="" width="150" height="150">
                                                        </a>
                                                    </div>
<<<<<<< HEAD
                                                    <h2 class="h4 text-center">Faça o Login</h2>
=======
                                                    <h2 class="h4 text-center">Inicie a sua sessão</h2>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="row gy-2 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="name@example.com" required for="email"
                                                            :value="__('Email')">
                                                        <label for="email" class="form-label">Email</label>
                                                    </div>
                                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" name="password" id="password"
                                                            value="" placeholder="Password" required for="password"
                                                            :value="__('Password')">
                                                        <label for="password" class="form-label">Password</label>
                                                    </div>
                                                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex gap-2 justify-content-between">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="rememberMe" id="rememberMe">
                                                            <label class="form-check-label text-secondary" for="rememberMe">
<<<<<<< HEAD
                                                               Mantenha-me Logado
=======
                                                               Manter-me Logado
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                            </label>
                                                        </div>
                                                        @if (Route::has('password.request'))
                                                            <a class=" " href="{{ route('password.request') }}">
                                                                {{ __('Esqueceu-se da password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid my-3">
<<<<<<< HEAD
                                                        <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <p class="m-0 text-secondary text-center">Nao tem conta? <a
                                                            href="{{ route('register') }}"
                                                            class="link-primary text-decoration-none">Sign up</a></p>
=======
                                                        <button class="btn btn-primary btn-lg" type="submit">Iniciar Sessão</button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <p class="m-0 text-secondary text-center">Não tens conta? <a
                                                            href="{{ route('register') }}"
                                                            class="link-primary text-decoration-none">Regista-te</a></p>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                                </div>
                                            </div>
                                        </form>
                                        
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
