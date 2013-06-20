<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'default',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'system' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core - required',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6055',
        'project' => '',
        'version' => '6.25',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to structure site pages in a hierarchy or outline.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.25',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.25',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'poll' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '6.25',
          'package' => 'Core - optional',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.25',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Handles the filtering of content in preparation for display.',
          'package' => 'Core - required',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Enables threaded discussions about general topics.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.25',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows the user to change the color scheme of certain themes.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.25',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update status',
          'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
          'version' => '6.25',
          'package' => 'Core - optional',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.25',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'upload' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
        'info' => 
        array (
          'name' => 'Upload',
          'description' => 'Allows users to upload and attach files to content.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'cookie_cache_bypass' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/cookie_cache_bypass/cookie_cache_bypass.module',
        'basename' => 'cookie_cache_bypass.module',
        'name' => 'cookie_cache_bypass',
        'info' => 
        array (
          'name' => 'Cookie cache bypass',
          'description' => 'Sets a cookie on form submission directing a reverse proxy to temporarily not serve cached pages for an anonymous user that just submitted content.',
          'core' => '6.x',
          'package' => 'Pressflow',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core - required',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent posts for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'path_alias_cache' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/path_alias_cache/path_alias_cache.module',
        'basename' => 'path_alias_cache.module',
        'name' => 'path_alias_cache',
        'info' => 
        array (
          'name' => 'Path alias cache',
          'description' => 'A path alias implementation which adds a cache to the core version.',
          'core' => '6.x',
          'package' => 'Pressflow',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'blogapi' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
        'info' => 
        array (
          'name' => 'Blog API',
          'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.25',
      ),
      'ping' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
        'info' => 
        array (
          'name' => 'Ping',
          'description' => 'Alerts other sites when your site has been updated.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.25',
      ),
      'throttle' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
        'info' => 
        array (
          'name' => 'Throttle',
          'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => '',
        'version' => '6.25',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => '',
        'version' => '6.25',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core - required',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core - optional',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'SimpleTest',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Development',
          'core' => '6.x',
          'php' => '5 ; Drupal 6',
          'files' => 
          array (
            0 => 'simpletest.module',
            1 => 'simpletest.pages.inc',
            2 => 'simpletest.install',
            3 => 'simpletest.test',
            4 => 'drupal_web_test_case.php',
            5 => 'tests/block.test',
          ),
          'version' => '6.x-2.10',
          'project' => 'simpletest',
          'datestamp' => '1262212859',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '6200',
        'project' => 'simpletest',
        'version' => '6.x-2.10',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the boxes that are displayed around the main content.',
          'package' => 'Core - required',
          'version' => '6.25',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.25',
      ),
      'image_captcha' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/captcha/image_captcha/image_captcha.module',
        'basename' => 'image_captcha.module',
        'name' => 'image_captcha',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'captcha',
          'datestamp' => '1297123619',
          'php' => '4.3.5',
        ),
        'schema_version' => '6203',
        'project' => 'captcha',
        'version' => '6.x-2.4',
      ),
      'captcha' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/captcha/captcha.module',
        'basename' => 'captcha.module',
        'name' => 'captcha',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'captcha',
          'datestamp' => '1297123619',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6203',
        'project' => 'captcha',
        'version' => '6.x-2.4',
      ),
      'date' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Defines CCK date/time fields and widgets.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date_api',
            2 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_repeat' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_php4' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_php4/date_php4.module',
        'basename' => 'date_php4.module',
        'name' => 'date_php4',
        'info' => 
        array (
          'name' => 'Date PHP4',
          'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_popup' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_tools' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_timezone' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_timezone/date_timezone.module',
        'basename' => 'date_timezone.module',
        'name' => 'date_timezone',
        'info' => 
        array (
          'name' => 'Date Timezone',
          'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => '5200',
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_locale' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_locale/date_locale.module',
        'basename' => 'date_locale.module',
        'name' => 'date_locale',
        'info' => 
        array (
          'name' => 'Date Locale',
          'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'locale',
          ),
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'date_api' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/date/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'date',
          'datestamp' => '1326285938',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'project' => 'date',
        'version' => '6.x-2.8',
      ),
      'notifications_tags' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications_tags/notifications_tags.module',
        'basename' => 'notifications_tags.module',
        'name' => 'notifications_tags',
        'info' => 
        array (
          'name' => 'Taxonomy Notifications',
          'description' => 'Allows users to subscribe to taxonomy terms.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications_content',
            1 => 'taxonomy',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'notifications_lite' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications_lite/notifications_lite.module',
        'basename' => 'notifications_lite.module',
        'name' => 'notifications_lite',
        'info' => 
        array (
          'name' => 'Notifications Lite',
          'description' => 'Extra Simple Notifications API. Enable only when required by other modules.',
          'package' => 'Notifications',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'notifications_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications_ui/notifications_ui.module',
        'basename' => 'notifications_ui.module',
        'name' => 'notifications_ui',
        'info' => 
        array (
          'name' => 'Notifications UI',
          'description' => 'Provides an UI to notifications',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'notifications_content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications_content/notifications_content.module',
        'basename' => 'notifications_content.module',
        'name' => 'notifications_content',
        'info' => 
        array (
          'name' => 'Content Notifications',
          'description' => 'Allows users to subscribe to content related events.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'notifications_autosubscribe' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications_autosubscribe/notifications_autosubscribe.module',
        'basename' => 'notifications_autosubscribe.module',
        'name' => 'notifications_autosubscribe',
        'info' => 
        array (
          'name' => 'Notifications Autosubscribe',
          'description' => 'Provides automatic notifications.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
            1 => 'notifications_content',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'notifications_views' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications_views/notifications_views.module',
        'basename' => 'notifications_views.module',
        'name' => 'notifications_views',
        'info' => 
        array (
          'name' => 'Notifications Views',
          'description' => 'Views integration for Notifications.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'notifications' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/notifications/notifications.module',
        'basename' => 'notifications.module',
        'name' => 'notifications',
        'info' => 
        array (
          'name' => 'Notifications',
          'description' => 'The basic notifications framework',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'token',
          ),
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
        ),
        'schema_version' => '6004',
        'project' => 'notifications',
        'version' => '6.x-2.3',
      ),
      'auto_nodetitle' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/auto_nodetitle/auto_nodetitle.module',
        'basename' => 'auto_nodetitle.module',
        'name' => 'auto_nodetitle',
        'info' => 
        array (
          'name' => 'Automatic Nodetitles',
          'description' => 'Allows hiding of the content title field and automatic title creation.',
          'core' => '6.x',
          'version' => '6.x-1.2',
          'project' => 'auto_nodetitle',
          'datestamp' => '1249042505',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'project' => 'auto_nodetitle',
        'version' => '6.x-1.2',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '6.x',
          'version' => '6.x-2.5',
          'project' => 'backup_migrate',
          'datestamp' => '1330970437',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '2006',
        'project' => 'backup_migrate',
        'version' => '6.x-2.5',
      ),
      'views_export' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'name' => 'Views exporter',
          'description' => 'Allows exporting multiple views at once.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '6.x-2.16',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6013',
        'project' => 'views',
        'version' => '6.x-2.16',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '6.x-2.16',
      ),
      'clock' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/clock/clock.module',
        'basename' => 'clock.module',
        'name' => 'clock',
        'info' => 
        array (
          'name' => 'Clock',
          'description' => 'Provides a block displaying the time of a selected time zone.',
          'core' => '6.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date_timezone',
          ),
          'version' => '6.x-1.6',
          'project' => 'clock',
          'datestamp' => '1297169796',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'clock',
        'version' => '6.x-1.6',
      ),
      'webform' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '6.x',
          'package' => 'Webform',
          'php' => '5.1',
          'version' => '6.x-3.17',
          'project' => 'webform',
          'datestamp' => '1331149550',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '6331',
        'project' => 'webform',
        'version' => '6.x-3.17',
      ),
      'imagecache_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/imagecache/imagecache_ui.module',
        'basename' => 'imagecache_ui.module',
        'name' => 'imagecache_ui',
        'info' => 
        array (
          'name' => 'ImageCache UI',
          'description' => 'ImageCache User Interface.',
          'dependencies' => 
          array (
            0 => 'imagecache',
            1 => 'imageapi',
          ),
          'package' => 'ImageCache',
          'core' => '6.x',
          'version' => '6.x-2.0-beta12',
          'project' => 'imagecache',
          'datestamp' => '1305566515',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'imagecache',
        'version' => '6.x-2.0-beta12',
      ),
      'imagecache' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/imagecache/imagecache.module',
        'basename' => 'imagecache.module',
        'name' => 'imagecache',
        'info' => 
        array (
          'name' => 'ImageCache',
          'description' => 'Dynamic image manipulator and cache.',
          'package' => 'ImageCache',
          'dependencies' => 
          array (
            0 => 'imageapi',
          ),
          'core' => '6.x',
          'version' => '6.x-2.0-beta12',
          'project' => 'imagecache',
          'datestamp' => '1305566515',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'imagecache',
        'version' => '6.x-2.0-beta12',
      ),
      'themekey_debug' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/themekey/themekey_debug.module',
        'basename' => 'themekey_debug.module',
        'name' => 'themekey_debug',
        'info' => 
        array (
          'name' => 'ThemeKey Debug',
          'description' => 'Debug ThemeKey',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'themekey',
          ),
          'package' => 'ThemeKey',
          'version' => '6.x-3.2',
          'project' => 'themekey',
          'datestamp' => '1294948593',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '6.x-3.2',
      ),
      'themekey' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/themekey/themekey.module',
        'basename' => 'themekey.module',
        'name' => 'themekey',
        'info' => 
        array (
          'name' => 'ThemeKey',
          'description' => 'Map themes to Drupal paths or object properties.',
          'core' => '6.x',
          'package' => 'ThemeKey',
          'version' => '6.x-3.2',
          'project' => 'themekey',
          'datestamp' => '1294948593',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6301',
        'project' => 'themekey',
        'version' => '6.x-3.2',
      ),
      'themekey_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/themekey/themekey_ui.module',
        'basename' => 'themekey_ui.module',
        'name' => 'themekey_ui',
        'info' => 
        array (
          'name' => 'ThemeKey UI',
          'description' => 'Integrates ThemeKey with Drupal administration forms.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'themekey',
          ),
          'package' => 'ThemeKey',
          'version' => '6.x-3.2',
          'project' => 'themekey',
          'datestamp' => '1294948593',
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'themekey',
        'version' => '6.x-3.2',
      ),
      'themekey_features' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/themekey/themekey_features.module',
        'basename' => 'themekey_features.module',
        'name' => 'themekey_features',
        'info' => 
        array (
          'name' => 'ThemeKey Features (Experimental!)',
          'description' => 'Integrates ThemeKey with Features. Warning! Don\'t use in production! Highly Experimental!',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'themekey',
            1 => 'features',
          ),
          'package' => 'ThemeKey',
          'version' => '6.x-3.2',
          'project' => 'themekey',
          'datestamp' => '1294948593',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '6.x-3.2',
      ),
      'languageicons' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/languageicons/languageicons.module',
        'basename' => 'languageicons.module',
        'name' => 'languageicons',
        'info' => 
        array (
          'name' => 'Language icons',
          'description' => 'Adds icons to language links.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'languageicons',
          'datestamp' => '1331734844',
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'languageicons',
        'version' => '6.x-2.1',
      ),
      'recaptcha_mailhide' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/recaptcha/recaptcha_mailhide.module',
        'basename' => 'recaptcha_mailhide.module',
        'name' => 'recaptcha_mailhide',
        'info' => 
        array (
          'name' => 'reCAPTCHA Mailhide',
          'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
          'package' => 'Spam control',
          'core' => '6.x',
          'version' => '6.x-1.7',
          'project' => 'recaptcha',
          'datestamp' => '1304527316',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '6.x-1.7',
      ),
      'recaptcha' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/recaptcha/recaptcha.module',
        'basename' => 'recaptcha.module',
        'name' => 'recaptcha',
        'info' => 
        array (
          'name' => 'reCAPTCHA',
          'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'package' => 'Spam control',
          'core' => '6.x',
          'version' => '6.x-1.7',
          'project' => 'recaptcha',
          'datestamp' => '1304527316',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '6.x-1.7',
      ),
      'imagefield' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/imagefield/imagefield.module',
        'basename' => 'imagefield.module',
        'name' => 'imagefield',
        'info' => 
        array (
          'name' => 'ImageField',
          'description' => 'Defines an image field type.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'filefield',
          ),
          'package' => 'CCK',
          'version' => '6.x-3.10',
          'project' => 'imagefield',
          'datestamp' => '1303971115',
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'project' => 'imagefield',
        'version' => '6.x-3.10',
      ),
      'httpbl' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/httpbl/httpbl.module',
        'basename' => 'httpbl.module',
        'name' => 'httpbl',
        'info' => 
        array (
          'name' => 'http:BL',
          'description' => 'Implementation of http:BL for Drupal.',
          'package' => 'Spam control',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'httpbl',
          'datestamp' => '1299758791',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'httpbl',
        'version' => '6.x-1.x-dev',
      ),
      'nodereference' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/nodereference/nodereference.module',
        'basename' => 'nodereference.module',
        'name' => 'nodereference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'content_copy' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/content_copy/content_copy.module',
        'basename' => 'content_copy.module',
        'name' => 'content_copy',
        'info' => 
        array (
          'name' => 'Content Copy',
          'description' => 'Enables ability to import/export field definitions.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'optionwidgets' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/optionwidgets/optionwidgets.module',
        'basename' => 'optionwidgets.module',
        'name' => 'optionwidgets',
        'info' => 
        array (
          'name' => 'Option Widgets',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'number' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'fieldgroup' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/fieldgroup/fieldgroup.module',
        'basename' => 'fieldgroup.module',
        'name' => 'fieldgroup',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Create display groups for CCK fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'content_permissions' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/content_permissions/content_permissions.module',
        'basename' => 'content_permissions.module',
        'name' => 'content_permissions',
        'info' => 
        array (
          'name' => 'Content Permissions',
          'description' => 'Set field-level permissions for CCK fields.',
          'package' => 'CCK',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'userreference' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/modules/userreference/userreference.module',
        'basename' => 'userreference.module',
        'name' => 'userreference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/cck/content.module',
        'basename' => 'content.module',
        'name' => 'content',
        'info' => 
        array (
          'name' => 'Content',
          'description' => 'Allows administrators to define new content types.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6010',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'jquery_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/jquery_ui/jquery_ui.module',
        'basename' => 'jquery_ui.module',
        'name' => 'jquery_ui',
        'info' => 
        array (
          'name' => 'jQuery UI',
          'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-1.5',
          'project' => 'jquery_ui',
          'datestamp' => '1308323216',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'jquery_ui',
        'version' => '6.x-1.5',
      ),
      'views_slideshow_singleframe' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/views_slideshow/contrib/views_slideshow_singleframe/views_slideshow_singleframe.module',
        'basename' => 'views_slideshow_singleframe.module',
        'name' => 'views_slideshow_singleframe',
        'info' => 
        array (
          'name' => 'Views Slideshow: SingleFrame',
          'description' => 'Adds a Single Frame slideshow mode to Views Slideshows.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'views_slideshow',
          'datestamp' => '1279683019',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '6.x-2.3',
      ),
      'views_slideshow_thumbnailhover' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/views_slideshow/contrib/views_slideshow_thumbnailhover/views_slideshow_thumbnailhover.module',
        'basename' => 'views_slideshow_thumbnailhover.module',
        'name' => 'views_slideshow_thumbnailhover',
        'info' => 
        array (
          'name' => 'Views Slideshow: ThumbnailHover',
          'description' => 'Adds a Thumbnail Hover slideshow mode to Views Slideshows.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'views_slideshow',
          'datestamp' => '1279683019',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '6.x-2.3',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'views_slideshow',
          'datestamp' => '1279683019',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'views_slideshow',
        'version' => '6.x-2.3',
      ),
      'skinr' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/skinr/skinr.module',
        'basename' => 'skinr.module',
        'name' => 'skinr',
        'info' => 
        array (
          'name' => 'Skinr',
          'description' => 'Provides a way to define and/or skin bits of Drupal output from the UI.',
          'core' => '6.x',
          'version' => '6.x-1.6',
          'project' => 'skinr',
          'datestamp' => '1289424665',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'project' => 'skinr',
        'version' => '6.x-1.6',
      ),
      'linkimagefield' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/linkimagefield/linkimagefield.module',
        'basename' => 'linkimagefield.module',
        'name' => 'linkimagefield',
        'info' => 
        array (
          'name' => 'LinkImage',
          'description' => 'Defines an link image field type.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'filefield',
            2 => 'imagefield',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-1.0-beta2',
          'project' => 'linkimagefield',
          'datestamp' => '1252089639',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'linkimagefield',
        'version' => '6.x-1.0-beta2',
      ),
      'filefield_meta' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/filefield/filefield_meta/filefield_meta.module',
        'basename' => 'filefield_meta.module',
        'name' => 'filefield_meta',
        'info' => 
        array (
          'name' => 'FileField Meta',
          'description' => 'Add metadata gathering and storage to FileField.',
          'dependencies' => 
          array (
            0 => 'filefield',
            1 => 'getid3',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.10',
          'project' => 'filefield',
          'datestamp' => '1303970816',
        ),
        'schema_version' => '6100',
        'project' => 'filefield',
        'version' => '6.x-3.10',
      ),
      'filefield' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/filefield/filefield.module',
        'basename' => 'filefield.module',
        'name' => 'filefield',
        'info' => 
        array (
          'name' => 'FileField',
          'description' => 'Defines a file field type.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.10',
          'project' => 'filefield',
          'datestamp' => '1303970816',
        ),
        'schema_version' => '6104',
        'project' => 'filefield',
        'version' => '6.x-3.10',
      ),
      'messaging_debug' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_debug/messaging_debug.module',
        'basename' => 'messaging_debug.module',
        'name' => 'messaging_debug',
        'info' => 
        array (
          'name' => 'Messaging debug',
          'description' => 'Debugging and development utilities for messaging package.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_mail' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_mail/messaging_mail.module',
        'basename' => 'messaging_mail.module',
        'name' => 'messaging_mail',
        'info' => 
        array (
          'name' => 'Simple Mail',
          'description' => 'Mail Sending Method: Integration with Drupal mail API',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_privatemsg' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_privatemsg/messaging_privatemsg.module',
        'basename' => 'messaging_privatemsg.module',
        'name' => 'messaging_privatemsg',
        'info' => 
        array (
          'name' => 'Messaging Privatemsg',
          'description' => 'Sending Method: Integration with Privatemsg (Beta)',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'privatemsg',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_xmpp' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_xmpp/messaging_xmpp.module',
        'basename' => 'messaging_xmpp.module',
        'name' => 'messaging_xmpp',
        'info' => 
        array (
          'name' => 'Messaging XMPP',
          'description' => 'XMPP Sending Method: Integration with XMPP Framework',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'xmppframework',
            2 => 'xmpp_user',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_mime_mail' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_mime_mail/messaging_mime_mail.module',
        'basename' => 'messaging_mime_mail.module',
        'name' => 'messaging_mime_mail',
        'info' => 
        array (
          'name' => 'Messaging Mime Mail',
          'description' => 'Mail Sending Method: Integration with Mime Mail module (Beta)',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'mimemail',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_phpmailer' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_phpmailer/messaging_phpmailer.module',
        'basename' => 'messaging_phpmailer.module',
        'name' => 'messaging_phpmailer',
        'info' => 
        array (
          'name' => 'Messaging PHPMailer',
          'description' => 'Mail Sending Method: Integration with PHPMailer for HTML Mail',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_sms' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_sms/messaging_sms.module',
        'basename' => 'messaging_sms.module',
        'name' => 'messaging_sms',
        'info' => 
        array (
          'name' => 'SMS Messaging',
          'description' => 'Sending Method: SMS',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'sms',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_simple' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_simple/messaging_simple.module',
        'basename' => 'messaging_simple.module',
        'name' => 'messaging_simple',
        'info' => 
        array (
          'name' => 'Simple messaging',
          'description' => 'Sending Method: Show messages on user\'s page',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging_twitter' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging_twitter/messaging_twitter.module',
        'basename' => 'messaging_twitter.module',
        'name' => 'messaging_twitter',
        'info' => 
        array (
          'name' => 'Twitter Messaging',
          'description' => 'Sending method for messaging that uses Twitter',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'twitter',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'messaging' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/messaging/messaging.module',
        'basename' => 'messaging.module',
        'name' => 'messaging',
        'info' => 
        array (
          'name' => 'Messaging',
          'description' => 'Messaging system. This is the base module for the Messaging Framework',
          'package' => 'Messaging',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => 'messaging',
        'version' => '6.x-2.4',
      ),
      'content_profile_registration' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/content_profile/modules/content_profile_registration.module',
        'basename' => 'content_profile_registration.module',
        'name' => 'content_profile_registration',
        'info' => 
        array (
          'name' => 'Content Profile User Registration',
          'description' => 'Enable content profile features during user registration',
          'package' => 'Content Profile',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content_profile',
          ),
          'version' => '6.x-1.0',
          'project' => 'content_profile',
          'datestamp' => '1270662007',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'content_profile',
        'version' => '6.x-1.0',
      ),
      'content_profile_tokens' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/content_profile/modules/content_profile_tokens.module',
        'basename' => 'content_profile_tokens.module',
        'name' => 'content_profile_tokens',
        'info' => 
        array (
          'name' => 'Content Profile Tokens',
          'description' => 'Add user tokens for content profiles.',
          'package' => 'Content Profile',
          'dependencies' => 
          array (
            0 => 'content_profile',
            1 => 'token',
            2 => 'content',
          ),
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'content_profile',
          'datestamp' => '1270662007',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'content_profile',
        'version' => '6.x-1.0',
      ),
      'content_profile' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/content_profile/content_profile.module',
        'basename' => 'content_profile.module',
        'name' => 'content_profile',
        'info' => 
        array (
          'name' => 'Content Profile',
          'description' => 'Use content types for user profiles.',
          'package' => 'Content Profile',
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'content_profile',
          'datestamp' => '1270662007',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6004',
        'project' => 'content_profile',
        'version' => '6.x-1.0',
      ),
      'adminrole' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/adminrole/adminrole.module',
        'basename' => 'adminrole.module',
        'name' => 'adminrole',
        'info' => 
        array (
          'name' => 'Admin Role',
          'description' => 'Automatically assign all permissions to an admin role.',
          'package' => 'Administration',
          'core' => '6.x',
          'version' => '6.x-1.3',
          'project' => 'adminrole',
          'datestamp' => '1281809488',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '5100',
        'project' => 'adminrole',
        'version' => '6.x-1.3',
      ),
      'token_test' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '6.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'token_actions' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/token/token_actions.module',
        'basename' => 'token_actions.module',
        'name' => 'token_actions',
        'info' => 
        array (
          'name' => 'Token actions',
          'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'tokenSTARTER' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/token/tokenSTARTER.module',
        'basename' => 'tokenSTARTER.module',
        'name' => 'tokenSTARTER',
        'info' => 
        array (
          'name' => 'TokenSTARTER',
          'description' => 'Provides additional tokens and a base on which to build your own tokens.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '6.x',
          'recommends' => 
          array (
            0 => 'path_redirect',
          ),
          'version' => '6.x-1.6',
          'project' => 'pathauto',
          'datestamp' => '1320076535',
          'php' => '4.3.5',
        ),
        'schema_version' => '7',
        'project' => 'pathauto',
        'version' => '6.x-1.6',
      ),
      'path_redirect_generate' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/path_redirect/generate/path_redirect_generate.module',
        'basename' => 'path_redirect_generate.module',
        'name' => 'path_redirect_generate',
        'info' => 
        array (
          'name' => 'Path redirect generate',
          'description' => 'Bulk create redirects for testing.',
          'package' => 'Development',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'path_redirect',
            1 => 'devel_generate',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'path_redirect',
          'datestamp' => '1291583783',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'path_redirect',
        'version' => '6.x-1.0-rc2',
      ),
      'path_redirect' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/path_redirect/path_redirect.module',
        'basename' => 'path_redirect.module',
        'name' => 'path_redirect',
        'info' => 
        array (
          'name' => 'Path redirect',
          'description' => 'Redirect users from one URL to another.',
          'core' => '6.x',
          'enhances' => 
          array (
            0 => 'pathauto',
          ),
          'suggests' => 
          array (
            0 => 'global_redirect',
          ),
          'recommends' => 
          array (
            0 => 'elements',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'path_redirect',
          'datestamp' => '1291583783',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'project' => 'path_redirect',
        'version' => '6.x-1.0-rc2',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'core' => '6.x',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '6.x',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'views_content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'og_views' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/og/modules/og_views/og_views.module',
        'basename' => 'og_views.module',
        'name' => 'og_views',
        'info' => 
        array (
          'name' => 'Organic groups Views integration',
          'description' => '<strong>Highly recommended.</strong>. Use Views to search and display organic groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'og',
          'datestamp' => '1268751911',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '6.x-2.1',
      ),
      'og_actions' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/og/modules/og_actions/og_actions.module',
        'basename' => 'og_actions.module',
        'name' => 'og_actions',
        'info' => 
        array (
          'name' => 'Organic groups actions',
          'description' => 'Provides actions for use with Organic Groups and Trigger.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'og',
          'datestamp' => '1268751911',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '6.x-2.1',
      ),
      'og_access' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/og/modules/og_access/og_access.module',
        'basename' => 'og_access.module',
        'name' => 'og_access',
        'info' => 
        array (
          'name' => 'Organic groups access control',
          'description' => 'Enable access control for private posts and private groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'og',
          'datestamp' => '1268751911',
          'php' => '4.3.5',
        ),
        'schema_version' => '6201',
        'project' => 'og',
        'version' => '6.x-2.1',
      ),
      'og_notifications' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/og/modules/og_notifications/og_notifications.module',
        'basename' => 'og_notifications.module',
        'name' => 'og_notifications',
        'info' => 
        array (
          'name' => 'Organic Groups Notifications',
          'description' => 'Allows users to receive notifications and subscribe to group content.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'notifications',
            2 => 'notifications_content',
            3 => 'notifications_lite',
            4 => 'messaging',
            5 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'og',
          'datestamp' => '1268751911',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'og',
        'version' => '6.x-2.1',
      ),
      'og' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/og/og.module',
        'basename' => 'og.module',
        'name' => 'og',
        'info' => 
        array (
          'name' => 'Organic groups',
          'description' => 'Enable users to create and manage groups.  OG Views integration module is recommended for best experience.',
          'package' => 'Organic groups',
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'og',
          'datestamp' => '1268751911',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6203',
        'project' => 'og',
        'version' => '6.x-2.1',
      ),
      'poormanscron' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/poormanscron/poormanscron.module',
        'basename' => 'poormanscron.module',
        'name' => 'poormanscron',
        'info' => 
        array (
          'name' => 'Poormanscron',
          'description' => 'Internal scheduler for users without a cron application.',
          'core' => '6.x',
          'version' => '6.x-2.2',
          'project' => 'poormanscron',
          'datestamp' => '1263749708',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6201',
        'project' => 'poormanscron',
        'version' => '6.x-2.2',
      ),
      'page_title' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/page_title/page_title.module',
        'basename' => 'page_title.module',
        'name' => 'page_title',
        'info' => 
        array (
          'name' => 'Page Title',
          'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'page_title',
          'datestamp' => '1259017563',
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'page_title',
        'version' => '6.x-2.3',
      ),
      'i18nblocks' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18nblocks/i18nblocks.module',
        'basename' => 'i18nblocks.module',
        'name' => 'i18nblocks',
        'info' => 
        array (
          'name' => 'Block translation',
          'description' => 'Enables multilingual blocks and block translation.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'i18nstrings',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18ncontent' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18ncontent/i18ncontent.module',
        'basename' => 'i18ncontent.module',
        'name' => 'i18ncontent',
        'info' => 
        array (
          'name' => 'Content type translation',
          'description' => 'Add multilingual options for content and translate related strings: name, description, help text...',
          'dependencies' => 
          array (
            0 => 'i18nstrings',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18nmenu' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18nmenu/i18nmenu.module',
        'basename' => 'i18nmenu.module',
        'name' => 'i18nmenu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18nblocks',
            3 => 'i18nstrings',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18ntaxonomy' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18ntaxonomy/i18ntaxonomy.module',
        'basename' => 'i18ntaxonomy.module',
        'name' => 'i18ntaxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'taxonomy',
            2 => 'i18nstrings',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18n_test' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/tests/i18n_test.module',
        'basename' => 'i18n_test.module',
        'name' => 'i18n_test',
        'info' => 
        array (
          'name' => 'Internationalization tests',
          'description' => 'Helper module for testing i18n (do not enable manually)',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
            2 => 'i18n',
          ),
          'package' => 'Testing',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18nstrings' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18nstrings/i18nstrings.module',
        'basename' => 'i18nstrings.module',
        'name' => 'i18nstrings',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18npoll' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18npoll/i18npoll.module',
        'basename' => 'i18npoll.module',
        'name' => 'i18npoll',
        'info' => 
        array (
          'name' => 'Poll aggregate',
          'description' => 'Aggregates poll results for all translations.',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'poll',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18ncck' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18ncck/i18ncck.module',
        'basename' => 'i18ncck.module',
        'name' => 'i18ncck',
        'info' => 
        array (
          'name' => 'CCK translation',
          'description' => 'Supports translatable custom CCK fields and fieldgroups.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'content',
            2 => 'i18nstrings',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18nprofile' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18nprofile/i18nprofile.module',
        'basename' => 'i18nprofile.module',
        'name' => 'i18nprofile',
        'info' => 
        array (
          'name' => 'Profile translation',
          'description' => 'Enables multilingual profile fields.',
          'dependencies' => 
          array (
            0 => 'profile',
            1 => 'i18nstrings',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => '3',
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18nsync' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18nsync/i18nsync.module',
        'basename' => 'i18nsync.module',
        'name' => 'i18nsync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'i18n' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
          ),
          'package' => 'Multilanguage',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1318336004',
          'php' => '4.3.5',
        ),
        'schema_version' => '10',
        'project' => 'i18n',
        'version' => '6.x-1.10',
      ),
      'seochecklist' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/seo_checklist/seochecklist.module',
        'basename' => 'seochecklist.module',
        'name' => 'seochecklist',
        'info' => 
        array (
          'name' => 'SEO Checklist',
          'description' => 'A Search Engine Optimization checklist for Drupal.',
          'core' => '6.x',
          'recommends' => 
          array (
            0 => 'vertical_tabs',
          ),
          'version' => '6.x-3.0',
          'project' => 'seo_checklist',
          'datestamp' => '1274793907',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6207',
        'project' => 'seo_checklist',
        'version' => '6.x-3.0',
      ),
      'imageapi_gd' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/imageapi/imageapi_gd.module',
        'basename' => 'imageapi_gd.module',
        'name' => 'imageapi_gd',
        'info' => 
        array (
          'name' => 'ImageAPI GD2',
          'description' => 'Uses PHP\'s built-in GD2 image processing support.',
          'package' => 'ImageCache',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'imageapi',
          'datestamp' => '1305563215',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'imageapi',
        'version' => '6.x-1.10',
      ),
      'imageapi' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/imageapi/imageapi.module',
        'basename' => 'imageapi.module',
        'name' => 'imageapi',
        'info' => 
        array (
          'name' => 'ImageAPI',
          'description' => 'ImageAPI supporting multiple toolkits.',
          'package' => 'ImageCache',
          'core' => '6.x',
          'php' => '5.1',
          'version' => '6.x-1.10',
          'project' => 'imageapi',
          'datestamp' => '1305563215',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'imageapi',
        'version' => '6.x-1.10',
      ),
      'imageapi_imagemagick' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/imageapi/imageapi_imagemagick.module',
        'basename' => 'imageapi_imagemagick.module',
        'name' => 'imageapi_imagemagick',
        'info' => 
        array (
          'name' => 'ImageAPI ImageMagick',
          'description' => 'Command Line ImageMagick support.',
          'package' => 'ImageCache',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'imageapi',
          'datestamp' => '1305563215',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'imageapi',
        'version' => '6.x-1.10',
      ),
      'globalredirect' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'dependencies' => 
          array (
            0 => 'path',
          ),
          'core' => '6.x',
          'version' => '6.x-1.2',
          'project' => 'globalredirect',
          'datestamp' => '1229943020',
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'project' => 'globalredirect',
        'version' => '6.x-1.2',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'jquery_ui',
          ),
          'core' => '6.x',
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'panels_mini' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '6.x',
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => '6303',
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'panels_node' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '6.x',
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'panels_export' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/panels/panels_export/panels_export.module',
        'basename' => 'panels_export.module',
        'name' => 'panels_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'panels' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/modules/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '6.x',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => '6311',
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
    ),
    'themes' => 
    array (
      'minnelli' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
        'info' => 
        array (
          'name' => 'Minnelli',
          'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
          'version' => '6.25',
          'core' => '6.x',
          'base theme' => 'garland',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'minnelli.css',
            ),
          ),
        ),
        'project' => '',
        'version' => '6.25',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
          'version' => '6.25',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.25',
      ),
      'bluemarine' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.25',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.25',
      ),
      'pushbutton' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.25',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.25',
      ),
      'marvin' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
        'info' => 
        array (
          'name' => 'Marvin',
          'description' => 'Boxy tabled theme in all grays.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'version' => '6.25',
          'core' => '6.x',
          'base theme' => 'chameleon',
        ),
        'project' => '',
        'version' => '6.25',
      ),
      'chameleon' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
        'info' => 
        array (
          'name' => 'Chameleon',
          'description' => 'Minimalist tabled theme with light colors.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'favicon',
            2 => 'name',
            3 => 'slogan',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
              1 => 'common.css',
            ),
          ),
          'version' => '6.25',
          'core' => '6.x',
        ),
        'project' => '',
        'version' => '6.25',
      ),
      'acquia_prosper' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/themes/acquia_prosper/acquia_prosper.info',
        'basename' => 'acquia_prosper.info',
        'name' => 'Acquia Prosper',
        'info' => 
        array (
          'name' => 'Acquia Prosper',
          'description' => '<a href="http://www.acquia.com">Acquia</a> Prosper is an elegant grid-based <a href="http://www.ubercart.org">Ubercart</a>-ready theme with point-and-click theming and an alternate color scheme. Requires the <a href="http://drupal.org/project/fusion">Fusion Core</a> base theme and the <a href="http://drupal.org/project/skinr">Skinr</a> module. Created by <a href="http://www.topnotchthemes.com">TopNotchThemes</a> and <a href="http://fusiondrupalthemes.com">Fusion Drupal Themes</a>.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/acquia-prosper-style.css',
              1 => 'design_packs/gray/gray.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.corner.js',
            1 => 'js/acquia-prosper-script.js',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
            ),
            'fluid_grid_width' => 'fluid-95',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'options' => 
            array (
              'inherit_skins' => true,
            ),
            'grid12-width' => '; Prosper styles',
            'prosper-general-styles' => 
            array (
              'title' => 'Acquia Prosper - general theme styles',
              'type' => 'radios',
              'description' => 'Acquia Prosper\'s styles for blocks, panels, views, and content types',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Gray rounded title background, plain white block <span class="preview-icon" id="prosper-gray-rounded-plain-skinrpreview"></span></span>',
                  'class' => 'prosper-gray-rounded-plain prosper-rounded-title',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Gray rounded title background, list styling <span class="preview-icon" id="prosper-gray-rounded-style-skinrpreview"></span></span>',
                  'class' => 'prosper-gray-rounded-style prosper-rounded-title',
                ),
                3 => 
                array (
                  'label' => '<span class="preview-text">Rounded corner dark background <span class="preview-icon" id="prosper-grayborder-darkbackground-skinrpreview"></span></span>',
                  'class' => 'prosper-grayborder-darkbackground',
                ),
                4 => 
                array (
                  'label' => '<span class="preview-text">Light gray background and border <span class="preview-icon" id="prosper-lightgraybackground-border-skinrpreview"></span></span>',
                  'class' => 'prosper-lightgraybackground-border',
                ),
                5 => 
                array (
                  'label' => '<span class="preview-text">Medium gray background with bottom border <span class="preview-icon" id="prosper-mediumgraybackground-bottomborder-skinrpreview"></span></span>',
                  'class' => 'prosper-mediumgraybackground-bottomborder',
                ),
                6 => 
                array (
                  'label' => '<span class="preview-text">Gradient background with padding and thick border <span class="preview-icon" id="prosper-gradient-border-skinrpreview"></span></span>',
                  'class' => 'prosper-gradient-border',
                ),
                7 => 
                array (
                  'label' => '<span class="preview-text">Menu list <span class="preview-icon" id="prosper-menu-list-skinrpreview"></span></span>',
                  'class' => 'prosper-menu-list',
                ),
                8 => 
                array (
                  'label' => '<span class="preview-text">Shopping cart - Light background <span class="preview-icon" id="prosper-shoppingcart-light-skinrpreview"></span></span>',
                  'class' => 'prosper-shoppingcart-light',
                ),
                9 => 
                array (
                  'label' => '<span class="preview-text">Shopping cart - Dark background <span class="preview-icon" id="prosper-shoppingcart-dark-skinrpreview"></span></span>',
                  'class' => 'prosper-shoppingcart-dark',
                ),
                10 => 
                array (
                  'label' => '<span class="preview-text">Tabbed block - also set Quicktabs style to Default <span class="preview-icon" id="prosper-quicktabs-skinrpreview"></span></span>',
                  'class' => 'prosper-quicktabs',
                ),
              ),
            ),
            'prosper-comments' => 
            array (
              'title' => 'Acquia Prosper: comment styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'comment_wrapper',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Simple with white background and separators <span class="preview-icon" id="prosper-comments-clean-skinrpreview"></span></span>',
                  'class' => 'prosper-comments-clean',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Speech bubbles with pointed edge <span class="preview-icon" id="prosper-comments-edgy-skinrpreview"></span></span>',
                  'class' => 'prosper-comments-edgy',
                ),
              ),
            ),
            'prosper-common-styles' => 
            array (
              'title' => 'Acquia Prosper - common theme styles',
              'type' => 'checkboxes',
              'description' => 'Acquia Prosper\'s styles for blocks, panels, views, and content types',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Gray border around image <span class="preview-icon" id="prosper-gray-border-image-skinrpreview"></span></span>',
                  'class' => 'prosper-gray-border-image',
                ),
              ),
            ),
          ),
          'version' => '6.x-1.1',
          'project' => 'acquia_prosper',
          'datestamp' => '1284760858',
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'acquia_prosper',
        'version' => '6.x-1.1',
      ),
      'fusion_starter' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/themes/fusion/fusion_starter/fusion_starter.info',
        'basename' => 'fusion_starter.info',
        'name' => 'Fusion Starter',
        'info' => 
        array (
          'name' => 'Fusion Starter',
          'description' => 'Fusion Starter sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-starter-style.css',
            ),
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'options' => 
            array (
              'inherit_skins' => true,
            ),
            'grid12-width' => '',
          ),
          'version' => '6.x-1.1',
          'project' => 'fusion',
          'datestamp' => '1304100144',
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'fusion',
        'version' => '6.x-1.1',
      ),
      'fusion_starter_lite' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/themes/fusion/fusion_starter_lite/fusion_starter_lite.info',
        'basename' => 'fusion_starter_lite.info',
        'name' => 'Fusion Starter Lite',
        'info' => 
        array (
          'name' => 'Fusion Starter Lite',
          'description' => 'Fusion Starter Lite sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-starter-lite-style.css',
            ),
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header' => 'header',
            'content' => 'content',
            'footer' => 'footer',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid12-960',
            'theme_grid_options' => 
            array (
              0 => 'grid12-960',
              1 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '2',
            'sidebar_last_width' => '2',
          ),
          'skinr' => 
          array (
            'grid12-width' => 
            array (
              'title' => 'Width (12 column grid)',
              'type' => 'select',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '1 unit wide (80px/8.33%)',
                  'class' => 'grid12-1',
                ),
                2 => 
                array (
                  'label' => '2 units wide (160px/16.67%)',
                  'class' => 'grid12-2',
                ),
                3 => 
                array (
                  'label' => '3 units wide (240px/25%)',
                  'class' => 'grid12-3',
                ),
                4 => 
                array (
                  'label' => '4 units wide (320px/33.33%)',
                  'class' => 'grid12-4',
                ),
                5 => 
                array (
                  'label' => '5 units wide (400px/41.67%)',
                  'class' => 'grid12-5',
                ),
                6 => 
                array (
                  'label' => '6 units wide (480px/50%)',
                  'class' => 'grid12-6',
                ),
                7 => 
                array (
                  'label' => '7 units wide (560px/58.33%)',
                  'class' => 'grid12-7',
                ),
                8 => 
                array (
                  'label' => '8 units wide (640px/66.67%)',
                  'class' => 'grid12-8',
                ),
                9 => 
                array (
                  'label' => '9 units wide (720px/75%)',
                  'class' => 'grid12-9',
                ),
                10 => 
                array (
                  'label' => '10 units wide (800px/83.33%)',
                  'class' => 'grid12-10',
                ),
                11 => 
                array (
                  'label' => '11 units wide (880px/91.67%)',
                  'class' => 'grid12-11',
                ),
                12 => 
                array (
                  'label' => '12 units wide (960px/100%)',
                  'class' => 'grid12-12',
                ),
              ),
            ),
            'grid-width' => 
            array (
              'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
            ),
            'fusion-alignment' => 
            array (
              'title' => 'Block position',
              'type' => 'select',
              'description' => 'Change the position of this block (default is to float to the left)',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Float block to the right',
                  'class' => 'fusion-right',
                ),
                2 => 
                array (
                  'label' => 'Position block in the center',
                  'class' => 'fusion-center',
                ),
                3 => 
                array (
                  'label' => 'Clear floats (block drops to a new line)',
                  'class' => 'fusion-clear',
                ),
              ),
            ),
          ),
          'version' => '6.x-1.1',
          'project' => 'fusion',
          'datestamp' => '1304100144',
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'fusion',
        'version' => '6.x-1.1',
      ),
      'fusion_core' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/sites/all/themes/fusion/fusion_core/fusion_core.info',
        'basename' => 'fusion_core.info',
        'name' => 'Fusion Core',
        'info' => 
        array (
          'name' => 'Fusion Core',
          'description' => '<a href="http://drupal.org/project/fusion">Fusion Core</a> is the grid-enabled base theme for powerful sub-themes.  With the <a href="http://drupal.org/project/skinr">Skinr</a> module, it enables easy point-and-click theming. By <a href="http://www.topnotchthemes.com">TopNotchThemes</a>',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
              1 => 'css/typography.css',
              2 => 'css/superfish.css',
              3 => 'css/superfish-navbar.css',
              4 => 'css/superfish-vertical.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.bgiframe.min.js',
            1 => 'js/hoverIntent.js',
            2 => 'js/supposition.js',
            3 => 'js/supersubs.js',
            4 => 'js/superfish.js',
            5 => 'js/script.js',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
              2 => 'grid12-960',
              3 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-13',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'grid16-width' => 
            array (
              'title' => 'Width (16 column grid)',
              'type' => 'select',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '1 unit wide (60px/6.25%)',
                  'class' => 'grid16-1',
                ),
                2 => 
                array (
                  'label' => '2 units wide (120px/12.5%)',
                  'class' => 'grid16-2',
                ),
                3 => 
                array (
                  'label' => '3 units wide (180px/18.75%)',
                  'class' => 'grid16-3',
                ),
                4 => 
                array (
                  'label' => '4 units wide (240px/25%)',
                  'class' => 'grid16-4',
                ),
                5 => 
                array (
                  'label' => '5 units wide (300px/31.25%)',
                  'class' => 'grid16-5',
                ),
                6 => 
                array (
                  'label' => '6 units wide (360px/37.5%)',
                  'class' => 'grid16-6',
                ),
                7 => 
                array (
                  'label' => '7 units wide (420px/43.75%)',
                  'class' => 'grid16-7',
                ),
                8 => 
                array (
                  'label' => '8 units wide (480px/50%)',
                  'class' => 'grid16-8',
                ),
                9 => 
                array (
                  'label' => '9 units wide (540px/56.25%)',
                  'class' => 'grid16-9',
                ),
                10 => 
                array (
                  'label' => '10 units wide (600px/62.5%)',
                  'class' => 'grid16-10',
                ),
                11 => 
                array (
                  'label' => '11 units wide (660px/68.75%)',
                  'class' => 'grid16-11',
                ),
                12 => 
                array (
                  'label' => '12 units wide (720px/75%)',
                  'class' => 'grid16-12',
                ),
                13 => 
                array (
                  'label' => '13 units wide (780px/81.25%)',
                  'class' => 'grid16-13',
                ),
                14 => 
                array (
                  'label' => '14 units wide (840px/87.5%)',
                  'class' => 'grid16-14',
                ),
                15 => 
                array (
                  'label' => '15 units wide (900px/93.75%)',
                  'class' => 'grid16-15',
                ),
                16 => 
                array (
                  'label' => '16 units wide (960px/100%)',
                  'class' => 'grid16-16',
                ),
              ),
            ),
            'grid12-width' => 
            array (
              'title' => 'Width (12 column grid)',
              'type' => 'select',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '1 unit wide (80px/8.33%)',
                  'class' => 'grid12-1',
                ),
                2 => 
                array (
                  'label' => '2 units wide (160px/16.67%)',
                  'class' => 'grid12-2',
                ),
                3 => 
                array (
                  'label' => '3 units wide (240px/25%)',
                  'class' => 'grid12-3',
                ),
                4 => 
                array (
                  'label' => '4 units wide (320px/33.33%)',
                  'class' => 'grid12-4',
                ),
                5 => 
                array (
                  'label' => '5 units wide (400px/41.67%)',
                  'class' => 'grid12-5',
                ),
                6 => 
                array (
                  'label' => '6 units wide (480px/50%)',
                  'class' => 'grid12-6',
                ),
                7 => 
                array (
                  'label' => '7 units wide (560px/58.33%)',
                  'class' => 'grid12-7',
                ),
                8 => 
                array (
                  'label' => '8 units wide (640px/66.67%)',
                  'class' => 'grid12-8',
                ),
                9 => 
                array (
                  'label' => '9 units wide (720px/75%)',
                  'class' => 'grid12-9',
                ),
                10 => 
                array (
                  'label' => '10 units wide (800px/83.33%)',
                  'class' => 'grid12-10',
                ),
                11 => 
                array (
                  'label' => '11 units wide (880px/91.67%)',
                  'class' => 'grid12-11',
                ),
                12 => 
                array (
                  'label' => '12 units wide (960px/100%)',
                  'class' => 'grid12-12',
                ),
              ),
            ),
            'grid-width' => 
            array (
              'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
            ),
            'fusion-alignment' => 
            array (
              'title' => 'Block position',
              'type' => 'select',
              'description' => 'Change the position of this block (default is to float to the left)',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Float block to the right',
                  'class' => 'fusion-right',
                ),
                2 => 
                array (
                  'label' => 'Position block in the center',
                  'class' => 'fusion-center',
                ),
                3 => 
                array (
                  'label' => 'Clear floats (block drops to a new line)',
                  'class' => 'fusion-clear',
                ),
              ),
            ),
            'fusion-content-alignment' => 
            array (
              'title' => 'Content alignment',
              'type' => 'select',
              'description' => 'Default is left aligned content',
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Center align content within its container',
                  'class' => 'fusion-center-content',
                ),
                2 => 
                array (
                  'label' => 'Right align content within its container',
                  'class' => 'fusion-right-content',
                ),
              ),
            ),
            'fusion-general-styles' => 
            array (
              'title' => 'General styles',
              'type' => 'checkboxes',
              'description' => 'These are some generally useful options for blocks',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Text: large, bold callout style <span class="preview-icon" id="fusion-general-styles-fusion-callout"></span></span>',
                  'class' => 'fusion-callout',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Links: bold all links <span class="preview-icon" id="fusion-general-styles-bold-links"></span></span>',
                  'class' => 'fusion-bold-links',
                ),
                3 => 
                array (
                  'label' => '<span class="preview-text">Padding: add 30px extra padding inside block <span class="preview-icon" id="fusion-general-styles-fusion-padding"></span></span>',
                  'class' => 'fusion-padding',
                ),
                4 => 
                array (
                  'label' => '<span class="preview-text">Border: add 1px border and 10px padding <span class="preview-icon" id="fusion-general-styles-fusion-border"></span></span>',
                  'class' => 'fusion-border',
                ),
              ),
            ),
            'fusion-equal-heights' => 
            array (
              'title' => 'Equal heights',
              'type' => 'checkboxes',
              'description' => 'Make blocks in a region the same height',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'scripts' => 
              array (
                0 => 'js/jquery.equalheights.js',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Equal heights: equalize the heights of blocks with this style in the same region <span class="preview-icon" id="fusion-general-styles-equal-heights"></span></span>',
                  'class' => 'equal-heights',
                ),
              ),
            ),
            'fusion-multicol' => 
            array (
              'title' => 'List columns',
              'type' => 'select',
              'description' => 'Put items in lists (menus, list views, etc.) in multiple columns',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '2-column list/menu (50%/50%)',
                  'class' => 'fusion-2-col-list clearfix',
                ),
                2 => 
                array (
                  'label' => '3-column list/menu (33%/33%/33%)',
                  'class' => 'fusion-3-col-list clearfix',
                ),
              ),
            ),
            'fusion-menu' => 
            array (
              'title' => 'Menu layout',
              'type' => 'radios',
              'description' => 'Different layouts and alignment options for your menus',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Single line menu with separators <span class="preview-icon" id="fusion-menu-fusion-inline-menu"></span></span>',
                  'class' => 'fusion-inline-menu',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Multi-column menu with bold headers (set menu items to Expanded) <span class="preview-icon" id="fusion-menu-fusion-multicol-menu"></span></span>',
                  'class' => 'fusion-multicol-menu clearfix',
                ),
              ),
            ),
            'fusion-list-styles' => 
            array (
              'title' => 'List/menu styles',
              'type' => 'checkboxes',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Bottom border (no bullets) <span class="preview-icon" id="list-styles-bottom-border"></span></span>',
                  'class' => 'fusion-list-bottom-border',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Extra vertical spacing (no bullets) <span class="preview-icon" id="list-styles-extra-vertical-spacing"></span></span>',
                  'class' => 'fusion-list-vertical-spacing',
                ),
              ),
            ),
            'fusion-superfish' => 
            array (
              'title' => 'Superfish menu styles',
              'type' => 'radios',
              'description' => 'Superfish dropdown menus (must also set menu items to Expanded)',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Vertical menu (for sidebar blocks) <span class="preview-icon" id="fusion-superfish-superfish-vertical"></span></span>',
                  'class' => 'superfish superfish-vertical',
                ),
              ),
            ),
            'fusion-float-imagefield' => 
            array (
              'title' => 'Image floating styles',
              'type' => 'select',
              'description' => 'These options will float ImageField images in content to the left or right and add margins',
              'features' => 
              array (
                0 => 'block',
                1 => 'node',
                2 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Float ImageField left',
                  'class' => 'fusion-float-imagefield-left',
                ),
                2 => 
                array (
                  'label' => 'Float ImageField right',
                  'class' => 'fusion-float-imagefield-right',
                ),
              ),
            ),
            'fusion-login' => 
            array (
              'title' => 'User login block styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'scripts' => 
              array (
                0 => 'js/jquery.overlabel.js',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Horizontal: puts user login block on a single line with label overlays (good for Header Top region) <span class="preview-icon" id="fusion-login-fusion-horiz-login"></span></span>',
                  'class' => 'fusion-horiz-login',
                ),
              ),
            ),
          ),
          'version' => '6.x-1.1',
          'project' => 'fusion',
          'datestamp' => '1304100144',
        ),
        'owner' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'fusion',
        'version' => '6.x-1.1',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '6.25',
        'description' => 'This platform is running Drupal 6.25',
      ),
    ),
    'profiles' => 
    array (
      'default' => 
      array (
        'name' => 'default',
        'filename' => '/data/disk/o1/static/platforms/pressflow-6.25.1-deltasolutions/profiles/default/default.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Pressflow',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
          'version' => NULL,
        ),
        'version' => '6.25',
      ),
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);