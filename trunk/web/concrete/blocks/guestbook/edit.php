<? defined('C5_EXECUTE') or die(_("Access Denied.")); ?> 
<?=t('Title')?><br />
<input type="text" name="title" value="<?=$title?>" /><br /><br />

<?=t('Comments Require Moderator Approval?')?><br/>
<input type="radio" name="requireApproval" value="1" <?=($requireApproval?"checked=\"checked\"":"") ?> /> <?=t('Yes')?><br />
<input type="radio" name="requireApproval" value="0" <?=($requireApproval?"":"checked=\"checked\"") ?> /> <?=t('No')?><br /><br />

<?=t('Posting Comments is Enabled?')?><br/>
<input type="radio" name="displayGuestBookForm" value="1" <?=(displayGuestBookForm?"checked=\"checked\"":"") ?> /> <?=t('Yes')?><br />
<input type="radio" name="displayGuestBookForm" value="0" <?=(displayGuestBookForm?"":"checked=\"checked\"") ?> /> <?=t('No')?><br /><br />