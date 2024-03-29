document.addEventListener('DOMContentLoaded', function() {
    const printButton = document.getElementById('#btnCrearPdf');
    const $elementoParaConvertir = document.body; // <-- Aquí puedes elegir cualquier elemento del DOM
    html2pdf()
        .set({
            margin: 1,
            filename: 'documento.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 3, // A mayor escala, mejores gráficos, pero más peso
                letterRendering: true,
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'portrait' // landscape o portrait
            }
        })
        .from($elementoParaConvertir)
        .save()
        .catch(err => console.log(err))
        .finally()
        .then(() => {
            console.log('PDF generado correctamente');
        });

});