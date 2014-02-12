DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF  NOT EXISTS `profiles`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`ucid` VARCHAR(10) DEFAULT '',
	`name` VARCHAR(250) DEFAULT '',
	`lastname` VARCHAR(250) default '',
	`passwd` VARCHAR(250) default '',
	`email` VARCHAR(250) default '',
	`image` VARCHAR(250),
	`last_login` TIMESTAMP,
	`confirmed` TINYINT default 0,
	PRIMARY KEY(`id`)
)Engine='InnoDB';
