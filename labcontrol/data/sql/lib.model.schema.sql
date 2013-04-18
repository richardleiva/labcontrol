
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- campo_resultado_patogeno
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `campo_resultado_patogeno`;


CREATE TABLE `campo_resultado_patogeno`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`resultado` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- cliente
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cliente`;


CREATE TABLE `cliente`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`cedula` VARCHAR(45),
	`nombre` VARCHAR(45),
	`apellido` VARCHAR(45),
	`direccion` VARCHAR(45),
	`telefono` VARCHAR(45),
	`email` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- dilucion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `dilucion`;


CREATE TABLE `dilucion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- enriq
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `enriq`;


CREATE TABLE `enriq`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`enriquecimiento` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- medio
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `medio`;


CREATE TABLE `medio`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- metodo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `metodo`;


CREATE TABLE `metodo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`tipo_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_metodo_tipo2_idx`(`tipo_id`),
	CONSTRAINT `metodo_FK_1`
		FOREIGN KEY (`tipo_id`)
		REFERENCES `tipo` (`id`)
		ON DELETE CASCADE
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- muestra
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `muestra`;


CREATE TABLE `muestra`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre_responsable` VARCHAR(255),
	`fecha_recepcion` DATETIME,
	`fecha_entrega` DATETIME,
	`hora_recepcion` DATETIME,
	`codigo_interno` VARCHAR(255),
	`cantidad` FLOAT,
	`temperatura_recepcion` VARCHAR(45),
	`temperatura_almacenamiento` VARCHAR(45),
	`observaciones` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`usuario_id` INTEGER  NOT NULL,
	`muestreo_id` INTEGER  NOT NULL,
	`presentacion_id` INTEGER  NOT NULL,
	`norma_id` INTEGER  NOT NULL,
	`cliente_id` INTEGER  NOT NULL,
	`tipo_muestra_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_muestras_usuario1_idx`(`usuario_id`),
	KEY `fk_muestras_muestreo1_idx`(`muestreo_id`),
	KEY `fk_muestras_presentacion1_idx`(`presentacion_id`),
	KEY `fk_muestras_norma1_idx`(`norma_id`),
	KEY `fk_muestras_cliente1_idx`(`cliente_id`),
	KEY `fk_muestra_tipo_muestra1_idx`(`tipo_muestra_id`),
	CONSTRAINT `muestra_FK_1`
		FOREIGN KEY (`usuario_id`)
		REFERENCES `user_profile` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `muestra_FK_2`
		FOREIGN KEY (`muestreo_id`)
		REFERENCES `muestreo` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `muestra_FK_3`
		FOREIGN KEY (`presentacion_id`)
		REFERENCES `presentacion` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `muestra_FK_4`
		FOREIGN KEY (`norma_id`)
		REFERENCES `norma` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `muestra_FK_5`
		FOREIGN KEY (`cliente_id`)
		REFERENCES `cliente` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `muestra_FK_6`
		FOREIGN KEY (`tipo_muestra_id`)
		REFERENCES `tipo_muestra` (`id`)
		ON DELETE CASCADE
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- muestra_has_metodo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `muestra_has_metodo`;


CREATE TABLE `muestra_has_metodo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`muestra_id` INTEGER  NOT NULL,
	`metodo_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_muestra_has_metodo_metodo1_idx`(`metodo_id`),
	KEY `fk_muestra_has_metodo_muestra1_idx`(`muestra_id`),
	CONSTRAINT `muestra_has_metodo_FK_1`
		FOREIGN KEY (`muestra_id`)
		REFERENCES `muestra` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `muestra_has_metodo_FK_2`
		FOREIGN KEY (`metodo_id`)
		REFERENCES `metodo` (`id`)
		ON DELETE CASCADE
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- muestreo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `muestreo`;


CREATE TABLE `muestreo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- no_patogeno
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `no_patogeno`;


CREATE TABLE `no_patogeno`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`cantidad` FLOAT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`resultado_id` INTEGER  NOT NULL,
	`dilucion_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_no_patogeno_resultado1_idx`(`resultado_id`),
	KEY `fk_no_patogeno_dilucion1_idx`(`dilucion_id`),
	CONSTRAINT `no_patogeno_FK_1`
		FOREIGN KEY (`resultado_id`)
		REFERENCES `resultado` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `no_patogeno_FK_2`
		FOREIGN KEY (`dilucion_id`)
		REFERENCES `dilucion` (`id`)
		ON DELETE CASCADE
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- norma
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `norma`;


