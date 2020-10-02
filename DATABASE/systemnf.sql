-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2020 às 17:18
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `systemnf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemsnf`
--

CREATE TABLE `itemsnf` (
  `id` int(11) NOT NULL,
  `codNF` int(11) DEFAULT NULL,
  `codProduct` int(11) DEFAULT NULL,
  `codAttendants` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itemsnf`
--

INSERT INTO `itemsnf` (`id`, `codNF`, `codProduct`, `codAttendants`, `amount`, `subtotal`) VALUES
(1, 1, 1, 1, 6, '192.60'),
(2, 1, 3, 1, 7, '396.20'),
(3, 1, 2, 1, 1, '61.25'),
(4, 1, 1, 1, 3, '96.30'),
(5, 1, 2, 1, 4, '245.00'),
(6, 2, 4, 1, 4, '80.00'),
(7, 2, 1, 1, 5, '160.50'),
(8, 2, 2, 1, 1, '61.25'),
(9, 3, 2, 1, 2, '122.50'),
(10, 3, 3, 1, 6, '339.60'),
(11, 3, 1, 1, 3, '96.30'),
(12, 4, 2, 1, 6, '367.50'),
(13, 4, 4, 1, 3, '60.00'),
(14, 5, 3, 41, 1, '56.60'),
(15, 5, 4, 41, 6, '120.00'),
(16, 5, 4, 41, 5, '100.00'),
(17, 6, 2, 41, 7, '428.75'),
(18, 6, 4, 41, 3, '60.00'),
(19, 6, 1, 41, 6, '192.60'),
(20, 6, 4, 41, 5, '100.00'),
(21, 6, 3, 41, 2, '113.20'),
(22, 7, 4, 1, 7, '140.00'),
(23, 7, 1, 1, 3, '96.30'),
(24, 7, 2, 1, 2, '122.50'),
(25, 7, 3, 1, 7, '396.20'),
(26, 8, 1, 1, 4, '128.40'),
(27, 8, 3, 1, 3, '169.80'),
(28, 9, 3, 1, 2, '113.20'),
(29, 9, 2, 1, 6, '367.50'),
(30, 9, 4, 1, 6, '120.00'),
(31, 10, 2, 1, 3, '183.75'),
(32, 10, 4, 1, 10, '200.00'),
(33, 11, 2, 42, 5, '306.25'),
(34, 11, 1, 42, 4, '128.40'),
(35, 11, 3, 42, 2, '113.20'),
(36, 12, 3, 42, 6, '339.60'),
(37, 12, 4, 42, 7, '140.00'),
(38, 13, 3, 42, 2, '113.20'),
(39, 14, 3, 42, 3, '169.80'),
(40, 14, 5, 42, 4, '4000.00'),
(41, 14, 4, 42, 2, '40.00'),
(42, 15, 6, 42, 4, '20002.00'),
(43, 15, 3, 42, 6, '339.60'),
(44, 15, 2, 42, 2, '122.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nf`
--

CREATE TABLE `nf` (
  `nf` int(11) NOT NULL,
  `dateNF` date DEFAULT NULL,
  `valueTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nf`
--

INSERT INTO `nf` (`nf`, `dateNF`, `valueTotal`) VALUES
(1, '2020-09-24', '991.35'),
(2, '2020-09-24', '301.75'),
(3, '2020-09-24', '558.40'),
(4, '2020-09-24', '427.50'),
(5, '2020-09-24', '276.60'),
(6, '2020-09-24', '894.55'),
(7, '2020-09-24', '755.00'),
(8, '2020-09-24', '298.20'),
(9, '2020-09-24', '600.70'),
(10, '2020-09-24', '383.75'),
(11, '2020-09-25', '547.85'),
(12, '2020-09-25', '479.60'),
(13, '2020-09-25', '113.20'),
(14, '2020-10-01', '4209.80'),
(15, '2020-10-02', '20464.10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `idProduct` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`idProduct`, `name`, `price`) VALUES
(1, 'Camisa De Loli', '32.10'),
(2, 'Mouse De Otaku', '61.25'),
(3, 'Caneca do naruto', '56.60'),
(4, 'Capa De Celular Do One Piece', '20.00'),
(5, 'Celular', '1000.00'),
(6, 'PC GAMER', '5000.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `passwordUser` varchar(32) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passwordUser`, `date_inscription`) VALUES
(1, 'teste', 'teste@email.com', '202cb962ac59075b964b07152d234b70', '2020-09-11 12:32:27'),
(41, 'teste2', 'teste2@email.com', '202cb962ac59075b964b07152d234b70', '2020-09-24 00:15:41'),
(42, 'Felipe', 'felipe@email.com', '202cb962ac59075b964b07152d234b70', '2020-09-25 10:49:48');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itemsnf`
--
ALTER TABLE `itemsnf`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nf`
--
ALTER TABLE `nf`
  ADD PRIMARY KEY (`nf`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itemsnf`
--
ALTER TABLE `itemsnf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `nf`
--
ALTER TABLE `nf`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
