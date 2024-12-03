document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const correctEmail = 'tiarakhairunisa1@gmail.com';  // Email yang benar
    const correctPassword = 'tiara';  // Password yang benar

    const email = document.getElementById('email').value;  // Ambil nilai input email
    const password = document.getElementById('password').value;  // Ambil nilai input password

    if(email === correctEmail && password === correctPassword) {
        alert("login berhasil");
        window.location.href = "index.html";  // Redirect ke halaman index jika login berhasil
    } else {
        alert("Password salah");  // Tampilkan pesan jika login gagal
    }
});