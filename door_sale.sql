/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : door_sale

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 21/11/2022 17:04:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (2, '2022_07_21_164019_create__user_table', 1);
INSERT INTO `migrations` VALUES (3, '2022_07_21_164234_create_tbl_admin_table', 1);
INSERT INTO `migrations` VALUES (4, '2022_07_23_120740_create_tbl_price_parameters_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_07_24_152949_create_tbl_order_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_07_28_180754_create_tbl_door_style_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_07_28_190354_create_tbl_glass_type', 1);
INSERT INTO `migrations` VALUES (9, '2022_07_28_194549_create_tbl_capping_price_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_08_07_205417_create_tbl_cabinets_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_08_08_061309_create_tbl_cabinets_price_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_08_08_062943_create_tbl_cabinet_tag_table', 1);
INSERT INTO `migrations` VALUES (14, '2022_08_09_090750_create_tbl_pricing_parameters_table', 1);
INSERT INTO `migrations` VALUES (15, '2022_08_09_091816_create_tbl_finish_table', 1);
INSERT INTO `migrations` VALUES (16, '2022_08_09_100820_create_tbl_material_doors_table', 1);
INSERT INTO `migrations` VALUES (17, '2022_08_09_214605_create_tbl_roller_door_pricing_table', 1);
INSERT INTO `migrations` VALUES (18, '2022_08_10_090603_create_tbl_door_pricing_table', 1);
INSERT INTO `migrations` VALUES (19, '2022_08_12_035039_create_tbl_jpull_table', 1);
INSERT INTO `migrations` VALUES (20, '2022_08_14_082630_create_tbl_door_category_table', 1);
INSERT INTO `migrations` VALUES (22, '2022_08_09_062756_create_tbl_door_material_table', 2);
INSERT INTO `migrations` VALUES (23, '2022_08_14_103502_create_tbl_finger_pull_table', 3);
INSERT INTO `migrations` VALUES (24, '2022_08_14_115534_create_tbl_door_hardware_table', 4);
INSERT INTO `migrations` VALUES (25, '2022_08_15_001025_create_tbl_door_hardware_second_table', 5);
INSERT INTO `migrations` VALUES (26, '2022_08_15_013152_create_tbl_door_finish_other_table', 6);
INSERT INTO `migrations` VALUES (27, '2022_08_17_060135_create_tbl_door_mullion_table', 7);
INSERT INTO `migrations` VALUES (28, '2022_08_17_121347_create_tbl_door_material_price_table', 8);
INSERT INTO `migrations` VALUES (29, '2022_08_18_040804_create_tbl_door_pirce_increase_table', 9);
INSERT INTO `migrations` VALUES (30, '2022_08_18_155210_create_tbl_hinge_count_table', 10);
INSERT INTO `migrations` VALUES (33, '2022_07_28_181304_create_tbl_hinge_type_table', 11);
INSERT INTO `migrations` VALUES (34, '2022_08_19_054806_create_tbl_hinge_price_table', 11);
INSERT INTO `migrations` VALUES (36, '2022_07_28_181304_create_tbl_hinge_price_table', 12);
INSERT INTO `migrations` VALUES (37, '2022_08_19_113758_create_tbl_panel_option_table', 13);
INSERT INTO `migrations` VALUES (38, '2022_08_19_122507_create_tbl_paint_only_table', 14);
INSERT INTO `migrations` VALUES (39, '2022_08_22_123717_create_tbl_capping_table', 15);
INSERT INTO `migrations` VALUES (43, '2019_12_14_000001_create_personal_access_tokens_table', 16);
INSERT INTO `migrations` VALUES (44, '2022_08_26_193200_create_tbl_painted_door_order_title_table', 16);
INSERT INTO `migrations` VALUES (45, '2022_09_02_090113_create_tbl_painted_door_order_content_table', 17);

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES (1, 'admin@email.com', 'password', '0', '2022-08-27 08:37:23', '2022-08-27 08:37:23');

