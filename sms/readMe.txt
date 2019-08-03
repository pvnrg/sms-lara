ALTER TABLE `jobs` CHANGE `no_of_stc` `no_of_stc` VARCHAR(191) NULL DEFAULT NULL;

ALTER TABLE `jobs` CHANGE `no_of_panels` `no_of_panels` VARCHAR(191) NULL DEFAULT NULL;

ALTER TABLE `jobs` ADD `no_of_panels_value` INT(11) DEFAULT NULL AFTER `no_of_panels`;

ALTER TABLE `jobs` ADD `email_to_retailer` VARCHAR(191) NULL DEFAULT 'No' AFTER `customer_id`;

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `value`) VALUES (NULL, NULL, NULL, NULL, 'stc_index', '14.01');

ALTER TABLE `jobs` ADD `stc` FLOAT(8,2) NULL DEFAULT '0.00' AFTER `email_to_retailer`;

ALTER TABLE `products` CHANGE `certifying_authority_certificate_number` `certifying_authority_certificate_number` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;

ALTER TABLE `package_product` CHANGE `price` `kw` FLOAT(8,2) NULL DEFAULT '0.00';

ALTER TABLE `products` CHANGE `price` `price` FLOAT(8,2) NOT NULL DEFAULT '0.00';

ALTER TABLE `products` CHANGE `sale_price` `sale_price` INT(11) NOT NULL DEFAULT '0';

UPDATE `settings` SET `name` = 'STC_Index' WHERE `settings`.`id` = 18;

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `value`) VALUES (NULL, NULL, NULL, NULL, 'STC_Price', '$38');

ALTER TABLE `offer` CHANGE `status` `status` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Awaiting for customer';

UPDATE `offer` SET `status`='Awaiting for Customer' WHERE `status`='Open'

ALTER TABLE `jobs` ADD `pre_approved` VARCHAR(191) NULL DEFAULT 'No' AFTER `email_to_retailer`;

ALTER TABLE `jobs` ADD `deposit_or_finance` VARCHAR(191) NULL DEFAULT 'Deposit' AFTER `pre_approved`;

ALTER TABLE `offer` ADD `follow_up` VARCHAR(191) NULL DEFAULT '1' AFTER `status`;

ALTER TABLE `jobs` CHANGE `pre_approved` `pre_approval_number` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;

ALTER TABLE `jobs` ADD `offer_id` INT(191) NULL DEFAULT '0' AFTER `deposit_or_finance`;

ALTER TABLE `offer` ADD `follow_up_date` DATETIME NULL DEFAULT CURRENT_TIMESTAMP AFTER `follow_up`, ADD `mail_counter` INT NULL DEFAULT '0' AFTER `follow_up_date`;

ALTER TABLE `offer` CHANGE `follow_up_date` `follow_up_date` DATE NULL DEFAULT NULL;

ALTER TABLE `offer` ADD `created_by` INT NULL DEFAULT '1' AFTER `mail_counter`;

ALTER TABLE `parties` ADD `number_of_phase` VARCHAR(191) NULL DEFAULT '1' AFTER `ABN_number`;

ALTER TABLE `jobs` ADD `total_wt` FLOAT(8,2) NULL DEFAULT '1000' AFTER `offer_id`;

UPDATE `parties` SET `meter_phase` = '["2","Floor Heating"]' ;

ALTER TABLE `jobs` CHANGE `connection_type` `connection_type` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Alteration';

ALTER TABLE `offer` ADD `mail_date` DATE NULL DEFAULT '2018-04-05' AFTER `created_by`;

ALTER TABLE `jobs` ADD `installer_id` INT NULL DEFAULT '0' AFTER `total_wt`;

