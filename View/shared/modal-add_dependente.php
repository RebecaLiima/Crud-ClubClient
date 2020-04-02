
<!-- Modal -->
<div class="modal fade" id="modalDependente" tabindex="-1" role="dialog" aria-labelledby="modalDependenteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDependenteTitle">Cadastrar Novo Dependente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-row justify-content-center">
                    <form class=" mw-50">
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
                            <label for="sexo">Idade</label>
                            <input type="text" name="sexo" class="form-control" id="sexo">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
                    </form>
                     
                        <div class="d-flex flex-column border-left">
                            <h3 class="h3 m-4">Lita de Dependentes</h3>
                        <table class="table table-hover table-dependente m-4">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>CPF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Lorem Ipsum </td>
                                    <td>16</td>
                                    <td>123.123.123-12</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>