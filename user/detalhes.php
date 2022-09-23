<div class="container  container-fluid">
    <h1 class="text-center" style="margin-top: 100px;">Meu perfil
        <hr>
    </h1>
    <div class="d-flex justify-content-center card-perfil">
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-3">
                    <img src="/assets/img/perfil-default.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Meus Dados</h5>
                        <hr>
                        <p class="card-text"><i class="fa fa-user" aria-hidden="true"></i> Nome</p>
                        <p class="card-text">Jadson</p>
                        <p class="card-text"><i class="fa fa-user" aria-hidden="true"></i> Sobrenome</p>
                        <p class="card-text">Eduardo</p>
                        <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> Email</p>
                        <p class="card-text">Jadson@gmail.com</p>
                        <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> Telefone</p>
                        <p class="card-text">(75) 00000-0000 </p>
                        <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i> Membro desde</p>
                        <p class="card-text"><?= date('F jS, Y', strtotime(date('Y-m-d'))); ?></p>

                        <div class=" d-flex d-grid gap-2 col-6 mx-auto">
                            <a href="" class="btn btn-primary">Atualizar conta</a>

                            <a href="" class="btn btn-danger">Deletar conta</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>