-- ----------------------------
-- Table structure for tbl_cabinets
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cabinets`;
CREATE TABLE `tbl_cabinets`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_cabinets
-- ----------------------------
INSERT INTO `tbl_cabinets` VALUES (1, 'Wine Back', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (2, 'Microwave Box', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (3, 'Wall Angle Corner 2 Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (4, 'Wall Radius Corner 2 Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (5, 'Wall Angle Corner 3 Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (6, 'Wall Radius Corner 3 Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (7, 'Wall Angle Corner 4 Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (8, 'Wall Radius Corner 4 Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (9, 'Wall Angle Corner 1 Shelf', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (10, 'Wall Radius Corner 1 Shelf', NULL, NULL);
INSERT INTO `tbl_cabinets` VALUES (11, 'Roller Door', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_cabinets_price
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cabinets_price`;
CREATE TABLE `tbl_cabinets_price`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_cabinets_price
-- ----------------------------
INSERT INTO `tbl_cabinets_price` VALUES (1, '1', '1', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (2, '1', '2', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (3, '1', '3', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (4, '1', '4', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (5, '1', '5', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (6, '1', '6', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (7, '1', '7', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (8, '1', '8', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (9, '1', '9', '0', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (10, '1', '10', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (11, '1', '11', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (12, '2', '1', '0', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (13, '2', '2', '0', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (14, '2', '3', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (15, '2', '4', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (16, '2', '5', '3', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (17, '2', '6', '3', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (18, '2', '7', '4', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (19, '2', '8', '4', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (20, '2', '9', '0', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (21, '2', '10', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (22, '2', '11', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (23, '3', '1', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (24, '3', '2', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (25, '3', '3', '4', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (26, '3', '4', '4', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (27, '3', '5', '5', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (28, '3', '6', '5', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (29, '3', '7', '6', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (30, '3', '8', '6', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (31, '3', '9', '0', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (32, '3', '10', '3', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (33, '3', '11', '3', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (34, '4', '1', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (35, '4', '2', '2', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (36, '4', '3', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (37, '4', '4', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (38, '4', '5', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (39, '4', '6', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (40, '4', '7', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (41, '4', '8', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (42, '4', '9', '0', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (43, '4', '10', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (44, '4', '11', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (45, '5', '1', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (46, '5', '2', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (47, '5', '3', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (48, '5', '4', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (49, '5', '5', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (50, '5', '6', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (51, '5', '7', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (52, '5', '8', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (53, '5', '9', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (54, '5', '10', '1', NULL, NULL);
INSERT INTO `tbl_cabinets_price` VALUES (55, '5', '11', '1', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_cabinets_tag
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cabinets_tag`;
CREATE TABLE `tbl_cabinets_tag`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_cabinets_tag
-- ----------------------------
INSERT INTO `tbl_cabinets_tag` VALUES (1, 'Horizontal Qty (Top and Bottom)', NULL, NULL);
INSERT INTO `tbl_cabinets_tag` VALUES (2, 'Horizontal Qty Shelves', NULL, NULL);
INSERT INTO `tbl_cabinets_tag` VALUES (3, 'Horizontal', NULL, NULL);
INSERT INTO `tbl_cabinets_tag` VALUES (4, 'Vertical', NULL, NULL);
INSERT INTO `tbl_cabinets_tag` VALUES (5, 'Back Qty', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_capping
-- ----------------------------
DROP TABLE IF EXISTS `tbl_capping`;
CREATE TABLE `tbl_capping`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `capping` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_capping
-- ----------------------------
INSERT INTO `tbl_capping` VALUES (1, 'Federation', '316.8', NULL, NULL);
INSERT INTO `tbl_capping` VALUES (2, 'Dental Square', '638', NULL, NULL);
INSERT INTO `tbl_capping` VALUES (3, 'Sculptured', '316.8', NULL, NULL);
INSERT INTO `tbl_capping` VALUES (4, 'Country', '316.8', NULL, NULL);
INSERT INTO `tbl_capping` VALUES (5, 'Colonial', '316.8', NULL, NULL);
INSERT INTO `tbl_capping` VALUES (6, 'Columns', '200', NULL, NULL);
INSERT INTO `tbl_capping` VALUES (7, 'Corbel', '375', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_capping_price
-- ----------------------------
DROP TABLE IF EXISTS `tbl_capping_price`;
CREATE TABLE `tbl_capping_price`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_capping_price
-- ----------------------------
INSERT INTO `tbl_capping_price` VALUES (1, 'Federation', '316.8', NULL, NULL);
INSERT INTO `tbl_capping_price` VALUES (2, 'Dental Square', '638', NULL, NULL);
INSERT INTO `tbl_capping_price` VALUES (3, 'Sculptured', '316.8', NULL, NULL);
INSERT INTO `tbl_capping_price` VALUES (4, 'Country', '316.8', NULL, NULL);
INSERT INTO `tbl_capping_price` VALUES (5, 'Colonial', '316.8', NULL, NULL);
INSERT INTO `tbl_capping_price` VALUES (6, 'Columns', '200', NULL, NULL);
INSERT INTO `tbl_capping_price` VALUES (7, 'Corbel', '375', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_category`;
CREATE TABLE `tbl_door_category`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_category
-- ----------------------------
INSERT INTO `tbl_door_category` VALUES (1, 'Doors', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (2, 'Drawers', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (3, 'Flat Panels', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (4, 'Frame Doors', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (5, 'Split Panels', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (6, 'Capping', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (7, 'Sample Door', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (8, 'Corbels', NULL, NULL);
INSERT INTO `tbl_door_category` VALUES (9, 'Columns', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_finish_other
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_finish_other`;
CREATE TABLE `tbl_door_finish_other`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `door_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_finish_other
-- ----------------------------
INSERT INTO `tbl_door_finish_other` VALUES (1, '4', '0', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (2, '4', '1', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (3, '4', '2', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (4, '4', '4', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (5, '4', '6', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (6, '4', '8', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (7, '5', 'End Panel', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (8, '5', 'End Panel Build Up', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (9, '5', 'Island Panel', NULL, NULL);
INSERT INTO `tbl_door_finish_other` VALUES (10, '5', 'Pantry Door', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_hardware
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_hardware`;
CREATE TABLE `tbl_door_hardware`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `door_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_hardware
-- ----------------------------
INSERT INTO `tbl_door_hardware` VALUES (1, '1', 'Not Required', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (2, '1', 'Left Drill', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (3, '1', 'Right Drill', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (4, '2', 'Cut From Door', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (5, '2', 'Drawer Bank', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (6, '2', 'Individual', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (7, '3', 'PMDF F+1LU2SU\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (8, '3', 'PMDF F+1LU\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (9, '3', 'PMDF F+2LU\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (10, '3', 'PMDF F+1SU\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (11, '3', 'PMDF F+2SU\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (12, '3', 'PMDF D/S + All U\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (13, '3', 'PMDF +All\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (14, '3', 'PMDF F Only\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (15, '4', 'Not Required', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (16, '4', 'Left Drill', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (17, '4', 'Right Drill', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (18, '5', 'PMDF F+1L2S\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (19, '5', 'PMDF F+1L\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (21, '5', 'PMDF F+2L\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (22, '5', 'PMDF F+1SU\r\n', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (23, '5', 'PMDF F+2SU', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (24, '5', 'PMDF D/S + All', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (25, '5', 'PMDF +All', NULL, NULL);
INSERT INTO `tbl_door_hardware` VALUES (26, '5', 'PMDF F Only\r\n', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_hardware_second
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_hardware_second`;
CREATE TABLE `tbl_door_hardware_second`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `door_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_hardware_second
-- ----------------------------
INSERT INTO `tbl_door_hardware_second` VALUES (1, '1', 'No Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (2, '1', '107 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (3, '1', 'Blind Corner', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (4, '1', '155 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (5, '1', '170 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (6, '1', 'BiFold', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (7, '1', '45 Degree', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (8, '2', 'No Drilling', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (9, '2', 'Antaro B (RITMA MS)', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (10, '2', 'Antaro C', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (11, '2', 'Antaro D (RITMA HS)', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (12, '2', 'Antaro M (RITMA S)', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (13, '2', 'Antaro N', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (14, '2', 'No Drilling', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (15, '4', 'No Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (16, '4', '107 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (17, '4', 'Blind Corner', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (18, '4', '155 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (19, '4', '170 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (20, '4', 'BiFold', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (21, '4', '45 Degree', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (22, '5', 'No Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (23, '5', '107 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (24, '5', 'Blind Corder', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (25, '5', '155 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (26, '5', '170 Hinge', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (27, '5', 'BiFold', NULL, NULL);
INSERT INTO `tbl_door_hardware_second` VALUES (28, '5', '45 Degree', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_material
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_material`;
CREATE TABLE `tbl_door_material`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `door_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_material
-- ----------------------------
INSERT INTO `tbl_door_material` VALUES (1, '1', '18', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (2, '1', '21', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (3, '1', '25', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (4, '2', '18', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (5, '2', '21', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (6, '2', '25', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (7, '3', '18', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (8, '3', '21', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (9, '3', '25', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (10, '3', '32', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (11, '4', '18', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (12, '4', '21', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (13, '4', '25', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (14, '5', '18', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (15, '5', '21', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (16, '5', '25', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (17, '6', '1', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (18, '6', '2', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (19, '6', '3', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (20, '6', '4', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (21, '6', '5', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (22, '7', '18', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (23, '7', '21', NULL, NULL);
INSERT INTO `tbl_door_material` VALUES (24, '7', '25', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_material_price
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_material_price`;
CREATE TABLE `tbl_door_material_price`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cum_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_material_price
-- ----------------------------
INSERT INTO `tbl_door_material_price` VALUES (1, '18', '0', '0', NULL, NULL);
INSERT INTO `tbl_door_material_price` VALUES (2, '21', '21', '21', NULL, NULL);
INSERT INTO `tbl_door_material_price` VALUES (3, '25', '4', '25', NULL, NULL);
INSERT INTO `tbl_door_material_price` VALUES (4, '32', '25', '50', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_mullion
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_mullion`;
CREATE TABLE `tbl_door_mullion`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_mullion
-- ----------------------------
INSERT INTO `tbl_door_mullion` VALUES (1, '1', NULL, NULL);
INSERT INTO `tbl_door_mullion` VALUES (2, '2', NULL, NULL);
INSERT INTO `tbl_door_mullion` VALUES (3, '3', NULL, NULL);
INSERT INTO `tbl_door_mullion` VALUES (4, '4', NULL, NULL);
INSERT INTO `tbl_door_mullion` VALUES (5, '5', NULL, NULL);
INSERT INTO `tbl_door_mullion` VALUES (6, '6', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_pirce_increase
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_pirce_increase`;
CREATE TABLE `tbl_door_pirce_increase`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `door_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dec_pi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fy_pi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_pirce_increase
-- ----------------------------
INSERT INTO `tbl_door_pirce_increase` VALUES (1, '1', '13.4', '8', NULL, NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (2, '2', '13.4', '8', NULL, NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (3, '3', '7.1', '2', NULL, NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (4, '4', '13.4', '8', '0000-00-00 00:00:00', NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (5, '5', '13.4', '8', '0000-00-00 00:00:00', NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (6, '6', '7.1', '2', NULL, NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (7, '7', '0', '0', NULL, NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (8, '8', '7.1', '2', NULL, NULL);
INSERT INTO `tbl_door_pirce_increase` VALUES (9, '9', '7.1', '2', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_pricing
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_pricing`;
CREATE TABLE `tbl_door_pricing`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `edging` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `edge_mould` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `undercoat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gloss` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `semi_gloss` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `satin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `textured` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ord_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ord_material_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ord_suffix` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_pricing
-- ----------------------------
INSERT INTO `tbl_door_pricing` VALUES (1, 'Flat PanelEthan\r\n', 'Parameters.Flat.Bevelled45\r\n', 'D - Bevelled 45 Edge\r\n', 'Flat Panel\r\n', 'Ethan', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (2, 'Flat PanelHayley\r\n', 'Parameters.Flat.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Flat Panel\r\n', 'Hayley', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (3, 'Flat PanelLiam\r\n', 'Parameters.Flat.Square\r\n', 'A - Square\r\n', 'Flat Panel\r\n', 'Liam', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (4, 'Flat PanelEmma\r\n', 'Parameters.Flat.BevelledStep\r\n', 'G - Bevelled Step\r\n', 'Flat Panel\r\n', 'Emma', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (5, 'Flat PanelEmily\r\n', 'Parameters.Flat.BevelledEdge\r\n', 'F - Bevelled\r\n', 'Flat Panel\r\n', 'Emily', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (6, 'Flat PanelBella\r\n', 'Parameters.Flat.BevelledEdge\r\n', 'F - Bevelled\r\n', 'Flat Panel\r\n', 'Bella', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (7, 'Flat PanelLila\r\n', 'Parameters.Flat.OggeEdge\r\n', 'E - Ogge Edge\r\n', 'Flat Panel\r\n', 'Lila', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (8, 'Flat PanelOliver\r\n', 'Parameters.Flat.OggeEdge\r\n', 'E - Ogge Edge\r\n', 'Flat Panel\r\n', 'Oliver', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (9, 'Centre RouteAlma\r\n', '', '', 'Centre Route\r\n', 'Alma', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (10, 'Centre RouteCalcutta', '', '', 'Centre Route', 'Calcutta', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (11, 'Centre RouteLuna\r\n', '', '', 'Centre Route', 'Luna', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (12, 'Centre RouteChloe', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route', 'Chloe', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (13, 'Centre RouteAdriana\r\n', 'Parameters.Centre.OggeEdge\r\n', 'E - Ogge Edge\r\n', 'Centre Route\r\n', 'Adriana', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (14, 'Centre RouteWilliam\r\n', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route\r\n', 'William', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (15, 'Centre RouteAlexandria\r\n', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route', 'Alexandria', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (16, 'Centre RouteDaniel\r\n', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route', 'Daniel', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (17, 'Centre RouteLogan\r\n', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route', 'Logan', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (18, 'Centre RouteCoral\r\n', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route\r\n', 'Coral', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (19, 'Centre RouteSharon\r\n', 'Parameters.Centre.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Centre Route\r\n', 'Sharon', '110', '175', '165', '165', '165', '165', '82.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (20, 'PocketRaphael\r\n', '', '', 'Pocket', 'Raphael', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (21, 'PocketAlana\r\n', '', '', 'Pocket', 'Alana', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (22, 'PocketEmilia\r\n', '', '', 'Pocket', 'Emila', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (23, 'PocketSiena\r\n', '', '', 'Pocket', 'Siena', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (24, 'PocketEmerald\r\n', '', '', 'Pocket', 'Emerald', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (25, 'PocketTimothy\r\n', '', '', 'Pocket', 'Timothy', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (26, 'PocketJessica\r\n', '', '', 'Pocket', 'Jessica', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (27, 'PocketArielle\r\n', 'Parameters.Pocket.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Pocket', 'Arielle', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (28, 'PocketNathan\r\n', 'Parameters.Pocket.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Pocket', 'Nathan', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (29, 'PocketNoah\r\n', 'Parameters.Pocket.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Pocket', 'Noah', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (30, 'PocketHanna\r\n', 'Parameters.Pocket.BevelledEdge\r\n', 'F - Bevelled\r\n', 'Pocket', 'Hanna', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (31, 'PocketAndrew\r\n', 'Parameters.Pocket.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Pocket', 'Andrew', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (32, 'PocketPeter\r\n', 'Parameters.Pocket.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Pocket', 'Peter', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (33, 'PocketJohn\r\n', 'Parameters.Pocket.3mmEdge\r\n', 'B - 3mm Edge\r\n', 'Pocket', 'John', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (34, 'PocketSophie\r\n', 'Parameters.Pocket.OggeEdge\r\n', 'E - Ogge Edge\r\n', 'Pocket', 'Sophie', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (35, 'PocketJackson\r\n', 'Parameters.Pocket.OggeEdge\r\n', 'E - Ogge Edge\r\n', 'Pocket', 'Jackson', '140', '205', '185', '185', '185', '185', '92.5', '', '', '', '', NULL, NULL);
INSERT INTO `tbl_door_pricing` VALUES (36, 'JPull\r\n', '', '', '', 'JPull', '75', '135', '125', '125', '125', '125', '62.5', '', '', '', '', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_door_style
-- ----------------------------
DROP TABLE IF EXISTS `tbl_door_style`;
CREATE TABLE `tbl_door_style`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `style_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 181 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_door_style
-- ----------------------------
INSERT INTO `tbl_door_style` VALUES (1, '1', 'Adriana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (2, '1', 'Alana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (3, '1', 'Alexandria', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (4, '1', 'Alma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (5, '1', 'Andrew', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (6, '1', 'Arielle', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (7, '1', 'Bella', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (8, '1', 'Calcutta', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (9, '1', 'Chloe', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (10, '1', 'Coral', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (11, '1', 'Daniel', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (12, '1', 'Emerald', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (13, '1', 'Emilia', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (14, '1', 'Emily', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (15, '1', 'Emma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (16, '1', 'Ethan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (17, '1', 'Hanna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (18, '1', 'Hayley', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (19, '1', 'Jackson', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (20, '1', 'Jessica', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (21, '1', 'John', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (22, '1', 'JPull', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (23, '1', 'Liam', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (24, '1', 'Lila', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (25, '1', 'Logan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (26, '1', 'Luna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (27, '1', 'Nathan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (28, '1', 'Noah', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (29, '1', 'Oliver', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (30, '1', 'Peter', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (31, '1', 'Raphael', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (32, '1', 'Sharon', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (33, '1', 'Siena', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (34, '1', 'Sophie', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (35, '1', 'Timothy', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (36, '1', 'William', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (37, '2', 'Adriana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (38, '2', 'Alana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (39, '2', 'Alexandria', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (40, '2', 'Alma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (41, '2', 'Andrew', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (42, '2', 'Arielle', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (43, '2', 'Bella', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (44, '2', 'Calcutta', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (45, '2', 'Chloe', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (46, '2', 'Coral', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (47, '2', 'Daniel', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (48, '2', 'Emerald', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (49, '2', 'Emilia', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (50, '2', 'Emily', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (51, '2', 'Emma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (52, '2', 'Ethan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (53, '2', 'Hanna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (54, '2', 'Hayley', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (55, '2', 'Jackson', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (56, '2', 'Jessica', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (57, '2', 'John', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (58, '2', 'JPull', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (59, '2', 'Liam', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (60, '2', 'Lila', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (61, '2', 'Logan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (62, '2', 'Luna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (63, '2', 'Nathan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (64, '2', 'Noah', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (65, '2', 'Oliver', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (66, '2', 'Peter', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (67, '2', 'Raphael', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (68, '2', 'Sharon', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (69, '2', 'Siena', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (70, '2', 'Sophie', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (71, '2', 'Timothy', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (72, '2', 'William', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (73, '3', 'Bella', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (74, '3', 'Emily', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (75, '3', 'Emma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (76, '3', 'Ethan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (77, '3', 'Hayley', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (78, '3', 'Liam', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (80, '3', 'Lila', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (81, '3', 'Oliver', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (82, '4', 'Adriana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (83, '4', 'Alexandria', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (84, '4', 'Andrew', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (85, '4', 'Arielle', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (86, '4', 'Bella', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (87, '4', 'Chloe', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (88, '4', 'Coral', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (89, '4', 'Daniel', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (90, '4', 'Emily', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (91, '4', 'Emma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (92, '4', 'Ethan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (93, '4', 'Hanna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (94, '4', 'Hayley', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (95, '4', 'Jackson', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (96, '4', 'John', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (97, '4', 'Liam', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (98, '4', 'Lila', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (99, '4', 'Logan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (100, '4', 'Nathan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (101, '4', 'Noah', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (102, '4', 'Peter', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (103, '4', 'Sharon', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (104, '4', 'Sophie', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (105, '4', 'William', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (106, '5', 'Adriana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (107, '5', 'Alana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (108, '5', 'Alexandria', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (109, '5', 'Alma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (110, '5', 'Andrew', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (111, '5', 'Calcutta', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (112, '5', 'Chloe', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (113, '5', 'Coral', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (114, '5', 'Daniel', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (115, '5', 'Emerald', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (116, '5', 'Emilia', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (117, '5', 'Hanna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (118, '5', 'Jackson', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (119, '5', 'Jessica', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (120, '5', 'John', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (121, '5', 'Logan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (122, '5', 'Luna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (123, '5', 'Nathan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (124, '5', 'Noah', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (125, '5', 'Peter', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (126, '5', 'Raphael', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (127, '5', 'Sharon', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (128, '5', 'Siena', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (129, '5', 'Sophie', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (130, '5', 'Timothy', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (131, '5', 'William', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (132, '6', 'Federation', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (133, '6', 'Dental Square', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (134, '6', 'Sculptured', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (135, '6', 'Country', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (136, '6', 'Colonial', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (137, '7', 'Adriana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (138, '7', 'Alana', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (139, '7', 'Alexandria', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (140, '7', 'Alma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (141, '7', 'Andrew', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (142, '7', 'Arielle', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (143, '7', 'Bella', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (144, '7', 'Calcutta', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (145, '7', 'Chloe', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (146, '7', 'Coral', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (147, '7', 'Daniel', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (148, '7', 'Emerald', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (149, '7', 'Emilia', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (150, '7', 'Emily', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (151, '7', 'Emma', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (152, '7', 'Ethan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (153, '7', 'Hanna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (154, '7', 'Hayley', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (155, '7', 'Jackson', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (156, '7', 'Jessica', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (157, '7', 'John', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (158, '7', 'JPull', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (159, '7', 'Liam', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (160, '7', 'Lila', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (161, '7', 'Logan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (162, '7', 'Luna', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (163, '7', 'Nathan', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (164, '7', 'Noah', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (165, '7', 'Oliver', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (166, '7', 'Peter', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (167, '7', 'Raphael', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (168, '7', 'Sharon', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (169, '7', 'Siena', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (170, '7', 'Sophie', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (171, '7', 'Timothy', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (172, '7', 'William', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (173, '8', 'C8', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (174, '8', 'C22', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (175, '8', 'C33', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (176, '8', '#C5', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (177, '8', 'C88', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (178, '8', 'C13', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (179, '9', 'Column1', NULL, NULL);
INSERT INTO `tbl_door_style` VALUES (180, '9', 'Column2', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_finger_pull
-- ----------------------------
DROP TABLE IF EXISTS `tbl_finger_pull`;
CREATE TABLE `tbl_finger_pull`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_finger_pull
-- ----------------------------
INSERT INTO `tbl_finger_pull` VALUES (1, 'None', NULL, NULL);
INSERT INTO `tbl_finger_pull` VALUES (2, 'Top', NULL, NULL);
INSERT INTO `tbl_finger_pull` VALUES (3, 'Bottom', NULL, NULL);
INSERT INTO `tbl_finger_pull` VALUES (4, 'Left', NULL, NULL);
INSERT INTO `tbl_finger_pull` VALUES (5, 'Right', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_finish
-- ----------------------------
DROP TABLE IF EXISTS `tbl_finish`;
CREATE TABLE `tbl_finish`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_finish
-- ----------------------------
INSERT INTO `tbl_finish` VALUES (1, 'UnderCoat', NULL, NULL);
INSERT INTO `tbl_finish` VALUES (2, 'Gloss', NULL, NULL);
INSERT INTO `tbl_finish` VALUES (3, 'Semi Gloss', NULL, NULL);
INSERT INTO `tbl_finish` VALUES (4, 'Satin', NULL, NULL);
INSERT INTO `tbl_finish` VALUES (5, 'Textured', NULL, NULL);
INSERT INTO `tbl_finish` VALUES (6, 'Matt', NULL, NULL);
INSERT INTO `tbl_finish` VALUES (7, 'Raw', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_glass_type
-- ----------------------------
DROP TABLE IF EXISTS `tbl_glass_type`;
CREATE TABLE `tbl_glass_type`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `glass_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sq_metre_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_hinge_count
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hinge_count`;
CREATE TABLE `tbl_hinge_count`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `height` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_hinge_count
-- ----------------------------
INSERT INTO `tbl_hinge_count` VALUES (1, '0', '2', NULL, NULL);
INSERT INTO `tbl_hinge_count` VALUES (2, '1011', '3', NULL, NULL);
INSERT INTO `tbl_hinge_count` VALUES (3, '1761', '4', NULL, NULL);
INSERT INTO `tbl_hinge_count` VALUES (4, '2511', '5', NULL, NULL);
INSERT INTO `tbl_hinge_count` VALUES (5, '3261', '6', NULL, NULL);
INSERT INTO `tbl_hinge_count` VALUES (6, '3600', '6', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_hinge_price
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hinge_price`;
CREATE TABLE `tbl_hinge_price`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hinge_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinge_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_hinge_price
-- ----------------------------
INSERT INTO `tbl_hinge_price` VALUES (1, '107 Hinge', 'Blum Motion W5 Inserta', '5', NULL, NULL);
INSERT INTO `tbl_hinge_price` VALUES (2, 'Blind Corner', 'BlindCornerHinge', '7.5', NULL, NULL);
INSERT INTO `tbl_hinge_price` VALUES (3, '155 Hinge', '155Hinge', '7.5', NULL, NULL);
INSERT INTO `tbl_hinge_price` VALUES (4, '170 Hinge', '170Hinge', '7.5', NULL, NULL);
INSERT INTO `tbl_hinge_price` VALUES (5, 'BiFold', 'BiFoldHinge', '7.5', NULL, NULL);
INSERT INTO `tbl_hinge_price` VALUES (6, '45 Degree', '45DegreeHinge', '7.5', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_jpull
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jpull`;
CREATE TABLE `tbl_jpull`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_jpull
-- ----------------------------
INSERT INTO `tbl_jpull` VALUES (1, 'None', NULL, NULL);
INSERT INTO `tbl_jpull` VALUES (2, 'Top', NULL, NULL);
INSERT INTO `tbl_jpull` VALUES (3, 'Bottom', NULL, NULL);
INSERT INTO `tbl_jpull` VALUES (4, 'Left', NULL, NULL);
INSERT INTO `tbl_jpull` VALUES (5, 'Right', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_material_doors
-- ----------------------------
DROP TABLE IF EXISTS `tbl_material_doors`;
CREATE TABLE `tbl_material_doors`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_order
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ordered_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `door_design` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `edge_profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `door_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pvc_edging` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kiks_rail_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `door_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `drawer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinge_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_paint_only
-- ----------------------------
DROP TABLE IF EXISTS `tbl_paint_only`;
CREATE TABLE `tbl_paint_only`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `finish_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `paint_only` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_paint_only
-- ----------------------------
INSERT INTO `tbl_paint_only` VALUES (1, '1', '37.49', NULL, NULL);
INSERT INTO `tbl_paint_only` VALUES (2, '2', '107.1', NULL, NULL);
INSERT INTO `tbl_paint_only` VALUES (3, '3', '96.39', NULL, NULL);
INSERT INTO `tbl_paint_only` VALUES (4, '4', '96.39', NULL, NULL);
INSERT INTO `tbl_paint_only` VALUES (5, '5', '96.39', NULL, NULL);
INSERT INTO `tbl_paint_only` VALUES (6, '6', '96.39', NULL, NULL);
INSERT INTO `tbl_paint_only` VALUES (7, '7', '0', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_painted_door_order_content
-- ----------------------------
DROP TABLE IF EXISTS `tbl_painted_door_order_content`;
CREATE TABLE `tbl_painted_door_order_content`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `serial_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_first` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_second` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_third` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_fourth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_fifth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_sixth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension_first` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension_second` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension_third` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension_fourth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_first` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_second` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_third` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_fourth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_fifth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_painted_door_order_title
-- ----------------------------
DROP TABLE IF EXISTS `tbl_painted_door_order_title`;
CREATE TABLE `tbl_painted_door_order_title`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `serial_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordered_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_ref` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_panel_option
-- ----------------------------
DROP TABLE IF EXISTS `tbl_panel_option`;
CREATE TABLE `tbl_panel_option`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `flat_panels` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_vision_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_panel_option
-- ----------------------------
INSERT INTO `tbl_panel_option` VALUES (1, 'PMDF F+1QL2SQ\r\n', 'LIAMPMDF F+1LQ2SQ\r\n', 'Q', '0', 'PMDF F+1L2SQ: Face painted and 1 long edge painted and 2 short edges painted with 100mm return square edged to 1 long side 2 short sides.\r\n', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (2, 'PMDF F+1LU2SU\r\n', 'HAYLEYPMDF+1LU2SU\r\n', 'U', '0', 'PMDF F+1L2SU: Face painted and 1 long edge painted and 2 short edges painted with 100mm return 3mm edge profile in/out to 1 long side 2 short sides.\r\n', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (3, 'PMDF F+1LQ\r\n', 'LIAMPMDF F+1LQ\r\n', 'Q', '0', 'PMDF F+1LQ Face painted and 1 long edge painted with 100mm return square edged to 1 long side.\r\n', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (4, 'PMDF F+1LU\r\n', 'HAYLEYPMDF+1LU\r\n', 'U', '0', 'PMDF F+1LU: Face painted and 1 long edge painted with 100mm return 3mm edge profile in/out to 1 long side.\r\n', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (5, 'PMDF F+2LQ\r\n', 'LIAMPMDF F+2LQ\r\n', 'Q', '0', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (6, 'PMDF F+2LU\r\n', 'HAYLEYPMDF+2LU\r\n', 'U', '0', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (7, 'PMDF D/S + All Q\r\n', 'LIAMPMDF D/S+ALL Q EDGES\r\n', 'D', '0', 'PMDF D/S + All Q Edges- Face Painted and All edges double sided squre edge.\r\n', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (8, 'PMDF D/S + All U\r\n', 'HAYLEYPMDF D/S+ALL U EDGES \r\n', 'D', '0', 'PMDF D/S + All U- Face Painted and All edges double sided 3mm edge.\r\n', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (9, '', 'HAYLEYPMDF+ALL EDGES\r\n', 'All', '', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (10, '', 'LIAMPMDF F+ ALL EDGES\r\n', 'All', '', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (11, 'PMDF F+1SQ\r\n', 'LIAMPMDF F+1SQ\r\n', 'Q', '', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (12, 'PMDF F+2SQ\r\n', 'LIAMPMDF F+2SQ\r\n', 'Q', '', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (13, 'PMDF F+1SU\r\n', 'HAYLEYPMDF F+1SQ\r\n', 'U', '', '', NULL, NULL);
INSERT INTO `tbl_panel_option` VALUES (14, 'PMDF F+2SU\r\n', 'HAYLEYPMDF F+2SQ\r\n', 'U', '', '', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_price_parameters
-- ----------------------------
DROP TABLE IF EXISTS `tbl_price_parameters`;
CREATE TABLE `tbl_price_parameters`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rebate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `margin_flag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `glass_cutout` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fingerpull_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinge_drilling_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wastage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmould` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `drawer_drilling_charge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jpull_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_pricing_parameters
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pricing_parameters`;
CREATE TABLE `tbl_pricing_parameters`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pricing_parameters
-- ----------------------------
INSERT INTO `tbl_pricing_parameters` VALUES (1, 'rebate', '0.2', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (2, 'margin_flag', '1', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (3, 'glass_cutout', '16.2', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (4, 'fingerpull_rate', '5.4', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (5, 'hinge_drilling_rate', '2.7', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (6, 'wastage', '0.1', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (7, 'tmould', '5.4', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (8, 'drawer_drilling_charge', '5.4', NULL, NULL);
INSERT INTO `tbl_pricing_parameters` VALUES (9, 'jpull_rate', '8.1', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_roller_door_pricing
-- ----------------------------
DROP TABLE IF EXISTS `tbl_roller_door_pricing`;
CREATE TABLE `tbl_roller_door_pricing`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `width` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_MDF` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `painted_MDF` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `melamine` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'customer@email.com', 'password', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
