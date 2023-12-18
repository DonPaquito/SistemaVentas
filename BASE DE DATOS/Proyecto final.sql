-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2023 a las 05:40:55
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
-- Base de datos: `profinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Procesadores', 'Unidades de procesamiento para computadoras', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(2, 'Tarjetas Gráficas', 'Componentes para renderizar gráficos', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'Memoria RAM', 'Memoria de acceso aleatorio para almacenar datos temporalmente', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(4, 'Almacenamiento', 'Dispositivos de almacenamiento para guardar datos', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(5, 'Placas Base', 'Placas principales para ensamblar componentes', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(6, 'Fuentes de Poder', 'Suministro de energía para los componentes', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(7, 'Periféricos', 'Accesorios adicionales para computadoras', '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudads`
--

CREATE TABLE `ciudads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudads`
--

INSERT INTO `ciudads` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Lima', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(2, 'Arequipa', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'Trujillo', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(4, 'Cusco', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(5, 'Piura', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(6, 'Iquitos', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(7, 'Chiclayo', '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `direccion`, `fecha_nacimiento`, `id_documento`, `id_ciudad`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Pérez', 'Av. 123, Lima', '1990-05-15', 1, 1, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(2, 'Ana', 'Gómez', 'Jr. ABC, Arequipa', '1985-08-22', 2, 2, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'Carlos', 'López', 'Calle XYZ, Trujillo', '1992-03-10', 3, 3, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(4, 'Luisa', 'Torres', 'Av. 456, Cusco', '1988-11-18', 4, 4, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(5, 'Elena', 'Sánchez', 'Jr. ZZZ, Piura', '1995-07-01', 5, 5, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(6, 'Miguel', 'Rodríguez', 'Calle KLM, Iquitos', '1980-12-05', 6, 6, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(7, 'Karla', 'Vargas', 'Av. UVW, Chiclayo', '1998-02-28', 7, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Procesador Intel Core i7', 'Potente procesador para alto rendimiento', 350, 49, 1, '2023-12-18 04:04:14', '2023-12-18 09:40:28'),
(2, 'Tarjeta Gráfica NVIDIA GeForce RTX 3080', 'Para experiencias gráficas excepcionales', 800, 30, 2, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'Memoria RAM Corsair Vengeance 16GB', 'Rápida memoria para un rendimiento fluido', 120, 100, 3, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(4, 'SSD Samsung 1TB', 'Unidad de estado sólido para almacenamiento rápido', 150, 80, 4, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(5, 'Placa Base ASUS ROG Strix B550', 'Placa base de alta gama para gaming', 250, 40, 5, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(6, 'Fuente de Poder EVGA 750W', 'Suministro de energía confiable', 100, 60, 6, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(7, 'Mouse Logitech G502', 'Periférico gaming con sensor de alta precisión', 60, 120, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(8, 'Teclado mecánico Corsair K70', 'Teclado mecánico para una experiencia de escritura superior', 120, 80, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(9, 'Monitor ASUS ROG Swift PG279Q', 'Monitor gaming con frecuencia de actualización de 144Hz', 500, 20, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(10, 'Disco Duro Externo WD Elements 2TB', 'Almacenamiento externo para respaldo de datos', 80, 50, 4, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(11, 'Router TP-Link Archer C7', 'Router de doble banda para una conexión estable', 90, 30, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(12, 'Impresora HP LaserJet Pro', 'Impresora láser para impresiones rápidas y de calidad', 200, 15, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(13, 'Tarjeta de Sonido Creative Sound Blaster Z', 'Mejora la calidad de audio para gamers y creadores', 100, 25, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(14, 'Webcam Logitech C920', 'Cámara web de alta definición para videoconferencias', 70, 40, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(15, 'Auriculares HyperX Cloud II', 'Auriculares con sonido envolvente para gaming', 90, 59, 7, '2023-12-18 04:04:14', '2023-12-18 09:40:28'),
(16, 'Silla gaming AKRacing Masters Series Pro', 'Silla ergonómica para largas sesiones de juego', 250, 10, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(17, 'Estabilizador de Voltaje APC', 'Protege tus dispositivos de fluctuaciones eléctricas', 50, 50, 6, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(18, 'Cámara Canon EOS 90D', 'Cámara DSLR para fotógrafos aficionados', 1200, 8, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(19, 'Proyector Epson Home Cinema 5050UB', 'Proyector 4K para experiencias cinematográficas', 2000, 5, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(20, 'Micrófono Blue Yeti USB', 'Micrófono de alta calidad para grabaciones y transmisiones', 120, 30, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(21, 'Laptop Dell XPS 15', 'Laptop potente para usuarios exigentes', 1500, 15, 7, '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id`, `id_venta`, `id_producto`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-12-18 09:40:28', '2023-12-18 09:40:28'),
(2, 1, 15, 1, '2023-12-18 09:40:28', '2023-12-18 09:40:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `nombre`, `descripcion`, `codigo`, `created_at`, `updated_at`) VALUES
(1, 'DNI', 'Documento Nacional de Identidad', '001', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(2, 'Pasaporte', 'Documento de identificación internacional', '002', '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'Carné de Extranjería', 'Documento para residentes extranjeros', '003', '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `sueldo` double NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `direccion`, `sueldo`, `id_documento`, `id_ciudad`, `created_at`, `updated_at`) VALUES
(1, 'Pedro', 'García', '1987-04-25', 'Av. QWE, Lima', 2000, 1, 1, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(2, 'María', 'Martínez', '1985-02-15', 'Jr. DEF, Arequipa', 2200, 2, 2, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'Jorge', 'Ramírez', '1990-09-08', 'Calle XYZ, Trujillo', 1800, 3, 3, '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_16_224648_create_clientes_table', 1),
(7, '2023_12_16_224820_create_ventas_table', 1),
(8, '2023_12_16_225056_create_proveedors_table', 1),
(9, '2023_12_16_225125_create_componentes_table', 1),
(10, '2023_12_17_222613_create_empleados_table', 1),
(11, '2023_12_17_222642_create_categorias_table', 1),
(12, '2023_12_17_222714_create_ciudads_table', 1),
(13, '2023_12_17_222739_create_detalle_ventas_table', 1),
(14, '2023_12_17_222757_create_documentos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedors`
--

CREATE TABLE `proveedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedors`
--

INSERT INTO `proveedors` (`id`, `nombre`, `descripcion`, `id_ciudad`, `id_documento`, `created_at`, `updated_at`) VALUES
(1, 'TecnoPro', 'Proveedor de productos tecnológicos', 1, 1, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(2, 'InfoTech', 'Especialistas en soluciones informáticas', 2, 2, '2023-12-18 04:04:14', '2023-12-18 04:04:14'),
(3, 'CompSoluciones', 'Ofrecemos soluciones en hardware y software', 3, 3, '2023-12-18 04:04:14', '2023-12-18 04:04:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adolfo', 'adolfoaroni@gmail.com', NULL, '$2y$12$Yk09pPnRyb32P8CYozpRwuo..kS5JDvFOrYGxL3tGgVjc3eP0GYgC', NULL, '2023-12-18 09:30:48', '2023-12-18 09:30:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numVenta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `numVenta`, `id_cliente`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 41, 6, '2023-05-30', '2023-12-18 09:40:28', '2023-12-18 09:40:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
