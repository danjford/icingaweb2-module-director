<?php

$section = $this->menuSection($this->translate('Icinga Director'));

$section->setIcon('cubes');

// COMMAND
$section->add($this->translate('Commands'))
    ->setUrl('director/list/commands');
$section->add($this->translate('Command Arguments'))
    ->setUrl('director/list/commandarguments');

// KA
$section->add($this->translate('Timeperiods'))
    ->setUrl('director/list/timeperiods');

// HOST
$section->add($this->translate('Hosts'))
    ->setUrl('director/list/hosts');
$section->add($this->translate('Hostgroups'))
    ->setUrl('director/list/hostgroups');
$section->add($this->translate('Hostgroup Members'))
    ->setUrl('director/list/hostgroupmembers');
$section->add($this->translate('Host Vars'))
    ->setUrl('director/list/hostvars');

// SERVICE
$section->add($this->translate('Services'))
    ->setUrl('director/list/services');
$section->add($this->translate('Servicegroups'))
    ->setUrl('director/list/servicegroups');

// USER
$section->add($this->translate('Users'))
    ->setUrl('director/list/users');
$section->add($this->translate('Usergroups'))
    ->setUrl('director/list/usergroups');

// HA
$section->add($this->translate('Zones'))
    ->setUrl('director/list/zones');
$section->add($this->translate('Endpoints'))
    ->setUrl('director/list/endpoints');

// INTERNAL
$section->add($this->translate('Activity Log'))
    ->setUrl('director/list/activitylog')
    ->setPriority(900);
