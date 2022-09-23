<div class="container container-fluid">
    <h1 class="text-center" style="margin-top: 100px;">Atualizar conta
        <hr>
    </h1>
    <div class="d-flex justify-content-center card-creat-user">
        <div class="card" style="width: 58rem;">
            <div class="card-body">
                <form class="row g-3">
                    <div class="text-center">
                        <div class=" d-flex  justify-content-center row">
                            <img src="/assets/img/perfil-default.jpg" id='img_perfil_user' class="creat-img rounded-circle" alt="...">
                        </div>
                        <label class="mt-5 btn btn-primary" for="img_perfil">Atualizar foto de perfil</label>
                        <input type="file" name="img_perfil" id="img_perfil" accept="image/*" onchange="loadFile(event);">
                    </div>
                    <div class="form-floating  col-md-6">
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="nome" autofocus>
                        <label for="email"><i class="fa fa-user" aria-hidden="true"></i> Nome</label>
                    </div>
                    <div class="form-floating  col-md-6">
                        <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="sobreno,e">
                        <label for="email"><i class="fa fa-user" aria-hidden="true"></i> Sobrenome</label>
                    </div>
                    <div class=" form-floating  col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="email@exemple.com" required>
                        <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                    </div>
                    <div class=" form-floating  col-md-6">
                        <input type="tel" name="telefone" class="form-control phone" id="telefone" placeholder="telefone">
                        <label for="telefone"><i class="fa fa-phone" aria-hidden="true"></i> Telefone</label>
                    </div>
                    <div class=" form-floating  col-md-6">
                        <input type="password" name="password" class="form-control" id="password_create" placeholder="Password">
                        <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Senha</label>
                    </div>
                    <div class=" form-floating  col-md-6">
                        <input type="password" name="password" class="form-control" id="password_confirmation" placeholder="Password">
                        <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Confirmar senha</label>
                        <input type="button" id="showSenhaCreate" value="Mostrar senhas" class="btn" style="border: none;" />
                    </div>
                    <div class="col-12 text-center">
                        <div class=" d-grid gap-2 col-6 mx-auto">
                            <button type="submit" id="submit-form-create" class="btn btn-primary">Atualizar conta</button>
                            <a class="btn btn-danger" onclick="voltar();">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>