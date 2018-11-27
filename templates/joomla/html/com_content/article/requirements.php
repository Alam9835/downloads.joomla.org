<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Load page translations
JFactory::getLanguage()->load('page_technical_requirements', JPATH_SITE);

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

?>
<div class="item-page<?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<div class="page-header">
		<h1><?php echo JText::_('TECHNICAL_REQUIREMENTS_PAGE_HEADING'); ?></h1>
	</div>

	<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate()) || ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate())) : ?>
		<div class="page-header">
			<?php if ($this->item->state == 0) : ?>
				<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
			<?php endif; ?>
			<?php if (strtotime($this->item->publish_up) > strtotime(JFactory::getDate())) : ?>
				<span class="label label-warning"><?php echo JText::_('JNOTPUBLISHEDYET'); ?></span>
			<?php endif; ?>
			<?php if ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate()) : ?>
				<span class="label label-warning"><?php echo JText::_('JEXPIRED'); ?></span>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php // Content is generated by content plugin event "onContentAfterTitle" ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>

	<div class="article-info muted">
		<span class="icon-calendar" aria-hidden="true"></span> <time datetime="2018-11-27T00:00:00+00:00" itemprop="dateModified"><?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', '2018-11-27 00:00:00', JText::_('DATE_FORMAT_LC3'))); ?></time>
	</div>

	<?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>

	<div itemprop="articleBody">
		<div class="alert alert-info"><?php echo JText::_('TECHNICAL_REQUIREMENTS_ALERT_RECOMMENDED_VERSIONS_BASED_ON_LATEST_RELEASE'); ?></div>
		<h2><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_REQUIREMENTS_FOR_SUPPORTED_SOFTWARE'); ?></h2>
		<h3><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_REQUIREMENTS_FOR_JOOMLA_3'); ?></h3>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SOFTWARE'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_RECOMMENDED'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MINIMUM'); ?></th>
					<th class="hidden-phone" scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MORE_INFORMATION'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">PHP<sup><a href="#footnote-3xPHP">[1]</a></sup></th>
					<td>7.1 +</td>
					<td>5.3.10</td>
					<td class="hidden-phone">
						<div><a href="https://secure.php.net" target="_blank" rel="noopener noreferrer">https://secure.php.net</a></div>
						<small><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_PHP_REQUIREMENTS_FOOTNOTE'); ?></small>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_DATABASES'); ?></th>
				</tr>
				<tr>
					<th scope="row">MySQL<sup><a href="#footnote-3xMySQL">[2]</a></sup></th>
					<td>5.5.3 +</td>
					<td>5.1</td>
					<td class="hidden-phone">
						<div><a href="https://www.mysql.com" target="_blank" rel="noopener noreferrer">https://www.mysql.com</a></div>
						<small><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_MYSQL_REQUIREMENTS_FOOTNOTE'); ?></small>
					</td>
				</tr>
				<tr>
					<th scope="row">SQL Server</th>
					<td>10.50.1600.1 +</td>
					<td>10.50.1600.1</td>
					<td class="hidden-phone">
						<a href="https://www.microsoft.com/sql" target="_blank" rel="noopener noreferrer">https://www.microsoft.com/sql</a>
					</td>
				</tr>
				<tr>
					<th scope="row">PostgreSQL</th>
					<td>9.1 +</td>
					<td>8.3.18</td>
					<td class="hidden-phone">
						<a href="https://www.postgresql.org/" target="_blank" rel="noopener noreferrer">https://www.postgresql.org/</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_WEB_SERVERS'); ?></th>
				</tr>
				<tr>
					<th scope="row">Apache<sup><a href="#footnote-apache">[3]</a></sup></th>
					<td>2.4 +</td>
					<td>2.0</td>
					<td class="hidden-phone">
						<div><a href="https://www.apache.org" target="_blank" rel="noopener noreferrer">https://www.apache.org</a></div>
						<small><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_APACHE_REQUIREMENTS_FOOTNOTE'); ?></small>
					</td>
				</tr>
				<tr>
					<th scope="row">Nginx</th>
					<td>1.8 +</td>
					<td>1.0</td>
					<td class="hidden-phone">
						<a href="https://www.nginx.com/resources/wiki/" target="_blank" rel="noopener noreferrer">https://www.nginx.com/resources/wiki/</a>
					</td>
				</tr>
				<tr>
					<th scope="row">Microsoft IIS<sup><a href="#footnote-iis">[6]</a></sup></th>
					<td>7</td>
					<td>7</td>
					<td class="hidden-phone">
						<a href="https://www.iis.net" target="_blank" rel="noopener noreferrer">https://www.iis.net</a>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="alert alert-info"><?php echo JText::sprintf('TECHNICAL_REQUIREMENTS_SUPPORTED_BROWSERS', JHtml::_('link', 'https://docs.joomla.org/S:MyLanguage/Joomla_Browser_Support', 'https://docs.joomla.org/Joomla_Browser_Support', ['class' => 'alert-link'])); ?></div>

		<h2><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_REQUIREMENTS_FOR_UNSUPPORTED_SOFTWARE'); ?></h2>

		<h3><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_REQUIREMENTS_FOR_JOOMLA_25'); ?></h3>
		<div class="alert alert-warning"><?php echo JText::sprintf('TECHNICAL_REQUIREMENTS_ALERT_SUPPORT_ENDED_ON', JHtml::_('date', '2014-12-31 00:00:00', JText::_('DATE_FORMAT_LC3'))); ?></div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SOFTWARE'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_RECOMMENDED'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MINIMUM'); ?></th>
					<th class="hidden-phone" scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MORE_INFORMATION'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">PHP</th>
					<td>5.6</td>
					<td>5.2.4</td>
					<td class="hidden-phone">
						<a href="https://secure.php.net" target="_blank" rel="noopener noreferrer">https://secure.php.net</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_DATABASES'); ?></th>
				</tr>
				<tr>
					<th scope="row">MySQL</th>
					<td>5.0.4 +</td>
					<td>5.0.4</td>
					<td class="hidden-phone">
						<a href="https://www.mysql.com" target="_blank" rel="noopener noreferrer">https://www.mysql.com</a>
					</td>
				</tr>
				<tr>
					<th scope="row">SQL Server<sup><a href="#footnote-sqlsrv25">[5]</a></sup></th>
					<td>10.50.1600.1 +</td>
					<td>10.50.1600.1</td>
					<td class="hidden-phone">
						<a href="https://www.microsoft.com/sql" target="_blank" rel="noopener noreferrer">https://www.microsoft.com/sql</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_WEB_SERVERS'); ?></th>
				</tr>
				<tr>
					<th scope="row">Apache<sup><a href="#footnote-apache">[3]</a></sup></th>
					<td>2.2 +</td>
					<td>2.0</td>
					<td class="hidden-phone">
						<div><a href="https://www.apache.org" target="_blank" rel="noopener noreferrer">https://www.apache.org</a></div>
						<small><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_APACHE_REQUIREMENTS_FOOTNOTE'); ?></small>
					</td>
				</tr>
				<tr>
					<th scope="row">Nginx</th>
					<td>1.1 +</td>
					<td>1.0</td>
					<td class="hidden-phone">
						<a href="https://www.nginx.com/resources/wiki/" target="_blank" rel="noopener noreferrer">https://www.nginx.com/resources/wiki/</a>
					</td>
				</tr>
				<tr>
					<th scope="row">Microsoft IIS<sup><a href="#footnote-iis">[6]</a></sup></th>
					<td>7</td>
					<td>7</td>
					<td class="hidden-phone">
						<a href="https://www.iis.net" target="_blank" rel="noopener noreferrer">https://www.iis.net</a>
					</td>
				</tr>
			</tbody>
		</table>

		<h3><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_REQUIREMENTS_FOR_JOOMLA_15'); ?></h3>
		<div class="alert alert-warning"><?php echo JText::sprintf('TECHNICAL_REQUIREMENTS_ALERT_SUPPORT_ENDED_ON', JHtml::_('date', '2012-12-31 00:00:00', JText::_('DATE_FORMAT_LC3'))); ?></div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SOFTWARE'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_RECOMMENDED'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MINIMUM'); ?></th>
					<th class="hidden-phone" scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MORE_INFORMATION'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">PHP<sup><a href="#footnote-1xPHP">[4]</a></sup></th>
					<td>5.3</td>
					<td>4.3.10</td>
					<td class="hidden-phone">
						<a href="https://secure.php.net" target="_blank" rel="noopener noreferrer">https://secure.php.net</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_DATABASES'); ?></th>
				</tr>
				<tr>
					<th scope="row">MySQL</th>
					<td>4.1.x +</td>
					<td>3.23</td>
					<td class="hidden-phone">
						<a href="https://www.mysql.com" target="_blank" rel="noopener noreferrer">https://www.mysql.com</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_WEB_SERVERS'); ?></th>
				</tr>
				<tr>
					<th scope="row">Apache<sup><a href="#footnote-apache">[3]</a></sup></th>
					<td>2.0 +</td>
					<td>1.3</td>
					<td class="hidden-phone">
						<div><a href="https://www.apache.org" target="_blank" rel="noopener noreferrer">https://www.apache.org</a></div>
						<small><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_APACHE_REQUIREMENTS_FOOTNOTE'); ?></small>
					</td>
				</tr>
				<tr>
					<th scope="row">Microsoft IIS<sup><a href="#footnote-iis">[6]</a></sup></th>
					<td>7</td>
					<td>6</td>
					<td class="hidden-phone">
						<a href="https://www.iis.net" target="_blank" rel="noopener noreferrer">https://www.iis.net</a>
					</td>
				</tr>
			</tbody>
		</table>

		<h3><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_REQUIREMENTS_FOR_JOOMLA_10'); ?></h3>
		<div class="alert alert-warning"><?php echo JText::sprintf('TECHNICAL_REQUIREMENTS_ALERT_SUPPORT_ENDED_ON', JHtml::_('date', '2009-07-22 00:00:00', JText::_('DATE_FORMAT_LC3'))); ?></div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SOFTWARE'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_RECOMMENDED'); ?></th>
					<th scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MINIMUM'); ?></th>
					<th class="hidden-phone" scope="col"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_MORE_INFORMATION'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">PHP<sup><a href="#footnote-1xPHP">[4]</a></sup></th>
					<td>5.3</td>
					<td>4.3.10</td>
					<td class="hidden-phone">
						<a href="https://secure.php.net" target="_blank" rel="noopener noreferrer">https://secure.php.net</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_DATABASES'); ?></th>
				</tr>
				<tr>
					<th scope="row">MySQL</th>
					<td>4.1.x +</td>
					<td>3.23</td>
					<td class="hidden-phone">
						<a href="https://www.mysql.com" target="_blank" rel="noopener noreferrer">https://www.mysql.com</a>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th scope="rowgroup" colspan="4"><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_HEADING_SUPPORTED_WEB_SERVERS'); ?></th>
				</tr>
				<tr>
					<th scope="row">Apache<sup><a href="#footnote-apache">[3]</a></sup></th>
					<td>2.0 +</td>
					<td>1.3</td>
					<td class="hidden-phone">
						<div><a href="https://www.apache.org" target="_blank" rel="noopener noreferrer">https://www.apache.org</a></div>
						<small><?php echo JText::_('TECHNICAL_REQUIREMENTS_SUPPORT_TABLE_APACHE_REQUIREMENTS_FOOTNOTE'); ?></small>
					</td>
				</tr>
				<tr>
					<th scope="row">Microsoft IIS<sup><a href="#footnote-iis">[6]</a></sup></th>
					<td>7</td>
					<td>6</td>
					<td class="hidden-phone">
						<a href="https://www.iis.net" target="_blank" rel="noopener noreferrer">https://www.iis.net</a>
					</td>
				</tr>
			</tbody>
		</table>

		<h2><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_FOOTNOTES'); ?></h2>

		<p id="footnote-3xPHP"><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_1_JOOMLA_3_PHP_SUPPORT'); ?></p>
		<p id="footnote-3xMySQL"><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_2_JOOMLA_3_MYSQL_SUPPORT'); ?></p>
		<p id="footnote-apache"><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_3_APACHE_SUPPORT'); ?></p>
		<p id="footnote-1xPHP"><?php echo JText::sprintf('TECHNICAL_REQUIREMENTS_FOOTNOTE_4_JOOMLA_1X_PHP_SUPPORT', JHtml::_('link', 'https://www.zend.com', 'Zend Optimizer', ['target' => '_blank', 'rel' => 'noopener noreferrer'])); ?></p>
		<p id="footnote-sqlsrv25"><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_5_JOOMLA_25_SQL_SERVER_SUPPORT'); ?></p>
		<p id="footnote-iis"><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_6_IIS_SUPPORT_INTRO'); ?></p>
		<ul>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_6_LIST_ITEM_1_PHP'); ?></li>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_6_LIST_ITEM_2_MYSQL'); ?></li>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_6_LIST_ITEM_3_URL_REWRITE_MODULE'); ?></li>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_6_LIST_ITEM_4_FASTCGI'); ?></li>
		</ul>
		<p><?php echo JText::_('TECHNICAL_REQUIREMENTS_FOOTNOTE_6_IIS_SUPPORT_OUTRO'); ?></p>

		<h2><?php echo JText::_('TECHNICAL_REQUIREMENTS_HEADING_CONFIGURATION_OPTIONS'); ?></h2>

		<p><?php echo JText::_('TECHNICAL_REQUIREMENTS_CONFIGURATION_OPTIONS_INTRO'); ?></p>
		<ul>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_CONFIGURATION_OPTIONS_LIST_ITEM_1_LAMP'); ?></li>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_CONFIGURATION_OPTIONS_LIST_ITEM_2_WAMP'); ?></li>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_CONFIGURATION_OPTIONS_LIST_ITEM_3_MAMP'); ?></li>
			<li><?php echo JText::_('TECHNICAL_REQUIREMENTS_CONFIGURATION_OPTIONS_LIST_ITEM_4_XAMPP'); ?></li>
		</ul>
		<p><?php echo JText::_('TECHNICAL_REQUIREMENTS_CONFIGURATION_OPTIONS_OUTRO'); ?></p>
	</div>

	<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
	<?php echo $this->item->event->afterDisplayContent; ?>
</div>
