<?php
/**
 * @file
 * Default theme implementation for the branding region that
 * includes the "main menu block".
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top
 *     class.
 * - $region: The name of the region variable as defined in the theme's .info
 *   file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 */
?>
<?php if ($content): ?>
  <div<?php print $attributes; ?>>
    <h2 class="site-brand"><a href="/" title="<?php print t('Copyright - Home'); ?>"><img src="/sites/all/themes/pul_base/assets/public/images/copyright-logo.png" alt="<?php print t('Home'); ?>" /><span class="site-name">Copyright</span></a></h2>
    <?php print $content; ?>
  </div>
<?php endif; ?>