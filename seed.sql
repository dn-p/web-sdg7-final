--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ajay Kumar', 'ajay@gmail.com', '12345'),
(2, 'Amit', 'amit@gmail.com', '1234'),
(3, 'Keerti Panwar', 'keerti@gmail.com', '$2y$10$g.xv9BS7DZbZ0KT/.fkGouuD8duIUWY2lDntZ7ZXDDUW6h09ZDiqe'),
(4, 'Ankita', 'ankita@gmail.com', '$2y$10$ZuWPf98dGPFogVM8MoKGxOVZ4v1mXD.WrJQ7rwfvdYLWMpyEyRhtK'),
(5, 'Keerti Panwar', 'keerti1234@gmail.com', '$2y$10$PL6oQH71xCh3F3BALBuVYu6SLn2AVQ41o.i5vi2LosRIWEh1H.0Zi');

--
-- Dumping data untuk tabel `contact`
--

-- Gantilah `user_id` dengan ID pengguna yang sesuai untuk pesan yang dikirim
INSERT INTO `contact` (`user_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ajay', 'ajay@gmail.com', 'qdeeas', 'dsgffhgjhmhjm');

--
-- Indexes untuk tabel `contact`
--