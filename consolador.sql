-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01/12/2020 às 04:36
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `consolador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `category`
--

INSERT INTO `category` (`id`, `title`, `url`, `status`, `data`) VALUES
(1, 'Blog', 'blog', 1, '2020-11-30 21:16:56'),
(2, 'Causas', 'causas', 1, '2020-11-30 21:16:56'),
(3, 'Eventos', 'eventos', 1, '2020-11-30 21:16:56');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `resume` varchar(256) DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `author`, `category`, `title`, `resume`, `url`, `description`, `status`, `thumb`, `data`) VALUES
(2, 'Telmo', '2', 'Natal sem fome', 'Já passou pela sua cabeça que vários problemas de saúde têm relação com seu intestino e sua microbiota?', 'natal-sem-fome', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;J&aacute; passou pela sua cabe&ccedil;a que v&aacute;rios problemas de sa&uacute;de t&ecirc;m rela&ccedil;&atilde;o com seu intestino e sua microbiota?&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Cuidar do corpo n&atilde;o &eacute; nada f&aacute;cil devido a sua grande complexidade. Por isso, na hora de cuidar do seu intestino, n&atilde;o adianta s&oacute; olhar para o padr&atilde;o das fezes ou usar laxantes para auxiliar. Sua alimenta&ccedil;&atilde;o tem rela&ccedil;&atilde;o direta com sua sa&uacute;de intestinal, e doen&ccedil;as cr&ocirc;nicas como a obesidade. &Eacute; muito importante cuidarmos do nosso segundo c&eacute;rebro.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;O cora&ccedil;&atilde;o, o f&iacute;gado e os rins que nos perdoem, mas n&atilde;o h&aacute; &oacute;rg&atilde;o mais fascinante que o intestino. A come&ccedil;ar pelo seu tamanho descomunal: se abr&iacute;ssemos e estic&aacute;ssemos seus dois trechos &ndash; o delgado e o grosso -, ele ocuparia uma &aacute;rea de 250 metros quadrados, o equivalente a uma quadra de t&ecirc;nis. Tudo est&aacute; enrolado e compactado dentro do ventre. E olha que isso nem &eacute; o aspecto mais interessante da coisa: o intestino tem neur&ocirc;nios e aloja trilh&otilde;es de bact&eacute;rias, boa parte delas envolvida em processos cruciais ao organismo. E voc&ecirc; pensando que ele era um longo tubo por onde a comida passa, nutrientes s&atilde;o absorvidos e o que n&atilde;o &eacute; aproveitado vira coc&ocirc;.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Espera: neur&ocirc;nios l&aacute; no abd&ocirc;men? Sim, falamos das mesm&iacute;ssimas c&eacute;lulas que constituem o c&eacute;rebro. &ldquo;O intestino tem cerca de 500 milh&otilde;es delas&rdquo;, calcula o gastroenterologista Eduardo Antonio Andr&eacute;, do Hospital do Servidor P&uacute;blico Estadual, em S&atilde;o Paulo. &Eacute; menos que a massa cinzenta, que tem bilh&otilde;es, mas o suficiente para formar um sistema nervoso pr&oacute;prio, respons&aacute;vel por coordenar tarefas como a libera&ccedil;&atilde;o de subst&acirc;ncias digestivas e os movimentos que estimulam o bolo fecal a ir embora. &ldquo;Esses circuitos operam sozinhos, ou seja, independem do comando cerebral&rdquo;, destaca Andr&eacute;. D&aacute; pra entender por que apelidaram o intestino de segundo c&eacute;rebro?&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Os neur&ocirc;nios intestinais chamam a aten&ccedil;&atilde;o tamb&eacute;m pela sua farta produ&ccedil;&atilde;o de serotonina, mol&eacute;cula que nos leva ao estado de bem-estar &ndash; 90% da serotonina descarregada pelo corpo &eacute; fabricada ali. &ldquo;Esse neurotransmissor &eacute; importante porque garante o funcionamento adequado do &oacute;rg&atilde;o&rdquo;, diz o m&eacute;dico Henrique Ballalai, da Academia Brasileira de Neurologia. Mas se sabe que ele ainda pode exercer um efeito sist&ecirc;mico. O fato &eacute; que a serotonina &eacute; s&oacute; um dos mais de 30 mensageiros qu&iacute;micos montados no ventre.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Essas subst&acirc;ncias s&atilde;o encarregadas de transmitir recados de um lado para o outro e estabelecer comunica&ccedil;&atilde;o eficiente entre o intestino e o c&eacute;rebro de verdade. &ldquo;Essa conversa acontece diretamente por meio do nervo vago, estrutura que passa pelo t&oacute;rax e liga o sistema gastrointestinal &agrave; cabe&ccedil;a&rdquo;, descreve o endocrinologista Filippo Pedrinola, da Sociedade Brasileira de Endocrinologia e Metabologia. O nervo vago &eacute; uma via de m&atilde;o dupla: assim como o abd&ocirc;men manda mensagens para a massa cinzenta, o correio inverso tamb&eacute;m ocorre. &ldquo;&Eacute; por isso que, diante de uma situa&ccedil;&atilde;o de estresse, podemos sentir frio na barriga ou vontade de ir ao banheiro&rdquo;, esclarece Pedrinola.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Mas &eacute; poss&iacute;vel prevenir, ou at&eacute; reverter, desequil&iacute;brios na microbiota intestinal? A resposta &eacute; sim. A flora pode ser modulada para que as bact&eacute;rias do bem vivam em paz ou voltem a reinar. E isso &eacute; obtido, em parte, via alimenta&ccedil;&atilde;o, quando se investe nos probi&oacute;ticos, l&aacute;cteos enriquecidos com micro-organismos ben&eacute;ficos &agrave; sa&uacute;de. Mas fique atento ao r&oacute;tulo: nem todo iogurte, por exemplo, &eacute; probi&oacute;tico. Repare se a embalagem informa isso e qual sua concentra&ccedil;&atilde;o de bact&eacute;rias, medida em UFC (unidade formadora de col&ocirc;nia). &ldquo;O produto precisa ter de 2 a 10 bilh&otilde;es de UFC por dose&rdquo;, avisa Pedrinola. Ah, probi&oacute;ticos tamb&eacute;m est&atilde;o dispon&iacute;veis hoje em c&aacute;psulas e sach&ecirc;s.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;S&oacute; que n&atilde;o d&aacute; pra engolir um monte de bichinhos e se esquecer de alimentar a flora local. Essa &eacute; a fun&ccedil;&atilde;o dos prebi&oacute;ticos. &ldquo;Eles s&atilde;o ricos em fibras sol&uacute;veis, que o sistema digestivo n&atilde;o aproveita sem a coopera&ccedil;&atilde;o da microbiota&rdquo;, define o microbiologista Arthur Ouwehand, da Divis&atilde;o de Nutri&ccedil;&atilde;o &amp; Sa&uacute;de da DuPont, na Finl&acirc;ndia. Tais componentes, encontrados em vegetais como a cebola e a aveia, nutrem as bact&eacute;rias. E elas, por sua vez, agradecem devolvendo vantagens ao nosso corpo.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Fonte: Sa&uacute;de Abril.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;Quer mais informa&ccedil;&otilde;es? Fale no nosso chat com nossa Nutri! &Eacute; s&oacute; perguntar.&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'posts/2020/11/natal-sem-fome.jpg', '2020-11-30 22:09:47'),
(3, 'Consolador', '1', 'Auxilie quem precisa', 'Já passou pela sua cabeça que vários problemas de saúde têm relação com seu intestino e sua microbiota?', 'auxilie-quem-precisa', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;J&aacute; passou pela sua cabe&ccedil;a que v&aacute;rios problemas de sa&uacute;de t&ecirc;m rela&ccedil;&atilde;o com seu intestino e sua microbiota?&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Cuidar do corpo n&atilde;o &eacute; nada f&aacute;cil devido a sua grande complexidade. Por isso, na hora de cuidar do seu intestino, n&atilde;o adianta s&oacute; olhar para o padr&atilde;o das fezes ou usar laxantes para auxiliar. Sua alimenta&ccedil;&atilde;o tem rela&ccedil;&atilde;o direta com sua sa&uacute;de intestinal, e doen&ccedil;as cr&ocirc;nicas como a obesidade. &Eacute; muito importante cuidarmos do nosso segundo c&eacute;rebro.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;em&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;O cora&ccedil;&atilde;o, o f&iacute;gado e os rins que nos perdoem, mas n&atilde;o h&aacute; &oacute;rg&atilde;o mais fascinante que o intestino. A come&ccedil;ar pelo seu tamanho descomunal: se abr&iacute;ssemos e estic&aacute;ssemos seus dois trechos &ndash; o delgado e o grosso -, ele ocuparia uma &aacute;rea de 250 metros quadrados, o equivalente a uma quadra de t&ecirc;nis. Tudo est&aacute; enrolado e compactado dentro do ventre. E olha que isso nem &eacute; o aspecto mais interessante da coisa: o intestino tem neur&ocirc;nios e aloja trilh&otilde;es de bact&eacute;rias, boa parte delas envolvida em processos cruciais ao organismo. E voc&ecirc; pensando que ele era um longo tubo por onde a comida passa, nutrientes s&atilde;o absorvidos e o que n&atilde;o &eacute; aproveitado vira coc&ocirc;.&lt;/span&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Espera: neur&ocirc;nios l&aacute; no abd&ocirc;men? Sim, falamos das mesm&iacute;ssimas c&eacute;lulas que constituem o c&eacute;rebro. &ldquo;O intestino tem cerca de 500 milh&otilde;es delas&rdquo;, calcula o gastroenterologista Eduardo Antonio Andr&eacute;, do Hospital do Servidor P&uacute;blico Estadual, em S&atilde;o Paulo. &Eacute; menos que a massa cinzenta, que tem bilh&otilde;es, mas o suficiente para formar um sistema nervoso pr&oacute;prio, respons&aacute;vel por coordenar tarefas como a libera&ccedil;&atilde;o de subst&acirc;ncias digestivas e os movimentos que estimulam o bolo fecal a ir embora. &ldquo;Esses circuitos operam sozinhos, ou seja, independem do comando cerebral&rdquo;, destaca Andr&eacute;. D&aacute; pra entender por que apelidaram o intestino de segundo c&eacute;rebro?&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Os neur&ocirc;nios intestinais chamam a aten&ccedil;&atilde;o tamb&eacute;m pela sua farta produ&ccedil;&atilde;o de serotonina, mol&eacute;cula que nos leva ao estado de bem-estar &ndash; 90% da serotonina descarregada pelo corpo &eacute; fabricada ali. &ldquo;Esse neurotransmissor &eacute; importante porque garante o funcionamento adequado do &oacute;rg&atilde;o&rdquo;, diz o m&eacute;dico Henrique Ballalai, da Academia Brasileira de Neurologia. Mas se sabe que ele ainda pode exercer um efeito sist&ecirc;mico. O fato &eacute; que a serotonina &eacute; s&oacute; um dos mais de 30 mensageiros qu&iacute;micos montados no ventre.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Essas subst&acirc;ncias s&atilde;o encarregadas de transmitir recados de um lado para o outro e estabelecer comunica&ccedil;&atilde;o eficiente entre o intestino e o c&eacute;rebro de verdade. &ldquo;Essa conversa acontece diretamente por meio do nervo vago, estrutura que passa pelo t&oacute;rax e liga o sistema gastrointestinal &agrave; cabe&ccedil;a&rdquo;, descreve o endocrinologista Filippo Pedrinola, da Sociedade Brasileira de Endocrinologia e Metabologia. O nervo vago &eacute; uma via de m&atilde;o dupla: assim como o abd&ocirc;men manda mensagens para a massa cinzenta, o correio inverso tamb&eacute;m ocorre. &ldquo;&Eacute; por isso que, diante de uma situa&ccedil;&atilde;o de estresse, podemos sentir frio na barriga ou vontade de ir ao banheiro&rdquo;, esclarece Pedrinola.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Mas &eacute; poss&iacute;vel prevenir, ou at&eacute; reverter, desequil&iacute;brios na microbiota intestinal? A resposta &eacute; sim. A flora pode ser modulada para que as bact&eacute;rias do bem vivam em paz ou voltem a reinar. E isso &eacute; obtido, em parte, via alimenta&ccedil;&atilde;o, quando se investe nos probi&oacute;ticos, l&aacute;cteos enriquecidos com micro-organismos ben&eacute;ficos &agrave; sa&uacute;de. Mas fique atento ao r&oacute;tulo: nem todo iogurte, por exemplo, &eacute; probi&oacute;tico. Repare se a embalagem informa isso e qual sua concentra&ccedil;&atilde;o de bact&eacute;rias, medida em UFC (unidade formadora de col&ocirc;nia). &ldquo;O produto precisa ter de 2 a 10 bilh&otilde;es de UFC por dose&rdquo;, avisa Pedrinola. Ah, probi&oacute;ticos tamb&eacute;m est&atilde;o dispon&iacute;veis hoje em c&aacute;psulas e sach&ecirc;s.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;S&oacute; que n&atilde;o d&aacute; pra engolir um monte de bichinhos e se esquecer de alimentar a flora local. Essa &eacute; a fun&ccedil;&atilde;o dos prebi&oacute;ticos. &ldquo;Eles s&atilde;o ricos em fibras sol&uacute;veis, que o sistema digestivo n&atilde;o aproveita sem a coopera&ccedil;&atilde;o da microbiota&rdquo;, define o microbiologista Arthur Ouwehand, da Divis&atilde;o de Nutri&ccedil;&atilde;o &amp; Sa&uacute;de da DuPont, na Finl&acirc;ndia. Tais componentes, encontrados em vegetais como a cebola e a aveia, nutrem as bact&eacute;rias. E elas, por sua vez, agradecem devolvendo vantagens ao nosso corpo.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;&lt;strong&gt;Fonte&lt;/strong&gt;: Sa&uacute;de Abril.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Quer mais informa&ccedil;&otilde;es? Fale no nosso chat com nossa Nutri! &Eacute; s&oacute; perguntar.&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'posts/2020/11/auxilie-quem-precisa.jpg', '2020-11-30 22:10:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `thumb` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `size` char(1) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `status`, `link`, `thumb`, `size`) VALUES
(3, 'Natal sem fome', 1, 'natal-sem-fome', 'sliders/2020/11/natal-sem-fome.jpg', 'g'),
(5, 'Auxilie quem precisa', 2, 'auxilie-quem-precise', 'sliders/2020/11/auxilie-quem-precisa.jpg', 'g');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `cell` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `registration` timestamp NULL DEFAULT NULL,
  `lastupdate` timestamp NULL DEFAULT NULL,
  `lastaccess` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `birth` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `thumb`, `name`, `lastname`, `document`, `genre`, `telephone`, `cell`, `email`, `password`, `registration`, `lastupdate`, `lastaccess`, `level`, `status`, `birth`) VALUES
(6, NULL, 'Valdineia', 'Martins', '296.472.580-20', 2, '6139728474', '(61) 99250-1143', 'valdineia.s.martiins@gmail.com', '$2y$12$AA5Lld3KXOybIaEbcxWuSOiAPZtdjZ65JCxUw3uBfxpdidWQ39B/.', '2020-11-29 18:02:23', '2020-11-29 18:09:18', NULL, 10, 1, NULL),
(3, NULL, 'Anthony ', 'Ricardo', '314.124.930-05', NULL, '', '', 'anthony@gmail.com', '$2y$12$bAT6a4.bALFDwXQNbPHvh.4ydJBdIKsuIOOZXHdrGm3i5ixghm0sa', '2020-11-29 15:32:26', NULL, NULL, 8, 1, NULL),
(5, NULL, 'Lais', 'Graciele', '04196100066', 2, '', '', 'laisg@gmail.com', '$2y$12$dteeu1HBCChi7Kp8gQDYEOJ8vQDzslkYMd0AoG2HiCk5Ou64VoWPe', '2020-11-29 15:33:44', '2020-11-29 23:59:27', NULL, 8, 1, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
