Changes made to hero files:

1) Backup files created:
   - hero.php.bak (full backup)
   - hero.css.bak (backup placeholder)

2) Moved dynamic content into PHP variables at top of `hero.php`:
   - $leftText (long typed paragraph)
   - $rightText (short typed paragraph)
   - $gridItems (array of grid cards with image, href, label, price)

3) Updated client-side JS to get typed text via PHP JSON encoding:
   - const leftText = <?php echo json_encode($leftText); ?>;
   - const rightText = <?php echo json_encode($rightText); ?>;

4) Replaced hard-coded Section 3 grid with a PHP loop that renders each card from $gridItems.

5) Kept CSS changes in `hero.css` (grid/card styling). If you want, I can also move prices into PHP variables inside CSS or add server-side templating.

How to revert:
- Restore `hero.php` from `hero.php.bak` and `hero.css` from `hero.css.bak`.

Next recommended actions:
- (Optional) Replace inline image filenames with full paths or CMS-managed URLs.
- (Optional) Commit changes to Git or create a patch file for versioning.

If you'd like, I can now:
- Commit these changes into a Git repo (if one exists), or
- Create a downloadable patch file containing the diffs.
