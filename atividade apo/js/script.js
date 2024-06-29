$(document).ready(function() {
    $('#addExperiencia').click(function() {
        $('#experienciasProfissionais').append(`
            <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" name="empresa[]" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control" name="cargo[]" required>
            </div>
            <div class="form-group">
                <label for="periodo">Período</label>
                <input type="text" class="form-control" name="periodo[]" required>
            </div>
        `);
    });

    $('#addReferencia').click(function() {
        $('#referenciasPessoais').append(`
            <div class="form-group">
                <label for="nomeReferencia">Nome</label>
                <input type="text" class="form-control" name="nomeReferencia[]" required>
            </div>
            <div class="form-group">
                <label for="contatoReferencia">Contato</label>
                <input type="text" class="form-control" name="contatoReferencia[]" required>
            </div>
        `);
    });

    $('#dataNascimento').change(function() {
        const birthDate = new Date($(this).val());
        const today = new Date();
        const age = today.getFullYear() - birthDate.getFullYear();
        $('#idade').val(age);
    });
});
