const products = [
    {
        name: 'Guitar Yamaha',
        image: 'images/guitar.jpg',
        price: 'Rp 2.500.000',
        description: 'Guitar Yamaha with rich sound and high quality build.'
    },
    {
        name: 'Digital Piano',
        image: 'images/piano.jpg',
        price: 'Rp 5.000.000',
        description: 'Digital piano with authentic sound and multiple features.'
    },
    {
        name: 'Drum Set',
        image: 'images/drums.jpg',
        price: 'Rp 3.000.000',
        description: 'Complete drum set for professionals.'
    },
    {
        name: 'Bass Guitar',
        image: 'images/bass.jpg',
        price: 'Rp 3.500.000',
        description: 'High-quality bass guitar with deep sound.'
    },
    {
        name: 'Violin',
        image: 'images/violin.jpg',
        price: 'Rp 2.000.000',
        description: 'Classical violin with superior tone.'
    },
    {
        name: 'Ukulele',
        image: 'images/ukulele.jpg',
        price: 'Rp 1.500.000',
        description: 'Compact ukulele, perfect for beginners.'
    },
    {
        name: 'Harmonica',
        image: 'images/harmonica.jpg',
        price: 'Rp 500.000',
        description: 'Easy-to-learn harmonica with a sweet tone.'
    },
    {
        name: 'Electric Guitar',
        image: 'images/electric_guitar.jpg',
        price: 'Rp 4.000.000',
        description: 'High-performance electric guitar for rock enthusiasts.'
    },
    {
        name: 'Flute',
        image: 'images/flute.jpg',
        price: 'Rp 1.800.000',
        description: 'Classical flute with crisp sound and precision.'
    },
    {
        name: 'Keyboard',
        image: 'images/keyboard.jpg',
        price: 'Rp 3.200.000',
        description: 'Portable keyboard with multiple instrument sounds.'
    }
];

// Fungsi untuk menampilkan modal dengan detail produk
function showProductDetail(index) {
    const modal = document.getElementById('productModal');
    const product = products[index];

    // Isi modal dengan data produk
    document.getElementById('modalImage').src = product.image;
    document.getElementById('modalName').textContent = product.name;
    document.getElementById('modalPrice').textContent = product.price;
    document.getElementById('modalDescription').textContent = product.description;

    // Tampilkan modal
    modal.style.display = 'block';
}

// Fungsi untuk menutup detail
function closeModal() {
    const modal = document.getElementById('productModal');
    modal.style.display = 'none';
}

// Menutup detail ketika klik di luar area modal
window.onclick = function(event) {
    const modal = document.getElementById('productModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
