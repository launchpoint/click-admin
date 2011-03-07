<?

if ($current_user->has_access('admin'))
{
  $links = array(
    array('href'=>admin_url(), 'label'=>'Admin')
  );
}
