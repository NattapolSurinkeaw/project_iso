-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2024 at 09:31 AM
-- Server version: 8.0.35-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `annoucements`
--

CREATE TABLE `annoucements` (
  `id` bigint UNSIGNED NOT NULL,
  `elerningcourse_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annoucements`
--

INSERT INTO `annoucements` (`id`, `elerningcourse_id`, `content`, `created_at`, `updated_at`) VALUES
(4, 14, '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for ISO 15189: 2022<br>วันที่ 2-3 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 7,000 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/YCjFzPkmVrXjPrkx7?fbclid=IwAR0XQvS_mTQBI4e-ZowZhrbF4xgb9IfamtKjN01FYHA2g5RVQQwwQ80e5IY\">https://forms.gle/YCjFzPkmVrXjPrkx7</a><br>0889050555/021076977/0911306300<br>isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR0L-p1ZyH0U2Ok5LDSvrP4yokazE3YDjq9DxSS91ytBr7DfQYeNb2U6xAI\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iso15189?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#ISO15189</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/internalaudit?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#InternalAudit</strong></a> <a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZVi-gwrXIL9LwsFNtQNNPZso1GGTHqQZAJ4n3OTp7Dnfmt-ltq96aUw_6FXGeJDVzJdbfeRNqHoGPA3lyXeabMVDOqpPxlA-QZ07fz4W0MlDN4XNv4rPTn_O5ZubbEjn6GR2cU9MkzwlWrRERomP1NS6KMu84_GiZCnm2kETpzHbivV9nzDqfPOPiNRlX-RL6w&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a><strong>ดูน้อยลง</strong></p>', '2023-11-01 10:51:45', '2023-11-01 10:51:45'),
(5, 15, '<p>หลักสูตร: Internal Audit Technique for ISO 13485: 2016</p><p>วันที่ 23-24 พฤศจิกายน 2566 เวลา 9.00-15.00</p><p>ราคา 7,500 บาท/ท่าน รวม VAT แล้ว</p><p>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม</p><p>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ https://forms.gle/E3GFGcbjV1nzH6NMA <a href=\"tel:0889050555\">0889050555</a>/021076977/0911306300</p><p>isoconsult.elearning@gmail.com</p><p>www.isoconsult.org</p><p>#ISO13485 #QMS #InternalAudit #IQA #ISOtraining #eLearning #Online #ISOconsult #Management #System #Requirement</p>', '2023-11-01 11:30:43', '2023-11-01 11:30:43'),
(6, 16, '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for AS9100(D)<br>วันที่ 16-17 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 7,500 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/UBz4fbXxpu563MGS9?fbclid=IwAR2NAgMGm2dpDEwTdaDkwGRGaz1KO3hbthIQAENQyrTRHUVUclJcsodifeM\">https://forms.gle/UBz4fbXxpu563MGS9</a><br>0889050555/021076977/0911306300<br>isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR2s0vCTw9GgLvnEMc2rLKTvDPfEeKeQFJgZpuk2VbkG-kRTdrewIZzgY2w\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/as9100?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#AS9100</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/internalaudit?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#InternalAudit</strong></a> <a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/aerospace?__eep__=6&amp;__cft__[0]=AZWwwz8Hs8uW-ftTfAdFISCcYMipcfnPfyFwNBqKQQWcD1nfrZ5ipsSX70jbBnrOngPhfoPUhc-Dhb3nW8wuzRi4ANceYsqFqmEekT11ID7lzjH2hZ5Z_YSHIrnoNml23eXbvQyI6adeHcsNB-9E9bPJo-fFtRjpR1_IdraXKAzx7EpR-0dlJBQEk2KvrUykYoM&amp;__tn__=*NK*F\"><strong>#aerospace</strong></a></p>', '2023-11-01 12:13:43', '2023-11-01 12:13:43'),
(7, 17, '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: ISO 13485 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมด้านเครื่องมือแพทย์และการบริการที่เกี่ยวข้อง (QMS Requirements for Medical Devices and related services)<br>วันที่ 22 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/1gChDeb7j5deVmM4A?fbclid=IwAR3IhScmPpPValOH6mMym_lP_fwPgxvotLxOdXDQAQkb9Gu5-pzjKStP1dA\">https://forms.gle/1gChDeb7j5deVmM4A</a><br>0889050555/021076977/0911306300<br>isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR0N-j2WK_1fRuErcjsDGv1O2NfAoNpeWzyPlO75mPOIVCYivrN3XWoHu5A\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iso13485?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#ISO13485</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/telecommunication?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Telecommunication</strong></a></p>', '2023-11-01 12:32:31', '2023-11-01 12:32:31'),
(8, 18, '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for ISO/IEC 17025: 2017<br>วันที่ 9-10 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 6,000 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FpKJjYii8BT2GB2h69%3Ffbclid%3DIwAR1sA4pnXevN4_KmcYxhoL6ZQSHi9eeXaJJoJbtfp9nDXYiMnfCsJgawW1w&amp;h=AT00-58hGDrHJP1YNuZtVoRmTxqnflngy-glL7TaVYS7VNQ-v1J03d5m24iowvkOcV5ONIVIAN5I0AVjh2IZi6KrTAtlXdoSJFwP4uAjQ-S3cU4-E_ZAqjlQp6jeMOoAh19D3WpvBsWWps_S6XSS&amp;__tn__=-UK*F&amp;c[0]=AT3Yh9Y3B5dV-TFkEpc3qeD1K8Nhcsm8xs4YsVhSBDA-i28DqqQHXyc_CXd6QbHCgoWnbWLjYJ-HzvEXirXOw19uZGGj838ncYa6r3pNVSEnjk-gLCmPvjwQegcwIH-YoJiqrmyqdf3HzRqTiR-UD5IurGdb5bitRL2DcB3MEjq1VkclKFTYeM7kq1HCS29FFtnhTrLhnYgq\">https://forms.gle/pKJjYii8BT2GB2h69</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR2-K_JsIhgjTiDld45Odjnu5XtojIWnE5SuQu6S0fCU80bL5T781iYwoz8\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iso17025?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#ISO17025</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/internalaudit?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#InternalAudit</strong></a> <a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a></p>', '2023-11-01 12:44:38', '2023-11-01 12:44:38'),
(9, 19, '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: FSC(Forest Stewardship Council Standard for Forest Management) ข้อกำหนดมาตรฐานการจัดการด้านป่าไม้อย่างยั่งยืน<br>วันที่ 15 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/iuUbn8MxR9dVkDoD8?fbclid=IwAR345MLJQ74xnp6ou-RwcBNvShJdhPHwkCgnmMRf1QIOjGc1BUqzNuEcKlE\">https://forms.gle/iuUbn8MxR9dVkDoD8</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR2zmNOjj6ZOLkh8L11omOIaLghL4trm2duDAnGs1l5rYLUFeKy5u0_Pxmo\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/fsc?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#FSC</strong></a> <a href=\"https://web.facebook.com/hashtag/forestmanagement?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Forestmanagement</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/telecommunication?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Telecommunication</strong></a></p>', '2023-11-01 12:54:19', '2023-11-01 12:54:19'),
(10, 20, '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for IATF16949: 2016<br>วันที่ 18-19 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 7,000 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/yRE3RM9KK5G6Hh7c7?fbclid=IwAR0MsWchkwhivbaK6-IyZs9Y9MtYqytcGEYFcnlvFQ3inVxUHd78wpqIQEU\">https://forms.gle/yRE3RM9KK5G6Hh7c7</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR1DGQLJq3MOw-faUI52bOKBZLB7Ajft0jqkSWCNshFmEQqtz4eQeg4rp8I\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/internal?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Internal</strong></a> <a href=\"https://web.facebook.com/hashtag/audit?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Audit</strong></a> <a href=\"https://web.facebook.com/hashtag/iatf16949?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#IATF16949</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/automotive?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Automotive</strong></a></p>', '2023-11-01 13:02:50', '2023-11-01 13:02:50'),
(11, 21, '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: ISO/IEC 17025: 2017 ข้อกำหนดมาตรฐานสากลสำหรับห้องปฏิบัติการทดสอบและสอบเทียบ (General requirements for the competence of testing and calibration laboratories)<br>วันที่ 27 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>ชำระเงินโดย โอนเข้าบัญชี บจ.ควอลิตี้ แอสโซซิเอทส์<br>ธนาคารยูโอบี สาขามีนบุรี เลขบัญชี 849-10243-05<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/5c2BbP59zXwFiEcS8?fbclid=IwAR3UKR62jZxUeqWP5575Qo8IxwxEbiKRwL9W9ZghA169zaBoEMqHYBXP7VU\">https://forms.gle/5c2BbP59zXwFiEcS8</a><br>&nbsp;0889050555/021076977/0911306300</p><p>isoconsult.elearning@gmail.com&nbsp;</p>', '2023-11-01 13:11:47', '2023-11-01 13:11:47'),
(12, 22, '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for ISO/IEC27001: 2022<br>วันที่ 4-5 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 6,500 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FyRE3RM9KK5G6Hh7c7%3Ffbclid%3DIwAR1DGQLJq3MOw-faUI52bOKBZLB7Ajft0jqkSWCNshFmEQqtz4eQeg4rp8I&amp;h=AT0WfZgVey0bidyRKeO5I-EhJCe0HmQHqORYd46y28o2Vi65iyOSHk73VISAK1toYbglI7GKWHjzXwyaCzBVQaitrrBQuD2arSaXBpnCJ_PcdnrdyD2EeYM6lb5JMatgbNnLEhThbyamRF1Z_o-i&amp;__tn__=-UK*F&amp;c[0]=AT2CDO8EPU0MBGVx3vWDN5aSg30IRiJ0_r5-Pr_6EFSDvssMQQsU1T9Sj8jrlJJe9p7i6WaBu9Lf-egWRDWEF8xSJ7Z-ZUx7MxjqRGGMHy3MOD_-X0bICbOAwwe0qDl0Tui78t22jfyzreFGgG8XkW31MF2pkIfOs1VeMAezk9bd_o_cwKZex1bsf7ymaF_lpLAeNpnV9X70\">https://forms.gle/yRE3RM9KK5G6Hh7c7</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR29SXI-_Ovyb9999_hKJkpljNCjdOAzWDNc--o9kPhrb0nWChMZdQirGiA\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/internal?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Internal</strong></a> <a href=\"https://web.facebook.com/hashtag/audit?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Audit</strong></a> <a href=\"https://web.facebook.com/hashtag/iso27001?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#ISO27001</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirementsengineering?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#requirementsengineering</strong></a></p>', '2023-11-01 13:20:43', '2023-11-01 13:20:43'),
(13, 23, '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: ISO 15189: 2022 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับห้องปฏิบัติการทางการแพทย์ ( QMS for Medical Laboratory)<br>วันที่ 25 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>ชำระเงินโดย โอนเข้าบัญชี บจ.ควอลิตี้ แอสโซซิเอทส์<br>ธนาคารยูโอบี สาขามีนบุรี เลขบัญชี 849-10243-05<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FfVcQ4eSHHE5mmhUG9%3Ffbclid%3DIwAR1520WISJTerazBydEdEOwwnoFNMvdXtzlE3mp_F0EY6YJY3tknaKcoaOY&amp;h=AT2PMGrUqi5EdGbJGOQc0gis2bE1r4MsTSRl6RCiij3PSPFbs8x8lI5-GSt4LUDIRV53MTlpu087mIbAErXqYrIiWj-LfklRvyDDQRgqkek-yIum9A23-zBwW-ciBb1EEERI4ojiv4KErFzGmcLR&amp;__tn__=-UK*F&amp;c[0]=AT0QDar-L80zsYfpahAWnpRt6-zjl2FOJt1P5vht3AbwkSlVtKQElYgeit6Mi8kpZk1qVBEAlAheuzluE7IRbXHhXkqTtHdzvLmFnltVLcnRGMnt8pJPpTT9baIhzQNVD7aaaYPFLDV3WP-tGt1WVaGuiBBqsZTHgPAZAKAFXZKfJb4LHzhM7nvb0k1hldRTF6YPaE8r_Iw2\">https://forms.gle/fVcQ4eSHHE5mmhUG9</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com</p>', '2023-11-01 13:44:13', '2023-11-01 13:44:13'),
(14, 24, '<p>ISO eLearning by Quality Associates<br>‍หลักสูตร: Internal Audit Technique for ISO 14001: 2015<br>วันที่ 26-27 กันยายน 2566 เวลา 9.00-15.00<br>ราคา 6,500 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/Kfk7b79ThenKeez38?fbclid=IwAR2s0vCTw9GgLvnEMc2rLKTvDPfEeKeQFJgZpuk2VbkG-kRTdrewIZzgY2w\">https://forms.gle/Kfk7b79ThenKeez38</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/internal?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Internal</strong></a> <a href=\"https://web.facebook.com/hashtag/audit?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Audit</strong></a> <a href=\"https://web.facebook.com/hashtag/iso14001?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#ISO14001</strong></a> <a href=\"https://web.facebook.com/hashtag/ems?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#EMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a>&nbsp;</p>', '2023-11-01 13:53:02', '2023-11-01 13:53:02'),
(15, 25, '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: IATF16949 version 2016 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมยานยนต์<br>วันที่ 11 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>ชำระเงินโดย โอนเข้าบัญชี บจ.ควอลิตี้ แอสโซซิเอทส์<br>ธนาคารยูโอบี สาขามีนบุรี เลขบัญชี 849-10243-05<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/g55S4krZbKD7nxpEA?fbclid=IwAR13O_QZM1pRZvcgyi88Rv40QnjPeHiHBgc5RvcoVqJ68qLtum5-KsDLpnY\">https://forms.gle/g55S4krZbKD7nxpEA</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com</p>', '2023-11-01 14:02:16', '2023-11-01 14:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `title`, `heading`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'In-house & On-line Learning!', 'ISO CONSULTING & TRAINING', 'ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001, ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO22000, TL9000, Lean, Six Sigma,..etc.', '/upload/images/banner/1699975592.jpeg', '2023-11-13 08:57:57', '2023-11-14 16:04:01'),
(2, 'ISO/QSEH consulting services!', 'ISO DOCUMENTATION', 'We provide creating a comprehensive quality system and documentation both hard-paper and software.', '/upload/images/banner/1699978313.jpeg', NULL, '2023-11-14 16:11:53'),
(3, 'Online Learning Anytime, Anywhere!', 'ELEARNING & ECONSULTING SERVICES', 'ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001, ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO22000, TL9000, Lean, Six Sigma,..etc.', '/upload/images/banner/1699975616.jpeg', NULL, '2023-11-14 08:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `billing_tos`
--

CREATE TABLE `billing_tos` (
  `id` bigint UNSIGNED NOT NULL,
  `bil_company` varchar(255) NOT NULL,
  `bil_branch` varchar(10) NOT NULL,
  `bil_address` varchar(255) NOT NULL,
  `bil_tax_id` varchar(10) NOT NULL,
  `bil_contact` varchar(100) NOT NULL,
  `bil_title` varchar(255) NOT NULL,
  `bil_phone` varchar(10) NOT NULL,
  `bil_email` varchar(255) NOT NULL,
  `bil_fax` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `billing_tos`
--

INSERT INTO `billing_tos` (`id`, `bil_company`, `bil_branch`, `bil_address`, `bil_tax_id`, `bil_contact`, `bil_title`, `bil_phone`, `bil_email`, `bil_fax`, `created_at`, `updated_at`) VALUES
(2, 'dasdasd', '', 'lsdkjasdkl', 'dasdasd', 'asdjaklsdj', 'd5ad5', '0933501625', 'nattapol.surinkeaw@gmail.com', '456456', '2023-10-11 08:54:43', '2023-10-11 08:54:43'),
(3, '31/23', '', 'บ้านนันทวัน', '14', '--', '--', '0912345678', 'thanakrit.ni@rmuti.ac.th', '--', '2023-10-22 14:39:24', '2023-10-22 14:39:24'),
(4, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '454445', '0878552408', 'reserve training', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', '2023-11-07 11:06:01', '2023-11-07 11:06:01'),
(5, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '454445', '0878552408', 'reserve training', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', '2023-11-07 11:06:18', '2023-11-07 11:06:18'),
(6, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '454445', '0878552408', 'reserve training', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', '2023-11-07 11:08:36', '2023-11-07 11:08:36'),
(7, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '454445', '0878552408', 'reserve training', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', '2023-11-07 11:09:50', '2023-11-07 11:09:50'),
(8, 'isoconsult', '', '124 khonkaen', '123456789', '0933501625', 'reserve training', '0933501625', 'nattapol.su@rmuti.ac.th', '123456', '2023-11-12 14:15:45', '2023-11-12 14:15:45'),
(9, 'testtt', '', '424 sd4asd56a46', '54546', '0933501625', 'reserve train', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', '2023-11-28 05:41:05', '2023-11-28 05:41:05'),
(10, 'testtt', '', '424 sd4asd56a46', '54546', '0933501625', 'reserve train', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', '2023-11-28 05:41:28', '2023-11-28 05:41:28'),
(11, 'testtt', '', '424 sd4asd56a46', '54546', '0933501625', 'reserve train', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', '2023-11-28 05:42:19', '2023-11-28 05:42:19'),
(12, 'testtt', '', '424 sd4asd56a46', '54546', '0933501625', 'reserve train', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', '2023-11-28 05:44:22', '2023-11-28 05:44:22'),
(13, 'qq', '', 'qq', '111', 'qq', '111', '111', 'test@isoconsult.org', '11', '2023-12-27 03:26:57', '2023-12-27 03:26:57'),
(14, 'บริษัทฮาไม่จำกัด', '44455', '2455 moo 7', '454445', '0933501625', 'reserve training', '0933501625', 'nattapol.surinkeaw@gmail.com', '123456', '2024-01-07 15:46:42', '2024-01-07 15:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Quality', '2023-10-09 02:32:09', '2023-10-09 02:32:09'),
(2, 'Evironment', '2023-10-09 02:32:17', '2023-10-09 02:32:17'),
(3, 'Technology', '2023-10-09 02:32:36', '2023-10-09 02:32:36'),
(4, 'Audit Technique', '2023-11-01 12:12:56', '2023-11-01 12:12:56'),
(5, 'QMS Requirements', '2023-11-01 12:32:03', '2023-11-01 12:32:03'),
(6, 'FSC', '2023-11-01 12:54:01', '2023-11-01 12:54:01'),
(7, 'ISO/IEC', '2023-11-01 13:11:19', '2023-11-01 13:11:19'),
(8, 'QMS', '2023-11-01 13:44:18', '2023-11-01 13:44:18'),
(9, 'IATF', '2023-11-01 14:02:37', '2023-11-01 14:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `code_discounts`
--

CREATE TABLE `code_discounts` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` int NOT NULL,
  `used_count` int DEFAULT NULL,
  `display` tinyint(1) NOT NULL,
  `date_start` date NOT NULL,
  `date_expire` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `code_discounts`
--

INSERT INTO `code_discounts` (`id`, `code`, `discount`, `used_count`, `display`, `date_start`, `date_expire`, `created_at`, `updated_at`) VALUES
(3, 'DASDASDAS', 40, 0, 1, '2024-02-18', '2024-02-21', NULL, '2024-02-19 06:25:59'),
(5, 'ABCDEFG', 20, NULL, 1, '2024-02-18', '2024-02-22', '2024-02-19 08:07:27', '2024-02-19 08:07:27'),
(6, 'AABBCCDD', 50, NULL, 1, '2024-02-11', '2024-02-15', '2024-02-19 10:14:07', '2024-02-19 10:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `course_materials`
--

CREATE TABLE `course_materials` (
  `id` bigint UNSIGNED NOT NULL,
  `elerningcourse_id` bigint UNSIGNED NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `input_type` varchar(20) NOT NULL,
  `document` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `course_materials`
--

INSERT INTO `course_materials` (`id`, `elerningcourse_id`, `video_url`, `thumbnail`, `input_type`, `document`, `description`, `created_at`, `updated_at`) VALUES
(8, 15, 'https://youtu.be/AAtodxAciJ4', '/upload/images/material/1698839345.jpg', 'youtube', '/upload/pdf/material/1698839345.pdf', 'วิดีโอ และ เอกสารหลักสูตร', '2023-11-01 11:49:05', '2023-11-01 12:03:17'),
(9, 16, 'https://youtu.be/PXqqzWv7DXw', '/upload/images/material/1698841382.jpg', 'youtube', '/upload/pdf/material/1698841382.pdf', 'คำเตือน! VDO นี้จัดทำขึ้นเพื่อแบ่งปันความรู้แก่เพื่อนๆ หากต้องการให้กำลังใจหรือเสนอแนะอันเป็นประโยชน์สามารถส่ง comment ข้างล่างนี้ได้ค่ะ แต่หากท่านใดต้องการวิจารณ์ใดๆ อันไม่เป็นประโยชน์ต่อส่วนรวม สามารถส่งข้อความเข้า Line ข้างบนค่ะ\r\nเพลย์ลิสต์เด่น', '2023-11-01 12:23:08', '2023-11-01 12:23:08'),
(10, 24, 'https://youtu.be/9iJWSuAhN64', '/upload/images/material/1699026133.jpg', 'youtube', '/upload/pdf/material/1699026133.pdf', 'เนื้อหาหลักสูตร วิดีโอและ เอกสาร', '2023-11-03 15:42:13', '2023-11-03 15:42:13'),
(11, 19, 'https://youtu.be/AAtodxAciJ4', '/upload/images/material/1699797551.png', 'youtube', '/upload/pdf/material/1699797551.pdf', 'เนื้อหาหลักสูตร', '2023-11-12 13:59:11', '2023-11-12 13:59:11'),
(12, 18, 'https://youtu.be/AAtodxAciJ4?si=pYtAC56JwM6iRpi8', '/upload/images/material/1702221509.jpg', 'youtube', '/upload/pdf/material/1702221509.pdf', 'เอกสารและวิดีโอหลักสูตร', '2023-12-10 15:18:29', '2023-12-10 15:18:29'),
(13, 18, 'https://drive.google.com/file/d/1_GcCKEaFWJXwoDA3gmTVM4dkvefsI67B/preview', '/upload/images/material/1702222037.png', 'drive', '/upload/pdf/material/1702222037.pdf', 'กฟหกฟหกฟหก', '2023-12-10 15:27:17', '2023-12-10 15:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `elerningcourses`
--

CREATE TABLE `elerningcourses` (
  `id` bigint UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` int NOT NULL DEFAULT '0',
  `total_price` decimal(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_display` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `elerningcourses`
--

INSERT INTO `elerningcourses` (`id`, `course_name`, `user_name`, `category`, `price`, `discount`, `total_price`, `description`, `details`, `img_course`, `status_display`, `created_at`, `updated_at`) VALUES
(14, 'Internal Audit Technique for ISO 15189: 2022', 'admin', '[1,2,3]', 7000.00, 0, 0.00, 'ISO15189', '<p>วันที่ 2</p>', '/upload/images/course/1698835813.jpg', 1, '2023-11-01 10:50:13', '2024-01-09 16:11:10'),
(15, 'Internal Audit Technique for ISO 13485 2016', 'Admin', '[1,2,3]', 7500.00, 0, 0.00, 'Internal Audit Technique for ISO 13485: 2016', '<p>หลักสูตร: Internal Audit Technique for ISO 13485: 2016</p><p>วันที่ 23-24 พฤศจิกายน 2566 เวลา 9.00-15.00</p><p>ราคา 7,500 บาท/ท่าน รวม VAT แล้ว</p><p>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม</p><p>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ https://forms.gle/E3GFGcbjV1nzH6NMA</p><p><a href=\"tel:0889050555\">0889050555</a>/021076977/0911306300</p><p>isoconsult.elearning@gmail.com</p><p>www.isoconsult.org</p><p>#ISO13485 #QMS #InternalAudit #IQA #ISOtraining #eLearning #Online #ISOconsult #Management #System #Requirement</p>', '/upload/images/course/1698838101.jpeg', 1, '2023-11-01 11:28:21', '2023-11-01 11:30:08'),
(16, 'Internal Audit Technique for AS9100(D)', 'admin', '[4]', 7500.00, 0, 0.00, 'Internal Audit Technique for AS9100(D)', '<p>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม</p>', '/upload/images/course/1698840733.jpg', 1, '2023-11-01 12:12:13', '2023-11-01 12:13:02'),
(17, 'ISO 13485 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมด้านเครื่องมือแพทย์และการบริการที่เกี่ยวข้อง (QMS Requirements for Medical Devices and related services)', 'admin', '[5]', 3250.00, 0, 0.00, 'ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates', '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: ISO 13485 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมด้านเครื่องมือแพทย์และการบริการที่เกี่ยวข้อง (QMS Requirements for Medical Devices and related services)<br>วันที่ 22 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/1gChDeb7j5deVmM4A?fbclid=IwAR3IhScmPpPValOH6mMym_lP_fwPgxvotLxOdXDQAQkb9Gu5-pzjKStP1dA\">https://forms.gle/1gChDeb7j5deVmM4A</a><br>&nbsp;0889050555/021076977/0911306300<br>isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR0N-j2WK_1fRuErcjsDGv1O2NfAoNpeWzyPlO75mPOIVCYivrN3XWoHu5A\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iso13485?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#ISO13485</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/telecommunication?__eep__=6&amp;__cft__[0]=AZVnnAM87de0zc2zJgoJUAeS-BShDE-Zikkjn1uCdMsvyvclu9lAFLlFQQyj-3pFuyz2v7jntndvkXmb_r_ied10a-cvLrWsCUuZeMlHYcpLN8w7x2kfYHTGgeSx0MxLHJqF8HxRSSIQGYzJp8kzkj_pCystEVDEj4Q60Q35Ue77E8OezZ-G0PfMyaDMlR_rdKc&amp;__tn__=*NK*F\"><strong>#Telecommunication</strong></a></p>', '/upload/images/course/1698841881.jpg', 1, '2023-11-01 12:31:21', '2023-11-01 12:32:07'),
(18, 'Internal Audit Technique for ISO/IEC 17025: 2017', 'admin', '[4]', 6000.00, 0, 0.00, 'Internal Audit Technique for ISO/IEC 17025: 2017', '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for ISO/IEC 17025: 2017<br>วันที่ 9-10 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 6,000 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FpKJjYii8BT2GB2h69%3Ffbclid%3DIwAR1sA4pnXevN4_KmcYxhoL6ZQSHi9eeXaJJoJbtfp9nDXYiMnfCsJgawW1w&amp;h=AT00-58hGDrHJP1YNuZtVoRmTxqnflngy-glL7TaVYS7VNQ-v1J03d5m24iowvkOcV5ONIVIAN5I0AVjh2IZi6KrTAtlXdoSJFwP4uAjQ-S3cU4-E_ZAqjlQp6jeMOoAh19D3WpvBsWWps_S6XSS&amp;__tn__=-UK*F&amp;c[0]=AT3Yh9Y3B5dV-TFkEpc3qeD1K8Nhcsm8xs4YsVhSBDA-i28DqqQHXyc_CXd6QbHCgoWnbWLjYJ-HzvEXirXOw19uZGGj838ncYa6r3pNVSEnjk-gLCmPvjwQegcwIH-YoJiqrmyqdf3HzRqTiR-UD5IurGdb5bitRL2DcB3MEjq1VkclKFTYeM7kq1HCS29FFtnhTrLhnYgq\">https://forms.gle/pKJjYii8BT2GB2h69</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR2-K_JsIhgjTiDld45Odjnu5XtojIWnE5SuQu6S0fCU80bL5T781iYwoz8\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iso17025?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#ISO17025</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/internalaudit?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#InternalAudit</strong></a> <a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUlA2e4bUUKpgnt5kgnvw2-zYGPJk4rKzG5lkT7uKwDL9hta4So5un8m_hO--_S1trNpc0zTluDXGxMECKsXI3EgFlQUb7fEhmpczhy9Tl_Thjy-41dKCbPKcGeziHyUJOc_jjt6Q36rZURYIccWpTPcxcJUZLjc2jx5zo_Jb0cqILbxaPTQY9Za8WiY_IOrkk&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a></p>', '/upload/images/course/1698842571.jpg', 1, '2023-11-01 12:42:51', '2023-11-01 12:44:13'),
(19, 'FSC(Forest Stewardship Council Standard for Forest Management) ข้อกำหนดมาตรฐานการจัดการด้านป่าไม้อย่างยั่งยืน', 'admin', '[6]', 3250.00, 0, 0.00, 'FSC(Forest Stewardship Council Standard for Forest Management) ข้อกำหนดมาตรฐานการจัดการด้านป่าไม้อย่างยั่งยืน', '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: FSC(Forest Stewardship Council Standard for Forest Management) ข้อกำหนดมาตรฐานการจัดการด้านป่าไม้อย่างยั่งยืน<br>วันที่ 15 พฤศจิกายน 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/iuUbn8MxR9dVkDoD8?fbclid=IwAR345MLJQ74xnp6ou-RwcBNvShJdhPHwkCgnmMRf1QIOjGc1BUqzNuEcKlE\">https://forms.gle/iuUbn8MxR9dVkDoD8</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR2zmNOjj6ZOLkh8L11omOIaLghL4trm2duDAnGs1l5rYLUFeKy5u0_Pxmo\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/fsc?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#FSC</strong></a> <a href=\"https://web.facebook.com/hashtag/forestmanagement?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Forestmanagement</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/telecommunication?__eep__=6&amp;__cft__[0]=AZUE-yF2olGKZ7fwHXXqrxizRm6F7JUMQqF1xudQoNQGro41f7QKGrS_0v5iPC142vd2FrtlgNpHl8Ants_9-15Bl2-i20zsyeeR2yf8jtizadTdNvXCoXsOjaDQ1szQhPYwonrtm8vGpDaGtTMWOUueD--DSNu3LrLqW6A3SlMfEIGWo5sxA_0p6-MFCHxRjk4&amp;__tn__=*NK*F\"><strong>#Telecommunication</strong></a></p>', '/upload/images/course/1698843187.jpg', 1, '2023-11-01 12:53:07', '2023-11-01 12:54:05'),
(20, 'Internal Audit Technique for IATF16949: 2016', 'admin', '[4]', 7000.00, 0, 0.00, 'Internal Audit Technique for IATF16949: 2016', '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for IATF16949: 2016<br>วันที่ 18-19 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 7,000 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/yRE3RM9KK5G6Hh7c7?fbclid=IwAR0MsWchkwhivbaK6-IyZs9Y9MtYqytcGEYFcnlvFQ3inVxUHd78wpqIQEU\">https://forms.gle/yRE3RM9KK5G6Hh7c7</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR1DGQLJq3MOw-faUI52bOKBZLB7Ajft0jqkSWCNshFmEQqtz4eQeg4rp8I\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/internal?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Internal</strong></a> <a href=\"https://web.facebook.com/hashtag/audit?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Audit</strong></a> <a href=\"https://web.facebook.com/hashtag/iatf16949?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#IATF16949</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a> <a href=\"https://web.facebook.com/hashtag/automotive?__eep__=6&amp;__cft__[0]=AZUuTu-HUYIsNUFG82h1dFujgS4lpOr-j8A-DC24y63oNCI74YX0kBpgqG36qblhauw56uLXjMuaAMB3SyBuHTcUjhNFJc1vRIw2DnS2tAVqrIlDhcFbsZqRfvVlsJkBtjvwzMq-U2yTEDcIdRBQ0n-9xuW_8p8q9rJmlMT4ZiURRh7DDCRRwFVcTSS0_izcJVs&amp;__tn__=*NK*F\"><strong>#Automotive</strong></a></p>', '/upload/images/course/1698843731.jpg', 1, '2023-11-01 13:02:11', '2023-11-01 13:02:37'),
(21, 'ISO/IEC 17025: 2017 ข้อกำหนดมาตรฐานสากลสำหรับห้องปฏิบัติการทดสอบและสอบเทียบ (General requirements for the competence of testing and calibration laboratories', 'admin', '[7]', 3250.00, 0, 0.00, 'ISO/IEC 17025: 2017 ข้อกำหนดมาตรฐานสากลสำหรับห้องปฏิบัติการทดสอบและสอบเทียบ (General requirements for the competence of testing and calibration laboratories', '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: ISO/IEC 17025: 2017 ข้อกำหนดมาตรฐานสากลสำหรับห้องปฏิบัติการทดสอบและสอบเทียบ (General requirements for the competence of testing and calibration laboratories)<br>วันที่ 27 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>ชำระเงินโดย โอนเข้าบัญชี บจ.ควอลิตี้ แอสโซซิเอทส์<br>ธนาคารยูโอบี สาขามีนบุรี เลขบัญชี 849-10243-05<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/5c2BbP59zXwFiEcS8?fbclid=IwAR3UKR62jZxUeqWP5575Qo8IxwxEbiKRwL9W9ZghA169zaBoEMqHYBXP7VU\">https://forms.gle/5c2BbP59zXwFiEcS8</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com</p>', '/upload/images/course/1698844255.jpg', 1, '2023-11-01 13:10:55', '2023-11-01 13:11:25'),
(22, 'Internal Audit Technique for ISO/IEC27001: 2022', 'admin', '[4]', 6500.00, 0, 0.00, 'Internal Audit Technique for ISO/IEC27001: 2022', '<p>ISO eLearning by Quality Associates<br>หลักสูตร: Internal Audit Technique for ISO/IEC27001: 2022<br>วันที่ 4-5 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 6,500 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FyRE3RM9KK5G6Hh7c7%3Ffbclid%3DIwAR1DGQLJq3MOw-faUI52bOKBZLB7Ajft0jqkSWCNshFmEQqtz4eQeg4rp8I&amp;h=AT0WfZgVey0bidyRKeO5I-EhJCe0HmQHqORYd46y28o2Vi65iyOSHk73VISAK1toYbglI7GKWHjzXwyaCzBVQaitrrBQuD2arSaXBpnCJ_PcdnrdyD2EeYM6lb5JMatgbNnLEhThbyamRF1Z_o-i&amp;__tn__=-UK*F&amp;c[0]=AT2CDO8EPU0MBGVx3vWDN5aSg30IRiJ0_r5-Pr_6EFSDvssMQQsU1T9Sj8jrlJJe9p7i6WaBu9Lf-egWRDWEF8xSJ7Z-ZUx7MxjqRGGMHy3MOD_-X0bICbOAwwe0qDl0Tui78t22jfyzreFGgG8XkW31MF2pkIfOs1VeMAezk9bd_o_cwKZex1bsf7ymaF_lpLAeNpnV9X70\">https://forms.gle/yRE3RM9KK5G6Hh7c7</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"http://www.isoconsult.org/?fbclid=IwAR29SXI-_Ovyb9999_hKJkpljNCjdOAzWDNc--o9kPhrb0nWChMZdQirGiA\">www.isoconsult.org</a><br><a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/internal?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Internal</strong></a> <a href=\"https://web.facebook.com/hashtag/audit?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Audit</strong></a> <a href=\"https://web.facebook.com/hashtag/iso27001?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#ISO27001</strong></a> <a href=\"https://web.facebook.com/hashtag/qms?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#QMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirementsengineering?__eep__=6&amp;__cft__[0]=AZV3qf-IMuqS3hQnl8wRkQ09ErMrf0aBl2qIFxb4pQoWs-GlnewfGfPmwjhwWu5RYO71zAXKXI2BYPpWq-ppDKlsQzRnWfPPZjH11HoffehYxYokqVUmg3VyAojrU3HLkw3FzmBw8Wo4fGBgdvYmwApxEzz_dM4LeiJAXA6XhgdvJ2tFKMakRnLTcScTHDwHbaU&amp;__tn__=*NK*F\"><strong>#requirementsengineering</strong></a></p>', '/upload/images/course/1698844799.jpg', 1, '2023-11-01 13:19:59', '2023-11-01 13:20:25'),
(23, 'ISO 15189: 2022 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับห้องปฏิบัติการทางการแพทย์ ( QMS for Medical Laboratory)', 'admin', '[5,8]', 3250.00, 0, 0.00, 'ISO 15189: 2022 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับห้องปฏิบัติการทางการแพทย์ ( QMS for Medical Laboratory)', '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: ISO 15189: 2022 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับห้องปฏิบัติการทางการแพทย์ ( QMS for Medical Laboratory)<br>วันที่ 25 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>ชำระเงินโดย โอนเข้าบัญชี บจ.ควอลิตี้ แอสโซซิเอทส์<br>ธนาคารยูโอบี สาขามีนบุรี เลขบัญชี 849-10243-05<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FfVcQ4eSHHE5mmhUG9%3Ffbclid%3DIwAR1520WISJTerazBydEdEOwwnoFNMvdXtzlE3mp_F0EY6YJY3tknaKcoaOY&amp;h=AT2PMGrUqi5EdGbJGOQc0gis2bE1r4MsTSRl6RCiij3PSPFbs8x8lI5-GSt4LUDIRV53MTlpu087mIbAErXqYrIiWj-LfklRvyDDQRgqkek-yIum9A23-zBwW-ciBb1EEERI4ojiv4KErFzGmcLR&amp;__tn__=-UK*F&amp;c[0]=AT0QDar-L80zsYfpahAWnpRt6-zjl2FOJt1P5vht3AbwkSlVtKQElYgeit6Mi8kpZk1qVBEAlAheuzluE7IRbXHhXkqTtHdzvLmFnltVLcnRGMnt8pJPpTT9baIhzQNVD7aaaYPFLDV3WP-tGt1WVaGuiBBqsZTHgPAZAKAFXZKfJb4LHzhM7nvb0k1hldRTF6YPaE8r_Iw2\">https://forms.gle/fVcQ4eSHHE5mmhUG9</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com</p>', '/upload/images/course/1698846147.jpg', 1, '2023-11-01 13:42:27', '2023-11-01 13:44:29'),
(24, 'Internal Audit Technique for ISO 14001: 2015', 'admin', '[4]', 6500.00, 0, 0.00, 'Internal Audit Technique for ISO 14001: 2015', '<p>ISO eLearning by Quality Associates<br>‍หลักสูตร: Internal Audit Technique for ISO 14001: 2015<br>วันที่ 26-27 กันยายน 2566 เวลา 9.00-15.00<br>ราคา 6,500 บาท/ท่าน รวม VAT แล้ว<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/Kfk7b79ThenKeez38?fbclid=IwAR2s0vCTw9GgLvnEMc2rLKTvDPfEeKeQFJgZpuk2VbkG-kRTdrewIZzgY2w\">https://forms.gle/Kfk7b79ThenKeez38</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com<br><a href=\"https://web.facebook.com/hashtag/iqa?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#IQA</strong></a> <a href=\"https://web.facebook.com/hashtag/internal?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Internal</strong></a> <a href=\"https://web.facebook.com/hashtag/audit?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Audit</strong></a> <a href=\"https://web.facebook.com/hashtag/iso14001?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#ISO14001</strong></a> <a href=\"https://web.facebook.com/hashtag/ems?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#EMS</strong></a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#ISOtraining</strong></a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#eLearning</strong></a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Online</strong></a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#ISOconsult</strong></a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Management</strong></a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#System</strong></a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZVngHUlP6UdPL8aaJan-RfhN-HcsGNqlemLX-eqhfyRgVV4NzMbBzOu-9XMTjFfTbVrrG7WvTD4I5e1bl9VtkgU_IhP2LNlb323GRWVKBmgwtdttM0QzwI9JrgQrkTOui4yL2lBGGdCKhn3plpTGU2Tj3UGrRBs90YFqPCLXcaB2m4dKgixWbhqyZyWeEFSqQE&amp;__tn__=*NK*F\"><strong>#Requirement</strong></a>&nbsp;</p>', '/upload/images/course/1698846756.jpg', 1, '2023-11-01 13:52:36', '2023-11-01 13:53:25'),
(25, 'IATF16949 version 2016 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมยานยนต์', 'admin', '[9]', 3250.00, 0, 0.00, 'IATF16949 version 2016 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมยานยนต์', '<p>ฝึกอบรมออนไลน์- ISO eLearning by Quality Associates<br>หลักสูตร: IATF16949 version 2016 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมยานยนต์<br>วันที่ 11 ตุลาคม 2566 เวลา 9.00-15.00<br>ราคา 3,250 บาท/คน<br>ชำระเงินโดย โอนเข้าบัญชี บจ.ควอลิตี้ แอสโซซิเอทส์<br>ธนาคารยูโอบี สาขามีนบุรี เลขบัญชี 849-10243-05<br>กำหนดลงทะเบียนและชำระเงินภายใน 7 วันก่อนการฝึกอบรม<br>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/g55S4krZbKD7nxpEA?fbclid=IwAR13O_QZM1pRZvcgyi88Rv40QnjPeHiHBgc5RvcoVqJ68qLtum5-KsDLpnY\">https://forms.gle/g55S4krZbKD7nxpEA</a><br>&nbsp;0889050555/021076977/0911306300<br>&nbsp;isoconsult.elearning@gmail.com</p>', '/upload/images/course/1698847316.jpg', 1, '2023-11-01 14:01:56', '2023-11-01 14:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `event_reserve_trains`
--

CREATE TABLE `event_reserve_trains` (
  `id` bigint UNSIGNED NOT NULL,
  `pending_id` bigint UNSIGNED NOT NULL,
  `reserve_name` varchar(255) NOT NULL,
  `reserve_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `event_reserve_trains`
--

INSERT INTO `event_reserve_trains` (`id`, `pending_id`, `reserve_name`, `reserve_date`, `created_at`, `updated_at`) VALUES
(1, 8, 'isoconsult', '2023-11-15', '2023-11-12 14:18:19', '2023-11-12 14:18:19'),
(2, 4, 'บริษัทฮาไม่จำกัด', '2023-11-29', '2024-04-25 17:07:34', '2024-04-25 17:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_documents`
--

CREATE TABLE `home_documents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `display` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `home_documents`
--

INSERT INTO `home_documents` (`id`, `name`, `description`, `path`, `thumbnail`, `display`, `created_at`, `updated_at`) VALUES
(1, 'ISO9001', 'ISO9001', '/upload/pdf/homedocument/1698392491.pdf', '/upload/images/homedocument/1698392491.webp', 'yes', NULL, '2023-10-27 07:41:31'),
(2, 'ISO27001', 'iso27001', '/upload/pdf/homedocument/1698392646.pdf', '/upload/images/homedocument/1698392646.jpg', 'yes', NULL, '2023-10-27 07:44:06'),
(3, 'ISO14001', 'ISO14001', '/upload/pdf/homedocument/1698392786.pdf', '/upload/images/homedocument/1698392786.jpg', 'yes', NULL, '2023-10-27 07:46:31'),
(4, 'ISO45001', 'ISO45001', '/upload/pdf/homedocument/1698392927.pdf', '/upload/images/homedocument/1698392927.webp', 'yes', NULL, '2023-10-27 07:48:53'),
(5, 'ISO/IEC 27001: 2022', 'ISO/IEC 27001: 2022', '/upload/pdf/homedocument/1698393748.pdf', '/upload/images/homedocument/1698393758.webp', 'yes', NULL, '2023-10-27 08:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_videos`
--

CREATE TABLE `home_videos` (
  `id` bigint UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_input` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_videos`
--

INSERT INTO `home_videos` (`id`, `url`, `thumbnail`, `type_input`, `created_at`, `updated_at`) VALUES
(1, 'https://youtu.be/AAtodxAciJ4', '/upload/images/homevideo/1698390710.jpg', 'youtube', NULL, '2023-10-27 07:11:50'),
(2, 'https://youtu.be/vpM5BMfWUvU', '/upload/images/homevideo/1698391126.jpg', 'youtube', NULL, '2023-10-27 07:18:46'),
(3, 'https://youtu.be/vpM5BMfWUvU', '/upload/images/homevideo/1698391284.png', 'youtube', NULL, '2023-11-01 01:45:40'),
(4, 'https://youtu.be/vpM5BMfWUvU', '/upload/images/homevideo/1698391554.jpg', 'youtube', NULL, '2023-11-01 01:45:44'),
(5, 'https://youtu.be/vpM5BMfWUvU', '/upload/images/homevideo/1698391680.png', 'youtube', NULL, '2023-11-01 01:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `leave_messages`
--

CREATE TABLE `leave_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `fname_lname` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `organiz` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `leave_message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `leave_messages`
--

INSERT INTO `leave_messages` (`id`, `fname_lname`, `phone_number`, `organiz`, `email`, `leave_message`, `created_at`, `updated_at`) VALUES
(4, 'nattapol.surinkeaw', '0933501625', 'isoconsult', 'nattapol.surinkeaw@gmail.com', 'ทดสอบการส่งข้อความ', '2023-11-28 16:20:59', '2023-11-28 16:20:59'),
(5, 'nattapol surinkeaw', '0878552408', 'isoconsult-testing', 'nattapol.su@rmuti.ac.th', 'สนใจหลักสูตรทั้งออนไลน์ และ ออนไซต์ กรุณาติดต่อกลับ เพื่อสอบถามเพิ่มเติม', '2023-12-10 14:25:19', '2023-12-10 14:25:19'),
(6, 'nattapol', '0933501665', 'testtt', 'nattapol.surinkeaw@gmail.com', '<script>alert(\"hello world\")</script>', '2023-12-25 09:15:19', '2023-12-25 09:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_19_021658_create_modules_table', 1),
(6, '2023_06_19_032218_create_trainingcourses_table', 1),
(7, '2023_06_27_033822_create_elerningcourses_table', 1),
(8, '2023_08_07_145056_create_news_events_table', 1),
(9, '2023_08_07_150612_create_categories_table', 1),
(10, '2023_08_09_154634_create_quizzes_table', 1),
(11, '2023_08_11_193507_create_questions_table', 1),
(12, '2023_08_13_143405_create_annoucements_table', 1),
(13, '2023_08_14_140547_create_my_courses_table', 1),
(14, '2023_08_26_093308_create_home_videos_table', 1),
(15, '2023_09_08_090100_create_pending_courses_table', 1),
(16, '2023_09_13_035855_create_user_lernings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ISO AND INTERNATIONAL STANDARDS', '2023-09-14 08:16:58', '2023-09-14 08:16:58'),
(2, 'QULAITY', '2023-09-14 08:17:15', '2023-09-14 08:17:15'),
(3, 'PRODUCTIVITY AND ENGINEERING', '2023-09-14 08:17:43', '2023-09-14 08:17:43'),
(4, 'OCCUPATIONAL HEALTH AND SAFETY', '2023-09-14 08:18:12', '2023-09-14 08:18:12'),
(5, 'ENVIRONMENT AND ENERGY', '2023-09-14 08:18:49', '2023-09-14 08:18:49'),
(6, 'MANAGEMENT AND OTHERS', '2023-09-14 08:19:08', '2023-09-14 08:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `my_courses`
--

CREATE TABLE `my_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `elerningcourse_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_courses`
--

INSERT INTO `my_courses` (`id`, `user_id`, `elerningcourse_id`, `created_at`, `updated_at`) VALUES
(4, 1, 14, '2023-11-01 11:12:33', '2023-11-01 11:12:33'),
(5, 2, 24, '2023-11-03 15:40:10', '2023-11-03 15:40:10'),
(8, 7, 19, '2023-11-12 13:53:55', '2023-11-12 13:53:55'),
(9, 7, 21, '2023-11-12 13:53:55', '2023-11-12 13:53:55'),
(10, 9, 14, '2024-01-02 04:00:35', '2024-01-02 04:00:35'),
(11, 9, 15, '2024-01-02 04:00:35', '2024-01-02 04:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int UNSIGNED NOT NULL DEFAULT '0',
  `img_news_events` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `name`, `description`, `content`, `view`, `img_news_events`, `created_at`, `updated_at`) VALUES
(2, 'มาตรฐาน ISO 15189 VERSION 2022', 'มาตรฐาน ISO 15189 VERSION 2022', '<p>ISO 15189 เป็นมาตรฐานสากลสำหรับห้องปฏิบัติการทางการแพทย์ กิจกรรมต่าง ๆ จัดทำขึ้นภายใต้กรอบจริยธรรมและธรรมาภิบาล ซึ่งตระหนักถึงภาระหน้าที่ของผู้ให้บริการด้านสุขภาพที่มีต่อผู้ป่วย มีการดำเนินการในเวลาที่เหมาะสมเพื่อตอบสนองความต้องการของผู้ป่วยทุกคนและบุคลากรที่รับผิดชอบในการดูแลผู้ป่วยเหล่านั้น กิจกรรมต่างๆ รวมถึงการจัดเตรียมคำขอตรวจ การเตรียมผู้ป่วย การระบุตัวผู้ป่วย การเก็บตัวอย่าง การขนส่ง การดำเนินการกับตัวอย่างผู้ป่วย การเลือกการตรวจที่เหมาะสมกับวัตถุประสงค์ การตรวจตัวอย่าง การเก็บตัวอย่าง คำแนะนำแก่ผู้ใช้ห้องปฏิบัติการ ซึ่งอาจรวมถึงการแจ้งผลการตรวจแก่ผู้ป่วย การเตรียมการสำหรับการทดสอบอย่างเร่งด่วน และอื่นๆ</p><p>&nbsp;</p><p>The <a href=\"https://www.iso.org/standard/76677.html\"><strong>ISO 15189 standard</strong></a><strong> </strong>is an international quality standard for <strong>medical and clinical laboratories</strong>. Since 2007 and until its latest version update in 2022, this standard sets the requirements for <strong>quality management</strong>, technical processes, and <strong>competence</strong> <strong>in medical laboratories</strong>. Therefore, the <strong>ISO15189:2022</strong> standard promotes confidence and high quality in medical laboratories\' analysis and results generation.</p><p>&nbsp;</p><p>The ISO 15189 standard is based on both<strong> </strong><a href=\"https://www.iso.org/iso-9001-quality-management.html\"><strong>ISO 9001</strong></a><strong> </strong>and <a href=\"https://www.iso.org/ISO-IEC-17025-testing-and-calibration-laboratories.html\"><strong>17025 standards</strong></a> for <strong>quality and process requirements</strong>. The ISO 9001 standard refers to quality management requirements and <a href=\"https://www.blog-qhse.com/en/iso-17025-requirements-benefits-applications\">ISO 17025 standard</a> provides requirements for testing and calibration laboratories. However, the ISO 15189:2022 standard is destined for <strong>medical laboratories</strong>, detailing the <strong>examination processes</strong> and <strong>equipment requirements</strong> to comply with the standard and to provide high-quality and reliable results.&nbsp;</p><p>&nbsp;</p><p>The ISO 15189 standard like the ISO 17025 has <strong>5 main requirements</strong>. However, there are 5 additional criteria dedicated to medical laboratories:</p><ul><li><strong>Collecting and sharing data</strong> on the procedures, sample volumes, and sample containers;</li><li>Implementing <strong>ethical practice</strong>;</li><li><strong>Cooperating</strong> between <strong>clinical staff and the medical laboratory</strong> which is responsible for providing a quality service to clinicians providing patient samples for testing;</li><li><strong>Giving council</strong> on the different ways of testing and various samples that may be needed in laboratories;</li><li>Adding notes and remarques on the<strong> analysis results related to the diagnosis and patient care</strong>.</li></ul>', 115, '/upload/images/news/1698049682.png', '2023-09-17 09:15:44', '2024-04-26 22:34:42'),
(3, 'TL 9000 FOR TELECOMMUNICATION', 'TL 9000 FOR TELECOMMUNICATION', '<h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานที่ธุุรกิจด้านสื่อสารและโทรคมนาคมต้องมี</strong></a></h3><p>เมื่อกล่าวถึงระบบบริหารงานคุณภาพสำหรับอุตสาหกรรมการสื่อสารโทรคมนาคม ต้องชี้ประเด็นไปที่ TL 9000 เป็นมาตรฐานแรก ซึ่งข้อกำหนดในกาจัดการคุณภาพของระบบนั้นมีพื้นฐานมาจาก ISO 9001 version ล่าสุด แล้วเพิ่มเติมข้อกำหนดด้านเทคนิคเข้าไป TL 9000 มีวัตถุประสงค์ทางด้านคุณภาพที่มุ่งเน้นไปยังกลุ่มอุตสาหกรรมด้านการสื่อสารโทรคมนาคม ไม่ว่าจะเป็นทางด้านฮาร์ดแวร์ ซอฟแวร์ รวมถึงผู้ให้บริการต่างๆ ตั้งแต่ขั้นตอนการออกแบบ การพัฒนา การดำเนินการผลิต การจัดส่ง การติดตั้ง การบำรุงรักษา โดยมุ่งเน้นสู่การพัฒนาอย่างต่อเนื่องทั่วทั้งองค์กร</p><p>&nbsp;</p><h2><strong>WHAT IS TL 9000?</strong></h2><p>TL 9000 is a quality management system designed to meet supply chain requirements of the telecommunication industry. The system is intended to ensure quality by defining system requirements central to design, development, production, delivery, deployment and maintenance of telecommunications products and services. It also provides a measurement system for tracking performance and improving results.</p><p>TL 9000 certification eliminates the need for multiple quality management standards, making it a one-stop solution for telecoms industry providers who are looking to demonstrate their commitment to quality standards.</p><h2><strong>BENEFITS OF&nbsp;TL 9000 CERTIFICATION</strong></h2><p>Adopting the TL 9000 management system allows your company to demonstrate its compliance to the high standards required by the ICT and telecommunication industry. It also aids in the validation of the quality of your processes, products and services. TL 9000 enables your company to create value for customers and stakeholders through continuous improvement, strategic partnerships and high standards achieved through a solid measurement system.</p><p>Many buyers demand suppliers of equipment to be TL 9000 certified as this provides assurance that their products are dependable – TL 9000 certification is therefore essential for selling to these businesses.</p><h2><strong>TÜV SÜD IS A LEADING TL 9000 CERTIFICATION PROVIDER</strong></h2><p>TÜV SÜD works closely with ICT companies to implement the TL 9000 quality management system. Our experts can guide companies throughout the whole ICT lifecycle – from initial assessment to final certification – helping them to identify opportunities and minimise potential risks. As leading experts in quality management systems, we help businesses promote a culture of continuous improvement.</p><p>Our team of international and multilingual experts is fully equipped to advise and assist clients in achieving the requirements needed to implement the TL 9000 quality management system. Following a successful certification process, we provide you with TL 9000 certification which you can use to demonstrate your commitment to&nbsp;global quality standards.&nbsp;</p>', 131, '/upload/images/news/1698052055.webp', '2023-09-17 09:19:33', '2024-04-25 17:08:54'),
(4, 'ISO 29110', 'มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้', '<h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล+</p><h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล</p><h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล</p><p>&nbsp;</p><h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล</p><p>&nbsp;</p><h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล</p><p>&nbsp;</p><h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล</p><p>&nbsp;</p><h3><a href=\"https://isoconsult.org/news-events-detail.html\"><strong>มาตรฐานทางด้านวิศวกรรมซอฟแวร์ ที่น่านำมาใช้</strong></a></h3><p>มาตรฐาน ISO 29110 (Software Engineering-Lifecycle Profiles for Very Small Enterprises (VSE)) เป็นมาตรฐานที่ให้การรับรองคุณภาพการบริหารงานหรือผลิตภัณฑ์ซอฟต์แวร์ สำหรับองค์กรที่มีขนาดเล็ก(พนักงานไม่เกิน 25 คน) มาตรฐาน ISO 29110 เป็นมาตรฐานที่องค์กรขนาดเล็กสามารถนำไปประยุกต์ใช้ได้ดี มีส่วนช่วยในการปรับปรุงสมรรถนะองค์กร ทำให้มีการบริหารจัดการด้านซอฟต์แวร์ที่มีประสิทธิภาพ พร้อมเติบโตทางธุรกิจขององค์กร สามารถแข่งขันได้ในระดับสากล</p>', 127, '/upload/images/news/1698080154.jpg', '2023-09-17 09:21:14', '2024-04-22 09:42:10'),
(5, 'ISO/IEC 17025, VERSION 2017', 'GENERAL REQUIREMENTS FOR THE COMPETENCE OF TESTING AND CALIBRATION LABORATORIES', '<h3><a href=\"https://isoconsult.org/blog.html#\"><strong>GENERAL REQUIREMENTS FOR THE COMPETENCE OF TESTING AND CALIBRATION LABORATORIES</strong></a></h3><p>ข้อกำหนดทั่วไปว่าด้วยความสามารถห้องปฏิบัติการในการดำเนินการทดสอบและ/ หรือสอบเทียบ ซึ่งจะประกอบด้วยข้อกำหนดด้านการบริหารงานคุณภาพและ ข้อกำหนดด้านวิชาการ โดยมาตรฐานนี้สามารถที่จะนำมาใช้ได้กับทุกองค์กรที่มี การดำเนินกิจกรรมการทดสอบและ/หรือ สอบเทียบ ทำให้มั่นใจได้ว่าห้องปฏิบัติการมีการดำเนินการอย่างเป็นมาตรฐานที่สากลยอมรับ</p><p>ข้อกำหนดทั่วไปว่าด้วยความสามารถห้องปฏิบัติการในการดำเนินการทดสอบและ/ หรือสอบเทียบ ซึ่งจะประกอบด้วยข้อกำหนดด้านการบริหารงานคุณภาพและ ข้อกำหนดด้านวิชาการ โดยมาตรฐานนี้สามารถที่จะนำมาใช้ได้กับทุกองค์กรที่มี การดำเนินกิจกรรมการทดสอบและ/หรือ สอบเทียบ ทำให้มั่นใจได้ว่าห้องปฏิบัติการมีการดำเนินการอย่างเป็นมาตรฐานที่สากลยอมรับ</p><p>ข้อกำหนดทั่วไปว่าด้วยความสามารถห้องปฏิบัติการในการดำเนินการทดสอบและ/ หรือสอบเทียบ ซึ่งจะประกอบด้วยข้อกำหนดด้านการบริหารงานคุณภาพและ ข้อกำหนดด้านวิชาการ โดยมาตรฐานนี้สามารถที่จะนำมาใช้ได้กับทุกองค์กรที่มี การดำเนินกิจกรรมการทดสอบและ/หรือ สอบเทียบ ทำให้มั่นใจได้ว่าห้องปฏิบัติการมีการดำเนินการอย่างเป็นมาตรฐานที่สากลยอมรับ</p><p>&nbsp;</p><p>&nbsp;<strong>ISO/IEC 17025</strong> หรือ ข้อกําหนดทั.วไปว่าด้วยความสามารถของห้องปฏิบัติการทดสอบและสอบเทียบ (General Requirements for the Competence of Testing and Calibration &nbsp;Laboratories) เป็นมาตรฐานสากลที.ช่วยเสริมสร้างความเชื.อมั.นในความสามารถในการทดสอบหรือสอบเทียบของห้องปฏิบัติการ มีความสําคัญอย่างยิ.งกับภาคธุรกิจอุตสาหกรรมที.ต้องใช้ผล &nbsp;การทดสอบ/สอบเทียบที.มีความเที.ยงตรงแม่นยําเชื.อถือได้เป็นบรรทัดฐานการวัดและการทดสอบผลิตภัณฑ์ให้มีคุณภาพและยังช่วยขจัดอุปสรรคในการกีดกันทางการค้าอันเนื.องมาจากการทดสอบและลดการตรวจซํ/าจากประเทศคู่ค้า</p><p><br>&nbsp;</p><p>โครงสร้างของมาตรฐาน &nbsp;ISO/IEC 17025:2005 (ฉบับปัจจุบัน) ประกอบด้วย</p><p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;1) ขอบข่ายของมาตรฐาน (Scope)</p><p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;2) เอกสารอ้างอิง (Normative reference)</p><p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;3) ศัพท์และนิยาม (Terms and definition)</p><p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;4) ข้อกําหนดด้านการบริหาร (Management requirements)</p><p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;5) ข้อกําหนดด้านวิชาการ (Technical requirements)</p><p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;6) ภาคผนวก (Annexes)&nbsp;</p>', 120, '/upload/images/news/1698080164.jpg', '2023-09-17 09:28:28', '2024-04-25 17:08:58'),
(6, 'ISO 45001, VERSION 2018', 'OCCUPATIONAL HEALTH AND SAFETY MANAGEMENT SYSTEMS — REQUIREMENTS WITH GUIDANCE FOR USE', '<p>SO 45001 เป็นมาตรฐานด้านการจัดการอาชีวอนามัยและความปลอดภัย ซึ่งช่วยให้องค์กรบรรลุผลเชิงลดและป้องกันความเสี่ยงโดยใช้ระบบการจัดการ OH&amp;S ซึ่งสามารถนำไปใช้ได้กับองค์กรใด ๆ โดยไม่คำนึงถึงขนาดประเภทและกิจกรรมใด และยังสามารถใช้ได้กับความเสี่ยงด้าน OH&amp;S&nbsp;</p><p>&nbsp;</p><p>iso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้น</p><p>&nbsp;</p><p>iso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้น</p><p>&nbsp;</p><p>iso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้น</p><p>iso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้นiso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้นiso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้นiso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้นiso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้น</p><p>iso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการ</p><p>&nbsp;</p><p>งปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้นiso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้นiso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้องปฏิบัติการสำหรับตรวจสิ่งส่งตรวจ (Specimens)ของผู้เข้ามารับบริการตรวจทางสุขภาพ เพื่อให้ได้ข้อมูลต่าง ๆ เกี่ยวกับสุขภาพห้องปฏิบัติการทางการแพทย์ ณ ที่นี้รวมถึงห้องปฏิบัติการทางเทคนิคการแพทย์, ห้องปฏิบัติการพยาธิวิทยา และห้องปฏิบัติการเวชศาสตร์ชันสูตร เป็นต้น</p><p>iso 15189 คือมาตรฐานสำหรับห้องปฏิบัติการทางการแพทย์ ซึ่งเป็นห้</p>', 110, '/upload/images/news/1698080174.jpg', '2023-09-26 02:26:41', '2024-04-21 10:53:26'),
(7, 'AS/EN/JISQ9100/10/20, AVIATION, SPACE AND DEFENSE', 'AEROSPACE STANDARD', '<p>มาตรฐาน AS/EN/JISQ9100/9110/9120 เป็นมาตรฐานด้านการบิน อวกาศและการป้องกัน ซึ่งหน่วยงานไม่ว่าจะเป็นภาครัฐฯหรือเอกชนหากมีธุรกิจที่เกี่ยวข้องด้าน Aviation แล้วจำเป็นต้องปฏิบัติตามกฎระเบียบด้านการบิน กฎเหล่านี้มีทั้งระดับประเทศและระดับสากล ซึ่งต้องรู้ว่าองค์กรมีความเกี่ยวข้องอย่างไรและต้องปฏิบัติตามอย่างเคร่งครัดเนื่องจากความเสี่ยงในการไม่ปฏิบัติตามกฎต่างๆเกี่ยวพันกับความมั่นคงขององค์กรเลยทีเดียว</p><p>&nbsp;</p><p>มาตรฐาน AS/EN/JISQ9100/9110/9120 เป็นมาตรฐานด้านการบิน อวกาศและการป้องกัน ซึ่งหน่วยงานไม่ว่าจะเป็นภาครัฐฯหรือเอกชนหากมีธุรกิจที่เกี่ยวข้องด้าน Aviation แล้วจำเป็นต้องปฏิบัติตามกฎระเบียบด้านการบิน กฎเหล่านี้มีทั้งระดับประเทศและระดับสากล ซึ่งต้องรู้ว่าองค์กรมีความเกี่ยวข้องอย่างไรและต้องปฏิบัติตามอย่างเคร่งครัดเนื่องจากความเสี่ยงในการไม่ปฏิบัติตามกฎต่างๆเกี่ยวพันกับความมั่นคงขององค์กรเลยทีเดียว</p><p>&nbsp;</p><p>มาตรฐาน AS/EN/JISQ9100/9110/9120 เป็นมาตรฐานด้านการบิน อวกาศและการป้องกัน ซึ่งหน่วยงานไม่ว่าจะเป็นภาครัฐฯหรือเอกชนหากมีธุรกิจที่เกี่ยวข้องด้าน Aviation แล้วจำเป็นต้องปฏิบัติตามกฎระเบียบด้านการบิน กฎเหล่านี้มีทั้งระดับประเทศและระดับสากล ซึ่งต้องรู้ว่าองค์กรมีความเกี่ยวข้องอย่างไรและต้องปฏิบัติตามอย่างเคร่งครัดเนื่องจากความเสี่ยงในการไม่ปฏิบัติตามกฎต่างๆเกี่ยวพันกับความมั่นคงขององค์กรเลยทีเดียว</p>', 111, '/upload/images/news/1698080193.jpg', '2023-09-26 02:27:59', '2024-04-19 13:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `other_trainings`
--

CREATE TABLE `other_trainings` (
  `id` bigint UNSIGNED NOT NULL,
  `pending_id` bigint UNSIGNED NOT NULL,
  `other_course` varchar(255) NOT NULL,
  `other_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `other_trainings`
--

INSERT INTO `other_trainings` (`id`, `pending_id`, `other_course`, `other_date`, `created_at`, `updated_at`) VALUES
(1, 4, '4', '2023-11-29', '2023-11-07 11:06:01', '2023-11-07 11:06:01'),
(2, 5, '4', '2023-11-29', '2023-11-07 11:06:18', '2023-11-07 11:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending_courses`
--

CREATE TABLE `pending_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_courses` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `customer_banknumber` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalmoney` decimal(8,2) NOT NULL,
  `customer_tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankcustomer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankcompany` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_slip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_transfer` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reading` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pending_courses`
--

INSERT INTO `pending_courses` (`id`, `name`, `total_courses`, `total_price`, `customer_banknumber`, `totalmoney`, `customer_tel`, `bankcustomer`, `bankcompany`, `payment_slip`, `date_transfer`, `user_id`, `reading`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(4, 'nattapol surinkeaw', '24', 6500.00, '123456789', 6500.00, '0933501625', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1699025924.jpg', NULL, '2', 'yes', NULL, 'approve', '2023-11-03 15:38:44', '2023-11-03 15:40:10'),
(5, 'Thanakit Niyomsuk', '15,16', 15000.00, '025505500', 15000.00, '0966085394', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1699616943.jpg', NULL, '3', 'yes', NULL, 'approve', '2023-11-10 11:49:03', '2023-11-10 11:51:52'),
(6, 'nattapol surinkeaw', '19,21', 6500.00, '123456789', 6500.00, '0933850162', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1699797002.jpg', NULL, '7', 'yes', NULL, 'approve', '2023-11-12 13:50:02', '2023-11-12 13:53:55'),
(7, 'www', '21', 3250.00, '4444', 66.00, '444444', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1703648911.png', NULL, '1', 'yes', NULL, 'pending', '2023-12-27 03:48:31', '2023-12-29 02:09:53'),
(8, 'yotin', '14,15', 14500.00, '0966606600', 14500.00, '0966085394', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1704167641.jpg', NULL, '9', 'yes', NULL, 'approve', '2024-01-02 03:54:01', '2024-01-02 04:00:35'),
(9, 'nattapol', '15', 7500.00, '45456456', 555555.00, '0933501625', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1704897464.PNG', '2024-01-10 14:37:00', '2', 'yes', NULL, 'pending', '2024-01-10 14:37:46', '2024-01-15 14:38:29'),
(10, 'dasdas', '15', 4500.00, '45645645', 45002.00, '0933501625', 'ธนาคารกรุงเทพ', 'ธนาคารกรุงไทย', '/upload/images/payments/1708337581.png', '2024-02-19 10:08:00', '1', 'no', NULL, 'pending', '2024-02-19 10:13:01', '2024-02-19 10:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `pending_trainings`
--

CREATE TABLE `pending_trainings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `billing_id` bigint UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `training_reserve` varchar(255) NOT NULL,
  `code_train` varchar(10) NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `number_participants` int NOT NULL,
  `date_reserve` date NOT NULL,
  `special_request` varchar(255) DEFAULT NULL,
  `reserve_name` varchar(255) NOT NULL,
  `reserve_position` varchar(255) NOT NULL,
  `reserve_tel` varchar(10) NOT NULL,
  `reserve_email` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pending_trainings`
--

INSERT INTO `pending_trainings` (`id`, `user_id`, `billing_id`, `company`, `branch`, `address`, `contact`, `position`, `phone`, `email`, `fax`, `training_reserve`, `code_train`, `fee`, `number_participants`, `date_reserve`, `special_request`, `reserve_name`, `reserve_position`, `reserve_tel`, `reserve_email`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 3, '31/23', '', 'บ้านนันทวัน', '--', '--', '0912345678', 'thanakrit.ni@rmuti.ac.th', '--', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 14, '2023-10-15', NULL, 'Thanakrit Niyomsuk', '32/2', '0912345678', 'thanakrit.ni@rmuti.ac.th', 'pending', '2023-10-22 14:39:24', '2023-10-22 14:39:24'),
(4, 2, 4, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '0878552408', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 50, '2023-11-29', NULL, 'nattapol surinkeaw', 'programmer', '0878552408', 'ygsaleninja003@gmail.com', 'approve', '2023-11-07 11:06:01', '2024-04-25 17:07:34'),
(5, 2, 5, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '0878552408', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 50, '2023-11-29', NULL, 'nattapol surinkeaw', 'programmer', '0878552408', 'ygsaleninja003@gmail.com', 'pending', '2023-11-07 11:06:18', '2023-11-07 11:06:18'),
(6, 2, 6, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '0878552408', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 50, '2023-11-29', NULL, 'nattapol surinkeaw', 'programmer', '0878552408', 'ygsaleninja003@gmail.com', 'pending', '2023-11-07 11:08:36', '2023-11-07 11:08:36'),
(7, 2, 7, 'บริษัทฮาไม่จำกัด', '', '427 บ้านโคกสูง ตำบลโนนอุดม อำเภอชุมแพ จังหวัดขอนแก่น\nโนนอุดม', '0878552408', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '0878552408', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 50, '2023-11-29', NULL, 'nattapol surinkeaw', 'programmer', '0878552408', 'ygsaleninja003@gmail.com', 'pending', '2023-11-07 11:09:50', '2023-11-07 11:09:50'),
(8, 7, 8, 'isoconsult', '', '124 khonkaen', '0933501625', 'programmer', '0933501625', 'nattapol.su@rmuti.ac.th', '123456', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 10, '2023-11-15', NULL, 'nattapol surinkeaw', 'programmer', '0933501625', 'nattapol.su@rmuti.ac.th', 'approve', '2023-11-12 14:15:45', '2023-11-12 14:18:19'),
(9, 2, 9, 'testtt', '', '424 sd4asd56a46', '0933501625', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', 'ISO 14001:2015 Environmental Management System', 'S1002', 3000.00, 10, '2023-11-30', NULL, 'nattapol surinkeaw', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', 'pending', '2023-11-28 05:41:05', '2023-11-28 05:41:05'),
(10, 2, 10, 'testtt', '', '424 sd4asd56a46', '0933501625', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', 'ISO 14001:2015 Environmental Management System', 'S1002', 3000.00, 10, '2023-11-30', NULL, 'nattapol surinkeaw', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', 'pending', '2023-11-28 05:41:28', '2023-11-28 05:41:28'),
(11, 2, 11, 'testtt', '', '424 sd4asd56a46', '0933501625', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', 'ISO 14001:2015 Environmental Management System', 'S1002', 3000.00, 10, '2023-11-30', NULL, 'nattapol surinkeaw', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', 'pending', '2023-11-28 05:42:19', '2023-11-28 05:42:19'),
(12, 2, 12, 'testtt', '', '424 sd4asd56a46', '0933501625', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', '75477', 'ISO 14001:2015 Environmental Management System', 'S1002', 3000.00, 10, '2023-11-30', NULL, 'nattapol surinkeaw', 'programmer', '0933501625', 'nattapol.surinkeaw@gmail.com', 'pending', '2023-11-28 05:44:22', '2023-11-28 05:44:22'),
(13, 1, 13, 'qq', '', 'qq', 'qq', 'qq', '111', 'test@isoconsult.org', '11', 'Environment awareness', 'E1001', 3000.00, 1, '2023-12-28', 'rrr', 'ww', 'ww', '211', 'test@isoconsult.org', 'pending', '2023-12-27 03:26:57', '2023-12-27 03:26:57'),
(14, 1, 14, 'testCompany', '44455', '2455 moo 7', '0933501625', 'programmer', '0933501625', 'nutaponza123456@hotmail.com', '123456', 'ISO 9001:2015 Quality management systems', 'S1001', 3000.00, 10, '2024-01-26', NULL, 'nattapol surinkeaw', 'programmer', '0933501625', 'nattapol.su@rmuti.ac.th', 'pending', '2024-01-07 15:46:42', '2024-01-07 15:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(159, 'App\\Models\\User', 7, 'nattapol.su@rmuti.ac.th', '30b1644fed629f475560b17ba5d4b1f18ef799b6772edf422ae2ebb010946eed', '[\"user\"]', NULL, NULL, '2023-11-14 16:51:36', '2023-11-14 16:51:36'),
(174, 'App\\Models\\User', 3, 'thanakrit@gmail.com', '0bd00c237dae9c36ea546abef4fb26effae4cb97f3f8702ea539e1dba0b8e337', '[\"user\"]', NULL, NULL, '2023-11-24 14:49:27', '2023-11-24 14:49:27'),
(232, 'App\\Models\\User', 10, 'sitbos087@gmail.com', '7c40d40009bd5274ffba2eddbcc4b7c8731c3901dfbdf80dc446eb1987d63e1c', '[\"user\"]', NULL, NULL, '2024-01-11 04:54:32', '2024-01-11 04:54:32'),
(246, 'App\\Models\\User', 9, 'yotin.33@gmail.com', 'ae40a6e5c4c105cebe456a7d69634352a28f0e3cee79daaf146373063b8e1e3a', '[\"user\"]', NULL, NULL, '2024-01-28 08:34:45', '2024-01-28 08:34:45'),
(258, 'App\\Models\\User', 2, 'nattapol@gmail.com', '2f5d5b28ebdfd682f6644c80c5b6f7d9eaf95edaeb976836f2c4f4afd28a1634', '[\"user\"]', NULL, NULL, '2024-02-16 09:48:23', '2024-02-16 09:48:23'),
(264, 'App\\Models\\User', 1, 'admin@gmail.com', '8160332d479b1197b49ad03418fdfe149d0e9b68a3a594e96e2cba9eaf677f36', '[\"admin\"]', NULL, NULL, '2024-04-27 08:43:02', '2024-04-27 08:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `score`, `created_at`, `updated_at`) VALUES
(28, 9, '<p><strong>ข้อ 1. การทดสอบภายใน (internal audit) หมายถึงอะไร</strong></p>', '(A) กระบวนการตรวจสอบโดยบุคคลหรือกลุ่มบุคคลที่อิสระและมีความเชี่ยวชาญเพื่อประเมินประสิทธิภาพของการควบคุมภายใน', '(B) กระบวนการตรวจสอบโดยบุคคลหรือกลุ่มบุคคลที่อิสระและมีความเชี่ยวชาญเพื่อประเมินความถูกต้องของข้อมูลทางการเงิน', '(C) กระบวนการตรวจสอบโดยบุคคลหรือกลุ่มบุคคลที่อิสระและมีความเชี่ยวชาญเพื่อประเมินประสิทธิภาพของกระบวนการทางห้องปฏิบัติการ', '(D) กระบวนการตรวจสอบโดยบุคคลหรือกลุ่มบุคคลที่อิสระและมีความเชี่ยวชาญเพื่อประเมินความถูกต้องและประสิทธิผลของการควบคุมภายใน', 'choice4', 10, '2023-11-01 11:00:22', '2023-11-01 11:00:22'),
(29, 9, '<p><strong>ข้อ 2. วัตถุประสงค์ของการทดสอบภายในคืออะไร</strong></p>', '(A) เพื่อระบุและประเมินความเสี่ยงที่อาจส่งผลต่อความถูกต้องและความสมบูรณ์ของข้อมูลทางห้องปฏิบัติการ', '(B) เพื่อระบุและประเมินความเสี่ยงที่อาจส่งผลต่อประสิทธิภาพของกระบวนการทางห้องปฏิบัติการ', '(C) เพื่อระบุและประเมินความเสี่ยงที่อาจส่งผลต่อประสิทธิภาพของการควบคุมภายใน', '(D) เพื่อระบุและประเมินความเสี่ยงที่อาจส่งผลต่อความถูกต้องและความสมบูรณ์ของข้อมูลทางห้องปฏิบัติการและประสิทธิภาพของกระบวนการทางห้องปฏิบัติการ', 'choice4', 10, '2023-11-01 11:01:33', '2023-11-01 11:01:33'),
(30, 9, '<p><strong>ข้อ 3. เทคนิคการทดสอบภายในที่สำคัญ ได้แก่ ข้อใดบ้าง</strong></p>', '(A) การสังเกต การสัมภาษณ์ การทบทวนเอกสาร และการทดลอง', '(B) การสังเกต การสัมภาษณ์ การทบทวนเอกสาร และการติดตามผล', '(C) การสังเกต การสัมภาษณ์ การทบทวนเอกสาร และการติดตามผล', '(D) การสังเกต การสัมภาษณ์ การทบทวนเอกสาร และการทดสอบ', 'choice1', 10, '2023-11-01 11:02:37', '2023-11-01 11:02:37'),
(31, 9, '<p><strong>ข้อ 4. การสังเกต (observation) คืออะไร</strong></p>', '(A) การดูและบันทึกกิจกรรมหรือกระบวนการที่เกิดขึ้น', '(B) การพูดคุยกับบุคคลที่เกี่ยวข้องเพื่อรวบรวมข้อมูล', '(C) การทบทวนเอกสารและบันทึกเพื่อรวบรวมข้อมูล', '(D) การทำซ้ำกระบวนการเพื่อตรวจสอบประสิทธิภาพ', 'choice1', 10, '2023-11-01 11:03:42', '2023-11-01 11:03:42'),
(32, 9, '<p><strong>ข้อ 5. การสัมภาษณ์ (interview) คืออะไร</strong></p>', '(A) การดูและบันทึกกิจกรรมหรือกระบวนการที่เกิดขึ้น', '(B) การพูดคุยกับบุคคลที่เกี่ยวข้องเพื่อรวบรวมข้อมูล', '(C) การทบทวนเอกสารและบันทึกเพื่อรวบรวมข้อมูล', '(D) การทำซ้ำกระบวนการเพื่อตรวจสอบประสิทธิภาพ', 'choice2', 10, '2023-11-01 11:05:19', '2023-11-01 11:05:19'),
(33, 9, '<p><strong>ข้อ 6. การทบทวนเอกสาร (document review) คืออะไร</strong></p>', '(A) การดูและบันทึกกิจกรรมหรือกระบวนการที่เกิดขึ้น', '(B) การพูดคุยกับบุคคลที่เกี่ยวข้องเพื่อรวบรวมข้อมูล', '(C) การทบทวนเอกสารและบันทึกเพื่อรวบรวมข้อมูล', '(D) การทำซ้ำกระบวนการเพื่อตรวจสอบประสิทธิภาพ', 'choice3', 10, '2023-11-01 11:06:21', '2023-11-01 11:06:21'),
(34, 9, '<p><strong>ข้อ 7. การทดลอง (testing) คืออะไร</strong></p>', '(A) การดูและบันทึกกิจกรรมหรือกระบวนการที่เกิดขึ้น', '(B) การพูดคุยกับบุคคลที่เกี่ยวข้องเพื่อรวบรวมข้อมูล', '(C) การทบทวนเอกสารและบันทึกเพื่อรวบรวมข้อมูล', '(D) การทำซ้ำกระบวนการเพื่อตรวจสอบประสิทธิภาพ', 'choice4', 10, '2023-11-01 11:07:24', '2023-11-01 11:07:24'),
(35, 9, '<p><strong>ข้อ 8. เทคนิคการทดสอบภายในใดที่สามารถใช้เพื่อประเมินความถูกต้องและความสมบูรณ์ของข้อมูลทางห้องปฏิบัติการ</strong></p>', '(A) การสังเกต การสัมภาษณ์ และการทบทวนเอกสาร', '(B) การสังเกต การสัมภาษณ์ และการทดลอง', '(C) การสัมภาษณ์ การทบทวนเอกสาร และการทดลอง', '(D) การทบทวนเอกสาร และการทดลอง', 'choice4', 10, '2023-11-01 11:08:24', '2023-11-01 11:08:24'),
(36, 9, '<p><strong>ข้อ 9. เทคนิคการทดสอบภายในใดที่สามารถใช้เพื่อประเมินประสิทธิภาพของกระบวนการทางห้องปฏิบัติการ</strong></p>', '(A) การสังเกต การสัมภาษณ์ และการทบทวนเอกสาร', '(B) การสังเกต การสัมภาษณ์ และการทดลอง', '(C) การสัมภาษณ์ การทบทวนเอกสาร และการทดลอง', '(D) การสังเกต การสัมภาษณ์ การทบทวนเอกสาร และการทดลอง', 'choice4', 10, '2023-11-01 11:09:31', '2023-11-01 11:09:31'),
(37, 9, '<p><strong>ข้อ 10. เทคนิคการทดสอบภายในใดที่สามารถใช้เพื่อประเมินประสิทธิภาพของการควบคุมภายใน</strong></p>', '(A) การสังเกต การสัมภาษณ์ และการทบทวนเอกสาร', '(B) การสังเกต การสัมภาษณ์ และการทดลอง', '(C) การสัมภาษณ์ การทบทวนเอกสาร และการทดลอง', '(D) การสังเกต การสัมภาษณ์ การทบทวนเอกสาร และการติดตามผล', 'choice4', 10, '2023-11-01 11:10:23', '2023-11-01 11:10:23'),
(38, 11, '<ol><li>วัตถุประสงค์หลักของการตรวจสอบภายในคืออะไร</li></ol>', '(A) เพื่อตรวจสอบว่าระบบบริหารคุณภาพเป็นไปตามข้อกำหนดของมาตรฐาน ISO 13485: 2016', '(B) เพื่อระบุโอกาสในการปรับปรุง', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', '(D) ทั้ง (A) และ (B)', 'choice4', 10, '2023-11-01 12:05:14', '2023-11-01 12:05:14'),
(39, 11, '<p>2. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าเอกสารเป็นไปตามข้อกำหนดของมาตรฐาน ISO 13485: 2016&nbsp;</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A) และ (B)', 'choice1', 10, '2023-11-01 12:06:50', '2023-11-01 12:06:50'),
(40, 11, '<p>3. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่ากระบวนการทำงานอย่างมีประสิทธิภาพ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A), (B) และ (C)', 'choice4', 10, '2023-11-01 12:07:41', '2023-11-01 12:07:41'),
(41, 11, '<p>4. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าระบบบริหารคุณภาพได้รับการทบทวนอย่างสม่ำเสมอ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) การติดตามผล', 'choice4', 10, '2023-11-01 12:08:48', '2023-11-01 12:08:48'),
(42, 11, '<p>5. ผู้ตรวจสอบภายในควรมีทักษะและความรู้อะไรบ้าง</p>', '(A) ความรู้เกี่ยวกับมาตรฐาน ISO 13485: 2016', '(B) ทักษะการสังเกต', '(C) ทักษะการสัมภาษณ์', '(D) ทั้ง (A), (B) และ (C)', 'choice4', 10, '2023-11-01 12:09:25', '2023-11-01 12:09:25'),
(43, 13, '<ol><li>วัตถุประสงค์หลักของการตรวจสอบภายในสำหรับ AS9100(D) คืออะไร</li></ol>', '(A) เพื่อตรวจสอบว่าระบบบริหารคุณภาพเป็นไปตามข้อกำหนดของ AS9100(D)', '(B) เพื่อระบุโอกาสในการปรับปรุง', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', '(D) ทั้ง (A) และ (B)', 'choice4', 10, '2023-11-01 12:24:33', '2023-11-01 12:24:33'),
(44, 13, '<p>2. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าเอกสารเป็นไปตามข้อกำหนดของ AS9100(D)</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A) และ (B)', 'choice1', 10, '2023-11-01 12:25:33', '2023-11-01 12:25:33'),
(45, 13, '<p>3. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่ากระบวนการทำงานอย่างมีประสิทธิภาพ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A), (B) และ (C)', 'choice4', 10, '2023-11-01 12:27:30', '2023-11-01 12:27:30'),
(46, 13, '<p>4. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าระบบบริหารคุณภาพได้รับการทบทวนอย่างสม่ำเสมอ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) การติดตามผล', 'choice4', 10, '2023-11-01 12:28:21', '2023-11-01 12:28:21'),
(47, 13, '<p>5. ผู้ตรวจสอบภายในสำหรับ AS9100(D) ควรมีทักษะและความรู้อะไรบ้าง</p>', '(A) ความรู้เกี่ยวกับมาตรฐาน AS9100(D)', '(B) ทักษะการสังเกต', '(C) ทักษะการสัมภาษณ์', '(C) ทักษะการสัมภาษณ์', 'choice4', 10, '2023-11-01 12:29:01', '2023-11-01 12:29:01'),
(48, 14, '<ol><li>ข้อกำหนดข้อใดของ ISO 13485 กำหนดให้องค์กรต้องจัดให้มีระบบบริหารคุณภาพที่ครอบคลุมในทุกกิจกรรมที่เกี่ยวข้องกับผลิตภัณฑ์และบริการ</li></ol>', '(A) 4.1', '(B) 4.2.1', '(C) 4.2.2', '(D) 4.2.3', 'choice1', 2, '2023-11-01 12:36:23', '2023-11-01 12:36:23'),
(49, 14, '<p>2. ข้อกำหนดข้อใดของ ISO 13485 กำหนดให้องค์กรต้องจัดทำคู่มือคุณภาพ</p>', '(A) 4.2.1', '(B) 4.2.2', '(C) 4.2.3', '(D) 4.2.4', 'choice2', 2, '2023-11-01 12:37:09', '2023-11-01 12:37:09'),
(50, 14, '<p>3. ข้อกำหนดข้อใดของ ISO 13485 กำหนดให้องค์กรต้องกำหนดกระบวนการและขั้นตอนที่จำเป็นเพื่อให้มั่นใจว่าผลิตภัณฑ์และบริการเป็นไปตามข้อกำหนด</p>', '(A) 4.4', '(B) 4.5', '(C) 4.6', '(D) 4.7', 'choice1', 2, '2023-11-01 12:38:00', '2023-11-01 12:38:00'),
(51, 14, '<p>4. ข้อกำหนดข้อใดของ ISO 13485 กำหนดให้องค์กรต้องดำเนินการติดตามและวัดผลกระบวนการ</p>', '(A) 4.4', '(B) 4.5', '(C) 4.6', '(D) 4.7', 'choice2', 2, '2023-11-01 12:38:47', '2023-11-01 12:38:47'),
(52, 14, '<p>5. ข้อกำหนดข้อใดของ ISO 13485 กำหนดให้องค์กรต้องดำเนินการแก้ไขและป้องกัน</p>', '(A) 4.4', '(B) 4.5', '(C) 4.6', '(D) 4.7', 'choice4', 2, '2023-11-01 12:39:55', '2023-11-01 12:39:55'),
(53, 15, '<ol><li>วัตถุประสงค์หลักของการตรวจสอบภายในสำหรับ ISO/IEC 17025: 2017 คืออะไร</li></ol>', '(A) เพื่อตรวจสอบว่าระบบบริหารคุณภาพเป็นไปตามข้อกำหนดของ ISO/IEC 17025: 2017', '(B) เพื่อระบุโอกาสในการปรับปรุง', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', '(D) ทั้ง (A) และ (B)', 'choice4', 2, '2023-11-01 12:46:26', '2023-11-01 12:46:26'),
(54, 15, '<p>2. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าเอกสารเป็นไปตามข้อกำหนดของ ISO/IEC 17025: 2017</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A) และ (B)', 'choice1', 2, '2023-11-01 12:46:59', '2023-11-01 12:46:59'),
(55, 15, '<p>3. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่ากระบวนการทำงานอย่างมีประสิทธิภาพ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A), (B) และ (C)', 'choice3', 2, '2023-11-01 12:49:08', '2023-11-01 12:49:08'),
(56, 15, '<p>4. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าระบบบริหารคุณภาพได้รับการทบทวนอย่างสม่ำเสมอ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) การติดตามผล', 'choice4', 2, '2023-11-01 12:50:09', '2023-11-01 12:50:09'),
(57, 15, '<p>5.ผู้ตรวจสอบภายในสำหรับ ISO/IEC 17025: 2017 ควรมีทักษะและความรู้อะไรบ้าง</p>', '(A) ความรู้เกี่ยวกับมาตรฐาน ISO/IEC 17025: 2017', '(B) ทักษะการสังเกต', '(C) ทักษะการสัมภาษณ์', '(D) ทั้ง (A), (B) และ (C)', 'choice4', 2, '2023-11-01 12:50:54', '2023-11-01 12:50:54'),
(58, 16, '<ol><li>หลักการสำคัญของมาตรฐาน FSC คืออะไร</li></ol>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 12:56:35', '2023-11-01 12:56:35'),
(59, 16, '<p>2. หลักการใดของมาตรฐาน FSC มุ่งเน้นไปที่การมีส่วนร่วมของชุมชนท้องถิ่น</p>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A) และ (B)', 'choice2', 2, '2023-11-01 12:57:13', '2023-11-01 12:57:13'),
(60, 16, '<p>3. หลักการใดของมาตรฐาน FSC มุ่งเน้นไปที่การปกป้องความหลากหลายทางชีวภาพ</p>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A) และ (B)', 'choice3', 2, '2023-11-01 12:57:56', '2023-11-01 12:57:56'),
(61, 16, '<p>หลักการใดของมาตรฐาน FSC มุ่งเน้นไปที่การจัดการป่าไม้อย่างยั่งยืน</p>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 12:58:45', '2023-11-01 12:58:45'),
(62, 16, '<p>5. องค์กรใดที่ประสงค์จะได้รับการรับรอง FSC ต้องผ่านกระบวนการใดบ้าง</p>', '(A) กระบวนการประเมิน', '(B) กระบวนการทบทวน', '(C) ทั้ง (A) และ (B)', '(D) คุณค่าทางสิ่งแวดล้อม', 'choice3', 2, '2023-11-01 12:59:59', '2023-11-01 12:59:59'),
(63, 17, '<ol><li>วัตถุประสงค์หลักของการตรวจสอบภายในสำหรับ IATF16949: 2016 คืออะไร</li></ol>', '(A) เพื่อตรวจสอบว่าระบบบริหารคุณภาพเป็นไปตามข้อกำหนดของ IATF16949: 2016', '(B) เพื่อระบุโอกาสในการปรับปรุง', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', '(D) ทั้ง (A) และ (B)', 'choice4', 2, '2023-11-01 13:04:14', '2023-11-01 13:04:14'),
(64, 17, '<p>2. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าเอกสารเป็นไปตามข้อกำหนดของ IATF16949: 2016</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A) และ (B)', 'choice1', 2, '2023-11-01 13:05:41', '2023-11-01 13:05:41'),
(65, 17, '<p>3. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่ากระบวนการทำงานอย่างมีประสิทธิภาพ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 13:06:41', '2023-11-01 13:06:41'),
(66, 17, '<p>4. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าระบบบริหารคุณภาพได้รับการทบทวนอย่างสม่ำเสมอ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) การติดตามผล', 'choice4', 2, '2023-11-01 13:07:26', '2023-11-01 13:07:26'),
(67, 17, '<p>5. ผู้ตรวจสอบภายในสำหรับ IATF16949: 2016 ควรมีทักษะและความรู้อะไรบ้าง</p>', '(A) ความรู้เกี่ยวกับมาตรฐาน IATF16949: 2016', '(B) ทักษะการสังเกต', '(C) ทักษะการสัมภาษณ์', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 13:08:12', '2023-11-01 13:08:12'),
(68, 18, '<ol><li>ข้อกำหนดใดของ ISO/IEC 17025: 2017 ระบุว่าห้องปฏิบัติการต้องกำหนดขอบเขตของระบบการจัดการคุณภาพ?</li></ol>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.4', 'choice1', 2, '2023-11-01 13:13:42', '2023-11-01 13:13:42'),
(69, 18, '<p>2. ข้อกำหนดใดของ ISO/IEC 17025: 2017 ระบุว่าห้องปฏิบัติการต้องจัดทำเอกสารระบบการจัดการคุณภาพ?</p>', '(A) 4.2', '(B) 4.3', '(C) 4.4', '(D) 4.5', 'choice2', 2, '2023-11-01 13:14:23', '2023-11-01 13:14:23'),
(70, 18, '<p>3. ข้อกำหนดใดของ ISO/IEC 17025: 2017 ระบุว่าห้องปฏิบัติการต้องควบคุมเอกสาร?</p>', '(A) 4.2', '(B) 4.3', '(C) 4.4', '(D) 4.5', 'choice3', 2, '2023-11-01 13:15:19', '2023-11-01 13:15:19'),
(71, 18, '<p>4. ข้อกำหนดใดของ ISO/IEC 17025: 2017 ระบุว่าห้องปฏิบัติการต้องระบุและควบคุมกระบวนการที่จำเป็น?</p>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.4', 'choice2', 2, '2023-11-01 13:16:08', '2023-11-01 13:16:08'),
(72, 18, '<p>5. ข้อกำหนดใดของ ISO/IEC 17025: 2017 ระบุว่าห้องปฏิบัติการต้องตรวจสอบและทบทวนระบบการจัดการคุณภาพ?</p>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.5', 'choice4', 2, '2023-11-01 13:17:00', '2023-11-01 13:17:00'),
(73, 19, '<ol><li>วัตถุประสงค์หลักของการตรวจสอบภายในสำหรับ ISO/IEC27001: 2022 คืออะไร</li></ol>', '(A) เพื่อตรวจสอบว่าระบบบริหารความปลอดภัยสารสนเทศเป็นไปตามข้อกำหนดของ ISO/IEC27001: 2022', '(B) เพื่อระบุโอกาสในการปรับปรุง', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', '(D) ทั้ง (A) และ (B)', 'choice4', 2, '2023-11-01 13:22:54', '2023-11-01 13:22:54'),
(74, 19, '<p>2. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าเอกสารเป็นไปตามข้อกำหนดของ ISO/IEC27001: 2022</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A) และ (B)', 'choice1', 2, '2023-11-01 13:23:36', '2023-11-01 13:23:36'),
(75, 19, '<p>3. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่ากระบวนการทำงานอย่างมีประสิทธิภาพ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 13:27:22', '2023-11-01 13:27:22'),
(76, 19, '<p>4. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าระบบบริหารความปลอดภัยสารสนเทศได้รับการทบทวนอย่างสม่ำเสมอ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) การติดตามผล', 'choice4', 2, '2023-11-01 13:28:05', '2023-11-01 13:28:05'),
(77, 19, '<p>5. ผู้ตรวจสอบภายในสำหรับ ISO/IEC27001: 2022 ควรมีทักษะและความรู้อะไรบ้าง</p>', '(A) ความรู้เกี่ยวกับมาตรฐาน ISO/IEC27001: 2022', '(B) ทักษะการสังเกต', '(C) ทักษะการสัมภาษณ์', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 13:28:43', '2023-11-01 13:28:43'),
(78, 20, '<ol><li>ข้อกำหนดใดของ ISO 15189: 2022 ระบุว่าห้องปฏิบัติการต้องกำหนดขอบเขตของระบบการจัดการคุณภาพ?</li></ol>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.4', 'choice1', 2, '2023-11-01 13:46:38', '2023-11-01 13:46:38'),
(79, 20, '<p>2. ข้อกำหนดใดของ ISO 15189: 2022 ระบุว่าห้องปฏิบัติการต้องจัดทำเอกสารระบบการจัดการคุณภาพ?</p>', '(A) 4.2', '(B) 4.3', '(C) 4.4', '(D) 4.5', 'choice2', 2, '2023-11-01 13:48:42', '2023-11-01 13:48:42'),
(80, 20, '<p>3. ข้อกำหนดใดของ ISO 15189: 2022 ระบุว่าห้องปฏิบัติการต้องควบคุมเอกสาร?</p>', '(A) 4.2', '(B) 4.3', '(C) 4.4', '(D) 4.5', 'choice3', 2, '2023-11-01 13:49:24', '2023-11-01 13:49:24'),
(81, 20, '<p>4. ข้อกำหนดใดของ ISO 15189: 2022 ระบุว่าห้องปฏิบัติการต้องระบุและควบคุมกระบวนการที่จำเป็น?</p>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.4', 'choice2', 2, '2023-11-01 13:50:38', '2023-11-01 13:50:38'),
(82, 20, '<p>5. ข้อกำหนดใดของ ISO 15189: 2022 ระบุว่าห้องปฏิบัติการต้องตรวจสอบและทบทวนระบบการจัดการคุณภาพ?</p>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(C) 4.3', 'choice4', 2, '2023-11-01 13:51:18', '2023-11-01 13:51:18'),
(83, 21, '<ol><li>วัตถุประสงค์หลักของการตรวจสอบภายในสำหรับ ISO 14001: 2015 คืออะไร</li></ol>', '(A) เพื่อตรวจสอบว่าระบบการจัดการสิ่งแวดล้อมเป็นไปตามข้อกำหนดของ ISO 14001: 2015', '(B) เพื่อระบุโอกาสในการปรับปรุง', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', '(C) เพื่อตรวจสอบประสิทธิภาพของกระบวนการ', 'choice4', 2, '2023-11-01 13:55:10', '2023-11-01 13:55:10'),
(84, 21, '<p>2. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าเอกสารเป็นไปตามข้อกำหนดของ ISO 14001: 2015</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A) และ (B)', 'choice1', 2, '2023-11-01 13:56:14', '2023-11-01 13:56:14'),
(85, 21, '<p>3. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่ากระบวนการทำงานอย่างมีประสิทธิภาพ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 13:56:57', '2023-11-01 13:56:57'),
(86, 21, '<p>4. เทคนิคการตรวจสอบภายในใดที่ใช้ในการตรวจสอบว่าระบบการจัดการสิ่งแวดล้อมได้รับการทบทวนอย่างสม่ำเสมอ</p>', '(A) การตรวจสอบเอกสาร', '(B) การสัมภาษณ์', '(C) การสังเกต', '(D) การติดตามผล', 'choice4', 2, '2023-11-01 13:57:43', '2023-11-01 13:57:43'),
(87, 21, '<p>5. ผู้ตรวจสอบภายในสำหรับ ISO 14001: 2015 ควรมีทักษะและความรู้อะไรบ้าง</p>', '(A) ความรู้เกี่ยวกับมาตรฐาน ISO 14001: 2015', '(B) ทักษะการสังเกต', '(C) ทักษะการสัมภาษณ์', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-01 13:58:31', '2023-11-01 13:58:31'),
(88, 22, '<ol><li>ข้อกำหนดใดของ IATF16949: 2016 ระบุให้องค์กรต้องกำหนดขอบเขตของระบบการจัดการคุณภาพ?</li></ol>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.4', 'choice1', 2, '2023-11-01 14:04:31', '2023-11-01 14:04:31'),
(89, 22, '<p>2. ข้อกำหนดใดของ IATF16949: 2016 ระบุให้องค์กรจัดทำเอกสารระบบการจัดการคุณภาพ?</p>', '(A) 4.2', '(B) 4.3', '(C) 4.4', '(D) 4.5', 'choice2', 2, '2023-11-01 14:05:11', '2023-11-01 14:05:11'),
(90, 22, '<p>3. ข้อกำหนดใดของ IATF16949: 2016 ระบุให้องค์กรควบคุมเอกสาร?</p>', '(A) 4.2', '(B) 4.3', '(C) 4.4', '(D) 4.5', 'choice3', 2, '2023-11-01 14:05:59', '2023-11-01 14:05:59'),
(91, 22, '<p>4. ข้อกำหนดใดของ IATF16949: 2016 ระบุให้องค์กรระบุและควบคุมกระบวนการที่จำเป็น?</p>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.4', 'choice2', 2, '2023-11-01 14:06:36', '2023-11-01 14:06:36'),
(92, 22, '<p>5. ข้อกำหนดใดของ IATF16949: 2016 ระบุให้องค์กรตรวจสอบและทบทวนระบบการจัดการคุณภาพ?</p>', '(A) 4.1', '(B) 4.2', '(C) 4.3', '(D) 4.5', 'choice4', 2, '2023-11-01 14:07:20', '2023-11-01 14:07:20'),
(93, 23, '<ol><li>หลักการสำคัญของมาตรฐาน FSC คืออะไร</li></ol>', '(A)  ทั้ง (D), (C), และ (B)', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) คุณค่าทางเศรษฐกิจ', 'choice1', 2, '2023-11-12 14:02:00', '2023-11-12 14:03:35'),
(94, 23, '<p>2. หลักการใดของมาตรฐาน FSC มุ่งเน้นไปที่การมีส่วนร่วมของชุมชนท้องถิ่น</p>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A) และ (B)', 'choice2', 2, '2023-11-12 14:02:39', '2023-11-12 14:02:39'),
(95, 23, '<p>3. หลักการใดของมาตรฐาน FSC มุ่งเน้นไปที่การปกป้องความหลากหลายทางชีวภาพ</p>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A) และ (B)', 'choice3', 2, '2023-11-12 14:03:56', '2023-11-12 14:03:56'),
(96, 23, '<p>4.หลักการใดของมาตรฐาน FSC มุ่งเน้นไปที่การจัดการป่าไม้อย่างยั่งยืน</p>', '(A) คุณค่าทางเศรษฐกิจ', '(B) คุณค่าทางสังคม', '(C) คุณค่าทางสิ่งแวดล้อม', '(D) ทั้ง (A), (B), และ (C)', 'choice4', 2, '2023-11-12 14:04:15', '2023-11-12 14:04:27'),
(97, 23, '<p>5. องค์กรใดที่ประสงค์จะได้รับการรับรอง FSC ต้องผ่านกระบวนการใดบ้าง</p>', '(A) กระบวนการประเมิน', '(B) กระบวนการทบทวน', '(C) ทั้ง (A) และ (B)', '(D) คุณค่าทางสิ่งแวดล้อม', 'choice1', 2, '2023-11-12 14:04:47', '2023-11-12 14:04:47'),
(98, 12, '<p>1. ที่นี่ \"Medical Device\" หมายถึงอะไรตามมาตรฐาน ISO 13485:2016?</p>', 'a) ผลิตภัณฑ์ทางการแพทย์ทุกรูปแบบ', 'b) ผลิตภัณฑ์ที่ใช้ทางการแพทย์และทางทหาร', 'c) ผลิตภัณฑ์ทางการแพทย์ที่มีความเสี่ยงสูง', 'd) ผลิตภัณฑ์ทางการแพทย์ที่มีประโยชน์สูง', 'choice1', 10, '2023-11-13 12:15:22', '2023-11-13 12:15:22'),
(99, 12, '<p>2. ข้อดีหนึ่งของการใช้&nbsp;ISO 13485:2016 ในองค์กรคือ?</p>', 'a) ลดความซับซ้อนในกระบวนการการผลิต', 'b) เพิ่มความซับซ้อนในการตรวจสอบภายใน', 'c) ลดความสามารถในการตอบสนองต่อตลาด', 'd) เพิ่มความสามารถในการบัญชี', 'choice1', 10, '2023-11-13 12:16:14', '2023-11-13 12:16:14'),
(100, 12, '<p>3. กระบวนการการทบทวนในการตรวจสอบระบบการจัดการคุณภาพมีประโยชน์อย่างไร?</p>', 'a) เพิ่มความซับซ้อนในการดำเนินการ', 'b) ช่วยลดความซับซ้อนในกระบวนการ', 'c) ทำให้การตรวจสอบยากขึ้น', 'd) ไม่มีประโยชน์ใด ๆ', 'choice2', 10, '2023-11-13 12:17:09', '2023-11-13 12:17:09'),
(101, 12, '<p>4. ขั้นตอนการตรวจสอบเอกสารและบันทึกตาม&nbsp;ISO 13485:2016 ประกอบด้วย?</p>', 'a) การระบุเฉพาะบันทึกที่ไม่ครบถ้วน', 'b) การตรวจสอบความถูกต้องและความเพียงพอของเอกสาร', 'c) การละเมิดของบันทึกที่เกิดขึ้น', 'd) การสร้างเอกสารใหม่ทุกรอบการตรวจสอบ', 'choice2', 10, '2023-11-13 12:18:05', '2023-11-13 12:18:05'),
(102, 12, '<p>5. กระบวนการการตรวจสอบความเสี่ยงต้องให้ความสำคัญกับ?</p>', 'a) การลดความเสี่ยง', 'b) การเพิ่มความเสี่ยง', 'c) การลงทุนในตลาด', 'd) การลดต้นทุน', 'choice1', 10, '2023-11-13 12:18:56', '2023-11-13 12:18:56'),
(103, 12, '<p>6. การทบทวนการจัดการภายใต้การตรวจสอบ (Management Review) ต้องการตรวจสอบอะไร?</p>', 'a) การจัดการภายใต้การตรวจสอบระบบการบัญชี', 'b) กระบวนการการตรวจสอบความเสี่ยง', 'c) กระบวนการการตรวจสอบการผลิต', 'd) การตรวจสอบผลิตภัณฑ์ทางการแพทย์', 'choice2', 10, '2023-11-13 12:19:50', '2023-11-13 12:19:50'),
(104, 12, '<p>7. การรายงานผลการตรวจสอบควรมีอะไรบ้าง?</p>', 'a) แต่เพียงผลการตรวจสอบที่ดี', 'b) ข้อมูลเกี่ยวกับบันทึกที่ไม่ครบถ้วน', 'c) ข้อมูลเกี่ยวกับผู้ทำการตรวจสอบภายใน', 'd) ข้อมูลที่ไม่เกี่ยวข้องกับระบบการบริหารคุณภาพ', 'choice2', 10, '2023-11-13 12:20:43', '2023-11-13 12:20:43'),
(105, 12, '<p>8. การติดตามหลังจากการแก้ไขปัญหาควรทำอย่างไร?</p>', 'a) ไม่ต้องทำการติดตาม', 'b) ทำการติดตามทุก ๆ 6 เดือน', 'c) ทำการติดตามเพื่อตรวจสอบว่ามีการซ้ำขึ้นหรือไม่', 'd) ทำการติดตามเฉพาะกรณีที่เป็นปัญหามาก', 'choice3', 10, '2023-11-13 12:21:29', '2023-11-13 12:21:29'),
(106, 12, '<p>9. กระบวนการ&nbsp;Continuous Improvement เป็นการทำอย่างไร?</p>', 'a) ทำให้กระบวนการซับซ้อนขึ้น', 'b) การปรับปรุงที่ไม่จำเป็น', 'c) การปรับปรุงต่อเนื่องและที่สำคัญ', 'd) การยัดเยียยกระบวนการที่มีปัญหา', 'choice3', 10, '2023-11-13 12:22:20', '2023-11-13 12:22:20'),
(107, 12, '<p>10. การให้ข้อเสนอแนะสำหรับการพัฒนาควรดำเนินการอย่างไร?</p>', 'a) ให้ข้อเสนอแนะที่ไม่สมเหตุสมผล', 'b) ให้ข้อเสนอแนะที่ไม่มีข้อมูลเพิ่มเติม', 'c) ให้ข้อเสนอแนะที่สามารถนำไปใช้ได้ในการพัฒนา', 'd) ให้ข้อเสนอแนะเพื่อเลี่ยงการพัฒนา', 'choice3', 10, '2023-11-13 12:23:10', '2023-11-13 12:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint UNSIGNED NOT NULL,
  `quiz_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elerningcourse_id` bigint UNSIGNED NOT NULL,
  `quiz_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `before_quiz` int DEFAULT NULL,
  `timer` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `quiz_name`, `elerningcourse_id`, `quiz_type`, `before_quiz`, `timer`, `created_at`, `updated_at`) VALUES
(9, 'SO eLearning by Quality Associates', 14, 'pretest', NULL, 15, '2023-11-01 10:52:40', '2023-11-01 10:52:40'),
(10, 'SO eLearning by Quality Associates', 14, 'posttest', NULL, 30, '2023-11-01 10:53:19', '2023-11-01 10:53:19'),
(11, 'pretest', 15, 'pretest', NULL, 10, '2023-11-01 11:44:37', '2023-11-01 12:03:44'),
(12, 'posttest', 15, 'posttest', NULL, 5, '2023-11-01 11:44:49', '2023-11-01 11:44:49'),
(13, 'Test before class Internal Audit Technique for AS9100(D)', 16, 'pretest', NULL, 5, '2023-11-01 12:17:23', '2023-11-01 12:17:23'),
(14, 'Test before class ISO 13485 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมด้านเครื่องมือแพทย์และการบริการที่เกี่ยวข้อง', 17, 'pretest', NULL, 10, '2023-11-01 12:35:17', '2023-11-01 12:35:17'),
(15, 'Test before class Internal Audit Technique for ISO/IEC 17025: 2017', 18, 'pretest', NULL, 10, '2023-11-01 12:45:06', '2023-11-01 12:45:06'),
(16, 'Test before class FSC(Forest Stewardship Council Standard for Forest Management) ข้อกำหนดมาตรฐานการจัดการด้านป่าไม้อย่างยั่งยืน', 19, 'pretest', NULL, 10, '2023-11-01 12:55:40', '2023-11-01 12:55:40'),
(17, 'Test before class Internal Audit Technique for IATF16949: 2016', 20, 'pretest', NULL, 10, '2023-11-01 13:03:11', '2023-11-01 13:03:11'),
(18, 'Test before class ISO/IEC 17025: 2017 ข้อกำหนดมาตรฐานสากลสำหรับห้องปฏิบัติการทดสอบและสอบเทียบ (General requirements for the competence of testing and calibration laboratories)', 21, 'pretest', NULL, 10, '2023-11-01 13:12:11', '2023-11-01 13:12:11'),
(19, 'Test before class  Internal Audit Technique for ISO/IEC27001: 2022', 22, 'pretest', NULL, 10, '2023-11-01 13:20:58', '2023-11-01 13:20:58'),
(20, 'Test before class ISO 15189: 2022 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับห้องปฏิบัติการทางการแพทย์ ( QMS for Medical Laboratory)', 23, 'pretest', NULL, 10, '2023-11-01 13:45:22', '2023-11-01 13:45:22'),
(21, 'Test before class  Internal Audit Technique for ISO 14001: 2015', 24, 'pretest', NULL, 10, '2023-11-01 13:53:49', '2023-11-01 13:53:49'),
(22, 'Test before class IATF16949 version 2016 ข้อกำหนดมาตรฐานการจัดการคุณภาพสำหรับอุตสาหกรรมยานยนต์', 25, 'pretest', NULL, 10, '2023-11-01 14:02:59', '2023-11-01 14:02:59'),
(23, 'Test before class FSC(Forest Stewardship Council Standard for Forest Management) ข้อกำหนดมาตรฐานการจัดการด้านป่าไม้อย่างยั่งยืน', 19, 'posttest', NULL, 1, '2023-11-12 14:01:01', '2023-11-12 14:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourses`
--

CREATE TABLE `trainingcourses` (
  `id` bigint UNSIGNED NOT NULL,
  `module_id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `img_training` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainingcourses`
--

INSERT INTO `trainingcourses` (`id`, `module_id`, `code`, `name`, `training_detail`, `day`, `fee`, `img_training`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'S1001', 'ISO 9001:2015 Quality management systems', '<p>ISO 9001:2015 Quality management systems</p><p>&nbsp;</p><p>&nbsp;</p><p>&lt;table id=\"table-course\" class=\"min-w-full text-left text-sm font-light mb-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp;&lt;tbody&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงชื่อ module จาก $modules --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td colspan=\"6\" class=\"whitespace-nowrap px-6 py-4 font-normal bg-gray-200 text-lg text-center\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Module 1 ISO AND INTERNATIONAL STANDARDS<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงหัวข้อตาราง --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;CODE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;COURSE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DAYS&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;FEE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DATE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;ACTION&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;S1001&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/1\"&gt;ISO 9001:2015 Quality management systems&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;29-Sep-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/1\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;S1002&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/2\"&gt;ISO 14001:2015 Environmental Management System&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;01-Nov-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/2\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงชื่อ module จาก $modules --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td colspan=\"6\" class=\"whitespace-nowrap px-6 py-4 font-normal bg-gray-200 text-lg text-center\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Module 2 QULAITY<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงหัวข้อตาราง --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;CODE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;COURSE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DAYS&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;FEE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DATE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;ACTION&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;Q1008&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/3\"&gt;8D and why-why analysis&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;09-Dec-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/3\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;Q1009&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/4\"&gt;Six Simma for improvement introduction&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;17-Aug-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/4\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงชื่อ module จาก $modules --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td colspan=\"6\" class=\"whitespace-nowrap px-6 py-4 font-normal bg-gray-200 text-lg text-center\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Module 3 PRODUCTIVITY AND ENGINEERING<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงหัวข้อตาราง --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;CODE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;COURSE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DAYS&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;FEE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DATE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;ACTION&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;P2001&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/5\"&gt;Total producetive maintenance (TPM)&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;25-Aug-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/5\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;P2002&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/6\"&gt;5S for productivity&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;20-Dec-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/6\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงชื่อ module จาก $modules --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td colspan=\"6\" class=\"whitespace-nowrap px-6 py-4 font-normal bg-gray-200 text-lg text-center\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Module 4 OCCUPATIONAL HEALTH AND SAFETY<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงหัวข้อตาราง --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;CODE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;COURSE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DAYS&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;FEE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DATE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;ACTION&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;F1001&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/7\"&gt;Safety awareness&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;22-Dec-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/7\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงชื่อ module จาก $modules --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td colspan=\"6\" class=\"whitespace-nowrap px-6 py-4 font-normal bg-gray-200 text-lg text-center\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Module 5 ENVIRONMENT AND ENERGY<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงหัวข้อตาราง --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;CODE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;COURSE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DAYS&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;FEE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DATE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;ACTION&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;E1001&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/8\"&gt;Environment awareness&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;26-Jun-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/8\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงชื่อ module จาก $modules --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td colspan=\"6\" class=\"whitespace-nowrap px-6 py-4 font-normal bg-gray-200 text-lg text-center\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Module 6 ISO AND INTERNATIONAL STANDARDS<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;!-- แสดงหัวข้อตาราง --&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;CODE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;COURSE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DAYS&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;FEE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;DATE&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;th scope=\"col\" class=\"px-6 py-4 font-semibold\"&gt;ACTION&lt;/th&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;S9001&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/9\"&gt;ISO9001&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;21-Dec-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/9\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;ISIOO&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/10\"&gt;do;asdiaso;&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,000&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;19-Jan-2024&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/10\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;tr class=\"border-b dark:border-neutral-500\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;ISO22301&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\" px-6 py-4 block w-60\"&gt;&lt;a class=\"underline text-blue-500\" href=\"https://isoconsult.shop/detail-training/11\"&gt;ข้อกำหนดมาตรฐานการจัดการความต่อเนื่องทางธุรกิจ &nbsp; &nbsp; Business continuity management system-BCMS&lt;/a&gt;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;1&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;3,250&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;20-Dec-2023&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;td class=\"whitespace-nowrap px-6 py-4\"&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;a href=\"https://isoconsult.shop/reserveday/11\" class=\"p-3 bg-green-600 text-white rounded-xl\"&gt;จองเวลา&lt;/a&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/td&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tr&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/tbody&gt;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp;&lt;/table&gt;</p><p>&nbsp;</p>', 1, 3000.00, '/upload/images/training/1698396025.png', '2023-09-29', '2023-09-14 08:22:45', '2024-01-18 10:20:43'),
(2, 1, 'S1002', 'ISO 14001:2015 Environmental Management System', '<p>ISO 14001:2015 Environmental Management System</p>', 1, 3000.00, '/upload/images/training/1698396043.webp', '2023-11-01', '2023-09-17 18:53:44', '2023-10-27 08:40:43'),
(3, 2, 'Q1008', '8D and why-why analysis', '<p>8D and why-why analysis</p>', 1, 3000.00, '/upload/images/training/1698396088.jpg', '2023-12-09', '2023-09-17 18:54:55', '2023-10-27 08:41:28'),
(4, 2, 'Q1009', 'Six Simma for improvement introduction', '<p>Six Simma for improvement introduction</p>', 1, 3000.00, '/upload/images/training/1698396109.png', '2023-08-17', '2023-09-17 18:56:35', '2023-10-27 08:41:50'),
(5, 3, 'P2001', 'Total producetive maintenance (TPM)', '<p>Total producetive maintenance (TPM)</p>', 1, 3000.00, '/upload/images/training/1698396126.webp', '2023-08-25', '2023-09-17 18:59:52', '2023-10-27 08:42:06'),
(6, 3, 'P2002', '5S for productivity', '<p>5S for productivity</p>', 1, 3000.00, '/upload/images/training/1698396143.png', '2023-12-20', '2023-09-17 19:02:47', '2023-10-27 08:42:23'),
(7, 4, 'F1001', 'Safety awareness', '<p>Safety awareness</p>', 1, 3000.00, '/upload/images/training/1698396166.jpg', '2023-12-22', '2023-09-17 19:04:04', '2023-10-27 08:42:46'),
(8, 5, 'E1001', 'Environment awareness', '<p>Environment awareness</p>', 1, 3000.00, '/upload/images/training/1698396178.jpg', '2023-06-26', '2023-09-17 19:05:24', '2023-10-27 08:42:58'),
(9, 1, 'S9001', 'ISO9001', '<p>dadadasdas</p>', 1, 3000.00, '/upload/images/training/1698396190.png', '2023-12-21', '2023-10-23 13:06:59', '2023-10-27 08:43:10'),
(10, 1, 'ISIOO', 'do;asdiaso;', '<p>dsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadasdsdasdasdsadadas</p>', 1, 3000.00, '/upload/images/training/1698066464.jpg', '2024-01-19', '2023-10-23 13:07:44', '2023-10-23 13:07:44'),
(11, 1, 'ISO22301', 'ข้อกำหนดมาตรฐานการจัดการความต่อเนื่องทางธุรกิจ     Business continuity management system-BCMS', '<p>หลักสูตร: ข้อกำหนดมาตรฐานการจัดการความต่อเนื่องทางธุรกิจ</p><p>Business continuity management system-BCMS</p><p>วันที่ 20 กันยายน 2566 เวลา 9.00-15.00</p><p>ราคา 3,250 บาท/คน</p><p>กำหนดลงทะเบียนและชำระเงินภายใน 10/9/2023</p><p>ท่านที่สนใจสามารถลงทะเบียนได้ที่นี่ <a href=\"https://forms.gle/7qe6Fusvynks1Zqr7?fbclid=IwAR0bVYVE14WhwR5vuUMybaTqg_czZaaoCnw6gTUAhtKz8PZpruRRxB8kjQE\">https://forms.gle/7qe6Fusvynks1Zqr7</a></p><p>0889050555/021076977/0911306300</p><p>isoconsult.elearning@gmail.com</p><p><a href=\"https://l.facebook.com/l.php?u=http%3A%2F%2Fwww.isoconsult.org%2F%3Ffbclid%3DIwAR3woAc9Ql-dl04_IM2YARhoa_eU0sb06DInxdFV73gZiKNE2lzE0ZeuSAI&amp;h=AT1EWc4yK8CFMlHiS52uigzjaoetsplje5_THLNWT2fKL4OX2uIQ-r2Mq7YGR8SmS31Qg2KFagyVsO2_dPxYl24SCHBKXFc_TneZ2DcoUkGGsmdqwtgeeh5XQo5Y2Nw0TCm73tnZo2ySkl24jy-O&amp;__tn__=-UK-R&amp;c[0]=AT0ycbF5dnAClsv9HC2CGv4PzSZH-Udz_Nl088WNWayNuDnLv0QoLOrGTCKBbI9tHkk_MkCAgmNF-yJkiCbGHZNqrIqQKPRmvGFE8pNqtRq5aA72_EKXnreyLFJkqHBN-LzIb34hwxXC76FHlKyKTDUfqwsGH0rvESTmuBJOLTFpXQ7U9qojHvf8v0iiZNJd05KFMjrpjvy3\">www.isoconsult.org</a></p><p><a href=\"https://web.facebook.com/hashtag/iso22301?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#ISO22301</a> <a href=\"https://web.facebook.com/hashtag/bcp?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#BCP</a> <a href=\"https://web.facebook.com/hashtag/bcms?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#BCMS</a> <a href=\"https://web.facebook.com/hashtag/isotraining?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#ISOtraining</a> <a href=\"https://web.facebook.com/hashtag/elearning?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#eLearning</a> <a href=\"https://web.facebook.com/hashtag/online?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#Online</a> <a href=\"https://web.facebook.com/hashtag/isoconsult?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#ISOconsult</a> <a href=\"https://web.facebook.com/hashtag/business?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#Business</a> <a href=\"https://web.facebook.com/hashtag/continuity?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#Continuity</a> <a href=\"https://web.facebook.com/hashtag/management?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#Management</a> <a href=\"https://web.facebook.com/hashtag/system?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#System</a> <a href=\"https://web.facebook.com/hashtag/requirement?__eep__=6&amp;__cft__[0]=AZUo8PjnJwNT0jtcOb_GuHpAYJfKkpqc7wxlbwDVzxtEEFaNs8T9QE5IUdZq0BekPOSbZRW3AqML5OJ6xKnE-WyD9gGykVDcipnQjX1o3qSkcadlIz_l3xg4yVFb1O_TIarbXEAW4QBfcVqP05ryLwQwHV4yCbb9obA1Zar1Rxig9G2lSte50EfnSnyYtCf6pC0&amp;__tn__=*NK-R\">#Requirement</a></p>', 1, 3250.00, '/upload/images/training/1698066846.jpg', '2023-12-20', '2023-10-23 13:14:06', '2023-10-23 13:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `img_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `img_profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin@gmail.com', NULL, '$2y$10$8ash1qIgFSwI7FHiQwhFg.clPCiker7W40BHbaxASpELiPKQ2WNzq', 'admin', '/upload/images/profile/1698052673.jpg', NULL, '2023-09-14 07:44:47', '2024-01-14 04:53:41'),
(2, 'nattapol surinkeaw', 'nattapol@gmail.com', NULL, '$2y$10$28ZrK8e3R0HDG3ByFZqUyum9BV3W0hc919lIIDdVGVll0QAbrdIW2', 'user', '/upload/images/profile/1698052632.jpg', NULL, '2023-09-14 08:59:04', '2023-10-23 09:17:12'),
(7, 'nattapol surinkeaw', 'nattapol.su@rmuti.ac.th', NULL, '$2y$10$gOxkUbAOYG53jk25Ch16PelT0rQw3hR6idUoVKD2oAa1wX/VU8X4u', 'user', '/upload/images/profile/1699797173.jpg', NULL, '2023-11-12 13:46:30', '2023-11-12 13:52:53'),
(8, 'Darkzone', 'darkzone.example@gmail.com', NULL, '$2y$10$WN6Fa74D.8C0PGmc7oFfIe9Qx/tOFbmQPBEDE8DlHROGGHAZYjnbm', 'user', NULL, NULL, '2023-12-26 13:02:11', '2023-12-26 13:02:11'),
(9, 'yotin', 'yotin.33@gmail.com', NULL, '$2y$10$8zOB7/a0YQn4wg/vG4pJDOrHX0/HysmN25APf6jOfnICj/iQZcP5O', 'user', NULL, NULL, '2024-01-01 09:20:48', '2024-01-01 09:20:48'),
(10, 'pawimee susai', 'sitbos087@gmail.com', NULL, '$2y$10$6uWz8ttnqQowI2dHwZG4Kuuhihti0oNK6PRIPawN/RPdSYOKAQDba', 'user', NULL, NULL, '2024-01-11 04:54:24', '2024-01-11 04:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_lernings`
--

CREATE TABLE `user_lernings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `elearning_id` int UNSIGNED NOT NULL,
  `quiz_id` int UNSIGNED NOT NULL DEFAULT '0',
  `watch_video` varchar(100) DEFAULT NULL,
  `total_round` int UNSIGNED NOT NULL DEFAULT '0',
  `score` int UNSIGNED NOT NULL DEFAULT '0',
  `last_score` int UNSIGNED NOT NULL DEFAULT '0',
  `total_score` int UNSIGNED NOT NULL DEFAULT '0',
  `quiz_type` varchar(20) DEFAULT NULL,
  `certificate` varchar(3) NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_lernings`
--

INSERT INTO `user_lernings` (`id`, `user_id`, `elearning_id`, `quiz_id`, `watch_video`, `total_round`, `score`, `last_score`, `total_score`, `quiz_type`, `certificate`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 0, ',1', 2, 0, 2, 10, NULL, 'no', '2023-10-31 15:14:52', '2023-11-01 01:46:54'),
(3, 1, 14, 10, NULL, 3, 0, 0, 0, 'posttest', 'no', '2023-11-01 11:13:52', '2023-12-29 02:16:25'),
(4, 2, 24, 0, '10', 0, 0, 0, 0, NULL, 'no', '2023-11-03 15:43:19', '2023-11-03 15:43:19'),
(5, 3, 15, 12, ',8', 3, 100, 100, 100, 'posttest', 'yes', '2023-11-10 12:29:38', '2023-11-13 12:24:15'),
(6, 3, 16, 0, NULL, 2, 0, 20, 50, NULL, 'no', '2023-11-10 12:39:20', '2023-11-10 12:39:48'),
(7, 7, 19, 23, ',11', 3, 8, 8, 10, 'posttest', 'yes', '2023-11-12 14:08:53', '2023-11-12 14:11:30'),
(8, 9, 15, 12, '8', 1, 100, 100, 100, 'posttest', 'yes', '2024-01-02 04:46:17', '2024-01-02 04:54:15'),
(9, 1, 20, 0, NULL, 5, 0, 8, 10, NULL, 'no', '2024-02-13 08:08:43', '2024-02-13 08:10:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annoucements`
--
ALTER TABLE `annoucements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `annoucements_elerningcourse_id_foreign` (`elerningcourse_id`);

--
-- Indexes for table `billing_tos`
--
ALTER TABLE `billing_tos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_discounts`
--
ALTER TABLE `code_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_materials_elerningcourse_id_foreign` (`elerningcourse_id`);

--
-- Indexes for table `elerningcourses`
--
ALTER TABLE `elerningcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_reserve_trains`
--
ALTER TABLE `event_reserve_trains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_reserve_trains_pending_id_foreign` (`pending_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_documents`
--
ALTER TABLE `home_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_videos`
--
ALTER TABLE `home_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_messages`
--
ALTER TABLE `leave_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_courses_user_id_foreign` (`user_id`),
  ADD KEY `my_courses_elerningcourse_id_foreign` (`elerningcourse_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_trainings`
--
ALTER TABLE `other_trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_trainings_pending_id_foreign` (`pending_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pending_courses`
--
ALTER TABLE `pending_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_trainings`
--
ALTER TABLE `pending_trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pending_trainings_billing_id_foreign` (`billing_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_elerningcourse_id_foreign` (`elerningcourse_id`);

--
-- Indexes for table `trainingcourses`
--
ALTER TABLE `trainingcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainingcourses_module_id_foreign` (`module_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_lernings`
--
ALTER TABLE `user_lernings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annoucements`
--
ALTER TABLE `annoucements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billing_tos`
--
ALTER TABLE `billing_tos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `code_discounts`
--
ALTER TABLE `code_discounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_materials`
--
ALTER TABLE `course_materials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `elerningcourses`
--
ALTER TABLE `elerningcourses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `event_reserve_trains`
--
ALTER TABLE `event_reserve_trains`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_documents`
--
ALTER TABLE `home_documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_videos`
--
ALTER TABLE `home_videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leave_messages`
--
ALTER TABLE `leave_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `my_courses`
--
ALTER TABLE `my_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_trainings`
--
ALTER TABLE `other_trainings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_courses`
--
ALTER TABLE `pending_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pending_trainings`
--
ALTER TABLE `pending_trainings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `trainingcourses`
--
ALTER TABLE `trainingcourses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_lernings`
--
ALTER TABLE `user_lernings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annoucements`
--
ALTER TABLE `annoucements`
  ADD CONSTRAINT `annoucements_elerningcourse_id_foreign` FOREIGN KEY (`elerningcourse_id`) REFERENCES `elerningcourses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD CONSTRAINT `course_materials_elerningcourse_id_foreign` FOREIGN KEY (`elerningcourse_id`) REFERENCES `elerningcourses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_reserve_trains`
--
ALTER TABLE `event_reserve_trains`
  ADD CONSTRAINT `event_reserve_trains_pending_id_foreign` FOREIGN KEY (`pending_id`) REFERENCES `pending_trainings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD CONSTRAINT `my_courses_elerningcourse_id_foreign` FOREIGN KEY (`elerningcourse_id`) REFERENCES `elerningcourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `my_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `other_trainings`
--
ALTER TABLE `other_trainings`
  ADD CONSTRAINT `other_trainings_pending_id_foreign` FOREIGN KEY (`pending_id`) REFERENCES `pending_trainings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pending_trainings`
--
ALTER TABLE `pending_trainings`
  ADD CONSTRAINT `pending_trainings_billing_id_foreign` FOREIGN KEY (`billing_id`) REFERENCES `billing_tos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_elerningcourse_id_foreign` FOREIGN KEY (`elerningcourse_id`) REFERENCES `elerningcourses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trainingcourses`
--
ALTER TABLE `trainingcourses`
  ADD CONSTRAINT `trainingcourses_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
