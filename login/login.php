<div class="container container-fluid card-login">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h1 class="card-title text-center">Login <hr></h1>
                <form action="#" method="POST">
                    <img src="/assets/img/perfil-default.jpg" class="img-thumbnail rounded-circle" alt="..." style="border: none;">
                    <div class="row g-3">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Senha</label>
                            <input type="button" id="showSenha" value="Mostrar senha" class="btn"  style="border: none;" />        
                        </div>
                        
                        <button type="submit" id="submit-form-login" class="btn btn-primary">Entrar</button>
                        <a href="#">Esqueceu a senha?</a>
                        <a href="#">Não tem conta? crie agora mesmo</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>