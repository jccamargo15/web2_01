-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2018 às 18:55
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL DEFAULT '(00) 99999-9999',
  `photo` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `email`, `name`, `phone`, `photo`, `pass`) VALUES
(2, 'joao@gmail', 'joao', '(00) 99999-9999', 'user-image.png', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'maria@gmail.com', 'maria', '(00) 99999-9999', '20180628075616_Lighthouse.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'jose@jose.com', 'jose', '(00) 99999-9999', 'user-image.png', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'paulo@hotmail.com', 'paulo', '(00) 99999-9999', '20180628075558_Tulips.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'fulano@gmail.com', 'fulano2', '(00) 99999-9999', 'user-image.png', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'joana@gmail.com', 'joana', '(00) 99999-9999', 'user-image.png', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'coala@gmail.com', 'coala', '(00) 99999-9999', '20180628075836_Lighthouse.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'coala2@coala', 'coala3', '(00) 99999-9999', 'user-image.png', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'montanha@montanha', 'motanha2', '(00) 99999-9999', 'user-image.png', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'admin@admin.com.br', 'Administrador2', '(00) 99999-9999', '20180622011121_Lighthouse.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'dba@dba.com.br', 'DBA2', '(00) 99999-9999', '20180622010645_Tulips.jpg', 'c33367701511b4f6020ec61ded352059');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
