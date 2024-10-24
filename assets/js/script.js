document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form default
        alert('Pesan Anda telah dikirim!'); // Notifikasi saat form dikirim
        form.reset(); // Mengosongkan form setelah pengiriman
    });
});
