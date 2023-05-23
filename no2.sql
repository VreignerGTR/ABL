CREATE TABLE karyawan (
  id VARCHAR(3) PRIMARY KEY,
  nama VARCHAR(50),
  jenis_kelamin ENUM('Laki-laki', 'Perempuan'),
  golongan VARCHAR(3),
  alamat VARCHAR(100)
);

INSERT INTO karyawan (id, nama, jenis_kelamin, golongan, alamat)
VALUES
  ('K01', 'Prita', 'Perempuan', 'IVA', 'Jalan Kencana Jakarta'),
  ('K02', 'Budi Hidayat', 'Laki-laki', 'IVA', 'Jalan Anggrek Sulawesi'),
  ('K03', 'Rahman', 'Laki-laki', 'IVA', 'Jalan Melati Kalimantan'),
  ('K04', 'Putri Lestari', 'Perempuan', 'IVC', 'Jalan Diponogoro Jawa Barat'),
  ('K05', 'John', 'Laki-laki', 'IVD', 'Jalan Delima Papua');
