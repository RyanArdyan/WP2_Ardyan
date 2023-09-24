<!-- cetak value variable $title -->
<!-- pelarian($title) -->
<h2><?= esc($title) ?></h2>

<!-- panggil url /news/new -->
<a href="/news/new">Tambah Berita</a>

<!-- jika tidak kosong dari $berita dan adalah array dari value variable news -->
<?php if(! empty($news) && is_array($news)): ?>
    <!-- looping $news agar menghasilkan setiap detail_berita -->
    <!-- untuksetiap $semua_berita sebagai $barang_berita -->
    <?php foreach($news as $news_item): ?>
        <!-- cetak setiap detail_berita, column title -->
        <h3><?= esc($news_item['title']); ?></h3>
        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <!-- cetak url /news/ setiap detail_berita, column slug -->
        <!-- Kami kembali menggunakan penggunaan esc()untuk membantu mencegah serangan XSS. Namun kali ini kami juga meneruskan “url” sebagai parameter kedua. Hal ini karena pola serangan berbeda-beda bergantung pada konteks penggunaan output. -->
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
    <?php endforeach; ?>
<?php else: ?>
    <h3>No News</h3>
    <p>Unable to find any news for you.</p>
<?php endif ?>

