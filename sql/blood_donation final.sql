-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2026 a las 01:50:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blood_donation`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'PAOLO IVAN', 'Paolo123', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blood`
--

INSERT INTO `blood` (`blood_id`, `blood_group`) VALUES
(1, 'B+'),
(2, 'B-'),
(3, 'A+'),
(4, 'O+'),
(5, 'O-'),
(6, 'A-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `contact_address` varchar(100) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `contact_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `contact_address`, `contact_mail`, `contact_phone`) VALUES
(1, 'Paolo Cuba, Grover Hernani, Israel Pari', 'bloodbank@gmail.com', '60578411');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_query`
--

CREATE TABLE `contact_query` (
  `query_id` int(11) NOT NULL,
  `query_name` varchar(100) NOT NULL,
  `query_mail` varchar(120) NOT NULL,
  `query_number` char(11) NOT NULL,
  `query_message` longtext NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `query_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contact_query`
--

INSERT INTO `contact_query` (`query_id`, `query_name`, `query_mail`, `query_number`, `query_message`, `query_date`, `query_status`) VALUES
(1, 'Anuj', 'anuj@gmail.com', '9923471025', 'I need O+ Blood.', '2026-07-12 20:18:42', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donor_details`
--

CREATE TABLE `donor_details` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_number` varchar(10) NOT NULL,
  `donor_mail` varchar(50) DEFAULT NULL,
  `donor_age` int(60) NOT NULL,
  `donor_gender` varchar(10) NOT NULL,
  `donor_blood` varchar(10) NOT NULL,
  `donor_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_type` varchar(50) DEFAULT NULL,
  `page_data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_type`, `page_data`) VALUES
(2, 'Why Become Donor', 'donor', '<p>La sangre es el regalo más valioso que una persona puede ofrecer a otra: el regalo de la vida. La decisión de donar sangre puede salvar una vida, o incluso varias, si la sangre se separa en sus diferentes componentes —glóbulos rojos, plaquetas y plasma—, los cuales pueden utilizarse de manera individual para pacientes con afecciones específicas.</p><p>La sangre segura salva vidas y mejora la salud. Las transfusiones de sangre son necesarias para:</p><ul><li><p>Mujeres con complicaciones durante el embarazo, como embarazos ectópicos y hemorragias antes, durante o después del parto.</p></li><li><p>Niños con anemia grave, que con frecuencia es consecuencia de la malaria o la desnutrición.</p></li><li><p>Personas con traumatismos graves ocasionados por desastres naturales o provocados por el ser humano.</p></li><li><p>Pacientes que requieren procedimientos médicos y quirúrgicos complejos, así como personas con cáncer.</p></li></ul><p>También se necesita para realizar transfusiones periódicas a personas que padecen enfermedades como la talasemia y la anemia de células falciformes. Además, la sangre se utiliza para elaborar productos como los factores de coagulación destinados a personas con hemofilia.</p><p>Existe una necesidad constante de contar con un suministro regular de sangre, ya que esta solo puede almacenarse durante un tiempo limitado antes de ser utilizada. Por ello, se requieren donaciones periódicas de un número suficiente de personas sanas para garantizar que haya sangre segura disponible siempre que sea necesaria y en cualquier lugar donde se la requiera.</p>                    '),
(3, 'About Us ', 'aboutus', '<p>Un banco de sangre es un lugar donde se almacenan las bolsas de sangre recolectadas durante las campañas o jornadas de donación. El término <strong>\"banco de sangre\"</strong> hace referencia a una división del laboratorio de un hospital en la que se realiza el almacenamiento de los productos sanguíneos y donde se llevan a cabo las pruebas necesarias para reducir el riesgo de complicaciones relacionadas con las transfusiones.</p><p>El proceso de gestión de las bolsas de sangre recibidas durante las campañas de donación requiere una administración adecuada y sistemática. Cada bolsa de sangre debe manipularse con sumo cuidado y someterse a un control riguroso, ya que está directamente relacionada con la vida de los pacientes.</p><p>Se propone el desarrollo de un <strong>Sistema de Gestión de Banco de Sangre y Donaciones basado en la Web (BBDMS, por sus siglas en inglés: <em>Web-based Blood Bank and Donation Management System</em>)</strong>, con el propósito de proporcionar herramientas de administración que permitan al banco de sangre gestionar eficientemente las bolsas de sangre, así como registrar la información de las personas que desean donar sangre y de aquellas que la necesitan.</p>                    '),
(4, 'The Need For Blood', 'needforblood', '<p>Existen muchas razones por las cuales los pacientes necesitan sangre. Un error común es creer que las víctimas de accidentes son quienes más utilizan este recurso. Sin embargo, los pacientes que requieren la mayor cantidad de sangre son aquellos que:</p><ol><li><p>Están recibiendo tratamiento contra el cáncer.</p></li><li><p>Se someten a cirugías ortopédicas.</p></li><li><p>Se someten a cirugías cardiovasculares.</p></li><li><p>Reciben tratamiento por trastornos sanguíneos hereditarios.</p></li></ol>                    '),
(5, 'Blood Tips', 'bloodtips', '<ol><li><p>Debe gozar de buena salud.</p></li><li><p>Manténgase bien hidratado y consuma una comida saludable antes de realizar la donación.</p></li><li><p>Nunca se es demasiado mayor para donar sangre.</p></li><li><p>Descanse y manténgase relajado.</p></li><li><p>No olvide disfrutar de su refrigerio gratuito después de la donación.</p></li></ol>                    '),
(6, 'Who you could Help', 'whoyouhelp', '<p>Cada 2 segundos, alguien en el mundo necesita sangre. Donar sangre puede ayudar a:</p><ol><li><p>Personas que atraviesan desastres o situaciones de emergencia.</p></li><li><p>Personas que pierden sangre durante cirugías mayores.</p></li><li><p>Personas que han sufrido una pérdida de sangre debido a una hemorragia gastrointestinal.</p></li><li><p>Mujeres que presentan complicaciones graves durante el embarazo o el parto.</p></li><li><p>Personas con cáncer o con anemia grave, causada en algunos casos por enfermedades como la talasemia o la anemia de células falciformes.</p></li></ol>                    '),
(7, 'Blood Groups', 'bloodgroups', '<p>El grupo sanguíneo de cualquier persona pertenece a una de las siguientes categorías:</p><ul><li><p>A positivo (A+) o A negativo (A−).</p></li><li><p>B positivo (B+) o B negativo (B−).</p></li><li><p>O positivo (O+) o O negativo (O−).</p></li><li><p>AB positivo (AB+) o AB negativo (AB−).</p></li></ul><p>El grupo sanguíneo está determinado por los genes que se heredan de los padres.</p><p>Mantener una alimentación saludable contribuye a que la donación de sangre sea exitosa y, además, ayuda a que el donante se sienta mejor antes y después del proceso.</p>                    '),
(8, 'Universal Donors And Recepients', 'universal', '<p>El grupo sanguíneo más común es el tipo <strong>O</strong>, seguido por el tipo <strong>A</strong>. Las personas con sangre tipo <strong>O</strong> suelen ser conocidas como <strong>donantes universales</strong>, ya que, en determinadas circunstancias, su sangre puede transfundirse a personas de cualquier grupo sanguíneo. Por otro lado, las personas con sangre tipo <strong>AB</strong> son conocidas como <strong>receptores universales</strong>, porque pueden recibir sangre de cualquier grupo sanguíneo compatible.</p><p>En las transfusiones de emergencia, la sangre del grupo <strong>O negativo (O−)</strong> es la que presenta el menor riesgo de provocar reacciones graves en la mayoría de los pacientes. Por esta razón, este tipo de sangre suele denominarse <strong>el tipo de sangre del donante universal</strong>.</p>                    ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `query_stat`
--

CREATE TABLE `query_stat` (
  `id` int(11) NOT NULL,
  `query_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `query_stat`
--

INSERT INTO `query_stat` (`id`, `query_type`) VALUES
(1, 'Read'),
(2, 'Pending');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indices de la tabla `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indices de la tabla `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indices de la tabla `contact_query`
--
ALTER TABLE `contact_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indices de la tabla `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `page_id` (`page_id`),
  ADD UNIQUE KEY `page_type` (`page_type`);

--
-- Indices de la tabla `query_stat`
--
ALTER TABLE `query_stat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contact_query`
--
ALTER TABLE `contact_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
