<x-layout>


    <section>
       
        <div class="container-fluid parallax align-content-center">
            <div class="row align-items-lg-center">
                <div class="col-12 col-lg-6">

                </div>
                <div class="col-12 col-lg-6">
                    <div class="row text-center">
                        <div class="col-12">
                            <h3 class="fs-3 fw-bold  mb-2 text-uppercase text-center">Expande a tua formação com os nossos
                            </h3>
                            <h2 class="mb-4 display-5 text-center text-uppercase fw-light">Cursos <span
                                    class="text-color-primary fw-bold">Online?</span>
                            </h2>
                            <ul class="d-flex flex-wrap course-list text-dark list-unstyled px-5">
                                <li class="mb-3 ">
                                    <h3 class="fs-3 ">Cursos de <span
                                            class="text-color-primary fw-bold">Programação</span></h3>
                                </li>
                                <li class="mb-3">
                                    <h3 class="fs-3 ">Cursos de <span class="text-color-primary fw-bold">Design</span>
                                    </h3>
                                </li>
                                <li class="mb-3">
                                    <h3 class="fs-3">Cursos de <span
                                            class="text-color-primary fw-bold">Marketing</span></h3>
                                </li>
                                <li class="mb-3">
                                    <h3 class="fs-3 ">Cursos de <span class="text-color-primary fw-bold">Gestão</span>
                                    </h3>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-service-cards></x-service-cards>

    <section class="section about" data-section="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="left-content text-white">
                        <span class="text-uppercase mb-2">Descubre novas oportunidades de aprendizagem</span>
                        <h4 class="fw-bold">Explora a nossa secção de <em class="text-warning">cursos</em></h4>
                        <p>Entra em contato connosco para mais informações sobre os nossos cursos online. A nossa
                            plataforma
                            oferece uma ampla gama de opções, desde cursos básicos até avançados..
                            <br><br>Estamos comprometidos em fornecer uma experiência de aprendizagem enriquecedora e
                            flexível, adaptada às suas necessidades e horários. Junta-te a nós e inicia a tua jornada de
                            aprendizagem hoje mesmo!
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/banners/about-img.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=" justify-content-md-center">

            <hr class="w-50 mx-auto border-dark-subtle">
            <h2 class="mx-4 text-center lh-base fw-bold">Encontra o curso que combina mais contigo!</h2>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">

        </div>
        <div class="container mt-4">
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-12 col-md-6 col-lg-3 ">
                        <x-courses.single-course :course="$course" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    

</x-layout>
