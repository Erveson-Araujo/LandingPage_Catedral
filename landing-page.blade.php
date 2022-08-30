<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catedral Landing-Page</title>

    <link rel="shortcut icon" href="{{ asset('assets/images-catedral/favicon.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link href="css/landing-page.css" rel="stylesheet" />

<body>
    <header>
        <nav class="navbar navbar-light bg-white">
            <div class="container header">
                <div class="container col-md-6">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images-catedral/Logo.png" alt="" class="logo-catedral mt-1 mb-1">
                    </a>
                </div>
                <div class="container col-md-6">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images-catedral/logo-liv.svg" alt="" class="logo-liv mt-1 mb-1">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="col-12">
        <section class="section-title">
            <div class="container">
                <div class="row justify-content-center align-items-center d-flex text-center">
                    <div class="col-12 col-md-8">
                        <h1 class="titulo-principal">Mensalidades a partir de *R$ 165,76</h1>
                        <p>*Plano Enfermaria de 00 a 18 anos (UNEB / FETRABRAS / AFPU).</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-rede">
            <div class="container">
                <div class="col-12">
                    <h1 id="title-rede">Ampla Rede de Hospitais para Urgências e Emergências</h1>
                    <p id="text-rede">Uma rede de atendimento para cuidar de você pra vida inteira.</p>
                </div>
            </div>
            <div id="box1" class="row lfg-block-row">
                <div id="liv" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/1.png" id="img-liv" class="img-fluid">
                    <h4 id="text-liv">Pronto Atendimento LIV Fortaleza</h4>
                </div>
                <div id="hhj" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/2.png" id="img-hhj" class="img-fluid">
                    <h4 id="text-hhj">Hospital Haroldo Juaçaba</h4>
                </div>
                <div id="hsr" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/3.png" id="img-hsr" class="img-fluid">
                    <h4 id="text-hsr">Hospital São Raimundo</h4>
                </div>
                <div id="hsc" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/8.png" id="img-hsc" class="img-fluid">
                    <h4 id="text-hsc">Hospital São Camilo&nbsp;<div>Cura D'Ars</div>
                    </h4>
                </div>
            </div>
            <div id="box2" class="row lfg-block-row">
                <div id="hcf" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/4.png" id="img-hcf" class="img-fluid">
                    <h4 id="text-hcf">Hospital Central de Fortaleza - HCF</h4>
                </div>
                <div id="hg" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/5.png" id="img-hg" class="img-fluid">
                    <h4 id="text-hg">Hospital Gastroclínica</h4>
                </div>
                <div id="hs" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/6.png" id="img-hs" class="img-fluid">
                    <h4 id="text-hs">Hospital SOPAI</h4>
                </div>
                <div id="iof" class="col-md-12 lfg-block-col">
                    <img src="assets/images-catedral/hospitais-liv/7.png" id="img-iof" class="img-fluid">
                    <h4 id="text-iof">Instituto de Oftalmologia e Otorrinolaringologia de Fortaleza - IOF</h4>
                </div>
            </div>
        </section>
        <section id="feature" class="lfg-feature text-white">
            <div class="container">
                <div class="area-video">
                    <div class="embed-responsive embed-responsive-video">
                        <iframe allowfullscreen="" src="https://www.youtube.com/embed/GqmLZMC8Mvk?" webkitallowfullscreen="" mozallowfullscreen="" class="embed-responsive-item"></iframe>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-12 col-md-10 col-lg-8 text-center">
                    <h1>Ficou Interessado?</h1>
                    <p><span id="i09u6r" class="text-white">Preencha o formulário abaixo e faça uma cotação.</span></p>
                </div>
            </div>
        </section>
        <section class="section-form">
            <div class="container form_group">
                <div class="col-12 col-md-5 mb-3 mt-3">
                    <div class="card shadow-lg text-left card-form">
                        <div class="card-body px-4 py-5">
                            <h3 class="pb-3 font-weight-bold text-center">Fale com um de nossos especialistas.</h3>
                            <form method="get">
                                <div class="form-group">
                                    <label for="name" class="sr-only">First name</label>
                                    <input type="text" name="name" required="" placeholder="Nome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" placeholder="Email" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" placeholder="Telefone" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <select type="text" name="service" required="" class="form-control">
                                        <option value="">Quero um plano:</option>
                                        <option value="service A">Para mim</option>
                                        <option value="service B">Para minha empresa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea name="message" placeholder="Deixe sua mensagem" required="" row="3" class="form-control"></textarea>
                                </div>
                                <button type="submit" id="button-form" class="btn btn-dark btn-lg mt-2 shadow-lg">Solicitar Cotação</button>
                                <!-- <p class="mt-3 small">
                                    Um de nossos especialistas vai te ajudar.
                                </p> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer-page" class="lfg-footer footer-small bg-dark">
        <div id="area-footer" class="row lfg-block-row">
            <div class="col-md-4 mt-3">
                <img class="mt-3" id="logo-footer" src="assets/images-catedral/Logo.png" class="img-fluid">
                <p class="mt-4" id="endereco">Rua Costa Barros, 915 - Sala 401</p>
                <div>Centro | Fortaleza-CE</div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="container pt-4">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://www.facebook.com/catedral.beneficios1" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://www.instagram.com/catedral.beneficios/" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    </section>
                    <!-- Section: Social media -->
                </div>
                <div>
                    <h4 id="nome-catedral">Catedral Administradora de Benefícios LTDA</h4>
                    <p id="cnpj">CNPJ: 45.400.278/0001-94</p>
                </div>
                <div class="mt-3 mb-3">
                    <img id="img-ans" src="assets/images-catedral/ANS 1.png" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <h4 class="mt-4">Contatos</h4>
                <div id="contbox">
                    <p id="num">(85) 3067-3024</p>
                    <!-- <p id="email">contato@catedraladministradora.com.br</p> -->
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center text-white p-3 mt-4" style="background-color: #393939">
            © 2022 Catedral Administradora de Benefícios. Todos os Direitos Reservados
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="/js/login.js"></script>
</body>

</html>