-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2018 às 01:43
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inteco2018`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `fone` varchar(25) DEFAULT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `endereco_rua` varchar(100) DEFAULT NULL,
  `endereco_bairro` varchar(50) DEFAULT NULL,
  `endereco_cep` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL COMMENT 'brasão',
  `site` varchar(100) DEFAULT NULL,
  `site_portal` varchar(100) DEFAULT NULL,
  `site_einf` varchar(100) DEFAULT NULL,
  `lic` varchar(100) DEFAULT NULL,
  `tipo` int(11) NOT NULL COMMENT '0 - Camara // 1 - Prefeitura // 2 - Instituto // 3 - Autarquia',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `fone`, `cpf_cnpj`, `endereco_rua`, `endereco_bairro`, `endereco_cep`, `email`, `imagem`, `site`, `site_portal`, `site_einf`, `lic`, `tipo`) VALUES
(356, 'Câmara Municipal de Sidrolândia', '(67)3272-3421', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.sidrolandia.ms.gov.br', NULL, NULL, NULL, 0),
(357, 'Prefeitura Municipal de Jaraguari', '(67)3285-1359', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.jaraguari.ms.gov.br/', 'http://s2.asp.srv.br/etransparencia.pm.jaraguari.ms/servlet/portal', NULL, '357_Prefeitura_Municipal_de_Jaraguari.LIC', 1),
(362, 'Prefeitura Municipal de Alcinópolis', '(67)3260-1187', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.alcinopolis.ms.gov.br', 'http://s2.asp.srv.br/etransparencia.pm.alcinopolis.ms/servlet/portal', 'http://s4.asp.srv.br:8380/einformacoes.pm.alcinopolis.ms/servlet/einformacoes', '362_Prefeitura_Municipal_de_Alcinopolis.LIC', 1),
(367, 'Câmara Municipal de Alcinópolis', '(67)3260-1121', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.alcinopolis.ms.leg.br/', 'http://s2.asp.srv.br/etransparencia.cm.alcinopolis.ms/servlet/portal', NULL, '367_Camara_Municipal_de_Alcinopolis.LIC', 0),
(368, 'Prefeitura Municipal de Sonora - MS', '(67)3254-1127', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.sonora.ms.gov.br', 'http://s2.asp.srv.br/etransparencia.pm.sonora.ms/servlet/portal', 'http://s4.asp.srv.br:8380/einformacoes.pm.sonora.ms/servlet/einformacoes', '368_Prefeitura_Municipal_de_Sonora.LIC', 1),
(369, 'Câmara Municipal de Sonora - MS', '(67)3254-1173', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.camarasonora.ms.gov.br', 'http://s2.asp.srv.br/etransparencia.cm.sonora.ms/servlet/portal', NULL, '369_Camara_Municipal_de_Sonora.LIC', 0),
(373, 'Previdência Sonora - MS', '(67)3233-2244', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.funprev.ms.gov.br/', 'http://s2.asp.srv.br/etransparencia.funprev.sonora.ms/servlet/portal', 'http://s4.asp.srv.br:8380/einformacoes.funprev.sonora.ms/servlet/einformacoes', '373_Fundo_Mun_de_Previdencia_de_Sonora.LIC', 2),
(377, 'Prefeitura Municipal de Coxim', '(67)3291-1163', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.coxim.ms.gov.br', 'http://s2.asp.srv.br/etransparencia.pm.coxim.ms/servlet/portal', NULL, '377_Prefeitura_Municipal_de_Coxim.LIC', 1),
(378, 'Câmara Municipal de Coxim', '(67)3291-1539', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.camaracoxim.ms.gov.br/', 'http://s2.asp.srv.br/etransparencia.cm.coxim.ms/servlet/portal', 'http://s4.asp.srv.br:8380/einformacoes.cm.coxim.ms/servlet/einformacoes', '378_Camara_Municipal_de_Coxim.LIC', 0),
(387, 'INCAS - Coxim - MS', '(67)3291-2494', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.imcas.ms.gov.br/', 'http://s2.asp.srv.br/etransparencia.imcas.coxim.ms/servlet/portal', NULL, '387_IMCAS_de_Coxim.LIC', 2),
(453, 'IPMCS - Chapadãoo do Sul  Previdência', '(67)3562-3497', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.ipmcs.ms.gov.br/', NULL, NULL, NULL, 2),
(495, 'IMPC - Coxim - MS', '(67)3291-5229', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.impcoxim.com.br/', 'http://s2.asp.srv.br/etransparencia.impc.coxim.ms/servlet/portal', NULL, '495_Inst_Mun_dos_Serv_de_Coxim_IMPC.LIC', 2),
(498, 'Câmara Municipal de Jaraguari', '(67)3285-1263', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.camarajaraguari.ms.gov.br/', NULL, NULL, NULL, 0),
(524, 'Previdência Paranaíba - MS', '(67)3668-0374', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.previm.ms.gov.br/', 'http://s2.asp.srv.br/etransparencia.previm.paranaiba.ms/servlet/portal', NULL, '524_Instituto_Prev_Serv_Mun_de_Paranaiba.LIC', 2),
(1045, 'Prefeitura Municipal de Cassilândia - MS', '(67)3596-1301', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.cassilandia.ms.gov.br/', 'http://s2.asp.srv.br/etransparencia.pm.cassilandia.ms/servlet/portal', NULL, '1045_Prefeitura_Municipal_de_Cassilandia.LIC', 1),
(1382, 'Fundação Estatal de Saúde do Pantanal', '(67)3291-1250', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.hospitalregionalcoxim.com.br/', NULL, NULL, '1382_Fundacao_Estatal_de_Saude_do_Pantanal.LIC', 3),
(1696, 'Fundação Educacional e de Saúde de Sonora-FUNESS', '(67)3254-2606', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.funess.com.br/', NULL, NULL, '1696_Fundacao_Educacional_e_de_Saude_de_Sonora-FUNESS.LIC', 3),
(1700, 'Prefeitura Municipal de Paranaíba', '(67)3669-0000', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.paranaiba.ms.gov.br/', 'http://www.paranaiba.ms.gov.br/portal_transparencia/', NULL, '1700_Prefeitura_Municipal_de_Paranaiba.LIC', 1),
(1743, 'Serviço Autônomo de Água e Esgoto de Jaraguari', '(67)3285-1363', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', NULL, NULL, NULL, '1743_Servico_Autonomo_De_Agua_E_Esgoto_De_Jaraguari.LIC', 3),
(1779, 'Prefeitura Municipal de Guiratinga', '(66)3431-1441', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.guiratinga.mt.gov.br/', 'http://s2.asp.srv.br/etransparencia.pm.guiratinga.mt/servlet/portal', NULL, '1779_Municipio_de_Guiratinga.LIC', 1),
(1787, 'Prefeitura Municipal de Chapadão do Sul', '(67)3562-5680', NULL, NULL, NULL, NULL, NULL, 'noimage.jpg', 'http://www.chapadaodosul.ms.gov.br', 'http://s2.asp.srv.br/etransparencia.pm.chapadaodosul.ms/servlet/portal', 'http://s4.asp.srv.br:8380/einformacoes.pm.chapadaodosul.ms/servlet/einformacoes', '1787_Prefeitura_Municipal_de_Chapadao_do_Sul.LIC', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_sistema_senha`
--

