document.addEventListener("DOMContentLoaded", function () {
    // Obtener referencias a los campos del formulario
    const tipoUsuarioRadios = document.querySelectorAll("input[name='tipo']");
    const nombreInput = document.getElementById('nombre');
    const tipoDocumentoSelect = document.getElementById('tipo_documento');
    const numeroDocumentoInput = document.getElementById('numero_documento');
    const correoInput = document.getElementById('correo');
    const telefonoInput = document.getElementById('telefono');
    const fichaFormacionInput = document.getElementById('ficha_formacion');
    const codigoEmpresaInput = document.getElementById('codigo_empresa');
    const turnoSelect = document.getElementById('turno');
    const dependenciaSelect = document.getElementById('dependencia');
    const contrasenaInput = document.getElementById('contrasena');
    const confirmarContrasenaInput = document.getElementById('confirmar_contrasena');

    // Cargar datos guardados en sessionStorage
    nombreInput.value = sessionStorage.getItem('nombre') || '';
    tipoDocumentoSelect.value = sessionStorage.getItem('tipo_documento') || 'cc';
    numeroDocumentoInput.value = sessionStorage.getItem('numero_documento') || '';
    correoInput.value = sessionStorage.getItem('correo') || '';
    telefonoInput.value = sessionStorage.getItem('telefono') || '';
    fichaFormacionInput.value = sessionStorage.getItem('ficha_formacion') || '';
    codigoEmpresaInput.value = sessionStorage.getItem('codigo_empresa') || '';
    turnoSelect.value = sessionStorage.getItem('turno') || 'dia';
    dependenciaSelect.value = sessionStorage.getItem('dependencia') || 'porteria';
    contrasenaInput.value = sessionStorage.getItem('contrasena') || '';
    confirmarContrasenaInput.value = sessionStorage.getItem('confirmar_contrasena') || '';

    // Guardar datos en sessionStorage cuando el usuario escribe
    nombreInput.addEventListener('input', () => sessionStorage.setItem('nombre', nombreInput.value));
    tipoDocumentoSelect.addEventListener('change', () => sessionStorage.setItem('tipo_documento', tipoDocumentoSelect.value));
    numeroDocumentoInput.addEventListener('input', () => sessionStorage.setItem('numero_documento', numeroDocumentoInput.value));
    correoInput.addEventListener('input', () => sessionStorage.setItem('correo', correoInput.value));
    telefonoInput.addEventListener('input', () => sessionStorage.setItem('telefono', telefonoInput.value));
    fichaFormacionInput.addEventListener('input', () => sessionStorage.setItem('ficha_formacion', fichaFormacionInput.value));
    codigoEmpresaInput.addEventListener('input', () => sessionStorage.setItem('codigo_empresa', codigoEmpresaInput.value));
    turnoSelect.addEventListener('change', () => sessionStorage.setItem('turno', turnoSelect.value));
    dependenciaSelect.addEventListener('change', () => sessionStorage.setItem('dependencia', dependenciaSelect.value));
    contrasenaInput.addEventListener('input', () => sessionStorage.setItem('contrasena', contrasenaInput.value));
    confirmarContrasenaInput.addEventListener('input', () => sessionStorage.setItem('confirmar_contrasena', confirmarContrasenaInput.value));

    // Mostrar u ocultar campos según el tipo de usuario seleccionado
    tipoUsuarioRadios.forEach(radio => {
        radio.addEventListener("change", function () {
            if (this.value === "aprendiz" || this.value === "instructor") {
                document.getElementById("ficha-formacion").classList.remove("hidden");
                document.getElementById("extra-seguridad").classList.add("hidden");
                fichaFormacionInput.setAttribute("required", true);
                codigoEmpresaInput.removeAttribute("required");
                turnoSelect.removeAttribute("required");
                dependenciaSelect.removeAttribute("required");
            } else if (this.value === "seguridad") {
                document.getElementById("ficha-formacion").classList.add("hidden");
                document.getElementById("extra-seguridad").classList.remove("hidden");
                fichaFormacionInput.removeAttribute("required");
                codigoEmpresaInput.setAttribute("required", true);
                turnoSelect.setAttribute("required", true);
                dependenciaSelect.setAttribute("required", true);
            } else {
                document.getElementById("ficha-formacion").classList.add("hidden");
                document.getElementById("extra-seguridad").classList.add("hidden");
                fichaFormacionInput.removeAttribute("required");
                codigoEmpresaInput.removeAttribute("required");
                turnoSelect.removeAttribute("required");
                dependenciaSelect.removeAttribute("required");
            }
            sessionStorage.setItem('tipo', this.value);
        });

        // Restaurar selección de tipo de usuario desde sessionStorage
        if (sessionStorage.getItem('tipo') === radio.value) {
            radio.checked = true;
            radio.dispatchEvent(new Event('change')); // Disparar el evento para mostrar/ocultar campos
        }
    });

    // Validación de contraseñas
    document.getElementById('registro-form').addEventListener('submit', function (event) {
        if (contrasenaInput.value !== confirmarContrasenaInput.value) {
            event.preventDefault(); // Prevenir el envío del formulario
            alert('Las contraseñas no coinciden');
        }
    });
});
