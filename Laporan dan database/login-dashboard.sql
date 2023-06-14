/*
 Navicat Premium Data Transfer

 Source Server         : tutorial_db
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : login-dashboard

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 14/06/2023 14:16:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for session
-- ----------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session`  (
  `session_id` tinyint NOT NULL AUTO_INCREMENT,
  `id` tinyint NOT NULL,
  `type` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`session_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 83 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of session
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'user',
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` int NULL DEFAULT NULL,
  `address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin', 'admin', 'admin', '', 0, '', '');
INSERT INTO `users` VALUES (2, 'user', 'cuhyo', 'cuhyo', 'admin', '', 0, '', '');
INSERT INTO `users` VALUES (3, 'user', 'farel', 'farel123', 'user', '', 0, '', '');
INSERT INTO `users` VALUES (4, 'farli', 'farli', 'farli', 'user', 'farli@gmail.com', 2147483647, 'purwosari', 'Full Stack developer');
INSERT INTO `users` VALUES (7, 'user', 'testing', 'tes', 'user', '', 0, '', '');
INSERT INTO `users` VALUES (8, 'user', 'addtes', '123', 'user', '', 0, '', '');
INSERT INTO `users` VALUES (9, 'user', 'farlli', 'farli', 'user', '', 0, '', '');
INSERT INTO `users` VALUES (10, 'user', 'tessss', '122333', 'user', '', 0, '', '');
INSERT INTO `users` VALUES (11, 'user', 'dasdadasd', 'dadasda', 'user', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
