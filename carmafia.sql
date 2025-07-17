-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 01:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carmafia`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_post`
--

CREATE TABLE IF NOT EXISTS `add_post` (
`a_id` int(11) NOT NULL,
  `add_title` varchar(30) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `b_name` varchar(25) NOT NULL,
  `model` varchar(20) NOT NULL,
  `b_style` varchar(15) NOT NULL,
  `color` varchar(10) NOT NULL,
  `year` int(6) NOT NULL,
  `km_drive` int(15) NOT NULL,
  `cond` varchar(15) NOT NULL,
  `tran` varchar(15) NOT NULL,
  `unique` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `e_add` varchar(30) NOT NULL,
  `c_num` int(15) NOT NULL,
  `stat` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_post`
--

INSERT INTO `add_post` (`a_id`, `add_title`, `photo`, `b_name`, `model`, `b_style`, `color`, `year`, `km_drive`, `cond`, `tran`, `unique`, `price`, `c_name`, `e_add`, `c_num`, `stat`) VALUES
(1, 'land rover', 'upload/range.jpg', 'land rover', 'm1', 'Sedan', 'dark blue', 2004, 213123123, 'old ', 'Manual', 'very good conditions.', 2800000, 'land rover', 'surat', 21, 'gujarat'),
(5, 'Ford Endeavour', 'upload/ford.jpg', 'Ford Endeavour', 'endeavour', 'muv', 'dark black', 2011, 202220023, 'used', 'manual', 'very nice conditions.', 1080000, 'Ford Endeavour', 'surat', 25, 'gujarat'),
(6, 'Skoda Laura', 'upload/skoda1.jpg', 'Skoda Laura', 'laura', 'suv', 'white', 2013, 321222823, 'used', 'auto', 'very good conditions.', 900000, 'Skoda Laura', 'surat', 26, 'gujarat'),
(4, 'Chevrolet Captiva', 'upload/captive.jpg', 'Chevrolet Captiva', 'captiva', 'Sedan', 'white', 2010, 200000023, 'used', 'auto', 'very good conditions.', 1050000, 'Chevrolet Captiva', 'surat', 24, 'gujarat'),
(3, 'Hyundai Elite i20', 'upload/i20.jpg', 'Hyundai Elite i20', 'i20', 'xuv', 'white', 2010, 213000000, 'used', 'Manual', 'very good condition', 400000, 'Hyundai Elite i20', 'surat', 23, 'gujarat'),
(2, 'toyota-corolla', 'upload/corrolla.jpg', 'toyota ', 'corolla', 'Sedan', 'gray', 2001, 203200123, 'old', 'Manual', 'nice local conditions.', 700000, 'toyota', 'surat', 22, 'gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`aid` int(11) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `un` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `fn`, `ln`, `un`, `pwd`) VALUES
(1, 'chavda', 'psr', 'psr@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE IF NOT EXISTS `award` (
`awid` int(20) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `variant` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `year` varchar(10) NOT NULL,
  `award_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car_cat`
--

CREATE TABLE IF NOT EXISTS `car_cat` (
`car_id` int(11) NOT NULL,
  `sub_cate` text NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE IF NOT EXISTS `car_models` (
`cmid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `model_name` varchar(60) NOT NULL,
  `model_type` varchar(100) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_models`
--

INSERT INTO `car_models` (`cmid`, `cid`, `company_name`, `model_name`, `model_type`, `engine`, `status`, `fuel_type`, `image`, `price`) VALUES
(1, 1, 'Ashok Leyland', 'Ashok Leyland Stile LE 8 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 749000),
(2, 1, 'Ashok Leyland', 'Ashok Leyland Stile LE 7 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 749990),
(3, 1, 'Ashok Leyland', 'Ashok Leyland Stile LX 8 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 829990),
(4, 1, 'Ashok Leyland', 'Ashok Leyland Stile LS 8 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 849990),
(5, 1, 'Ashok Leyland', 'Ashok Leyland Stile LS 7 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 879990),
(6, 1, 'Ashok Leyland', 'Ashok Leyland Stile LX 7 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 899990),
(7, 1, 'Ashok Leyland', 'Ashok Leyland Stile LX 7 Seat', 'MUV', '1461cc, Manual, Diesel, 19.5kmpl', 'available', 'Diesel', '', 929990),
(8, 2, 'Aston Martin', 'Aston Martin DB9 6L V12', 'Luxury', '5935cc, Automatic, Patrol, 8.0kmpl', 'available', 'Patrol', '', 19000000),
(9, 2, 'Aston Martin', 'Aston Martin DB V12 Volante', 'Luxury', '5935cc, Automatic, Patrol, 8.0kmpl', 'available', 'Patrol', '', 19000000),
(10, 2, 'Aston Martin', 'Aston Martin Vanquish V12', 'Luxury', '5935cc, Automatic, Patrol, 8.0kmpl', 'available', 'Patrol', '', 39500000),
(11, 2, 'Aston Martin', 'Aston Martin Vantage V8 Sport', 'Luxury', '4735cc, Manual, Patrol, 8.0kmpl', 'available', 'Patrol', '', 13500000),
(12, 2, 'Aston Martin', 'Aston Martin Vantage V12 6.0L', 'Luxury', '5935cc, Manual, Patrol, 10.0kmpl', 'available', 'Patrol', '', 18500000),
(13, 2, 'Aston Martin', 'Aston Martin Vantage V8 4.7L', 'Luxury', '4735cc, Manual, Patrol, 8.0kmpl', 'available', 'Patrol', '', 25500000),
(14, 2, 'Aston Martin', 'Aston Martin Rapide S', 'Luxury', '5935cc, Manual, Patrol, 11.9kmpl', 'available', 'Patrol', '', 44000000),
(15, 2, 'Aston Martin', 'Aston Martin Zagato V12', 'Luxury', 'cc, Automatic, Patrol, 8.0kmpl', 'upcoming', 'Patrol', '', 38500000),
(16, 3, 'Audi Q3', 'Audi Q3 S Edition', 'Luxury', '1968cc, Manual, Diesel, 17.71kmpl', 'available', 'Diesel', '', 2620000),
(17, 3, 'Audi Q3', 'Audi Q3 2.0 TDI Quattro Base Grade', 'Luxury', '1968cc, Automatic, Diesel, 17.71kmpl', 'available', 'Diesel', '', 3233000),
(18, 3, 'Audi Q3', 'Audi Q3 2.0 TDI Quattro High Grade', 'Luxury', '1968cc, Automatic, Diesel, 15.73kmpl', 'available', 'Diesel', '', 3816000),
(19, 3, 'Audi Q3', 'Audi Q3, 2.0 TFSI', 'Luxury', '1984cc, Automatic, Patrol, 11.72kmpl', 'upcoming', 'Patrol', '', 3122000),
(20, 3, 'Audi Q3', 'Audi Q3 2.0 TFSI Quattro Premium Plus', 'Luxury', '1984cc, Automatic, Patrol, 11.72kmpl', 'upcoming', 'Patrol', '', 3673000),
(21, 3, 'Audi A4', 'Audi A4 2.0 TDI Celebration Edition', 'Luxury', '1968cc, Manual, Diesel, 16.55kmpl', 'available', 'Diesel', '', 3066888),
(22, 3, 'Audi A4', 'New Audi A4 2.0 TDI Multitronic', 'Luxury', '1968cc, Manual, Diesel, 15.2kmpl', 'available', 'Diesel', '', 0),
(23, 3, 'Audi A4', 'Audi A4 2.0 TDI 177 BHP', 'Luxury', '1986cc, Manual, Diesel, 17.11kmpl', 'available', 'Diesel', '', 3364000),
(24, 4, 'Audi A4', 'Audi A4 2.0 TDI 177 BHP Premium Plus', 'Luxury', '1968cc, Manual, Diesel, 17.11kmpl', 'available', 'Diesel', '', 3594000),
(25, 3, 'Audi A4', 'Audi A4 2.0 TDI 177 BHP Technology Edition', 'Luxury', '1968cc, Manual, Diesel, 17.11kmpl', 'available', 'Diesel', '', 3878000),
(26, 3, 'Audi A4', 'Audi A4 3.0 TDI 177 Quattro Premium Plus', 'Luxury', '2967cc, Automatic, Diesel, 1494kmpl', 'available', 'Diesel', '', 5471000),
(27, 3, 'Audi A4', 'Audi A4 2.0 TDI Quattro Technology Edition', 'Luxury', '2967cc, Automatic, Diesel, 14.94kmpl', 'available', 'Diesel', '', 5755000),
(28, 3, 'Audi A4', 'Audi A4 1.8 TFSI', 'Luxury', '1798cc, Automatic, Patrol, 15.64kmpl', 'available', 'Patrol', '', 3063000),
(29, 3, 'Audi A4', 'Audi A4 1.8 TFSI Premium Plus', 'Luxury', '1798cc, Automatic, Patrol, 15.64kmpl', 'available', 'Patrol', '', 3293000),
(30, 3, 'Audi A4', 'Audi A4 1.8 TFSI Technology Edition', 'Luxury', '1798cc, Automatic, Patrol, 15.64kmpl', 'available', 'Patrol', '', 3577000),
(31, 3, 'Audi A6', 'Audi A6 2.0 TDI', 'Luxury', '1968cc, Automatic, Diesel, 16.66kmpl', 'available', 'Diesel', '', 4366000),
(32, 3, 'Audi A6', 'Audi A6 2.0 TDI Special Edition', 'Luxury', '1968cc, Automatic, Diesel, 16.66kmpl', 'available', 'Diesel', '', 4036265),
(33, 3, 'Audi A6', 'Audi A6 2.0 TDI Premium Plus', 'Luxury', '1968cc, Automatic, Diesel, 16.66kmpl', 'available', 'Diesel', '', 4855000),
(34, 3, 'Audi A6', 'Audi A6 2.0 TDI Technology', 'Luxury', '1968cc, Automatic, Diesel, 16.66kmpl', 'available', 'Diesel', '', 5087000),
(35, 3, 'Audi A6', 'Audi A6 2.0 TDI Quattro', 'Luxury', '2967cc, Automatic, Diesel, 13.88kmpl', 'available', 'Diesel', '', 5458000),
(36, 3, 'Audi A6', 'Audi A6 3.0 TDI Special Edition', 'Luxury', '2967cc, Automatic, Diesel, 13.88kmpl', 'available', 'Diesel', '', 6017073),
(37, 3, 'Audi A6', 'Audi A6 3.0 TDI Quattro Premium Plus', 'Luxury', '2967cc, Automatic, Diesel, 13.88kmpl', 'available', 'Diesel', '', 5947000),
(38, 3, 'Audi A6', 'Audi A6 3.0 TDI Technology Edition', 'Luxury', '2967cc, Automatic, Diesel, 13.88kmpl', 'available', 'Diesel', '', 6179000);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`ctid` int(11) NOT NULL,
  `stid` int(11) NOT NULL,
  `ctname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `stid`, `ctname`) VALUES
