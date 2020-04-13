
 

<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-add" role="document">
        <div class="modal-content mw-25">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Deseja deletar item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <button method="post" action="/View/cadastroCliente.php" id="form" name="deletar" type="button" class="btn btn-danger" onclick="alert('Deletado com Sucesso')">Sim</button>
            </div>
        </div>
    </div>
</div>