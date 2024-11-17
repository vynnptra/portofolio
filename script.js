window.addEventListener("scroll", function() {
    const navbarKedua = document.getElementById("navbarKedua");
    const halamanKeduaPosisi = window.innerHeight; 

    if (window.scrollY >= halamanKeduaPosisi) {
        navbarKedua.classList.remove("-translate-y-36");
        navbarKedua.classList.add("translate-y-0");
    } else {
        navbarKedua.classList.remove("translate-y-0");
        navbarKedua.classList.add("-translate-y-56", );
    }
});