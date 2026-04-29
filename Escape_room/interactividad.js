function togglePista(id) {
    const pista = document.getElementById(id);
    if (!pista) return;
    
    
    if (pista.style.display === "block") {
    pista.style.opacity = 0;
    setTimeout(() => pista.style.display = "none", 200);
    } else {
    pista.style.display = "block";
    pista.style.opacity = 1;
    }
    }
    
    
    function typeWriter(element, speed = 50) {
    const texto = element.innerHTML;
    element.innerHTML = "";
    let i = 0;
    const escribir = () => {
    if (i < texto.length) {
    element.innerHTML += texto.charAt(i);
    i++;
    setTimeout(escribir, speed);
    }
    }
    escribir();
    }
    
    window.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".typewriter").forEach(el => typeWriter(el));
    });
    
    
    function confirmarSalida(e) {
    if (!confirm("¿Seguro que quieres abandonar el Escape Room? Perderás tu progreso.")) {
    e.preventDefault();
    }
    }
    
    window.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("a.salir").forEach(el => {
    el.addEventListener("click", confirmarSalida);
    });
    });
    
    
    
    
    function iniciarCuentaAtras(minutos, destino) {
    const display = document.getElementById(destino);
    if (!display) return;
    
    
    let tiempo = minutos * 60;
    
    
    const actualizar = () => {
    const m = Math.floor(tiempo / 60);
    const s = tiempo % 60;
    display.textContent = `${m}:${s.toString().padStart(2, "0")}`;
    if (tiempo > 0) {
    tiempo--;
    } else {
    alert("⏳ ¡Tiempo agotado! Has perdido el Escape Room.");
    location.href = "index.php";
    }
    }
    actualizar();
    setInterval(actualizar, 1000);
    }