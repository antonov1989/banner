CREATE TABLE `statistic` (
  `ip_address` VARBINARY(16) NOT NULL,
  `user_agent` VARCHAR(255) NOT NULL,
  `view_date` DATETIME NOT NULL,
  `page_url` VARCHAR(512) NULL,
  `views_count` INT UNSIGNED NOT NULL);

ALTER TABLE `statistic`
  ADD UNIQUE INDEX `statistic_user_unique` (`ip_address` ASC, `user_agent` ASC, `page_url` ASC);