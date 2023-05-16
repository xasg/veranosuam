-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2023 a las 02:07:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veranos2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_carrera`
--

CREATE TABLE `cat_carrera` (
  `id_carrera` int(11) NOT NULL,
  `nivel` set('Licenciatura','Ingeniería','Maestría','Posgrado','Doctorado') COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cat_carrera`
--

INSERT INTO `cat_carrera` (`id_carrera`, `nivel`, `nombre`, `area`) VALUES
(1, 'Licenciatura', 'Administración', 'DCSH'),
(2, 'Licenciatura', 'Biología Molecular', 'DCNI'),
(3, 'Licenciatura', 'Ciencias de la Comunicación', 'DCCD'),
(4, 'Licenciatura', 'Derecho', 'DCSH'),
(5, 'Licenciatura', 'Diseño', 'DCCD'),
(6, 'Ingeniería', 'Ingeniería Biológica', 'DCNI'),
(7, 'Ingeniería', 'Ingeniería en Computación', 'DCNI'),
(8, 'Licenciatura', 'Estudios Socioterritoriales', 'DCSH'),
(9, 'Licenciatura', 'Humanidades', 'DCSH'),
(10, 'Maestría', 'Maestría en Ciencias Sociales y Humanidades', 'DCSH'),
(11, 'Maestría', 'Maestría en Diseño, Información y Comunicación', 'DCCD'),
(12, 'Licenciatura', 'Matemáticas Aplicadas', 'DCNI'),
(13, 'Licenciatura', 'Tecnologías y Sistemas de Información', 'DCCD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacio_disponible`
--

CREATE TABLE `espacio_disponible` (
  `id_espacio` int(11) NOT NULL,
  `id_organizacion` int(11) NOT NULL,
  `licenciatura` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `area_proyecto` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividad` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `modalidad_part` set('Tres a uno','Individual','Sin especificar') COLLATE utf8_spanish_ci DEFAULT NULL,
  `modalidad_trabajo` set('Presencial','Híbrida','Home office','Sin especificar') COLLATE utf8_spanish_ci DEFAULT NULL,
  `apoyo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lugares` int(11) NOT NULL DEFAULT 0,
  `requisitos` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dt_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `espacio_disponible`
--

INSERT INTO `espacio_disponible` (`id_espacio`, `id_organizacion`, `licenciatura`, `area_proyecto`, `actividad`, `modalidad_part`, `modalidad_trabajo`, `apoyo`, `lugares`, `requisitos`, `dt_create`) VALUES
(1, 1, 'Administración', 'Recursos Humanos. Recursos Materiales y Servicios. Dirección de Enseńanza y Divulgación', 'Organización, clasificación y depuración de archivos gubernamentales.Implementación y programas para autogeneración de recursos.Búsqueda y organización de información. Apoyo en actividades de diversas áreas funcionales del Instituto.', 'Individual', 'Presencial', NULL, 3, 'N/A', '0000-00-00 00:00:00'),
(2, 1, 'Derecho', 'Direcciones \ndel Instituto', 'Apoyo en la fiscalización de procesos administrativos y en la vigilancia del cumplimiento de las obligaciones y el apego a la legalidad de los servidores públicos en el desempeńo de sus funciones, Lectura, revisión y clasificación de convenios, certi', 'Individual', 'Presencial', NULL, 4, 'N/A', '0000-00-00 00:00:00'),
(3, 1, 'Diseńo', 'Subdirección. Información y Documentación', 'Participación en proyectos de diseńo institucional y comunicación editorial. Búsqueda de imágenes, digitalización de documentos, retoque fotográfico. Elaboración de folletos informativos, carteles, seńalamientos, invitaciones, manuales, etc. Apoyo en', 'Individual', 'Presencial', NULL, 6, 'N/A', '0000-00-00 00:00:00'),
(4, 1, 'Ciencias de la Comunicación', 'Subdirección Información y  Documentación', 'Apoyo en actividades de producción televisiva y radiofónica. Elaboración de guiones, podcats promocionales, reporteajes y locución', 'Individual', 'Presencial', NULL, 4, 'N/A', '0000-00-00 00:00:00'),
(5, 2, 'Diseńo', 'Área de comunicación con egresados', 'Colaborar con la directora de Alumni en proyectos y acciones de comunicaciones dirigidos a la comunidad Alumni de Enseńa por México. Gestión de las redes sociales (Facebook, LinkedIn, Instagram). Creación de contenidos visuales (videos e infografías)', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(6, 2, 'Maestría en Diseńo, Información y Comunicación', '', '', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(7, 3, 'Diseńo', 'Diseńo gráfico', 'Aprender el sistema de diseńo en empaques, material punto de venta, folletería, diseńo editorial.', 'Individual', 'Híbrida', NULL, 0, 'N/A', '0000-00-00 00:00:00'),
(8, 4, 'Biología Molecular', 'Evaluación in vitro e in vivo de compuestos anti-Toxoplasma', 'Estandarización de técnicas de biología molecular. Revisión bibliográfica. Ensayos de expresión génica de dianas farmacológicas', 'Tres a uno', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(9, 4, 'Ingeniería Biológica', '', '', 'Sin especificar', 'Sin especificar', NULL, 1, '', '0000-00-00 00:00:00'),
(10, 4, 'Biología Molecular', 'Estudio in vitro/in vivo de compuestos activos', 'Manejo de animales de laboratorio. Mantenimiento de la cepa RH de T. gondii.Técnicas de microscopia, tinciones/fluorescencia', 'Tres a uno', 'Presencial', NULL, 0, 'N/A', '0000-00-00 00:00:00'),
(11, 4, 'Ingeniería Biológica', '', '', 'Sin especificar', 'Sin especificar', NULL, 0, '', '0000-00-00 00:00:00'),
(12, 4, 'Biología Molecular', 'Estudio in vivo de compuestos activos', 'Técnicas de histología, inmunohistoquímica. Cortes en microtomo microscopia.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(13, 5, 'Diseńo', 'Diseńo', 'Elaboración de materiales para medios electrónicos', 'Sin especificar', 'Home office', NULL, 3, 'N/A', '0000-00-00 00:00:00'),
(14, 5, 'Ciencias de la Comunicación', 'Comunicación', 'Gestión y diseńo de comunicación en medios electrónicos', 'Sin especificar', 'Home office', NULL, 3, 'N/A', '0000-00-00 00:00:00'),
(15, 5, 'Ingeniería en Computación', 'Sistemas', 'Desarrollo de software para procesos editoriales', 'Sin especificar', 'Home office', NULL, 3, 'N/A', '0000-00-00 00:00:00'),
(16, 5, 'Administración', 'Administración', 'Integración de procesos editoriales', 'Sin especificar', 'Home office', NULL, 3, 'N/A', '0000-00-00 00:00:00'),
(17, 6, 'Biología Molecular', 'Perfil de expresión de microRNAs en la embriopatía diabética en rata, un análisis funcional', 'Obtención de suero materno y embriones. Extracción de RNA. Perfil de expresión por secuenciación de microRNAs', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(18, 6, 'Biología Molecular', 'Análisis del efecto de los frutoboratos en la hipertrofia cardiaca', 'Determinar el dańo cardiotóxico del frutoborato administrado en ratones de 6 semanas. Analizar los cambios fisiológicos, anatómicos, histológicos y el nivel de estrés oxidativo del corazón de ratones de 6 semanas con frutoboratos.', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(19, 6, 'Biología Molecular', 'Evaluación del efecto de la reversión sexual en gónadas y', 'Obtención de alevinos. Procedimiento histológico. Western blot. Extracción ARN', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(20, 7, 'Diseńo', 'Diseńo', 'Elaborción de cortinillas, carátulas y postales de difusión del deminario en línea Antropología, Historia, Conservación y Documentación de la música en México y el mundo 2023.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(21, 7, 'Humanidades', 'Humanidades', 'Aprendizajes de enfoque para el análisis de la estructura musical de las músicas tradicionales y populares.Conocimiento de géneros y agrupaciones para la tipificación de músicas de tradición oral.Identificación de géneros y provenencias culturales de', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(22, 7, 'Estudios Socioterritoriales', 'Estudios Socioterritoriales', 'Aplicación de técnicas para la entrevista con músicos de tradición oral. Identificación de fuentes documentales que permitan reconstruir el contexto histórico de músicas tradicionales.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(23, 8, 'Diseńo', 'Marketing', 'Creación de contenido para redes sociales, ventas. Publicidad impresa. Diseńos para sitio web.Diseńo para comunicación interna', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(24, 8, 'Ciencias de la Comunicación', 'Recursos Humanos y Marketing', 'Comunicación Interna. Reclutamiento. Campańas de beneficios internos. Capacitaciones y Onboarding', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(25, 9, 'Diseńo', 'Cuentas', 'Seguimiento a clientes, llamadas con clientes, revisión de proyectos, planeación, creación de cotizaciones, creación de centros de costos y organización, ilustración, edición de video/audio.', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(26, 9, 'Ciencias de la Comunicación', '', '', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(27, 9, 'Ingeniería en Computación', 'Modulo del desarrollo de una aplicación financiera', 'El proyecto estará desarrollado con JavaScript y PHP para el lenguaje del backEnd y del FrontEnd.El frameWork para el BackEnd será Laravel 8 en sus últimas versiones. El frameWork para el FrontEnd será BootStrap. Laravel últimas versiones', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(28, 9, 'Tecnologías y Sistemas de Información', '', '', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(29, 10, 'Ciencias de la Comunicación', 'Editorial modernidades - revista venture cinespoilers', 'Creación de contenidos escritos usando SEO, coberturas informativas presenciales en eventos culturales como obras de teatro, funciones de prensa en cines, presentaciones de libros y entrevistas a productores independientes.', 'Individual', 'Híbrida', NULL, 10, 'N/A', '0000-00-00 00:00:00'),
(30, 10, 'Diseńo', 'Social media', 'Realización de contenidos y gestión de comunidades en social media. El colaborador aprenderá a posicionar contenidos y a realizar artes usando su creatividad, semiótica y aptitudes, desde videos, infografías, audios y copywriting.', 'Individual', 'Home office', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(31, 10, 'Humanidades', 'Editorial modernidades - revista venture cinespoilers', 'Creación de contenidos escritos usando SEO, coberturas informativas presenciales en eventos culturales como obras de teatro, funciones de prensa en cines, presentaciones de libros y entrevistas a productores independientes.', 'Individual', 'Híbrida', NULL, 10, 'N/A', '0000-00-00 00:00:00'),
(32, 11, 'Diseńo', 'Coordinación de Comunicación y Diseńo', 'Apoyo con campańas, Impulsar redes sociales, Trabajo de investigación para sustentar campańas, investigación para crear información relevante para personas migrantes y reguagidas que será difundida en la webapp, Diseńo diseńo gráfico y editorial de l', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(33, 11, 'Ciencias de la Comunicación', '', '', 'Individual', 'Híbrida', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(34, 11, 'Administración', 'Coordinación de Administración', 'Archivo contable y administrativo, Codificación de contabilidad, Apoyo en elaboración de presupuestos, apoyo en cumplimiento de obligaciones fiscales, conciliaciones bancarias, informes financieros.', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(35, 11, 'Derecho', 'Subcoordinación legal', 'Impulsar la integración en México de migrantes y refugiados asistidos por SF, así como asegurar que migrantes, refugiados y sus familias en condiciones de vulnerabilidad tengan una situación de estancia regular en México y puedan optar por soluciones', 'Individual', 'Híbrida', NULL, 5, 'N/A', '0000-00-00 00:00:00'),
(36, 11, 'Humanidades', 'Gestión institucional y de proyectos', 'Elaboración de propuestas para búsqueda de nuevos financiamientos, Revisión de convocatorias, análisis costo-beneficio para determinar nuestra postulación, Organización de información relacionada con los proyectos en marcha, Actualización de bases de', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(37, 11, 'Estudios Socioterritoriales', '', '', 'Individual', 'Híbrida', NULL, 4, 'N/A', '0000-00-00 00:00:00'),
(38, 11, 'Humanidades', 'Subcoordinación de atención psicosocial', 'Promoción de actividades que inviten a la reflexión sobre discriminación, problemas de entendimiento cultural y establecimiento de nuevas redes de intercambio entre la población, Establecer contactos y dar seguimiento al trabajo interinstitucional y ', 'Individual', 'Híbrida', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(39, 11, 'Estudios Socioterritoriales', '', '', 'Individual', 'Híbrida', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(40, 12, 'Diseńo', 'Diseńo Web', 'Desarrollar diseńo, portal, área de contacto y formulario de solicitud de información. Además de galerías y desarrollos de plan de estudios.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(41, 12, 'Ciencias de la Comunicación', 'Campańa Publicitaria Ciclo escolar 02 2023', 'Se llevará a cabo el desarrollo, diseńo y ejecución de una campańa publicitaria en medios sociales, escritos y electrónicos para el nuevo inicio de ciclo en septiembre del presente ańo.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(42, 13, 'Biología Molecular', 'Biogerontología Experimental y Teórica', 'Realizar diversos análisis de bases de datos secundarias de diversos proyectos asociados a distintos proyectos en envejecimiento.Realizar diversos análisis bioinformáticos asociados a proyectos genómicos con datos del laboratorio.Apoyar las metodolog', 'Individual', 'Presencial', NULL, 0, 'N/A', '0000-00-00 00:00:00'),
(43, 13, 'Ingeniería Biológica', '', '', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(44, 14, 'Ciencias de la Comunicación', 'Comunicación Social', 'Tomar evidencia fotográfica. Determinar estratégias de comunicación pública y fortalecimiento de la imagen institucional.Generar estrategias de comunicación difusión y divulgación oportunas, acordes a las metas de cada investigación. Elaborar materia', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(45, 14, 'Humanidades', 'Políticas Públicas', 'Implementación de talleres, etnografías, grupos de enfoque.Tomar notas y evidencia. Apoyo en el desarrollo de diagnósticos sociales multidisciplinarios.Apoyo en la generación de soluciones para problemáticas sociales.Generación de reportes.', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(46, 14, 'Estudios Socioterritoriales', '', '', 'Sin especificar', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(47, 14, 'Maestría en Ciencias Sociales y Humanidades', '', '', 'Sin especificar', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(48, 15, 'Humanidades', 'Reclutamiento', 'Prospección y reclutamiento de candidatos, labores administrativas, entrevistas de trabajo, manejo de base de datos.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(49, 15, 'Ingeniería en Computación', 'Desarrollo', 'Se requiere conocimiento en ASP.NET MVC 5 o superior, Power Platform (Power BI, Power Apps, Power Automate), Consumo y creación de Web Services, API\'s, Bases de datos de Microsoft SQL Server.\nCreación y diseńo de sistemas sobre tecnología Microsoft d', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(50, 15, 'Ciencias de la Comunicación', 'Ventas', 'Prospección, seguimiento y cierre de ventas, atención a cliente vía telefónica y face to face.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(51, 15, 'Administración', 'Administración (Sucursal Satélite)', 'Arqueos y cortes de terminal punto de venta, aplicación diaria de ingresos y cuentas por cobrar, supervisión y control de áreas de mantenimiento, limpieza y seguridad, administrar plataformas académicas, profesores, padres de familia y alumnado, soli', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(52, 16, 'Administración', 'Administración, Liquidación y Enajenación de Bienes y Empresas', 'Apoyar en las funciones de comercialización.Actualizar la información y capturar en los sistemas institucionales. Ordenar, integrar y digitalizar información documental. Apoyar en actividades administrativas de oficina.Revisión y actualizar de manual', 'Individual', 'Presencial', NULL, 5, 'N/A', '0000-00-00 00:00:00'),
(53, 16, 'Derecho', 'Administración, Liquidación y Enajenación de Bienes y Empresas', 'Analizar jurídicamente la documentación proveniente de las Entidades Externas. Analizar expedientes relacionados con los bienes, recuperación de cartera, fideicomisos, entidades transferentes, demandas, otros. Elaborar proyectos de oficios, dictámene', 'Individual', 'Presencial', NULL, 5, 'N/A', '0000-00-00 00:00:00'),
(54, 16, 'Ingeniería en Computación', 'Administración, Liquidación y Enajenación de Bienes y Empresas', 'Apoyar en los planes de tecnologías de la información y comunicaciones. Apoyar en el soporte y mantenimiento de equipos. Apoyar en las actividades administrativas para el envío de documentación interna y externa. Apoyar en la elaboración de bases de ', 'Individual', 'Presencial', NULL, 5, 'N/A', '0000-00-00 00:00:00'),
(55, 16, 'Tecnologías y Sistemas de Información', 'Administración, Liquidación y Enajenación de Bienes y Empresas', 'Apoyo en el tratamiento rápido de la información. Apoya con la seguridad de ordenadores mediante programas informáticos. Integrar aplicaciones informáticas. Manejar ordenadores que conecten la informática con los diferentes departamentos. Apoyar con ', 'Individual', 'Presencial', NULL, 5, 'N/A', '0000-00-00 00:00:00'),
(56, 17, 'Estudios Socioterritoriales', 'Ciudades del Futuro', 'Colaboración en investigaciones y análisis sobre temas relevantes en materia de desarrollo urbano y sostenible para diversos proyectos realizados en el área. Colaboración en el desarrollo, redacción y/o presentación de reportes de investigación. Cola', 'Individual', 'Híbrida', NULL, 2, 'La estancia deberá iniciar en mayo.', '0000-00-00 00:00:00'),
(57, 17, 'Ciencias de la Comunicación', 'Comunicación', 'Seguimiento de la agenda mediática en temas de anticorrupción, finanzas públicas, desarrollo sostenible, inclusión y ciudades del futuro. Apoyo en la actualización de la base de datos de periodistas, columnistas, conductores, editores y directores de', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(58, 18, 'Diseńo', 'Diseńo', 'Generar dibujos técnica e instructivos visuales de las lineas de fabricación existenten en Merka.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(59, 19, 'Ciencias de la Comunicación', 'Mercadotecnia', 'Apoyo en la organización y creación de bases de datos y planes de marketing.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(60, 19, 'Administración', '', '', 'Sin especificar', 'Sin especificar', NULL, 2, '', '0000-00-00 00:00:00'),
(61, 19, 'Administración', 'Recursos Humanos', 'Apoyo en la creación de planes de desarrolo y capacitación de la organización.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(62, 19, 'Ciencias de la Comunicación', 'Comunicación', 'Apoyo en la creación de contenido para redes sociales.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(63, 20, 'Ingeniería en Computación', 'Desarrollo de información y bases de datos', 'Procesos de ETL, administración, procesamiento de datos y reportes.', 'Individual', 'Home office', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(64, 20, 'Matemáticas Aplicadas', 'Desarrollo de información y bases de datos', 'Limpieza de bases de datos, análisis, modelado de datos y visualizaciones.', 'Individual', 'Home office', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(65, 20, 'Tecnologías y Sistemas de Información', 'Desarrollo de información y bases de datos', 'Procesamiento y análisis de datos, desarrollo de modelos para extracción de datos (web scraping).', 'Individual', 'Home office', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(66, 20, 'Ciencias de la Comunicación', 'Business Development', 'Selección de noticias dentro de la industria educativa, Manejo de sistema Customer relations management (CRM), Edición de podcast, Community Management.', 'Individual', 'Home office', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(67, 20, 'Diseńo', 'Business Development', 'Generación de contenido audiovisual. Graficas, presentaciones, infografías y videos relacionadas a resultados de investigaciones e información en el sector educativo en México', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(68, 21, 'Matemáticas Aplicadas', 'Análisis de Datos de negocio', 'Análisis estadísticos, generación de indicadores y monitoreo de comportamientos y tendencias.Generación de Dashboards. Análisis de métricas e indicadores, proveer conclusiones y/o detección de áreas de oportunidad basado en tendencias. Elaboración, a', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(69, 22, 'Derecho', 'Legal', 'Revisión y apoyo en la elaboración de contratos laborales y mercantiles.Compilación de documentos en carpetas (compliance). Seguimiento a propiedad intelectual y registro de obras.', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(70, 22, 'Tecnologías y Sistemas de Información', 'Tecnologías de la Información', 'Dar seguimiento a las necesidades tecnológicas que se requieran para asegurar la funcionalidad de las herramientas que ayuden a cumplir los objetivos de la organización y sus programas. Gestión de mantenimiento de cómputo y redes. Apoyar en el fortal', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(71, 23, 'Ingeniería en Computación', 'Desarrollo de\nAplicaciones', 'Apoyo de desarrollo de aplicaciones móviles y web. Apoyo en testing de las aplicaciones móviles y web.', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(72, 23, 'Matemáticas Aplicadas', '', '', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(73, 23, 'Tecnologías y Sistemas de Información', '', '', 'Individual', 'Home office', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(74, 24, 'Maestría en Ciencias Sociales y Humanidades', 'AREA SOCIOEDUCATIVO\nModulo de Identidad', 'Acompańar a facilitadores en sus procesos para desarrollar habilidades de expresión y contribuir en las diferentes actividades de cada bloque y teniendo como resultado que los participantes expresen y construyan procesos de participación social y cul', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(75, 24, 'Humanidades', '', '', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(76, 24, 'Estudios Socioterritoriales', '', '', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(77, 24, 'Ciencias de la Comunicación', 'Comunicación', 'Acompańar al facilitador en diseńar y transmitir infografías, videos socioeducativos, difusión de capacitaciones, manejo de redes sociales, entre otras actividades, para fortalecer la comunicación interna y externa de la Organización con un enfoque h', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(78, 24, 'Diseńo', '', '', 'Individual', 'Presencial', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(79, 25, 'Diseńo', 'Comercial / Editorial', 'Diseńos comerciales, diseńo editorial, diseńo institucional.', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(80, 25, 'Administración', 'Administrativa', 'Análisis financieros, relación de gastos e ingresos y apoyo administrativo.', 'Individual', 'Presencial', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(81, 26, 'Derecho', 'Jurídico', 'Apoyo con las actividades de litigio interno e internacional.', 'Individual', 'Híbrida', NULL, 2, 'N/A', '0000-00-00 00:00:00'),
(82, 26, 'Derecho', 'Desarrollo Institucional', 'Apoyo en las actividades de recaudación de fondos y proyectos con donantes internacionales.', 'Individual', 'Home office', NULL, 1, 'N/A', '0000-00-00 00:00:00'),
(83, 26, 'Ciencias de la Comunicación', 'Comunicación', 'Apoyo con la estrategia de comunicación y manejo de redes sociales.', 'Individual', 'Híbrida', NULL, 1, 'N/A', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `a_paterno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `a_materno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `matricula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `licenciatura` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `creditos` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `cretate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `id_org` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dt_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`id_org`, `nombre`, `direccion`, `dt_create`, `estatus`) VALUES
(1, 'Instituto Nacional de Medicina Genómica (INMEGEN)', 'Periférico Sur 4809, Col. Arenal Tepepan, Alcaldía Tlalpan, C.P. 14610 CDMX', '2023-05-15 18:17:50', 1),
(2, 'Enseńa por México A.C.', 'Londres 241, Juárez, Cuauhtémoc, 06600, CDMX', '2023-05-15 18:17:50', 1),
(3, 'De la O & Asociados Diseńo S.A. de C.V.', 'Río Nilo 61, Alcaldía Cuahutémoc', '2023-05-15 18:17:50', 1),
(4, 'Lab. de Apicomplexas, UNAM', 'Circuito Interior, Ciuedad Universitaria, Av. Universidad 3000, CP 04510.', '2023-05-15 18:17:50', 1),
(5, 'Editorial De Otro Tipo', '1ra Cerrada de Mariano Abasolo No. 10B Col. Santa María Tepepan, Xochimilco. C.P. 16020', '2023-05-15 18:17:50', 1),
(6, 'Hospital Infantil de México Federico Gómez', 'Dr. Márquez 162, Col. Doctores, Alcadía Cuauhtémoc', '2023-05-15 18:17:50', 1),
(7, 'Instituto Nacional de Antropología e Historia (INAH)', 'Córdoba 47, Col. Roma Norte, Alcaldía Cuahutémoc.', '2023-05-15 18:17:50', 1),
(8, 'Barroso Mayorga & Asociados', 'Lateral de la Recta Cholula, 7915, Local 104, Sta Cruz Buenavista, 72150 Puebla, Pue.', '2023-05-15 18:17:50', 1),
(9, 'Hello México', 'Camino de la Secretaría A, No. Ext. 77, Campestre Aragón, GAM, CDMX.', '2023-05-15 18:17:50', 1),
(10, 'Editorial Modernidades', 'Montecito 38, piso 9, World Trade Center, Ciudad de México', '2023-05-15 18:17:50', 1),
(11, 'Sin Fronteras I.A.P.', 'Carlos Dolci 96, Alfonso XIII, C.P. 01460, Álvaro Obregón, CDMX', '2023-05-15 18:17:50', 1),
(12, 'Escuela de Diseńo Aplicado a la Indumentaria y Moda', 'José María Morelos #87, Col. San Lucas Tepetlacalco, 54055, Estado de México', '2023-05-15 18:17:50', 1),
(13, 'Instituto Nacional de Geriatría (INGER)', 'Av. Contreras 428, Col. San Jerónimo Lídice,\nAlcaldía La Magdalena Contreras, Ciudad de México C.P. 10200', '2023-05-15 18:17:50', 1),
(14, 'Nosótrikas Tik.-Tank', 'Serapio Rendón 63, oficina 1, Col. San Rafael, Ciudad de México, Alcaldía Cuauhtémoc, C.P. 06470', '2023-05-15 18:17:50', 1),
(15, 'The Anglo Mexican Foundation', '', '2023-05-15 18:17:50', 1),
(16, 'Instituto para Devolver al Pueblo lo Robado (INDEP)', 'Av. Insurgentes Sur 1931, Colonia Guadalupe Inn, CP. 01020', '2023-05-15 18:17:50', 1),
(17, 'Ethos Laboratorio de Políticas Públicas A.C.', 'Montes Urales  No. 24, Col. Lomas de Chapultepec, C.P. 11000', '2023-05-15 18:17:50', 1),
(18, 'Merka Med Desechables S.A. de C.V.', 'Manuel Acuńa 80, Jacarandas, Iztapalapa, 09280 Ciudad de México, CDMX.', '2023-05-15 18:17:50', 1),
(19, 'UNIMEDIOS', 'Santa Fe 505, Piso 16 ', '2023-05-15 18:17:50', 1),
(20, 'Discierne', 'Insurgentes Sur 682, int 703 B, Col del Valle.', '2023-05-15 18:17:50', 1),
(21, 'Resa y Asociados S.C.', 'Insurgentes sur 1605 piso 12 Col. San José Insurgentes', '2023-05-15 18:17:50', 1),
(22, 'Educación para Compartir A.C.', 'Av. Patriotismo 889 piso 8, Insurgentes Mixcoac, Benito Juárez, CDMX, 03920', '2023-05-15 18:17:50', 1),
(23, 'Vanglar SAPI de CV', 'Av. Patriotismo 767, piso 6, San Juan, 03730, Ciudad de México, CDMX.', '2023-05-15 18:17:50', 1),
(24, 'Desarrollo Educativo Suenińos A.C.', 'Periferico Norte #1D Col. Ojo Agua C.P. 29210 San Cristobal de las Casas, Chiapas.', '2023-05-15 18:17:50', 1),
(25, 'Publimetro Querétaro', 'Av. Salvación 791 Int. 103 Plaza Levant Torre C, Menchaca 76147.', '2023-05-15 18:17:50', 1),
(26, 'IDHEAS, Litigio Estratégico en derechos humanos, A.C.', 'Calle 21, 77. San Pedro de Los Pinos. Benito Juárez, CDMX, 03800.', '2023-05-15 18:17:50', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tp_user` int(11) NOT NULL DEFAULT 1,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`id_org`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
