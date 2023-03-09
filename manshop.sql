-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 02:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_cart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`, `item_cart`) VALUES
(1, 'Power', 'Adaptor LG 12v 2A', 30000, './img/product/Adaptor_LG_12v_2A.jpg', '2021-12-12 01:59:49', './img/cart/Adaptor_LG_12v_2A.jpg'),
(2, 'Mikrokontroller', 'Arduino Nano', 53000, './img/product/arduino_nano.jpg', '2021-12-12 02:02:08', './img/cart/arduino_nano.jpg'),
(3, 'Support Item', 'BreadBoard 830 Tie Points', 45000, './img/product/BreadBoard_830_tie-points.jpg', '2021-12-12 02:02:08', './img/cart/BreadBoard_830_tie-points.jpg'),
(4, 'Aktuator', 'Buzzer Continuous Tune 12v DC', 6000, './img/product/Buzzer_Continuous_Tune_12v_DC.jpg', '2021-12-12 02:07:22', './img/cart/Buzzer_Continuous_Tune_12v_DC.jpg'),
(5, 'Support Item', 'Kabel Jumper Male to Male 20Cm', 15000, './img/product/Kabel_Jumper Male_to_Male.jpg', '2021-12-12 02:07:22', './img/cart/Kabel_Jumper Male_to_Male.jpg'),
(6, 'Support Item', 'Kabel Jumper Female to Female 20Cm', 15000, './img/product/Kabel_Jumper_Female_to_Female.jpg', '2021-12-12 02:12:54', './img/cart/Kabel_Jumper_Female_to_Female.jpg'),
(7, 'Aktuator', 'Mini Water pump 2.5-6v', 24000, './img/product/Mini_water_pump_2.5-6v.jpg', '2021-12-12 02:20:01', './img/cart/Mini_water_pump_2.5-6v.jpg'),
(8, 'Aktuator', 'Module Laser KY 008', 9000, './img/product/Module_Sensor_Laser_KY_008.jpg', '2021-12-12 02:20:01', './img/cart/Module_Sensor_Laser_KY_008.jpg'),
(9, 'Aktuator', 'Motor Servo 9g', 15000, './img/product/Motor_Servo.jpg', '2021-12-12 02:24:29', './img/cart/Motor_Servo.jpg'),
(10, 'Support Item', 'Resistor 220 OHM', 1000, './img/product/Resistor_220_OHM_1_per_4_Watt.jpg', '2021-12-12 02:24:29', './img/cart/Resistor_220_OHM_1_per_4_Watt.jpg'),
(11, 'Sensor', 'Sensor Inframerah', 7500, './img/product/Sensor_Inframerah.jpg', '2021-12-12 02:27:29', './img/cart/Sensor_Inframerah.jpg'),
(12, 'Support Item', 'USB Cable data for Arduino Nano', 15000, './img/product/USB_Cable_data_for_Arduino_Nano.jpg', '2021-12-12 02:27:29', './img/cart/USB_Cable_data_for_Arduino_Nano.jpg'),
(13, 'Mikrokontroller', 'arduino Uno R3', 110000, './img/product/arduino_uno_r3.jpg', '2021-12-12 02:32:29', './img/cart/arduino_uno_r3.jpg'),
(14, 'Mikrokontroller', 'ARM mbed NXP LPC1768 Development Board', 1150000, './img/product/ARM_mbed_NXP_LPC1768_Development_Board.jpg', '2021-12-12 02:32:29', './img/cart/ARM_mbed_NXP_LPC1768_Development_Board.jpg'),
(15, 'Sensor', 'Gas Sensor', 25000, './img/product/gas_sensor.jpg', '2021-12-12 02:36:04', './img/cart/gas_sensor.jpg'),
(16, 'Support Item', 'Kabel Female to Male 20Cm', 15000, './img/product/kabel_female_to_male.jpg', '2021-12-12 02:36:04', './img/cart/kabel_female_to_male.jpg'),
(17, 'Display', 'Modul Display LCD 16x2', 36000, './img/product/modul_display_LCD_16x2.jpg', '2021-12-12 02:38:38', './img/cart/modul_display_LCD_16x2.jpg'),
(18, 'Sensor', 'Modul Sensor Cahaya LDR', 8000, './img/product/Modul_Sensor_Cahaya_LDR.jpg', '2021-12-12 02:38:38', './img/cart/Modul_Sensor_Cahaya_LDR.jpg'),
(19, 'Sensor', 'Modul Sensor Suhu dan Kelembaban DHT11', 17000, './img/product/Modul_Sensor_Suhu_dan_Kelembaban_DHT11.jpg', '2021-12-12 02:38:38', './img/cart/Modul_Sensor_Suhu_dan_Kelembaban_DHT11.jpg'),
(20, 'Sensor', 'Pir Sensor', 20000, './img/product/pir_sensor.jpg', '2021-12-12 02:38:38', './img/cart/pir_sensor.jpg'),
(21, 'Mikrokontroller', 'Raspberry Pi® Microcontroller RP-PICO', 150000, './img/product/Raspberry_Pi®_Microcontroller_RP-PICO_Raspberry_Pi®_Pico.jpg', '2021-12-12 02:38:38', './img/cart/Raspberry_Pi®_Microcontroller_RP-PICO_Raspberry_Pi®_Pico.jpg'),
(22, 'Sensor', 'Sensor Suhu lm35', 14000, './img/product/Sensor_suhu_lm35.jpg', '2021-12-12 02:38:38', './img/cart/Sensor_suhu_lm35.jpg'),
(23, 'Mikrokontroller', 'STM32 F030', 40000, './img/product/STM32_F030.jpg', '2021-12-12 02:38:38', './img/cart/STM32_F030.jpg'),
(24, 'Sensor', 'Ultrasonic Sensor', 15000, './img/product/ultrasonic_sensor.jpg', '2021-12-12 02:38:38', './img/cart/ultrasonic_sensor.jpg'),
(25, 'Support Item', 'BMS 3S Charger 18650 Lithium LI Ion Battery  12.6V', 15000, './img/product/BMS_3S_CHARGER_18650_LITHIUM_LI-ION_BATTERY_12.6V.jpg', '2021-12-12 02:49:31', './img/cart/BMS_3S_CHARGER_18650_LITHIUM_LI-ION_BATTERY_12.6V.jpg'),
(26, 'Support Item', 'DC Female Power Adapter Board', 5000, './img/product/DC_Female_Power_Adapter_Board.jpg', '2021-12-12 02:49:31', './img/cart/DC_Female_Power_Adapter_Board.jpg'),
(27, 'Mikrokontroller', 'ESP32 Wifi Bluetooth', 85000, './img/product/ESP32_ESP-32_DOIT_WIFI_BLUETOOTH.jpg', '2021-12-12 02:49:31', './img/cart/ESP32_ESP-32_DOIT_WIFI_BLUETOOTH.jpg'),
(28, 'Sensor', 'Light Sensor', 14000, './img/product/light_sensor.jpg', '2021-12-12 02:49:31', './img/cart/light_sensor.jpg'),
(29, 'Sensor', 'Magnetic Door Sensor', 8000, './img/product/magnetic_door_sensor.jpg', '2021-12-12 02:49:31', './img/cart/magnetic_door_sensor.jpg'),
(30, 'Aktuator', 'Modul Relay 5V', 6100, './img/product/modul_relay.jpg', '2021-12-12 02:49:31', './img/cart/modul_relay.jpg'),
(31, 'Support Item', 'Optocoupler 4 Channel Optical Isolation', 17000, './img/product/Optocoupler_4-Channel_Optical_Isolation.jpg', '2021-12-12 02:49:31', './img/cart/Optocoupler_4-Channel_Optical_Isolation.jpg'),
(32, 'Support Item', 'PCB Dot Matrix Single Layer 9X15Cm', 11000, './img/product/PCB_DOT_MATRIX_THRU_HOLE_SINGLE_LAYER_9X15CM_915CM_LUBANG_BOLONG_PLAT.jpg', '2021-12-12 02:49:31', './img/cart/PCB_DOT_MATRIX_THRU_HOLE_SINGLE_LAYER_9X15CM_915CM_LUBANG_BOLONG_PLAT.jpg'),
(33, 'Support Item', 'Push Botton', 500, './img/product/push_botton.jpg', '2021-12-12 02:49:31', './img/cart/push_botton.jpg'),
(34, 'Support Item', 'SIM800L', 44000, './img/product/SIM800L_Quad_Band.jpg', '2021-12-12 02:49:31', './img/cart/SIM800L_Quad_Band.jpg'),
(35, 'Support Item', 'TEA5767 FM Stereo Module', 70000, './img/product/TEA5767_FM_Stereo_Module.jpg', '2021-12-12 02:49:31', './img/cart/TEA5767_FM_Stereo_Module.jpg'),
(36, 'Sensor', 'Turbidity Sensor Modul', 150000, './img/product/Turbidity_Sensor_Modul.jpg', '2021-12-12 02:49:31', './img/cart/Turbidity_Sensor_Modul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Niagahoster Tutorial', 'nhtutorial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'dziem', 'urayherdian@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'aa', 'asas@asas.com', '202cb962ac59075b964b07152d234b70'),
(4, 'uray', 'asaasa@gg.com', '202cb962ac59075b964b07152d234b70'),
(5, 'manut', '12212@gg.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
