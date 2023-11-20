-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2023 às 15:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aloja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `editasite`
--

CREATE TABLE `editasite` (
  `id` int(255) NOT NULL,
  `NomeSite` varchar(255) NOT NULL,
  `Logo1` varchar(255) NOT NULL,
  `Logo2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `editasite`
--

INSERT INTO `editasite` (`id`, `NomeSite`, `Logo1`, `Logo2`) VALUES
(1, 'Código 01 Eletrônicos ', 'logo.png', 'logo2.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrição` varchar(255) NOT NULL,
  `valor` int(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descrição`, `valor`, `imagem`) VALUES
(1, 'Xiaomi redmi 12c 128gb 4gb', 'Tela: IPS LCD de 6,71 polegadas\r\nResolução da tela: HD+ (1650 x 720)\r\nCâmera principal: 50 MP\r\nCâmera frontal: 5 MP\r\nSistema operacional: Android 12 com MIUI 13\r\nArmazenamento : 128Gb\r\nMemória Ram : 4gb', 1149, '../../assets/imagens/1.png'),
(3, 'Positivo Twist 4 64Gb 1Gb', 'Dimensões: 150.5 x 72.4 x 9.9 mm. Peso: 165g. Chipset: Unisoc SC9863A. Memória RAM: 1GB. Memória Máxima: 64GB. Expansão via Cartão SD: MicroSDXC atè 256 GB. Tela: 5.5 polegadas. Resolução: 720 x 1440 pixel.', 599, '../../assets/imagens/2.png'),
(8, 'Moto g9 play (Semi novo)', '', 599, '../../assets/imagens654d1166aaeb6.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `useradmin`
--

INSERT INTO `useradmin` (`id`, `email`, `senha`, `nome`) VALUES
(1, 'adm@adm.com', '1234', 'Adm');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `produtosCarrinho` int(255) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `produtosCarrinho`, `nivel`) VALUES
(1, 'test@test.com', '1234', 'teste', 0, 1),
(3, 'andy@n.com', '1234', '1234', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `editasite`
--
ALTER TABLE `editasite`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `editasite`
--
ALTER TABLE `editasite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
