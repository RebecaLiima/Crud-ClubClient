
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-add" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastrar Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/View/cadastroCliente.php" id="form" name="form" >
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf">
                    </div>
                     <div class="form-group">
                        <label for="idade">Idade</label>
                        <input type="text" name="idade" class="form-control" id="idade">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" name="sexo" class="form-control" id="sexo">
                    </div>
                    <button type="submit" name="cadastrar" class="btn btn-primary mt-4">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>