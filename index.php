<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <form>
         <section class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: João Goulart</div>
        </section>
        <section class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: talysson@gmail.com</div>
        </section>  
        <section class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Endereço</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <div id="emailHelp" class="form-text">Ex: Rua das garças </div>
        </section>
         <section class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefone</label>
            <input type="fone" class="form-control" id="exampleInputPassword1">
            <div id="emailHelp" class="form-text">Ex: 9 9999-9999</div>
        </section>
        <section class="mb-3 form-check">
            <input type="date" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Data de nascimento</label>
        </section>
        </section>
        <section class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">verificar-me</label>
        </section>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>