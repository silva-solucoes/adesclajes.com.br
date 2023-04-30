-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2023 às 18:41
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adesc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bl_detalheresponsavel`
--

CREATE TABLE `bl_detalheresponsavel` (
  `id_responsavel` int(11) NOT NULL,
  `nomeResponsavel` varchar(255) DEFAULT NULL,
  `rgResponsavel` int(16) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` int(16) DEFAULT NULL,
  `nLougradoura` varchar(10) DEFAULT NULL,
  `logradouraResponsavel` varchar(200) DEFAULT NULL,
  `celularResponsavel` int(16) DEFAULT NULL,
  `grauParentesco` varchar(30) DEFAULT NULL,
  `cpfResponsavel` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorianoticia`
--

CREATE TABLE `categorianoticia` (
  `id_categoria` int(11) NOT NULL,
  `nome` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_atleta`
--

CREATE TABLE `tbl_atleta` (
  `nome_atleta` varchar(255) DEFAULT NULL,
  `nRG_atleta` int(11) DEFAULT NULL,
  `nCPF_atleta` int(11) DEFAULT NULL,
  `dtNascimento_atleta` datetime DEFAULT NULL,
  `sexo_atleta` varchar(2) DEFAULT NULL,
  `estadoCivil_atleta` varchar(35) DEFAULT NULL,
  `nNIS_atleta` int(11) DEFAULT NULL,
  `anexoResgistro_atleta` text DEFAULT NULL,
  `dtCadastro_atleta` datetime DEFAULT NULL,
  `dtAtualizacao_atleta` datetime DEFAULT NULL,
  `id_atleta` int(11) NOT NULL,
  `id_saude` int(11) DEFAULT NULL,
  `id_escolar` int(11) DEFAULT NULL,
  `id_filiacao` int(11) DEFAULT NULL,
  `id_responsavel` int(11) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `id_pagAtleta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_comentario`
--

CREATE TABLE `tbl_comentario` (
  `id_comentario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `dtCadastro` datetime DEFAULT NULL,
  `comentario` text DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `id_notícia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_coment_tecnico`
--

CREATE TABLE `tbl_coment_tecnico` (
  `id_coment_tec` int(11) NOT NULL,
  `comentario` text DEFAULT NULL,
  `id_membro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_config`
--

CREATE TABLE `tbl_config` (
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` int(20) DEFAULT NULL,
  `telefone` int(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `logoSite` text DEFAULT NULL,
  `localizaçãoIFRAM` text DEFAULT NULL,
  `id_config` int(11) NOT NULL,
  `id_infoHeader` int(11) DEFAULT NULL,
  `id_secaoDestaque` int(11) DEFAULT NULL,
  `id_secaoPatrocinio` int(11) DEFAULT NULL,
  `id_escolher` int(11) DEFAULT NULL,
  `id_contato` int(11) DEFAULT NULL,
  `id_infoFooter` int(11) DEFAULT NULL,
  `id_perguntas` int(11) DEFAULT NULL,
  `id_equipe` int(11) DEFAULT NULL,
  `id_sobre` int(11) DEFAULT NULL,
  `id_ultimas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos`
--

CREATE TABLE `tbl_contatos` (
  `id_contato` int(11) NOT NULL,
  `emailContato` varchar(150) DEFAULT NULL,
  `nomeContato` varchar(255) DEFAULT NULL,
  `assuntoContato` varchar(100) DEFAULT NULL,
  `msgContato` text DEFAULT NULL,
  `tl_contato` varchar(150) DEFAULT NULL,
  `sub_tlContato` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_detalheescolar`
--

CREATE TABLE `tbl_detalheescolar` (
  `turma` varchar(50) DEFAULT NULL,
  `horarioSaida` datetime DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `nLogradouro` varchar(10) DEFAULT NULL,
  `gostaEstudar_atleta` int(11) DEFAULT NULL,
  `estudaCasa` int(11) DEFAULT NULL,
  `horarioEntrada` datetime DEFAULT NULL,
  `turno` varchar(50) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `id_escolar` int(11) NOT NULL,
  `nomeEscolar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_detalhefiliacao`
--

CREATE TABLE `tbl_detalhefiliacao` (
  `id_filiacao` int(11) NOT NULL,
  `nomePai_atleta` varchar(255) DEFAULT NULL,
  `nomeMae_atleta` varchar(255) DEFAULT NULL,
  `celularMae_atleta` bigint(20) DEFAULT NULL,
  `celularPai_atleta` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_detalhesaude`
--

CREATE TABLE `tbl_detalhesaude` (
  `id_saude` int(11) NOT NULL,
  `tipoSanguineo` varchar(3) DEFAULT NULL,
  `temAlergia` int(11) DEFAULT NULL,
  `detalheAlergia` text DEFAULT NULL,
  `medicamentoControlado` int(11) DEFAULT NULL,
  `detalheMedicamento` text DEFAULT NULL,
  `usoDrogas` int(11) DEFAULT NULL,
  `possuiDoenca` int(11) DEFAULT NULL,
  `detalheDroga` text DEFAULT NULL,
  `legumeVerdura_atleta` int(11) DEFAULT NULL,
  `altura_atleta` decimal(10,0) DEFAULT NULL,
  `dormeCedo_atleta` int(11) DEFAULT NULL,
  `detalheDoenca` text DEFAULT NULL,
  `peso_atleta` decimal(10,0) DEFAULT NULL,
  `alimentaBem_atleta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_detalhetecnicos`
--

CREATE TABLE `tbl_detalhetecnicos` (
  `id_tecnico` int(11) NOT NULL,
  `nPe_atleta` int(11) DEFAULT NULL,
  `nUniforme_atleta` varchar(5) DEFAULT NULL,
  `categoriaEsportiva` int(11) DEFAULT NULL,
  `nivelEsportivo` int(11) DEFAULT NULL,
  `posicaoSecundaria` varchar(50) DEFAULT NULL,
  `posicaoPrincipal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_equipe`
--

CREATE TABLE `tbl_equipe` (
  `id_equipe` int(11) NOT NULL,
  `tl_pgEquipe` varchar(150) DEFAULT NULL,
  `sub_tlEquipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_esportes`
--

CREATE TABLE `tbl_esportes` (
  `id_esporte` int(11) NOT NULL,
  `categoria` varchar(40) DEFAULT NULL,
  `nome_esporte` varchar(30) DEFAULT NULL,
  `id_infoHeader` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_fotos`
--

CREATE TABLE `tbl_fotos` (
  `id_fotos` int(11) NOT NULL,
  `nome_foto` text DEFAULT NULL,
  `legenda_foto` varchar(150) DEFAULT NULL,
  `id_pagFotos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_infofooter`
--

CREATE TABLE `tbl_infofooter` (
  `id_infoFooter` int(11) NOT NULL,
  `tl_link1` text DEFAULT NULL,
  `tl_link2` text DEFAULT NULL,
  `tl_link3` text DEFAULT NULL,
  `tl_link4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_infoheader`
--

CREATE TABLE `tbl_infoheader` (
  `id_infoHeader` int(11) NOT NULL,
  `tl_link2` text DEFAULT NULL,
  `tl_link3` text DEFAULT NULL,
  `tl_link1` text DEFAULT NULL,
  `tl_link4` text DEFAULT NULL,
  `tl_link5` text DEFAULT NULL,
  `tl_link7` text DEFAULT NULL,
  `tl_link8` text DEFAULT NULL,
  `tl_link6` text DEFAULT NULL,
  `metaKeyword` text DEFAULT NULL,
  `metaDescricao` text DEFAULT NULL,
  `metaTitulo` varchar(255) DEFAULT NULL,
  `favicon` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_listaperguntas`
--

CREATE TABLE `tbl_listaperguntas` (
  `id_listaPergunta` int(11) NOT NULL,
  `tl_pergunta` text DEFAULT NULL,
  `resposta` text DEFAULT NULL,
  `id_perguntas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_membro`
--

CREATE TABLE `tbl_membro` (
  `id_membro` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `funcao` varchar(100) DEFAULT NULL,
  `detalhe` varchar(100) DEFAULT NULL,
  `id_equipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_noticias`
--

CREATE TABLE `tbl_noticias` (
  `id_notícia` int(11) NOT NULL,
  `tl_noticia` varchar(150) DEFAULT NULL,
  `img_destaque` text DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  `dtCadastro` datetime DEFAULT NULL,
  `id_ultimas` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_coment_tec` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_opcaoescolha`
--

CREATE TABLE `tbl_opcaoescolha` (
  `id_opcao` int(11) NOT NULL,
  `tituloOpcao` varchar(200) DEFAULT NULL,
  `descricaoOpcao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_pagatletas`
--

CREATE TABLE `tbl_pagatletas` (
  `id_pagAtleta` int(11) NOT NULL,
  `tl_pagAtleta` varchar(100) DEFAULT NULL,
  `sub_tl_pagAtleta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_pagfotos`
--

CREATE TABLE `tbl_pagfotos` (
  `id_pagFotos` int(11) NOT NULL,
  `tl_pagFotos` varchar(100) DEFAULT NULL,
  `descricao_pagFotos` varchar(250) DEFAULT NULL,
  `dtAtualizacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_perguntas`
--

CREATE TABLE `tbl_perguntas` (
  `id_perguntas` int(11) NOT NULL,
  `tl_pagPerguntas` varchar(150) DEFAULT NULL,
  `sub_tlPerguntas` varchar(255) DEFAULT NULL,
  `dtCadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_redesocialmembro`
--

CREATE TABLE `tbl_redesocialmembro` (
  `id_rede` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `link_acesso` text DEFAULT NULL,
  `icone` varchar(255) DEFAULT NULL,
  `id_membro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_redessociais`
--

CREATE TABLE `tbl_redessociais` (
  `id_rede` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `link_acesso` text DEFAULT NULL,
  `icone` varchar(200) DEFAULT NULL,
  `id_config` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_secaodestaque`
--

CREATE TABLE `tbl_secaodestaque` (
  `titulo` varchar(150) DEFAULT NULL,
  `sub_titulo` varchar(200) DEFAULT NULL,
  `incorporarVideo` text DEFAULT NULL,
  `img_destaque` text DEFAULT NULL,
  `id_secaoDestaque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_secaoescolher`
--

CREATE TABLE `tbl_secaoescolher` (
  `tituloEscolha` varchar(150) DEFAULT NULL,
  `subTituloEscolha` varchar(150) DEFAULT NULL,
  `descricaoEscolha` text DEFAULT NULL,
  `id_escolher` int(11) NOT NULL,
  `img_destaque` text DEFAULT NULL,
  `id_opcao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_secaopatrocinadores`
--

CREATE TABLE `tbl_secaopatrocinadores` (
  `id_secaoPatrocinio` int(11) NOT NULL,
  `img_patrocinio` text DEFAULT NULL,
  `link_acesso` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_sobre`
--

CREATE TABLE `tbl_sobre` (
  `id_sobre` int(11) NOT NULL,
  `tl_pgSobre` varchar(150) DEFAULT NULL,
  `sub_tlSobre` varchar(255) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `historia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_status`
--

CREATE TABLE `tbl_status` (
  `nome_status` varchar(80) DEFAULT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ultimasnoticias`
--

CREATE TABLE `tbl_ultimasnoticias` (
  `id_ultimas` int(11) NOT NULL,
  `tl_pgUltimas` varchar(150) DEFAULT NULL,
  `sub_tlPgUltimas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `email_usuario` varchar(150) NOT NULL,
  `telefone_usuario` int(11) NOT NULL,
  `foto_user` varchar(255) DEFAULT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `chave_ativae` varchar(255) NOT NULL,
  `dtexpiracao` datetime NOT NULL,
  `dt_edicao` datetime NOT NULL,
  `dt_criacao` datetime NOT NULL,
  `cpf_cnpj` bigint(20) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bl_detalheresponsavel`
--
ALTER TABLE `bl_detalheresponsavel`
  ADD PRIMARY KEY (`id_responsavel`);

--
-- Índices para tabela `categorianoticia`
--
ALTER TABLE `categorianoticia`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `tbl_atleta`
--
ALTER TABLE `tbl_atleta`
  ADD PRIMARY KEY (`id_atleta`),
  ADD KEY `id_saude` (`id_saude`),
  ADD KEY `id_escolar` (`id_escolar`),
  ADD KEY `id_filiacao` (`id_filiacao`),
  ADD KEY `id_responsavel` (`id_responsavel`),
  ADD KEY `id_tecnico` (`id_tecnico`),
  ADD KEY `id_pagAtleta` (`id_pagAtleta`);

--
-- Índices para tabela `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_notícia` (`id_notícia`);

--
-- Índices para tabela `tbl_coment_tecnico`
--
ALTER TABLE `tbl_coment_tecnico`
  ADD PRIMARY KEY (`id_coment_tec`),
  ADD KEY `id_membro` (`id_membro`);

--
-- Índices para tabela `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id_config`),
  ADD KEY `id_infoHeader` (`id_infoHeader`),
  ADD KEY `id_secaoDestaque` (`id_secaoDestaque`),
  ADD KEY `id_secaoPatrocinio` (`id_secaoPatrocinio`),
  ADD KEY `id_escolher` (`id_escolher`),
  ADD KEY `id_contato` (`id_contato`),
  ADD KEY `id_infoFooter` (`id_infoFooter`),
  ADD KEY `id_perguntas` (`id_perguntas`),
  ADD KEY `id_equipe` (`id_equipe`),
  ADD KEY `id_sobre` (`id_sobre`),
  ADD KEY `id_ultimas` (`id_ultimas`);

--
-- Índices para tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  ADD PRIMARY KEY (`id_contato`);

--
-- Índices para tabela `tbl_detalheescolar`
--
ALTER TABLE `tbl_detalheescolar`
  ADD PRIMARY KEY (`id_escolar`);

--
-- Índices para tabela `tbl_detalhefiliacao`
--
ALTER TABLE `tbl_detalhefiliacao`
  ADD PRIMARY KEY (`id_filiacao`);

--
-- Índices para tabela `tbl_detalhesaude`
--
ALTER TABLE `tbl_detalhesaude`
  ADD PRIMARY KEY (`id_saude`);

--
-- Índices para tabela `tbl_detalhetecnicos`
--
ALTER TABLE `tbl_detalhetecnicos`
  ADD PRIMARY KEY (`id_tecnico`);

--
-- Índices para tabela `tbl_equipe`
--
ALTER TABLE `tbl_equipe`
  ADD PRIMARY KEY (`id_equipe`);

--
-- Índices para tabela `tbl_esportes`
--
ALTER TABLE `tbl_esportes`
  ADD PRIMARY KEY (`id_esporte`),
  ADD KEY `id_infoHeader` (`id_infoHeader`);

--
-- Índices para tabela `tbl_fotos`
--
ALTER TABLE `tbl_fotos`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `id_pagFotos` (`id_pagFotos`);

--
-- Índices para tabela `tbl_infofooter`
--
ALTER TABLE `tbl_infofooter`
  ADD PRIMARY KEY (`id_infoFooter`);

--
-- Índices para tabela `tbl_infoheader`
--
ALTER TABLE `tbl_infoheader`
  ADD PRIMARY KEY (`id_infoHeader`);

--
-- Índices para tabela `tbl_listaperguntas`
--
ALTER TABLE `tbl_listaperguntas`
  ADD PRIMARY KEY (`id_listaPergunta`),
  ADD KEY `id_perguntas` (`id_perguntas`);

--
-- Índices para tabela `tbl_membro`
--
ALTER TABLE `tbl_membro`
  ADD PRIMARY KEY (`id_membro`),
  ADD KEY `id_equipe` (`id_equipe`);

--
-- Índices para tabela `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD PRIMARY KEY (`id_notícia`),
  ADD KEY `id_ultimas` (`id_ultimas`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_coment_tec` (`id_coment_tec`);

--
-- Índices para tabela `tbl_opcaoescolha`
--
ALTER TABLE `tbl_opcaoescolha`
  ADD PRIMARY KEY (`id_opcao`);

--
-- Índices para tabela `tbl_pagatletas`
--
ALTER TABLE `tbl_pagatletas`
  ADD PRIMARY KEY (`id_pagAtleta`);

--
-- Índices para tabela `tbl_pagfotos`
--
ALTER TABLE `tbl_pagfotos`
  ADD PRIMARY KEY (`id_pagFotos`);

--
-- Índices para tabela `tbl_perguntas`
--
ALTER TABLE `tbl_perguntas`
  ADD PRIMARY KEY (`id_perguntas`);

--
-- Índices para tabela `tbl_redesocialmembro`
--
ALTER TABLE `tbl_redesocialmembro`
  ADD PRIMARY KEY (`id_rede`),
  ADD KEY `id_membro` (`id_membro`);

--
-- Índices para tabela `tbl_redessociais`
--
ALTER TABLE `tbl_redessociais`
  ADD PRIMARY KEY (`id_rede`),
  ADD KEY `id_config` (`id_config`);

--
-- Índices para tabela `tbl_secaodestaque`
--
ALTER TABLE `tbl_secaodestaque`
  ADD PRIMARY KEY (`id_secaoDestaque`);

--
-- Índices para tabela `tbl_secaoescolher`
--
ALTER TABLE `tbl_secaoescolher`
  ADD PRIMARY KEY (`id_escolher`),
  ADD KEY `id_opcao` (`id_opcao`);

--
-- Índices para tabela `tbl_secaopatrocinadores`
--
ALTER TABLE `tbl_secaopatrocinadores`
  ADD PRIMARY KEY (`id_secaoPatrocinio`);

--
-- Índices para tabela `tbl_sobre`
--
ALTER TABLE `tbl_sobre`
  ADD PRIMARY KEY (`id_sobre`);

--
-- Índices para tabela `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices para tabela `tbl_ultimasnoticias`
--
ALTER TABLE `tbl_ultimasnoticias`
  ADD PRIMARY KEY (`id_ultimas`);

--
-- Índices para tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tbl_usuario_tbl_status` (`id_status`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bl_detalheresponsavel`
--
ALTER TABLE `bl_detalheresponsavel`
  MODIFY `id_responsavel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorianoticia`
--
ALTER TABLE `categorianoticia`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_atleta`
--
ALTER TABLE `tbl_atleta`
  MODIFY `id_atleta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_coment_tecnico`
--
ALTER TABLE `tbl_coment_tecnico`
  MODIFY `id_coment_tec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_detalheescolar`
--
ALTER TABLE `tbl_detalheescolar`
  MODIFY `id_escolar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_detalhefiliacao`
--
ALTER TABLE `tbl_detalhefiliacao`
  MODIFY `id_filiacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_detalhesaude`
--
ALTER TABLE `tbl_detalhesaude`
  MODIFY `id_saude` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_detalhetecnicos`
--
ALTER TABLE `tbl_detalhetecnicos`
  MODIFY `id_tecnico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_equipe`
--
ALTER TABLE `tbl_equipe`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_esportes`
--
ALTER TABLE `tbl_esportes`
  MODIFY `id_esporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_fotos`
--
ALTER TABLE `tbl_fotos`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_infofooter`
--
ALTER TABLE `tbl_infofooter`
  MODIFY `id_infoFooter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_infoheader`
--
ALTER TABLE `tbl_infoheader`
  MODIFY `id_infoHeader` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_listaperguntas`
--
ALTER TABLE `tbl_listaperguntas`
  MODIFY `id_listaPergunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_membro`
--
ALTER TABLE `tbl_membro`
  MODIFY `id_membro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  MODIFY `id_notícia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_opcaoescolha`
--
ALTER TABLE `tbl_opcaoescolha`
  MODIFY `id_opcao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_pagatletas`
--
ALTER TABLE `tbl_pagatletas`
  MODIFY `id_pagAtleta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_pagfotos`
--
ALTER TABLE `tbl_pagfotos`
  MODIFY `id_pagFotos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_perguntas`
--
ALTER TABLE `tbl_perguntas`
  MODIFY `id_perguntas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_redesocialmembro`
--
ALTER TABLE `tbl_redesocialmembro`
  MODIFY `id_rede` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_redessociais`
--
ALTER TABLE `tbl_redessociais`
  MODIFY `id_rede` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_secaodestaque`
--
ALTER TABLE `tbl_secaodestaque`
  MODIFY `id_secaoDestaque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_secaoescolher`
--
ALTER TABLE `tbl_secaoescolher`
  MODIFY `id_escolher` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_secaopatrocinadores`
--
ALTER TABLE `tbl_secaopatrocinadores`
  MODIFY `id_secaoPatrocinio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_sobre`
--
ALTER TABLE `tbl_sobre`
  MODIFY `id_sobre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_ultimasnoticias`
--
ALTER TABLE `tbl_ultimasnoticias`
  MODIFY `id_ultimas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_atleta`
--
ALTER TABLE `tbl_atleta`
  ADD CONSTRAINT `tbl_atleta_ibfk_1` FOREIGN KEY (`id_saude`) REFERENCES `tbl_detalhesaude` (`id_saude`),
  ADD CONSTRAINT `tbl_atleta_ibfk_2` FOREIGN KEY (`id_escolar`) REFERENCES `tbl_detalheescolar` (`id_escolar`),
  ADD CONSTRAINT `tbl_atleta_ibfk_3` FOREIGN KEY (`id_filiacao`) REFERENCES `tbl_detalhefiliacao` (`id_filiacao`),
  ADD CONSTRAINT `tbl_atleta_ibfk_4` FOREIGN KEY (`id_responsavel`) REFERENCES `bl_detalheresponsavel` (`id_responsavel`),
  ADD CONSTRAINT `tbl_atleta_ibfk_5` FOREIGN KEY (`id_tecnico`) REFERENCES `tbl_detalhetecnicos` (`id_tecnico`),
  ADD CONSTRAINT `tbl_atleta_ibfk_6` FOREIGN KEY (`id_pagAtleta`) REFERENCES `tbl_pagatletas` (`id_pagAtleta`);

--
-- Limitadores para a tabela `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  ADD CONSTRAINT `tbl_comentario_ibfk_1` FOREIGN KEY (`id_notícia`) REFERENCES `tbl_noticias` (`id_notícia`);

--
-- Limitadores para a tabela `tbl_coment_tecnico`
--
ALTER TABLE `tbl_coment_tecnico`
  ADD CONSTRAINT `tbl_coment_tecnico_ibfk_1` FOREIGN KEY (`id_membro`) REFERENCES `tbl_membro` (`id_membro`);

--
-- Limitadores para a tabela `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD CONSTRAINT `tbl_config_ibfk_1` FOREIGN KEY (`id_infoHeader`) REFERENCES `tbl_infoheader` (`id_infoHeader`),
  ADD CONSTRAINT `tbl_config_ibfk_10` FOREIGN KEY (`id_ultimas`) REFERENCES `tbl_ultimasnoticias` (`id_ultimas`),
  ADD CONSTRAINT `tbl_config_ibfk_11` FOREIGN KEY (`id_ultimas`) REFERENCES `tbl_ultimasnoticias` (`id_ultimas`),
  ADD CONSTRAINT `tbl_config_ibfk_12` FOREIGN KEY (`id_ultimas`) REFERENCES `tbl_ultimasnoticias` (`id_ultimas`),
  ADD CONSTRAINT `tbl_config_ibfk_2` FOREIGN KEY (`id_secaoDestaque`) REFERENCES `tbl_secaodestaque` (`id_secaoDestaque`),
  ADD CONSTRAINT `tbl_config_ibfk_3` FOREIGN KEY (`id_secaoPatrocinio`) REFERENCES `tbl_secaopatrocinadores` (`id_secaoPatrocinio`),
  ADD CONSTRAINT `tbl_config_ibfk_4` FOREIGN KEY (`id_escolher`) REFERENCES `tbl_secaoescolher` (`id_escolher`),
  ADD CONSTRAINT `tbl_config_ibfk_5` FOREIGN KEY (`id_contato`) REFERENCES `tbl_contatos` (`id_contato`),
  ADD CONSTRAINT `tbl_config_ibfk_6` FOREIGN KEY (`id_infoFooter`) REFERENCES `tbl_infofooter` (`id_infoFooter`),
  ADD CONSTRAINT `tbl_config_ibfk_7` FOREIGN KEY (`id_perguntas`) REFERENCES `tbl_perguntas` (`id_perguntas`),
  ADD CONSTRAINT `tbl_config_ibfk_8` FOREIGN KEY (`id_equipe`) REFERENCES `tbl_equipe` (`id_equipe`),
  ADD CONSTRAINT `tbl_config_ibfk_9` FOREIGN KEY (`id_sobre`) REFERENCES `tbl_sobre` (`id_sobre`);

--
-- Limitadores para a tabela `tbl_esportes`
--
ALTER TABLE `tbl_esportes`
  ADD CONSTRAINT `tbl_esportes_ibfk_1` FOREIGN KEY (`id_infoHeader`) REFERENCES `tbl_infoheader` (`id_infoHeader`),
  ADD CONSTRAINT `tbl_esportes_ibfk_2` FOREIGN KEY (`id_infoHeader`) REFERENCES `tbl_infoheader` (`id_infoHeader`),
  ADD CONSTRAINT `tbl_esportes_ibfk_3` FOREIGN KEY (`id_infoHeader`) REFERENCES `tbl_infoheader` (`id_infoHeader`),
  ADD CONSTRAINT `tbl_esportes_ibfk_4` FOREIGN KEY (`id_infoHeader`) REFERENCES `tbl_infoheader` (`id_infoHeader`);

--
-- Limitadores para a tabela `tbl_fotos`
--
ALTER TABLE `tbl_fotos`
  ADD CONSTRAINT `tbl_fotos_ibfk_1` FOREIGN KEY (`id_pagFotos`) REFERENCES `tbl_pagfotos` (`id_pagFotos`),
  ADD CONSTRAINT `tbl_fotos_ibfk_2` FOREIGN KEY (`id_pagFotos`) REFERENCES `tbl_pagfotos` (`id_pagFotos`),
  ADD CONSTRAINT `tbl_fotos_ibfk_3` FOREIGN KEY (`id_pagFotos`) REFERENCES `tbl_pagfotos` (`id_pagFotos`),
  ADD CONSTRAINT `tbl_fotos_ibfk_4` FOREIGN KEY (`id_pagFotos`) REFERENCES `tbl_pagfotos` (`id_pagFotos`);

--
-- Limitadores para a tabela `tbl_listaperguntas`
--
ALTER TABLE `tbl_listaperguntas`
  ADD CONSTRAINT `tbl_listaperguntas_ibfk_1` FOREIGN KEY (`id_perguntas`) REFERENCES `tbl_perguntas` (`id_perguntas`),
  ADD CONSTRAINT `tbl_listaperguntas_ibfk_2` FOREIGN KEY (`id_perguntas`) REFERENCES `tbl_perguntas` (`id_perguntas`),
  ADD CONSTRAINT `tbl_listaperguntas_ibfk_3` FOREIGN KEY (`id_perguntas`) REFERENCES `tbl_perguntas` (`id_perguntas`),
  ADD CONSTRAINT `tbl_listaperguntas_ibfk_4` FOREIGN KEY (`id_perguntas`) REFERENCES `tbl_perguntas` (`id_perguntas`);

--
-- Limitadores para a tabela `tbl_membro`
--
ALTER TABLE `tbl_membro`
  ADD CONSTRAINT `tbl_membro_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `tbl_equipe` (`id_equipe`),
  ADD CONSTRAINT `tbl_membro_ibfk_2` FOREIGN KEY (`id_equipe`) REFERENCES `tbl_equipe` (`id_equipe`),
  ADD CONSTRAINT `tbl_membro_ibfk_3` FOREIGN KEY (`id_equipe`) REFERENCES `tbl_equipe` (`id_equipe`),
  ADD CONSTRAINT `tbl_membro_ibfk_4` FOREIGN KEY (`id_equipe`) REFERENCES `tbl_equipe` (`id_equipe`);

--
-- Limitadores para a tabela `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD CONSTRAINT `tbl_noticias_ibfk_1` FOREIGN KEY (`id_ultimas`) REFERENCES `tbl_ultimasnoticias` (`id_ultimas`),
  ADD CONSTRAINT `tbl_noticias_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorianoticia` (`id_categoria`),
  ADD CONSTRAINT `tbl_noticias_ibfk_3` FOREIGN KEY (`id_coment_tec`) REFERENCES `tbl_coment_tecnico` (`id_coment_tec`),
  ADD CONSTRAINT `tbl_noticias_ibfk_4` FOREIGN KEY (`id_coment_tec`) REFERENCES `tbl_coment_tecnico` (`id_coment_tec`);

--
-- Limitadores para a tabela `tbl_redesocialmembro`
--
ALTER TABLE `tbl_redesocialmembro`
  ADD CONSTRAINT `tbl_redesocialmembro_ibfk_1` FOREIGN KEY (`id_membro`) REFERENCES `tbl_membro` (`id_membro`);

--
-- Limitadores para a tabela `tbl_redessociais`
--
ALTER TABLE `tbl_redessociais`
  ADD CONSTRAINT `tbl_redessociais_ibfk_1` FOREIGN KEY (`id_config`) REFERENCES `tbl_config` (`id_config`),
  ADD CONSTRAINT `tbl_redessociais_ibfk_2` FOREIGN KEY (`id_config`) REFERENCES `tbl_config` (`id_config`),
  ADD CONSTRAINT `tbl_redessociais_ibfk_3` FOREIGN KEY (`id_config`) REFERENCES `tbl_config` (`id_config`),
  ADD CONSTRAINT `tbl_redessociais_ibfk_4` FOREIGN KEY (`id_config`) REFERENCES `tbl_config` (`id_config`);

--
-- Limitadores para a tabela `tbl_secaoescolher`
--
ALTER TABLE `tbl_secaoescolher`
  ADD CONSTRAINT `tbl_secaoescolher_ibfk_1` FOREIGN KEY (`id_opcao`) REFERENCES `tbl_opcaoescolha` (`id_opcao`);

--
-- Limitadores para a tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `fk_tbl_usuario_tbl_status` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
