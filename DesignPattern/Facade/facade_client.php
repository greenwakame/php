<?php
require_once('Order.php');
require_once('OrderItem.php');
require_once('ItemDao.php');
require_once('OrderManager.php');

$order = new Order();
$item_dao = ItemDao::getinstance();

$order->addItem(new OrderItem($item_dao->findByld(1),1));
$order->addItem(new OrderItem($item_dao->findByld(2),2));
$order->addItem(new OrderItem($item_dao->findByld(3),3));

OrderManager::order($order);