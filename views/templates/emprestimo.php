<main>
    <h2>Empréstimo de Livros</h2>
</main>
<fieldset class="fieldset-cadastro">
    <form class="form-cadastro" method="post">
        <div class="div-label-input">
            <div class="label-input">

                <div>
                    <label for="">Código Livro:</label>
                </div>
                <div>
                    <input style="margin-left: 0; margin-top: 1rem" type="number" name="fk_cod_livro" placeholder="155">
                </div>
                
            </div>
            <div class="label-input">
                <div>
                    <label for="">Código Usuário:</label>
                </div>
                <div>
                    <input style="margin-left: 0; margin-top: 1rem" type="number" name="fk_cod_usuario" placeholder="19">
                </div>
                
            </div>

        </div>
        <div class="div-submit-reset">
            <div class="submit-reset">
                <input class="bt-submit" type="submit" name="bt_enviar" value="Enviar">
            </div>
            <div class="submit-reset">
                <input class="bt-reset" type="reset" name="limpar" value="Limpar">
            </div>
        </div>
    </form>
</fieldset>
<?php
use models\EmprestimoModel;
$cad = new EmprestimoModel();
$cad->emprestar();
?>