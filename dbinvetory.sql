-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table dbinvetory.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_detail_pembelian: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_detail_pembelian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_detail_pembelian` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_detail_penjualan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_detail_penjualan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_detail_penjualan` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_master_barang: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_master_barang` DISABLE KEYS */;
INSERT INTO `tb_master_barang` (`kode_barang`, `id`, `nama_barang`, `deskripsi_barang`, `harga_satuan`, `stok`) VALUES
	('B003', 3, 'Hp', 'Teknologi', 10000, 1);
/*!40000 ALTER TABLE `tb_master_barang` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_master_pelanggan: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_master_pelanggan` DISABLE KEYS */;
INSERT INTO `tb_master_pelanggan` (`kode_pelanggan`, `id`, `nama_pelanggan`, `no_telp_pelanggan`, `alamat_pelanggan`) VALUES
	('P002', 2, 'Yusufa', '085848282729', 'Surakartaaaa');
/*!40000 ALTER TABLE `tb_master_pelanggan` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_master_supplier: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_master_supplier` DISABLE KEYS */;
INSERT INTO `tb_master_supplier` (`kode_supplier`, `id`, `nama_supplier`, `no_telp_supplier`, `alamat_pelanggan`) VALUES
	('S002', 2, 'Abdul', '081328864074', 'Gondang');
/*!40000 ALTER TABLE `tb_master_supplier` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_master_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_master_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_master_user` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_pembelian: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pembelian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pembelian` ENABLE KEYS */;

-- Dumping data for table dbinvetory.tb_penjualan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_penjualan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_penjualan` ENABLE KEYS */;

-- Dumping data for table dbinvetory.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `jabatan`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
	(1, 'ABDUL ROFIQ YUSUFA', 'cobagan@gmail.com', NULL, NULL, '$2y$10$sZlnZc/xic0lJSz2WYm7fumh7YEkJ1gwHs1IVZ/gS3Ez05rGaJv42', NULL, '2019-08-05 10:54:12', '2019-08-05 10:54:12', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
