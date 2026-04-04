<?=$this->fetch('commons/header.php', $data)?>
<main>
    <section class="mensagem-recebida">
        <div class="container">
            <div class="conteudo">
                <h1>Mensagem recebida!</h1>
                <p>Obrigado por entrar em contato. Em breve, retornaremos sua mensagem.</p>
                <a  class="btn" href="<?=URL_BASE?>">Voltar para o início</a>
            </div>
        </div>
    </section>
</main>
<?=$this->fetch('commons/footer.php', $data)?>