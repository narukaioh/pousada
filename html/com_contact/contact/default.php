<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams('com_media');

jimport('joomla.html.html.bootstrap');
?>


<div class="container contact<?php echo $this->pageclass_sfx?>" itemscope itemtype="http://schema.org/Person">
	<div class="row">
		<div class="8u 12u(mobile)">

			<!-- Content -->
			<article class="box post contact">
				<?php if ($this->contact->image && $this->params->get('show_image')) : ?>
				<a href="#" class="image featured">
					<?php echo JHtml::_('image', $this->contact->image, JText::_('COM_CONTACT_IMAGE_DETAILS'), array('align' => 'middle', 'itemprop' => 'image')) ?>
				</a>
				<?php endif; ?>
				<header>
					<?php if ($this->params->get('show_page_heading')) : ?>
						<h1>
							<?php echo $this->escape($this->params->get('page_heading')); ?>
						</h1>
					<?php endif; ?>	

					<?php if ($this->contact->name && $this->params->get('show_name')) : ?>
						<?php if ($this->item->published == 0) : ?>
							<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
						<?php endif; ?>
						<h2><?php echo $this->escape($this->params->get('page_heading')); ?></h2>
					<?php endif; ?>
					<?php if ($this->params->get('show_contact_category') == 'show_no_link') : ?>
						<h3>
							<span class="contact-category"><?php echo $this->contact->category_title; ?></span>
						</h3>
					<?php endif; ?>
				</header>

				<?php echo $this->item->event->afterDisplayTitle; ?>

				<?php if ($this->params->get('show_contact_list') && count($this->contacts) > 1) : ?>
					<form action="#" method="get" name="selectForm" id="selectForm">
						<?php echo JText::_('COM_CONTACT_SELECT_CONTACT'); ?>
						<?php echo JHtml::_('select.genericlist', $this->contacts, 'id', 'class="inputbox" onchange="document.location.href = this.value"', 'link', 'name', $this->contact->link);?>
					</form>
				<?php endif; ?>

				<?php if ($this->params->get('show_tags', 1) && !empty($this->item->tags)) : ?>
					<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
					<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
				<?php endif; ?>

				<?php echo $this->item->event->beforeDisplayContent; ?>

				<?php if ($this->contact->con_position && $this->params->get('show_position')) : ?>
					<dl class="contact-position dl-horizontal">
						<dd itemprop="jobTitle">
							<?php echo $this->contact->con_position; ?>
						</dd>
					</dl>
				<?php endif; ?>

				<?php if ($this->params->get('allow_vcard')) :	?>
					<?php echo JText::_('COM_CONTACT_DOWNLOAD_INFORMATION_AS');?>
					<a href="<?php echo JRoute::_('index.php?option=com_contact&amp;view=contact&amp;id=' . $this->contact->id . '&amp;format=vcf'); ?>">
					<?php echo JText::_('COM_CONTACT_VCARD');?></a>
				<?php endif; ?>

				<?php if ($this->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id)) : ?>
					<?php  echo $this->loadTemplate('form');  ?>
				<?php endif; ?>

				<?php if ($this->params->get('show_links')) : ?>
					<?php echo $this->loadTemplate('links'); ?>
				<?php endif; ?>

				<?php if ($this->params->get('show_articles') && $this->contact->user_id && $this->contact->articles) : ?>
					<?php echo $this->loadTemplate('articles'); ?>
				<?php endif; ?>

				<?php if ($this->params->get('show_profile') && $this->contact->user_id && JPluginHelper::isEnabled('user', 'profile')) : ?>
					<?php echo $this->loadTemplate('profile'); ?>
				<?php endif; ?>

				<?php echo $this->item->event->afterDisplayContent; ?>

			</article>

		</div>
		<div class="4u 12u(mobile)">

			<!-- Sidebar -->
			<section class="box">
				<header>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Endereço</h3>
				</header>
				<?php echo $this->loadTemplate('address'); ?>
			</section>
			<?php if ($this->contact->misc && $this->params->get('show_misc')) : ?>
				<section class="box">
					<header>
						<h3><i class="fa fa-plane" aria-hidden="true"></i> Pousada</h3>
					</header>

					<?php if ($this->contact->misc && $this->params->get('show_misc')) : ?>
						<?php echo $this->contact->misc; ?>
					<?php endif; ?>
				</section>
			<?php endif; ?>
		</div>
	</div>
</div>