ALTER TABLE `users` ADD `address` VARCHAR(191) NULL DEFAULT NULL AFTER `api_token`,
ADD `phone` VARCHAR(191) NULL DEFAULT NULL AFTER `address`,
ADD `suburb` VARCHAR(191) NULL DEFAULT NULL AFTER `phone`,
ADD `post_code` VARCHAR(191) NULL DEFAULT NULL AFTER `suburb`,
ADD `accredition_number` VARCHAR(191) NULL DEFAULT NULL AFTER `post_code`,
ADD `company_name` VARCHAR(191) NULL DEFAULT NULL AFTER `accredition_number`,
ADD `company_address` VARCHAR(191) NULL DEFAULT NULL AFTER `company_name`;

ALTER TABLE `jobs` CHANGE `deposit_or_finance` `deposit_or_finance` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Not Completed';

ALTER TABLE `jobs` ADD `status` VARCHAR(191) NULL DEFAULT 'Open' AFTER `installer_id`;

ALTER TABLE `folders` CHANGE `customer_id` `customer_id` INT(11) NOT NULL DEFAULT '0';

ALTER TABLE `folders` ADD `package_id` INT(191) NULL DEFAULT '0' AFTER `id`;

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `value`) VALUES (NULL, NULL, NULL, NULL, 'Max_Rebate', '20');

ALTER TABLE `parties` ADD `sales_id` INT NULL DEFAULT '1' AFTER `id`;

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `value`) VALUES (NULL, NULL, NULL, NULL, 'Sender_Name', 'Greensky'), (NULL, NULL, NULL, NULL, 'Sender_Email', 'ashvini.citrusbug@gmail.com');

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `value`) VALUES (NULL, NULL, NULL, NULL, 'Sender_CC', 'sadhana.citrusbug@gmail.com,ashvini.citrusbug@gmail.com');

ALTER TABLE `jobs` ADD `installation_date` DATE NULL DEFAULT NULL AFTER `status`;

ALTER TABLE `jobs` CHANGE `installation_date` `installation_date` VARCHAR(191) NULL DEFAULT NULL;

ALTER TABLE `parties` ADD `reminder` INT NULL DEFAULT '0' AFTER `number_of_phase`;

ALTER TABLE `jobs` ADD `package_id` INT NULL DEFAULT '0' AFTER `installation_date`;

ALTER TABLE `jobs` ADD `seperate_inverter` VARCHAR(191) NULL DEFAULT 'No' AFTER `package_id`;

ALTER TABLE `parties` CHANGE `customer_status` `customer_status` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0' COMMENT '[ 0 => \'Lead\' , 1 => \'Customer\', 2 => \'Prospect\', 3 => \'LOST\']';

ALTER TABLE `parties` CHANGE `status` `status` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '[0 => \'CRM (from our side)\', 1 => \'Web Curl call (API)\', 2 => \'Wordpress Website\' , 3 => \'iPhone\']';

ALTER TABLE `packages` ADD `feature` INT NULL DEFAULT '0' AFTER `package_image`;

ALTER TABLE `products` ADD `feature` INT NULL DEFAULT '0' AFTER `no_of_phases`;

ALTER TABLE `parties` ADD `provider_id` INT NULL DEFAULT NULL AFTER `reminder`;

ALTER TABLE `products` ADD `brand_id` INT NULL DEFAULT '0' AFTER `feature`;

ALTER TABLE `products` CHANGE `type` `type` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;

ALTER TABLE `folders` ADD `job_id` INT NULL DEFAULT '0' AFTER `customer_id`; 

ALTER TABLE `parties` ADD `party_data` LONGTEXT NULL DEFAULT NULL AFTER `provider_id`;  

ALTER TABLE `parties` CHANGE `number_of_phase` `number_of_phase` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;

ALTER TABLE `customer_offer` ADD `extra_price` FLOAT(15,2) NULL DEFAULT '0' AFTER `package_price`;

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `value`) VALUES (NULL, NULL, NULL, NULL, 'Sender_BCC', 'ashvini.citrsubug@gmail.com,wikitutedev@gmail.com');

ALTER TABLE `customer_offer` ADD `description` LONGTEXT NULL DEFAULT NULL AFTER `status`;

ALTER TABLE `users` ADD `image` VARCHAR(191) NULL DEFAULT NULL AFTER `company_address`;