CREATE TABLE IF NOT EXISTS `cliente_sistema_senha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_sistema` int(11) NOT NULL,
  `nome_sistema` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `final_acesso` date NOT NULL,
  `ultima_sinc` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1209 ;

--
-- Extraindo dados da tabela `cliente_sistema_senha`
--

INSERT INTO `cliente_sistema_senha` (`id`, `id_cliente`, `id_sistema`, `nome_sistema`, `senha`, `final_acesso`, `ultima_sinc`) VALUES
(1098, 1779, 11, 'Gestão Orçamentária e Contábil', ' HX9S5IW8L5H1DQ9SDT9\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1099, 1779, 17, 'Receitas Municipais', ' HX9S5IW8L5Q7JWFYJZF\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1100, 1779, 18, 'Recursos Humanos', ' HX9S5IW8L5HX9M5O9P5\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1101, 1779, 14, 'Gestão do Patrimônio', ' HYAT6JX9M6RBN0J2N3K\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1102, 1779, 22, 'Tramitação de Processos', ' HYAT6JX9M6P1DQ9SDTA\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1103, 1779, 7, 'Gestão da Frota', ' HYAT6JX9M6P9LYH0L1I\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1104, 1779, 3, 'Gestão de Materiais', ' HYAT6JX9M6QAMZI1M2J\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1105, 1779, 19, 'Gestão do Saneamento', ' HYAT6JX9M6LZBO7QBR8\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1106, 1779, 6, 'Compras e Licitações', ' HYAT6JX9M6P6IVEXIYF\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1107, 1779, 15, 'Automação de Ponto', ' HYAT6JX9M6J3FSBUFVC\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1108, 1779, 23, 'Prestação de Contas', ' HZBU7KYAN7K0CP8RCSA\r\n', '2018-11-07', '2018-10-09 07:48:53'),
(1109, 362, 11, 'Gestão Orçamentária e Contábil', ' I3GYBN1DQAM6IU9R5M7\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1110, 362, 17, 'Receitas Municipais', ' I3GYBN1DQAVCO0FXBSD\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1111, 362, 18, 'Recursos Humanos', ' I3GYBN1DQAM2EQ5N1I3\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1112, 362, 14, 'Gestão do Patrimônio', ' I3GYBN1DQAVFR3I0EVG\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1113, 362, 3, 'Gestão de Materiais', ' I3GYBN1DQAUEQ2HZDUF\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1114, 362, 6, 'Compras e Licitações', ' I3GYBN1DQATAMYDV9QB\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1115, 362, 15, 'Automação de Ponto', ' DP2KX9NZCW9T5HWES4G\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1116, 362, 23, 'Prestação de Contas', ' DP2KX9NZCW9P1DSAO0C\r\n', '2018-10-16', '2018-10-09 07:48:53'),
(1117, 367, 11, 'Gestão Orçamentária e Contábil', ' DP2KX9NZCW8S4GVDW8K\r\n', '2018-10-16', '2018-10-09 07:48:54'),
(1118, 367, 18, 'Recursos Humanos', ' DP2KX9NZCW8O0CR9S4G\r\n', '2018-10-16', '2018-10-09 07:48:54'),
(1119, 367, 14, 'Gestão do Patrimônio', ' DP2KX9NZCWH1DP4M5HT\r\n', '2018-10-16', '2018-10-09 07:48:54'),
(1120, 367, 22, 'Tramitação de Processos', ' DP2KX9NZCWFR3FUCV7J\r\n', '2018-10-16', '2018-10-09 07:48:54'),
(1121, 367, 23, 'Prestação de Contas', ' DP2KX9NZCW9P1DSAT5H\r\n', '2018-10-16', '2018-10-09 07:48:54'),
(1122, 369, 11, 'Gestão Orçamentária e Contábil', ' DR4MZBP1EYAU6IXF0CQ\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1123, 369, 18, 'Recursos Humanos', ' DR4MZBP1EYAQ2ETBW8M\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1124, 369, 14, 'Gestão do Patrimônio', ' DR4MZBP1EYJ3FR6O9LZ\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1125, 369, 23, 'Prestação de Contas', ' DS5N0CQ2FZCS4GVDYAP\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1126, 357, 11, 'Gestão Orçamentária e Contábil', ' I1EW9LZBO8K4GS7O7O7\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1127, 357, 17, 'Receitas Municipais', ' I2FXAM0CP9UBNZEVEVF\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1128, 357, 18, 'Recursos Humanos', ' I2FXAM0CP9L1DP4L4L5\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1129, 357, 14, 'Gestão do Patrimônio', ' I2FXAM0CP9UEQ2HYHYI\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1130, 357, 22, 'Tramitação de Processos', ' I2FXAM0CP9S4GS7O7O8\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1131, 357, 7, 'Gestão da Frota', ' I2FXAM0CP9SCO0FWFWG\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1132, 357, 6, 'Compras e Licitações', ' I2FXAM0CP9S9LXCTCTD\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1133, 357, 23, 'Prestação de Contas', ' I3GYBN1DQAN3FR6N6N8\r\n', '2018-10-16', '2018-10-09 07:48:55'),
(1134, 368, 11, 'Gestão Orçamentária e Contábil', ' DQ3LYAO0DX9T5HWEYAN\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1135, 368, 17, 'Receitas Municipais', ' DQ3LYAO0DXIZBN2K4GT\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1136, 368, 18, 'Recursos Humanos', ' DQ3LYAO0DX9P1DSAU6J\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1137, 368, 14, 'Gestão do Patrimônio', ' DQ3LYAO0DXI2EQ5N7JW\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1138, 368, 22, 'Tramitação de Processos', ' DQ3LYAO0DXGS4GVDX9M\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1139, 368, 7, 'Gestão da Frota', ' DQ3LYAO0DXG0CO3L5HU\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1140, 368, 3, 'Gestão de Materiais', ' DQ3LYAO0DXH1DP4M6IV\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1141, 368, 6, 'Compras e Licitações', ' DQ3LYAO0DXGX9L0I2ER\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1142, 368, 4, 'Assessor Gerencial', ' DR4MZBP1EYBT5HWEYAO\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1143, 368, 15, 'Automação de Ponto', ' DR4MZBP1EYBV7JYG0CQ\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1144, 368, 23, 'Prestação de Contas', ' DR4MZBP1EYBR3FUCW8M\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1145, 1045, 11, 'Gestão Orçamentária e Contábil', ' DW9R4GU6J3FZBO0GX9S\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1146, 1045, 17, 'Receitas Municipais', ' DW9R4GU6J3O5HU6M3FY\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1147, 1045, 18, 'Recursos Humanos', ' DW9R4GU6J3FV7KWCT5O\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1148, 1045, 14, 'Gestão do Patrimônio', ' DW9R4GU6J3O8KX9P6I1\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1149, 1045, 22, 'Tramitação de Processos', ' DW9R4GU6J3MYANZFW8R\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1150, 1045, 7, 'Gestão da Frota', ' DW9R4GU6J3M6IV7N4GZ\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1151, 1045, 5, 'Banco de Leis do Município', ' DW9R4GU6J3F0CP1HYAT\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1152, 1045, 13, 'Gestão da Ouvidoria', ' DXAS5HV7K4HYANZFW8S\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1153, 1045, 19, 'Gestão do Saneamento', ' DXAS5HV7K4JX9MYEV7R\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1154, 1045, 6, 'Compras e Licitações', ' DXAS5HV7K4N4GT5L2EY\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1155, 1045, 15, 'Automação de Ponto', ' DXAS5HV7K4H1DQ2IZBV\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1156, 1045, 23, 'Prestação de Contas', ' DXAS5HV7K4HX9MYEV7R\r\n', '2018-10-16', '2018-10-09 07:48:56'),
(1157, 373, 11, 'Gestão Orçamentária e Contábil', ' DS5N0CQ2FZBV7JYHW8N\r\n', '2018-10-16', '2018-10-09 07:48:57'),
(1158, 373, 18, 'Recursos Humanos', ' DS5N0CQ2FZBR3FUDS4J\r\n', '2018-10-16', '2018-10-09 07:48:57'),
(1159, 373, 23, 'Prestação de Contas', ' DS5N0CQ2FZCS4GVET5K\r\n', '2018-10-16', '2018-10-09 07:48:57'),
(1160, 377, 11, 'Gestão Orçamentária e Contábil', ' DS5N0CQ2FZBV7JYH0CR\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1161, 377, 17, 'Receitas Municipais', ' DS5N0CQ2FZK1DP4N6IX\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1162, 377, 18, 'Recursos Humanos', ' DS5N0CQ2FZBR3FUDW8N\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1163, 377, 14, 'Gestão do Patrimônio', ' DT6O1DR3G0L5HT8RAM2\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1164, 377, 22, 'Tramitação de Processos', ' DT6O1DR3G0JV7JYH0CS\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1165, 377, 6, 'Compras e Licitações', ' DT6O1DR3G0J0CO3M5HX\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1166, 377, 15, 'Automação de Ponto', ' DT6O1DR3G0DX9L0J2EU\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1167, 377, 23, 'Prestação de Contas', ' DT6O1DR3G0DT5HWFYAQ\r\n', '2018-10-16', '2018-10-09 07:48:58'),
(1168, 378, 11, 'Gestão Orçamentária e Contábil', ' DT6O1DR3G0CW8KZI2EU\r\n', '2018-10-16', '2018-10-09 07:48:59'),
(1169, 378, 18, 'Recursos Humanos', ' DT6O1DR3G0CS4GVEYAQ\r\n', '2018-10-16', '2018-10-09 07:48:59'),
(1170, 378, 14, 'Gestão do Patrimônio', ' DU7P2ES4H1M6IU9SCO5\r\n', '2018-10-16', '2018-10-09 07:48:59'),
(1171, 378, 22, 'Tramitação de Processos', ' DU7P2ES4H1KW8KZI2EV\r\n', '2018-10-16', '2018-10-09 07:48:59'),
(1172, 378, 6, 'Compras e Licitações', ' DU7P2ES4H1K1DP4N7J0\r\n', '2018-10-16', '2018-10-09 07:48:59'),
(1173, 378, 23, 'Prestação de Contas', ' DU7P2ES4H1EU6IXG0CT\r\n', '2018-10-16', '2018-10-09 07:48:59'),
(1174, 387, 11, 'Gestão Orçamentária e Contábil', ' DU7P2ES4H1DX9L0K3FW\r\n', '2018-10-16', '2018-10-09 07:49:00'),
(1175, 495, 11, 'Gestão Orçamentária e Contábil', ' DU7P2ES4H1DX9L1M3FW\r\n', '2018-10-16', '2018-10-09 07:49:01'),
(1176, 495, 18, 'Recursos Humanos', ' DV8Q3FT5I2EU6IYJ0CU\r\n', '2018-10-16', '2018-10-09 07:49:01'),
(1177, 495, 23, 'Prestação de Contas', ' DV8Q3FT5I2FV7JZK1DV\r\n', '2018-10-16', '2018-10-09 07:49:01'),
(1178, 524, 11, 'Gestão Orçamentária e Contábil', ' DV8Q3FT5I2EYAM3HX9R\r\n', '2018-10-16', '2018-10-09 07:49:02'),
(1179, 524, 18, 'Recursos Humanos', ' DV8Q3FT5I2EU6IZDT5N\r\n', '2018-10-16', '2018-10-09 07:49:02'),
(1180, 524, 14, 'Gestão do Patrimônio', ' DV8Q3FT5I2N7JVCQ6I0\r\n', '2018-10-16', '2018-10-09 07:49:02'),
(1181, 524, 22, 'Tramitação de Processos', ' DV8Q3FT5I2LX9L2GW8Q\r\n', '2018-10-16', '2018-10-09 07:49:02'),
(1182, 524, 6, 'Compras e Licitações', ' DV8Q3FT5I2L2EQ7L1DV\r\n', '2018-10-16', '2018-10-09 07:49:02'),
(1183, 524, 23, 'Prestação de Contas', ' DV8Q3FT5I2FV7J0EU6O\r\n', '2018-10-16', '2018-10-09 07:49:02'),
(1184, 1382, 6, 'Compras e Licitações', ' DXAS5HV7K4N4GT8S6I2\r\n', '2018-10-16', '2018-10-09 07:49:03'),
(1185, 1696, 6, 'Compras e Licitações', ' DYBT6IW8L5O5HUCXFRC\r\n', '2018-10-16', '2018-10-09 07:49:03'),
(1186, 1700, 11, 'Gestão Orçamentária e Contábil', ' DYBT6IW8L5H1DQ9LX9U\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1187, 1700, 18, 'Recursos Humanos', ' DYBT6IW8L5HX9M5HT5Q\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1188, 1700, 14, 'Gestão do Patrimônio', ' DYBT6IW8L5QAMZIU6I3\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1189, 1700, 22, 'Tramitação de Processos', ' DYBT6IW8L5O0CP8KW8T\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1190, 1700, 7, 'Gestão da Frota', ' DYBT6IW8L5O8KXGS4G1\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1191, 1700, 3, 'Gestão de Materiais', ' EQ3LYAO0DXH1DQ9LXAM\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1192, 1700, 6, 'Compras e Licitações', ' EQ3LYAO0DXGX9M5HT6I\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1193, 1743, 11, 'Gestão Orçamentária e Contábil', ' EQ3LYAO0DX9T5I1HW9L\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1194, 1743, 18, 'Recursos Humanos', ' EQ3LYAO0DX9P1EXDS5H\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1195, 1743, 14, 'Gestão do Patrimônio', ' EQ3LYAO0DXI2ERAQ5IU\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1196, 1743, 22, 'Tramitação de Processos', ' EQ3LYAO0DXGS4H0GV8K\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1197, 1743, 19, 'Gestão do Saneamento', ' ER4MZBP1EYDR3GZFU7K\r\n', '2018-10-16', '2018-10-09 07:49:04'),
(1198, 1787, 11, 'Gestão Orçamentária e Contábil', ' ER4MZBP1EYAU6J2M5IV\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1199, 1787, 17, 'Receitas Municipais', ' ER4MZBP1EYJ0CP8SBO1\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1200, 1787, 18, 'Recursos Humanos', ' ER4MZBP1EYAQ2FYI1ER\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1201, 1787, 14, 'Gestão do Patrimônio', ' ER4MZBP1EYJ3FSBVER4\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1202, 1787, 22, 'Tramitação de Processos', ' ES5N0CQ2FZIU6J2M5IW\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1203, 1787, 7, 'Gestão da Frota', ' ES5N0CQ2FZI2ERAUDQ4\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1204, 1787, 3, 'Gestão de Materiais', ' ES5N0CQ2FZJ3FSBVER5\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1205, 1787, 13, 'Gestão da Ouvidoria', ' ES5N0CQ2FZCT5I1L4HV\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1206, 1787, 6, 'Compras e Licitações', ' ES5N0CQ2FZIZBO7RAN1\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1207, 1787, 15, 'Automação de Ponto', ' ES5N0CQ2FZCW8L4O7KY\r\n', '2018-10-16', '2018-10-09 07:49:05'),
(1208, 1787, 23, 'Prestação de Contas', ' ET6O1DR3G0DT5I1L4HW\r\n', '2018-10-16', '2018-10-09 07:49:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(100) NOT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `slide_img1` varchar(100) DEFAULT NULL,
  `slide_img2` varchar(100) DEFAULT NULL,
  `slide_img3` varchar(100) DEFAULT NULL,
  `slide_img4` varchar(100) DEFAULT NULL,
  `slide_img5` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `site_title`, `banner`, `slide_img1`, `slide_img2`, `slide_img3`, `slide_img4`, `slide_img5`) VALUES
(1, 'Inteco Tecnologia Informática', '5d6d6b4bd555e3b990ae55deab33344b.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `endereco_rua` varchar(100) DEFAULT NULL,
  `endereco_bairro` varchar(50) DEFAULT NULL,
  `endereco_cep` varchar(20) DEFAULT NULL,
  `setor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `skype`, `data_nascimento`, `fone`, `cpf`, `email`, `imagem`, `endereco_rua`, `endereco_bairro`, `endereco_cep`, `setor_id`) VALUES
(1, 'Rubens Cacio Schio', 'rubens.cacio', '0000-00-00', '(67) 99906-4452', '638.413.801-82', 'rubens@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 1),
(2, 'Roseli Oliveira de Souza Schio', 'roseli_inteco', '0000-00-00', '(67) 99906-4453', '', 'roseli@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 2),
(3, 'Rafael Mascarenhas Custódio Dias', 'rafaeldias.inteco', '1988-02-20', '(67) 99996-0574', '', 'rafamcd@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 5),
(4, 'Rudi César Schio', 'rudi.inteco', '0000-00-00', '(67) 99906-4458', '', 'rudi@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 4),
(5, 'Júlio César de Souza Leite', 'julio.inteco', '0000-00-00', '(67) 99985-5126', '', 'juliocesar@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 4),
(6, 'Rafael de Freitas Lima', 'rafael.inteco', '0000-00-00', '(67) 99946-9956', '', 'rafael@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 4),
(7, 'Elionai Oliveira de Souza', 'elionai.inteco', '0000-00-00', '(67) 99906-4456', '', 'elionai@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 4),
(8, 'Marinalva Conceição Pereira Fernandes', '', '0000-00-00', '(67) 99927-3933', '', 'marinalva@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 3),
(9, 'Ed Bruno da Silva Santiago', 'edbruno.inteco', '0000-00-00', '(67) 99674-2730', '', 'edbruno@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 5),
(10, 'Gabriel Oliveira Bueno da Silva', 'gabriel.oliveira06', '0000-00-00', '(67) 99848-0915', '', 'gabriel@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 4),
(11, 'Marcio Ariani Feitosa', 'live:4cc9d9f2504988cc', '0000-00-00', '(67) 99875-4288', '', 'marcio@inteco.com.br', 'noimage.jpg', 'Rua João Pessoa, 486', 'Centro', '79.400-000', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `func_anotacoes`
--

CREATE TABLE IF NOT EXISTS `func_anotacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `anotacao` text NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `func_arquivos`
--

CREATE TABLE IF NOT EXISTS `func_arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `id_funcionario` int(11) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_usuarios`
--

CREATE TABLE IF NOT EXISTS `grupo_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL COMMENT '//Administrador // Funcionario // Cliente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `grupo_usuarios`
--

INSERT INTO `grupo_usuarios` (`id`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Funcionario'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `igreja_despesa`
--

CREATE TABLE IF NOT EXISTS `igreja_despesa` (
  `codigodespesa` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `codfornecedor` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`codigodespesa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=189 ;

--
-- Extraindo dados da tabela `igreja_despesa`
--

INSERT INTO `igreja_despesa` (`codigodespesa`, `data`, `codfornecedor`, `descricao`, `documento`, `valor`) VALUES
(162, '2016-12-07', 17, 'PGTO MATERIAIS CONF NF 105', '105', 5023.25),
(163, '2016-12-16', 18, 'SERVI&Ccedil;OS DE M&Atilde;O DE OBRA DA CONSTRU&Ccedil;&Atilde;O DA IGREJA', '001', 10000),
(164, '2016-12-23', 17, 'PGTO MATERIAIS CONF NF 111', '111', 4000),
(165, '2016-12-23', 19, 'PGTO MATERIAIS CONF NF 45086 E 46022', '45086 E 46022', 2056),
(166, '2017-02-06', 20, 'PAGAMENTO DE MATERIAIS', '12612', 990),
(167, '2017-02-15', 21, 'PAGAMENTO DE MATERIAIS', '3609', 2107),
(168, '2017-02-16', 21, 'PAGAMENTO DE MATERIAIS', '3618', 1850),
(169, '2017-03-01', 21, 'PAGAMENTO DE MATERIAIS', '3641', 2413),
(170, '2017-03-28', 18, 'SERVI&Ccedil;OS DE M&Atilde;O DE OBRA DA CONSTRU&Ccedil;&Atilde;O DA IGREJA ', 'recibo', 15000),
(171, '2017-04-12', 17, 'PAGAMENTO DE MATERIAIS', '3717', 1213),
(172, '2017-05-22', 18, 'SERVI&Ccedil;OS DE M&Atilde;O DE OBRA DA CONSTRU&Ccedil;&Atilde;O DA IGREJA ', 'recibo', 5000),
(173, '2017-06-05', 21, 'Pagamento de Materiais', '3976', 600),
(175, '2017-06-05', 25, 'Pagamento de Materiais', '257511', 1713.26),
(176, '2017-07-20', 18, 'SERVI&Ccedil;OS DE M&Atilde;O DE OBRA DA CONSTRU&Ccedil;&Atilde;O DA IGREJA', 'recibo', 5000),
(177, '2017-06-21', 26, 'Pagamento de Materiais', '5493', 240),
(178, '2017-08-30', 18, 'SERVI&Ccedil;OS DE M&Atilde;O DE OBRA DA CONSTRU&Ccedil;&Atilde;O DA IGREJA', 'recibo', 5000),
(179, '2017-08-30', 18, 'SERVI&Ccedil;OS DE M&Atilde;O DE OBRA DA CONSTRU&Ccedil;&Atilde;O DA IGREJA', 'recibo', 5000),
(180, '2017-11-09', 18, 'SERVIÃ‡OS DE MÃƒO DE OBRA DA CONSTRUÃ‡ÃƒO DA IGREJA', 'recibo', 5000),
(181, '2017-11-09', 18, 'SERVIÃ‡OS DE MÃƒO DE OBRA DA CONSTRUÃ‡ÃƒO DA IGREJA', 'recibo', 5000),
(182, '2017-11-09', 21, 'Pagamento de Materiais', '4360', 2299.5),
(183, '2017-11-09', 21, 'Pagamento de Materiais', '4361', 2171.4),
(184, '2017-11-10', 25, 'Pagamento de Materiais', '1011', 9843.94),
(185, '2017-10-04', 27, 'Pagamento de Materiais', '037', 7820),
(186, '2017-10-04', 21, 'Pagamento de Materiais', '4319', 1501),
(187, '2017-12-05', 18, 'SERVIÃ‡OS DE MÃƒO DE OBRA DA CONSTRUÃ‡ÃƒO DA IGREJA', 'recibo', 5000),
(188, '2017-12-15', 21, 'Pagamento de Materiais', '4402', 3412.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `igreja_fornecedor`
--

CREATE TABLE IF NOT EXISTS `igreja_fornecedor` (
  `codfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomefornecedor` varchar(100) NOT NULL,
  PRIMARY KEY (`codfornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `igreja_fornecedor`
--

INSERT INTO `igreja_fornecedor` (`codfornecedor`, `nomefornecedor`) VALUES
(15, 'CONSTRUIR MATERIAIS DE CONSTRU&Ccedil;&Atilde;O'),
(17, 'CP CONSTRUTORA PIRAPOZINHO LTDA ME'),
(18, 'CONSTRU&Ccedil;&Atilde;O E SERVI&Ccedil;OS ZAP LTDA ME'),
(19, 'CAXAMBU COMERCIO DE MADEIRAS LTDA'),
(20, 'CONSTRULAR MATERIAIS PARA CONSTRU&Ccedil;&Atilde;O LTDA'),
(21, 'E J BEZERRA DISTRIB CIMENTO COXIM'),
(22, ''),
(23, ''),
(24, '1'),
(25, 'IMESUL METALURGICA LTDA'),
(26, 'TRATORPE&Ccedil;AS - C GIMENES BORGES'),
(27, 'EVANDRO JOSE CORREIA - ME'),
(28, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `tipo` tinyint(4) NOT NULL COMMENT '1 - Site / 2 - Painel',
  `url` varchar(100) DEFAULT NULL,
  `class_bootstrap` varchar(100) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `descricao`, `tipo`, `url`, `class_bootstrap`, `ordem`) VALUES
(1, 'Home', 1, 'home', '', 0),
(2, 'Empresa', 1, NULL, '', 0),
(3, 'Clientes', 1, NULL, '', 0),
(4, 'Contato', 1, 'contato', '', 0),
(5, 'Permissões', 2, '', 'fa fa-expeditedssl', 3),
(6, 'Adm. Senhas', 2, NULL, 'fa fa-key', 5),
(7, 'Acesso Remoto', 2, '', 'fa fa-desktop', 7),
(9, 'Meus Arquivos', 2, 'meusarq', 'fa fa-folder', 8),
(10, 'Minhas Anotações', 2, 'minhasnote', 'fa fa-book', 9),
(11, 'Cadastros', 2, '', 'fa fa-user', 4),
(12, 'Senhas', 2, 'senhascli', 'fa fa-key', 6),
(13, 'Configurações', 2, 'config', 'fa fa-gears', 2),
(14, 'Home', 2, 'home', 'fa fa-home', 1),
(15, 'Cad. Menus', 2, NULL, 'fa fa-check', 10),
(16, 'Sair', 2, 'login/logout', 'fa fa-sign-out', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE IF NOT EXISTS `permissao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_grupousuarios` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=141 ;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`id`, `id_menu`, `id_grupousuarios`) VALUES
(3, 6, 2),
(4, 12, 3),
(6, 7, 2),
(9, 9, 2),
(11, 10, 2),
(13, 11, 2),
(16, 14, 2),
(17, 14, 3),
(100, 16, 2),
(101, 16, 3),
(128, 5, 1),
(129, 6, 1),
(130, 7, 1),
(132, 9, 1),
(133, 10, 1),
(134, 11, 1),
(135, 13, 1),
(136, 14, 1),
(137, 15, 1),
(138, 16, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE IF NOT EXISTS `setor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `descricao`) VALUES
(1, 'Diretoria'),
(2, 'Financeiro'),
(3, 'Administrativo'),
(4, 'Aplicativos Fiscais'),
(5, 'Aplicativos Sociais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE IF NOT EXISTS `sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `sistema`
--

INSERT INTO `sistema` (`id`, `nome`) VALUES
(1, 'Gestão da Ação Social'),
(2, 'Gestão de Cemitério'),
(3, 'Gestão de Materiais / Almoxarifados'),
(4, 'Assessor Gerencial'),
(5, 'Banco de Leis do Município'),
(6, 'Compras e Licitações'),
(7, 'Gestão da Frota'),
(8, 'Gestão da Educação'),
(9, 'Controle de Caixa'),
(10, 'Gestão Hospitalar'),
(11, 'Gestão Orçamentária e Contábil'),
(12, 'ISS - OnLine'),
(13, 'Gestão da Ouvidoria'),
(14, 'Gestão do Patrimônio'),
(15, 'Automação de Ponto'),
(16, 'Projetos Educacionais'),
(17, 'Receitas Municipais'),
(18, 'Recursos Humanos'),
(19, 'Gestão do Saneamento'),
(20, 'Gestão da Saúde'),
(21, 'Tesouraria'),
(22, 'Tramitação de Processos'),
(23, 'Prestação de Contas'),
(24, 'E-Informações'),
(25, 'Portal da Transparência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `id_menu`, `descricao`, `url`) VALUES
(1, 2, 'Quem Somos', 'quemsomos'),
(2, 2, 'Equipe', 'equipe'),
(3, 3, 'Nossos Clientes', 'nossosclientes'),
(4, 3, 'Liberação de Senhas', 'libsenhas'),
(5, 3, 'Chamados', 'chamados'),
(6, 5, 'Grupo de Usuários', 'grupouser'),
(7, 5, 'Permissões', 'permissoes'),
(8, 6, 'Visualizar Senha', 'visualizasenha'),
(9, 6, 'Clientes Sem Senha', 'clientsemsenha'),
(10, 6, 'Vencimentos Senha', 'vencimentosenha'),
(11, 6, 'Acesso Clientes ao Site', 'acessocli'),
(12, 6, 'Sincronizar Senhas', 'sincronizasenhas'),
(16, 11, 'Clientes', 'cadcli'),
(17, 11, 'Funcionários', 'cadfunc'),
(18, 11, 'Usuários', 'caduser'),
(19, 6, 'Licença de Uso', 'lic'),
(20, 7, 'Manutenção', 'criaremoto'),
(22, 7, 'Área Remota', 'arearemota'),
(27, 15, 'Painel Adm.', 'cadmenupainel'),
(28, 15, 'Site', 'cadmenusite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `codigodespesa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Extraindo dados da tabela `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `codigodespesa`) VALUES
(18, '10981-cheque-850543.pdf', 'application/pdf', 61, 162),
(19, '93173-cheque-850543---nf.pdf', 'application/pdf', 221, 162),
(22, '47710-cheque-850547.pdf', 'application/pdf', 414, 163),
(23, '52654-cheque-850550.pdf', 'application/pdf', 58, 164),
(24, '79867-cheque-850550-nf.pdf', 'application/pdf', 204, 164),
(25, '88529-cheque-850551.pdf', 'application/pdf', 62, 165),
(26, '60713-cheque-850551-nf.pdf', 'application/pdf', 621, 165),
(27, '79942-cheque-850565.pdf', 'application/pdf', 81, 166),
(28, '4015-cheque-850565-nf.pdf', 'application/pdf', 271, 166),
(29, '27616-cheque-850571.pdf', 'application/pdf', 82, 167),
(30, '48493-cheque-850571-nf.pdf', 'application/pdf', 297, 167),
(31, '6342-cheque-850572.pdf', 'application/pdf', 218, 168),
(32, '71684-cheque-850572-nf.pdf', 'application/pdf', 332, 168),
(33, '93387-cheque-850577.pdf', 'application/pdf', 83, 169),
(34, '69938-cheque-850577-nf.pdf', 'application/pdf', 221, 169),
(35, '36446-cheque-850547-nf.pdf', 'application/pdf', 135, 163),
(36, '76869-cheque-850592.pdf', 'application/pdf', 110, 170),
(37, '38030-cheque-850592-nf.pdf', 'application/pdf', 138, 170),
(38, '111-cheque-850592-nf.pdf', 'application/pdf', 30, 170),
(39, '115696-cheque-850597.pdf', 'application/pdf', 38, 171),
(40, '87846-cheque-850597-nf.pdf', 'application/pdf', 504, 171),
(41, '20489-jr_99393.php', 'application/octet-stream', 66, 171),
(42, '111-cheque-850597-nf.pdf', 'application/pdf', 66, 171),
(43, '71792-cheque-850606-nf.pdf', 'application/pdf', 144, 172),
(44, '13078-cheque-850606.pdf', 'application/pdf', 56, 172),
(45, '92421-cheque-850610.pdf', 'application/pdf', 107, 173),
(46, '56086-cheque-850610-nf.pdf', 'application/pdf', 212, 173),
(47, '72443-fun.php', 'application/x-php', 18, 172),
(48, '111-cheque-850606.pdf', 'application/pdf', 18, 172),
(49, '111-cheque-850610-nf.pdf', 'application/pdf', 18, 173),
(50, '57053-fun.php', 'application/x-php', 18, 174),
(51, '75279-cheque-850614-nf.pdf', 'application/pdf', 485, 175),
(52, '36165-cheque-850614.pdf', 'application/pdf', 102, 175),
(53, '56079-cheque-850628-nf.pdf', 'application/pdf', 142, 176),
(54, '93444-cheque-850628.pdf', 'application/pdf', 58, 176),
(55, '35353-cheque-850632.pdf', 'application/pdf', 97, 177),
(56, '21235-cheque-850632-nf.pdf', 'application/pdf', 140, 177),
(57, '91806-cheque-850636.pdf', 'application/pdf', 238, 178),
(58, '82598-cheque-850637.pdf', 'application/pdf', 234, 179),
(59, '95137-cheque-850669-nf.pdf', 'application/pdf', 179, 180),
(60, '63741-cheque-850669.pdf', 'application/pdf', 60, 180),
(61, '71805-cheque-850670-nf.pdf', 'application/pdf', 172, 181),
(62, '16598-cheque-850670.pdf', 'application/pdf', 59, 181),
(63, '82484-cheque-850667-nf.pdf', 'application/pdf', 259, 183),
(64, '12507-cheque-850667.pdf', 'application/pdf', 59, 183),
(65, '41791-cheque-850668-nf.pdf', 'application/pdf', 270, 182),
(66, '6589-cheque-850668.pdf', 'application/pdf', 61, 182),
(67, '23590-cheque-850671.pdf', 'application/pdf', 144, 184),
(68, '26578-cheque-850671-nf.pdf', 'application/pdf', 502, 184),
(69, '31024-cheque-850643.pdf', 'application/pdf', 66, 186),
(70, '73089-cheque-850643-nf.pdf', 'application/pdf', 258, 186),
(71, '73093-cheque-850641.pdf', 'application/pdf', 65, 185),
(72, '52644-cheque-850641-nf.pdf', 'application/pdf', 268, 185),
(73, '37040-cheque-850678-nf.pdf', 'application/pdf', 147, 187),
(74, '71094-cheque-850678.pdf', 'application/pdf', 58, 187),
(75, '32777-cheque-850682-nf.pdf', 'application/pdf', 273, 188),
(76, '26912-cheque-850682.pdf', 'application/pdf', 59, 188);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ts`
--

CREATE TABLE IF NOT EXISTS `ts` (
  `id_cliente` int(11) NOT NULL,
  `usr` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `dataehora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ts_user`
--

CREATE TABLE IF NOT EXISTS `ts_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `ts_user`
--

INSERT INTO `ts_user` (`id`, `id_cliente`, `usuario`) VALUES
(4, 362, 'administrator'),
(5, 1045, 'Servidor 2 - inteco'),
(6, 368, 'pessoal'),
(7, 357, 'INTECO'),
(8, 1700, 'inteco'),
(13, 1700, 'rudi.inteco'),
(15, 1045, 'Servidor 1 - Administrador'),
(16, 368, 'sistema@pref..'),
(17, 378, 'Administrador'),
(18, 1787, 'pessoal'),
(19, 1787, 'pessoal'),
(20, 1045, 'Servidor 2 - Administrador'),
(21, 1045, 'Servidor 1 - inteco'),
(22, 377, 'inteco'),
(23, 377, 'usuario01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `user` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `grupo_usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `id_funcionario`, `id_cliente`, `user`, `senha`, `imagem`, `grupo_usuario_id`) VALUES
(1, 3, 0, 'rafamcd', 'df94d8c45d6c5cd98f2833961d40df13', 'f81d4e86864391a75f2a6eca2e48927c.jpg', 1),
(2, 1, 0, 'rubens', 'fb518e8884d6eb76b0504ec7ad9b82ea', '9940f59585df1cc60b69b9f524a67e68.jpg', 1),
(3, 2, 0, 'roseli', '742bd91d2d21061e40359913fbff49d7', '304910216a0aa2cec44e3524102faddc.jpg', 1),
(4, 4, 0, 'rudi', 'fb518e8884d6eb76b0504ec7ad9b82ea', 'a139f3732d53dad97e085f6cc7e87786.jpg', 2),
(5, 5, 0, 'juliocesar', 'fb518e8884d6eb76b0504ec7ad9b82ea', 'cbbdc2929a05502e45c352f9767e9711.jpg', 2),
(6, 6, 0, 'rafael', 'fb518e8884d6eb76b0504ec7ad9b82ea', '88a1b4728f63a847cc825006fef57f9c.jpg', 2),
(7, 7, 0, 'elionai', 'fb518e8884d6eb76b0504ec7ad9b82ea', '357d32305fab3623dd45ae0d207b3844.jpg', 2),
(8, 9, 0, 'edbruno', 'fb518e8884d6eb76b0504ec7ad9b82ea', 'd3e6c77af8498609354a29e54d451fd8.jpg', 2),
(9, 10, 0, 'gabriel', '29a01cc1cc30478f2f1d342356d08a50', '416efa6a9c90aede691999282ce0cf0c.jpg', 2),
(10, 11, 0, 'marcio', '38415f892cad2ff29a54e7526716c7bf', '1faa6d05351c8850a75a8536384631e7.jpg', 2),
(11, NULL, 356, 'cmsid@inteco.com.br', 'e4d144a61a9e5aa119044459685885cf', 'noimage.jpg', 3),
(12, 0, 1787, 'pmcha@inteco.com.br', '6ab0357358450ad998820809ff239bed', '14ed6440a86c0f820a8d6ae43ac14804.jpg', 3),
(13, 0, 362, 'pmalc@inteco.com.br', '920f7ba364f910bdec8ab85b32ff193a', '7f8c8cacb70dafd7fefad863f96cb928.jpg', 3),
(14, 0, 367, 'cmalc@inteco.com.br', 'acc1a5ff60699d0c852e48fbc6915957', 'ef33e80f3a24fa5fb1890ccc3a1d8161.jpg', 3),
(15, 0, 368, 'pmson@inteco.com.br', '09464926b9e35aa6f4734398f97c4b45', '687559d35594e9700f6eb0c80d51ba41.jpg', 3),
(16, 0, 369, 'cmson@inteco.com.br', '394223f90f880dc58215d6b4afdf258e', 'dbe5f21fda874ac347c3af7a3c3eba7c.jpg', 3),
(17, 0, 373, 'previson@inteco.com.br', '3d267d09b07153da42f0758039cd0e1c', 'debbe7a0fb1a9b076c6c4ef3a8e39dd9.jpg', 3),
(18, 0, 377, 'pmcox@inteco.com.br', '3d267d09b07153da42f0758039cd0e1c', '6c7f20e51a1e38327afcef5a552ba019.jpg', 3),
(19, 0, 378, 'cmcox@inteco.com.br', '6b34c098b069dd32ae01a6878f4f1f6a', '4dab241c6e8a2a2206862283c95b0d38.jpg', 3),
(20, 0, 387, 'imcascox@inteco.com.br', '09464926b9e35aa6f4734398f97c4b45', '5836f412705f622cfca56fd8967254a9.jpg', 3),
(21, 0, 495, 'impcox@inteco.com.br', 'e4d144a61a9e5aa119044459685885cf', '8a09daca6914af1bb43cd2348a9ba1f0.jpg', 3),
(22, NULL, 498, 'cmjar@inteco.com.br', '6dc0e0611479771e6714dadef60b244d', 'noimage.jpg', 3),
(23, 0, 524, 'previpba@inteco.com.br', 'a6de6220823fcc3abc5638471388cb41', '3fb2974d41a33e9aa87ccffa45617169.jpg', 3),
(24, 0, 1045, 'pmcas@inteco.com.br', '05dc4be3550a5f2ec6bdb5e3a2fc5059', '172dffff00db29c44b104bb7a5d424fa.jpg', 3),
(25, 0, 357, 'pmjar@inteco.com.br', '4b163cfc0a74f0fd992fe51bad3878b7', '1bd4ffad3e0a5db9768c1194f9c4a75c.jpg', 3),
(26, 0, 1382, 'hrcoxim@inteco.com.br', '05dc4be3550a5f2ec6bdb5e3a2fc5059', '1d3cbe7fa2a73ac186c6355b8a09734a.jpg', 3),
(27, 0, 1696, 'funess@inteco.com.br', '6dc0e0611479771e6714dadef60b244d', '57865cb7d37fd0b5b84ae0fda096b1d3.jpg', 3),
(28, 0, 1700, 'pmpba@inteco.com.br', '00dfa616a723b4769a46e495f5bb7b41', '048c1908783c8ff49009ee2662b29888.jpg', 3),
(29, 0, 1743, 'saae@inteco.com.br', 'a6de6220823fcc3abc5638471388cb41', 'f04f17b72702f9cca20f8cbc1a918c1d.jpg', 3),
(30, 0, 1779, 'pmgui@inteco.com.br', '594a9d6efef8eaa383cbf27d7f77d986', '00d176106902caa382b6782c8bbb8bff.jpg', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
