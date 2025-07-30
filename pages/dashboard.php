<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}
include "../config/db.php";

$result = mysqli_query($conn, "SELECT * FROM barang");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Inventory Barang</h1>
        <a href="../auth/logout.php" class="text-red-500">Logout</a>
    </div>
    <a href="tambah_barang.php" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Barang</a>
    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Jumlah</th>
                <th class="p-2 border">Keterangan</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; while ($row = mysqli_fetch_assoc($result)): ?>
            <tr class="border">
                <td class="p-2 border"><?= $i++ ?></td>
                <td class="p-2 border"><?= $row['nama_barang'] ?></td>
                <td class="p-2 border"><?= $row['jumlah'] ?></td>
                <td class="p-2 border"><?= $row['keterangan'] ?></td>
                <td class="p-2 border">
                    <a href="edit_barang.php?id=<?= $row['id'] ?>" class="text-blue-500">Edit</a> |
                    <a href="../proses/hapus_barang.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')" class="text-red-500">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
