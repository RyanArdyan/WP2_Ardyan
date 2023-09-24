<!-- cetak value variable yg dikirim controller dan method -->
<h2><?= esc($title) ?></h2>

<!-- digunakan untuk menampilkan kesalahan terkait perlindungan CSRF kepada pengguna. -->
<!-- cetak sesi()->dapatkanKilatdata('error') -->
<?= session()->getFlashdata('error') ?>
<!-- cetak semua kesalahan validasi -->
<?= validation_list_errors() ?>

<form action="/news" method="post">
    <!-- CI mewajibkan keamanan dari serangna csrf -->
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <!-- Fungsi set_value()yang disediakan oleh Form Helper digunakan untuk menampilkan data masukan lama ketika terjadi kesalahan. -->
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>