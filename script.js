//Page Estiver pronta execute a table
$(document).ready( function () {
    $('#tabela').DataTable();
} );

//traducao para portugues da table ID table
var table = new DataTable('#tabela', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json',
    },
});