(1, 2, 'surat');

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

CREATE TABLE IF NOT EXISTS `company_list` (
`cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `logo` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_list`
--

INSERT INTO `company_list` (`cid`, `cname`, `logo`) VALUES
(1, 'Skoda', 'upload/1.png'),
(2, 'BMW', 'upload/2.png'),
(3, 'Audi', 'upload/3.png'),
(4, 'Ashok leyland', 'upload/4.png'),
(6, 'aston martin', 'upload/5.png'),
(7, 'maruti suzuki', 'upload/16.png'),
(12, 'volkswagen', 'upload/9.png'),
(13, 'renult', 'upload/10.png'),
(14, 'land rover', 'upload/11.png'),
(15, 'chevrolet', 'upload/12.png'),
(16, 'ford', 'upload/13.png'),
(17, 'honda', 'upload/14.png'),
(18, 'mahindra', 'upload/15.png');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE IF NOT EXISTS `complains` (
`comid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `complain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE IF NOT EXISTS `dealers` (
`did` int(20) NOT NULL,
  `cn` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `addd` varchar(100) NOT NULL,
  `cno` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`did`, `cn`, `city`, `addd`, `cno`) VALUES
(1, 'Dream Honda(Honda Dealers)', 'Surat', 'Dream Honda Jivan Jyot theatre compound, udhna Main road Surat 394210 Surat Gujarat ', '+919016355025'),
(2, 'Kataria Automobiles Ltd.(Maruti Suzuki Dealers)', 'Surat', 'Survey No.54/1,Plot No.56,57,58 &59,T.P Scheme No.6,Taluka: Choryashi,Piplod, Surat, Gujarat ', '+919824339000'),
(4, 'President Motors(Mahindra Dealers & Showroom)', 'Surat', 'Umyanagar Society,\r\nNear Joganiya Mata Temple,\r\nUdhna Road,\r\nSurat,\r\nGujarat - 394210', '0261-4090000'),
(5, 'SHREEJI AUTOMART - PIPLOD ( Tata )', 'Surat', '2, PIPLOD PLAZA, OPPOSITE LANCER ARMY SCHOOL, PIPLOD, SURAT-DUMAS ROAD Surat Gujarat 395007', '0261-2723775'),
(6, 'BHASKARA-FIAT', 'Ahmedabad ', '75, Bhram Khsatriya Society,  Gujarat College Road, Ellis Bridge Ahmedabad - 380 006', '+919925004059 '),
(7, 'Renault Vadodara', 'Vadodara', 'GDIC Plot No. 987/8, 987/9A, 987/9B,Opp. GSRTC Bus Depot,Makarpura Vadodara Gujarat 390 010', '+919824006841 '),
(8, 'Torque Automotives Private Limited(skoda)', 'Surat', 'Near Rundhnath Mahadev Temple Dumas Road,Surat,Gujarat - 395007', '+919328883324'),
(9, 'Mirikkh Hyundai', 'Surat', 'Near Tulsi Hotel, Opposite CNG Pump, Gujrat, Surat, Gujarat - 395006', '09712900076');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
`cdid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `make` varchar(500) NOT NULL,
  `company` varchar(500) NOT NULL,
  `variant` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `engine_type` varchar(500) NOT NULL,
  `engine_descr` varchar(500) NOT NULL,
  `engine_displacement` varchar(500) NOT NULL,
  `no_of_cylinders` varchar(500) NOT NULL,
  `maximum_power` varchar(500) NOT NULL,
  `maximum_torque` varchar(500) NOT NULL,
  `valves_per_cylinder` varchar(500) NOT NULL,
  `value_configuration` varchar(500) NOT NULL,
  `fuel_supply_system` varchar(500) NOT NULL,
  `borex_stroke` varchar(500) NOT NULL,
  `compression_ratio` varchar(500) NOT NULL,
  `turbo_charger` varchar(500) NOT NULL,
  `super_charger` varchar(500) NOT NULL,
  `transmission_type` varchar(500) NOT NULL,
  `gear_box` varchar(500) NOT NULL,
  `drive_type` varchar(500) NOT NULL,
  `overdrive` varchar(500) NOT NULL,
  `synchronizers` varchar(500) NOT NULL,
  `clutch_type` varchar(500) NOT NULL,
  `front_suspension` varchar(500) NOT NULL,
  `rear_suspension` varchar(500) NOT NULL,
  `shockabsor_type` varchar(500) NOT NULL,
  `steering_type` varchar(500) NOT NULL,
  `steering_column` varchar(500) NOT NULL,
  `steering_gear_type` varchar(500) NOT NULL,
  `turning_radius` varchar(500) NOT NULL,
  `front_brake_type` varchar(500) NOT NULL,
  `rear_brake_type` varchar(500) NOT NULL,
  `top_speed` varchar(500) NOT NULL,
  `accelaration` varchar(500) NOT NULL,
  `drag_coefficient` varchar(500) NOT NULL,
  `braking_time` varchar(500) NOT NULL,
  `mileage_city` varchar(500) NOT NULL,
  `mileage_highway` varchar(500) NOT NULL,
  `fuel_type` varchar(500) NOT NULL,
  `fuel_tank_capasity` varchar(500) NOT NULL,
  `emission_control_system` varchar(500) NOT NULL,
  `tyre_size` varchar(500) NOT NULL,
  `tyre_type` varchar(500) NOT NULL,
  `wheel_size` varchar(500) NOT NULL,
  `alloy_wheel_size` varchar(500) NOT NULL,
  `seating_capasity` varchar(500) NOT NULL,
  `no_of_doors` varchar(500) NOT NULL,
  `no_of_floors` varchar(500) NOT NULL,
  `cargo_volume` varchar(500) NOT NULL,
  `country_of_assembly` varchar(500) NOT NULL,
  `country_of_manufacture` varchar(500) NOT NULL,
  `discountination_date` varchar(500) NOT NULL,
  `introduction_date` varchar(500) NOT NULL,
  `warrenty_time` varchar(500) NOT NULL,
  `warrenty_distance` varchar(500) NOT NULL,
  `length` varchar(500) NOT NULL,
  `width` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `ground_clearance` varchar(500) NOT NULL,
  `wheel_base` varchar(500) NOT NULL,
  `front_trend` varchar(500) NOT NULL,
  `kerb_weight` varchar(500) NOT NULL,
  `gross_weight` varchar(500) NOT NULL,
  `front_headroom` varchar(500) NOT NULL,
  `front_legroom` varchar(500) NOT NULL,
  `rear_headroom` varchar(500) NOT NULL,
  `rear_legroom` varchar(500) NOT NULL,
  `air_conditionar` varchar(500) NOT NULL,
  `cd_player` varchar(500) NOT NULL,
  `anti_lock_breaking_sys` varchar(500) NOT NULL,
  `power_steering` varchar(500) NOT NULL,
  `power_windows` varchar(500) NOT NULL,
  `leather_seats` varchar(500) NOT NULL,
  `central_locking` varchar(500) NOT NULL,
  `brake_assist` varchar(500) NOT NULL,
  `power_door_locks` varchar(500) NOT NULL,
  `child_safety_lock` varchar(500) NOT NULL,
  `anti_theft_alarm` varchar(500) NOT NULL,
  `driver_airbag` varchar(500) NOT NULL,
  `passenger_airbag` varchar(500) NOT NULL,
  `side_airbag_front` varchar(500) NOT NULL,
  `side_airbag_rear` varchar(500) NOT NULL,
  `night_rear_view_mirror` varchar(500) NOT NULL,
  `passenger_side_view_mirror` varchar(500) NOT NULL,
  `xenon_headlamps` varchar(500) NOT NULL,
  `halogen_headlamps` varchar(500) NOT NULL,
  `rear_seatbelts` varchar(500) NOT NULL,
  `seatbelt_warning` varchar(500) NOT NULL,
  `door_ajar_warning` varchar(500) NOT NULL,
  `side_impact_beams` varchar(500) NOT NULL,
  `front_impact_beams` varchar(500) NOT NULL,
  `traction_control` varchar(500) NOT NULL,
  `adjustable_seats` varchar(500) NOT NULL,
  `keyless_entry` varchar(500) NOT NULL,
  `tyre_pressure_monitor` varchar(500) NOT NULL,
  `vehicle_stability_control_system` varchar(500) NOT NULL,
  `engine_immobilizer` varchar(500) NOT NULL,
  `crash_sensor` varchar(500) NOT NULL,
  `centrally_mounted_fuel_tank` varchar(500) NOT NULL,
  `engine_check_warning` varchar(500) NOT NULL,
  `automatic_headlamp` varchar(500) NOT NULL,
  `clutch_lock` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
`fid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `model` varchar(200) NOT NULL,
  `variant` varchar(60) NOT NULL,
  `status` varchar(50) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `price` varchar(500) NOT NULL,
  `model_type` varchar(50) NOT NULL,
  `color1` varchar(10) NOT NULL,
  `color2` varchar(10) NOT NULL,
  `color3` varchar(10) NOT NULL,
  `color4` varchar(10) NOT NULL,
  `color5` varchar(10) NOT NULL DEFAULT '',
  `width` varchar(60) NOT NULL,
  `height` varchar(40) NOT NULL,
  `length` varchar(60) NOT NULL,
  `ground_clearance` varchar(60) NOT NULL,
  `fuel_type` varchar(60) NOT NULL,
  `mileage_city` varchar(60) NOT NULL,
  `mileage_highway` varchar(50) NOT NULL,
  `seating_capasity` varchar(60) NOT NULL,
  `engine_displacement` varchar(60) NOT NULL,
  `fuel_tank_capacity` varchar(80) NOT NULL,
  `transmission_type` varchar(80) NOT NULL,
  `engine_description` varchar(80) NOT NULL,
  `maximum_torque` varchar(80) NOT NULL,
  `valves_per_cylinder` varchar(80) NOT NULL,
  `maximum_power` varchar(80) NOT NULL,
  `no_of_cylinders` varchar(80) NOT NULL,
  `comfort_and_convience` varchar(500) NOT NULL,
  `interior_features` varchar(500) NOT NULL,
  `exterior_features` varchar(500) NOT NULL,
  `entertainment` varchar(500) NOT NULL,
  `safety_features` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`fid`, `cid`, `company_name`, `model`, `variant`, `status`, `img1`, `price`, `model_type`, `color1`, `color2`, `color3`, `color4`, `color5`, `width`, `height`, `length`, `ground_clearance`, `fuel_type`, `mileage_city`, `mileage_highway`, `seating_capasity`, `engine_displacement`, `fuel_tank_capacity`, `transmission_type`, `engine_description`, `maximum_torque`, `valves_per_cylinder`, `maximum_power`, `no_of_cylinders`, `comfort_and_convience`, `interior_features`, `exterior_features`, `entertainment`, `safety_features`) VALUES
(1, 1, 'Skoda Rapid', 'Rapid', 'skoda rapid', 'Available', 'image/rapid.png', '1156000', 'xuv', 'White', 'black pear', 'brown', 'Black', 'silver', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(2, 1, 'Skoda octavia', 'octavia', 'skoda octavia', 'Available', 'image/octavia.png', '2060000', 'Super Luxury', 'White', 'gray pear', 'Black', 'silver', '', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(3, 1, 'Skoda yeti', 'yeti', 'skoda yeti', 'Available', 'image/yeti.png', '2180000', 'muv', 'White', 'gray pear', 'Black', 'silver', '', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(4, 1, 'Skoda superb', 'new supern', 'skoda superb', 'Available', 'image/superb.png', '2625000', 'luxury', 'White', 'gray pearl', 'Black', 'silver', 'black pear', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(5, 2, 'BMW ', 'x1', 'bmw x1', 'Available', 'image/x1.png', '3790000', 'luxury', 'White', 'gray pearl', 'Black', 'silver', 'black pear', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(6, 2, 'BMW ', 'x3', 'bmw x3', 'Available', 'image/x3.png', '5290000', 'luxury', 'White', 'gray pearl', 'Black', 'silver', 'black pear', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(7, 2, 'BMW ', 'x5', 'bmw x5', 'Available', 'image/x5.png', '7590000', 'xuv', 'White', 'gray pearl', 'Black', 'silver', 'black pear', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(8, 2, 'BMW ', 'z4', 'bmw z4', 'Available', 'image/z4.png', '7590000', 'muv', 'White', 'gray pearl', 'Black', 'silver', 'black pear', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(9, 2, 'BMW ', 'i8', 'bmw i8', 'Available', 'image/i8.png', '22900000', 'sedan', 'White', 'gray pearl', 'Black', 'silver', 'black pear', '2025mm', '120mm', '4385mm', 'n/a', 'Patrol', '5.0 kmpl', '8.0 kmpl', '2', '4735', '80 Litres', 'Manual', '4.7-litre 420bhp 32Valve V8 Petrol Engine', '470Nm@5000rpm', '4', '420bhp@7300rpm', '8', 'Power steering, Power Windows-Front, Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Parking Sensors, Navigation System , Engine Start/Stop Button', 'Air Conditioner, Heater, Digital Odometer, Digital Clock, Leather Steering Wheel,  Leather Seats, Adjustable Steering Column', 'Adjustable Headlights, Power Adjustable Exterior Rear View Mirror, Rear Window Defogger, Alloy Wheels', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Halogen Headlamps, Door Ajar Warning, Adjustable Seats ,Engine Immobilizer, Engine Check Warning'),
(10, 2, 'BMW', 'a7', 'BMW A7', 'Available', 'image/a7.png', '2969000', 'SUV', 'White', '', '', '', '', '2019mm', '1608mm', '4385mm', '170mm', 'Diesel', '12.0 kmpl', '15.73 kmpl', '5', '1968', '64 Litres', 'Automatic', '2.0-litre 138.1bhp 16V TDI Diesel Engine', '320Nm@1750-2500rpm', '4', '138.1bhp@4200rpm', '4', 'Power steering,Power Windows-Front, Power Windows-Rear,Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Rear A/C Vents', 'Air Conditioner,Heater, Digital Odometer,Digital Clock ,Leather Steering Wheel, Leather Seats,Tachometer,Adjustable Steering Column', 'Adjustable Headlights, Fog Lights - Front,  Fog Lights - Rear , Power Adjustable Exterior Rear View Mirror ,Rain Sensing Wiper, Rear Window Defogger, Alloy Wheels, Sun Roof ,Chrome Grille', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, EBD, Brake Assist, Central Locking ,Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Side Airbag-Front, Side Airbag-Rear, Rear Seat Belts, Door Ajar Warning, Adjustable Seats, Engine Immobilizer, Crash Sensor'),
(11, 2, 'BMW', 'i8', 'BMW i8', 'Available', 'image/i8.png', '22900000', 'SUV', 'black', '', '', '', '', '2019mm', '1608mm', '4385mm', '170mm', 'Diesel', '12.0 kmpl', '15.73 kmpl', '5', '1968', '64 Litres', 'Automatic', '2.0-litre 138.1bhp 16V TDI Diesel Engine', '320Nm@1750-2500rpm', '4', '138.1bhp@4200rpm', '4', 'Power steering,Power Windows-Front, Power Windows-Rear,Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Rear A/C Vents', 'Air Conditioner,Heater, Digital Odometer,Digital Clock ,Leather Steering Wheel, Leather Seats,Tachometer,Adjustable Steering Column', 'Adjustable Headlights, Fog Lights - Front,  Fog Lights - Rear , Power Adjustable Exterior Rear View Mirror ,Rain Sensing Wiper, Rear Window Defogger, Alloy Wheels, Sun Roof ,Chrome Grille', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, EBD, Brake Assist, Central Locking ,Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Side Airbag-Front, Side Airbag-Rear, Rear Seat Belts, Door Ajar Warning, Adjustable Seats, Engine Immobilizer, Crash Sensor'),
(12, 3, 'Audi', 'A7', 'Audi Q7', 'Available', 'image/q7.png', '6435000', 'SUV', 'White', '', '', '', '', '2019mm', '1608mm', '4385mm', '170mm', 'Diesel', '14.25 kmpl', '17.71 kmpl', '5', '1968', '64 Litres', 'Manual', '2.0-litre 138.1bhp 16V TDI Diesel Engine', '320Nm@1750-2500rpm', '4', '138.1bhp@4200rpm', '4', 'Power steering,Power Windows-Front, Power Windows-Rear,Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Rear A/C Vents', 'Air Conditioner,Heater, Digital Odometer,Digital Clock ,Leather Steering Wheel, Leather Seats,Tachometer,Adjustable Steering Column', 'Adjustable Headlights, Fog Lights - Front, Fog Lights - Rear, Power Adjustable Exterior Rear View Mirror, Rain Sensing Wiper, Rear Window Defogger, Alloy Wheels, Chrome Grille', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, EBD Brake Assist, Central Locking, Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Side Airbag-Front, Rear Seat Belts, Door Ajar Warning, Adjustable Seats, Engine Immobilizer, Crash Sensor, Engine Check Warning'),
(13, 3, 'Audi', 'Q3', 'Audi Q3 2.0 TDI quattro', 'Available', 'image/q3.png', '2969000', 'SUV', 'White', '', '', '', '', '2019mm', '1608mm', '4385mm', '170mm', 'Diesel', '12.0 kmpl', '15.73 kmpl', '5', '1968', '64 Litres', 'Automatic', '2.0-litre 138.1bhp 16V TDI Diesel Engine', '320Nm@1750-2500rpm', '4', '138.1bhp@4200rpm', '4', 'Power steering,Power Windows-Front, Power Windows-Rear,Remote Trunk Opener, Remote Fuel Lid Opener, Low Fuel Warning Light, Rear A/C Vents', 'Air Conditioner,Heater, Digital Odometer,Digital Clock ,Leather Steering Wheel, Leather Seats,Tachometer,Adjustable Steering Column', 'Adjustable Headlights, Fog Lights - Front,  Fog Lights - Rear , Power Adjustable Exterior Rear View Mirror ,Rain Sensing Wiper, Rear Window Defogger, Alloy Wheels, Sun Roof ,Chrome Grille', 'CD Player, CD Changer, Integrated 2DIN Audio, USB & Auxiliary input, Bluetooth Connectivity, FM/AM/Radio, Audio System Remote Control, Speakers Front, Speakers Rear', 'Anti-Lock Braking System, EBD, Brake Assist, Central Locking ,Power Door Locks, Child Safety Locks, Driver Airbag, Passenger Airbag, Side Airbag-Front, Side Airbag-Rear, Rear Seat Belts, Door Ajar Warning, Adjustable Seats, Engine Immobilizer, Crash Sensor');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `e_id` varchar(30) NOT NULL,
  `f_back` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `uname`, `e_id`, `f_back`) VALUES
(1, 'ppppp', 'ppppp', 'ppppppp'),
(2, 'oio', 'popop[oop', 'oppopop'),
(3, 'mnn', 'nmnmnm', 'nbmbnmnbm');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`imgid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `img1` varchar(90) NOT NULL,
  `img2` varchar(90) NOT NULL,
  `img3` varchar(90) NOT NULL,
  `img4` varchar(90) NOT NULL,
  `img5` varchar(90) NOT NULL,
  `img6` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inscom`
--

CREATE TABLE IF NOT EXISTS `inscom` (
`cid` int(11) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `intamount` varchar(50) NOT NULL,
  `intrest` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscom`
--

INSERT INTO `inscom` (`cid`, `cname`, `intamount`, `intrest`) VALUES
(1, 'bjaj', '25', 16),
(2, 'Tata', '30', 20);

-- --------------------------------------------------------

--
-- Table structure for table `old_car`
--

CREATE TABLE IF NOT EXISTS `old_car` (
`ocid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `model_type` varchar(50) NOT NULL,
  `engine_type` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `used_year` varchar(90) NOT NULL,
  `selling_price` int(60) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
`qid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`rid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `model` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `cid`, `company_name`, `model`, `review`) VALUES
(1, 2, 'mahindra', 'xuv 500', 'xuv is nice one models.');

-- --------------------------------------------------------

--
-- Table structure for table `service_center`
--

CREATE TABLE IF NOT EXISTS `service_center` (
`sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `add` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
`stid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stid`, `sname`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jammu & Kashmir'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madhya Pradesh'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Odissa'),
(21, 'Punjab'),
(22, 'Rajasthan'),
(23, 'Sikkim'),
(24, 'Tamilnadu'),
(25, 'Tripura'),
(26, 'Uttarpradesh'),
(27, 'Uttrakhand'),
(28, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `add` varchar(500) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `add`, `pincode`, `stid`, `city`, `email`, `contact`, `uname`, `pwd`, `status`) VALUES
(1, 'Chavda ', 'pravin', 'Lakana,surat', '395008', 'gujarat', 'surat', 'psr@gmail.com', '+919913425643', 'psr', '12345678', 'active'),
(2, 'bhut', 'harsh', 'kathodra', '395256', 'gujarat', 'surat', 'harsh@gmail.com', '+919601949576', 'harsh', '123456', 'active'),
(3, 'chavda ', 'vijay', 'kholwad,surat', '395005', 'gujarat', 'surat', 'vijay@gmail.com', '+919724803572', 'vijay', '123456', 'deactive'),
(4, 'patel', 'viral', 'kathodara,surat', '395256', 'gujarat', 'surat', 'viral@gmail.com', '+919724825264', 'viral', '123456', 'deactive'),
(5, 'patel', 'nikhil', 'kathodara,surat', '395256', 'gujarat', 'surat', 'nik@gmail.com', '+919979925221', 'nik', '123456', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
`uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`uid`, `name`, `address`, `city`, `mobile`, `email`, `password`, `status`) VALUES
(3, 'bhut harsh', 'sk park , kathodara', 'surat', '9601949576', 'harsh@gmail.com', '123456', 'active'),
(10, 'yuval', 'chalthan  ', 'surat', '8460300207', 'yuval@gmail.com', 'yuval786', 'active'),
(41, 'chavda', 'pravin', 'surat', '9913425643', 'chavda096@gmail.com', 'TEC@#991', 'active'),
(44, 'manish chavda', 'laxmi park,ahmedabad', 'vadodara', '988967543', 'manish@gmail.com', '12345678', 'active'),
(45, 'nimesh patel', 'vk socity,', 'surat', '9887654214', 'nimesh@gmail.com', '123456778', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_post`
--
ALTER TABLE `add_post`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
 ADD PRIMARY KEY (`awid`);

--
-- Indexes for table `car_cat`
--
ALTER TABLE `car_cat`
 ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_models`
--
ALTER TABLE `car_models`
 ADD PRIMARY KEY (`cmid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`ctid`), ADD KEY `stid` (`stid`);

--
-- Indexes for table `company_list`
--
ALTER TABLE `company_list`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
 ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`cdid`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
 ADD PRIMARY KEY (`fid`), ADD KEY `cid` (`cid`), ADD KEY `cid_2` (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `inscom`
--
ALTER TABLE `inscom`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `old_car`
--
ALTER TABLE `old_car`
 ADD PRIMARY KEY (`ocid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
 ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `service_center`
--
ALTER TABLE `service_center`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
 ADD PRIMARY KEY (`stid`), ADD KEY `stid` (`stid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_post`
--
ALTER TABLE `add_post`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
MODIFY `awid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_cat`
--
ALTER TABLE `car_cat`
MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_models`
--
ALTER TABLE `car_models`
MODIFY `cmid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company_list`
--
ALTER TABLE `company_list`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
MODIFY `comid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
MODIFY `did` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
MODIFY `cdid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `imgid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inscom`
--
ALTER TABLE `inscom`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `old_car`
--
ALTER TABLE `old_car`
MODIFY `ocid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
MODIFY `qid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `rid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service_center`
--
ALTER TABLE `service_center`
MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `features`
--
ALTER TABLE `features`
ADD CONSTRAINT `features_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company_list` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
