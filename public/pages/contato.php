<h2 class="my-4">CONTATO</h2>

<legend class="">Preencha seus dados</legend>

<form action="/pages/forms/contato.php" method="post" class="card p-3">
    <div class="form-group">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control mb-3" name="name" id="" aria-describedby="emailHelpId"
            placeholder="Digite seu nome">

    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control mb-3" name="email" id="" aria-describedby="emailHelpId"
            placeholder="Digite seu email">

    </div>
    <div class="form-group">
        <label for="subject" class="form-label">Assunto</label>
        <input type="text" class="form-control mb-3" name="subject" id="" aria-describedby="emailHelpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="message" class="form-label">Menssagem</label>
        <textarea name="" id="" cols="90" rows="5" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-25 my-3">Enviar</button>
</form>