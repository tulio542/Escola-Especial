-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2020 às 22:46
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `email`, `senha`) VALUES
(1, 'tccsenailnt@gmail.com', '92f85eb0765c365a06e9183adba6f511');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_escola`
--

CREATE TABLE `endereco_escola` (
  `endereco_id` int(11) NOT NULL,
  `cep` int(11) DEFAULT NULL,
  `endereco` varchar(220) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(120) DEFAULT NULL,
  `bairro` varchar(220) DEFAULT NULL,
  `cidade` varchar(220) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco_escola`
--

INSERT INTO `endereco_escola` (`endereco_id`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `created`, `modified`) VALUES
(1, 13458035, 'Rua Álvares Maciel', '74', NULL, 'Parque Olaria', 'Santa Bárbara D\'Oeste', 'SP', '2020-07-05 17:46:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `escola_id` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `acessibilidade` varchar(45) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`escola_id`, `endereco_id`, `nome`, `email`, `senha`, `telefone`, `acessibilidade`, `data_cadastro`) VALUES
(1, 1, 'Emilio', 'Senai@teste', '202cb962ac59075b964b07152d234b70', '199', 'Intelectual', '2020-07-05 17:46:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portador`
--

CREATE TABLE `portador` (
  `portador_id` int(11) NOT NULL,
  `nomedef` varchar(30) NOT NULL,
  `data_nasc` varchar(12) NOT NULL,
  `genero` varchar(12) NOT NULL,
  `deficiencia` varchar(30) NOT NULL,
  `data_cadastrado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portador`
--

INSERT INTO `portador` (`portador_id`, `nomedef`, `data_nasc`, `genero`, `deficiencia`, `data_cadastrado`) VALUES
(1, 'tulio', '111', 'Masculino', 'Motora', '2020-07-05 17:48:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `id` int(11) NOT NULL,
  `nome_prof` varchar(30) NOT NULL,
  `email_prof` varchar(30) NOT NULL,
  `cpf_prof` varchar(11) NOT NULL,
  `telefone_prof` varchar(11) NOT NULL,
  `senha_prof` varchar(32) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`id`, `nome_prof`, `email_prof`, `cpf_prof`, `telefone_prof`, `senha_prof`, `data_cadastro`) VALUES
(1, 'Testarrr', 'testeprofissional.com', '1111111', '11111', 'd41d8cd98f00b204e9800998ecf8427e', '2020-07-05 17:47:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `responsavel_id` int(11) NOT NULL,
  `portador_id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`responsavel_id`, `portador_id`, `nome`, `email`, `cpf`, `telefone`, `senha`, `data_cadastro`) VALUES
(1, 1, 'Tulio', 'tulio.prati@gmail.com', '424.198.548', '19997540913', '202cb962ac59075b964b07152d234b70', '2020-07-05 17:48:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(200) NOT NULL,
  `mail_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(60) NOT NULL,
  `nivel_usuario` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `tipo_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES
(1, 'Escola', 'Senai@teste', '202cb962ac59075b964b07152d234b70', 1, 'Ativo'),
(2, 'Profissional', 'testeprofissional.com', 'd41d8cd98f00b204e9800998ecf8427e', 3, 'Ativo'),
(3, 'Responsavel', 'tulio.prati@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `endereco_escola`
--
ALTER TABLE `endereco_escola`
  ADD PRIMARY KEY (`endereco_id`);

--
-- Índices para tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`escola_id`),
  ADD KEY `endereco_id` (`endereco_id`);

--
-- Índices para tabela `portador`
--
ALTER TABLE `portador`
  ADD PRIMARY KEY (`portador_id`);

--
-- Índices para tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`responsavel_id`),
  ADD KEY `portador_id_fk` (`portador_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco_escola`
--
ALTER TABLE `endereco_escola`
  MODIFY `endereco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `escola`
--
ALTER TABLE `escola`
  MODIFY `escola_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `portador`
--
ALTER TABLE `portador`
  MODIFY `portador_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `profissional`
--
ALTER TABLE `profissional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `responsavel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `escola`
--
ALTER TABLE `escola`
  ADD CONSTRAINT `endereco_id_fk` FOREIGN KEY (`endereco_id`) REFERENCES `endereco_escola` (`endereco_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `portador_id_fk` FOREIGN KEY (`portador_id`) REFERENCES `portador` (`portador_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
