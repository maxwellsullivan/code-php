<legend>Atualizar Dados Alunos</legend>
<div class="span7" style="margin-left: 0;">
    <form data-remote="true" focus-response="#mensagem" id="form" method="post" action="index.php/alunosController/atualizarDadosAluno">
        <fieldset>
            <label>Aluno</label>
            <input type="text" name="aluno" value="<?php echo $dados[0]->aluno; ?>" required>
            <label>Responsável</label>
            <input type="text" name="responsavel" value="<?php echo $dados[0]->responsavel; ?>">
            <label>Telefone Responsável</label>
            <input type="text" class="maskTel" name="contatoResponsavel" value="<?php echo $dados[0]->contatoResponsavel; ?>">
            <label>Data de Matrícula</label>
            <input type="text" class="datepicker maskDate" name="dataMatricula" required value="<?php echo $dados[0]->dataMatricula; ?>" >
            <label>Data Término Estudos</label>
            <input type="text" class="datepicker maskDate" name="dataTerminoEstudos" required value="<?php echo $dados[0]->dataTerminoEstudos; ?>" >
            <label>Foto</label>
            <input type="file" name="file">
            <small>Somente imagens no formato JPG</small>
            <span class="help-block"></span>
            <input type="submit" class="btn" value="Atualizar">
            <input type="hidden" name="id" value="<?php echo $dados[0]->id; ?>" >
            <span class="help-block"></span>
            <p id="mensagem"></p>
        </fieldset>
    </form>
</div>
<div class="span5">
    <?php if (file_exists("assets/fotosAlunos/".$dados[0]->foto)):?>
    <div class="thumbnail">
        <img src="<?php echo base_url(); ?>assets/fotosAlunos/<?php echo $dados[0]->foto; ?>" alt="">
        <h3><?php echo $dados[0]->aluno; ?></h3>
    </div>
    <?php endif; ?>
</div>