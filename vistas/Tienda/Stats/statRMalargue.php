<canvas id="AguaRMalargue"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Función para crear el gráfico
function crearGrafico2() {
    // Etiquetas y datos con porcentajes de consumo de agua
    const sectores = ["Agrícola", "Humano", "Mineria/Petrolera", "Recreativo"];
    const porcentajes = [52, 6, 11, 31];

    const ctx = document.getElementById('AguaRMalargue');

    return new Chart(ctx, {
        type: 'pie',  // Cambia a 'doughnut' si prefieres un gráfico tipo dona
        data: {
            labels: sectores,
            datasets: [{
                label: 'Consumo de Agua (%)',
                data: porcentajes,
                backgroundColor: [
                    'rgba(18, 230, 32, 0.2)', // Color para "Agrícola"
                    'rgba(18, 113, 230, 0.2)', // Color para "Humano"
                    'rgba(255, 251, 0, 0.2)',  // Color para "Industrial"
                    'rgba(212, 0, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(18, 230, 32, 1)', // Borde para "Agrícola"
                    'rgba(18, 113, 230, 1)', // Borde para "Humano"
                    'rgba(255, 251, 0, 1)',  // Borde para "Industrial"
                    'rgba(212, 0, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top', // Posición de la leyenda
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    });
}

// Variable global para almacenar el gráfico
var miGrafico2;

// Función para manejar el evento de cambio de tamaño de ventana
function manejarCambioDeTamaño() {
    // Destruir el gráfico existente si existe
    if (miGrafico2) {
        miGrafico2.destroy();
    }

    // Crear el nuevo gráfico
    miGrafico2 = crearGrafico2();
}

// Agregar un event listener para el evento 'resize'
window.addEventListener('resize', manejarCambioDeTamaño);

// Inicializar el gráfico al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    miGrafico2 = crearGrafico2();
});
</script>