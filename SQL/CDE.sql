-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Dez-2021 às 23:53
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `CDE`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `IdProduto` int(11) NOT NULL,
  `user` int(3) NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8 NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `valor` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`IdProduto`, `user`, `descricao`, `quantidade`, `cadastro`, `valor`) VALUES
(1, 6, 'Tênis Mizuno', 5, '2021-12-06 20:56:46', '234.00'),
(4, 4, 'Teclado', 25, '2021-12-06 21:02:00', '120.00'),
(9, 8, 'luz', 5, '2021-12-06 21:26:57', '9.99'),
(10, 4, 'teste', 56, '2021-12-06 21:02:12', '10.30'),
(11, 3, 'teste', 56, '2021-12-06 18:53:05', '35.00'),
(12, 5, 'teste', 56, '2021-12-06 21:25:17', '2.54'),
(13, 5, 'teste', 56, '2021-12-06 21:25:32', '10.01'),
(14, 4, 'Mouse', 200, '2021-12-06 21:02:49', '57.87'),
(15, 3, 'Raquete de Tênis', 120, '2021-12-06 03:57:46', '234.00'),
(16, 6, 'Sapato', 5, '2021-12-06 19:46:04', '235.90');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Sobrenome` varchar(90) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(256) NOT NULL,
  `NivelUsuario` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nome`, `Sobrenome`, `Email`, `Senha`, `NivelUsuario`) VALUES
(6, 'JS', 'React', 'js@email.com', 'senha', 1),
(3, 'Dev', 'PHP', 'dev@email.com', 'senha', 1),
(5, 'MYSQL', 'DB', 'db@email.com', 'senha', 1),
(12, 'User', 'Java', 'java@email.com', 'senha', 2),
(8, 'sgt', 'Txai', 'sgt@email.com', 'senha', 2),
(10, 'User', 'SQL', 'user@email.com', 'senha', 1),
(13, 'User', 'Java', 'java@email.com', 'senha', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`IdProduto`),
  ADD KEY `user` (`user`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `IdProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
