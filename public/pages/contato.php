<h2 class="my-4">CONTATO</h2>
<div class="d-flex flex-row justify-content-start align-bottom my-2">

    <div class="d-flex my-2">
        <legend>Preencha seus dados</legend>
    </div>
    <div class="d-flex my-2 ms-2">
        <?= getFlash('message'); ?>
    </div>

</div>
<form action="/pages/forms/contato.php" method="post" class="card p-3">
    <div class="form-group">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control mb-3" name="name"
            placeholder="Digite seu nome">

    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control mb-3" name="email"
            placeholder="Digite seu email">

    </div>
    <div class="form-group">
        <label for="subject" class="form-label">Assunto</label>
        <input type="text" class="form-control mb-3" name="subject">
    </div>
    <div class="form-group">
        <label for="message" class="form-label">Menssagem</label>
        <textarea name="message" cols="90" rows="5" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-25 my-3">Enviar</button>
</form>