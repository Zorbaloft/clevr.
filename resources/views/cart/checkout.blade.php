<x-layout>
    <div class="container">
        <h1 class="text-center mb-4">Checkout</h1>
        <div class="container mt-3">
            <div class="row">
                <div class="col border-end ">
                    <div class="d-flex align-items-center mb-3">
                        @if (auth()->user()->profile_picture)
                            <img src="{{ auth()->user()->profile_picture }}" class="rounded-circle"
                                alt="User Profile Picture" style="width: 65px; height: 65px; object-fit: cover;">
                        @else
                            <h1><i class="bi bi-person-circle"></i> </h1>
                        @endif
                        <p class="ps-2 name">{{ auth()->user()->name }}</p>
                    </div>
                    <div class=" pb-3 mb-3 ">
                        @foreach ($cart as $courseId => $courseDetails)
                            <div>
                                <img src="{{ $courseDetails['image'] }}" alt="" class="img-fluid">
                                <h3 class="mt-3 fw-bolder">{{ $courseDetails['title'] }}</h3>
                                <p>Preço: {{ $courseDetails['price'] }} €</p>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <p class="fw-bold">Detalhes de pagamento</p>
<<<<<<< HEAD
                    <p class=" mb-3">Completa a tua compra fornecendo os teus dados de Pagamento</p>
=======
                    <p class=" mb-3">Completa a tua compra fornecendo os teus dados de Pagamento.</p>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f

                    <form action="{{ route('checkout.complete') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <p class=" fw-bold mb-2">Endereço de email</p>
                            <input class="form-control  shadow-none" type="email" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="my-3 ">
<<<<<<< HEAD
                            <p class=" fw-bold mb-2">Nome do titular do cartao:</p>
                            <input class="form-control shadow-none" type="text">
                        </div>
                        <div>
                            <p class=" fw-bold mb-2">Informaçao do cartao:</p>
=======
                            <p class=" fw-bold mb-2">Nome do titular do cartão:</p>
                            <input class="form-control shadow-none" type="text">
                        </div>
                        <div>
                            <p class=" fw-bold mb-2">Informaçao do cartão:</p>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                            <div class="border rounded d-flex align-items-center justify-content-between">
                                <label for="cardDetails" class="visually-hidden">Card Number</label>
                                <input type="text" id="cardDetails" class="form-control shadow-none"
                                    placeholder="1234 5678 9012 3456" oninput="validateNumericInput(event)">

                                <fieldset class="d-flex w-50">
                                    <div>
                                        <label for="cardExpiry" class="visually-hidden">Expiry Date</label>
                                        <input type="text" id="cardExpiry" class="form-control shadow-none px-0"
                                            placeholder="MM/YY" oninput="validateCardExpiryInput(event)">
                                    </div>
                                    <div>
                                        <label for="cardCvv" class="visually-hidden">CVV</label>
                                        <input type="password" id="cardCvv" maxlength="3"
                                            class="form-control shadow-none px-0" placeholder="CVV" oninput="validateNumericInput(event)">
                                    </div>
                                </fieldset>
                            </div>

                            <div class="address">
<<<<<<< HEAD
                                <p class=" fw-bold mb-3">Endereço de Faturaçao:</p>
=======
                                <p class=" fw-bold mb-3">Endereço de Faturação:</p>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                <select class="form-select shadow-none mb-2" aria-label="Default select example">
                                    <option value="aveiro">Aveiro</option>
                                    <option value="beja">Beja</option>
                                    <option value="braga">Braga</option>
                                    <option value="bragança">Bragança</option>
                                    <option value="castelo_branco">Castelo Branco</option>
                                    <option value="coimbra">Coimbra</option>
                                    <option value="évora">Évora</option>
                                    <option value="faro">Faro</option>
                                    <option value="guarda">Guarda</option>
                                    <option value="leiria">Leiria</option>
                                    <option value="lisboa">Lisboa</option>
                                    <option value="portalegre">Portalegre</option>
                                    <option value="porto">Porto</option>
                                    <option value="santarém">Santarém</option>
                                    <option value="setúbal">Setúbal</option>
                                    <option value="viana_do_castelo">Viana do Castelo</option>
                                    <option value="vila_real">Vila Real</option>
                                    <option value="viseu">Viseu</option>
                                </select>
                                <div class="d-flex">
                                    <input class="form-control shadow-none zip" type="text"
<<<<<<< HEAD
                                        placeholder="Codigo Postal">
=======
                                        placeholder="Código Postal">
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                    <input class="form-control shadow-none state" type="text" placeholder="Cidade">
                                </div>
                                <div class="d-flex flex-column ">
                                    <div class="d-flex align-items-center justify-content-between my-2">
                                        <p>Subtotal</p>
                                        <p> {{ $courseDetails['price'] }} €</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
<<<<<<< HEAD
                                        <p>Taxa<span>(5%)</span></p>
                                        <p>{{ number_format($tax, 2) }} €</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Total (Com Taxa)</p>
=======
                                        <p>Taxa<span> (5%)</span></p>
                                        <p>{{ number_format($tax, 2) }} €</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Total </p>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                                        <strong>{{ number_format($total, 2) }} €</strong>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Pagar
                                        {{ number_format($total, 2) }} €</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-layout>
