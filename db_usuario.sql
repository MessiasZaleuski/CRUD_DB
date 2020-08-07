-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Ago-2020 às 16:24
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(12) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `ativo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `data_nascimento`, `cidade`, `uf`, `observacao`, `ativo`) VALUES
(1, 'Messias Zaleuski de Meira', 'messias.zaleuski@gmail.com', 123456, '1984-11-19', 'Curitiba', 'PR', 'A procura de estágio.', 'Sim'),
(2, 'Francielle Lourena', 'francielle@gmail.com', 456123, '2020-08-28', 'Bombinhas', 'SC', 'Financeira', 'Não');

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