CREATE TABLE `norma`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- patogenos
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `patogenos`;


CREATE TABLE `patogenos`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre_prueba` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`resultado_id` INTEGER  NOT NULL,
	`campo_resultado_patogeno_id` INTEGER  NOT NULL,
	`prueba_bioquimica_id` INTEGER  NOT NULL,
	`positivo_negativo_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_patogenos_resultado1_idx`(`resultado_id`),
	KEY `fk_patogenos_campo_resultado_patogeno1_idx`(`campo_resultado_patogeno_id`),
	KEY `fk_patogenos_prueba_bioquimica1_idx`(`prueba_bioquimica_id`),
	KEY `fk_patogenos_positivo_negativo1_idx`(`positivo_negativo_id`),
	CONSTRAINT `patogenos_FK_1`
		FOREIGN KEY (`resultado_id`)
		REFERENCES `resultado` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `patogenos_FK_2`
		FOREIGN KEY (`campo_resultado_patogeno_id`)
		REFERENCES `campo_resultado_patogeno` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `patogenos_FK_3`
		FOREIGN KEY (`prueba_bioquimica_id`)
		REFERENCES `prueba_bioquimica` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `patogenos_FK_4`
		FOREIGN KEY (`positivo_negativo_id`)
		REFERENCES `positivo_negativo` (`id`)
		ON DELETE CASCADE
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- positivo_negativo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `positivo_negativo`;


CREATE TABLE `positivo_negativo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`resultado` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- pre_enriq
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pre_enriq`;


CREATE TABLE `pre_enriq`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`pre_enriquecimiento` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- presentacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `presentacion`;


CREATE TABLE `presentacion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- prueba_bioquimica
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `prueba_bioquimica`;


CREATE TABLE `prueba_bioquimica`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- resultado
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `resultado`;


CREATE TABLE `resultado`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`pre_enriq_id` INTEGER  NOT NULL,
	`enriq_id` INTEGER  NOT NULL,
	`medio_id` INTEGER  NOT NULL,
	`temp_incubacion_id` INTEGER  NOT NULL,
	`tiempo_incubacion_id` INTEGER  NOT NULL,
	`muestra_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_resultado_pre_enriq1_idx`(`pre_enriq_id`),
	KEY `fk_resultado_enriq1_idx`(`enriq_id`),
	KEY `fk_resultado_medio1_idx`(`medio_id`),
	KEY `fk_resultado_temp_incubacion1_idx`(`temp_incubacion_id`),
	KEY `fk_resultado_tiempo_incubacion1_idx`(`tiempo_incubacion_id`),
	KEY `fk_resultado_muestra1_idx`(`muestra_id`),
	CONSTRAINT `resultado_FK_1`
		FOREIGN KEY (`pre_enriq_id`)
		REFERENCES `pre_enriq` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `resultado_FK_2`
		FOREIGN KEY (`enriq_id`)
		REFERENCES `enriq` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `resultado_FK_3`
		FOREIGN KEY (`medio_id`)
		REFERENCES `medio` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `resultado_FK_4`
		FOREIGN KEY (`temp_incubacion_id`)
		REFERENCES `temp_incubacion` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `resultado_FK_5`
		FOREIGN KEY (`tiempo_incubacion_id`)
		REFERENCES `tiempo_incubacion` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `resultado_FK_6`
		FOREIGN KEY (`muestra_id`)
		REFERENCES `muestra` (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- temp_incubacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `temp_incubacion`;


CREATE TABLE `temp_incubacion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`temperatura` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- tiempo_incubacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tiempo_incubacion`;


CREATE TABLE `tiempo_incubacion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`tiempo` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- tipo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo`;


CREATE TABLE `tipo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- tipo_muestra
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_muestra`;


CREATE TABLE `tipo_muestra`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- unidad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `unidad`;


CREATE TABLE `unidad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45),
	`tipo` VARCHAR(45),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- user_profile
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user_profile`;


CREATE TABLE `user_profile`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45),
	`apellido` VARCHAR(45),
	`cargo` VARCHAR(45),
	`user_id` INTEGER  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `user_profile_FI_1` (`user_id`),
	CONSTRAINT `user_profile_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Engine=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
