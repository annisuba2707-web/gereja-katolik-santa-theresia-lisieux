// Navbar aktif saat scroll
window.addEventListener("scroll", function () {

    let navbar = document.querySelector(".navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("shadow");
    } else {
        navbar.classList.remove("shadow");
    }

});

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (e) {

        e.preventDefault();

        const tujuan = document.querySelector(
            this.getAttribute("href")
        );

        tujuan.scrollIntoView({
            behavior: "smooth"
        });

    });

});

// Pesan Selamat Datang
document.addEventListener("DOMContentLoaded", function () {

    console.log("Website Gereja Berhasil Dimuat");

});

// Konfirmasi Hapus Data
function konfirmasiHapus() {

    return confirm(
        "Apakah Anda yakin ingin menghapus data ini?"
    );

}

// Tombol Kembali ke Atas
const btnTop = document.createElement("button");

btnTop.innerHTML = "↑";

btnTop.id = "btnTop";

document.body.appendChild(btnTop);

btnTop.style.position = "fixed";
btnTop.style.bottom = "20px";
btnTop.style.right = "20px";
btnTop.style.display = "none";
btnTop.style.width = "45px";
btnTop.style.height = "45px";
btnTop.style.border = "none";
btnTop.style.borderRadius = "50%";
btnTop.style.background = "#0d6efd";
btnTop.style.color = "#fff";
btnTop.style.fontSize = "20px";
btnTop.style.cursor = "pointer";
btnTop.style.zIndex = "999";

window.addEventListener("scroll", function () {

    if (window.scrollY > 200) {
        btnTop.style.display = "block";
    } else {
        btnTop.style.display = "none";
    }

});

btnTop.addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});