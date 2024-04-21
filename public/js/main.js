$('#numeroDecimal').on('input', function(event) {
    let valor = $(this).val();
    valor = valor.replace(/[^0-9.]/g, '');
    const partes = valor.split('.');
    if (partes.length > 1) {
        valor = partes[0] + '.' + partes[1].slice(0, 2);
    }
    $(this).val(valor);
});
$('#numero').on('input', function(event) {
    let valor = $(this).val();
    valor = valor.replace(/\D/g, '');
    $(this).val(valor);
});