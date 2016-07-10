<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
	<?php if (($this->params->get('address_check') > 0) &&
		($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>

		<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
			<dd>
				<span class="contact-street" itemprop="streetAddress">
					<?php echo nl2br($this->contact->address) . '<br />'; ?>
				</span>
			</dd>
		<?php endif; ?>

		<dd>
			<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
				<span class="contact-suburb" itemprop="addressLocality">
					<?php echo $this->contact->suburb . ' - '; ?>
				</span>
			<?php endif; ?>
			<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
				<span class="contact-state" itemprop="addressRegion">
					<?php echo $this->contact->state . '<br />'; ?>
				</span>
			<?php endif; ?>
		</dd>

		<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
			<dd>
				<span class="contact-postcode" itemprop="postalCode">
					CEP: <?php echo $this->contact->postcode . '<br />'; ?>
				</span>
			</dd>
		<?php endif; ?>
		<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
		<dd>
			<span class="contact-country" itemprop="addressCountry">
				<?php echo $this->contact->country . '<br />'; ?>
			</span>
		</dd>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
		<dt>
			<span class="<?php echo $this->params->get('marker_class'); ?>" itemprop="email">
				<?php echo nl2br($this->params->get('marker_email')); ?>
			</span>
		</dt>
		<dd>
			<span class="contact-emailto">
				<?php echo $this->contact->email_to; ?>
			</span>
		</dd>
	<?php endif; ?>

	<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
		<dd>
			<span class="contact-telephone" itemprop="telephone">
				<i class="fa fa-phone" aria-hidden="true"></i> <?php echo nl2br($this->contact->telephone); ?>
			</span>
		</dd>
	<?php endif; ?>
	<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
		<dd>
			<span class="contact-fax" itemprop="faxNumber">
				<i class="fa fa-fax" aria-hidden="true"></i> <?php echo nl2br($this->contact->fax); ?>
			</span>
		</dd>
	<?php endif; ?>
	<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
		<dd>
			<span class="contact-mobile" itemprop="telephone">
				<i class="fa fa-mobile" aria-hidden="true"></i> <?php echo nl2br($this->contact->mobile); ?>
			</span>
		</dd>
	<?php endif; ?>
	<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
		<dd>
			<span class="contact-webpage">
				<i class="fa fa-desktop" aria-hidden="true"></i> <a href="<?php echo $this->contact->webpage; ?>" target="_blank" itemprop="url">
				<?php echo JStringPunycode::urlToUTF8($this->contact->webpage); ?></a>
			</span>
		</dd>
	<?php endif; ?>
</dl>
