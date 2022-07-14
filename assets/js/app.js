window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});



var Fn = {
    // Valida el rut con su cadena completa "XXXXXXXX-X"
    validaRut: function(rutCompleto) {
        rutCompleto = rutCompleto.replaceAll("‐", "-");
        if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rutCompleto))
            return false;
        var tmp = rutCompleto.split('-');
        var digv = tmp[1];
        var rut = tmp[0];
        if (digv == 'K') digv = 'k';

        return (Fn.dv(rut) == digv);
    },
    dv: function(T) {
        var M = 0,
            S = 1;
        for (; T; T = Math.floor(T / 10))
            S = (S + T % 10 * (9 - M++ % 6)) % 11;
        return S ? S - 1 : 'k';
    }
}

const rut = document.getElementById('validarRut')
const signupButton = document.getElementById('btnvalida')
if (rut) {
    rut.addEventListener('keyup', function(e) {
        if (Fn.validaRut(rut.value)) {
            console.log('Rut valido')
            rut.classList.add('is-valid')
            rut.classList.remove('is-invalid')
            signupButton.disabled = false;
        } else {
            console.log('Rut invalido')
            rut.classList.add('is-invalid')
            rut.classList.remove('is-valid')
            signupButton.disabled = true;
        }
    })
}



// JS DE PROFILE CLIENT