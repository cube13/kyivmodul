<?php exit; ?>
1547207745
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_moderator_cache m) LEFT JOIN phpbb_users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
976
a:4:{i:0;a:9:{s:8:"forum_id";s:1:"0";s:7:"user_id";s:1:"2";s:8:"username";s:7:"Cube_13";s:8:"group_id";s:1:"0";s:10:"group_name";s:0:"";s:16:"display_on_index";s:1:"1";s:11:"user_colour";s:6:"AA0000";s:12:"group_colour";N;s:10:"group_type";N;}i:1;a:9:{s:8:"forum_id";s:1:"0";s:7:"user_id";s:2:"65";s:8:"username";s:21:"Юрій Шевчук";s:8:"group_id";s:1:"0";s:10:"group_name";s:0:"";s:16:"display_on_index";s:1:"1";s:11:"user_colour";s:6:"AA0000";s:12:"group_colour";N;s:10:"group_type";N;}i:2;a:9:{s:8:"forum_id";s:2:"19";s:7:"user_id";s:5:"16325";s:8:"username";s:3:"Wx.";s:8:"group_id";s:1:"0";s:10:"group_name";s:0:"";s:16:"display_on_index";s:1:"1";s:11:"user_colour";s:6:"AA0000";s:12:"group_colour";N;s:10:"group_type";N;}i:3;a:9:{s:8:"forum_id";s:2:"20";s:7:"user_id";s:5:"16325";s:8:"username";s:3:"Wx.";s:8:"group_id";s:1:"0";s:10:"group_name";s:0:"";s:16:"display_on_index";s:1:"1";s:11:"user_colour";s:6:"AA0000";s:12:"group_colour";N;s:10:"group_type";N;}}