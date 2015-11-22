<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('bannerfraction')};
CREATE TABLE {$this->getTable('bannerfraction')} (
  `bannerfraction_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `title2` varchar(255) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `image` varchar(255) NOT NULL default '',
  `order` smallint(6) NOT NULL default '0',
  `store_id` varchar(255) NOT NULL default '',
  `description` text NOT NULL default '',
  `width` smallint(6) NOT NULL default '0',
  `height` smallint(6) NOT NULL default '350',
  `status` smallint(6) NOT NULL default '200',
  `kind_effect` smallint(6) NOT NULL default '1',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`bannerfraction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 