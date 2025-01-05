<?php
// Ambil ID buku dari query string
$id = $_GET['id'] ?? null;

// Data buku
$books = [
    1 => ['title' => 'Bumi', 'author' => 'Tere Liya', 'year' => 2022],
    2 => ['title' => 'Matahari', 'author' => 'Tere Liya', 'year' => 2018],
    3 => ['title' => 'Bulan', 'author' => 'Tere Liya', 'year' => 2022],
    4 => ['title' => 'Bintang', 'author' => 'Tere Liya', 'year' => 2017],
    5 => ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005],
];

// Tampilkan detail buku yang dipilih
if ($id && isset($books[$id])) {
    $book = $books[$id];
    echo "<h1>Pinjam Buku: {$book['title']}</h1>";
    echo "<p>Penulis: {$book['author']}</p>";
    echo "<p>Tahun Terbit: {$book['year']}</p>";
} else {
    echo "<p>Buku tidak ditemukan.</p>";
}
?>