ALTER TABLE `jobs` ADD `completed_on` VARCHAR(191) NULL DEFAULT NULL AFTER `seperate_inverter`; 

ALTER TABLE `jobs` ADD `electrical_id` INT NULL AFTER `completed_on`, ADD `designer_id` INT NULL AFTER `electrical_id`;

ALTER TABLE `parties` ADD `capsule_id` INT NULL DEFAULT '0' AFTER `party_data`;

ALTER TABLE `offer` ADD `package_id` INT NOT NULL DEFAULT '0' AFTER `mail_date`, ADD `sign` INT NOT NULL DEFAULT '0' AFTER `package_id`;

ALTER TABLE `offer` ADD `customer_sign` LONGTEXT NULL DEFAULT NULL AFTER `sign`;

ALTER TABLE `jobs` ADD `customer_sign`  LONGTEXT NULL DEFAULT NULL AFTER `designer_id`, ADD `sign` INT NOT NULL DEFAULT '0' AFTER `customer_sign`;

ALTER TABLE `jobs` ADD `ip` VARCHAR(191) NULL DEFAULT NULL AFTER `sign`, ADD `latitude` VARCHAR(191) NULL DEFAULT NULL AFTER `ip`, ADD `longitude` VARCHAR(191) NULL DEFAULT NULL AFTER `latitude`;

ALTER TABLE `offer` ADD `ip` VARCHAR(191) NULL DEFAULT NULL AFTER `customer_sign`, ADD `latitude` VARCHAR(191) NULL DEFAULT NULL AFTER `ip`, ADD `longitude` VARCHAR(191) NULL DEFAULT NULL AFTER `latitude`;

ALTER TABLE `offer` ADD `sign_date` VARCHAR(191) NULL DEFAULT NULL AFTER `longitude`;

ALTER TABLE `jobs` ADD `sign_date` VARCHAR(191) NULL DEFAULT NULL AFTER `longitude`;

===============================================================================

ALTER TABLE `offer` ADD `xero_account_number` VARCHAR(191) NULL DEFAULT NULL AFTER `sign_date`, ADD `xero_invoice_number` VARCHAR(191) NULL DEFAULT NULL AFTER `xero_account_number`;

ALTER TABLE `parties` ADD `xero_account_number` VARCHAR(191) NULL AFTER `capsule_id`;

=========================================================================================================


ALTER TABLE `jobs` ADD `electrical_safety` VARCHAR(191) NULL AFTER `sign_date`;


===============================================

ALTER TABLE `jobs` ADD `ces_number` VARCHAR(191) NULL AFTER `electrical_safety`, ADD `ces_completion_date` VARCHAR(191) NULL AFTER `ces_number`, ADD `contact_project_group` VARCHAR(191) NULL AFTER `ces_completion_date`, ADD `project_number` VARCHAR(191) NULL AFTER `contact_project_group`, ADD `contact_project_group_name` VARCHAR(191) NULL AFTER `project_number`, ADD `public_land` VARCHAR(191) NULL AFTER `contact_project_group_name`, ADD `epv` VARCHAR(191) NULL AFTER `public_land`, ADD `traffic_control` VARCHAR(191) NULL AFTER `epv`, ADD `solar_panel_value` VARCHAR(191) NULL AFTER `traffic_control`, ADD `inverter_value` VARCHAR(191) NULL AFTER `solar_panel_value`;

=======================================================================

ALTER TABLE `jobs` ADD `meter_phase_other` VARCHAR(191) NULL AFTER `inverter_value`, ADD `electrical_name` VARCHAR(191) NULL AFTER `meter_phase_other`, ADD `acceptance_of_charge` VARCHAR(191) NULL AFTER `electrical_name`, ADD `termination` VARCHAR(191) NULL AFTER `acceptance_of_charge`, ADD `embd_network` VARCHAR(191) NULL AFTER `termination`;

=================================================================

ALTER TABLE `jobs` ADD `premise_type` VARCHAR(191) NULL AFTER `embd_network`;

===================================================







  
    
